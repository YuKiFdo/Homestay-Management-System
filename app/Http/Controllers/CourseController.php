<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller {
    
    /**
     * Display course list of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $title = "Course List";
        $description = "Some description for the page";
        return view('pages.course.list',compact('title','description'));
    }

    /**
     * Display course detail of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function detail(){
        $title = "Course Detail";
        $description = "Some description for the page";
        return view('pages.course.detail',compact('title','description'));
    }
}