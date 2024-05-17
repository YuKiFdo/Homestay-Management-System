<?php

use App\Http\Controllers\FoodsController;
use App\Http\Controllers\OrderController;
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

Route::group(['middleware'=>'auth'],function(){
    Route::group(['prefix'=>'{language}'],function(){
        Route::group(['prefix' =>'order','as'=>'order.'],function(){
            Route::get('view',[OrderController::class,'view'])->name('view');
            Route::post('store',[OrderController::class,'store'])->name('store');
            Route::get('list',[OrderController::class,'index'])->name('list');
            Route::get('edit/{id}',[OrderController::class,'edit'])->name('edit');
            Route::post('delete/{id}',[OrderController::class,'delete'])->name('delete');
        });
    });
});
