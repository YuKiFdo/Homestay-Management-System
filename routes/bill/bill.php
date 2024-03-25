<?php

use App\Http\Controllers\BillController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'auth'],function(){
    Route::group(['prefix'=>'{language}'],function(){
        Route::group(['prefix' =>'bill','as'=>'bill.'],function(){
            Route::get('view',[BillController::class,'invoice'])->name('view');
        });
    });
});
