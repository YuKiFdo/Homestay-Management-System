@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="shop-breadcrumb">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.chart-js') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.chart-js') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card">
              <div class="card-header">
                Bar Chart
              </div>
              <div class="card-body">


                <div>
                  <canvas id="barChartVertical"></canvas>
                </div>


              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="card">
              <div class="card-header">
                Horizontal Chart
              </div>
              <div class="card-body">


                <div>
                  <canvas id="barChartHorizontal"></canvas>
                </div>


              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="card">
              <div class="card-header">
                Horizontal Chart
              </div>
              <div class="card-body">


                <div>
                  <canvas id="barChartStacked"></canvas>
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
                  <canvas id="lineChartBasic"></canvas>
                </div>


              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="card">
              <div class="card-header">
                Area Chart
              </div>
              <div class="card-body">


                <div>
                  <canvas id="areaChartBasic"></canvas>
                </div>


              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="card">
              <div class="card-header">
                Radar Chart
              </div>
              <div class="card-body">


                <div>
                  <canvas id="radarChart"></canvas>
                </div>


              </div>
            </div>
          </div>
    </div>
</div>
@endsection