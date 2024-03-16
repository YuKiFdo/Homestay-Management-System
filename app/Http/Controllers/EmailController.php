<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller {
    
    /**
     * Display email inbox of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $title = "Email Inbox";
        $description = "Some description for the page";
        return view('pages.applications.email.inbox',compact('title','description'));
    }

    /**
     * Display email read of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function read(){
        $title = "Email Read";
        $description = "Some description for the page";
        return view('pages.applications.email.read',compact('title','description'));
    }
}