<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

/************************ Crud Routes Start ******************************/
Route::group(['middleware'=>'auth'],function(){
    Route::group(['prefix'=>'{language}'],function(){
        Route::group(['prefix'=>'customer','as'=>'customer.'],function(){    
            Route::get('list',[CustomerController::class,'index'])->name('list');
            Route::get('create',[CustomerController::class,'create'])->name('create');
            Route::post('store',[CustomerController::class,'store'])->name('store');
            Route::get('edit/{id}',[CustomerController::class,'edit'])->name('edit');
            Route::post('update/{id}',[CustomerController::class,'update'])->name('update');
            Route::post('delete/{id}',[CustomerController::class,'delete'])->name('delete');
        });
    });    
});
/************************ Crud Routes Ends ******************************/