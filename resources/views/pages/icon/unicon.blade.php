@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.icon-unicon') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>{{ trans('menu.icon-menu-title') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.icon-unicon') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Simply beautiful open source icons</h6>
                    </div>
                    <div class="card-body">
                        <div class="row feIcon-list-box icon-list"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection