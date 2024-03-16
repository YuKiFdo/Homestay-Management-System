<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookmarkController extends Controller {
    
    /**
     * Display bookmark of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $title = "Bookmark";
        $description = "Some description for the page";
        return view('pages.applications.bookmark.bookmark',compact('title','description'));
    }
}