@section('title', $title)
@section('description', $description)
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.customers-add') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Customer</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.customers-add') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-Vertical card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Register New Customer </h6>
                    </div>
                    <div class="card-body py-md-30">
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-25">
                                    <label for="customer_name">Customer Name <span
                                    class="text-danger">*</span></label>
                                    <div class="with-icon">
                                        <span class="la-user lar color-gray"></span>
                                        <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light"
                                            id="inputNameIcon" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="id_or_passport">ID / Passport<span
                                        class="text-danger">*</span></label>
                                    <div class="with-icon">
                                        <span class="fas fa-id-card"></span>
                                        <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light"
                                            id="inputIdIcon" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-25">
                                    <label for="phone_number">Phone Number <span
                                        class="text-danger">*</span></label>
                                    <div class="with-icon">
                                        <span class="fas fa-mobile"></span>
                                        <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light"
                                            id="inputPhoneIcon" placeholder="">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Email<span
                                        class="text-danger">*</span></label>
                                    <div class="with-icon">
                                        <span class="nav-icon uil uil-envelope"></span>
                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light" id="InputEmailIcon" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="dob">Date Of Birth</label>
                                    <div class="form-group form-group-calender mb-20">
                                        <div class="position-relative">
                                            <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light"
                                                id="datepicker8" placeholder="">
                                            <a href="#"><img class="svg"
                                                    src="{{ asset('assets/img/svg/calendar.svg') }}" alt="calendar"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-25">
                                    <label for="anniversary">Anniversary</label>
                                    <div class="form-group form-group-calender mb-20">
                                        <div class="position-relative">
                                            <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light"
                                                id="datepicker" placeholder="">
                                            <a href="#"><img class="svg"
                                                    src="{{ asset('assets/img/svg/calendar.svg') }}" alt="calendar"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-default col-md-6 mb-25">
                                    <div class="card-header py-20">
                                        <label for="country">Country<span
                                            class="text-danger">*</span></label>
                                    </div>
                                    <div class="card-body">
                                        <div class="dropdown  dropdown-hover">
                                            <a class="btn-link" href="">
                                                Click me
                                                <img src="{{ asset('assets/img/svg/chevron-down.svg') }}" alt="chevron-down" class="svg">
                                            </a>
                                            <div class="dropdown-default">
                                                <a class="dropdown-item" href="#">London</a>
                                                <a class="dropdown-item" href="#">Dubai</a>
                                                <a class="dropdown-item" href="#">Sri Lanka</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                </div>

                                <div class="col-md-6">
                                </div>

                                <div class="col-md-6 mb-25">
                                    <div class="layout-button mt-0 d-flex justify-content-end">
                                        <!-- Changed class to 'd-flex justify-content-end' -->
                                        <button type="button" class="btn btn-default btn-squared border-normal bg-normal px-20 mr-2">Cancel</button> <!-- Added 'mr-2' for right margin -->
                                        <button type="button" class="btn btn-primary btn-default btn-squared px-30">Save</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
