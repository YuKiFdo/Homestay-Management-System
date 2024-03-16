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
                            <div class="step completed" id="1">
                                <span><img class="svg" src="{{ asset('assets/img/svg/user-success.svg') }}" alt=""></span>
                                <span>Create Account</span>
                            </div>
                            <div class="current"><img src="{{ asset('assets/img/svg/checkoutin.svg') }}" alt="img" class="svg"></div>
                            <div class="step current" id="2">
                                <span><img class="svg" src="{{ asset('assets/img/svg/adress-active.svg') }}" alt=""></span>
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
                            <div class="card checkout-shipping-form shadow-none border-0">
                                <div class="card-header border-bottom-0 pb-sm-0 pb-1">
                                    <h4 class="fw-500">2. Please fill in your shipping address</h4>
                                </div>
                                <div class="card-body">
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
                                                    <select
                                                        class="js-example-basic-single js-states form-control select2-hidden-accessible"
                                                        id="countryOption" data-select2-id="countryOption" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="JAN" data-select2-id="2">event</option>
                                                        <option value="FBR">Venues</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--default"
                                                        dir="ltr" data-select2-id="1" style="width: 473.25px;"><span
                                                            class="selection"><span
                                                                class="select2-selection select2-selection--single"
                                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                                tabindex="0" aria-disabled="false"
                                                                aria-labelledby="select2-countryOption-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-countryOption-container" role="textbox"
                                                                    aria-readonly="true" title="event"><span
                                                                        class="select2-selection__clear"
                                                                        title="Remove all items"
                                                                        data-select2-id="3">×</span>event</span><span
                                                                    class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                            <div class="button-group d-flex pt-10 mb-20 justify-content-between flex-wrap">
                                                <a href="{{ $prev_page_url }}"
                                                    class="btn btn-light btn-default btn-squared fw-400 text-capitalize m-1"><i
                                                        class="las la-arrow-left me-10"></i>Previous</a>
                                                <a href="{{ $next_page_url }}"
                                                    class="btn text-white btn-primary btn-default btn-squared text-capitalize m-1">Save
                                                    &amp; Next<i class="ms-10 me-0 las la-arrow-right"></i></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- ends: .card -->
                        </div><!-- ends: .col -->
                    </div>
                </div><!-- ends: col -->
            </div>
        </div><!-- ends: .global-shadow -->
    </div>
@endsection
