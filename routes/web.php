<?php

use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.pages.dashboard',[AdminHomeController::class,'index']);
})->name('AdminHome');
// Route::group(['prefix'=>'page','as'=>'pages.'] ,function(){
// Route::get('home',[PageController::class,'index'])->name('home');
// Route::get('majors',[PageController::class,'major'])->name('majors');
// Route::get('doctors',[PageController::class,'doctor'])->name('doctors');
// Route::get('contact',[PageController::class,'contact'])->name('contact');
// Route::post('ContactAction',[PageController::class,'ContactAction'])->name('ContactAction');

// });


