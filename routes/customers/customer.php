<?php

use App\Http\Controllers\CustomersController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'auth'],function(){
    Route::group(['prefix'=>'{language}'],function(){
        Route::group(['prefix' =>'customer','as'=>'customer.'],function(){
            Route::get('view',[CustomersController::class,'viewPanel'])->name('view');
        });
    });
});
