@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="demo2 mb-25 t-thead-bg">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('page_title.dashboard') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>{{ trans('page_title.dashboard') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('page_title.demo_two') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            @include('components.dashboard.demo_two.overview_cards')
            @include('components.dashboard.demo_two.sales_revenue')
            @include('components.dashboard.demo_two.source_revenue')
            @include('components.dashboard.demo_two.new_product')
            @include('components.dashboard.demo_two.best_seller')
            
        </div>
    </div>
</div>
@endsection