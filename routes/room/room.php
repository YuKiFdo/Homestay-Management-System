<?php

use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'auth'],function(){
    Route::group(['prefix'=>'{language}'],function(){
        Route::group(['prefix' =>'room','as'=>'room.'],function(){
            Route::get('view',[RoomController::class,'AddRoom'])->name('view');
        });
    });
});
