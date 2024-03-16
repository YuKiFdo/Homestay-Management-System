<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller {
    
    /**
     * Display task app of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $title = "Task App";
        $description = "Some description for the page";
        return view('pages.applications.task.task',compact('title','description'));
    }
}