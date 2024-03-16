<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommerceController extends Controller {
    
    /**
     * Display ecommerce products of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $title = "Ecommerce Products";
        $description = "Some description for the page";
        return view('pages.applications.ecommerce.products',compact('title','description'));
    }

    /**
     * Display ecommerce product list of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function productList(){
        $title = "Ecommerce Product List";
        $description = "Some description for the page";
        return view('pages.applications.ecommerce.product_list',compact('title','description'));
    }

    /**
     * Display ecommerce product details of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function productDetail(){
        $title = "Ecommerce Product Details";
        $description = "Some description for the page";
        return view('pages.applications.ecommerce.product_detail',compact('title','description'));
    }

    /**
     * Display ecommerce add product of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function addProduct(){
        $title = "Ecommerce Add Product";
        $description = "Some description for the page";
        return view('pages.applications.ecommerce.add_product',compact('title','description'));
    }

    /**
     * Display ecommerce cart of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function cart(){
        $title = "Ecommerce Cart";
        $description = "Some description for the page";
        return view('pages.applications.ecommerce.cart',compact('title','description'));
    }

    /**
     * Display ecommerce orders of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function orders(){
        $title = "Ecommerce Orders";
        $description = "Some description for the page";
        return view('pages.applications.ecommerce.orders',compact('title','description'));
    }

    /**
     * Display ecommerce sellers of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function sellers(){
        $title = "Ecommerce Sellers";
        $description = "Some description for the page";
        return view('pages.applications.ecommerce.sellers',compact('title','description'));
    }

    /**
     * Display ecommerce invoice of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function invoice(){
        $title = "Ecommerce Invoice";
        $description = "Some description for the page";
        return view('pages.applications.ecommerce.invoice',compact('title','description'));
    }
}