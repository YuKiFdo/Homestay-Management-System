@section('title', $title)
@section('description', $description)
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-breadcrumb">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.wizard-two') }}</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.wizard-two') }}
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class=" checkout wizard1 wizard7 global-shadow px-sm-50 px-20 py-sm-50 py-30 mb-30 bg-white radius-xl w-100">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="checkout-progress-indicator content-center">
                        <div class="checkout-progress">
                            <div class="step completed" id="1">
                                <span class="las la-check"></span>
                                <span>Start</span>
                            </div>
                            <div class="current"><img src="{{ asset('assets/img/svg/checkoutin.svg') }}" alt="img" class="svg"></div>
                            <div class="step completed" id="2">
                                <span class="las la-check"></span>
                                <span>Profile</span>
                            </div>
                            <div class="current"><img src="{{ asset('assets/img/svg/checkoutin.svg') }}" alt="img" class="svg"></div>
                            <div class="step completed" id="3">
                                <span class="las la-check"></span>
                                <span>Hints</span>
                            </div>
                            <div class="current"><img src="{{ asset('assets/img/svg/checkoutin.svg') }}" alt="img" class="svg"></div>
                            <div class="step completed" id="4">
                                <span class="las la-check"></span>
                                <span>Finished</span>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="cus-8 col-12">
                            <div class="card payment-status bg-normal p-sm-30 p-15">
                                <div class="card-body bg-white bg-shadow radius-xl px-sm-30 py-sm-25 m-0 px-15 py-1">
                                    <div class="payment-status__area  py-sm-25 py-20 text-center">
                                        <div class="content-center">
                                            <span class="wh-34 bg-success rounded-circle content-center">
                                            <span class="las la-check fs-16 color-white"></span></span>
                                        </div>
                                        <h4 class="fw-500 mt-20 mb-10">Payment Successful</h4>
                                        <span class="fs-15 color-gray">Thank you! We've received your payment.</span>
                                    </div>
                                </div>
                            </div><!-- End: .card -->
                        </div><!-- End: .col-lg-10 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
