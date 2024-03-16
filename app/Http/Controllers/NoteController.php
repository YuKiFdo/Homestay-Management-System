<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller {
    
    /**
     * Display note of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $title = "Note";
        $description = "Some description for the page";
        return view('pages.applications.note.note',compact('title','description'));
    }
}