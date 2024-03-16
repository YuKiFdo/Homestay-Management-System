@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="shop-breadcrumb">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('page_title.job_search') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>{{ trans('menu.job-menu-title') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('page_title.job_search') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mb-xl-50 mb-30">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="search-style-2 global-shadow ">
                        <form action="/" class="d-flex align-items-center">
                            <div class="job-search">
                                <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                                <input class="form-control border-0 box-shadow-none" type="search" placeholder="Job title, skills, or company" aria-label="Search">
                            </div>
                            <div class="location-search">
                                <img src="{{ asset('assets/img/svg/map-pin.svg') }}" alt="map-pin" class="svg">
                                <input class="form-control border-0 box-shadow-none" type="search" placeholder="Location" aria-label="Search">
                            </div>
                            <button class="btn btn-primary"><img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="products_page product_page--grid mb-30">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="columns-1 col-lg-4 col-md-5 col-sm-8">
                <div class="widget">
                    <div class="widget-header-title px-20 py-15">
                        <h6 class="d-flex align-content-center fw-500">
                            <img src="{{ asset('assets/img/svg/sliders.svg') }}" alt="sliders" class="svg"> Filters
                        </h6>
                    </div>
                    <div class="category_sidebar">
                        <aside class="product-sidebar-widget mb-30">
                            <div class="widget_title nocollapse">
                                <h6>Distance</h6>
                                <p class="mb-0 widget_title__distence">Within 30 miles of <strong>New York, NY</strong>
                                </p>
                            </div>
                            <div class="card border-0 shadow-none">
                                <div class="job-price-ranges">
                                    <div class="mb-0">
                                        <div class="section job-price-ranges-wrapper">
                                            <div class="price-slider my-15"></div>
                                            <div class="price-value-wrapper d-flex justify-content-between">
                                                <p class="job-value mb-0"></p>
                                                <p class="job-value2 mb-0"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <aside class="product-sidebar-widget mb-30">
                            <div class="widget_title" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="true" aria-controls="multiCollapseExample1">
                                <h6>job type</h6>
                            </div>
                            <div class="card border-0 shadow-none multi-collapse mt-10 collapse show" id="multiCollapseExample1">
                                <div class="product-brands">
                                    <ul>
                                        <li>
                                            <div class="checkbox-theme-default custom-checkbox ">
                                                <input class="checkbox" type="checkbox" id="check-7">
                                                <label for="check-7">
                                                    <span class="checkbox-text">
                                                        Freelance
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>

                                            <div class="checkbox-theme-default custom-checkbox ">
                                                <input class="checkbox" type="checkbox" id="check-8">
                                                <label for="check-8">
                                                    <span class="checkbox-text">
                                                        Full Time
                                                        <span class="item-numbers">54</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>

                                            <div class="checkbox-theme-default custom-checkbox ">
                                                <input class="checkbox" type="checkbox" id="check-9">
                                                <label for="check-9">
                                                    <span class="checkbox-text">
                                                        Part Time
                                                        <span class="item-numbers">78</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox-theme-default custom-checkbox ">
                                                <input class="checkbox" type="checkbox" id="check-10">
                                                <label for="check-10">
                                                    <span class="checkbox-text">
                                                        Internship
                                                        <span class="item-numbers">42</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox-theme-default custom-checkbox ">
                                                <input class="checkbox" type="checkbox" id="check-11">
                                                <label for="check-11">
                                                    <span class="checkbox-text">
                                                        Contract
                                                        <span class="item-numbers">35</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox-theme-default custom-checkbox ">
                                                <input class="checkbox" type="checkbox" id="check-12">
                                                <label for="check-12">
                                                    <span class="checkbox-text">
                                                        Temporary
                                                        <span class="item-numbers">64</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                        <aside class="product-sidebar-widget mb-30">
                            <div class="widget_title" data-bs-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="true" aria-controls="multiCollapseExample2">
                                <h6>Industry</h6>
                            </div>
                            <div class="card border-0 shadow-none multi-collapse mt-10 collapse show" id="multiCollapseExample2">
                                <div class="product-brands limit-list-item">
                                    <ul>
                                        <li>
                                            <div class="checkbox-theme-default custom-checkbox ">
                                                <input class="checkbox" type="checkbox" id="check-1">
                                                <label for="check-1">
                                                    <span class="checkbox-text">
                                                        Designer Graphics
                                                        <span class="item-numbers">25</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox-theme-default custom-checkbox ">
                                                <input class="checkbox" type="checkbox" id="check-2">
                                                <label for="check-2">
                                                    <span class="checkbox-text">
                                                        Development
                                                        <span class="item-numbers">54</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox-theme-default custom-checkbox ">
                                                <input class="checkbox" type="checkbox" id="check-3">
                                                <label for="check-3">
                                                    <span class="checkbox-text">
                                                        Electronic
                                                        <span class="item-numbers">78</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox-theme-default custom-checkbox ">
                                                <input class="checkbox" type="checkbox" id="check-4">
                                                <label for="check-4">
                                                    <span class="checkbox-text">
                                                        Management
                                                        <span class="item-numbers">42</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox-theme-default custom-checkbox ">
                                                <input class="checkbox" type="checkbox" id="check-5">
                                                <label for="check-5">
                                                    <span class="checkbox-text">
                                                        Finance
                                                        <span class="item-numbers">35</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox-theme-default custom-checkbox ">
                                                <input class="checkbox" type="checkbox" id="check-6">
                                                <label for="check-6">
                                                    <span class="checkbox-text">
                                                        Banking
                                                        <span class="item-numbers">64</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                        <aside class="product-sidebar-widget mb-30">
                            <div class="widget_title" data-bs-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="true" aria-controls="multiCollapseExample3">
                                <h6>Salary</h6>
                            </div>
                            <div class="card border-0 shadow-none multi-collapse mt-10 collapse show" id="multiCollapseExample3">
                                <div class="product-brands">
                                    <ul>
                                        <li>
                                            <div class="checkbox-theme-default custom-checkbox ">
                                                <input class="checkbox" type="checkbox" id="check-13">
                                                <label for="check-13">
                                                    <span class="checkbox-text">
                                                        Hourly
                                                        <span class="item-numbers">25</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox-theme-default custom-checkbox ">
                                                <input class="checkbox" type="checkbox" id="check-14">
                                                <label for="check-14">
                                                    <span class="checkbox-text">
                                                        Weekly
                                                        <span class="item-numbers">54</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox-theme-default custom-checkbox ">
                                                <input class="checkbox" type="checkbox" id="check-15">
                                                <label for="check-15">
                                                    <span class="checkbox-text">
                                                        Monthly
                                                        <span class="item-numbers">78</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox-theme-default custom-checkbox ">
                                                <input class="checkbox" type="checkbox" id="check-15">
                                                <label for="check-15">
                                                    <span class="checkbox-text">
                                                        Yearly
                                                        <span class="item-numbers">42</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                        <aside class="product-sidebar-widget">
                            <div class="widget_title" data-bs-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="true" aria-controls="multiCollapseExample4">
                                <h6>Date Posted</h6>
                            </div>
                            <div class="card border-0 shadow-none multi-collapse mt-10 collapse show" id="multiCollapseExample4">
                                <div class="product-brands">
                                    <ul>
                                        <li>
                                            <div class="checkbox-theme-default custom-checkbox ">
                                                <input class="checkbox" type="checkbox" id="check-16">
                                                <label for="check-16">
                                                    <span class="checkbox-text">
                                                        Last Hour
                                                        <span class="item-numbers">25</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox-theme-default custom-checkbox ">
                                                <input class="checkbox" type="checkbox" id="check-17">
                                                <label for="check-17">
                                                    <span class="checkbox-text">
                                                        Last 24 hours
                                                        <span class="item-numbers">54</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox-theme-default custom-checkbox ">
                                                <input class="checkbox" type="checkbox" id="check-18">
                                                <label for="check-18">
                                                    <span class="checkbox-text">
                                                        Last 7 days
                                                        <span class="item-numbers">78</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox-theme-default custom-checkbox ">
                                                <input class="checkbox" type="checkbox" id="check-19">
                                                <label for="check-19">
                                                    <span class="checkbox-text">
                                                        Last 14 days
                                                        <span class="item-numbers">42</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox-theme-default custom-checkbox ">
                                                <input class="checkbox" type="checkbox" id="check-20">
                                                <label for="check-20">
                                                    <span class="checkbox-text">
                                                        Last 30 days
                                                        <span class="item-numbers"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox-theme-default custom-checkbox ">
                                                <input class="checkbox" type="checkbox" id="check-21">
                                                <label for="check-21">
                                                    <span class="checkbox-text">
                                                        All
                                                        <span class="item-numbers"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="columns-2 col-lg-8 col-md-8 col-sm-6 mt-xl-0 mt-lg-30">
                <div class="shop_products_top_filter">
                    <div class="project-top-wrapper d-flex flex-wrap align-items-center">
                        <div class="project-top-left d-flex flex-wrap align-items-center">
                            <span class="project-result-showing fs-14 color-gray text-center mt-lg-0 mt-20">Showing
                                <span>1–8</span> of <span>86</span>
                                results</span>
                        </div>
                        <div class="project-top-right d-flex flex-wrap align-items-center">
                            <div class="project-category flex-wrap d-flex align-items-center">
                                <p class="fs-14 color-gray text-capitalize">sort by:</p>
                                <div class="project-tap">
                                    <div class="dm-select ">
                                        <select name="select-search" class="select-search form-control">
                                            <option value="01">All</option>
                                            <option value="02">Old</option>
                                            <option value="03" selected>Latest</option>
                                            <option value="04">New</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="project-icon-selected content-center mt-lg-0 mt-25">
                                <div class="listing-social-link pb-lg-0 pb-xs-2">
                                    <div class="icon-list-social d-flex">
                                        <a class="icon-list-social__link rounded-circle icon-list-social__style justify-content-center active ms-xl-50  me-15" href="jobSearch.html">
                                            <img src="{{ asset('assets/img/svg/grid.svg') }}" alt="grid" class="svg"></a>
                                        <a class="icon-list-social__link rounded-circle icon-list-social__style justify-content-center  " href="jobDetails.html">
                                            <img src="{{ asset('assets/img/svg/list.svg') }}" alt="list" class="svg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row product-page-list justify-content-center mt-20">
                    <div class="cus-xl-6 col-lg-6 col-md-11 col-12 mb-25 px-10">
                        <div class="card job job--grid">
                            <div class="h-100">
                                <div class="job-item px-25 pt-30 pb-25">
                                    <div class="card-body p-0  d-flex align-items-sm-center align-items-start  flex-sm-row flex-column">
                                        <div class="job-item__body text-capitalize">
                                            <div class="job-item__image d-flex align-items-center">
                                                <a href="#"><img class="job-item__image-img img-fluid" src="{{ asset('assets/img/stats.png') }}" alt="digital-chair"></a>
                                                <div class="job-item__title">
                                                    <a href="">
                                                        <h6 class="card-title">WordPress Plugins Developer</h6>
                                                    </a>
                                                    <span>New York,USA</span>
                                                </div>
                                            </div>
                                            <div class="job-item__content d-inline-flex flex-column">
                                                <div class="job-deadline">
                                                    <h6>Deadline:</h6>
                                                    <span>31 may 2021</span>
                                                </div>
                                                <div class="job-type">
                                                    <h6>Job Type:</h6>
                                                    <span>full time</span>
                                                </div>
                                                <div class="job-salery">
                                                    <h6>Salary:</h6>
                                                    <span>$70-$150 per month</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item__button d-flex flex-wrap my-sm-0 my-10">
                                            <button class="btn btn-default btn-squared btn-outline-none px-20">View details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cus-xl-6 col-lg-6 col-md-11 col-12 mb-25 px-10">
                        <div class="card job job--grid">
                            <div class="h-100">
                                <div class="job-item px-25 pt-30 pb-25">
                                    <div class="card-body p-0  d-flex align-items-sm-center align-items-start  flex-sm-row flex-column">
                                        <div class="job-item__body text-capitalize">
                                            <div class="job-item__image d-flex align-items-center">
                                                <a href="#"><img class="job-item__image-img img-fluid" src="{{ asset('assets/img/chrome.png') }}" alt="digital-chair"></a>
                                                <div class="job-item__title">
                                                    <a href="">
                                                        <h6 class="card-title">JavaScript Developer</h6>
                                                    </a>
                                                    <span>New York,USA</span>
                                                </div>
                                            </div>
                                            <div class="job-item__content d-inline-flex flex-column">
                                                <div class="job-deadline">
                                                    <h6>Deadline:</h6>
                                                    <span>31 may 2021</span>
                                                </div>
                                                <div class="job-type">
                                                    <h6>Job Type:</h6>
                                                    <span>full time</span>
                                                </div>
                                                <div class="job-salery">
                                                    <h6>Salary:</h6>
                                                    <span>$70-$150 per month</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item__button d-flex flex-wrap my-sm-0 my-10">
                                            <button class="btn btn-default btn-squared btn-outline-none px-20">View details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cus-xl-6 col-lg-6 col-md-11 col-12 mb-25 px-10">
                        <div class="card job job--grid">
                            <div class="h-100">
                                <div class="job-item px-25 pt-30 pb-25">
                                    <div class="card-body p-0  d-flex align-items-sm-center align-items-start  flex-sm-row flex-column">
                                        <div class="job-item__body text-capitalize">
                                            <div class="job-item__image d-flex align-items-center">
                                                <a href="#"><img class="job-item__image-img img-fluid" src="{{ asset('assets/img/dribbble.png') }}" alt="digital-chair"></a>
                                                <div class="job-item__title">
                                                    <a href="jobDetails.html">
                                                        <h6 class="card-title">Senior UI/UX Designer</h6>
                                                    </a>
                                                    <span>New York,USA</span>
                                                </div>
                                            </div>
                                            <div class="job-item__content d-inline-flex flex-column">
                                                <div class="job-deadline">
                                                    <h6>Deadline:</h6>
                                                    <span>31 may 2021</span>
                                                </div>
                                                <div class="job-type">
                                                    <h6>Job Type:</h6>
                                                    <span>full time</span>
                                                </div>
                                                <div class="job-salery">
                                                    <h6>Salary:</h6>
                                                    <span>$70-$150 per month</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item__button d-flex flex-wrap my-sm-0 my-10">
                                            <button class="btn btn-default btn-squared btn-outline-none px-20">View details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cus-xl-6 col-lg-6 col-md-11 col-12 mb-25 px-10">
                        <div class="card job job--grid">
                            <div class="h-100">
                                <div class="job-item px-25 pt-30 pb-25">
                                    <div class="card-body p-0  d-flex align-items-sm-center align-items-start  flex-sm-row flex-column">
                                        <div class="job-item__body text-capitalize">
                                            <div class="job-item__image d-flex align-items-center">
                                                <a href="#"><img class="job-item__image-img img-fluid" src="{{ asset('assets/img/slack.png') }}" alt="digital-chair"></a>
                                                <div class="job-item__title">
                                                    <a href="jobDetails.html">
                                                        <h6 class="card-title">Frontend Developer</h6>
                                                    </a>
                                                    <span>New York,USA</span>
                                                </div>
                                            </div>
                                            <div class="job-item__content d-inline-flex flex-column">
                                                <div class="job-deadline">
                                                    <h6>Deadline:</h6>
                                                    <span>31 may 2021</span>
                                                </div>
                                                <div class="job-type">
                                                    <h6>Job Type:</h6>
                                                    <span>full time</span>
                                                </div>
                                                <div class="job-salery">
                                                    <h6>Salary:</h6>
                                                    <span>$70-$150 per month</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item__button d-flex flex-wrap my-sm-0 my-10">
                                            <button class="btn btn-default btn-squared btn-outline-none px-20">View details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cus-xl-6 col-lg-6 col-md-11 col-12 mb-25 px-10">
                        <div class="card job job--grid">
                            <div class="h-100">
                                <div class="job-item px-25 pt-30 pb-25">
                                    <div class="card-body p-0  d-flex align-items-sm-center align-items-start  flex-sm-row flex-column">
                                        <div class="job-item__body text-capitalize">
                                            <div class="job-item__image d-flex align-items-center">
                                                <a href="#"><img class="job-item__image-img img-fluid" src="{{ asset('assets/img/tags.png') }}" alt="digital-chair"></a>
                                                <div class="job-item__title">
                                                    <a href="jobDetails.html">
                                                        <h6 class="card-title">Visual Graphic Designer</h6>
                                                    </a>
                                                    <span>New York,USA</span>
                                                </div>
                                            </div>
                                            <div class="job-item__content d-inline-flex flex-column">
                                                <div class="job-deadline">
                                                    <h6>Deadline:</h6>
                                                    <span>31 may 2021</span>
                                                </div>
                                                <div class="job-type">
                                                    <h6>Job Type:</h6>
                                                    <span>full time</span>
                                                </div>
                                                <div class="job-salery">
                                                    <h6>Salary:</h6>
                                                    <span>$70-$150 per month</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item__button d-flex flex-wrap my-sm-0 my-10">
                                            <button class="btn btn-default btn-squared btn-outline-none px-20">View details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cus-xl-6 col-lg-6 col-md-11 col-12 mb-25 px-10">
                        <div class="card job job--grid">
                            <div class="h-100">
                                <div class="job-item px-25 pt-30 pb-25">
                                    <div class="card-body p-0  d-flex align-items-sm-center align-items-start  flex-sm-row flex-column">
                                        <div class="job-item__body text-capitalize">
                                            <div class="job-item__image d-flex align-items-center">
                                                <a href="#"><img class="job-item__image-img img-fluid" src="{{ asset('assets/img/firefox.png') }}" alt="digital-chair"></a>
                                                <div class="job-item__title">
                                                    <a href="jobDetails.html">
                                                        <h6 class="card-title">Support Engineer</h6>
                                                    </a>
                                                    <span>New York,USA</span>
                                                </div>
                                            </div>
                                            <div class="job-item__content d-inline-flex flex-column">
                                                <div class="job-deadline">
                                                    <h6>Deadline:</h6>
                                                    <span>31 may 2021</span>
                                                </div>
                                                <div class="job-type">
                                                    <h6>Job Type:</h6>
                                                    <span>full time</span>
                                                </div>
                                                <div class="job-salery">
                                                    <h6>Salary:</h6>
                                                    <span>$70-$150 per month</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item__button d-flex flex-wrap my-sm-0 my-10">
                                            <button class="btn btn-default btn-squared btn-outline-none px-20">View details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="user-pagination">
                            <div class="d-flex justify-content-sm-end justify-content-end mt-1 mb-30">
                                <nav class="dm-page ">
                                    <ul class="dm-pagination d-flex">
                                        <li class="dm-pagination__item">
                                            <a href="#" class="dm-pagination__link pagination-control"><span class="la la-angle-left"></span></a>
                                            <a href="#" class="dm-pagination__link"><span class="page-number">1</span></a>
                                            <a href="#" class="dm-pagination__link active"><span class="page-number">2</span></a>
                                            <a href="#" class="dm-pagination__link"><span class="page-number">3</span></a>
                                            <a href="#" class="dm-pagination__link pagination-control"><span class="page-number">...</span></a>
                                            <a href="#" class="dm-pagination__link"><span class="page-number">12</span></a>
                                            <a href="#" class="dm-pagination__link pagination-control"><span class="la la-angle-right"></span></a>
                                            <a href="#" class="dm-pagination__option">
                                            </a>
                                        </li>
                                        <li class="dm-pagination__item">
                                            <div class="paging-option">
                                                <select name="page-number" class="page-selection">
                                                    <option value="20">20/page</option>
                                                    <option value="40">40/page</option>
                                                    <option value="60">60/page</option>
                                                </select>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection