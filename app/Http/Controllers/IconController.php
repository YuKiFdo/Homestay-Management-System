<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IconController extends Controller {
    
    /**
     * Display unicon icons of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function unicon(){
        $title = "Unicon Icons";
        $description = "Some description for the page";
        return view('pages.icon.unicon',compact('title','description'));
    }

    /**
     * Display font awesome icons of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function awesome(){
        $title = "Font Awesome Icons";
        $description = "Some description for the page";
        return view('pages.icon.font_awesome',compact('title','description'));
    }

    /**
     * Display line awesome icons of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function lineawesome(){
        $title = "Line Awesome Icons";
        $description = "Some description for the page";
        return view('pages.icon.line_awesome',compact('title','description'));
    }
}