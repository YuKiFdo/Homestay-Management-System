<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'auth'],function(){
    Route::group(['prefix'=>'{language}'],function(){
        Route::group(['prefix' =>'booking','as'=>'booking.'],function(){
            Route::get('view',[BookingController::class,'view'])->name('view');
            Route::post('store',[BookingController::class,'store'])->name('store');
            Route::get('list',[BookingController::class,'index'])->name('list');
            Route::get('edit/{id}',[BookingController::class,'edit'])->name('edit');
            Route::post('delete/{id}',[BookingController::class,'delete'])->name('delete');
        });
    });
});
