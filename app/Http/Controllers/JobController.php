<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller {
    
    /**
     * Display job search of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $title = "Job Search";
        $description = "Some description for the page";
        return view('pages.applications.job.job_search',compact('title','description'));
    }

    /**
     * Display job search list of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function list(){
        $title = "Job Search List";
        $description = "Some description for the page";
        return view('pages.applications.job.job_search_list',compact('title','description'));
    }

    /**
     * Display job detail of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function detail(){
        $title = "Job Detail";
        $description = "Some description for the page";
        return view('pages.applications.job.job_detail',compact('title','description'));
    }

    /**
     * Display job apply of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function apply(){
        $title = "Job Apply";
        $description = "Some description for the page";
        return view('pages.applications.job.job_apply',compact('title','description'));
    }
}