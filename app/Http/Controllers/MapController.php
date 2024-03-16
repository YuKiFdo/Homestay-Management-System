<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller {    

    /**
     * Display google map of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function google(){
        $title = "Google Map";
        $description = "Some description for the page";
        return view('pages.map.google',compact('title','description'));
    }

    /**
     * Display leaflet map of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function leaflet(){
        $title = "Leaflet Map";
        $description = "Some description for the page";
        return view('pages.map.leaflet',compact('title','description'));
    }

    /**
     * Display vector map of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function vector(){        
        $title = "Vector Map";
        $description = "Some description for the page";
        return view('pages.map.vector',compact('title','description'));
    }

}