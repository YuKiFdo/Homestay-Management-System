<?php

use App\Http\Controllers\CustomersController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'auth'],function(){
    Route::group(['prefix'=>'{language}'],function(){
        Route::group(['prefix' =>'list','as'=>'list.'],function(){
            Route::get('view',[CustomersController::class,'View'])->name('view');
        });
    });
});
