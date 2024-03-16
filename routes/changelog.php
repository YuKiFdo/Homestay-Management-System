<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChangelogController;

/************************ Changelog Routes Start ******************************/
Route::group(['middleware'=>'auth'],function(){
    Route::group(['prefix'=>'{language}'],function(){
        Route::get('changelog',[ChangelogController::class,'index'])->name('changelog');
    });    
});
/************************ Changelog Routes Ends ******************************/