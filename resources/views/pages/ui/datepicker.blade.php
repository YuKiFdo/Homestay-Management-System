@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-date-picker') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>{{ trans('menu.ui-menu-title') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-date-picker') }}</li>
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
                        <div class="date-picker-list">
                            <div class="dm-date-picker">
                                <div class="form-group mb-0 form-group-calender">
                                    <div class="position-relative">
                                        <input type="text" class="form-control form-control-default" id="datepicker" placeholder="January 20, 2018">
                                        <a href="#"><img src="{{ asset('assets/img/svg/calendar.svg') }}" alt="calendar" class="svg"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="dm-date-ranger position-relative d-flex align-items-center">
                                <div class="form-group mb-0">
                                    <input type="text" name="date-range-from" class="form-control form-control-default" id="date-from-2" placeholder="Start">
                                </div>
                                <span class="divider">-</span>
                                <div class="form-group mb-0">
                                    <input type="text" name="date-range-to" class="form-control form-control-default" id="date-to-2" placeholder="End">
                                </div>
                                <a class="date-picker-icon" href="#"><img src="{{ asset('assets/img/svg/calendar.svg') }}" alt="calendar" class="svg"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Disabled</h6>
                    </div>
                    <div class="card-body">
                        <div class="date-picker-list">
                            <div class="dm-date-picker">
                                <div class="form-group mb-0 form-group-calender">
                                    <div class="position-relative">
                                        <input type="text" class="form-control form-control-default date-picker-disabled" id="datepicker2" placeholder="January 20, 2018" disabled>
                                        <a href="#"><img src="{{ asset('assets/img/svg/calendar.svg') }}" alt="calendar" class="svg"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="dm-date-ranger position-relative d-flex align-items-center date-picker-disabled">
                                <div class="form-group mb-0">
                                    <input type="text" name="date-range-from" class="form-control form-control-default date-picker-disabled" id="date-from-4" placeholder="Start" disabled>
                                </div>
                                <span class="divider">-</span>
                                <div class="form-group mb-0">
                                    <input type="text" name="date-range-to" class="form-control form-control-default date-picker-disabled" id="date-to-4" placeholder="End" disabled>
                                </div>
                                <a class="date-picker-icon" href="#"><img src="{{ asset('assets/img/svg/calendar.svg') }}" alt="calendar" class="svg"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Three Sizes</h6>
                    </div>
                    <div class="card-body">
                        <div class="dm-nav-controller date-picker-size">
                            <div class="btn-group dm-button-group btn-group-normal nav" role="tablist">
                                <a href="#large" class="btn btn-sm btn-outline-light nav-link active" id="size-large" data-bs-toggle="tab" role="tab" aria-controls="large" aria-selected="true">Large</a>
                                <a href="#default" class="btn btn-sm btn-outline-light nav-link" id="size-default" data-bs-toggle="tab" role="tab" aria-controls="default" aria-selected="false">Default</a>
                                <a href="#small" class="btn btn-sm btn-outline-light nav-link" id="size-small" data-bs-toggle="tab" role="tab" aria-controls="small" aria-selected="false">Small</a>
                            </div>
                            <div class="nav-controller-content tab-content">
                                <div class="tab-pane fade show active" id="large" role="tabpanel" aria-labelledby="size-large">
                                    <div class="date-picker-list">
                                        <div class="dm-date-picker">
                                            <div class="form-group mb-0 form-group-calender">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control form-control-lg" id="datepicker3" placeholder="January 20, 2018">
                                                    <a href="#"><img src="{{ asset('assets/img/svg/calendar.svg') }}" alt="calendar" class="svg"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dm-date-ranger position-relative d-flex align-items-center">
                                            <div class="form-group mb-0">
                                                <input type="text" name="date-range-from" class="form-control form-control-lg" id="date-from-7" placeholder="Start">
                                            </div>
                                            <span class="divider">-</span>
                                            <div class="form-group mb-0">
                                                <input type="text" name="date-range-to" class="form-control form-control-lg" id="date-to-7" placeholder="End">
                                            </div>
                                            <a class="date-picker-icon" href="#"><img src="{{ asset('assets/img/svg/calendar.svg') }}" alt="calendar" class="svg"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="default" role="tabpanel" aria-labelledby="size-default">
                                    <div class="date-picker-list">
                                        <div class="dm-date-picker">
                                            <div class="form-group mb-0 form-group-calender">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control form-control-default" id="datepicker4" placeholder="January 20, 2018">
                                                    <a href="#"><img src="{{ asset('assets/img/svg/calendar.svg') }}" alt="calendar" class="svg"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dm-date-ranger position-relative d-flex align-items-center">
                                            <div class="form-group mb-0">
                                                <input type="text" name="date-range-from" class="form-control form-control-default" id="date-from-9" placeholder="Start">
                                            </div>
                                            <span class="divider">-</span>
                                            <div class="form-group mb-0">
                                                <input type="text" name="date-range-to" class="form-control form-control-default" id="date-to-9" placeholder="End">
                                            </div>
                                            <a class="date-picker-icon" href="#"><img src="{{ asset('assets/img/svg/calendar.svg') }}" alt="calendar" class="svg"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="small" role="tabpanel" aria-labelledby="size-small">
                                    <div class="date-picker-list">
                                        <div class="dm-date-picker">
                                            <div class="form-group mb-0 form-group-calender">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control form-control-sm" id="datepicker5" placeholder="January 20, 2018">
                                                    <a href="#"><img src="{{ asset('assets/img/svg/calendar.svg') }}" alt="calendar" class="svg"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dm-date-ranger position-relative d-flex align-items-center">
                                            <div class="form-group mb-0">
                                                <input type="text" name="date-range-from" class="form-control form-control-sm" id="date-from-11" placeholder="Start">
                                            </div>
                                            <span class="divider">-</span>
                                            <div class="form-group mb-0">
                                                <input type="text" name="date-range-to" class="form-control form-control-sm" id="date-to-11" placeholder="End">
                                            </div>
                                            <a class="date-picker-icon" href="#"><img src="{{ asset('assets/img/svg/calendar.svg') }}" alt="calendar" class="svg"></a>
                                        </div>
                                    </div>
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