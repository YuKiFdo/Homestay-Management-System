@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-empty') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>{{ trans('menu.ui-menu-title') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-empty') }}</li>
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
                        <div class="dm-empty text-center">
                            <div class="dm-empty__image">
                                <img src="{{ asset('assets/img/svg/1.png') }}" alt="Admin Empty">
                            </div>
                            <div class="dm-empty__text">
                                <p class="">No Data</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Customize</h6>
                    </div>
                    <div class="card-body">
                        <div class="dm-empty text-center">
                            <div class="dm-empty__image">
                                <img src="{{ asset('assets/img/svg/3.svg') }}" alt="Admin Empty">
                            </div>
                            <div class="dm-empty__text">
                                <p>Customize <a href="#">Description</a></p>
                                <div class="dm-empty__action">
                                    <button class="btn btn-primary btn-sm btn-squared">Create Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Chose image</h6>
                    </div>
                    <div class="card-body">
                        <div class="dm-empty text-center">
                            <div class="dm-empty__image">
                                <img src="{{ asset('assets/img/svg/2.png') }}" alt="Admin Empty">
                            </div>
                            <div class="dm-empty__text">
                                <p class="disabled">No Data</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>No Description</h6>
                    </div>
                    <div class="card-body">
                        <div class="dm-empty text-center">
                            <div class="dm-empty__image">
                                <img src="{{ asset('assets/img/svg/1.png') }}" alt="Admin Empty">
                            </div>
                            <div class="dm-empty__text">
                                <p class="">No Data</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection