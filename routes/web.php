<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GetWordAudioController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SearchController;
use Google\Service\SearchConsole;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::any('/change-language',function(){
    $url=url()->previous();
    $url=str_replace(['https://ed-vie.com','http://ed-vie.com'],'',$url);
    $lang= (str_contains($url, 'vi')) ? 'ed' : 'vi';
    $langPrevious= (str_contains($url, 'ed')) ? 'ed' : 'vi';
    $url=str_replace($langPrevious,$lang,$url);
    return redirect()->away(url($url));
})->name('changeLang');

Route::prefix('vi')->group(function () {
    
    Route::get('/home', [HomeController::class, 'index'])->name('vi.home');
    Route::get('/',function () { 
        return redirect('home');
    });

    //Auth
    Route::get('/signup',[RegisterController::class,'index'])->name("vi.signup");
    Route::post('/signup',[RegisterController::class,'store'])->name('vi.signup.post');
    Route::get('/login',[LoginController::class,'index'])->name("vi.login");
    Route::post('/login', [LoginController::class,'check'])->name("vi.login.post");
    Route::get('/logout',[LoginController::class,'logout'])->name("vi.logout");

    //Search
    Route::post('/search', [SearchController::class, 'search'])->name("vi.toSearch");


    //Blog
    Route::get('/blog',[BlogController::class,'index'])->name('vi.blog');

    //Tin tuc
    Route::get('/news',[NewsController::class,'index'])->name('vi.news');
    Route::get('/news/{post}',[NewsController::class, 'news']);
});

Route::prefix('ed')->group(function () {
    
    Route::get('/home', [HomeController::class, 'index'])->name('ed.home');
    Route::get('/',function () { 
        return redirect('home');
    });
    //Auth
    Route::get('/signup',[RegisterController::class,'index'])->name("ed.signup");
    Route::post('/signup',[RegisterController::class,'store'])->name('ed.signup.post');
    Route::get('/login',[LoginController::class,'index'])->name("ed.login");
    Route::post('/login', [LoginController::class,'check'])->name("ed.login.post");
    Route::get('/logout',[LoginController::class,'logout'])->name("ed.logout");

    //Search
    Route::post('/search', [SearchController::class, 'search'])->name("ed.toSearch");


    //Blog
    Route::get('/blog',[BlogController::class,'index'])->name('ed.blog');

    //Tin tuc
    Route::get('/news',[NewsController::class,'index'])->name('ed.news');
    Route::get('/news/{post}',[NewsController::class, 'news']);
});

                                                    // ERROR = "route('vi.home') is not defined"
                                                    // Route::redirect('home',route('vi.home'));
                                                    // Route::redirect('signup',route('vi.signup'));
                                                    // Route::redirect('login',route('vi.login'));
                                                    // Route::redirect('logout',route('vi.logout'));
                                                    // Route::redirect('search/tu={word}',route('vi.searchWord',['word'=>'word']));
                                                    // Route::redirect('blog',route('vi.blog'));
                                                    // Route::redirect('news',route('vi.news'));
                                                    // Route::redirect('news/{post}','vi/news/{post}');

Route::get('',function () {
    return redirect()->route('vi.home');
});                                                    
Route::get('home',function () {
    return redirect()->route('vi.home');
});
Route::get('signup',function () {
    return redirect()->route('vi.signup');
});
Route::get('login',function () {
    return redirect()->route('vi.login');
});
Route::get('logout',function () {
    return redirect()->route('vi.logout');
});
Route::get('blog',function () {
    return redirect()->route('vi.blog');
});
Route::get('news',function () {
    return redirect()->route('vi.news');
});
Route::get('news/{post}',function ($post) {
    return redirect('../vi/news/'.$post);
});

