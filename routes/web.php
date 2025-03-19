<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'page','as'=>'pages.'] ,function(){
Route::get('home',[PageController::class,'index'])->name('home');


});


