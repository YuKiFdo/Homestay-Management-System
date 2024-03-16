<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller {
    

    /**
     * Display blog one of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function one(){
        $title = "Blog One";
        $description = "Some description for the page";
        return view('pages.blog.one',compact('title','description'));
    }

    /**
     * Display blog two of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function two(){
        $title = "Blog Two";
        $description = "Some description for the page";
        return view('pages.blog.two',compact('title','description'));
    }

    /**
     * Display blog three of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function three(){
        $title = "Blog Three";
        $description = "Some description for the page";
        return view('pages.blog.three',compact('title','description'));
    }

    /**
     * Display blog detail of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function detail(){
        $title = "Blog Detail";
        $description = "Some description for the page";
        return view('pages.blog.detail',compact('title','description'));
    }
}