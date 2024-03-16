<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;

/************************ Crud Routes Start ******************************/
Route::group(['middleware'=>'auth'],function(){
    Route::group(['prefix'=>'{language}'],function(){
        Route::group(['prefix'=>'dog','as'=>'dog.'],function(){
            Route::get('list',[DogController::class,'index'])->name('list');
            Route::get('create',[DogController::class,'create'])->name('create');
            Route::post('store',[DogController::class,'store'])->name('store');
            Route::get('edit/{id}',[DogController::class,'edit'])->name('edit');
            Route::post('update/{id}',[DogController::class,'update'])->name('update');
            Route::post('delete/{id}',[DogController::class,'delete'])->name('delete');
        });
    });
});
/************************ Crud Routes Ends ******************************/
