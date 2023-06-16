<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Go to main news page
     */
    public function index(){
        return view('news.news');
    }

    /**
     * Go to post
     */
    public function news($post){
        return view('news.post.'.$post);
    }
}
