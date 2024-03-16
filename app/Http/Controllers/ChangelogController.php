<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChangelogController extends Controller {
    
    /**
     * Display changelog of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){        
        $title = "Changelog";
        $description = "Some description for the page";
        return view('pages.changelog.changelog',compact('title','description'));
    }
}