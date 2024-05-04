<?php

use App\Http\Controllers\FoodsController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'auth'],function(){
    Route::group(['prefix'=>'{language}'],function(){
        Route::group(['prefix' =>'foods','as'=>'foods.'],function(){
            Route::get('view',[FoodsController::class,'view'])->name('view');
            Route::post('store',[FoodsController::class,'store'])->name('store');
            Route::get('list',[FoodsController::class,'index'])->name('list');
            Route::get('edit/{id}',[FoodsController::class,'edit'])->name('edit');
            Route::post('delete/{id}',[FoodsController::class,'delete'])->name('delete');
        });
    });
});
