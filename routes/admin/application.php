<?php

use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'auth'],function(){
    Route::group(['prefix'=>'{language}'],function(){
        Route::group(['prefix' =>'application','as'=>'application.'],function(){
            Route::post('update',[ApplicationController::class,'update'])->name('update');
            Route::get('config',[ApplicationController::class,'viewConfig'])->name('config');
            Route::get('perms',[ApplicationController::class,'noPerm'])->name('perms');
        });
    });
});
