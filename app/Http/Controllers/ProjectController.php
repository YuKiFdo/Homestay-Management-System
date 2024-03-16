<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller {
    
    /**
     * Display project of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $title = "Project List";
        $description = "Some description for the page";
        return view('pages.applications.project.project',compact('title','description'));
    }

    /**
     * Display project detail of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function projectDetail(){
        $title = "Project Detail";
        $description = "Some description for the page";
        return view('pages.applications.project.project_detail',compact('title','description'));
    }

    /**
     * Display project create of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function createProject(){
        $title = "Create Project";
        $description = "Some description for the page";
        return view('pages.applications.project.create_project',compact('title','description'));
    }
}