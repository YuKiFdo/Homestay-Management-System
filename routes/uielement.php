<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UIElementController;

/************************ UIElement Routes Start ******************************/
Route::group(['middleware'=>'auth'],function(){
    Route::group(['prefix'=>'{language}'],function(){
        Route::group(['prefix'=>'ui','as'=>'ui.'],function(){    
            Route::get('alert',[UIElementController::class,'index'])->name('alert');
            Route::get('avatar',[UIElementController::class,'avatar'])->name('avatar');
            Route::get('badge',[UIElementController::class,'badge'])->name('badge');
            Route::get('breadcrumps',[UIElementController::class,'breadcrumps'])->name('breadcrumps');
            Route::get('button',[UIElementController::class,'button'])->name('button');
            Route::get('card',[UIElementController::class,'card'])->name('card');
            Route::get('carousel',[UIElementController::class,'carousel'])->name('carousel');
            Route::get('checkbox',[UIElementController::class,'checkbox'])->name('checkbox');
            Route::get('collapse',[UIElementController::class,'collapse'])->name('collapse');
            Route::get('comments',[UIElementController::class,'comments'])->name('comments');
            Route::get('dashboard-base',[UIElementController::class,'dashboardBase'])->name('dashboard_base');
            Route::get('datepicker',[UIElementController::class,'datepicker'])->name('datepicker');
            Route::get('drawer',[UIElementController::class,'drawer'])->name('drawer');
            Route::get('drag-drop',[UIElementController::class,'dragDrop'])->name('drag_drop');
            Route::get('dropdown',[UIElementController::class,'dropdown'])->name('dropdown');
            Route::get('empty',[UIElementController::class,'empty'])->name('empty');
            Route::get('grid',[UIElementController::class,'grid'])->name('grid');
            Route::get('input',[UIElementController::class,'input'])->name('input');
            Route::get('list',[UIElementController::class,'list'])->name('list');
            Route::get('menu',[UIElementController::class,'menu'])->name('menu');
            Route::get('message',[UIElementController::class,'message'])->name('message');
            Route::get('modals',[UIElementController::class,'modals'])->name('modals');
            Route::get('notification',[UIElementController::class,'notification'])->name('notification');
            Route::get('page-header',[UIElementController::class,'pageHeader'])->name('page_header');
            Route::get('pagination',[UIElementController::class,'pagination'])->name('pagination');
            Route::get('progress',[UIElementController::class,'progress'])->name('progress');
            Route::get('radio',[UIElementController::class,'radio'])->name('radio');
            Route::get('rate',[UIElementController::class,'rate'])->name('rate');
            Route::get('result',[UIElementController::class,'result'])->name('result');
            Route::get('select',[UIElementController::class,'select'])->name('select');
            Route::get('skeleton',[UIElementController::class,'skeleton'])->name('skeleton');
            Route::get('slider',[UIElementController::class,'slider'])->name('slider');
            Route::get('spinner',[UIElementController::class,'spinner'])->name('spinner');
            Route::get('statistic',[UIElementController::class,'statistic'])->name('statistic');
            Route::get('steps',[UIElementController::class,'steps'])->name('steps');
            Route::get('switch',[UIElementController::class,'switch'])->name('switch');
            Route::get('tab',[UIElementController::class,'tab'])->name('tab');
            Route::get('tags',[UIElementController::class,'tags'])->name('tags');
            Route::get('timeline',[UIElementController::class,'timeline'])->name('timeline');
            Route::get('timeline2',[UIElementController::class,'timeline2'])->name('timeline2');
            Route::get('timeline3',[UIElementController::class,'timeline3'])->name('timeline3');
            Route::get('timepicker',[UIElementController::class,'timepicker'])->name('timepicker');
            Route::get('uploads',[UIElementController::class,'uploads'])->name('uploads');
        });
    });    
});
/************************ UIElement Routes Ends ******************************/