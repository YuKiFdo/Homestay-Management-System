<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller {
    
    /**
     * Display chat of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){        
        $title = "Chat";
        $description = "Some description for the page";
        return view('pages.applications.chat.chat',compact('title','description'));
    }
}