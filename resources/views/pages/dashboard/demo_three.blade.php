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
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('page_title.demo_three') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
           
            @include('components.dashboard.demo_three.monthly_earning')
            @include('components.dashboard.demo_three.profit_growth')                
            @include('components.dashboard.demo_three.overview_cards')                
            @include('components.dashboard.demo_three.total_sales')                
            @include('components.dashboard.demo_three.total_products')                
            @include('components.dashboard.demo_three.latest_transactions')
            
            <div class="col-12 mb-25">
                @include('components.dashboard.demo_three.active_users')                
            </div>
            
        </div>
    </div>
</div>
@endsection