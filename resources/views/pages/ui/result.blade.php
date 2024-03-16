@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-result') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-result') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="dm-notice">
                    <div class="card card-default card-md mb-4">
                        <div class="card-header">
                            <h6>Basic</h6>
                        </div>
                        <div class="card-body">
                            <div class="dm-notice__content">
                                <div class="dm-notice__top text-center">
                                    <div class="dm-notice__icon bg-success">
                                        <i class="fas fa-check color-white"></i>
                                    </div>
                                    <div class="dm-notice__text">
                                        <h4>Successfully Purchased Cloud Server ECS!</h4>
                                        <p>Order number: 2017182818828182881 Cloud server configuration takes 1-5 minutes, please wait.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="dm-notice">
                    <div class="card card-default card-md mb-4">
                        <div class="card-header">
                            <h6>Info</h6>
                        </div>
                        <div class="card-body">
                            <div class="dm-notice__content">
                                <div class="dm-notice__top text-center">
                                    <div class="dm-notice__icon bg-info">
                                        <i class="fas fa-exclamation color-white"></i>
                                    </div>
                                    <div class="dm-notice__text">
                                        <h4>There are some problems with your operation.</h4>
                                    </div>
                                </div>
                                <div class="dm-notice__action d-flex justify-content-center">
                                    <a href="#" class="btn btn-sm btn-primary">Go Console</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="dm-notice">
                    <div class="card card-default card-md mb-4">
                        <div class="card-header">
                            <h6>Warning</h6>
                        </div>
                        <div class="card-body">
                            <div class="dm-notice__content">
                                <div class="dm-notice__top text-center">
                                    <div class="dm-notice__icon bg-info">
                                        <i class="fas fa-exclamation-triangle color-white"></i>
                                    </div>
                                    <div class="dm-notice__text">
                                        <h4>There are some problems with your operation.</h4>
                                    </div>
                                </div>
                                <div class="dm-notice__action d-flex justify-content-center">
                                    <a href="#" class="btn btn-sm btn-primary">Go Console</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="dm-notice">
                    <div class="card card-default card-md mb-4">
                        <div class="card-header">
                            <h6>Error</h6>
                        </div>
                        <div class="card-body">
                            <div class="dm-notice__content">
                                <div class="dm-notice__top text-center">
                                    <div class="dm-notice__icon bg-danger">
                                        <i class="fas fa-times color-white"></i>
                                    </div>
                                    <div class="dm-notice__text">
                                        <h4>Submission Failed</h4>
                                        <p>Please check and modify the following information before resubmitting.</p>
                                    </div>
                                </div>
                                <div class="notice-listBlock bg-normal mt-30">
                                    <h6>The content you submitted has the following error:</h6>
                                    <ul class="notice-list">
                                        <li>
                                            <img src="{{ asset('assets/img/svg/x-circle.svg') }}" alt="x-circle" class="svg color-danger">
                                            <span class="notice-list__text">Your account has been frozen <a href="#">Thaw immediately ></a></span>
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/img/svg/x-circle.svg') }}" alt="x-circle" class="svg color-danger">
                                            <span class="notice-list__text">Your account is not yet eligible to apply<a href="#">Apply Unlock ></a></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dm-notice__action d-flex justify-content-center">
                                    <a href="#" class="btn btn-sm btn-primary">Go Console</a>
                                    <a href="#" class="btn btn-sm btn-light btn-outlined">Buy Again</a>
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