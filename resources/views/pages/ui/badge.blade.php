@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-badge') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>{{ trans('menu.ui-menu-title') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-badge') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Basic</h6>
                            </div>
                            <div class="card-body">
                                <div class="dm-avatar-list d-flex align-items-center">



                                    <span class="avatar avatar-light avatar-md avatar-square  ">








                                        <span class="avatar-badge-wrap">
                                            <span class="badge badge-danger badge- badge-sm">5</span>
                                        </span>


                                    </span>





                                    <span class="avatar avatar-light avatar-md avatar-square  ">








                                        <span class="avatar-badge-wrap">
                                            <span class="badge badge-danger badge- badge-sm">0</span>
                                        </span>


                                    </span>





                                    <span class="avatar avatar-light avatar-md avatar-square  ">








                                        <span class="avatar-badge-wrap avatar-badge-icon">
                                            <img src="{{ asset('assets/img/svg/clock.svg') }}" alt="clock" class="svg badge-icon badge-icon-danger">
                                        </span>


                                    </span>


                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>

                    <div class="col-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Overflow Count</h6>
                            </div>
                            <div class="card-body">
                                <div class="dm-avatar-list d-flex align-items-center">



                                    <span class="avatar avatar-light avatar-md avatar-square  ">








                                        <span class="avatar-badge-wrap">
                                            <span class="badge badge-danger badge-round badge-md">99</span>
                                        </span>


                                    </span>





                                    <span class="avatar avatar-light avatar-md avatar-square  ">








                                        <span class="avatar-badge-wrap">
                                            <span class="badge badge-danger badge-round badge-md">99+</span>
                                        </span>


                                    </span>





                                    <span class="avatar avatar-light avatar-md avatar-square  ">








                                        <span class="avatar-badge-wrap">
                                            <span class="badge badge-danger badge-round badge-md">10+</span>
                                        </span>


                                    </span>





                                    <span class="avatar avatar-light avatar-md avatar-square  ">








                                        <span class="avatar-badge-wrap">
                                            <span class="badge badge-danger badge-round badge-md">999+</span>
                                        </span>


                                    </span>


                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>

                    <div class="col-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Clickable</h6>
                            </div>
                            <div class="card-body">
                                <div class="dm-avatar-list d-flex align-items-center">


                                    <a href="#">
                                        <span class="avatar avatar-light avatar-md avatar-square avatar-badge-round ">
                                            <span class="avatar-badge-wrap">
                                                <span class="badge badge-danger badge-round badge-md">99</span>
                                            </span>
                                        </span>
                                    </a>


                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>

                    <div class="col-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Status</h6>
                            </div>
                            <div class="card-body">
                                <div class="status-list-inline d-flex mb-3">
                                    <span class="badge-dot dot-success"></span>
                                    <span class="badge-dot dot-danger"></span>
                                    <span class="badge-dot dot-default"></span>
                                    <span class="badge-dot dot-info"></span>
                                    <span class="badge-dot dot-warning"></span>
                                </div>
                                <!-- ends: .status-list-inline -->
                                <div class="status-list-inrow d-flex flex-column">
                                    <div class="dm-badge-text">
                                        <span class="badge-dot dot-success"></span>
                                        <span>Success</span>
                                    </div>
                                    <div class="dm-badge-text">
                                        <span class="badge-dot dot-danger"></span>
                                        <span>Danger</span>
                                    </div>
                                    <div class="dm-badge-text">
                                        <span class="badge-dot dot-default"></span>
                                        <span>Default</span>
                                    </div>
                                    <div class="dm-badge-text">
                                        <span class="badge-dot dot-info"></span>
                                        <span>Info</span>
                                    </div>
                                    <div class="dm-badge-text">
                                        <span class="badge-dot dot-warning"></span>
                                        <span>Warning</span>
                                    </div>
                                </div>
                                <!-- ends: .status-list-inrow -->
                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>
                </div>
            </div>
            <!-- ends: .col-lg-6 -->
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Standalone</h6>
                            </div>
                            <div class="card-body">
                                <div class="dm-badge-list d-flex align-items-center">



                                    <span class="badge badge-round badge-danger badge-lg">

                                        25
                                    </span>






                                    <span class="badge badge-round badge-light badge-lg badge-outlined">

                                        4
                                    </span>






                                    <span class="badge badge-round badge-success badge-lg">

                                        99+
                                    </span>



                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>
                    <div class="col-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Red badge</h6>
                            </div>
                            <div class="card-body">
                                <div class="dm-badge-list d-flex align-items-center">



                                    <div class="badge badge-red color-dark">

                                        <img src="{{ asset('assets/img/svg/bell.svg') }}" alt="bell" class="svg">


                                        <div class="badge-dot-wrap">
                                            <span class="badge-dot dot-danger"></span>
                                        </div>

                                    </div>






                                    <div class="badge badge-red color-dark">

                                        <img src="{{ asset('assets/img/svg/bell.svg') }}" alt="bell" class="svg">


                                    </div>






                                    <div class="badge badge-red color-dark badge-text">

                                        <a href="#" class="color-info">Link something</a>


                                        <div class="badge-dot-wrap">
                                            <span class="badge-dot dot-danger"></span>
                                        </div>

                                    </div>



                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>
                    <div class="col-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Dynamic</h6>
                            </div>
                            <div class="card-body">
                                <div class="dynamic-badge-block mb-4">



                                    <span class="avatar avatar-light avatar-md avatar-square  ">








                                        <span class="avatar-badge-wrap">
                                            <span class="badge badge-danger badge-round badge-sm">5</span>
                                        </span>


                                    </span>


                                    <div class="btn-group dm-button-group btn-group-normal ms-3">
                                        <button class="btn btn-icon btn-light btn-square btn-outlined btn-inc">
                                            <img class="svg" src="{{ asset('assets/img/svg/plus.svg') }}" alt="plus">
                                        </button>
                                        <button class="btn btn-icon btn-light btn-square btn-outlined btn-dec">
                                            <img class="svg" src="{{ asset('assets/img/svg/minus.svg') }}" alt="minus">
                                        </button>
                                    </div>
                                </div>
                                <div class="dynamic-badge-block">



                                    <span class="avatar avatar-light avatar-md avatar-square  ">





                                        <span class="badge-dot-wrap">
                                            <span class="badge-dot dot-danger"></span>
                                        </span>





                                    </span>




                                    <div class="form-check form-switch form-switch-info form-switch-md">
                                        <input type="checkbox" class="form-check-input" id="switch-dynamic-badge" checked>
                                        <label class="form-check-label" for="switch-dynamic-badge"></label>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>
                </div>
            </div>
            <!-- ends: .col-lg-6 -->
        </div>
    </div>
</div>
@endsection