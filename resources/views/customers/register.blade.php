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
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Add Customer</a></li>
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
                        <form class="was-validated">
                            <div class="row">
                                <div class="col-md-6 mb-25">
                                    <div class="with-icon">
                                        <span class="la-user lar color-gray"></span>
                                        <input type="text" class="form-control is-invalid ih-medium ip-light radius-xs b-light" id="validationServer01" placeholder="Customer Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="with-icon">
                                        <span class="fas fa-id-card"></span>
                                        <input type="text" class="form-control is-invalid ih-medium ip-light radius-xs b-light" id="validationServer02" placeholder="ID / Passport Number" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-25">
                                    <div class="with-icon">
                                        <span class="fas fa-mobile"></span>
                                        <input type="text" class="form-control is-invalid ih-medium ip-light radius-xs b-light" id="validationServer03" placeholder="Phone Number" required>
                                    </div>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="with-icon">
                                        <span class="nav-icon uil uil-envelope"></span>
                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light" id="validationDefault04" placeholder="Email" required>
                                    </div>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-6 mb-25">
                                    <div class="with-icon">
                                        <span class="fas fa-globe"></span>
                                        <input type="text" class="form-control is-invalid ih-medium ip-light radius-xs b-light" id="validationServer05" placeholder="Country" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-calender mb-20">
                                        <div class="position-relative">
                                            <input type="text" class="form-control is-invalid ih-medium ip-light radius-xs b-light" id="validationServer06" placeholder="Date Of Birth" required>
                                            <a href="#"><img class="svg"
                                                    src="{{ asset('assets/img/svg/calendar.svg') }}" alt="calendar"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-25">
                                    <div class="form-group form-group-calender mb-20">
                                        <div class="position-relative">
                                            <input type="text" class="form-control is-invalid ih-medium ip-light radius-xs b-light" id="validationServer05" placeholder="Anniversary" required>
                                            <a href="#"><img class="svg"
                                                    src="{{ asset('assets/img/svg/calendar.svg') }}" alt="calendar"></a>
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
