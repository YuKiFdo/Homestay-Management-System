<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller {
    
    /**
     * Display calendar of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $title = "Calendar";
        $description = "Some description for the page";
        return view('pages.applications.calendar.calendar',compact('title','description'));
    }
}