<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller {
    
    /**
     * Display basic form of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $title = "Basic Form";
        $description = "Some description for the page";
        return view('pages.form.basic',compact('title','description'));
    }

    /**
     * Display form layout of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function layout(){
        $title = "Form Layout";
        $description = "Some description for the page";
        return view('pages.form.layout',compact('title','description'));
    }

    /**
     * Display form element of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function element(){
        $title = "Form Element";
        $description = "Some description for the page";
        return view('pages.form.element',compact('title','description'));
    }

    /**
     * Display form component of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function component(){
        $title = "Form Component";
        $description = "Some description for the page";
        return view('pages.form.component',compact('title','description'));
    }

    /**
     * Display form validation of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function validation(){
        $title = "Form Validation";
        $description = "Some description for the page";
        return view('pages.form.validation',compact('title','description'));
    }
}