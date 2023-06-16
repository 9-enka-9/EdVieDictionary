<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SearchController extends Controller
{

    private $errorWord = "Không tìm thấy từ này.";
    private $errorExa = "Không có ví dụ cho từ này.";
    private $wordView = "layouts.search";
    protected $from = 'vi';
    protected $to = 'ed';

    /**
     * Search words
     */
    public function search(Request $request){
        $word = $request->get('search');
        $lang = $request->get('lang');
        if($lang == 'ede'){

            $foundWord = $this->selectViWord($word);
            if ($foundWord!=[]){
                $numbOfExa = $this->manyExa($foundWord);
                if ($numbOfExa!=0) {
                    return view($this->wordView,compact('foundWord', 'numbOfExa','lang'))->with('numbOfDef',1);
                } else {
                    return view($this->wordView,compact('foundWord', 'lang'))->with('numbOfDef',1)->with('errorExa', $this->errorExa);
                }
            } else {
                return view($this->wordView,compact('word','lang'))->with('errorMsg',$this->errorWord);
            }

        } else {

            $foundWord = $this->selectEdWord($word);
            $numbOfDef=0;
            if ($foundWord!==[]){
                $numbOfDef = $this->manyDefs($foundWord);
            }
            if ($foundWord!==[] && $numbOfDef>0){
                $numbOfExa = $this->manyExa($foundWord);
                if ($numbOfExa !== 0){
                    return view($this->wordView,compact('foundWord', 'numbOfDef', 'numbOfExa'));
                } else {
                    return view($this->wordView,compact('foundWord', 'numbOfDef'))->with(['errorExa' => $this->errorExa]);
                }
            } else {
                return view($this->wordView,['errorMsg' => $this->errorWord, "word" =>$word]);
            }

        }
        

        // $foundWord = $this->selectWord($word);
        // if ($foundWord!==[]){
        //     $numbOfDef = $this->manyDefs($foundWord);
        // }
        // if ($foundWord!==[] && $numbOfDef>0){
        //     $numbOfExa = $this->manyExa($foundWord);
        //     if ($numbOfExa !== 0){
        //         return view($this->wordView,compact('foundWord', 'numbOfDef', 'numbOfExa'));
        //     } else {
        //         return view($this->wordView,compact('foundWord', 'numbOfDef'))->with(['errorExa' => $this->errorExa]);
        //     }
        // } else {
        //     return view($this->wordView,['errorMsg' => $this->errorWord, "word" =>$word]);
        // }
    }

    private function manyExa ($foundWord){
        $numbOfExa = 0;
        if ($foundWord['cau_vd_3']!==""){
            $numbOfExa = 3;
        } else if ($foundWord['cau_vd_2']!==""){
            $numbOfExa = 2;
        } else if ($foundWord['cau_vd_1']!==""){
            $numbOfExa = 1;
        } else {
            $numbOfExa = 0;
        }
        return $numbOfExa;
    }

    /**
     * Return number of elements/definition of word array
     */
    private function manyDefs($foundWord){
        $numbOfDef = 0;
        if ($foundWord['nghia_4']!=="" && array_key_exists("nghia_4", $foundWord)){
            $numbOfDef = 4;
        } else if ($foundWord['nghia_3']!=="" && array_key_exists("nghia_4", $foundWord)){
            $numbOfDef = 3;
        } else if ($foundWord['nghia_2']!== "" && array_key_exists("nghia_4", $foundWord)){
            $numbOfDef = 2;
        } else if ($foundWord['nghia_1']!== "" && array_key_exists("nghia_4", $foundWord)){
            $numbOfDef = 1;
        }
        return $numbOfDef;
    }


    /**
     * Return array word has the same order of characters
     */
    private function selectEdWord($word){
        $foundWords = DB::connection('mysql2')->select("SELECT * FROM `noi_dung` WHERE `tu` = '$word'");
        $result=[];
        foreach ($foundWords as $foundWord) {
            $foundWordArr=(array) $foundWord;
            $foundWordStr= $foundWordArr["tu"];
            if (strtolower($foundWordStr) === strtolower($word) || strtolower($foundWordStr) === strtolower($word)." "){
                $result =$foundWordArr;
            }
        }
        return $result;
    }

    private function selectViWord($word){
        $foundWords = DB::connection('mysql2')->select("SELECT * FROM `noi_dung` WHERE `nghia_1` = '$word'");
        $result=[];
        foreach ($foundWords as $foundWord) {
            $foundWordArr = (array) $foundWord;
            $foundWordStr = $foundWordArr['nghia_1'];
            if (strtolower($foundWordStr) === strtolower($word) || strtolower($foundWordStr) === strtolower($word)." "){
                $result = $foundWordArr;
            }
        }
        return $result;
    }

    public function __construct()
    {
        
    }

}

// old algorithm
// $foundWords = DB::connection('mysql2')->select("SELECT * FROM `noi_dung` WHERE `nghia_1` = '$word'");
// $result=[];
// foreach ($foundWords as $foundWord) {
//     $foundWordArr = (array) $foundWord;
//     $foundWordStr = $foundWordArr['tu'];
//     if (strtolower($foundWordStr) === strtolower($word)){
//         $result = $foundWordArr;
//     }
// }
// return $result;