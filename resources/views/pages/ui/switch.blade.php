@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-switch') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-switch') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>Basic</h6>
                    </div>
                    <div class="card-body">
                        <div class="dm-switch-wrap">


                            <div class="form-check form-switch form-switch-primary form-switch-sm">
                                <input type="checkbox" class="form-check-input" id="switch-s1" checked>
                                <label class="form-check-label" for="switch-s1"></label>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- ends: .card -->
            </div>
            <!-- ends: .col-lg-6 -->
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>Size</h6>
                    </div>
                    <div class="card-body">
                        <div class="dm-switch-wrap d-flex align-items-center">


                            <div class="form-check form-switch form-switch-primary form-switch-default">
                                <input type="checkbox" class="form-check-input" id="switch-s2" checked>
                                <label class="form-check-label" for="switch-s2"></label>
                            </div>




                            <div class="form-check form-switch form-switch-secondary form-switch-sm">
                                <input type="checkbox" class="form-check-input" id="switch-s3" checked>
                                <label class="form-check-label" for="switch-s3"></label>
                            </div>




                            <div class="form-check form-switch form-switch-info form-switch-md">
                                <input type="checkbox" class="form-check-input" id="switch-s4" checked>
                                <label class="form-check-label" for="switch-s4"></label>
                            </div>




                            <div class="form-check form-switch form-switch-warning form-switch-lg">
                                <input type="checkbox" class="form-check-input" id="switch-s5" checked>
                                <label class="form-check-label" for="switch-s5"></label>
                            </div>




                            <div class="form-check form-switch form-switch-danger form-switch-xl">
                                <input type="checkbox" class="form-check-input" id="switch-s6" checked>
                                <label class="form-check-label" for="switch-s6"></label>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- ends: .card -->
            </div>
            <!-- ends: .col-lg-6 -->
        </div>
    </div>
</div>
@endsection