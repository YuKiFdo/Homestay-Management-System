@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.map-leaflet') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.map-leaflet') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Leaflet Basic Map</h6>
                    </div>
                    <div class="card-body">
                        <div id="leaflet-basic"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Leaflet Multiple Icon</h6>
                    </div>
                    <div class="card-body">
                        <div id="leaflet-multiIcon"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Leaflet Custom Icon</h6>
                    </div>
                    <div class="card-body">
                        <div id="leaflet-customIcon"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Leaflet Cluster Map</h6>
                    </div>
                    <div class="card-body">
                        <div id="leaflet-cluster"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection