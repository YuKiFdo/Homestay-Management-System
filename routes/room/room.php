<?php

use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'auth'],function(){
    Route::group(['prefix'=>'{language}'],function(){
        Route::group(['prefix' =>'room','as'=>'room.'],function(){
            Route::get('view',[RoomController::class,'view'])->name('view');
            Route::get('list',[RoomController::class,'list'])->name('list');
            Route::get('edit/{id}',[RoomController::class,'edit'])->name('edit');
            Route::get('delete/{id}',[RoomController::class,'delete'])->name('delete');
        });
    });
});
