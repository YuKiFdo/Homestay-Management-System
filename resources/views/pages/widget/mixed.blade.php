@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.widget-mixed') }}</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.widget-mixed') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-lg-6 mb-25">
            <div class="bg-white radius-xl pt-25 pb-50 px-25">
                <div class="card order-summery  bg-normal p-sm-25 p-15">
                    <div class="card-header border-bottom-0 p-0 pb-25">
                        <h5 class="fw-500">Order Summary</h5>
                    </div>
                    <div class="card-body bg-white">
                        <div class="total">
                            <div class="subtotalTotal">
                                Subtotal:
                                <span>$1,690.26</span>
                            </div>
                            <div class="taxes">
                                discount:
                                <span>-$126.30</span>
                            </div>
                            <div class="shipping">
                                Shipping charge:
                                <span>$46.30</span>
                            </div>
                        </div>
                        <div class="select-cupon position-relative">
                            <span class="percent"><img src="{{ asset('assets/img/svg/coupon.svg') }}" alt="svg" class="svg"></span>
                            <select class="js-example-basic-single js-states form-control" id="cupon">
                                <option value="01">HROJSF</option>
                                <option value="02">RYZZWK</option>
                                <option value="03">CLMVBG</option>
                                <option value="04">RQAEAD</option>
                                <option value="05">DFINSX</option>
                            </select>
                        </div>
                        <div class="promo-code">
                            <form>
                                <label for="exampleInputEmail1">promo code</label>
                                <div class="d-flex align-items-center">
                                    <input id="exampleInputEmail1" type="text" class="form-control" />
                                    <a href="#" class="btn ">apply</a>
                                </div>
                            </form>
                        </div>
                        <div class="total-money d-flex justify-content-between">
                            <h6>Total :</h6>
                            <h5>$1738.60</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-8 col-lg-6 mb-25">
            <div class="row">
                <div class="col-md-6 mb-25">
                    <div class="forcast-cardbox">
                        <h6 class="forcast-title">Net Profit</h6>
                        <div class="forcast-details">
                            <h1 class="forcast-value">$42.5k</h1>
                            <p class="forcast-status">
                                <span class="percentage color-success">
                                    <img src="{{ asset('assets/img/svg/arrow-up.svg') }}" alt="arrow-up" class="svg">
                                    <span>25%</span>
                                </span>
                                <span class="forcast-text">Since last month</span>
                            </p>
                        </div>
                        <div class="forcast__chart">
                            <div class="parentContainer">
                                <div>
                                    <canvas id="lineChartforcastOne"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-25">
                    <div class="forcast-cardbox">
                        <h6 class="forcast-title">Gross Profit</h6>
                        <div class="forcast-details">
                            <h1 class="forcast-value">$82.24k</h1>
                            <p class="forcast-status">
                                <span class="percentage color-danger">
                                    <img src="{{ asset('assets/img/svg/arrow-up.svg') }}" alt="arrow-up" class="svg">
                                    <span>8%</span>
                                </span>
                                <span class="forcast-text">Since last month</span>
                            </p>
                        </div>
                        <div class="forcast__chart">
                            <div class="parentContainer">
                                <div>
                                    <canvas id="lineChartforcastTwo"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-25">
                    <div class="ratio-box card">
                        <div class="card-body">
                            <h6 class="ratio-title">Quick Ratio</h6>
                            <div class="ratio-info d-flex justify-content-between align-items-center">
                                <h1 class="ratio-point">1.8</h1>
                                <span class="ratio-percentage color-success">180%</span>
                            </div>
                            <div class="progress-wrap mb-0">
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>

                                </div>
                                <span class="progress-text">
                                    <span class="color-dark dark">1 or higher</span>
                                    <span class="progress-target">quick ratio target</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-25">
                    <div class="ratio-box card">
                        <div class="card-body">
                            <h6 class="ratio-title">Current Ratio</h6>
                            <div class="ratio-info d-flex justify-content-between align-items-center">
                                <h1 class="ratio-point">2.4</h1>
                                <span class="ratio-percentage color-warning">72%</span>
                            </div>
                            <div class="progress-wrap mb-0">
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="progress-text">
                                    <span class="color-dark dark">1 or higher</span>
                                    <span class="progress-target">quick ratio target</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-lg-6 mb-25">
            <div class="social-overview-wrap">
                <div class="card border-0">
                    <div class="card-header">
                        <h6>Social Media Overview</h6>
                    </div>
                    <div class="card-body">
                        <ul class="social-overview">
                            <li>
                                <div class="social-box bg-facebook">
                                    <span class="la la-facebook"></span>
                                </div>
                                <h3>5,461</h3>
                                <p>Likes</p>
                            </li>
                            <li>
                                <div class="social-box bg-twitter">
                                    <span class="la la-twitter"></span>
                                </div>
                                <h3>5,461</h3>
                                <p>Followers</p>
                            </li>
                            <li>
                                <div class="social-box gradientInstragram">
                                    <span class="la la-instagram"></span>
                                </div>
                                <h3>5,461</h3>
                                <p>Followers</p>
                            </li>
                            <li>
                                <div class="social-box bg-youtube">
                                    <span class="la la-youtube"></span>
                                </div>
                                <h3>5,461</h3>
                                <p>Subscribers</p>
                            </li>
                            <li>
                                <div class="social-box bg-pinterest">
                                    <span class="la la-pinterest"></span>
                                </div>
                                <h3>5,461</h3>
                                <p>Followers</p>
                            </li>
                            <li>
                                <div class="social-box bg-linkedin">
                                    <span class="la la-linkedin"></span>
                                </div>
                                <h3>5,461</h3>
                                <p>Followers</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-lg-6 mb-25">
            <div class="card border-0">
                <div class="card-header">
                    <h6>Sales by Location</h6>
                    <div class="card-extra">
                        <ul class="card-tab-links nav-tabs nav">
                            <li>
                                <a href="#sb_location-today" class="active" data-bs-toggle="tab" id="sb_location-today-tab" role="tab" area-controls="sb_location-table" aria-selected="true">Today</a>
                            </li>
                            <li>
                                <a href="#sb_location-week" data-bs-toggle="tab" id="sb_location-week-tab" role="tab" area-controls="sb_location-table" aria-selected="false">Week</a>
                            </li>
                            <li>
                                <a href="#sb_location-month" data-bs-toggle="tab" id="sb_location-month-tab" role="tab" area-controls="sb_location-table" aria-selected="false">Month</a>
                            </li>
                            <li>
                                <a href="#sb_location-year" data-bs-toggle="tab" id="sb_location-year-tab" role="tab" area-controls="sb_location-table" aria-selected="false">Year</a>
                            </li>
                        </ul>
                        <div class="dropdown dropleft">
                            <a href="#" role="button" id="somethings" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="somethings">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="sb_location-today" role="tabpanel" aria-labelledby="sb_location-today-tab">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="regions-svg">
                                    <div id="region-map"></div>
                                </div>
                            </div>
                            <div>
                                <div class="table-responsive table-top-location">
                                    <table class="table table--default table-borderless mb-0">
                                        <thead>
                                            <tr>
                                                <th>Top Location</th>
                                                <th>Order</th>
                                                <th>Revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>United States</td>
                                                <td>457</td>
                                                <td>$26,457</td>
                                            </tr>
                                            <tr>
                                                <td>Australia</td>
                                                <td>658</td>
                                                <td>$44,658</td>
                                            </tr>
                                            <tr>
                                                <td>Canada</td>
                                                <td>698</td>
                                                <td>$101,698</td>
                                            </tr>
                                            <tr>
                                                <td>Japan</td>
                                                <td>856</td>
                                                <td>$2,856</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sb_location-week" role="tabpanel" aria-labelledby="sb_location-week-tab">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="regions-svg">
                                    <div id="region-map_W"></div>
                                </div>
                            </div>
                            <div>
                                <div class="table-responsive table-top-location">
                                    <table class="table table--default table-borderless mb-0">
                                        <thead>
                                            <tr>
                                                <th>Top Location</th>
                                                <th>Order</th>
                                                <th>Revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>United States</td>
                                                <td>457</td>
                                                <td>$26,457</td>
                                            </tr>
                                            <tr>
                                                <td>Australia</td>
                                                <td>658</td>
                                                <td>$44,658</td>
                                            </tr>
                                            <tr>
                                                <td>Canada</td>
                                                <td>698</td>
                                                <td>$101,698</td>
                                            </tr>
                                            <tr>
                                                <td>Japan</td>
                                                <td>856</td>
                                                <td>$2,856</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sb_location-month" role="tabpanel" aria-labelledby="sb_location-month-tab">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="regions-svg">
                                    <div id="region-map_M"></div>
                                </div>
                            </div>
                            <div>
                                <div class="table-responsive table-top-location">
                                    <table class="table table--default table-borderless mb-0">
                                        <thead>
                                            <tr>
                                                <th>Top Location</th>
                                                <th>Order</th>
                                                <th>Revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>United States</td>
                                                <td>457</td>
                                                <td>$26,457</td>
                                            </tr>
                                            <tr>
                                                <td>Australia</td>
                                                <td>658</td>
                                                <td>$44,658</td>
                                            </tr>
                                            <tr>
                                                <td>Canada</td>
                                                <td>698</td>
                                                <td>$101,698</td>
                                            </tr>
                                            <tr>
                                                <td>Japan</td>
                                                <td>856</td>
                                                <td>$2,856</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sb_location-year" role="tabpanel" aria-labelledby="sb_location-year-tab">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="regions-svg">
                                    <div id="region-map_Y"></div>
                                </div>
                            </div>
                            <div>
                                <div class="table-responsive table-top-location">
                                    <table class="table table--default table-borderless mb-0">
                                        <thead>
                                            <tr>
                                                <th>Top Location</th>
                                                <th>Order</th>
                                                <th>Revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>United States</td>
                                                <td>457</td>
                                                <td>$26,457</td>
                                            </tr>
                                            <tr>
                                                <td>Australia</td>
                                                <td>658</td>
                                                <td>$44,658</td>
                                            </tr>
                                            <tr>
                                                <td>Canada</td>
                                                <td>698</td>
                                                <td>$101,698</td>
                                            </tr>
                                            <tr>
                                                <td>Japan</td>
                                                <td>856</td>
                                                <td>$2,856</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-lg-6 mb-30">
            <div class="card card-overview-progress border-0">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between w-100 align-items-center">
                        <h6>Daily Overview</h6>
                        <div class="dropdown">
                            <a class="dropdown-toggle btn btn-sm" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Export <span class="la la-angle-down"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-progress">
                        <div class="card-progress__summery d-flex justify-content-between">
                            <div>
                                <strong class="color-primary">5,461</strong>
                                <span>Users Today</span>
                            </div>
                            <div>
                                <strong class="color-dark">8,085</strong>
                                <span>Expected Users</span>
                            </div>
                        </div>
                        <div class="card-progress__bar">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 78%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress-excerpt">
                                <p class="progress-upword"><strong><span class="la la-arrow-up"></span> 25%</strong> Since Yesterday</p>
                                <span class="progress-total">78%</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-progress">
                        <div class="card-progress__summery d-flex justify-content-between">
                            <div>
                                <strong class="color-info">5,461</strong>
                                <span>Users Today</span>
                            </div>
                            <div>
                                <strong class="color-dark">8,085</strong>
                                <span>Expected Users</span>
                            </div>
                        </div>
                        <div class="card-progress__bar">
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 78%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress-excerpt">
                                <p class="progress-downword"><strong><span class="la la-arrow-down"></span> 25%</strong> Since Yesterday</p>
                                <span class="progress-total">25%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection