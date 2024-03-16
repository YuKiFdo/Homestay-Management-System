@section('title', $title)
@section('description', $description)
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.dog-add') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Dog</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.dog-add') }}</li>
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
                                    <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                        placeholder="First Name">
                                </div>
                                <div class="col-md-6 mb-25">
                                    <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                        placeholder="Last Name">
                                </div>
                                <div class="col-md-6 mb-25">
                                    <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                        placeholder="City">
                                </div>
                                <div class="col-md-6 mb-25">
                                    <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                        placeholder="Country">
                                </div>
                                <div class="col-md-6 mb-25">
                                    <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                        placeholder="Company">
                                </div>
                                <div class="col-md-6 mb-25">
                                    <input type="email" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                        placeholder="Email">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-calender mb-20">
                                        <div class="position-relative">
                                            <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light"
                                                id="datepicker8" placeholder="Checkin">
                                            <a href="#"><img class="svg"
                                                    src="{{ asset('assets/img/svg/calendar.svg') }}" alt="calendar"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="with-icon">
                                        <span class="la-user lar color-gray"></span>
                                        <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light"
                                            id="inputNameIcon" placeholder="Name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="with-icon">
                                        <span class="fas fa-mobile"></span>
                                        <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light"
                                            id="inputNameIcon" placeholder="Phone Number">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                </div>

                                <div class="col-md-6">
                                    <div class="layout-button mt-0">
                                        <button type="button"
                                            class="btn btn-default btn-squared border-normal bg-normal px-20 mr-2">Cancel</button>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-25">
                                    <div class="layout-button mt-0 d-flex justify-content-end">
                                        <!-- Changed class to 'd-flex justify-content-end' -->
                                        {{-- <button type="button" class="btn btn-default btn-squared border-normal bg-normal px-20 mr-2">Cancel</button> <!-- Added 'mr-2' for right margin --> --}}
                                        <button type="button"
                                            class="btn btn-primary btn-default btn-squared px-30">Save</button>
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
