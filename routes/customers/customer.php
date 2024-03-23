<?php

use App\Http\Controllers\CustomersController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'auth'],function(){
    Route::group(['prefix'=>'{language}'],function(){
        Route::group(['prefix' =>'customer','as'=>'customer.'],function(){
            Route::get('view',[CustomersController::class,'viewPanel'])->name('view');
            Route::get('list',[CustomersController::class,'list'])->name('list');
            Route::get('edit/{id}',[CustomersController::class,'edit'])->name('edit');
            Route::get('delete/{id}',[CustomersController::class,'delete'])->name('delete');
        });
    });
});
