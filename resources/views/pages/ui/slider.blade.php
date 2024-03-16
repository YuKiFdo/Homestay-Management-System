@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-slider') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-slider') }}
                                </li>
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
                        <div class="slider-wrapper">
                            <div class="dm-slider">
                                <div class="slider-basic">
                                </div>
                            </div>
                        </div>
                        <div class="slider-wrapper">
                            <div class="dm-slider">
                                <div class="slider-range">
                                </div>
                            </div>
                        </div>
                        <div class="slider-controller">
                            <span>Disabled:</span>
                            <div class="form-check form-switch form-switch-sm">
                                <input type="checkbox" class="form-check-input" id="switch-slider">
                                <label class="form-check-label" for="switch-slider"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
