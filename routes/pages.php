<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TermsConditionController;
use App\Http\Controllers\BlogController;

/************************ Pages Routes Start ******************************/
Route::group(['middleware'=>'auth'],function(){
    Route::group(['prefix'=>'{language}'],function(){
        Route::group(['prefix'=>'pages','as'=>'pages.'],function(){
            Route::get('setting',[PageController::class,'setting'])->name('setting');
            Route::get('gallery/gallery1',[PageController::class,'gallery1'])->name('gallery1');
            Route::get('gallery/gallery2',[PageController::class,'gallery2'])->name('gallery2');
            Route::get('pricing',[PageController::class,'pricing'])->name('pricing');
            Route::get('banner',[PageController::class,'banner'])->name('banner');
            Route::get('testimonial',[PageController::class,'testimonial'])->name('testimonial');
            Route::get('faq',[PageController::class,'faq'])->name('faq');
            Route::get('search/result',[PageController::class,'searchResult'])->name('search_result');
            Route::get('blank',[PageController::class,'blank'])->name('blank');
            Route::get('knowledge/base',[PageController::class,'knowledgeBase'])->name('knowledge_base');
            Route::get('knowledge/all-articles',[PageController::class,'articles'])->name('all_articles');
            Route::get('knowledge/article',[PageController::class,'article'])->name('article');
            Route::get('support/center',[PageController::class,'support'])->name('support');
            Route::get('dynamic-table',[PageController::class,'dynamicTable'])->name('dynamic_table');
            Route::get('maintenance',[PageController::class,'maintenance'])->name('maintenance');
            Route::get('404',[PageController::class,'not_found'])->name('404');
            Route::get('coming-soon',[PageController::class,'comingSoon'])->name('coming_soon');

            Route::group(['prefix'=>'course','as'=>'course.'],function(){
                Route::get('list',[CourseController::class,'index'])->name('list');
                Route::get('detail',[CourseController::class,'detail'])->name('detail');
            });

            Route::get('terms-and-condition',[TermsConditionController::class,'index'])->name('terms');

            Route::group(['prefix'=>'blog','as'=>'blog.'],function(){
                Route::get('one',[BlogController::class,'one'])->name('one');
                Route::get('two',[BlogController::class,'two'])->name('two');
                Route::get('three',[BlogController::class,'three'])->name('three');
                Route::get('detail',[BlogController::class,'detail'])->name('detail');
            });
        });
    });
});
/************************ Pages Routes Ends ******************************/
