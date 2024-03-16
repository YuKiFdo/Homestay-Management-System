@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.chart-peity') }}</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.chart-peity') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    LINE CHART
                </div>
                <div class="card-body">
                    <span class="line">5,3,9,6,5,9,7,3,5,2</span>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    AREA CHART
                </div>
                <div class="card-body">
                    <span class="area-line">5,3,9,6,5,9,7,3,5,2</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection