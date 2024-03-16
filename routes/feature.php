<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\WidgetController;
use App\Http\Controllers\WizardController;
use App\Http\Controllers\IconController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\MapController;

/************************ Feature Routes Start ******************************/
Route::group(['middleware'=>'auth'],function(){
    Route::group(['prefix'=>'{language}'],function(){        
        Route::group(['prefix'=>'chart','as'=>'chart.'],function(){    
            Route::get('chartjs',[ChartController::class,'index'])->name('chartjs');
            Route::get('google',[ChartController::class,'google'])->name('google');
            Route::get('peity',[ChartController::class,'peity'])->name('peity');
            Route::get('apexchart',[ChartController::class,'apexchart'])->name('apexchart');
        });
        
        Route::group(['prefix'=>'form','as'=>'form.'],function(){    
            Route::get('basic',[FormController::class,'index'])->name('basic');
            Route::get('layout',[FormController::class,'layout'])->name('layout');
            Route::get('element',[FormController::class,'element'])->name('element');
            Route::get('component',[FormController::class,'component'])->name('component');
            Route::get('validation',[FormController::class,'validation'])->name('validation');
        });
        
        Route::group(['prefix'=>'table','as'=>'table.'],function(){    
            Route::get('basic',[TableController::class,'index'])->name('basic');
            Route::get('data',[TableController::class,'data'])->name('data');
        });
        
        Route::group(['prefix'=>'widget','as'=>'widget.'],function(){    
            Route::get('chart',[WidgetController::class,'index'])->name('chart');
            Route::get('mixed',[WidgetController::class,'mixed'])->name('mixed');
            Route::get('card',[WidgetController::class,'card'])->name('card');
        });
        
        Route::group(['prefix'=>'wizard','as'=>'wizard.'],function(){    
            Route::get('one',[WizardController::class,'index'])->name('one');
            Route::get('two',[WizardController::class,'two'])->name('two');
            Route::get('three',[WizardController::class,'three'])->name('three');
            Route::get('four',[WizardController::class,'four'])->name('four');
            Route::get('five',[WizardController::class,'five'])->name('five');
        });
        
        Route::group(['prefix'=>'icon','as'=>'icon.'],function(){    
            Route::get('unicon',[IconController::class,'unicon'])->name('unicon');
            Route::get('awesome',[IconController::class,'awesome'])->name('awesome');
            Route::get('lineawesome',[IconController::class,'lineawesome'])->name('lineawesome');
        });
        
        Route::get('editor',[EditorController::class,'index'])->name('editor');
        
        Route::group(['prefix'=>'map','as'=>'map.'],function(){    
            Route::get('google',[MapController::class,'google'])->name('google');
            Route::get('leaflet',[MapController::class,'leaflet'])->name('leaflet');
            Route::get('vector',[MapController::class,'vector'])->name('vector');            
        });
    });
});
/************************ Feature Routes Ends ******************************/