@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-progress') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-progress') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Basic</h6>
                    </div>
                    <div class="card-body">
                        <div class="progress-wrap d-flex align-items-center mb-15">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-percentage">30%</span>
                        </div>
                        <div class="progress-wrap d-flex align-items-center mb-15">
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-percentage">50%</span>
                        </div>
                        <div class="progress-wrap d-flex align-items-center mb-15">
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-icon"><img src="{{ asset('assets/img/svg/x-circle.svg') }}" alt="x-circle" class="svg color-danger"></span>
                        </div>
                        <div class="progress-wrap d-flex align-items-center mb-15">
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-icon">
                                <img src="{{ asset('assets/img/svg/check-circle.svg') }}" alt="check-circle" class="svg color-success">
                            </span>
                        </div>
                        <div class="progress-wrap d-flex align-items-center mb-0">
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-percentage">60%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection