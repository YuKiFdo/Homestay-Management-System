@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-message') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-message') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>Basic</h6>
                    </div>
                    <div class="card-body">
                        <div class="button-group flex-wrap justify-content-sm-start justify-content-center">
                            <button class="btn btn-primary btn-lg btn-squired btn-shadow-primary btn-message" data-messageType="default" data-messageIcon="check">Display Normal Message</button>
                        </div>
                    </div>
                </div>
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>Other types of message</h6>
                    </div>
                    <div class="card-body">
                        <div class="button-group flex-wrap justify-content-sm-start justify-content-center">
                            <button class="btn btn-outline-lighten fs-14 fw-500 btn-lg btn-message" data-messageType="success" data-messageIcon="check-circle">Success</button>
                            <button class="btn btn-outline-lighten fs-14 fw-500 btn-lg btn-message" data-messageType="warning" data-messageIcon="exclamation-circle">Warning</button>
                            <button class="btn btn-outline-lighten fs-14 fw-500 btn-lg btn-message" data-messageType="danger" data-messageIcon="times-circle">Error</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>Customize</h6>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap justify-content-sm-start justify-content-center">
                            <button class="btn btn-outline-lighten fs-14 fw-500 btn-lg btn-message" data-messageType="primary" data-messageIcon="check-circle" data-duration="10000">Customize display Duration</button>
                        </div>
                    </div>
                </div>
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>Loading</h6>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap justify-content-sm-start justify-content-center">
                            <button class="btn btn-outline-lighten fs-14 fw-500 btn-lg btn-message" data-messageType="primary" data-messageIcon="check-circle">Display a loading indicator</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="message-wrapper"></div>
@endsection