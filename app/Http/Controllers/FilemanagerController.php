<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilemanagerController extends Controller {
    
    /**
     * Display filemanager of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $title = "Filemanager";
        $description = "Some description for the page";
        return view('pages.applications.filemanager.filemanager',compact('title','description'));
    }

     /**
     * Display filemanager list of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function list(){
        $title = "Filemanager List";
        $description = "Some description for the page";
        return view('pages.applications.filemanager.filemanager_list',compact('title','description'));
    }
}
