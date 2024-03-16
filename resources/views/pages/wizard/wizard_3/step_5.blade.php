@section('title', $title)
@section('description', $description)
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-breadcrumb">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.wizard-three') }}</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.wizard-three') }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class=" checkout wizard8 global-shadow border px-sm-50 px-20 mb-30 bg-white radius-xl w-100">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="row justify-content-center">
                        <div class="col-xl-4">
                            <div class="checkout-progress-indicator ">
                                <div class="checkout-progress justify-content-center px-0">
                                    <div class="step completed" id="1">
                                        <span class="las la-check"></span>
                                    </div>
                                    <div class="step completed" id="2">
                                        <span class="las la-check"></span>
                                    </div>
                                    <div class="step completed" id="3">
                                        <span class="las la-check"></span>
                                    </div>
                                    <div class="step completed" id="4">
                                        <span class="las la-check"></span>
                                    </div>
                                </div>
                                <div class="card-header border-bottom-0 mt-50">
                                    <img class="svg" src="{{ asset('assets/img/svg/progress5.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-8 col-sm-10">
                            <div class="checkout-shipping-form pt-50 mt-0 pe-0 h-100vh">
                                <div class="card payment-status bg-normal mt-0 p-sm-30 p-15">
                                    <div class="card-body bg-white bg-shadow radius-xl px-sm-30 pt-sm-25 m-0 p-0">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
