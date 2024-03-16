@section('title', $title)
@section('description', $description)
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-breadcrumb">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.wizard-one') }}</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.wizard-one') }}
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
        <div class=" checkout wizard6 global-shadow border-0 px-sm-50 px-20 pt-sm-50 py-30 mb-30 bg-white radius-xl w-100">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-12">
                    <div class="checkout-progress-indicator px-15 content-center">
                        <div class="checkout-progress w-100">
                            <div class="step current" id="1">
                                <span><img class="svg" src="{{ asset('assets/img/svg/userExtra.svg') }}" alt=""></span>
                                <span>Create Account</span>
                            </div>
                            <div class="current"><img src="{{ asset('assets/img/svg/checkout.svg') }}" alt="img" class="svg"></div>
                            <div class="step" id="2">
                                <span><img class="svg" src="{{ asset('assets/img/svg/address.svg') }}" alt=""></span>
                                <span>Shipping Address</span>
                            </div>
                            <div class="current"><img src="{{ asset('assets/img/svg/checkout.svg') }}" alt="img" class="svg"></div>
                            <div class="step" id="3">
                                <span><img class="svg" src="{{ asset('assets/img/svg/155-credit-card.svg') }}" alt=""></span>
                                <span>Payment Method</span>
                            </div>
                            <div class="current"><img src="{{ asset('assets/img/svg/checkout.svg') }}" alt="img" class="svg"></div>
                            <div class="step" id="4">
                                <span><img class="svg" src="{{ asset('assets/img/svg/024-like.svg') }}" alt=""></span>
                                <span>Review Order</span>
                            </div>
                        </div>
                    </div><!-- ends: .checkout-progress-indicator -->

                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8 col-sm-10">
                            <div class="card checkout-shipping-form shadow-none border-0 shadow-none">
                                <div class="card-header border-bottom-0 align-content-start pb-sm-0 pb-1">
                                    <h4 class="fw-500">1. Please create your account</h4>
                                </div>
                                <div class="card-body">
                                    <div class="edit-profile__body">
                                        <form>
                                            <div class="form-group">
                                                <label for="name1">Usename</label>
                                                <input type="text" class="form-control" id="name1"
                                                    placeholder="Usename">
                                            </div>
                                            <div class="form-group">
                                                <label for="name2">Email Address</label>
                                                <input type="email" class="form-control" id="name2"
                                                    placeholder="username@email.com">
                                            </div>
                                            <div class="form-group create-passord">
                                                <label for="phoneNumber">Password</label>
                                                <input type="password" class="form-control" id="phoneNumber"
                                                    placeholder="Password" value="121445">
                                                <span class="create-passord-warn">Enter a valid password. Min 6 characters
                                                    long</span>
                                            </div>
                                            <div class=" d-flex pt-20 mb-20 justify-content-md-end justify-content-center">
                                                <a href="{{ $next_page_url }}"
                                                    class="btn btn-primary btn-default btn-squared text-capitalize text-white">Save
                                                    &amp; Next<i class="ms-10 me-0 las la-arrow-right"></i></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- ends: card -->
                        </div><!-- ends: col -->
                    </div>
                </div><!-- ends: col -->
            </div>
        </div><!-- ends: .global-shadow -->
    </div>
@endsection
