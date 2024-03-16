<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportController extends Controller {
    
    /**
     * Display support ticket of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $title = "Support Ticket";
        $description = "Some description for the page";
        return view('pages.applications.support.support_ticket',compact('title','description'));
    }

    /**
     * Display support ticket detail of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function detail(){
        $title = "Support Ticket Details";
        $description = "Some description for the page";
        return view('pages.applications.support.support_detail',compact('title','description'));
    }

    /**
     * Display new ticket of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function newTicket(){
        $title = "New Ticket";
        $description = "Some description for the page";
        return view('pages.applications.support.new_ticket',compact('title','description'));
    }
}