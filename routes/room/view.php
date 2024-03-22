<?php

use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'auth'],function(){
    Route::group(['prefix'=>'{language}'],function(){
        Route::group(['prefix' =>'view','as'=>'view.'],function(){
            Route::get('view',[RoomController::class,'View'])->name('view');
        });
    });
});
