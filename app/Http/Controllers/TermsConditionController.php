<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsConditionController extends Controller {
    
    /**
     * Display terms and condition of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $title = "Terms & Condition";
        $description = "Some description for the page";
        return view('pages.terms.terms_and_condition',compact('title','description'));
    }
}