<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetWordAudioController extends Controller
{
    public function getAudio(Request $request){
        if($request->input('search')!==null){

            dd($request->input('search'));
            $txt=$request->input('search');
            $txt=htmlspecialchars($txt);
            $txt=rawurlencode($txt);
            $html=file_get_contents('https://translate.google.com.vn/translate_tts?ie=UTF-8&client=tw-ob&q='.$txt.'&tl=vi');
            $player="<audio autoplay><source src='data:audio/mpeg;base64,".base64_encode($html)."'></audio>";
            return $player;
        }
    }
}
