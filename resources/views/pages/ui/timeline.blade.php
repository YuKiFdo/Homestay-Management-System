@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-timeline') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-timeline') }}</li>
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
                        <div class="timeline-box">
                            <div class="timeline-single d-flex">
                                <span class="timeline-line"></span>
                                <span class="timeline-single__buble buble-primary"></span>
                                <div class="timeline-single__content">
                                    <p>Create a services site 2015-09-01</p>
                                </div>
                            </div>
                            <!-- ends: .timelline-single -->
                            <div class="timeline-single d-flex">
                                <span class="timeline-line"></span>
                                <span class="timeline-single__buble buble-primary"></span>
                                <div class="timeline-single__content">
                                    <p>Solve initial network problems 2015-09-01</p>
                                </div>
                            </div>
                            <!-- ends: .timelline-single -->
                            <div class="timeline-single d-flex">
                                <span class="timeline-line"></span>
                                <span class="timeline-single__buble buble-primary"></span>
                                <div class="timeline-single__content">
                                    <p>Technical testing 2015-09-01</p>
                                </div>
                            </div>
                            <!-- ends: .timelline-single -->
                            <div class="timeline-single d-flex">
                                <span class="timeline-single__buble buble-primary"></span>
                                <div class="timeline-single__content">
                                    <p>Network problems being solved 2015-09-01</p>
                                </div>
                            </div>
                            <!-- ends: .timelline-single -->
                        </div>
                    </div>
                </div>
                <!-- ends: .card -->

            </div>
            <!-- ends: .col-lg-6 -->
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>Color</h6>
                    </div>
                    <div class="card-body">
                        <div class="timeline-box">

                            <div class="timeline-single d-flex">
                                <span class="timeline-line"></span>
                                <span class="timeline-single__buble buble-success"></span>
                                <div class="timeline-single__content">
                                    <p>Create a services site 2015-09-01</p>
                                </div>
                            </div>
                            <!-- ends: .timelline-single -->
                            <div class="timeline-single d-flex">
                                <span class="timeline-line"></span>
                                <span class="timeline-single__buble buble-success"></span>
                                <div class="timeline-single__content">
                                    <p>Create a services site 2015-09-01</p>
                                </div>
                            </div>
                            <!-- ends: .timelline-single -->
                            <div class="timeline-single d-flex">
                                <span class="timeline-line"></span>
                                <span class="timeline-single__buble buble-danger"></span>
                                <div class="timeline-single__content">
                                    <p>Solve initial network problems 1</p>
                                    <p>Solve initial network problems 2</p>
                                    <p>Solve initial network problems 3 2015-09-01</p>
                                </div>
                            </div>
                            <!-- ends: .timelline-single -->
                            <div class="timeline-single d-flex">
                                <span class="timeline-line"></span>
                                <span class="timeline-single__buble buble-primary"></span>
                                <div class="timeline-single__content">
                                    <p>Technical testing 1</p>
                                    <p>Technical testing 2</p>
                                    <p>Technical testing 3 2015-09-01</p>
                                </div>
                            </div>
                            <!-- ends: .timelline-single -->
                            <div class="timeline-single d-flex">
                                <span class="timeline-line"></span>
                                <span class="timeline-single__buble border-extra-light"></span>
                                <div class="timeline-single__content">
                                    <p>Technical testing 1</p>
                                    <p>Technical testing 2</p>
                                    <p>Technical testing 3 2015-09-01</p>
                                </div>
                            </div>
                            <!-- ends: .timelline-single -->
                            <div class="timeline-single d-flex">
                                <span class="timeline-line"></span>
                                <span class="timeline-single__buble border-extra-light"></span>
                                <div class="timeline-single__content">
                                    <p>Technical testing 1</p>
                                    <p>Technical testing 2</p>
                                    <p>Technical testing 3 2015-09-01</p>
                                </div>
                            </div>
                            <!-- ends: .timelline-single -->
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