<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SaleRevenueController;

/************************ Dashboard Routes Start ******************************/
Route::group(['middleware'=>'auth'],function(){
    Route::group(['prefix'=>'{language}'],function(){
        Route::group(['prefix'=>'dashboards','as'=>'dashboard.'],function(){
            Route::get('main',[DashboardController::class,'index'])->name('main');
        });
    });
});
/************************ Dashboard Routes Ends ******************************/
