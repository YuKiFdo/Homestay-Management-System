@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.widget-chart') }}</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.widget-chart') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-12 mb-25">
            <div class="card border-0">
                <div class="card-header">
                    <h6>Income And Expenses<span>Nov 23, 2019 - Nov 29, 2019</span></h6>
                    <div class="card-extra">
                        <ul class="card-tab-links nav-tabs nav" role="tablist">
                            <li>
                                <a href="#incExp-week" data-bs-toggle="tab" id="incExp-week-tab" role="tab"
                                    aria-selected="true">Week</a>
                            </li>
                            <li>
                                <a href="#incExp-month" data-bs-toggle="tab" id="incExp-month-tab" role="tab"
                                    aria-selected="true">Month</a>
                            </li>
                            <li>
                                <a href="#incExp-year" class="active" data-bs-toggle="tab" id="incExp-year-tab"
                                    role="tab" aria-selected="true">Year</a>
                            </li>
                        </ul>
                        <div class="dropdown dropleft">
                            <a href="#" role="button" id="income" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal"
                                    class="svg">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="income">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0 pb-0">
                    <div class="tab-content">
                        <div class="tab-pane fade" id="incExp-week" role="tabpanel" aria-labelledby="incExp-week-tab">
                            <div class="inEx-wrap d-flex">
                                <div class="inEx-box">
                                    <div class="inEx__single">
                                        <span class="inEx-subtitle">Total income</span>
                                        <div class="inEx__info d-flex align-items-end">
                                            <h3 class="inEx__title">$4,820</h3>
                                            <span class="inEx-tail color-light">
                                                <span class="inEx__percentage color-success">
                                                    <img src="{{ asset('assets/img/svg/arrow-up.svg') }}" alt="arrow-up"
                                                        class="svg">37%</span>
                                                Since last month
                                            </span>
                                        </div>
                                    </div>
                                    <div class="inEx__single">
                                        <span class="inEx-subtitle">Total expenses</span>
                                        <div class="inEx__info d-flex align-items-end">
                                            <h3 class="inEx__title">$4,820</h3>
                                            <span class="inEx-tail color-light">
                                                <span class="inEx__percentage color-danger">
                                                    <img src="{{ asset('assets/img/svg/arrow-down.svg') }}"
                                                        alt="arrow-down" class="svg">25%</span>
                                                Since last month
                                            </span>
                                        </div>
                                    </div>
                                    <div class="inEx__single">
                                        <span class="inEx-subtitle">Cost of goods sold</span>
                                        <div class="inEx__info d-flex align-items-end">
                                            <h3 class="inEx__title">$2,143</h3>
                                            <span class="inEx-tail color-light">
                                                <span class="inEx__percentage color-success">
                                                    <img src="{{ asset('assets/img/svg/arrow-up.svg') }}" alt="arrow-up"
                                                        class="svg">
                                                    25%
                                                </span>
                                                Since last month
                                            </span>
                                        </div>
                                    </div>
                                    <div class="inEx__single">
                                        <span class="inEx-subtitle">Net profit</span>
                                        <div class="inEx__info d-flex align-items-end">
                                            <h3 class="inEx__title">$2,727</h3>
                                            <span class="inEx-tail color-light">
                                                <span class="inEx__percentage color-success">
                                                    <img src="{{ asset('assets/img/svg/arrow-up.svg') }}" alt="arrow-up"
                                                        class="svg">
                                                    17%
                                                </span>
                                                Since last month
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="inEx-chart">
                                    <div class="parentContainer">
                                        <div>
                                            <canvas id="barChartInEx_W"></canvas>
                                        </div>
                                    </div>
                                    <ul class="legend-static">
                                        <li style="display: inline-flex; align-items: center;">
                                            <span style="background-color: rgb(95, 99, 242);"></span>Total Income
                                        </li>
                                        <li style="display: inline-flex; align-items: center;">
                                            <span style="background-color: rgb(255, 105, 165);"></span>Cost of goods
                                            sold
                                        </li>
                                        <li style="display: inline-flex; align-items: center;">
                                            <span style="background-color: rgb(250, 139, 12);"></span>Total expenses
                                        </li>
                                        <li style="display: inline-flex; align-items: center;">
                                            <span style="background-color: rgb(32, 201, 151);"></span>Net profit
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="incExp-month" role="tabpanel" aria-labelledby="incExp-month-tab">
                            <div class="inEx-wrap d-flex">
                                <div class="inEx-box">
                                    <div class="inEx__single">
                                        <span class="inEx-subtitle">Total income</span>
                                        <div class="inEx__info d-flex align-items-end">
                                            <h3 class="inEx__title">$74,820</h3>
                                            <span class="inEx-tail color-light">
                                                <span class="inEx__percentage color-success">
                                                    <img src="{{ asset('assets/img/svg/arrow-up.svg') }}" alt="arrow-up"
                                                        class="svg">37%</span>
                                                Since last month
                                            </span>
                                        </div>
                                    </div>
                                    <div class="inEx__single">
                                        <span class="inEx-subtitle">Total expenses</span>
                                        <div class="inEx__info d-flex align-items-end">
                                            <h3 class="inEx__title">$74,820</h3>
                                            <span class="inEx-tail color-light">
                                                <span class="inEx__percentage color-danger">
                                                    <img src="{{ asset('assets/img/svg/arrow-down.svg') }}"
                                                        alt="arrow-down" class="svg">25%</span>
                                                Since last month
                                            </span>
                                        </div>
                                    </div>
                                    <div class="inEx__single">
                                        <span class="inEx-subtitle">Cost of goods sold</span>
                                        <div class="inEx__info d-flex align-items-end">
                                            <h3 class="inEx__title">$32,143</h3>
                                            <span class="inEx-tail color-light">
                                                <span class="inEx__percentage color-success">
                                                    <img src="{{ asset('assets/img/svg/arrow-up.svg') }}" alt="arrow-up"
                                                        class="svg">25%</span>
                                                Since last month
                                            </span>
                                        </div>
                                    </div>
                                    <div class="inEx__single">
                                        <span class="inEx-subtitle">Net profit</span>
                                        <div class="inEx__info d-flex align-items-end">
                                            <h3 class="inEx__title">$52,727</h3>
                                            <span class="inEx-tail color-light">
                                                <span class="inEx__percentage color-success">
                                                    <img src="{{ asset('assets/img/svg/arrow-up.svg') }}" alt="arrow-up"
                                                        class="svg">17%</span>
                                                Since last month
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="inEx-chart">
                                    <div class="parentContainer">
                                        <div>
                                            <canvas id="barChartInEx_M"></canvas>
                                        </div>
                                    </div>
                                    <ul class="legend-static">
                                        <li style="display: inline-flex; align-items: center;">
                                            <span style="background-color: rgb(95, 99, 242);"></span>Total Income
                                        </li>
                                        <li style="display: inline-flex; align-items: center;">
                                            <span style="background-color: rgb(255, 105, 165);"></span>Cost of goods
                                            sold
                                        </li>
                                        <li style="display: inline-flex; align-items: center;">
                                            <span style="background-color: rgb(250, 139, 12);"></span>Total expenses
                                        </li>
                                        <li style="display: inline-flex; align-items: center;">
                                            <span style="background-color: rgb(32, 201, 151);"></span>Net profit
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade active show" id="incExp-year" role="tabpanel"
                            aria-labelledby="incExp-year-tab">
                            <div class="inEx-wrap d-flex">
                                <div class="inEx-box">
                                    <div class="inEx__single">
                                        <span class="inEx-subtitle">Total income</span>
                                        <div class="inEx__info d-flex align-items-end">
                                            <h3 class="inEx__title">$274,820</h3>
                                            <span class="inEx-tail color-light">
                                                <span class="inEx__percentage color-success">
                                                    <img src="{{ asset('assets/img/svg/arrow-up.svg') }}" alt="arrow-up"
                                                        class="svg">37%</span>
                                                Since last month
                                            </span>
                                        </div>
                                    </div>
                                    <div class="inEx__single">
                                        <span class="inEx-subtitle">Total expenses</span>
                                        <div class="inEx__info d-flex align-items-end">
                                            <h3 class="inEx__title">$274,820</h3>
                                            <span class="inEx-tail color-light">
                                                <span class="inEx__percentage color-danger">
                                                    <img src="{{ asset('assets/img/svg/arrow-down.svg') }}"
                                                        alt="arrow-down" class="svg">25%</span>
                                                Since last month
                                            </span>
                                        </div>
                                    </div>
                                    <div class="inEx__single">
                                        <span class="inEx-subtitle">Cost of goods sold</span>
                                        <div class="inEx__info d-flex align-items-end">
                                            <h3 class="inEx__title">$532,143</h3>
                                            <span class="inEx-tail color-light">
                                                <span class="inEx__percentage color-success">
                                                    <img src="{{ asset('assets/img/svg/arrow-up.svg') }}" alt="arrow-up"
                                                        class="svg">25%</span>
                                                Since last month
                                            </span>
                                        </div>
                                    </div>
                                    <div class="inEx__single">
                                        <span class="inEx-subtitle">Net profit</span>
                                        <div class="inEx__info d-flex align-items-end">
                                            <h3 class="inEx__title">$252,727</h3>
                                            <span class="inEx-tail color-light">
                                                <span class="inEx__percentage color-success">
                                                    <img src="{{ asset('assets/img/svg/arrow-up.svg') }}" alt="arrow-up"
                                                        class="svg">17%</span>
                                                Since last month
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="inEx-chart">
                                    <div class="parentContainer">
                                        <div>
                                            <canvas id="barChartInEx"></canvas>
                                        </div>
                                    </div>
                                    <ul class="legend-static">
                                        <li style="display: inline-flex; align-items: center;">
                                            <span style="background-color: rgb(95, 99, 242);"></span>Total Income
                                        </li>
                                        <li style="display: inline-flex; align-items: center;">
                                            <span style="background-color: rgb(255, 105, 165);"></span>Cost of goods
                                            sold
                                        </li>
                                        <li style="display: inline-flex; align-items: center;">
                                            <span style="background-color: rgb(250, 139, 12);"></span>Total expenses
                                        </li>
                                        <li style="display: inline-flex; align-items: center;">
                                            <span style="background-color: rgb(32, 201, 151);"></span>Net profit
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mb-25">
            <div class="card card-overview border-0">
                <div class="card-header">
                    <h6>Facebook Overview</h6>
                    <div class="card-extra">
                        <ul class="card-tab-links nav-tabs nav" role="tablist">
                            <li>
                                <a class="active " id="f_today-tab" data-bs-toggle="tab" href="#f_overview-today"
                                    role="tab" aria-selected="true">Today</a>
                            </li>
                            <li>
                                <a id="f_week-tab" data-bs-toggle="tab" href="#f_overview-week" role="tab"
                                    aria-selected="false">Week</a>
                            </li>
                            <li>
                                <a id="f_month-tab" data-bs-toggle="tab" href="#f_overview-month" role="tab"
                                    aria-selected="false">Month</a>
                            </li>
                            <li>
                                <a id="f_year-tab" data-bs-toggle="tab" href="#f_overview-year" role="tab"
                                    aria-selected="false">Year</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body pt-0 pb-0">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="f_overview-today" role=""
                            aria-labelledby="f_overview-tab">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card-overview__left">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="overview-single">
                                                    <div class="overview-content">
                                                        <h1>25,845</h1>
                                                        <p>Engaged Users</p>
                                                        <div>
                                                            <span class="color-success"><img
                                                                    src="{{ asset('assets/img/svg/trending-up.svg') }}"
                                                                    alt="trending-up" class="svg">
                                                                <strong>25%</strong></span>
                                                            <small>20,641 (prev)</small>
                                                        </div>
                                                    </div>
                                                    <div class="overview-single__chart">
                                                        <div class="parentContainer">
                                                            <div>
                                                                <canvas id="lineChartOne"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 br-1">
                                                <div class="overview-single">
                                                    <div class="overview-content">
                                                        <h1>2,534</h1>
                                                        <p>Page Impressions</p>
                                                        <div>
                                                            <span class="color-success"><img
                                                                    src="{{ asset('assets/img/svg/trending-up.svg') }}"
                                                                    alt="trending-up" class="svg">
                                                                <strong>40%</strong></span>
                                                            <small>20,641 (prev)</small>
                                                        </div>
                                                    </div>
                                                    <div class="overview-single__chart">
                                                        <div class="parentContainer">
                                                            <div>
                                                                <canvas id="lineChartTwo"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-overview__right">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="overview-single">
                                                    <div class="overview-content">
                                                        <h1>2,142</h1>
                                                        <p>Total Page Likes</p>
                                                        <div>
                                                            <span class="color-danger">
                                                                <img src="{{ asset('assets/img/svg/trending-down.svg') }}"
                                                                    alt="trending-down" class="svg">
                                                                <img src="{{ asset('assets/img/svg/trending-down.svg') }}"
                                                                    alt="trending-down" class="svg">
                                                                <strong>15%</strong></span>
                                                            <small>20,641 (prev)</small>
                                                        </div>
                                                    </div>
                                                    <div class="overview-single__chart">
                                                        <div class="parentContainer">
                                                            <div>
                                                                <canvas id="lineChartThree"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 co-last">
                                                <div class="overview-single">
                                                    <div class="overview-content">
                                                        <h1>1,132</h1>
                                                        <p>New Page LIke</p>
                                                        <div>
                                                            <span class="color-success"><img
                                                                    src="{{ asset('assets/img/svg/trending-up.svg') }}"
                                                                    alt="trending-up" class="svg">
                                                                <strong>13%</strong></span>
                                                            <small>20,641 (prev)</small>
                                                        </div>
                                                    </div>
                                                    <div class="overview-single__chart">
                                                        <div class="parentContainer">
                                                            <div>
                                                                <canvas id="lineChartFour"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="f_overview-week" role="" aria-labelledby="f_overview-tab">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card-overview__left">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="overview-single">
                                                    <div class="overview-content">
                                                        <h1>25,845</h1>
                                                        <p>Engaged Users</p>
                                                        <div>
                                                            <span class="color-success">
                                                                <img src="{{ asset('assets/img/svg/trending-up.svg') }}"
                                                                    alt="trending-up" class="svg">
                                                                <strong>25%</strong></span>
                                                            <small>20,641 (prev)</small>
                                                        </div>
                                                    </div>
                                                    <div class="overview-single__chart">
                                                        <div class="parentContainer">
                                                            <div>
                                                                <canvas id="lineChartFive"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 br-1">
                                                <div class="overview-single">
                                                    <div class="overview-content">
                                                        <h1>92,534</h1>
                                                        <p>Page Impressions</p>
                                                        <div>
                                                            <span class="color-success"><img
                                                                    src="{{ asset('assets/img/svg/trending-up.svg') }}"
                                                                    alt="trending-up" class="svg">
                                                                <strong>26%</strong></span>
                                                            <small>20,641 (prev)</small>
                                                        </div>
                                                    </div>
                                                    <div class="overview-single__chart">
                                                        <div class="parentContainer">
                                                            <div>
                                                                <canvas id="lineChartSix"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-overview__right">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="overview-single">
                                                    <div class="overview-content">
                                                        <h1>9,142</h1>
                                                        <p>Total Page Likes</p>
                                                        <div>
                                                            <span class="color-danger"><img
                                                                    src="{{ asset('assets/img/svg/trending-down.svg') }}"
                                                                    alt="trending-down" class="svg">
                                                                <strong>23%</strong></span>
                                                            <small>20,641 (prev)</small>
                                                        </div>
                                                    </div>
                                                    <div class="overview-single__chart">
                                                        <div class="parentContainer">
                                                            <div>
                                                                <canvas id="lineChartSeven"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 co-last">
                                                <div class="overview-single">
                                                    <div class="overview-content">
                                                        <h1>432</h1>
                                                        <p>New Page LIke</p>
                                                        <div>
                                                            <span class="color-success"><img
                                                                    src="{{ asset('assets/img/svg/trending-up.svg') }}"
                                                                    alt="trending-up" class="svg">
                                                                <strong>44%</strong></span>
                                                            <small>20,641 (prev)</small>
                                                        </div>
                                                    </div>
                                                    <div class="overview-single__chart">
                                                        <div class="parentContainer">
                                                            <div>
                                                                <canvas id="lineChartEight"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="f_overview-month" role="" aria-labelledby="f_overview-tab">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card-overview__left">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="overview-single">
                                                    <div class="overview-content">
                                                        <h1>25,845</h1>
                                                        <p>Engaged Users</p>
                                                        <div>
                                                            <span class="color-success"><img
                                                                    src="{{ asset('assets/img/svg/trending-up.svg') }}"
                                                                    alt="trending-up" class="svg">
                                                                <strong>25%</strong></span>
                                                            <small>20,641 (prev)</small>
                                                        </div>
                                                    </div>
                                                    <div class="overview-single__chart">
                                                        <div class="parentContainer">
                                                            <div>
                                                                <canvas id="lineChartNine"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 br-1">
                                                <div class="overview-single">
                                                    <div class="overview-content">
                                                        <h1>492,534</h1>
                                                        <p>Page Impressions</p>
                                                        <div>
                                                            <span class="color-success"><img
                                                                    src="{{ asset('assets/img/svg/trending-up.svg') }}"
                                                                    alt="trending-up" class="svg">
                                                                <strong>36%</strong></span>
                                                            <small>20,641 (prev)</small>
                                                        </div>
                                                    </div>
                                                    <div class="overview-single__chart">
                                                        <div class="parentContainer">
                                                            <div>
                                                                <canvas id="lineChartTen"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-overview__right">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="overview-single">
                                                    <div class="overview-content">
                                                        <h1>12,142</h1>
                                                        <p>Total Page Likes</p>
                                                        <div>
                                                            <span class="color-danger"><img
                                                                    src="{{ asset('assets/img/svg/trending-down.svg') }}"
                                                                    alt="trending-down" class="svg">
                                                                <strong>13%</strong></span>
                                                            <small>20,641 (prev)</small>
                                                        </div>
                                                    </div>
                                                    <div class="overview-single__chart">
                                                        <div class="parentContainer">
                                                            <div>
                                                                <canvas id="lineChartEleven"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 co-last">
                                                <div class="overview-single">
                                                    <div class="overview-content">
                                                        <h1>1,432</h1>
                                                        <p>New Page LIke</p>
                                                        <div>
                                                            <span class="color-success"><img
                                                                    src="{{ asset('assets/img/svg/trending-up.svg') }}"
                                                                    alt="trending-up" class="svg">
                                                                <strong>14%</strong></span>
                                                            <small>20,641 (prev)</small>
                                                        </div>
                                                    </div>
                                                    <div class="overview-single__chart">
                                                        <div class="parentContainer">
                                                            <div>
                                                                <canvas id="lineChartTwelve"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="f_overview-year" role="" aria-labelledby="f_overview-tab">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card-overview__left">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="overview-single">
                                                    <div class="overview-content">
                                                        <h1>25,845</h1>
                                                        <p>Engaged Users</p>
                                                        <div>
                                                            <span class="color-success"><img
                                                                    src="{{ asset('assets/img/svg/trending-up.svg') }}"
                                                                    alt="trending-up" class="svg">
                                                                <strong>25%</strong></span>
                                                            <small>20,641 (prev)</small>
                                                        </div>
                                                    </div>
                                                    <div class="overview-single__chart">
                                                        <div class="parentContainer">
                                                            <div>
                                                                <canvas id="lineChartThirteen"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 br-1">
                                                <div class="overview-single">
                                                    <div class="overview-content">
                                                        <h1>492,534</h1>
                                                        <p>Page Impressions</p>
                                                        <div>
                                                            <span class="color-success"><img
                                                                    src="{{ asset('assets/img/svg/trending-up.svg') }}"
                                                                    alt="trending-up" class="svg">
                                                                <strong>36%</strong></span>
                                                            <small>20,641 (prev)</small>
                                                        </div>
                                                    </div>
                                                    <div class="overview-single__chart">
                                                        <div class="parentContainer">
                                                            <div>
                                                                <canvas id="lineChartFourteen"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-overview__right">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="overview-single">
                                                    <div class="overview-content">
                                                        <h1>12,142</h1>
                                                        <p>Total Page Likes</p>
                                                        <div>
                                                            <span class="color-danger"><img
                                                                    src="{{ asset('assets/img/svg/trending-down.svg') }}"
                                                                    alt="trending-down" class="svg">
                                                                <strong>13%</strong></span>
                                                            <small>20,641 (prev)</small>
                                                        </div>
                                                    </div>
                                                    <div class="overview-single__chart">
                                                        <div class="parentContainer">
                                                            <div>
                                                                <canvas id="lineChartFifteen"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 co-last">
                                                <div class="overview-single">
                                                    <div class="overview-content">
                                                        <h1>1,432</h1>
                                                        <p>New Page LIke</p>
                                                        <div>
                                                            <span class="color-success"><img
                                                                    src="{{ asset('assets/img/svg/trending-up.svg') }}"
                                                                    alt="trending-up" class="svg">
                                                                <strong>14%</strong></span>
                                                            <small>20,641 (prev)</small>
                                                        </div>
                                                    </div>
                                                    <div class="overview-single__chart">
                                                        <div class="parentContainer">
                                                            <div>
                                                                <canvas id="lineChartSixteen"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-25">
            <div class="card border-0">
                <div class="card-header">
                    <h6>Account Receivable</h6>
                    <div class="card-extra">
                        <div class="dropdown dropleft">
                            <a href="#" role="button" id="receivable" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal"
                                    class="svg">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="receivable">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="account-chart">
                        <div>
                            <canvas id="lineChartAccountReceive"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-25">
            <div class="card border-0">
                <div class="card-header">
                    <h6>Account Payable</h6>
                    <div class="card-extra">
                        <div class="dropdown dropleft">
                            <a href="#" role="button" id="payable" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal"
                                    class="svg">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="payable">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="account-chart">
                        <div>
                            <canvas id="lineChartAccountPayable"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-6 mb-25">
            <div class="card border-0">
                <div class="card-header">
                    <h6>
                        Total Revenue
                        <span>Nov 23, 2019 - Nov 29, 2019</span>
                    </h6>
                    <div class="card-extra">
                        <ul class="card-tab-links nav-tabs nav" role="tablist">
                            <li>
                                <a href="#t_revenue-week" data-bs-toggle="tab" id="t_revenue-week-tab" role="tab"
                                    aria-selected="true">Week</a>
                            </li>
                            <li>
                                <a href="#t_revenue-month" data-bs-toggle="tab" id="t_revenue-month-tab" role="tab"
                                    aria-selected="false">Month</a>
                            </li>
                            <li>
                                <a class="active" href="#t_revenue-year" data-bs-toggle="tab" id="t_revenue-year-tab"
                                    role="tab" aria-selected="false">Year</a>
                            </li>
                        </ul>
                        <div class="dropdown dropleft">
                            <a href="#" role="button" id="cash" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="cash">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade" id="t_revenue-week" role="tabpanel"
                            aria-labelledby="t_revenue-week-tab">
                            <div class="cashflow-display d-flex">
                                <div class="cashflow-display__single">
                                    <span class="cashflow-display__title">Current Balance</span>
                                    <h2 class="cashflow-display__amount color-primary">$2,784</h2>
                                </div>
                                <div class="cashflow-display__single">
                                    <span class="cashflow-display__title">Cash in</span>
                                    <h2 class="cashflow-display__amount">$4,240</h2>
                                </div>
                                <div class="cashflow-display__single">
                                    <span class="cashflow-display__title">Cash out</span>
                                    <h2 class="cashflow-display__amount">$2,470</h2>
                                </div>
                            </div>
                            <div class="cashflow-chart">
                                <div class="parentContainer">
                                    <div>
                                        <canvas id="barChartCashflow_W"></canvas>
                                    </div>
                                </div>
                                <ul class="legend-static">
                                    <li class="custom-label">
                                        <span style="background-color: rgb(95, 99, 242);"></span>Cash in
                                    </li>
                                    <li class="custom-label">
                                        <span style="background-color: rgb(255, 77, 79);"></span>Cash out
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="t_revenue-month" role="tabpanel"
                            aria-labelledby="t_revenue-month-tab">
                            <div class="cashflow-display d-flex">
                                <div class="cashflow-display__single">
                                    <span class="cashflow-display__title">Current Balance</span>
                                    <h2 class="cashflow-display__amount color-primary">$52,784</h2>
                                </div>
                                <div class="cashflow-display__single">
                                    <span class="cashflow-display__title">Cash in</span>
                                    <h2 class="cashflow-display__amount">$74,240</h2>
                                </div>
                                <div class="cashflow-display__single">
                                    <span class="cashflow-display__title">Cash out</span>
                                    <h2 class="cashflow-display__amount">$22,470</h2>
                                </div>
                            </div>
                            <div class="cashflow-chart">
                                <div class="parentContainer">
                                    <div>
                                        <canvas id="barChartCashflow_M"></canvas>
                                    </div>
                                </div>
                                <ul class="legend-static">
                                    <li class="custom-label">
                                        <span style="background-color: rgb(95, 99, 242);"></span>Cash in
                                    </li>
                                    <li class="custom-label">
                                        <span style="background-color: rgb(255, 77, 79);"></span>Cash out
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade active show" id="t_revenue-year" role="tabpanel"
                            aria-labelledby="t_revenue-year-tab">
                            <div class="cashflow-display d-flex">
                                <div class="cashflow-display__single">
                                    <span class="cashflow-display__title">Current Balance</span>
                                    <h2 class="cashflow-display__amount color-primary">$92,784</h2>
                                </div>
                                <div class="cashflow-display__single">
                                    <span class="cashflow-display__title">Cash in</span>
                                    <h2 class="cashflow-display__amount">$104,240</h2>
                                </div>
                                <div class="cashflow-display__single">
                                    <span class="cashflow-display__title">Cash out</span>
                                    <h2 class="cashflow-display__amount">$872,470</h2>
                                </div>
                            </div>
                            <div class="cashflow-chart">
                                <div class="parentContainer">
                                    <div>
                                        <canvas id="barChartCashflow"></canvas>
                                    </div>
                                </div>
                                <ul class="legend-static">
                                    <li class="custom-label">
                                        <span style="background-color: rgb(95, 99, 242);"></span>Cash in
                                    </li>
                                    <li class="custom-label">
                                        <span style="background-color: rgb(255, 77, 79);"></span>Cash out
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-6 mb-25">
            <div class="card border-0">
                <div class="card-header">
                    <h6>Total Revenue</h6>
                    <div class="card-extra">
                        <ul class="card-tab-links nav-tabs nav" role="tablist">
                            <li>
                                <a href="#tl_revenue-week" data-bs-toggle="tab" id="tl_revenue-week-tab" role="tab"
                                    aria-selected="false">Week</a>
                            </li>
                            <li>
                                <a href="#tl_revenue-month" data-bs-toggle="tab" id="tl_revenue-month-tab" role="tab"
                                    aria-selected="false">Month</a>
                            </li>
                            <li>
                                <a class="active" href="#tl_revenue-year" data-bs-toggle="tab" id="tl_revenue-year-tab"
                                    role="tab" aria-selected="true">Year</a>
                            </li>
                        </ul>
                        <div class="dropdown dropleft">
                            <a href="#" role="button" id="revenue1" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal"
                                    class="svg">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="revenue1">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="tab-content">
                        <div class="tab-pane fade" id="tl_revenue-week" role="tabpanel"
                            aria-labelledby="tl_revenue-week-tab">
                            <div class="revenue-labels">
                                <div>
                                    <strong class="text-primary">$72,848</strong>
                                    <span>Current Period</span>
                                </div>
                                <div>
                                    <strong>$52,458</strong>
                                    <span>Previous Period</span>
                                </div>
                            </div>
                            <div class="wp-chart">
                                <div class="parentContainer">
                                    <div>
                                        <canvas id="myChart6W"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tl_revenue-month" role="tabpanel"
                            aria-labelledby="tl_revenue-month-tab">
                            <div class="revenue-labels">
                                <div>
                                    <strong class="text-primary">$72,848</strong>
                                    <span>Current Period</span>
                                </div>
                                <div>
                                    <strong>$52,458</strong>
                                    <span>Previous Period</span>
                                </div>
                            </div>
                            <div class="wp-chart">
                                <div class="parentContainer">
                                    <div>
                                        <canvas id="myChart6M"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade active show" id="tl_revenue-year" role="tabpanel"
                            aria-labelledby="tl_revenue-year-tab">
                            <div class="revenue-labels">
                                <div>
                                    <strong class="text-primary">$72,848</strong>
                                    <span>Current Period</span>
                                </div>
                                <div>
                                    <strong>$52,458</strong>
                                    <span>Previous Period</span>
                                </div>
                            </div>
                            <div class="wp-chart">
                                <div class="parentContainer">
                                    <div>
                                        <canvas id="myChart6"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-lg-5 mb-25">
            <div class="card border-0">
                <div class="card-header">
                    <h6>Twitter Overview</h6>
                    <div class="card-extra">
                        <ul class="card-tab-links nav-tabs nav">
                            <li>
                                <a class="active" href="#to_week" data-bs-toggle="tab" id="to_week-tab" role="tab"
                                    area-controls="to_week" aria-selected="true">Week</a>
                            </li>
                            <li>
                                <a href="#to_month" data-bs-toggle="tab" id="to_month-tab" role="tab"
                                    area-controls="to_month" aria-selected="false">Month</a>
                            </li>
                            <li>
                                <a href="#to_year" data-bs-toggle="tab" id="to_year-tab" role="tab"
                                    area-controls="to_year" aria-selected="false">Year</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body linechart-overview-wrap">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="to_week" role="tabpanel"
                            aria-labelledby="to_week-tab">
                            <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                <div class="chart-desc">
                                    <span>Tweets</span>
                                    <p class="m-0">
                                        <strong>278</strong>
                                        <sub class="color-success">
                                            <i class="la la-arrow-up"></i> 14%</sub>
                                    </p>
                                </div>
                                <div class="border-line-chart">
                                    <div class="parentContainer">
                                        <div>
                                            <canvas id="lineChartSharpOne"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                <div class="chart-desc">
                                    <span>Tweet Impressions</span>
                                    <p class="m-0">
                                        <strong>78.8k</strong>
                                        <sub class="color-success">
                                            <i class="la la-arrow-up"></i> 14%</sub>
                                    </p>
                                </div>
                                <div class="border-line-chart">
                                    <div class="parentContainer">
                                        <div>
                                            <canvas id="lineChartSharpTwo"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                <div class="chart-desc">
                                    <span>New Followers</span>
                                    <p class="m-0">
                                        <strong>3,015</strong>
                                        <sub class="color-danger">
                                            <i class="la la-arrow-down"></i> 14%</sub>
                                    </p>
                                </div>
                                <div class="border-line-chart">
                                    <div class="parentContainer">
                                        <div>
                                            <canvas id="lineChartSharpThree"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                <div class="chart-desc">
                                    <span>Engagement Rates</span>
                                    <p class="m-0">
                                        <strong>5.2</strong>
                                        <sub class="color-success">
                                            <i class="la la-arrow-up"></i> 14%</sub>
                                    </p>
                                </div>
                                <div class="border-line-chart">
                                    <div class="parentContainer">
                                        <div>
                                            <canvas id="lineChartSharpFour"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between align-items-end">
                                <div class="chart-desc">
                                    <span>Retweets</span>
                                    <p class="m-0">
                                        <strong>8,625</strong>
                                        <sub class="color-danger">
                                            <i class="la la-arrow-down"></i> 14%</sub>
                                    </p>
                                </div>
                                <div class="border-line-chart">
                                    <div class="parentContainer">
                                        <div>
                                            <canvas id="lineChartSharpFive"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="to_month" role="tabpanel" aria-labelledby="to_month-tab">
                            <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                <div class="chart-desc">
                                    <span>Tweets</span>
                                    <p class="m-0">
                                        <strong>378</strong>
                                        <sub class="color-success">
                                            <i class="la la-arrow-up"></i> 14%</sub>
                                    </p>
                                </div>
                                <div class="border-line-chart">
                                    <div class="parentContainer">
                                        <div>
                                            <canvas id="lineChartSharpOneM"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                <div class="chart-desc">
                                    <span>Tweet Impressions</span>
                                    <p class="m-0">
                                        <strong>88.8k</strong>
                                        <sub class="color-success">
                                            <i class="la la-arrow-up"></i> 14%</sub>
                                    </p>
                                </div>
                                <div class="border-line-chart">
                                    <div class="parentContainer">
                                        <div>
                                            <canvas id="lineChartSharpTwoM"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                <div class="chart-desc">
                                    <span>New Followers</span>
                                    <p class="m-0">
                                        <strong>4,417</strong>
                                        <sub class="color-danger">
                                            <i class="la la-arrow-down"></i> 14%</sub>
                                    </p>
                                </div>
                                <div class="border-line-chart">
                                    <div class="parentContainer">
                                        <div>
                                            <canvas id="lineChartSharpThreeM"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                <div class="chart-desc">
                                    <span>Engagement Rates</span>
                                    <p class="m-0">
                                        <strong>7.2</strong>
                                        <sub class="color-success">
                                            <i class="la la-arrow-up"></i> 14%</sub>
                                    </p>
                                </div>
                                <div class="border-line-chart">
                                    <div class="parentContainer">
                                        <div>
                                            <canvas id="lineChartSharpFourM"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between align-items-end">
                                <div class="chart-desc">
                                    <span>Retweets</span>
                                    <p class="m-0">
                                        <strong>10,625</strong>
                                        <sub class="color-danger">
                                            <i class="la la-arrow-down"></i> 14%</sub>
                                    </p>
                                </div>
                                <div class="border-line-chart">
                                    <div class="parentContainer">
                                        <div>
                                            <canvas id="lineChartSharpFiveM"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="to_year" role="tabpanel" aria-labelledby="to_year-tab">
                            <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                <div class="chart-desc">
                                    <span>Tweets</span>
                                    <p class="m-0">
                                        <strong>578</strong>
                                        <sub class="color-success">
                                            <i class="la la-arrow-up"></i> 14%</sub>
                                    </p>
                                </div>
                                <div class="border-line-chart">
                                    <div class="parentContainer">
                                        <div>
                                            <canvas id="lineChartSharpOneY"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                <div class="chart-desc">
                                    <span>Tweet Impressions</span>
                                    <p class="m-0">
                                        <strong>78.8k</strong>
                                        <sub class="color-success">
                                            <i class="la la-arrow-up"></i> 14%</sub>
                                    </p>
                                </div>
                                <div class="border-line-chart">
                                    <div class="parentContainer">
                                        <div>
                                            <canvas id="lineChartSharpTwoY"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                <div class="chart-desc">
                                    <span>New Followers</span>
                                    <p class="m-0">
                                        <strong>3,015</strong>
                                        <sub class="color-danger">
                                            <i class="la la-arrow-down"></i> 14%</sub>
                                    </p>
                                </div>
                                <div class="border-line-chart">
                                    <div class="parentContainer">
                                        <div>
                                            <canvas id="lineChartSharpThreeY"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                <div class="chart-desc">
                                    <span>Engagement Rates</span>
                                    <p class="m-0">
                                        <strong>5.2</strong>
                                        <sub class="color-success">
                                            <i class="la la-arrow-up"></i> 14%</sub>
                                    </p>
                                </div>
                                <div class="border-line-chart">
                                    <div class="parentContainer">
                                        <div>
                                            <canvas id="lineChartSharpFourY"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between align-items-end">
                                <div class="chart-desc">
                                    <span>Retweets</span>
                                    <p class="m-0">
                                        <strong>8,625</strong>
                                        <sub class="color-danger">
                                            <i class="la la-arrow-down"></i> 14%</sub>
                                    </p>
                                </div>
                                <div class="border-line-chart">
                                    <div class="parentContainer">
                                        <div>
                                            <canvas id="lineChartSharpFiveY"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-8 col-lg-7 mb-25">
            <div class="row">
                <div class="col-xxl-6 mb-25">
                    <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
                        <div>
                            <div class="overview-content">
                                <h1>7,461</h1>
                                <p>Orders</p>
                                <div class="ap-po-details-time">
                                    <span class="color-success"><i class="las la-arrow-up"></i>
                                        <strong>25%</strong></span>
                                    <small>Since last week</small>
                                </div>
                            </div>
                        </div>
                        <div class="ap-po-timeChart">
                            <div class="overview-single__chart d-md-flex align-items-end">
                                <div class="parentContainer">
                                    <div>
                                        <canvas id="mychart8"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 mb-25">
                    <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
                        <div>
                            <div class="overview-content">
                                <h1>$28,947</h1>
                                <p>Revenue</p>
                                <div class="ap-po-details-time">
                                    <span class="color-success"><i class="las la-arrow-up"></i>
                                        <strong>25%</strong></span>
                                    <small>Since last week</small>
                                </div>
                            </div>
                        </div>
                        <div class="ap-po-timeChart">
                            <div class="overview-single__chart d-md-flex align-items-end">
                                <div class="parentContainer">
                                    <div>
                                        <canvas id="mychart9"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 mb-25">
                    <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
                        <div>
                            <div class="overview-content">
                                <h1>$3,241</h1>
                                <p>Avg. Order Value</p>
                                <div class="ap-po-details-time">
                                    <span class="color-danger"><i class="las la-arrow-down"></i>
                                        <strong>25%</strong></span>
                                    <small>Since last week</small>
                                </div>
                            </div>
                        </div>
                        <div class="ap-po-timeChart">
                            <div class="overview-single__chart d-md-flex align-items-end">
                                <div class="parentContainer">
                                    <div>
                                        <canvas id="mychart10"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 mb-25">
                    <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
                        <div>
                            <div class="overview-content">
                                <h1>45.32k</h1>
                                <p>Unique visitors</p>
                                <div class="ap-po-details-time">
                                    <span class="color-success"><i class="las la-arrow-up"></i>
                                        <strong>35%</strong></span>
                                    <small>Since last week</small>
                                </div>
                            </div>
                        </div>
                        <div class="ap-po-timeChart">
                            <div class="overview-single__chart d-md-flex align-items-end">
                                <div class="parentContainer">
                                    <div>
                                        <canvas id="mychart11"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-lg-6  mb-25">
            <div class="card border-0">
                <div class="card-header">
                    <h6>Youtube Subscribers</h6>
                    <div class="card-extra">
                        <ul class="card-tab-links nav-tabs nav">
                            <li>
                                <a href="#y_subscriber-week" class="active" data-bs-toggle="tab" id="ys_week-tab"
                                    role="tab" area-controls="y_subscriber" aria-selected="true">Week</a>
                            </li>
                            <li>
                                <a href="#y_subscriber-month" data-bs-toggle="tab" id="ys_month-tab" role="tab"
                                    area-controls="y_subscriber" aria-selected="false">Month</a>
                            </li>
                            <li>
                                <a href="#y_subscriber-year" id="ys_year-tab" data-bs-toggle="tab" role="tab"
                                    area-controls="y_subscriber" aria-selected="false">Year</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="y_subscriber-week" role="tabpanel"
                            aria-labelledby="y_subscriber-week">
                            <div class="card-chart-bar d-flex justify-content-between">
                                <div class="card-bar-top">
                                    <p>Subscribers</p>
                                    <h3 class="card-bar-info d-flex align-items-end">25,472
                                        <sub class="color-success">
                                            <img src="{{ asset('assets/img/svg/arrow-up.svg') }}" alt="arrow-up"
                                                class="svg"> 25%</sub>
                                    </h3>
                                </div>
                                <ul class="legend-static">
                                    <li class="custom-label">
                                        <span style="background-color: rgb(95, 99, 242);"></span>Gained
                                    </li>
                                    <li class="custom-label">
                                        <span style="background-color: rgb(255, 77, 79);"></span>Lost
                                    </li>
                                </ul>
                            </div>
                            <div class="card-chart">
                                <div class="parentContainer">
                                    <div>
                                        <canvas id="ys_barChartOne"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="y_subscriber-month" role="tabpanel"
                            aria-labelledby="y_subscriber-week">
                            <div class="card-chart-bar d-flex justify-content-between">
                                <div class="card-bar-top">
                                    <p>Subscribers</p>
                                    <h3 class="card-bar-info d-flex align-items-end">75,582
                                        <sub class="color-success">
                                            <img src="{{ asset('assets/img/svg/arrow-up.svg') }}" alt="arrow-up"
                                                class="svg"> 45%</sub>
                                    </h3>
                                </div>
                                <ul class="legend-static">
                                    <li class="custom-label">
                                        <span style="background-color: rgb(95, 99, 242);"></span>Gained
                                    </li>
                                    <li class="custom-label">
                                        <span style="background-color: rgb(255, 77, 79);"></span>Lost
                                    </li>
                                </ul>
                            </div>
                            <div class="card-chart">
                                <div class="parentContainer">
                                    <div>
                                        <canvas id="ys_barChartTwo"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="y_subscriber-year" role="tabpanel"
                            aria-labelledby="y_subscriber-week">
                            <div class="card-chart-bar d-flex justify-content-between">
                                <div class="card-bar-top">
                                    <p>Subscribers</p>
                                    <h3 class="card-bar-info d-flex align-items-end">124,892
                                        <sub class="color-success">
                                            <img src="{{ asset('assets/img/svg/arrow-up.svg') }}" alt="arrow-up"
                                                class="svg"> 65%</sub>
                                    </h3>
                                </div>
                                <ul class="legend-static">
                                    <li class="custom-label">
                                        <span style="background-color: rgb(95, 99, 242);"></span>Gained
                                    </li>
                                    <li class="custom-label">
                                        <span style="background-color: rgb(255, 77, 79);"></span>Lost
                                    </li>
                                </ul>
                            </div>
                            <div class="card-chart">
                                <div class="parentContainer">
                                    <div>
                                        <canvas id="ys_barChartThree"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
