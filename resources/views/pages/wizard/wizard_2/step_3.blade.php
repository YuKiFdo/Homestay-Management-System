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
                            <div class="step current" id="3">
                                <span>3</span>
                                <span>Hints</span>
                            </div>
                            <div class="current"><img src="{{ asset('assets/img/svg/checkout.svg') }}" alt="img" class="svg"></div>
                            <div class="step" id="4">
                                <span>4</span>
                                <span>Finished</span>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8 col-sm-10">
                            <div class="card checkout-shipping-form shadow-none px-30 pt-2 pb-15 border-color">
                                <div class="card-header border-bottom-0 pb-sm-0 pb-1 px-0">
                                    <h4 class="fw-500">3. Please see your hints</h4>
                                </div>
                                <div class="card-body p-0">
                                    <div class="edit-profile__body">
                                        <form>
                                            <div class="form-group mb-1  d-flex justify-content-center">
                                                <label for="staticEmail"
                                                    class=" col-form-label space-nowrap  pt-1 mb-0">First Name :</label>
                                                <input type="text" class="form-control-plaintext pt-1" id="staticEmail"
                                                    placeholder="David">
                                            </div>
                                            <div class="form-group mb-1 d-flex justify-content-center">
                                                <label for="staticEmail2" class=" col-form-label space-nowrap mb-0">Last
                                                    Name :</label>
                                                <input type="text" class="form-control-plaintext" id="staticEmail2"
                                                    placeholder="Warner">
                                            </div>
                                            <div class="form-group mb-1 d-flex justify-content-center">
                                                <label for="staticEmail3" class=" col-form-label space-nowrap mb-0">Email
                                                    Address :</label>
                                                <input type="Email" class="form-control-plaintext" id="staticEmail3"
                                                    placeholder="email@example.com">
                                            </div>
                                            <div class="form-group mb-0 d-flex justify-content-center">
                                                <label for="staticEmail4" class=" col-form-label space-nowrap mb-0">Email
                                                    :</label>
                                                <input type="text" class="form-control-plaintext" id="staticEmail4"
                                                    placeholder="15/3 Malborne Australia">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- ends: .card -->
                            <div class="button-group d-flex pt-40 justify-content-between flex-wrap">
                                <a href="{{ $prev_page_url }}"
                                
                                    class="btn btn-light btn-default btn-squared fw-400 text-capitalize m-1"><i
                                        class="las la-arrow-left me-10"></i>Previous</a>
                                <a href="{{ $next_page_url }}"
                                    class="btn text-white btn-primary btn-default btn-squared text-capitalize m-1">Save
                                    & Next<i class="ms-10 me-0 las la-arrow-right"></i></a>
                            </div>
                        </div><!-- ends: .col -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
