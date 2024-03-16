<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller {
    
    /**
     * Display setting of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function setting(){
        $title = "Setting";
        $description = "Some description for the page";
        return view('pages.settings.settings',compact('title','description'));
    }

    /**
     * Display gallery 1 of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function gallery1(){
        $title = "Gallery 1";
        $description = "Some description for the page";
        return view('pages.gallery.gallery1',compact('title','description'));
    }

    /**
     * Display gallery 2 of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function gallery2(){
        $title = "Gallery 2";
        $description = "Some description for the page";
        return view('pages.gallery.gallery2',compact('title','description'));
    }

    /**
     * Display pricing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function pricing(){
        $title = "Pricing";
        $description = "Some description for the page";
        return view('pages.pricing.pricing',compact('title','description'));
    }

    /**
     * Display banner of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function banner(){
        $title = "Banner";
        $description = "Some description for the page";
        return view('pages.banner.banner',compact('title','description'));
    }

    /**
     * Display testimonial of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function testimonial(){
        $title = "Testimonial";
        $description = "Some description for the page";
        return view('pages.testimonial.testimonial',compact('title','description'));
    }

    /**
     * Display faq of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function faq(){
        $title = "FAQ";
        $description = "Some description for the page";
        return view('pages.faq.faq',compact('title','description'));
    }

    /**
     * Display search result of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function searchResult(){
        $title = "Search Result";
        $description = "Some description for the page";
        return view('pages.search_result.search_result',compact('title','description'));
    }

    /**
     * Display blank of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function blank(){
        $title = "Blank";
        $description = "Some description for the page";
        return view('pages.blank.blank',compact('title','description'));
    }

    /**
     * Display knowledge base of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function knowledgeBase(){
        $title = "Knowledge Base";
        $description = "Some description for the page";
        return view('pages.knowledge.base',compact('title','description'));
    }

    /**
     * Display knowledge all articles of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function articles(){
        $title = "Knowledge All Articles";
        $description = "Some description for the page";
        return view('pages.knowledge.all_article',compact('title','description'));
    }

    /**
     * Display knowledge article of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function article(){
        $title = "Knowledge Article";
        $description = "Some description for the page";
        return view('pages.knowledge.article',compact('title','description'));
    }

    /**
     * Display support center of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function support(){
        $title = "Support Center";
        $description = "Some description for the page";
        return view('pages.support.support',compact('title','description'));
    }

    /**
     * Display dynamic table of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function dynamicTable(){
        $title = "Dynamic Table";
        $description = "Some description for the page";
        return view('pages.dynamic_table.dynamic_table',compact('title','description'));
    }

    /**
     * Display maintenance of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function maintenance(){
        $title = "Maintenance";
        $description = "Some description for the page";
        return view('pages.maintenance.maintenance',compact('title','description'));
    }

    /**
     * Display 404 of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function not_found(){
        $title = "404";
        $description = "Some description for the page";
        return view('pages.404.404',compact('title','description'));
    }

    /**
     * Display coming soon of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function comingSoon(){
        $title = "Coming Soon";
        $description = "Some description for the page";
        return view('pages.coming_soon.coming_soon',compact('title','description'));
    }
}