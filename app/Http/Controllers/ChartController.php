<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller {
    
    /**
     * Display chartjs of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $title = "ChartJs";
        $description = "Some description for the page";
        return view('pages.chart.chartjs',compact('title','description'));
    }

    /**
     * Display google chart of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function google(){
        $title = "Google Chart";
        $description = "Some description for the page";
        return view('pages.chart.google',compact('title','description'));
    }

    /**
     * Display peity chart of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function peity(){
        $title = "Peity Chart";
        $description = "Some description for the page";
        return view('pages.chart.peity',compact('title','description'));
    }

    /**
     * Display apexchart of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function apexchart(){
        $title = "ApexChart";
        $description = "Some description for the page";
        return view('pages.chart.apexchart',compact('title','description'));
    }
}
