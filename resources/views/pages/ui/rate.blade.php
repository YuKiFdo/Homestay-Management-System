@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-rate') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-rate') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header py-20">
                        <h6>Basic</h6>
                    </div>
                    <div class="card-body">
                        <div class="rating-basic"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header py-20">
                        <h6>Read Only</h6>
                    </div>
                    <div class="card-body">
                        <div class="rating-readOnly"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header py-20">
                        <h6>Half Star</h6>
                    </div>
                    <div class="card-body">
                        <div class="rating-half-star"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header py-20">
                        <h6>Rater</h6>
                    </div>
                    <div class="card-body">
                        <div class="dm-rating-wrap d-flex align-items-center">
                            <span class="rater"></span>
                            <span class="rater-text">
                                <span class="rate-count">2</span>Stars</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection