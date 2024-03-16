@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-page-header') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-page-header') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>Basic</h6>
                    </div>
                    <div class="card-body">
                        <div class="page-title-block">
                            <div class="page-title-wrap  wrapper-bordered">
                                <div class="page-title d-flex justify-content-between">
                                    <div class="page-title__left">
                                        <a href="#"><i class="las la-arrow-left"></i></a>
                                        <span class="title-text">Title</span>
                                        <span class="sub-title">This is a subtitle</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>White background mode</h6>
                    </div>
                    <div class="card-body">
                        <div class="page-title-block bg-lighter bg-container">
                            <div class="page-title-bg bg-white">
                                <div class="page-title-wrap ">
                                    <div class="page-title d-flex justify-content-between">
                                        <div class="page-title__left">
                                            <a href="#"><i class="las la-arrow-left"></i></a>
                                            <span class="title-text">Title</span>
                                            <span class="sub-title">This is a subtitle</span>
                                        </div>
                                        <div class="page-title__right">
                                            <div class="page-top-action d-flex">
                                                <a href="#" class="btn btn-outline-lighten btn-xs">Operation</a>
                                                <a href="#" class="btn btn-outline-lighten btn-xs">Operation</a>
                                                <a href="#" class="btn btn-primary btn-xs">Primary</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-info d-flex">
                                    <div class="page-info__item">
                                        <div class="page-info__single">
                                            <span class="info-title">Created :</span>
                                            <span class="info-text">David Miller</span>
                                        </div>
                                        <div class="page-info__single">
                                            <span class="info-title">Effective Time :</span>
                                            <span class="info-text">2017-10-10</span>
                                        </div>
                                    </div>
                                    <div class="page-info__item">
                                        <div class="page-info__single">
                                            <span class="info-title">Association :</span>
                                            <span class="info-text color-primary">421421</span>
                                        </div>
                                        <div class="page-info__single">
                                            <span class="info-title">Remarks :</span>
                                            <span class="info-list">
                                                <span>Gonghu Road,</span>
                                                <span>Xihu District, </span>
                                                <span> Hangzhou,</span>
                                                <span>Zhejiang,</span>
                                                <span>China</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="page-info__item">
                                        <div class="page-info__single">
                                            <span class="info-title">Creation Time :</span>
                                            <span class="info-text">2017-10-10</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>Use with breadcrumbs</h6>
                    </div>
                    <div class="card-body">
                        <div class="page-title-block">
                            <div class="page-title-wrap  wrapper-bordered">
                                <ul class="dm-breadcrumb nav">
                                    <li class="dm-breadcrumb__item">
                                        <a href="#"> First-level Menu </a>
                                        <span class="breadcrumb__seperator">
                                            <span class="la la-slash"></span>
                                        </span>
                                    </li>
                                    <li class="dm-breadcrumb__item">
                                        <a href="#">Second-level Menu</a>
                                        <span class="breadcrumb__seperator">
                                            <span class="la la-slash"></span>
                                        </span>
                                    </li>
                                    <li class="dm-breadcrumb__item">
                                        <span>Third-level Menu</span>
                                    </li>
                                </ul>
                                <div class="page-title d-flex justify-content-between">
                                    <div class="page-title__left">
                                        <a href="#"><i class="las la-arrow-left"></i></a>
                                        <span class="title-text">Title</span>
                                        <span class="sub-title">This is a subtitle</span>
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
@endsection