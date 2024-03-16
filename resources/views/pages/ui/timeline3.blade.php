@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-timeline3') }}</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-timeline3') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-default card-md mb-4">
                <div class="card-header  py-20">
                    <h6> Timeline 1</h6>
                </div>
                <div class="card-body">
                    <div class="timeline-box timeline-box--2">

                        <div class="timeline-single d-flex">
                            <span class="timeline-line"></span>
                            <span class="timeline-single__buble"></span>
                            <div class="timeline-single__content">
                                <div class="d-flex justify-content-between align-content-center flex-wrap">
                                    <div class="d-flex align-content-center pe-10">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                    </div>
                                    <div class="timeline-single__days">
                                        <span>6:00 am</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .timelline-single -->
                        <div class="timeline-single d-flex">
                            <span class="timeline-line"></span>
                            <span class="timeline-single__buble bg-primary"></span>
                            <div class="timeline-single__content">
                                <div class="d-flex justify-content-between align-content-center flex-wrap">
                                    <div class="d-flex align-content-center pe-10">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        <span class="order-bg-opacity-success color-success timeline-single__badge">now</span>
                                    </div>
                                    <div class="timeline-single__days">
                                        <span>1 hrs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .timelline-single -->
                        <div class="timeline-single d-flex">
                            <span class="timeline-line"></span>
                            <span class="timeline-single__buble bg-info"></span>
                            <div class="timeline-single__content">
                                <div class="d-flex justify-content-between align-content-center flex-wrap">
                                    <div class="d-flex align-content-center pe-10">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                    </div>
                                    <div class="timeline-single__days">
                                        <span>2 days</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .timelline-single -->
                        <div class="timeline-single d-flex">
                            <span class="timeline-line"></span>
                            <span class="timeline-single__buble bg-success"></span>
                            <div class="timeline-single__content">
                                <div class="d-flex justify-content-between align-content-center flex-wrap">
                                    <div class="d-flex align-content-center pe-10">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        <span class="order-bg-opacity-danger color-danger timeline-single__badge">panding</span>
                                    </div>
                                    <div class="timeline-single__days">
                                        <span>3 week</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .timelline-single -->
                        <div class="timeline-single d-flex">
                            <span class="timeline-single__buble bg-warning"></span>
                            <div class="timeline-single__content">
                                <div class="d-flex justify-content-between align-content-center flex-wrap">
                                    <div class="d-flex align-content-center pe-10">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                    </div>
                                    <div class="timeline-single__days">
                                        <span>2 month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .timelline-single -->
                    </div>
                </div>
            </div>
            <!-- ends: .card -->
            <div class="card card-default card-md mb-4">
                <div class="card-header  py-20">
                    <h6> Timeline 3</h6>
                </div>
                <div class="card-body py-30 ps-sm-35 ps-30 pe-sm-50 pe-30">
                    <div class="timeline-box--3 timeline-vertical left-middle">
                        <ul class="timeline">
                            <li class="timeline-inverted">
                                <span class="timeline-single__buble">
                                    <span class="bg-info"></span>
                                </span>
                                <div class="timeline-single">
                                    <div class="timeline-single__days">
                                        <span>10:00 Am</span>
                                    </div>
                                    <div class="timeline-single__content">
                                        <div class="d-flex justify-content-between align-content-center flex-wrap">
                                            <div class="d-flex align-content-center">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem
                                                    Ipsum has been the industry's standard dummy text ever since the
                                                    1500s, when an
                                                    unknown printer took a galley of type and scrambled it to make a
                                                    type specimen
                                                    book. It has survived not only five centuries, but also
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ends: .timelline-single -->
                            </li>
                            <li class="timeline-inverted">
                                <span class="timeline-single__buble">
                                    <span class="bg-success"></span>
                                </span>
                                <div class="timeline-single">
                                    <div class="timeline-single__days">
                                        <span>12:00Am</span>
                                    </div>
                                    <div class="timeline-single__content">
                                        <div class="d-flex justify-content-between align-content-center flex-wrap">
                                            <div class="d-flex align-content-center">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem
                                                    Ipsum has been the industry's standard dummy text ever since the
                                                    1500s, when an
                                                    unknown printer took a galley of type and scrambled it to make a
                                                    type specimen
                                                    book. It has survived not only five centuries, but also
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ends: .timelline-single -->
                            </li>
                            <li class="timeline-inverted mb-0">
                                <span class="timeline-single__buble bg-info">
                                    <span class="bg-warning"></span>
                                </span>
                                <div class="timeline-single">
                                    <div class="timeline-single__days">
                                        <span>2 days</span>
                                    </div>
                                    <div class="timeline-single__content mb-0">
                                        <div class="d-flex justify-content-between align-content-center flex-wrap">
                                            <div class="d-flex align-content-center">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem
                                                    Ipsum has been the industry's standard dummy text ever since the
                                                    1500s, when an
                                                    unknown printer took a galley of type and scrambled it to make a
                                                    type specimen
                                                    book. It has survived not only five centuries, but also
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ends: .card -->
        </div>
        <div class="col-lg-6">
            <div class="card card-default card-md mb-4">
                <div class="card-header  py-20">
                    <h6> Timeline 2</h6>
                </div>
                <div class="card-body p-30">
                    <div class="timeline-box--3 timeline-vertical">
                        <ul class="timeline">
                            <li>
                                <span class="timeline-single__buble">
                                    <span class="bg-danger"></span>
                                </span>
                                <div class="timeline-single">
                                    <div class="timeline-single__days">
                                        <span>10:00 Am</span>
                                    </div>
                                    <div class="timeline-single__content">
                                        <div class="d-flex justify-content-between align-content-center flex-wrap">
                                            <div class="d-flex align-content-center pe-10">
                                                <p>Lorem Ipsum is simply dummy text
                                                    of theprintng and typesetting industry.
                                                    Lorem Ipsum has been the industry's
                                                    standard dummy text ever since the,
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ends: .timelline-single -->
                            </li>
                            <li class="timeline-inverted">
                                <span class="timeline-single__buble">
                                    <span class="bg-success"></span>
                                </span>
                                <div class="timeline-single">
                                    <div class="timeline-single__days">
                                        <span>12:00Am</span>
                                    </div>
                                    <div class="timeline-single__content">
                                        <div class="d-flex justify-content-between align-content-center flex-wrap">
                                            <div class="d-flex align-content-center pe-10">
                                                <p>Lorem Ipsum is simply dummy text
                                                    of theprintng and typesetting industry.
                                                    Lorem Ipsum.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ends: .timelline-single -->
                            </li>
                            <li>
                                <span class="timeline-single__buble bg-info">
                                    <span class="bg-danger"></span>
                                </span>
                                <div class="timeline-single">
                                    <div class="timeline-single__days">
                                        <span>2 days</span>
                                    </div>
                                    <div class="timeline-single__content">
                                        <div class="d-flex justify-content-between align-content-center flex-wrap">
                                            <div class="d-flex align-content-center pe-10">
                                                <p>Lorem Ipsum is simply dummy text
                                                    of theprintng and typesetting industry.
                                                    Lorem Ipsum has been the industry's
                                                    standard dummy text ever since the,
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ends: .card -->
        </div>
    </div>
</div>
@endsection