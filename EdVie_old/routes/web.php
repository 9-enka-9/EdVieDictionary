<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\SearchController;
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


Route::get('/', function () {
    return redirect('/home');
});

Route::middleware(['auth'])->group(function() {});

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Auth
Route::get('/signup',[RegisterController::class,'index'])->name("signup");
Route::post('/signup',[RegisterController::class,'store']);
Route::get('/login',[LoginController::class,'index'])->name("login");
Route::post('/login', [LoginController::class,'check']);
Route::get('/logout',[LoginController::class,'logout'])->name("logout");

//Search
Route::get('/search/tu={word}',[SearchController::class,'search'])->name('searchWord');
// Route::get('/search',function(){
//     return "Not found";
// });
Route::post('/search',function (Request $request) {
    $word = $request->input('search');
    $url= "/".$request->path()."/tu=".$word;
    return redirect()->away(url($url));
    // dd($url);
})->name("toSearch");

//Blog
Route::get('/blog',[BlogController::class,'index'])->name('blog');

//Tin tuc
Route::get('/news',[NewsController::class,'index'])->name('news');
Route::get('/news/{post}',[NewsController::class, 'news']);