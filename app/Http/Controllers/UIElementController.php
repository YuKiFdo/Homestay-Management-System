<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UIElementController extends Controller {     
    
    /**
     * Display alert of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $title = "Alert";
        $description = "Some description for the page";
        return view('pages.ui.alert',compact('title','description'));
    }

    /**
     * Display avatar of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function avatar(){
        $title = "Avatar";
        $description = "Some description for the page";
        return view('pages.ui.avatar',compact('title','description'));
    }

    /**
     * Display badge of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function badge(){
        $title = "Badge";
        $description = "Some description for the page";
        return view('pages.ui.badge',compact('title','description'));
    }

    /**
     * Display breadcrumps of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function breadcrumps(){
        $title = "Breadcrumps";
        $description = "Some description for the page";
        return view('pages.ui.breadcrumps',compact('title','description'));
    }

    /**
     * Display button of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function button(){
        $title = "Button";
        $description = "Some description for the page";
        return view('pages.ui.button',compact('title','description'));
    }

    /**
     * Display card of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function card(){
        $title = "Card";
        $description = "Some description for the page";
        return view('pages.ui.card',compact('title','description'));
    }

    /**
     * Display carousel of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function carousel(){
        $title = "Carousel";
        $description = "Some description for the page";
        return view('pages.ui.carousel',compact('title','description'));
    }

    /**
     * Display checkbox of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function checkbox(){
        $title = "Checkbox";
        $description = "Some description for the page";
        return view('pages.ui.checkbox',compact('title','description'));
    }

    /**
     * Display collapse of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function collapse(){
        $title = "Collapse";
        $description = "Some description for the page";
        return view('pages.ui.collapse',compact('title','description'));
    }

    /**
     * Display comments of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function comments(){
        $title = "Comments";
        $description = "Some description for the page";
        return view('pages.ui.comments',compact('title','description'));
    }

    /**
     * Display dashboard base of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function dashboardBase(){
        $title = "Dashboard Base";
        $description = "Some description for the page";
        return view('pages.ui.dashboard_base',compact('title','description'));
    }

    /**
     * Display datepicker base of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function datepicker(){
        $title = "Date Picker";
        $description = "Some description for the page";
        return view('pages.ui.datepicker',compact('title','description'));
    }

    /**
     * Display drawer base of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function drawer(){
        $title = "Drawer";
        $description = "Some description for the page";
        return view('pages.ui.drawer',compact('title','description'));
    }

    /**
     * Display drag & drop of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function dragDrop(){
        $title = "Drag & Drop";
        $description = "Some description for the page";
        return view('pages.ui.drag_drop',compact('title','description'));
    }

    /**
     * Display dropdown of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function dropdown(){
        $title = "Dropdown";
        $description = "Some description for the page";
        return view('pages.ui.dropdown',compact('title','description'));
    }

    /**
     * Display empty of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function empty(){
        $title = "Empty";
        $description = "Some description for the page";
        return view('pages.ui.empty',compact('title','description'));
    }

    /**
     * Display grid of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function grid(){
        $title = "Grid";
        $description = "Some description for the page";
        return view('pages.ui.grid',compact('title','description'));
    }

    /**
     * Display input of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function input(){
        $title = "Input";
        $description = "Some description for the page";
        return view('pages.ui.input',compact('title','description'));
    }

    /**
     * Display list of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function list(){
        $title = "List";
        $description = "Some description for the page";
        return view('pages.ui.list',compact('title','description'));
    }

    /**
     * Display menu of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function menu(){
        $title = "Menu";
        $description = "Some description for the page";
        return view('pages.ui.menu',compact('title','description'));
    }

    /**
     * Display message of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function message(){
        $title = "Message";
        $description = "Some description for the page";
        return view('pages.ui.message',compact('title','description'));
    }

    /**
     * Display modals of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function modals(){
        $title = "Modals";
        $description = "Some description for the page";
        return view('pages.ui.modals',compact('title','description'));
    }

    /**
     * Display notification of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function notification(){
        $title = "Notification";
        $description = "Some description for the page";
        return view('pages.ui.notification',compact('title','description'));
    }

    /**
     * Display page header of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function pageHeader(){
        $title = "Page Header";
        $description = "Some description for the page";
        return view('pages.ui.page_header',compact('title','description'));
    }

    /**
     * Display pagination of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function pagination(){
        $title = "Pagination";
        $description = "Some description for the page";
        return view('pages.ui.pagination',compact('title','description'));
    }

    /**
     * Display progress of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function progress(){
        $title = "Progress";
        $description = "Some description for the page";
        return view('pages.ui.progress',compact('title','description'));
    }

    /**
     * Display radio of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function radio(){
        $title = "Radio";
        $description = "Some description for the page";
        return view('pages.ui.radio',compact('title','description'));
    }

    /**
     * Display rate of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function rate(){
        $title = "Rate";
        $description = "Some description for the page";
        return view('pages.ui.rate',compact('title','description'));
    }

    /**
     * Display result of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function result(){
        $title = "Result";
        $description = "Some description for the page";
        return view('pages.ui.result',compact('title','description'));
    }

    /**
     * Display select of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function select(){
        $title = "Select";
        $description = "Some description for the page";
        return view('pages.ui.select',compact('title','description'));
    }

    /**
     * Display skeleton of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function skeleton(){
        $title = "Skeleton";
        $description = "Some description for the page";
        return view('pages.ui.skeleton',compact('title','description'));
    }

    /**
     * Display slider of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function slider(){
        $title = "Slider";
        $description = "Some description for the page";
        return view('pages.ui.slider',compact('title','description'));
    }

    /**
     * Display spinner of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function spinner(){
        $title = "Spinner";
        $description = "Some description for the page";
        return view('pages.ui.spinner',compact('title','description'));
    }

    /**
     * Display statistic of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function statistic(){
        $title = "Statistic";
        $description = "Some description for the page";
        return view('pages.ui.statistics',compact('title','description'));
    }

    /**
     * Display steps of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function steps(){
        $title = "Steps";
        $description = "Some description for the page";
        return view('pages.ui.steps',compact('title','description'));
    }

    /**
     * Display switch of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function switch(){
        $title = "Switch";
        $description = "Some description for the page";
        return view('pages.ui.switch',compact('title','description'));
    }

    /**
     * Display tab of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function tab(){
        $title = "Tabs";
        $description = "Some description for the page";
        return view('pages.ui.tab',compact('title','description'));
    }

    /**
     * Display tags of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function tags(){
        $title = "Tags";
        $description = "Some description for the page";
        return view('pages.ui.tags',compact('title','description'));
    }

    /**
     * Display timeline of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function timeline(){
        $title = "Timeline";
        $description = "Some description for the page";
        return view('pages.ui.timeline',compact('title','description'));
    }

    /**
     * Display timeline2 of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function timeline2(){
        $title = "Timeline2";
        $description = "Some description for the page";
        return view('pages.ui.timeline2',compact('title','description'));
    }

    /**
     * Display timeline3 of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function timeline3(){
        $title = "Timeline3";
        $description = "Some description for the page";
        return view('pages.ui.timeline3',compact('title','description'));
    }

    /**
     * Display timepicker of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function timepicker(){
        $title = "TimePicker";
        $description = "Some description for the page";
        return view('pages.ui.timepicker',compact('title','description'));
    }

    /**
     * Display uploads of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function uploads(){
        $title = "Upload";
        $description = "Some description for the page";
        return view('pages.ui.upload',compact('title','description'));
    }
}