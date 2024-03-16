@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="shop-breadcrumb">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.apex-chart') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.apex-chart') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card">
              <div class="card-header">
                Vertical Bar Chart
              </div>
              <div class="card-body" dir="ltr">

                <div class="">
                  <div class="barChart"></div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="card">
              <div class="card-header" dir="ltr">
                Horizontal Bar Chart
              </div>
              <div class="card-body">

                <div class="">
                  <div class="GroupedBarChart"></div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="card">
              <div class="card-header">
                Pie Chart
              </div>
              <div class="card-body">

                <div class="">
                  <div class="apexPieToday"></div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="card">
              <div class="card-header">
                Basic Radiul Bars
              </div>
              <div class="card-body">

                <div class="color-success">
                  <div class="storage2"></div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="card">
              <div class="card-header">
                Radiul Bars
              </div>
              <div class="card-body">

                <div class="">
                  <div class="performanceDetails"></div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="card">
              <div class="card-header">
                Area Chart
              </div>
              <div class="card-body" dir="ltr">

                <div class="">
                  <div class="areaChartBasic"></div>
                </div>

              </div>
            </div>
          </div>
    </div>
</div>
@endsection