<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller {
    
    /**
     * Display contact grid of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $title = "Contact Grid";
        $description = "Some description for the page";
        return view('pages.applications.contact.grid',compact('title','description'));
    }

    /**
     * Display contact create of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(){
        $title = "Create Contact";
        $description = "Some description for the page";
        return view('pages.applications.contact.create',compact('title','description'));
    }

    /**
     * Display contact list of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function list(){
        $title = "Contact List";
        $description = "Some description for the page";
        return view('pages.applications.contact.list',compact('title','description'));
    }
}