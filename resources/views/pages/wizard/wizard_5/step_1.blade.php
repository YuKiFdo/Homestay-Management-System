@section('title', $title)
@section('description', $description)
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-breadcrumb">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.wizard-five') }}</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.wizard-five') }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class=" checkout wizard10 global-shadow mb-30 bg-white radius-xl w-100">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div
                                class="checkout-progress-indicator border-0 p-0 radius-md mt-lg-30 p-xl-20 py-30 ps-30 pe-lg-0 pe-30">
                                <div class="checkout-progress3">
                                    <div class="step current bg-lighter" id="1">
                                        <span>Create Account</span>
                                        <span>Setup Your Account Details</span>
                                    </div>
                                    <div class="step" id="2">
                                        <span>Shipping Address</span>
                                        <span>Choose Your Location</span>
                                    </div>
                                    <div class="step" id="3">
                                        <span>Payment Method</span>
                                        <span>Use Credit or Debit Cards</span>
                                    </div>
                                    <div class="step" id="4">
                                        <span>Review Order</span>
                                        <span>Review and Submit</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class=" checkout-shipping-form pt-lg-50">
                                <div class="card px-0 pt-0 pb-0 mt-lg-0 radius-md border-0">
                                    <div
                                        class="card-header border-bottom-0 align-content-start pb-sm-0 pb-3 px-0 mb-0 pt-0">
                                        <h4 class="fw-500">1. Please create your account</h4>
                                    </div>
                                    <div class="card-body px-0 pb-0 pt-0">
                                        <div class="edit-profile__body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="name1">Username</label>
                                                    <input type="text" class="form-control" id="name1"
                                                        placeholder="Usename">
                                                </div>
                                                <div class="form-group create-passord">
                                                    <label for="phoneNumber1">Email Address</label>
                                                    <input type="Email" class="form-control" id="phoneNumber1"
                                                        placeholder="username@email.com">
                                                </div>
                                                <div class="form-group create-passord mb-0">
                                                    <label for="phoneNumber">Confirm Password</label>
                                                    <input type="password" class="form-control" id="phoneNumber"
                                                        placeholder="Password" value="121445">
                                                </div>
                                                <span class="create-passord-warn">Enter a valid password. Min 6 characters
                                                    long</span>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex pt-40 justify-content-md-end justify-content-center border-top mt-25">
                                    <a href="{{ $next_page_url }}"
                                        class="btn btn-primary btn-default btn-squared text-capitalize text-white">Save
                                        & Next<i class="ml-10 me-0 las la-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
