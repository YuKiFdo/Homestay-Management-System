@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.calendar-menu-title') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.calendar-menu-title') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
        <div class="row calendar-grid justify-content-center">
            <div class="col-xxl-3 col-xl-5 col-md-6 col-sm-8">
                <div class="dm-calendar-left">
                    <button class="btn btn-primary btn-lg btn-create-event" data-bs-toggle="modal" data-bs-target="#c-event-modal">
                        <img class="svg" src="{{ asset('assets/img/svg/plus.svg') }}" alt="">Create New Event</button>
                    <div class="card card-md mb-4">
                        <div class="card-body px-10">
                            <div class="date-picker">
                                <div class="date-picker__calendar"></div>
                                <!-- ends: .date-picker__calendar -->
                            </div>
                        </div>
                    </div>
                    <div class="card card-md mb-4">
                        <div class="card-body">
                            <div class="draggable-events" id="draggable-events">
                                <div class="draggable-events__top d-flex justify-content-between">
                                    <h6>My Calendars</h6>
                                    <a href="#">
                                        <img class="svg" src="{{ asset('assets/img/svg/plus.svg') }}" alt=""></a>
                                </div>
                                <ul class="draggable-event-list">
                                    <li class="draggable-event-list__single d-flex align-items-center" data-class="primary">
                                        <span class="badge-dot badge-primary"></span>
                                        <span class="event-text">Family Events</span>
                                    </li>
                                    <!-- ends: .draggable-event-list__single -->
                                    <li class="draggable-event-list__single d-flex align-items-center" data-class="secondary">
                                        <span class="badge-dot badge-secondary"></span>
                                        <span class="event-text">Product Launch</span>
                                    </li>
                                    <!-- ends: .draggable-event-list__single -->
                                    <li class="draggable-event-list__single d-flex align-items-center" data-class="success">
                                        <span class="badge-dot badge-success"></span>
                                        <span class="event-text">Team Meeting</span>
                                    </li>
                                    <!-- ends: .draggable-event-list__single -->
                                    <li class="draggable-event-list__single d-flex align-items-center" data-class="primary">
                                        <span class="badge-dot badge-primary"></span>
                                        <span class="event-text">UI/UX Tasks</span>
                                    </li>
                                    <!-- ends: .draggable-event-list__single -->
                                    <li class="draggable-event-list__single d-flex align-items-center" data-class="warning">
                                        <span class="badge-dot badge-warning"></span>
                                        <span class="event-text">Project Update</span>
                                    </li>
                                    <!-- ends: .draggable-event-list__single -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- ends: .card -->
                </div>
            </div>
            <!-- ends: .col-lg-3 -->
            <div class="col-xxl-9 col-xl-7">
                <div class="card card-default card-md mb-4">
                    <div class="card-body">
                        <div id='full-calendar'></div>
                    </div>
                </div>
                <!-- ends: .card -->
            </div>
        </div>
    </div>
</div>
<!-- ends: .dm-page-content -->

<div class="c-event-modal modal fade" id="c-event-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md c-event-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Create Event</h6>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <img src="{{ asset('assets/img/svg/x.svg') }}" alt="x" class="svg"></button>
            </div>
            <div class="modal-body">
                <div class="c-event-form">
                    <form action="#">
                        <div class="e-form-row d-flex">
                            <div class="e-form-row__left">
                                <label>Title</label>
                            </div>
                            <div class="e-form-row__right">
                                <input type="text" name="e-title" placeholder="Weekly report meeting" class="form-control form-control-md">
                            </div>
                        </div>
                        <!-- ends: .e-form-row -->
                        <div class="e-form-row d-flex">
                            <div class="e-form-row__left">
                                <label>Event type</label>
                            </div>
                            <div class="e-form-row__right">
                                <div class="radio-horizontal-list d-flex flex-wrap">
                                    <div class="radio-theme-default custom-radio ">
                                        <input class="radio" type="radio" name="radio-e-type" value="01" id="radio-1">
                                        <label for="radio-1">
                                            <span class="radio-text">Event</span>
                                        </label>
                                    </div>
                                    <div class="radio-theme-default custom-radio ">
                                        <input class="radio" type="radio" name="radio-e-type" value="02" id="radio-2">
                                        <label for="radio-2">
                                            <span class="radio-text">Remainder</span>
                                        </label>
                                    </div>
                                    <div class="radio-theme-default custom-radio ">
                                        <input class="radio" type="radio" name="radio-e-type" value="03" id="radio-3">
                                        <label for="radio-3">
                                            <span class="radio-text">Task</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .e-form-row -->
                        <div class="e-form-row d-flex">
                            <div class="e-form-row__left">
                                <label>Start</label>
                            </div>
                            <div class="e-form-row__right d-flex">
                                <div class="input-container icon-left position-relative me-2">
                                    <span class="input-icon icon-left">
                                        <img class="svg" src="{{ asset('assets/img/svg/chevron-right.svg') }}" alt="chevron-right.svg">
                                    </span>
                                    <input type="text" class="form-control form-control-md" name="s-date" placeholder="Select Date">
                                </div>
                                <div class="input-container icon-left position-relative">
                                    <span class="input-icon icon-left">
                                        <img class="svg" src="{{ asset('assets/img/svg/clock.svg') }}" alt="clock">
                                    </span>
                                    <input type="text" class="form-control form-control-md" name="s-time" placeholder="Select Time">
                                </div>
                            </div>
                        </div>
                        <!-- ends: .e-form-row -->
                        <div class="e-form-row d-flex">
                            <div class="e-form-row__left">
                                <label>End</label>
                            </div>
                            <div class="e-form-row__right d-flex">
                                <div class="input-container icon-left position-relative me-2">
                                    <span class="input-icon icon-left">
                                        <img class="svg" src="{{ asset('assets/img/svg/chevron-right.svg') }}" alt="chevron-right.svg">
                                    </span>
                                    <input type="text" class="form-control form-control-md" name="e-date" placeholder="Select Date">
                                </div>
                                <div class="input-container icon-left position-relative">
                                    <span class="input-icon icon-left">
                                        <img class="svg" src="{{ asset('assets/img/svg/clock.svg') }}" alt="clock">
                                    </span>
                                    <input type="text" class="form-control form-control-md" name="e-time" placeholder="Select Time">
                                </div>
                            </div>
                        </div>
                        <!-- ends: .e-form-row -->
                        <div class="e-form-row d-flex">
                            <div class="e-form-row__left">
                                <label>Description</label>
                            </div>
                            <div class="e-form-row__right">
                                <textarea name="e-description" class="form-control form-control-md" placeholder="Add Description"></textarea>
                            </div>
                        </div>
                        <!-- ends: .e-form-row -->
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white btn-sm" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary btn-sm">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- ends: .c-event-modal -->

<div class="e-info-modal modal fade" id="e-info-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm e-info-dialog modal-dialog-centered" id="c-event" role="document">
        <div class="modal-content">
            <div class="modal-header e-info-header bg-primary">
                <h6 class="modal-title e-info-title">Project Update</h6>
                <div class="e-info-action">
                    <button class="btn-icon">
                        <img class="svg" src="{{ asset('assets/img/svg/edit.svg') }}" alt="edit">
                    </button>
                    <button class="btn-icon">
                        <img class="svg" src="{{ asset('assets/img/svg/mail.svg') }}" alt="mail">
                    </button>
                    <button class="btn-icon">
                        <img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash">
                    </button>
                    <button type="button" class="btn-icon btn-closed" data-bs-dismiss="modal" aria-label="Close">
                        <i class="uil uil-times"></i>
                    </button>
                </div>
            </div>
            <div class="modal-body">
                <ul class="e-info-list">
                    <li>
                        <img class="svg" src="{{ asset('assets/img/svg/chevron-right.svg') }}" alt="chevron-right.svg">
                        <span class="list-line">
                            <span class="list-label">Date :</span>
                            <span class="list-meta"> Thursday, January 23</span>
                        </span>
                    </li>
                    <li>
                        <img class="svg" src="{{ asset('assets/img/svg/clock.svg') }}" alt="clock">
                        <span class="list-line">
                            <span class="list-label">Time :</span>
                            <span class="list-meta"> 23⋅5:00 – 6:00 am</span>
                        </span>
                    </li>
                    <li>
                        <img class="svg" src="{{ asset('assets/img/svg/align-left.svg') }}" alt="align-left">
                        <span class="list-line">
                            <span class="list-text"> Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam consetetur sadipscing elitr sed diam</span>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection