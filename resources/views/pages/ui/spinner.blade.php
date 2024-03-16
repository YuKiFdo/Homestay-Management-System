@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-spinner') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-spinner') }}</li>
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


                        <div class="dm-spin-dots spin-sm">
                            <span class="spin-dot badge-dot dot-primary"></span>
                            <span class="spin-dot badge-dot dot-primary"></span>
                            <span class="spin-dot badge-dot dot-primary"></span>
                            <span class="spin-dot badge-dot dot-primary"></span>
                        </div>


                    </div>
                </div>
                <!-- ends: .card -->
            </div>
            <!-- ends: .col-lg-6 -->
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>Size</h6>
                    </div>
                    <div class="card-body">
                        <div class="spin-list d-flex align-items-center">


                            <div class="dm-spin-dots spin-sm">
                                <span class="spin-dot badge-dot dot-primary"></span>
                                <span class="spin-dot badge-dot dot-primary"></span>
                                <span class="spin-dot badge-dot dot-primary"></span>
                                <span class="spin-dot badge-dot dot-primary"></span>
                            </div>




                            <div class="dm-spin-dots spin-md">
                                <span class="spin-dot badge-dot dot-primary"></span>
                                <span class="spin-dot badge-dot dot-primary"></span>
                                <span class="spin-dot badge-dot dot-primary"></span>
                                <span class="spin-dot badge-dot dot-primary"></span>
                            </div>




                            <div class="dm-spin-dots spin-lg">
                                <span class="spin-dot badge-dot dot-primary"></span>
                                <span class="spin-dot badge-dot dot-primary"></span>
                                <span class="spin-dot badge-dot dot-primary"></span>
                                <span class="spin-dot badge-dot dot-primary"></span>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- ends: .card -->
            </div>
            <!-- ends: .col-lg-6 -->
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>Inside a container</h6>
                    </div>
                    <div class="card-body">
                        <div class="spin-container text-center">


                            <div class="dm-spin-dots spin-sm">
                                <span class="spin-dot badge-dot dot-primary"></span>
                                <span class="spin-dot badge-dot dot-primary"></span>
                                <span class="spin-dot badge-dot dot-primary"></span>
                                <span class="spin-dot badge-dot dot-primary"></span>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- ends: .card -->
            </div>
            <!-- ends: .col-lg-6 -->
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>Embedded mode</h6>
                    </div>
                    <div class="card-body">
                        <div class="spin-embadded">
                            <div class="alert alert-primary" role="alert">
                                <div class="alert-content">
                                    <h6 class="alert-heading">Alert message title</h6>
                                    <p>Further details about the context of this alert.</p>
                                </div>
                                <div class="loaded-spin text-center">


                                    <div class="dm-spin-dots spin-sm">
                                        <span class="spin-dot badge-dot dot-primary"></span>
                                        <span class="spin-dot badge-dot dot-primary"></span>
                                        <span class="spin-dot badge-dot dot-primary"></span>
                                        <span class="spin-dot badge-dot dot-primary"></span>
                                    </div>


                                </div>
                            </div>
                            <div class="embadden-spin-control d-flex align-items-center">
                                <span>Loading State: </span>
                                <div class="custom-control  form-check form-switch  switch-primary switch-md">
                                    <input type="checkbox" class="form-check-input" id="switch-spin">
                                    <label class="form-check-label" for="switch-spin"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ends: .card -->
            </div>
            <!-- ends: .col-lg-6 -->
        </div>
    </div>
</div>
@endsection