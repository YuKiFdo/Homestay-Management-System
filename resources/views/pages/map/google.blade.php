@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.map-google') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.map-google') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Google Map Basic</h6>
                    </div>
                    <div class="card-body">
                        <div class="google-map" id="google-map-basic"></div>
                    </div>
                </div>
                <!-- ends: .card -->
            </div>
            <!-- ends: .col-lg-6 -->
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Google Map Style Light</h6>
                    </div>
                    <div class="card-body">
                        <div class="google-map" id="google-map-light"></div>
                    </div>
                </div>
                <!-- ends: .card -->
            </div>
            <!-- ends: .col-lg-6 -->
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Google Map Style Dark</h6>
                    </div>
                    <div class="card-body">
                        <div class="google-map" id="google-map-dark"></div>
                    </div>
                </div>
                <!-- ends: .card -->
            </div>
            <!-- ends: .col-lg-6 -->
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Google Map Style Theme Color</h6>
                    </div>
                    <div class="card-body">
                        <div class="google-map" id="google-map-theme"></div>
                    </div>
                </div>
                <!-- ends: .card -->
            </div>
            <!-- ends: .col-lg-6 -->
        </div>
    </div>
</div>
@endsection