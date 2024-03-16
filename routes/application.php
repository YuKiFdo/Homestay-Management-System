<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\SocialAppController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\KanbanController;
use App\Http\Controllers\ImportExportController;
use App\Http\Controllers\FilemanagerController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\JobController;

/************************ Application Routes Start ******************************/
Route::group(['middleware'=>'auth'],function(){
    Route::group(['prefix'=>'{language}'],function(){
        Route::group(['prefix'=>'applications'],function(){
            Route::group(['prefix'=>'support','as'=>'support.'],function(){
                Route::get('support-ticket',[SupportController::class,'index'])->name('support_ticket');
                Route::get('support-details',[SupportController::class,'detail'])->name('support_detail');
                Route::get('new-ticket',[SupportController::class,'newTicket'])->name('new_ticket');
            });
    
            Route::group(['prefix'=>'job','as'=>'job.'],function(){
                Route::get('job-search',[JobController::class,'index'])->name('job_search');
                Route::get('job-search-list',[JobController::class,'list'])->name('job_search_list');
                Route::get('job-detail',[JobController::class,'detail'])->name('job_detail');
                Route::get('job-apply',[JobController::class,'apply'])->name('job_apply');
            });
        
            Route::group(['prefix'=>'email','as'=>'email.'],function(){
                Route::get('inbox',[EmailController::class,'index'])->name('inbox');
                Route::get('read',[EmailController::class,'read'])->name('read');
            });
        
            Route::get('chat',[ChatController::class,'index'])->name('chat');
        
            Route::group(['prefix'=>'ecommerce','as'=>'ecommerce.'],function(){
                Route::get('products',[EcommerceController::class,'index'])->name('products');
                Route::get('product-list',[EcommerceController::class,'productList'])->name('product_list');
                Route::get('product-detail',[EcommerceController::class,'productDetail'])->name('product_detail');
                Route::get('add-product',[EcommerceController::class,'addProduct'])->name('add_product');
                Route::get('cart',[EcommerceController::class,'cart'])->name('cart');
                Route::get('orders',[EcommerceController::class,'orders'])->name('orders');
                Route::get('sellers',[EcommerceController::class,'sellers'])->name('sellers');
                Route::get('invoice',[EcommerceController::class,'invoice'])->name('invoice');
            });
        
            Route::group(['prefix'=>'social','as'=>'social.'],function(){
                Route::get('profile',[SocialAppController::class,'index'])->name('profile');
                Route::get('profile-settings',[SocialAppController::class,'profileSetting'])->name('profile_settings');
                Route::get('timeline',[SocialAppController::class,'timeline'])->name('timeline');
                Route::get('activity',[SocialAppController::class,'activity'])->name('activity');
            });
        
            Route::group(['prefix'=>'project','as'=>'project.'],function(){
                Route::get('list',[ProjectController::class,'index'])->name('project_list');
                Route::get('project-detail',[ProjectController::class,'projectDetail'])->name('project_detail');
                Route::get('create',[ProjectController::class,'createProject'])->name('create_project');
            });
        
            Route::get('calendar',[CalendarController::class,'index'])->name('calendar');
        
            Route::group(['prefix'=>'user','as'=>'user.'],function(){
                Route::get('member',[UserController::class,'index'])->name('member');
                Route::get('grid',[UserController::class,'grid'])->name('grid');
                Route::get('list',[UserController::class,'list'])->name('list');
                Route::get('grid-style',[UserController::class,'gridStyle'])->name('grid_style');
                Route::get('group',[UserController::class,'userGroup'])->name('group');
                Route::get('add',[UserController::class,'add'])->name('add');
                Route::get('table',[UserController::class,'table'])->name('table');
            });
        
            Route::group(['prefix'=>'contact','as'=>'contact.'],function(){
                Route::get('grid',[ContactController::class,'index'])->name('grid');
                Route::get('list',[ContactController::class,'list'])->name('list');
                Route::get('create',[ContactController::class,'create'])->name('create');
            });
        
            Route::get('note',[NoteController::class,'index'])->name('note');
            Route::get('todo',[TodoController::class,'index'])->name('todo');
            Route::get('kanban',[KanbanController::class,'index'])->name('kanban');
        
            Route::group(['prefix'=>'import_export','as'=>'import_export.'],function(){
                Route::get('import',[ImportExportController::class,'index'])->name('import');
                Route::get('export',[ImportExportController::class,'export'])->name('export');
                Route::get('export-selected',[ImportExportController::class,'exportSelected'])->name('export_selected');
            });
        
            Route::get('filemanager',[FilemanagerController::class,'index'])->name('filemanager');
            Route::get('filemanager-list',[FilemanagerController::class,'list'])->name('filemanager_list');
            Route::get('task',[TaskController::class,'index'])->name('task');
            Route::get('bookmark',[BookmarkController::class,'index'])->name('bookmark'); 
            Route::get('support-ticket',[SupportController::class,'index'])->name('support_ticket');
            Route::get('support-details',[SupportController::class,'detail'])->name('support_detail');
            
        });
    });    
});
/************************ Application Routes Ends ******************************/