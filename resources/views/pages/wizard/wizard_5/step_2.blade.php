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
                                    <div class="step" id="1">
                                        <span>Create Account</span>
                                        <span>Setup Your Account Details</span>
                                    </div>
                                    <div class="step current bg-lighter" id="2">
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
                            <div class="checkout-shipping-form pt-lg-50">
                                <div class="card p-0 radius-md border-0">
                                    <div
                                        class="card-header border-bottom-0 align-content-start pb-sm-0 pb-3 px-0 mb-0 pt-0">
                                        <h4 class="fw-500">Please fill in your shipping address</h4>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="edit-profile__body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="name31">Contact name</label>
                                                    <input type="text" class="form-control" id="name31"
                                                        placeholder="Ibn adam">
                                                </div>
                                                <div class="form-group">
                                                    <label for="name62">Company name <span class="color-extra-light">
                                                            (Optional)</span></label>
                                                    <input type="text" class="form-control" id="name62"
                                                        placeholder="adam">
                                                </div>
                                                <div class="form-group">
                                                    <label for="phoneNumber">phone number</label>
                                                    <input type="tel" class="form-control" id="phoneNumber"
                                                        placeholder="+440">
                                                </div>
                                                <div class="form-group">
                                                    <div class="countryOption">
                                                        <label for="countryOption">
                                                            Country / Region
                                                        </label>
                                                        <select class="js-example-basic-single js-states form-control"
                                                            id="countryOption">
                                                            <option value="JAN">event</option>
                                                            <option value="FBR">Venues</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name32">Street address</label>
                                                    <input type="text" class="form-control mb-15" id="name32"
                                                        placeholder="House number and street name">
                                                    <input type="text" class="form-control" id="name2"
                                                        placeholder="Apartment, suite, unit etc.">
                                                </div>
                                                <div class="form-group">
                                                    <label for="phoneNumber2">city</label>
                                                    <input type="text" class="form-control" id="phoneNumber2"
                                                        placeholder="Enter city">
                                                </div>
                                                <div class="form-group">
                                                    <label for="userBio">Zip / Postal code</label>
                                                    <input type="text" class="form-control" id="userBio"
                                                        placeholder="City Code">
                                                </div>
                                                <div class="border-top mt-30">
                                                    <div
                                                        class="button-group d-flex pt-40 mb-20 justify-content-between flex-wrap">
                                                        <a href="{{ $prev_page_url }}"
                                                            class="btn btn-light btn-default btn-squared fw-400 text-capitalize m-1"><i
                                                                class="las la-arrow-left me-10"></i>Previous</a>
                                                        <a href="{{ $next_page_url }}"
                                                            class="btn text-white btn-primary btn-default btn-squared text-capitalize m-1">Save
                                                            & Next<i class="ms-10 me-0 las la-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div><!-- ends: card -->
                            </div>
                        </div><!-- ends: col -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
