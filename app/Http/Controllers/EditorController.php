<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorController extends Controller {
    
    /**
     * Display editor of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $title = "Editor";
        $description = "Some description for the page";
        return view('pages.editor.editor',compact('title','description'));
    }
}