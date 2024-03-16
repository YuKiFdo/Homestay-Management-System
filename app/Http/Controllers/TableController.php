<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller {
    
    /**
     * Display basic table of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $title = "Basic Table";
        $description = "Some description for the page";
        return view('pages.table.basic',compact('title','description'));
    }

    /**
     * Display data table of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function data(){
        $title = "Data Table";
        $description = "Some description for the page";
        return view('pages.table.data',compact('title','description'));
    }
}