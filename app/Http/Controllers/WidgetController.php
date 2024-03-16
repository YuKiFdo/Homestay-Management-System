<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WidgetController extends Controller {
    
    /**
     * Display widget chart of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $title = "Widget Chart";
        $description = "Some description for the page";
        return view('pages.widget.chart',compact('title','description'));
    }

    /**
     * Display widget mixed of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function mixed(){
        $title = "Widget Mixed";
        $description = "Some description for the page";
        return view('pages.widget.mixed',compact('title','description'));
    }

    /**
     * Display widget card of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function card(){
        $title = "Widget Card";
        $description = "Some description for the page";
        return view('pages.widget.card',compact('title','description'));
    }
}