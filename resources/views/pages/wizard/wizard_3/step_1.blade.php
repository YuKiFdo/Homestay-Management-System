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
                <div class="col-xl-8">
                    <div class="row justify-content-center">
                        <div class="col-xl-5">
                            <div class="checkout-progress-indicator ">
                                <div class="checkout-progress justify-content-center px-0">
                                    <div class="step current" id="1">
                                        <span>1</span>
                                    </div>
                                    <div class="step" id="2">
                                        <span>2</span>
                                    </div>
                                    <div class="step" id="3">
                                        <span>3</span>
                                    </div>
                                    <div class="step" id="4">
                                        <span>4</span>
                                    </div>
                                </div>
                                <div class="card-header border-bottom-0">
                                    <h4>Create Account</h4>
                                    <p>Lorem Ipsum is simply dummy text of the
                                        dummy typesetting industry.</p>
                                    <div class="div">
                                        <img class="svg w-100" src="{{ asset('assets/img/svg/progress1.svg') }}"
                                            alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-8 col-sm-10">
                            <div class="card checkout-shipping-form h-100vh">
                                <div class="card-header border-bottom-0 align-content-start pb-sm-0 pb-1 px-0">
                                    <h4 class="fw-500">1. Please create your account</h4>
                                </div>
                                <div class="card-body p-0">
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
                                            <div
                                                class="button-group d-flex pt-20 mb-20 justify-content-md-end justify-content-center">
                                                <a href="{{ $next_page_url }}"
                                                    class="btn btn-primary btn-default btn-squared text-capitalize text-white">Save
                                                    & Next<i class="ml-10 me-0 las la-arrow-right"></i></a>
                                            </div>
                                        </form>
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
