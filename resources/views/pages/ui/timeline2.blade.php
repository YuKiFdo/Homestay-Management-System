@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-timeline2') }}</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-timeline2') }}</li>
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
                <div class="card-body py-20 ps-sm-35 ps-30 pe-sm-50 pe-30">
                    <div class="timeline-box--3 timeline-vertical left-middle basic-timeline px-10">
                        <ul class="timeline">
                            <li class="timeline-inverted">
                                <div class="timeline-single__buble">
                                    <div class="timeline-single__buble--svg  bg-opacity-secondary">
                                        <img src="{{ asset('assets/img/svg/paper-plane.svg') }} " alt="" class="svg">
                                    </div>
                                </div>
                                <div class="timeline-single">
                                    <div class="timeline-single__days">
                                        <span>10:00 Am</span>
                                    </div>
                                    <div class="timeline-single__content">
                                        <p>Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry.
                                        </p>
                                        <span>HTML,CSS,VueJS</span>
                                    </div>
                                </div>
                                <!-- ends: .timelline-single -->
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-single__buble">
                                    <div class="timeline-single__buble--svg  bg-opacity-info">
                                        <img src="{{ asset('assets/img/svg/surface1.svg') }} " alt="" class="svg">
                                    </div>
                                </div>
                                <div class="timeline-single">
                                    <div class="timeline-single__days">
                                        <span>10:00 Am</span>
                                    </div>
                                    <div class="timeline-single__content">
                                        <p>Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry.
                                        </p>
                                        <span>HTML,CSS,VueJS</span>
                                    </div>
                                </div>
                                <!-- ends: .timelline-single -->
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-single__buble">
                                    <div class="timeline-single__buble--svg  bg-opacity-warning">
                                        <img src="{{ asset('assets/img/svg/pen.svg') }} " alt="" class="svg">
                                    </div>
                                </div>
                                <div class="timeline-single">
                                    <div class="timeline-single__days">
                                        <span>10:00 Am</span>
                                    </div>
                                    <div class="timeline-single__content">
                                        <p>Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry.
                                        </p>
                                        <span>HTML,CSS,VueJS</span>
                                    </div>
                                </div>
                                <!-- ends: .timelline-single -->
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-single__buble">
                                    <div class="timeline-single__buble--svg  bg-opacity-primary">
                                        <img src="{{ asset('assets/img/svg/notification-basic.svg') }} " alt="" class="svg">
                                    </div>
                                </div>
                                <div class="timeline-single">
                                    <div class="timeline-single__days">
                                        <span>10:00 Am</span>
                                    </div>
                                    <div class="timeline-single__content">
                                        <p>Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry.
                                        </p>
                                        <span>HTML,CSS,VueJS</span>
                                    </div>
                                </div>
                                <!-- ends: .timelline-single -->
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-single__buble">
                                    <div class="timeline-single__buble--svg  bg-opacity-success">
                                        <img src="{{ asset('assets/img/svg/user-basic.svg') }} " alt="" class="svg">
                                    </div>
                                </div>
                                <div class="timeline-single">
                                    <div class="timeline-single__days">
                                        <span>10:00 Am</span>
                                    </div>
                                    <div class="timeline-single__content">
                                        <p>Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry.
                                        </p>
                                        <span>HTML,CSS,VueJS</span>
                                    </div>
                                </div>
                                <!-- ends: .timelline-single -->
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-single__buble">
                                    <div class="timeline-single__buble--svg  bg-opacity-danger">
                                        <img src="{{ asset('assets/img/svg/layers-basic.svg') }} " alt="" class="svg">
                                    </div>
                                </div>
                                <div class="timeline-single">
                                    <div class="timeline-single__days">
                                        <span>10:00 Am</span>
                                    </div>
                                    <div class="timeline-single__content">
                                        <p>Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry.
                                        </p>
                                        <span>HTML,CSS,VueJS</span>
                                    </div>
                                </div>
                                <!-- ends: .timelline-single -->
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
                <div class="card-body overflow-x-auto py-20 ps-25 pe-sm-20 pe-30">
                    <div class="timeline-box--3 timeline-vertical left-middle basic-timeline scroll-timeline">
                        <ul class="timeline">
                            <li class="timeline-inverted">
                                <div class="timeline-single__buble">
                                    <div class="timeline-single__buble--svg  bg-opacity-secondary">
                                        <img src="{{ asset('assets/img/svg/paper-plane.svg') }} " alt="" class="svg">
                                    </div>
                                </div>
                                <div class="timeline-single">
                                    <div class="timeline-single__days">
                                        <span>10:00 Am</span>
                                    </div>
                                    <div class="timeline-single__content">
                                        <p>Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry.
                                        </p>
                                        <span>HTML,CSS,VueJS</span>
                                    </div>
                                </div>
                                <!-- ends: .timelline-single -->
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-single__buble">
                                    <div class="timeline-single__buble--svg  bg-opacity-info">
                                        <img src="{{ asset('assets/img/svg/surface1.svg') }} " alt="" class="svg">
                                    </div>
                                </div>
                                <div class="timeline-single">
                                    <div class="timeline-single__days">
                                        <span>10:00 Am</span>
                                    </div>
                                    <div class="timeline-single__content">
                                        <p>Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry.
                                        </p>
                                        <span>HTML,CSS,VueJS</span>
                                    </div>
                                </div>
                                <!-- ends: .timelline-single -->
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-single__buble">
                                    <div class="timeline-single__buble--svg  bg-opacity-warning">
                                        <img src="{{ asset('assets/img/svg/pen.svg') }} " alt="" class="svg">
                                    </div>
                                </div>
                                <div class="timeline-single">
                                    <div class="timeline-single__days">
                                        <span>10:00 Am</span>
                                    </div>
                                    <div class="timeline-single__content">
                                        <p>Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry.
                                        </p>
                                        <span>HTML,CSS,VueJS</span>
                                    </div>
                                </div>
                                <!-- ends: .timelline-single -->
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-single__buble">
                                    <div class="timeline-single__buble--svg  bg-opacity-primary">
                                        <img src="{{ asset('assets/img/svg/notification-basic.svg') }} " alt="" class="svg">
                                    </div>
                                </div>
                                <div class="timeline-single">
                                    <div class="timeline-single__days">
                                        <span>10:00 Am</span>
                                    </div>
                                    <div class="timeline-single__content">
                                        <p>Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry.
                                        </p>
                                        <span>HTML,CSS,VueJS</span>
                                    </div>
                                </div>
                                <!-- ends: .timelline-single -->
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-single__buble">
                                    <div class="timeline-single__buble--svg  bg-opacity-success">
                                        <img src="{{ asset('assets/img/svg/user-basic.svg') }} " alt="" class="svg">
                                    </div>
                                </div>
                                <div class="timeline-single">
                                    <div class="timeline-single__days">
                                        <span>10:00 Am</span>
                                    </div>
                                    <div class="timeline-single__content">
                                        <p>Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry.
                                        </p>
                                        <span>HTML,CSS,VueJS</span>
                                    </div>
                                </div>
                                <!-- ends: .timelline-single -->
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-single__buble">
                                    <div class="timeline-single__buble--svg  bg-opacity-danger">
                                        <img src="{{ asset('assets/img/svg/layers-basic.svg') }} " alt="" class="svg">
                                    </div>
                                </div>
                                <div class="timeline-single">
                                    <div class="timeline-single__days">
                                        <span>10:00 Am</span>
                                    </div>
                                    <div class="timeline-single__content">
                                        <p>Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry.
                                        </p>
                                        <span>HTML,CSS,VueJS</span>
                                    </div>
                                </div>
                                <!-- ends: .timelline-single -->
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