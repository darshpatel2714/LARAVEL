<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\donateController;
use App\Http\Controllers\reviewController;
use App\Http\Controllers\mailcontroller;
use App\Http\Controllers\pdfcontroller;
use App\Http\Controllers\contactcontroller;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',function(){
         return view('home');
 });
 Route::get('/admin',function(){
    return view('admin');
});
 Route::get('/login2',function(){
    return view('login1');
});

Route::get('/board',function(){
    return view('board');
});

Route::middleware(['auth:sanctum'])->get('/dashboard',function (){
    return view('dashboard');
})->name('dashboard');

Route::get('/mail',[mailcontroller::class,'index']);
Route::get('/mail2',[mailcontroller::class,'index2']);
Route::get('/pdf',[pdfcontroller::class,'pdf_fun']);

Route::get('/signup',[SignupController::class,'index']);
Route::post('/index',[SignUpController::class,'store'])->name('store_food');
Route::post('/signup',[SignUpController::class,'store'])->name('signup');
Route::get('/view',[SignUpController::class,'view']);
Route::get('/reviewadmin',[reviewController::class,'view']);
Route::post('/login2',[SignUpController::class,'login']);
Route::get('/logout',[\App\Http\Controllers\SignUpController::class,'logout']);

// Route::get('/donate',function() {
//     return view('admin/donate');22
Route::get('/donate',[donateController::class,'page']);
Route::post('/donatehere',[donateController::class,'store'])->name('store');


Route::get('/review',[reviewController::class,'indexx']);
Route::post('/indexx',[reviewController::class,'store'])->name('store_review');
Route::post('/review',[reviewController::class,'store'])->name('review');

Route::get('/contact',[contactcontroller::class,'indexx2']);
Route::post('/indexx2',[contactcontroller::class,'store'])->name('store_contact');
Route::post('/contact',[contactcontroller::class,'store'])->name('contact');

Route::get('/edit/{id}',[\App\Http\Controllers\SignUpcontroller::class,'edit']);
Route::post('/update/{id}',[\App\Http\Controllers\SignUpcontroller::class,'update']);
Route::get('/del/{id}',[\App\Http\Controllers\SignUpcontroller::class,'del']);

Route::get('/dashboard',[\App\Http\Controllers\SignUpcontroller::class,'dashboard']);

//Route::post('/product',[\App\Http\Controllers\ProductController::class,'store']);
Route::get('/image',[donateController::class,'show_gallery']);
