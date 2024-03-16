@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-statistic') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-statistic') }}</li>
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
                        <div class="dm-statistics-wrap d-flex">
                            <div class="statistics-item statistics-default">
                                <span class="statistics-item__title">Active Users</span>
                                <p class="statistics-item__number">
                                    112,893
                                </p>
                            </div>
                            <div class="statistics-item statistics-default">
                                <span class="statistics-item__title">Account Balance (CNY)</span>
                                <p class="statistics-item__number">
                                    112,893.00
                                </p>
                                <div class="statistics-item__action">
                                    <a href="#" class="btn btn-shadow-primary btn-primary btn-md">Recharge</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>Unit</h6>
                    </div>
                    <div class="card-body">
                        <div class="dm-statistics-wrap d-flex">
                            <div class="statistics-item statistics-default">
                                <span class="statistics-item__title">Feedback</span>
                                <p class="statistics-item__number">
                                    <i class="la la-thumbs-up"></i> 1,128
                                </p>
                            </div>
                            <div class="statistics-item statistics-default">
                                <span class="statistics-item__title">Unmerged</span>
                                <p class="statistics-item__number">
                                    93 <span class="text-gray">/100</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>In Card</h6>
                    </div>
                    <div class="card-body">
                        <div class="dm-statistics-wrap d-flex">
                            <div class="statistics-item statistics-success">
                                <span class="statistics-item__title">Active</span>
                                <p class="statistics-item__number">
                                    <i class="la la-arrow-up"></i> 11 <span class="number-fraction">.28</span>
                                </p>
                            </div>
                            <div class="statistics-item statistics-danger">
                                <span class="statistics-item__title">Idle</span>
                                <p class="statistics-item__number">
                                    <i class="la la-arrow-down"></i> 9 <span class="number-fraction">.30</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>In Card</h6>
                    </div>
                    <div class="card-body">
                        <div class="dm-statistics-wrap d-flex">
                            <div class="statistics-countdown">
                                <span class="statistics-countdown__title">Countdown</span>
                                <div class="countdown" data-countdown="2020/12/31">
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