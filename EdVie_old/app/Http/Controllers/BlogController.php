<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Go to blog page
     */
    public function index() {
        return view('blog');
    }
}
