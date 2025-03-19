<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'page','as'=>'pages.'] ,function(){
Route::get('home',[PageController::class,'index'])->name('home');
Route::get('majors',[PageController::class,'major'])->name('majors');
Route::get('doctors',[PageController::class,'doctor'])->name('doctors');



});


