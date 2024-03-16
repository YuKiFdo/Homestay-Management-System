@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-time-picker') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-time-picker') }}</li>
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
                        <div class="time-picker">
                            <div class="form-group mb-0">
                                <div class="input-container icon-right position-relative">
                                    <span class="input-icon icon-right">
                                        <img src="{{ asset('assets/img/svg/clock.svg') }}" alt="clock" class="svg">
                                    </span>
                                    <input type="text" class="form-control form-control-lg" id="time-picker" placeholder="Select time">
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