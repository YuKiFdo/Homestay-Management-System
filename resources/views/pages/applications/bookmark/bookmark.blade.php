@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.bookmark-menu-title') }}</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.bookmark-menu-title') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    <div class="bookmark-page bookmark-page--grid mb-30">
        <div class="row">
            <div class="columns-1 col-lg-4 col-md-5 col-sm-12">
                <div class="bookmark-sidebar">

                    <div class="note-sidebar">
                        <div class="card border-0 shadow-none">
                            <div class="card-body px-15 pt-30">
                                <div class="px-3">
                                    <a href="#" class="btn btn-primary btn-default btn-rounded btn-block" data-bs-toggle="modal" data-bs-target="#taskModal"> <img src="{{ asset('assets/img/svg/plus.svg') }}" alt="plus" class="svg">
                                        Add New Folder</a>
                                </div>
                                <div class="note-types task-types">
                                    <ul class="nav  mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-selected="true"><img src="{{ asset('assets/img/svg/folder.svg') }}" alt="folder" class="svg"> Designs</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-selected="false"><img src="{{ asset('assets/img/svg/folder.svg') }}" alt="folder" class="svg">
                                                Plugin</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-selected="false"><img src="{{ asset('assets/img/svg/folder.svg') }}" alt="folder" class="svg">
                                                Wireframe</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="pills-deleted-tab" data-bs-toggle="pill" href="#pills-deleted" role="tab" aria-selected="false"><img src="{{ asset('assets/img/svg/folder.svg') }}" alt="folder" class="svg">
                                                Prototype</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="columns-2 col-lg-8 col-md-7 col-sm-12 mt-sm-30 mt-md-0">
                <div class="bookmark-page__list">
                    <div class="bookmark-single">
                        <div class="bookmark-card card">
                            <div class="card-header">
                                <h6 class="fs-500">Designs</h6>
                            </div>
                            <div class="card-body pt-30">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <div class="row mx-n1">
                                            <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30">

                                                <div class="card bookmark bookmark--grid">
                                                    <div class="bookmark__image">
                                                        <div class="like-icon">
                                                            <button type="button" class="content-center">
                                                                <i class="las la-star color-warning"></i>
                                                            </button>
                                                        </div>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-15 py-20">
                                                        <div class="bookmark__body text-capitalize">
                                                            <h6 class="card-title">File Manager Design</h6>
                                                            <a href="#">https://themeforest.net/ninjadash
                                                                react-admin</a>
                                                        </div>
                                                        <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                            <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                            </button>
                                                            <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30">

                                                <div class="card bookmark bookmark--grid">
                                                    <div class="bookmark__image">
                                                        <div class="like-icon">
                                                            <button type="button" class="content-center">
                                                                <i class="las la-star color-warning"></i>
                                                            </button>
                                                        </div>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark2.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-15 py-20">
                                                        <div class="bookmark__body text-capitalize">
                                                            <h6 class="card-title">Dashboard Design Structure</h6>
                                                            <a href="#">https://themeforest.net/ninjadash
                                                                react-admin</a>
                                                        </div>
                                                        <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                            <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                            </button>
                                                            <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30">

                                                <div class="card bookmark bookmark--grid">
                                                    <div class="bookmark__image">
                                                        <div class="like-icon">
                                                            <button type="button" class="content-center">
                                                                <i class="las la-star color-warning"></i>
                                                            </button>
                                                        </div>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark3.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-15 py-20">
                                                        <div class="bookmark__body text-capitalize">
                                                            <h6 class="card-title">ninjadash New Features</h6>
                                                            <a href="#">https://themeforest.net/ninjadash
                                                                react-admin</a>
                                                        </div>
                                                        <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                            <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                            </button>
                                                            <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30">

                                                <div class="card bookmark bookmark--grid">
                                                    <div class="bookmark__image">
                                                        <div class="like-icon">
                                                            <button type="button" class="content-center">
                                                                <i class="las la-star color-warning"></i>
                                                            </button>
                                                        </div>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark4.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-15 py-20">
                                                        <div class="bookmark__body text-capitalize">
                                                            <h6 class="card-title">Snow Covered Mountain</h6>
                                                            <a href="#">https://themeforest.net/ninjadash
                                                                react-admin</a>
                                                        </div>
                                                        <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                            <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                            </button>
                                                            <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30">

                                                <div class="card bookmark bookmark--grid">
                                                    <div class="bookmark__image">
                                                        <div class="like-icon">
                                                            <button type="button" class="content-center">
                                                                <i class="las la-star color-warning"></i>
                                                            </button>
                                                        </div>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-15 py-20">
                                                        <div class="bookmark__body text-capitalize">
                                                            <h6 class="card-title">File Manager Design</h6>
                                                            <a href="#">https://themeforest.net/ninjadash
                                                                react-admin</a>
                                                        </div>
                                                        <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                            <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                            </button>
                                                            <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30">

                                                <div class="card bookmark bookmark--grid">
                                                    <div class="bookmark__image">
                                                        <div class="like-icon">
                                                            <button type="button" class="content-center">
                                                                <i class="las la-star color-warning"></i>
                                                            </button>
                                                        </div>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark2.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-15 py-20">
                                                        <div class="bookmark__body text-capitalize">
                                                            <h6 class="card-title">Dashboard Design Structure</h6>
                                                            <a href="#">https://themeforest.net/ninjadash
                                                                react-admin</a>
                                                        </div>
                                                        <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                            <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                            </button>
                                                            <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30">

                                                <div class="card bookmark bookmark--grid">
                                                    <div class="bookmark__image">
                                                        <div class="like-icon">
                                                            <button type="button" class="content-center">
                                                                <i class="las la-star color-warning"></i>
                                                            </button>
                                                        </div>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark3.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-15 py-20">
                                                        <div class="bookmark__body text-capitalize">
                                                            <h6 class="card-title">ninjadash New Features</h6>
                                                            <a href="#">https://themeforest.net/ninjadash
                                                                react-admin</a>
                                                        </div>
                                                        <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                            <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                            </button>
                                                            <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30">

                                                <div class="card bookmark bookmark--grid">
                                                    <div class="bookmark__image">
                                                        <div class="like-icon">
                                                            <button type="button" class="content-center">
                                                                <i class="las la-star color-warning"></i>
                                                            </button>
                                                        </div>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark4.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-15 py-20">
                                                        <div class="bookmark__body text-capitalize">
                                                            <h6 class="card-title">Snow Covered Mountain</h6>
                                                            <a href="#">https://themeforest.net/ninjadash
                                                                react-admin</a>
                                                        </div>
                                                        <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                            <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                            </button>
                                                            <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <div class="task-single">
                                            <div class="row mx-n1">
                                                <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30 px-10">

                                                    <div class="card bookmark bookmark--grid">
                                                        <div class="bookmark__image">
                                                            <div class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="las la-star color-warning"></i>
                                                                </button>
                                                            </div>
                                                            <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark.png') }}" alt="digital-chair"></a>
                                                        </div>
                                                        <div class="card-body px-15 py-20">
                                                            <div class="bookmark__body text-capitalize">
                                                                <h6 class="card-title">File Manager Design</h6>
                                                                <a href="#">https://themeforest.net/ninjadash
                                                                    react-admin</a>
                                                            </div>
                                                            <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                                <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                                </button>
                                                                <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                    Remove
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30 px-10">

                                                    <div class="card bookmark bookmark--grid">
                                                        <div class="bookmark__image">
                                                            <div class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="las la-star color-warning"></i>
                                                                </button>
                                                            </div>
                                                            <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark2.png') }}" alt="digital-chair"></a>
                                                        </div>
                                                        <div class="card-body px-15 py-20">
                                                            <div class="bookmark__body text-capitalize">
                                                                <h6 class="card-title">Dashboard Design Structure</h6>
                                                                <a href="#">https://themeforest.net/ninjadash
                                                                    react-admin</a>
                                                            </div>
                                                            <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                                <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                                </button>
                                                                <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                    Remove
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30 px-10">

                                                    <div class="card bookmark bookmark--grid">
                                                        <div class="bookmark__image">
                                                            <div class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="las la-star color-warning"></i>
                                                                </button>
                                                            </div>
                                                            <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark3.png') }}" alt="digital-chair"></a>
                                                        </div>
                                                        <div class="card-body px-15 py-20">
                                                            <div class="bookmark__body text-capitalize">
                                                                <h6 class="card-title">ninjadash New Features</h6>
                                                                <a href="#">https://themeforest.net/ninjadash
                                                                    react-admin</a>
                                                            </div>
                                                            <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                                <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                                </button>
                                                                <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                    Remove
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30 px-10">

                                                    <div class="card bookmark bookmark--grid">
                                                        <div class="bookmark__image">
                                                            <div class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="las la-star color-warning"></i>
                                                                </button>
                                                            </div>
                                                            <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark4.png') }}" alt="digital-chair"></a>
                                                        </div>
                                                        <div class="card-body px-15 py-20">
                                                            <div class="bookmark__body text-capitalize">
                                                                <h6 class="card-title">Snow Covered Mountain</h6>
                                                                <a href="#">https://themeforest.net/ninjadash
                                                                    react-admin</a>
                                                            </div>
                                                            <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                                <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                                </button>
                                                                <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                    Remove
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30 px-10">

                                                    <div class="card bookmark bookmark--grid">
                                                        <div class="bookmark__image">
                                                            <div class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="las la-star color-warning"></i>
                                                                </button>
                                                            </div>
                                                            <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark.png') }}" alt="digital-chair"></a>
                                                        </div>
                                                        <div class="card-body px-15 py-20">
                                                            <div class="bookmark__body text-capitalize">
                                                                <h6 class="card-title">File Manager Design</h6>
                                                                <a href="#">https://themeforest.net/ninjadash
                                                                    react-admin</a>
                                                            </div>
                                                            <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                                <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                                </button>
                                                                <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                    Remove
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30 px-10">

                                                    <div class="card bookmark bookmark--grid">
                                                        <div class="bookmark__image">
                                                            <div class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="las la-star color-warning"></i>
                                                                </button>
                                                            </div>
                                                            <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark2.png') }}" alt="digital-chair"></a>
                                                        </div>
                                                        <div class="card-body px-15 py-20">
                                                            <div class="bookmark__body text-capitalize">
                                                                <h6 class="card-title">Dashboard Design Structure</h6>
                                                                <a href="#">https://themeforest.net/ninjadash
                                                                    react-admin</a>
                                                            </div>
                                                            <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                                <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                                </button>
                                                                <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                    Remove
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30 px-10">

                                                    <div class="card bookmark bookmark--grid">
                                                        <div class="bookmark__image">
                                                            <div class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="las la-star color-warning"></i>
                                                                </button>
                                                            </div>
                                                            <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark3.png') }}" alt="digital-chair"></a>
                                                        </div>
                                                        <div class="card-body px-15 py-20">
                                                            <div class="bookmark__body text-capitalize">
                                                                <h6 class="card-title">ninjadash New Features</h6>
                                                                <a href="#">https://themeforest.net/ninjadash
                                                                    react-admin</a>
                                                            </div>
                                                            <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                                <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                                </button>
                                                                <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                    Remove
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30 px-10">

                                                    <div class="card bookmark bookmark--grid">
                                                        <div class="bookmark__image">
                                                            <div class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="las la-star color-warning"></i>
                                                                </button>
                                                            </div>
                                                            <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark4.png') }}" alt="digital-chair"></a>
                                                        </div>
                                                        <div class="card-body px-15 py-20">
                                                            <div class="bookmark__body text-capitalize">
                                                                <h6 class="card-title">Snow Covered Mountain</h6>
                                                                <a href="#">https://themeforest.net/ninjadash
                                                                    react-admin</a>
                                                            </div>
                                                            <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                                <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                                </button>
                                                                <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                    Remove
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                        <div class="row mx-n1">
                                            <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30 px-10">

                                                <div class="card bookmark bookmark--grid">
                                                    <div class="bookmark__image">
                                                        <div class="like-icon">
                                                            <button type="button" class="content-center">
                                                                <i class="las la-star color-warning"></i>
                                                            </button>
                                                        </div>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-15 py-20">
                                                        <div class="bookmark__body text-capitalize">
                                                            <h6 class="card-title">File Manager Design</h6>
                                                            <a href="#">https://themeforest.net/ninjadash
                                                                react-admin</a>
                                                        </div>
                                                        <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                            <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                            </button>
                                                            <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30 px-10">

                                                <div class="card bookmark bookmark--grid">
                                                    <div class="bookmark__image">
                                                        <div class="like-icon">
                                                            <button type="button" class="content-center">
                                                                <i class="las la-star color-warning"></i>
                                                            </button>
                                                        </div>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark2.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-15 py-20">
                                                        <div class="bookmark__body text-capitalize">
                                                            <h6 class="card-title">Dashboard Design Structure</h6>
                                                            <a href="#">https://themeforest.net/ninjadash
                                                                react-admin</a>
                                                        </div>
                                                        <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                            <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                            </button>
                                                            <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30 px-10">

                                                <div class="card bookmark bookmark--grid">
                                                    <div class="bookmark__image">
                                                        <div class="like-icon">
                                                            <button type="button" class="content-center">
                                                                <i class="las la-star color-warning"></i>
                                                            </button>
                                                        </div>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark3.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-15 py-20">
                                                        <div class="bookmark__body text-capitalize">
                                                            <h6 class="card-title">ninjadash New Features</h6>
                                                            <a href="#">https://themeforest.net/ninjadash
                                                                react-admin</a>
                                                        </div>
                                                        <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                            <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                            </button>
                                                            <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30 px-10">

                                                <div class="card bookmark bookmark--grid">
                                                    <div class="bookmark__image">
                                                        <div class="like-icon">
                                                            <button type="button" class="content-center">
                                                                <i class="las la-star color-warning"></i>
                                                            </button>
                                                        </div>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark4.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-15 py-20">
                                                        <div class="bookmark__body text-capitalize">
                                                            <h6 class="card-title">Snow Covered Mountain</h6>
                                                            <a href="#">https://themeforest.net/ninjadash
                                                                react-admin</a>
                                                        </div>
                                                        <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                            <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                            </button>
                                                            <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30 px-10">

                                                <div class="card bookmark bookmark--grid">
                                                    <div class="bookmark__image">
                                                        <div class="like-icon">
                                                            <button type="button" class="content-center">
                                                                <i class="las la-star color-warning"></i>
                                                            </button>
                                                        </div>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-15 py-20">
                                                        <div class="bookmark__body text-capitalize">
                                                            <h6 class="card-title">File Manager Design</h6>
                                                            <a href="#">https://themeforest.net/ninjadash
                                                                react-admin</a>
                                                        </div>
                                                        <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                            <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                            </button>
                                                            <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30 px-10">

                                                <div class="card bookmark bookmark--grid">
                                                    <div class="bookmark__image">
                                                        <div class="like-icon">
                                                            <button type="button" class="content-center">
                                                                <i class="las la-star color-warning"></i>
                                                            </button>
                                                        </div>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark2.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-15 py-20">
                                                        <div class="bookmark__body text-capitalize">
                                                            <h6 class="card-title">Dashboard Design Structure</h6>
                                                            <a href="#">https://themeforest.net/ninjadash
                                                                react-admin</a>
                                                        </div>
                                                        <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                            <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                            </button>
                                                            <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30 px-10">

                                                <div class="card bookmark bookmark--grid">
                                                    <div class="bookmark__image">
                                                        <div class="like-icon">
                                                            <button type="button" class="content-center">
                                                                <i class="las la-star color-warning"></i>
                                                            </button>
                                                        </div>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark3.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-15 py-20">
                                                        <div class="bookmark__body text-capitalize">
                                                            <h6 class="card-title">ninjadash New Features</h6>
                                                            <a href="#">https://themeforest.net/ninjadash
                                                                react-admin</a>
                                                        </div>
                                                        <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                            <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                            </button>
                                                            <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30 px-10">

                                                <div class="card bookmark bookmark--grid">
                                                    <div class="bookmark__image">
                                                        <div class="like-icon">
                                                            <button type="button" class="content-center">
                                                                <i class="las la-star color-warning"></i>
                                                            </button>
                                                        </div>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark4.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-15 py-20">
                                                        <div class="bookmark__body text-capitalize">
                                                            <h6 class="card-title">Snow Covered Mountain</h6>
                                                            <a href="#">https://themeforest.net/ninjadash
                                                                react-admin</a>
                                                        </div>
                                                        <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                            <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                            </button>
                                                            <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-deleted" role="tabpanel" aria-labelledby="pills-deleted-tab">
                                        <div class="row mx-n1">
                                            <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30 px-10">

                                                <div class="card bookmark bookmark--grid">
                                                    <div class="bookmark__image">
                                                        <div class="like-icon">
                                                            <button type="button" class="content-center">
                                                                <i class="las la-star color-warning"></i>
                                                            </button>
                                                        </div>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-15 py-20">
                                                        <div class="bookmark__body text-capitalize">
                                                            <h6 class="card-title">File Manager Design</h6>
                                                            <a href="#">https://themeforest.net/ninjadash
                                                                react-admin</a>
                                                        </div>
                                                        <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                            <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                            </button>
                                                            <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30 px-10">

                                                <div class="card bookmark bookmark--grid">
                                                    <div class="bookmark__image">
                                                        <div class="like-icon">
                                                            <button type="button" class="content-center">
                                                                <i class="las la-star color-warning"></i>
                                                            </button>
                                                        </div>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark2.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-15 py-20">
                                                        <div class="bookmark__body text-capitalize">
                                                            <h6 class="card-title">Dashboard Design Structure</h6>
                                                            <a href="#">https://themeforest.net/ninjadash
                                                                react-admin</a>
                                                        </div>
                                                        <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                            <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                            </button>
                                                            <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30 px-10">

                                                <div class="card bookmark bookmark--grid">
                                                    <div class="bookmark__image">
                                                        <div class="like-icon">
                                                            <button type="button" class="content-center">
                                                                <i class="las la-star color-warning"></i>
                                                            </button>
                                                        </div>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark3.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-15 py-20">
                                                        <div class="bookmark__body text-capitalize">
                                                            <h6 class="card-title">ninjadash New Features</h6>
                                                            <a href="#">https://themeforest.net/ninjadash
                                                                react-admin</a>
                                                        </div>
                                                        <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                            <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                            </button>
                                                            <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30 px-10">

                                                <div class="card bookmark bookmark--grid">
                                                    <div class="bookmark__image">
                                                        <div class="like-icon">
                                                            <button type="button" class="content-center">
                                                                <i class="las la-star color-warning"></i>
                                                            </button>
                                                        </div>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark4.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-15 py-20">
                                                        <div class="bookmark__body text-capitalize">
                                                            <h6 class="card-title">Snow Covered Mountain</h6>
                                                            <a href="#">https://themeforest.net/ninjadash
                                                                react-admin</a>
                                                        </div>
                                                        <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                            <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                            </button>
                                                            <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30 px-10">

                                                <div class="card bookmark bookmark--grid">
                                                    <div class="bookmark__image">
                                                        <div class="like-icon">
                                                            <button type="button" class="content-center">
                                                                <i class="las la-star color-warning"></i>
                                                            </button>
                                                        </div>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-15 py-20">
                                                        <div class="bookmark__body text-capitalize">
                                                            <h6 class="card-title">File Manager Design</h6>
                                                            <a href="#">https://themeforest.net/ninjadash
                                                                react-admin</a>
                                                        </div>
                                                        <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                            <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                            </button>
                                                            <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30 px-10">

                                                <div class="card bookmark bookmark--grid">
                                                    <div class="bookmark__image">
                                                        <div class="like-icon">
                                                            <button type="button" class="content-center">
                                                                <i class="las la-star color-warning"></i>
                                                            </button>
                                                        </div>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark2.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-15 py-20">
                                                        <div class="bookmark__body text-capitalize">
                                                            <h6 class="card-title">Dashboard Design Structure</h6>
                                                            <a href="#">https://themeforest.net/ninjadash
                                                                react-admin</a>
                                                        </div>
                                                        <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                            <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                            </button>
                                                            <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30 px-10">

                                                <div class="card bookmark bookmark--grid">
                                                    <div class="bookmark__image">
                                                        <div class="like-icon">
                                                            <button type="button" class="content-center">
                                                                <i class="las la-star color-warning"></i>
                                                            </button>
                                                        </div>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark3.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-15 py-20">
                                                        <div class="bookmark__body text-capitalize">
                                                            <h6 class="card-title">ninjadash New Features</h6>
                                                            <a href="#">https://themeforest.net/ninjadash
                                                                react-admin</a>
                                                        </div>
                                                        <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                            <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                            </button>
                                                            <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="cus-xl-3 col-lg-6 col-md-12 col-sm-6 col-12 mb-30 px-10">

                                                <div class="card bookmark bookmark--grid">
                                                    <div class="bookmark__image">
                                                        <div class="like-icon">
                                                            <button type="button" class="content-center">
                                                                <i class="las la-star color-warning"></i>
                                                            </button>
                                                        </div>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/bookmark4.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-15 py-20">
                                                        <div class="bookmark__body text-capitalize">
                                                            <h6 class="card-title">Snow Covered Mountain</h6>
                                                            <a href="#">https://themeforest.net/ninjadash
                                                                react-admin</a>
                                                        </div>
                                                        <div class="bookmark__button d-flex mt-15 flex-wrap">
                                                            <button class="btn btn-primary btn-sm btn-squared border-0 " data-bs-toggle="modal" data-bs-target="#taskModal2">Edit
                                                            </button>
                                                            <button class="btn btn-sm btn-squared btn-outline-light color-light px-15 color-light">
                                                                Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade task-modal" id="taskModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <h5 class="modal-title">Add Bookmark</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <img src="{{ asset('assets/img/svg/x.svg') }}" alt="x" class="svg">
                    </button>
                </div>
                <form action="/">
                    <div class="form-group mb-20 mt-20">
                        <input type="text" class="form-control" placeholder="Title">
                    </div>
                    <div class="form-group mb-15">
                        <input type="text" class="form-control" placeholder="Web Url">
                    </div>
                </form>
                <div class="modal-footer m-n15">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Add Bookmark</button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade task-modal" id="taskModal2" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Bookmark</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <img src="{{ asset('assets/img/svg/x.svg') }}" alt="x" class="svg">
                    </button>
                </div>
                <form action="/">
                    <div class="form-group mb-20 mt-20">
                        <input type="text" class="form-control" placeholder="Dashboard design stucture">
                    </div>
                    <div class="form-group mb-15">
                        <input type="text" class="form-control" placeholder="https://themeforest.net/ninjadashg">
                    </div>
                </form>
                <div class="modal-footer m-n15">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection