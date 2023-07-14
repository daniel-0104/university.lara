<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;

//login,register
Route::middleware(['auth_middle'])->group(function(){
    Route::redirect('/','loginPage');
    Route::get('loginPage',[AuthController::class,'loginPage'])->name('auth#loginPage');
    Route::get('registerPage',[AuthController::class,'registerPage'])->name('auth#registerPage');
});


//website home
Route::middleware(['auth'])->group(function(){
    Route::get('university',[AuthController::class,'websiteHome'])->name('website#home');

    //contact
    Route::prefix('contact')->group(function(){
        Route::get('homePage',[ContactController::class,'contactHomePage'])->name('contact#homePage');
        Route::post('update',[ContactController::class,'contactUpdate'])->name('contact#update');
    });
});
