@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-breadcrumb') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-breadcrumb') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Basic</h6>
                    </div>
                    <div class="card-body">
                        <ul class="dm-breadcrumb nav">
                            <li class="dm-breadcrumb__item">
                                <a href="#">
                                    Home
                                </a>
                                <span class="breadcrumb__seperator">
                                    <span class="la la-slash"></span>
                                </span>
                            </li>
                            <li class="dm-breadcrumb__item">
                                <a href="#">Application Center</a>
                                <span class="breadcrumb__seperator">
                                    <span class="la la-slash"></span>
                                </span>
                            </li>
                            <li class="dm-breadcrumb__item">
                                <a href="#">Application list</a>
                                <span class="breadcrumb__seperator">
                                    <span class="la la-slash"></span>
                                </span>
                            </li>
                            <li class="dm-breadcrumb__item">
                                <span>An Application</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Bread crumbs with drop down menu</h6>
                    </div>
                    <div class="card-body">
                        <ul class="dm-breadcrumb nav">
                            <li class="dm-breadcrumb__item">
                                <a href="#">
                                    Home
                                </a>
                                <span class="breadcrumb__seperator">
                                    <span class="la la-slash"></span>
                                </span>
                            </li>
                            <li class="dm-breadcrumb__item">
                                <a href="#">Application Center</a>
                                <span class="breadcrumb__seperator">
                                    <span class="la la-slash"></span>
                                </span>
                            </li>
                            <li class="dm-breadcrumb__item">
                                <div class="dropdown dropdown-hover">
                                    <a href="#" data-bs-toggle="dropdown">General</a>
                                    <span class="breadcrumb__seperator">
                                        <span class="la la-slash"></span>
                                    </span>
                                    <div class="dropdown-default">
                                        <a class="dropdown-item" href="#">Item One</a>
                                        <a class="dropdown-item" href="#">Item Two</a>
                                        <a class="dropdown-item" href="#">Item Three</a>

                                    </div>
                                </div>
                            </li>
                            <li class="dm-breadcrumb__item">
                                <span>An Application</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Basic</h6>
                    </div>
                    <div class="card-body">
                        <ul class="dm-breadcrumb nav">
                            <li class="dm-breadcrumb__item">
                                <a href="#">
                                    <span class="la la-home"></span>
                                </a>
                                <span class="breadcrumb__seperator">
                                    <span class="la la-slash"></span>
                                </span>
                            </li>
                            <li class="dm-breadcrumb__item">
                                <a href="#">Application Center</a>
                                <span class="breadcrumb__seperator">
                                    <span class="la la-slash"></span>
                                </span>
                            </li>
                            <li class="dm-breadcrumb__item">
                                <span>An Application</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Configuring the Separator</h6>
                    </div>
                    <div class="card-body">
                        <ul class="dm-breadcrumb nav">
                            <li class="dm-breadcrumb__item">
                                <a href="#">
                                    Home
                                </a>
                                <span class="breadcrumb__seperator">
                                    <span class="la la-angle-right"></span>
                                </span>
                            </li>
                            <li class="dm-breadcrumb__item">
                                <a href="#">Application Center</a>
                                <span class="breadcrumb__seperator">
                                    <span class="la la-angle-right"></span>
                                </span>
                            </li>
                            <li class="dm-breadcrumb__item">
                                <a href="#">Application list</a>
                                <span class="breadcrumb__seperator">
                                    <span class="la la-angle-right"></span>
                                </span>
                            </li>
                            <li class="dm-breadcrumb__item">
                                <span>An Application</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Configuring the Separator</h6>
                    </div>
                    <div class="card-body">
                        <ul class="dm-breadcrumb nav">
                            <li class="dm-breadcrumb__item">
                                <a href="#" class="me-1">Location : </a>
                            </li>
                            <li class="dm-breadcrumb__item">
                                <a href="#">Application Center</a>
                                <span class="breadcrumb__seperator">
                                    <span class="la la-angle-right"></span>
                                </span>
                            </li>
                            <li class="dm-breadcrumb__item">
                                <a href="#">Application list</a>
                                <span class="breadcrumb__seperator">
                                    <span class="la la-angle-right"></span>
                                </span>
                            </li>
                            <li class="dm-breadcrumb__item">
                                <span>An Application</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection