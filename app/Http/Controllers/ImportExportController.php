<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportExportController extends Controller {
    
    /**
     * Display import of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $title = "Import";
        $description = "Some description for the page";
        return view('pages.applications.import_export.import',compact('title','description'));
    }

    /**
     * Display export of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function export(){
        $title = "Export";
        $description = "Some description for the page";
        return view('pages.applications.import_export.export',compact('title','description'));
    }

    /**
     * Display export selected of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function exportSelected(){
        $title = "Export Selected";
        $description = "Some description for the page";
        return view('pages.applications.import_export.export_selected',compact('title','description'));
    }
}