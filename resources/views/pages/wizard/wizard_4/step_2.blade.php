@section('title', $title)
@section('description', $description)
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-breadcrumb">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.wizard-four') }}</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.wizard-four') }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class=" checkout wizard9 global-shadow border px-sm-50 px-20 pt-sm-50 py-30 mb-30 bg-white radius-xl w-100">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <div class="checkout-progress-indicator border-color p-30 radius-md">
                                <div class="checkout-progress2">
                                    <div class="step completed" id="1">
                                        <span class="las la-check"></span>
                                        <span>Start</span>
                                    </div>
                                    <div class="step current" id="2">
                                        <span>2</span>
                                        <span>Profile</span>
                                    </div>
                                    <div class="step" id="3">
                                        <span>3</span>
                                        <span>Hints</span>
                                    </div>
                                    <div class="step" id="4">
                                        <span>4</span>
                                        <span>Finished</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div
                                class="card checkout-shipping-form shadow-none px-30 pt-2 pb-0 border-color mt-lg-0 mt-30 radius-md ">
                                <div class="card-header border-bottom-0 pb-sm-0 pb-1 px-0">
                                    <h4 class="fw-500">2. Please setup your profile</h4>
                                </div>
                                <div class="card-body p-0">
                                    <div class="edit-profile__body">
                                        <form>
                                            <div class="form-group">
                                                <label for="name311">First name</label>
                                                <input type="text" class="form-control" id="name311"
                                                    placeholder="First Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="name622">Last name</label>
                                                <input type="text" class="form-control" id="name622"
                                                    placeholder="Last Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="name31">Email Address</label>
                                                <input type="text" class="form-control" id="name31"
                                                    placeholder="Username@email.com">
                                            </div>
                                            <div class="form-group">
                                                <label for="name62">Address</label>
                                                <input type="text" class="form-control" id="name62"
                                                    placeholder="Enter Address">
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
                                    class="btn text-white btn-primary btn-default btn-squared text-capitalize m-1">Save &
                                    Next<i class="ms-10 me-0 las la-arrow-right"></i></a>
                            </div>
                        </div><!-- ends: col -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
