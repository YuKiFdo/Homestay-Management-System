@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="demo3 mb-25 t-thead-bg">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('page_title.dashboard') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>{{ trans('page_title.dashboard') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('page_title.demo_eight') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            @include('components.dashboard.demo_eight.overview_cards')
            @include('components.dashboard.demo_eight.monthly_earning')
            @include('components.dashboard.demo_eight.profit_growth')
            @include('components.dashboard.demo_eight.total_sale')
            @include('components.dashboard.demo_eight.active_users')
            @include('components.dashboard.demo_eight.sale_overview')
            @include('components.dashboard.demo_eight.top_product')
            @include('components.dashboard.demo_eight.recent_deals')
                  
        </div>
    </div>
</div>
@endsection