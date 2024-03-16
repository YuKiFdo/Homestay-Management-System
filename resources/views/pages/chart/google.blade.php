@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.chart-google') }}</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.chart-google') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    Basic bar chart with multiple series
                </div>
                <div class="card-body">
                    <div>
                        <div id="google-barChart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    Material Design
                </div>
                <div class="card-body">
                    <div>
                        <div id="google-meterialChart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    Stacked bar chart with multiple series
                </div>
                <div class="card-body">
                    <div>
                        <div id="google-barChartStacked"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    Custom Colors Bar Chart
                </div>
                <div class="card-body">
                    <div>
                        <div id="google-barChartCustomColor"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    Combo Chart
                </div>
                <div class="card-body">
                    <div>
                        <div id="google-comboChart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    Line Chart
                </div>
                <div class="card-body">
                    <div>
                        <div id="google-lineChart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    Multiple Line Chart
                </div>
                <div class="card-body">
                    <div>
                        <div id="google-lineChartMultiple"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    Organization Chart
                </div>
                <div class="card-body">
                    <div>
                        <div id="google-orgChart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    Basic Pie Chart
                </div>
                <div class="card-body">
                    <div>
                        <div id="google-pieChartBasic"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    Basic Pie Chart
                </div>
                <div class="card-body">
                    <div>
                        <div id="google-pieChart3d"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection