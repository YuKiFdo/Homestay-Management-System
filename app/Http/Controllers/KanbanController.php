<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KanbanController extends Controller {
    
    /**
     * Display kanban of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $title = "Kanban";
        $description = "Some description for the page";
        return view('pages.applications.kanban.kanban',compact('title','description'));
    }
}