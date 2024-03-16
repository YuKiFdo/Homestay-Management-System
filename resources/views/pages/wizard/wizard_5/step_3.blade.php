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
                  <div class="checkout-progress-indicator border-0 p-0 radius-md mt-lg-30 p-xl-20 py-30 ps-30 pe-lg-0 pe-30">
                    <div class="checkout-progress3">
                      <div class="step" id="1">
                        <span>Create Account</span>
                        <span>Setup Your Account Details</span>
                      </div>
                      <div class="step " id="2">
                        <span>Shipping Address</span>
                        <span>Choose Your Location</span>
                      </div>
                      <div class="step current bg-lighter" id="3">
                        <span>Payment Method</span>
                        <span>Use Credit or Debit Cards</span>
                      </div>
                      <div class="step" id="4">
                        <span>Review Order</span>
                        <span>Review and Submit</span>
                      </div>
                    </div>
                  </div><!-- checkout -->
                </div>
                <div class="col-lg-7">
                  <div class="card checkout-shipping-form shadow-none pt-lg-50">
                    <div class="payment-method-area payment-method-area--top w-100 mt-0">
                      <h4 class="fw-500">Please select your payment method</h4>
                      <div class="d-flex mt-sm-40 mt-20">
                        <div class="card payment-method-card w-100 p-0 border-0 shadow-none">
                          <div class="card-body shadow-none border-0 p-0">
                            <form method="post">
                              <div class="form-cc">
                                <div class="form-group mb-30">
                                  <label for="payment1">card number</label>
                                  <div class=" d-flex justify-content-between align-items-center form-control ps-0">
                                    <input type="text" class="w-100 border-0 box-shadow-none form-control" id="payment1" placeholder="number">
                                    <img src="{{ asset('assets/img/ms.png') }}" alt="visa" class="form-cc-img d-md-block d-none">
                                  </div>
                                </div>
                                <div class="form-group mb-30">
                                  <label for="payment2">name on card</label>
                                  <input type="text" class="form-control" id="payment2" placeholder="full name">
                                </div>
                                <div class="form-group mb-15">
                                  <label>Expiration date</label>
                                  <div class="d-flex flex-wrap flex-lg-nowrap mb-md-15">
                                    <div class="w-100 me-xl-20 mb-15">
                                      <select class="js-example-basic-single js-states form-control" id="month">
                                        <option value="JAN">Jan</option>
                                        <option value="FBR">FRB</option>
                                      </select>
                                    </div>
                                    <div class="w-100">
                                      <select class="js-example-basic-single js-states form-control" id="year">
                                        <option value="JAN">2020</option>
                                        <option value="FBR">2019</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group mb-0 payment-method-csv">
                                  <label for="payment5">CVV</label>
                                  <div class="d-flex align-items-center flex-wrap">
                                    <input type="text" class="form-control me-10" id="payment5" placeholder="XXX">
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div><!-- ends: .card -->
                      </div>
                    </div><!-- ends: payment area -->
                    <div class="button-group d-flex pt-40 mb-xl-20  justify-content-sm-between m-0 mb-xl-30 mb-30 flex-wrap border-top mt-30">
                      <a href="{{ $prev_page_url }}" class="btn btn-light btn-default btn-squared fw-400 text-capitalize m-sm-0 m-1"><i class="las la-arrow-left me-10"></i>Previous</a>
                      <a href="{{ $next_page_url }}" class="btn text-white btn-primary btn-default btn-squared text-capitalize m-sm-0 m-1">Save
                        &
                        Next<i class="ms-10 me-0 las la-arrow-right"></i></a>
                    </div><!-- ends: button group -->
                  </div><!-- ends: .card -->
                </div><!-- ends: col -->
              </div>
            </div><!-- ends: col -->
          </div>
        </div><!-- End: .global-shadow-->
      </div>
@endsection
