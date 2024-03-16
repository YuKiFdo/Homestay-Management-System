<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialAppController extends Controller {
    
    /**
     * Display social app profile of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $title = "Social App Profile";
        $description = "Some description for the page";
        return view('pages.applications.social.profile',compact('title','description'));
    }

    /**
     * Display social app profile setting of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function profileSetting(){
        $title = "Social App Profile Settings";
        $description = "Some description for the page";
        return view('pages.applications.social.profile_setting',compact('title','description'));
    }

    /**
     * Display social app profile timeline of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function timeline(){
        $title = "Social App Timeline";
        $description = "Some description for the page";
        return view('pages.applications.social.timeline',compact('title','description'));
    }

    /**
     * Display social app profile activity of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function activity(){
        $title = "Social App Activity";
        $description = "Some description for the page";
        return view('pages.applications.social.activity',compact('title','description'));
    }
}