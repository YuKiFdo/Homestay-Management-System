<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller {
    
    /**
     * Display todo of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $title = "Todo";
        $description = "Some description for the page";
        return view('pages.applications.todo.todo',compact('title','description'));
    }
}