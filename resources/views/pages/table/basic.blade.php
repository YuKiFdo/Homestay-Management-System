@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.table-basic') }}</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.table-basic') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header color-dark fw-500">
                Basic Usage
              </div>
              <div class="card-body p-0">
                <div class="table4 p-25 mb-30">
                  <div class="table-responsive">
                    <table class="table mb-0">
                      <thead>
                        <tr class="userDatatable-header">
                          <th>
                            <span class="userDatatable-title">Name</span>
                          </th>
                          <th>
                            <span class="userDatatable-title">Age</span>
                          </th>
                          <th>
                            <span class="userDatatable-title">Address</span>
                          </th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td>
                            <div class="userDatatable-content">
                              Mike
                            </div>
                          </td>
                          <td>
                            <div class="userDatatable-content">
                              32
                            </div>
                          </td>
                          <td>
                            <div class="userDatatable-content">
                              10 Downing Street
                            </div>
                          </td>
                        </tr>


                        <tr>
                          <td>
                            <div class="userDatatable-content">
                              Jhon
                            </div>
                          </td>
                          <td>
                            <div class="userDatatable-content">
                              42
                            </div>
                          </td>
                          <td>
                            <div class="userDatatable-content">
                              5 Downing Street
                            </div>
                          </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-12 mt-30">

            <div class="card border-0">
              <div class="card-header">
                <h6>Social Traffic Metrics</h6>
                <div class="card-extra">
                  <ul class="card-tab-links nav-tabs nav" role="tablist">
                    <li><a class="active" id="st_matrics-today-tab" data-bs-toggle="tab" href="#st_matrics-today" role="tab" aria-selected="true">Today</a></li>
                    <li><a id="st_matrics-week-tab" data-bs-toggle="tab" href="#st_matrics-week" role="tab" aria-selected="false">Week</a></li>
                    <li><a id="st_matrics-month-tab" data-bs-toggle="tab" href="#st_matrics-month" role="tab" aria-selected="false">Month</a></li>
                    <li><a id="st_matrics-year-tab" data-bs-toggle="tab" href="#st_matrics-year" role="tab" aria-selected="false">Year</a></li>
                  </ul>
                  <div class="dropdown dropleft">
                    <a href="#" role="button" id="Today" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="Today">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body p-0 pe-2">
                <div class="tab-content">
                  <div class="tab-pane fade active show" id="st_matrics-today" role="tabpanel" aria-labelledby="st_matrics-today-tab">
                    <div class="table-responsive">
                      <table class="table table-bordered table-social">
                        <thead>
                          <tr>
                            <th scope="col"></th>
                            <th scope="col" colspan="3">Acquisition</th>
                            <th scope="col" colspan="3">Behavior</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Social Network</td>
                            <td>Users</td>
                            <td>New Users</td>
                            <td>Sessions</td>
                            <td>Bounce Rate</td>
                            <td>Pages / Sessions</td>
                            <td>Avg. Session Duration</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Facebook</a>
                            </td>
                            <td>1,458</td>
                            <td>452</td>
                            <td>9,235</td>
                            <td>25%</td>
                            <td>3.9</td>
                            <td>00:05:16</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Twitter</a>
                            </td>
                            <td>4,785</td>
                            <td>426</td>
                            <td>8,156</td>
                            <td>-26%</td>
                            <td>1.5</td>
                            <td>00:05:16</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Linkedin</a>
                            </td>
                            <td>3,416</td>
                            <td>951</td>
                            <td>6,124</td>
                            <td>56%</td>
                            <td>5.3</td>
                            <td>00:05:16</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Youtube</a>
                            </td>
                            <td>5,426</td>
                            <td>753</td>
                            <td>9,147</td>
                            <td>15%</td>
                            <td>7.5</td>
                            <td>00:05:16</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Instagram</a>
                            </td>
                            <td>6,258</td>
                            <td>852</td>
                            <td>4,369</td>
                            <td>75%</td>
                            <td>2.7</td>
                            <td>00:05:16</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Google+</a>
                            </td>
                            <td>9,632</td>
                            <td>123</td>
                            <td>1,256</td>
                            <td>46%</td>
                            <td>2.6</td>
                            <td>00:05:16</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="st_matrics-week" role="tabpanel" aria-labelledby="st_matrics-week-tab">
                    <div class="table-responsive">
                      <table class="table table-bordered table-social">
                        <thead>
                          <tr>
                            <th scope="col"></th>
                            <th scope="col" colspan="3">Acquisition</th>
                            <th scope="col" colspan="3">Behavior</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Social Network</td>
                            <td>Users</td>
                            <td>New Users</td>
                            <td>Sessions</td>
                            <td>Bounce Rate</td>
                            <td>Pages / Sessions</td>
                            <td>Avg. Session Duration</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Facebook</a>
                            </td>
                            <td>1,558</td>
                            <td>452</td>
                            <td>9,235</td>
                            <td>27%</td>
                            <td>6.9</td>
                            <td>00:06:16</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Twitter</a>
                            </td>
                            <td>4,585</td>
                            <td>426</td>
                            <td>8,856</td>
                            <td>-26%</td>
                            <td>1.5</td>
                            <td>00:03:16</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Linkedin</a>
                            </td>
                            <td>3,416</td>
                            <td>951</td>
                            <td>6,124</td>
                            <td>56%</td>
                            <td>5.3</td>
                            <td>00:05:16</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Youtube</a>
                            </td>
                            <td>5,426</td>
                            <td>553</td>
                            <td>4,647</td>
                            <td>20%</td>
                            <td>8.5</td>
                            <td>00:05:16</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Instagram</a>
                            </td>
                            <td>62,258</td>
                            <td>452</td>
                            <td>4,669</td>
                            <td>55%</td>
                            <td>1.7</td>
                            <td>00:05:16</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Google+</a>
                            </td>
                            <td>6,632</td>
                            <td>113</td>
                            <td>1,956</td>
                            <td>56%</td>
                            <td>5.6</td>
                            <td>00:06:16</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="st_matrics-month" role="tabpanel" aria-labelledby="st_matrics-month-tab">
                    <div class="table-responsive">
                      <table class="table table-bordered table-social">
                        <thead>
                          <tr>
                            <th scope="col"></th>
                            <th scope="col" colspan="3">Acquisition</th>
                            <th scope="col" colspan="3">Behavior</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Social Network</td>
                            <td>Users</td>
                            <td>New Users</td>
                            <td>Sessions</td>
                            <td>Bounce Rate</td>
                            <td>Pages / Sessions</td>
                            <td>Avg. Session Duration</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Facebook</a>
                            </td>
                            <td>1,258</td>
                            <td>452</td>
                            <td>9,235</td>
                            <td>25%</td>
                            <td>3.5</td>
                            <td>00:05:16</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Twitter</a>
                            </td>
                            <td>4,785</td>
                            <td>423</td>
                            <td>8,156</td>
                            <td>-26%</td>
                            <td>1.5</td>
                            <td>00:05:16</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Linkedin</a>
                            </td>
                            <td>3,416</td>
                            <td>956</td>
                            <td>6,124</td>
                            <td>46%</td>
                            <td>5.3</td>
                            <td>00:05:16</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Youtube</a>
                            </td>
                            <td>5,426</td>
                            <td>753</td>
                            <td>9,147</td>
                            <td>15%</td>
                            <td>7.5</td>
                            <td>00:05:16</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Instagram</a>
                            </td>
                            <td>6,258</td>
                            <td>852</td>
                            <td>4,369</td>
                            <td>75%</td>
                            <td>2.7</td>
                            <td>00:05:16</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Google+</a>
                            </td>
                            <td>9,632</td>
                            <td>123</td>
                            <td>1,656</td>
                            <td>36%</td>
                            <td>2.8</td>
                            <td>00:05:16</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="st_matrics-year" role="tabpanel" aria-labelledby="st_matrics-year-tab">
                    <div class="table-responsive">
                      <table class="table table-bordered table-social">
                        <thead>
                          <tr>
                            <th scope="col"></th>
                            <th scope="col" colspan="3">Acquisition</th>
                            <th scope="col" colspan="3">Behavior</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Social Network</td>
                            <td>Users</td>
                            <td>New Users</td>
                            <td>Sessions</td>
                            <td>Bounce Rate</td>
                            <td>Pages / Sessions</td>
                            <td>Avg. Session Duration</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Facebook</a>
                            </td>
                            <td>1,458</td>
                            <td>452</td>
                            <td>9,245</td>
                            <td>35%</td>
                            <td>5.9</td>
                            <td>00:08:16</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Twitter</a>
                            </td>
                            <td>4,285</td>
                            <td>424</td>
                            <td>8,356</td>
                            <td>-25%</td>
                            <td>1.5</td>
                            <td>00:05:16</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Linkedin</a>
                            </td>
                            <td>3,416</td>
                            <td>951</td>
                            <td>6,124</td>
                            <td>56%</td>
                            <td>5.3</td>
                            <td>00:05:16</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Youtube</a>
                            </td>
                            <td>5,426</td>
                            <td>753</td>
                            <td>9,147</td>
                            <td>15%</td>
                            <td>7.5</td>
                            <td>00:05:16</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Instagram</a>
                            </td>
                            <td>6,258</td>
                            <td>852</td>
                            <td>4,369</td>
                            <td>75%</td>
                            <td>2.7</td>
                            <td>00:05:16</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Google+</a>
                            </td>
                            <td>9,632</td>
                            <td>123</td>
                            <td>1,256</td>
                            <td>46%</td>
                            <td>2.6</td>
                            <td>00:05:16</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-12 mt-30">

            <div class="card border-0">
              <div class="card-header">
                <h6>Traffic Channels</h6>
                <div class="card-extra">
                  <ul class="card-tab-links nav-tabs nav" role="tablist">
                    <li>
                      <a class="active" href="#t_channel-today" data-bs-toggle="tab" id="t_channel-today-tab" role="tab" aria-selected="true">Today</a>
                    </li>
                    <li>
                      <a href="#t_channel-week" data-bs-toggle="tab" id="t_channel-week-tab" role="tab" aria-selected="false">Week</a>
                    </li>
                    <li>
                      <a href="#t_channel-month" data-bs-toggle="tab" id="t_channel-month-tab" role="tab" aria-selected="false">Month</a>
                    </li>
                    <li>
                      <a href="#t_channel-year" data-bs-toggle="tab" id="t_channel-year-tab" role="tab" aria-selected="false">Year</a>
                    </li>
                  </ul>
                  <div class="dropdown dropleft">
                    <a href="#" role="button" id="traffic" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="traffic">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body p-0 ">
                <div class="tab-content">
                  <div class="tab-pane fade active show" id="t_channel-today" role="tabpanel" aria-labelledby="t_channel-today-tab">
                    <div class="table-responsive">
                      <table class="table table--default traffic-table body-px-25">
                        <thead>
                          <tr>
                            <th>Channel</th>
                            <th>Sessions</th>
                            <th>Goal Conv. Rate</th>
                            <th>Goals Completions</th>
                            <th style="max-width: 150px">Percentage of Traffic (%)</th>
                            <th>Value</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Direct</td>
                            <td>3,256</td>
                            <td>3.5%</td>
                            <td>225</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-primay" role="progressbar" style="width: 65.75%" aria-valuenow="65.75" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>65.75%</td>
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td>4,658</td>
                            <td>1.9%</td>
                            <td>753</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 85.14%" aria-valuenow="85.14" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>85.14%</td>
                          </tr>
                          <tr>
                            <td>Organic Search</td>
                            <td>1,698</td>
                            <td>7.5%</td>
                            <td>159</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 95.36%" aria-valuenow="95.36" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>95.36%</td>
                          </tr>
                          <tr>
                            <td>Referral</td>
                            <td>2,856</td>
                            <td>4.6%</td>
                            <td>456</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 45.25%" aria-valuenow="45.25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>45.25%</td>
                          </tr>
                          <tr>
                            <td>Social Media</td>
                            <td>9,456</td>
                            <td>3.2%</td>
                            <td>852</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 39.94%" aria-valuenow="39.94" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>39.94%</td>
                          </tr>
                          <tr>
                            <td>Other</td>
                            <td>8,247</td>
                            <td>1.2%</td>
                            <td>321</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 60.58%" aria-valuenow="60.58" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>60.58%</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="t_channel-week" role="tabpanel" aria-labelledby="t_channel-week-tab">
                    <div class="table-responsive">
                      <table class="table table--default traffic-table body-px-25">
                        <thead>
                          <tr>
                            <th>Channel</th>
                            <th>Sessions</th>
                            <th>Goal Conv. Rate</th>
                            <th>Goals Completions</th>
                            <th style="max-width: 150px">Percentage of Traffic (%)</th>
                            <th>Value</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Direct</td>
                            <td>5,256</td>
                            <td>7.5%</td>
                            <td>240</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-primay" role="progressbar" style="width: 65.75%" aria-valuenow="65.75" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>66.75%</td>
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td>7,658</td>
                            <td>8.9%</td>
                            <td>453</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 85.14%" aria-valuenow="85.14" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>40.14%</td>
                          </tr>
                          <tr>
                            <td>Organic Search</td>
                            <td>1,398</td>
                            <td>5.5%</td>
                            <td>259</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 95.36%" aria-valuenow="95.36" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>55.36%</td>
                          </tr>
                          <tr>
                            <td>Referral</td>
                            <td>2,556</td>
                            <td>6.6%</td>
                            <td>756</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 45.25%" aria-valuenow="45.25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>40.25%</td>
                          </tr>
                          <tr>
                            <td>Social Media</td>
                            <td>8,456</td>
                            <td>3.6%</td>
                            <td>452</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 39.94%" aria-valuenow="39.94" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>30.94%</td>
                          </tr>
                          <tr>
                            <td>Other</td>
                            <td>6,247</td>
                            <td>1.8%</td>
                            <td>321</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 60.58%" aria-valuenow="60.58" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>60.58%</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="t_channel-month" role="tabpanel" aria-labelledby="t_channel-month-tab">
                    <div class="table-responsive">
                      <table class="table table--default traffic-table body-px-25">
                        <thead>
                          <tr>
                            <th>Channel</th>
                            <th>Sessions</th>
                            <th>Goal Conv. Rate</th>
                            <th>Goals Completions</th>
                            <th style="max-width: 150px">Percentage of Traffic (%)</th>
                            <th>Value</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Direct</td>
                            <td>6,256</td>
                            <td>3.5%</td>
                            <td>325</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-primay" role="progressbar" style="width: 65.75%" aria-valuenow="65.75" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>65.75%</td>
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td>4,658</td>
                            <td>1.9%</td>
                            <td>753</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 85.14%" aria-valuenow="85.14" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>85.14%</td>
                          </tr>
                          <tr>
                            <td>Organic Search</td>
                            <td>1,698</td>
                            <td>7.5%</td>
                            <td>159</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 95.36%" aria-valuenow="95.36" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>95.36%</td>
                          </tr>
                          <tr>
                            <td>Referral</td>
                            <td>2,856</td>
                            <td>4.6%</td>
                            <td>456</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 45.25%" aria-valuenow="45.25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>45.25%</td>
                          </tr>
                          <tr>
                            <td>Social Media</td>
                            <td>9,456</td>
                            <td>3.2%</td>
                            <td>852</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 39.94%" aria-valuenow="39.94" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>39.94%</td>
                          </tr>
                          <tr>
                            <td>Other</td>
                            <td>8,247</td>
                            <td>1.2%</td>
                            <td>321</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 60.58%" aria-valuenow="60.58" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>60.58%</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="t_channel-year" role="tabpanel" aria-labelledby="t_channel-year-tab">
                    <div class="table-responsive">
                      <table class="table table--default traffic-table body-px-25">
                        <thead>
                          <tr>
                            <th>Channel</th>
                            <th>Sessions</th>
                            <th>Goal Conv. Rate</th>
                            <th>Goals Completions</th>
                            <th style="max-width: 150px">Percentage of Traffic (%)</th>
                            <th>Value</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Direct</td>
                            <td>7,256</td>
                            <td>4.5%</td>
                            <td>265</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-primay" role="progressbar" style="width: 65.75%" aria-valuenow="65.75" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>65.75%</td>
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td>6,658</td>
                            <td>4.9%</td>
                            <td>453</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 85.14%" aria-valuenow="85.14" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>45.14%</td>
                          </tr>
                          <tr>
                            <td>Organic Search</td>
                            <td>4,698</td>
                            <td>6.5%</td>
                            <td>359</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 95.36%" aria-valuenow="95.36" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>95.36%</td>
                          </tr>
                          <tr>
                            <td>Referral</td>
                            <td>6,856</td>
                            <td>4.6%</td>
                            <td>156</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 45.25%" aria-valuenow="45.25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>45.25%</td>
                          </tr>
                          <tr>
                            <td>Social Media</td>
                            <td>9,456</td>
                            <td>3.2%</td>
                            <td>752</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 39.94%" aria-valuenow="39.94" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>39.94%</td>
                          </tr>
                          <tr>
                            <td>Other</td>
                            <td>1,247</td>
                            <td>5.2%</td>
                            <td>421</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 60.58%" aria-valuenow="60.58" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>60.58%</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-12 mt-30">

            <div class="card border-0">
              <div class="card-header">
                <h6>Top Landing Pages</h6>
                <div class="card-extra">
                  <ul class="card-tab-links nav-tabs nav" role="tablist">
                    <li>
                      <a class="active" href="#t_landing-today" data-bs-toggle="tab" id="t_landing-today-tab" role="tab" aria-selected="true">Today</a>
                    </li>
                    <li>
                      <a href="#t_landing-week" data-bs-toggle="tab" id="t_landing-week-tab" role="tab" aria-selected="false">Week</a>
                    </li>
                    <li>
                      <a href="#t_landing-month" data-bs-toggle="tab" id="t_landing-month-tab" role="tab" aria-selected="false">Month</a>
                    </li>
                    <li>
                      <a href="#t_landing-year" data-bs-toggle="tab" id="t_landing-year-tab" role="tab" aria-selected="false">Year</a>
                    </li>
                  </ul>
                  <div class="dropdown dropleft">
                    <a href="#" role="button" id="topPage" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="topPage">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body p-0 0">
                <div class="tab-content">
                  <div class="tab-pane fade active show" id="t_landing-today" role="tabpanel" aria-labelledby="t_landing-today-tab">
                    <div class="landing-pages-table table-responsive">
                      <table class="table table--default body-px-25">
                        <thead>
                          <tr>
                            <th>Landing Pages</th>
                            <th>Sessions</th>
                            <th>Bounce Rate</th>
                            <th>CTR</th>
                            <th>Goal Conv. Rate</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <a href="">Home Page</a>
                            </td>
                            <td>457</td>
                            <td>39.5%</td>
                            <td>78%</td>
                            <td>65.75%</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Our Services</a>
                            </td>
                            <td>658</td>
                            <td>1.9%</td>
                            <td>85%</td>
                            <td>85.14%</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">List of Products</a>
                            </td>
                            <td>698</td>
                            <td>7.5%</td>
                            <td>73%</td>
                            <td>95.36%</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Contact Us</a>
                            </td>
                            <td>856</td>
                            <td>4.6%</td>
                            <td>65%</td>
                            <td>45.25%</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Products</a>
                            </td>
                            <td>456</td>
                            <td>3.2%</td>
                            <td>52%</td>
                            <td>39.94%</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="t_landing-month" role="tabpanel" aria-labelledby="t_landing-month-tab">
                    <div class="landing-pages-table table-responsive">
                      <table class="table table--default body-px-25">
                        <thead>
                          <tr>
                            <th>Landing Pages</th>
                            <th>Sessions</th>
                            <th>Bounce Rate</th>
                            <th>CTR</th>
                            <th>Goal Conv. Rate</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <a href="">Home Page</a>
                            </td>
                            <td>6,457</td>
                            <td>39.5%</td>
                            <td>78%</td>
                            <td>65.75%</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Our Services</a>
                            </td>
                            <td>858</td>
                            <td>1.9%</td>
                            <td>85%</td>
                            <td>85.14%</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">List of Products</a>
                            </td>
                            <td>1,698</td>
                            <td>7.5%</td>
                            <td>73%</td>
                            <td>95.36%</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Contact Us</a>
                            </td>
                            <td>2,856</td>
                            <td>4.6%</td>
                            <td>65%</td>
                            <td>45.25%</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Products</a>
                            </td>
                            <td>9,456</td>
                            <td>3.2%</td>
                            <td>52%</td>
                            <td>39.94%</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="t_landing-week" role="tabpanel" aria-labelledby="t_landing-week-tab">
                    <div class="landing-pages-table table-responsive">
                      <table class="table table--default body-px-25">
                        <thead>
                          <tr>
                            <th>Landing Pages</th>
                            <th>Sessions</th>
                            <th>Bounce Rate</th>
                            <th>CTR</th>
                            <th>Goal Conv. Rate</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <a href="">Home Page</a>
                            </td>
                            <td>26,457</td>
                            <td>39.5%</td>
                            <td>78%</td>
                            <td>65.75%</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Our Services</a>
                            </td>
                            <td>4,658</td>
                            <td>1.9%</td>
                            <td>85%</td>
                            <td>85.14%</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">List of Products</a>
                            </td>
                            <td>1,698</td>
                            <td>7.5%</td>
                            <td>73%</td>
                            <td>95.36%</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Contact Us</a>
                            </td>
                            <td>2,856</td>
                            <td>4.6%</td>
                            <td>65%</td>
                            <td>45.25%</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Products</a>
                            </td>
                            <td>9,456</td>
                            <td>3.2%</td>
                            <td>52%</td>
                            <td>39.94%</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="t_landing-year" role="tabpanel" aria-labelledby="t_landing-year-tab">
                    <div class="landing-pages-table table-responsive">
                      <table class="table table--default body-px-25">
                        <thead>
                          <tr>
                            <th>Landing Pages</th>
                            <th>Sessions</th>
                            <th>Bounce Rate</th>
                            <th>CTR</th>
                            <th>Goal Conv. Rate</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <a href="">Home Page</a>
                            </td>
                            <td>90,457</td>
                            <td>39.5%</td>
                            <td>78%</td>
                            <td>65.75%</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Our Services</a>
                            </td>
                            <td>14,658</td>
                            <td>1.9%</td>
                            <td>85%</td>
                            <td>85.14%</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">List of Products</a>
                            </td>
                            <td>13,698</td>
                            <td>7.5%</td>
                            <td>73%</td>
                            <td>95.36%</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Contact Us</a>
                            </td>
                            <td>22,856</td>
                            <td>4.6%</td>
                            <td>65%</td>
                            <td>45.25%</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="">Products</a>
                            </td>
                            <td>93,456</td>
                            <td>3.2%</td>
                            <td>52%</td>
                            <td>39.94%</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-xxl-6 mt-30">

            <div class="card border-0">
              <div class="card-header">
                <h6>Top Selling Products</h6>
                <div class="card-extra">
                  <ul class="card-tab-links nav-tabs nav" role="tablist">
                    <li>
                      <a class="active" href="#t_selling-today" data-bs-toggle="tab" id="t_selling-today-tab" role="tab" aria-selected="true">Today</a>
                    </li>
                    <li>
                      <a href="#t_selling-week" data-bs-toggle="tab" id="t_selling-week-tab" role="tab" aria-selected="true">Week</a>
                    </li>
                    <li>
                      <a href="#t_selling-month" data-bs-toggle="tab" id="t_selling-month-tab" role="tab" aria-selected="true">Month</a>
                    </li>
                    <li>
                      <a href="#t_selling-year" data-bs-toggle="tab" id="t_selling-year-tab" role="tab" aria-selected="true">Year</a>
                    </li>
                  </ul>
                  <div class="dropdown dropleft">
                    <a href="#" role="button" id="todo12" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="todo12">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body p-0 pb-15">
                <div class="tab-content">
                  <div class="tab-pane fade active show" id="t_selling-today" role="tabpanel" aria-labelledby="t_selling-today-tab">
                    <div class="selling-table-wrap">
                      <div class="table-responsive">
                        <table class="table table--default body-px-25">
                          <thead>
                            <tr>
                              <th>Prducts Name</th>
                              <th>Price</th>
                              <th>Sold</th>
                              <th>Revenue</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Samsung Galaxy S8 256GB</td>
                              <td>$289</td>
                              <td>339</td>
                              <td>$60,258</td>
                            </tr>
                            <tr>
                              <td>Half Sleeve Shirt</td>
                              <td>$29</td>
                              <td>136</td>
                              <td>$2,483</td>
                            </tr>
                            <tr>
                              <td>Marco Shoes</td>
                              <td>$59</td>
                              <td>448</td>
                              <td>$19,758</td>
                            </tr>
                            <tr>
                              <td>15" Mackbook Pro</td>
                              <td>$1,299</td>
                              <td>159</td>
                              <td>$197,458</td>
                            </tr>
                            <tr>
                              <td>Apple iPhone X</td>
                              <td>$899</td>
                              <td>146</td>
                              <td>115,254</td>
                            </tr>
                            <tr>
                              <td>15" Mackbook Pro</td>
                              <td>$1,299</td>
                              <td>159</td>
                              <td>$197,458</td>
                            </tr>
                            <tr>
                              <td>Apple iPhone X</td>
                              <td>$899</td>
                              <td>146</td>
                              <td>115,254</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="t_selling-week" role="tabpanel" aria-labelledby="t_selling-week-tab">
                    <div class="selling-table-wrap">
                      <div class="table-responsive">
                        <table class="table table--default body-px-25">
                          <thead>
                            <tr>
                              <th>Prducts Name</th>
                              <th>Price</th>
                              <th>Sold</th>
                              <th>Revenue</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Samsung Galaxy S8 256GB</td>
                              <td>$289</td>
                              <td>339</td>
                              <td>$60,258</td>
                            </tr>
                            <tr>
                              <td>Half Sleeve Shirt</td>
                              <td>$29</td>
                              <td>136</td>
                              <td>$2,483</td>
                            </tr>
                            <tr>
                              <td>Marco Shoes</td>
                              <td>$59</td>
                              <td>448</td>
                              <td>$19,758</td>
                            </tr>
                            <tr>
                              <td>15" Mackbook Pro</td>
                              <td>$1,299</td>
                              <td>159</td>
                              <td>$197,458</td>
                            </tr>
                            <tr>
                              <td>Apple iPhone X</td>
                              <td>$899</td>
                              <td>146</td>
                              <td>115,254</td>
                            </tr>
                            <tr>
                              <td>15" Mackbook Pro</td>
                              <td>$1,299</td>
                              <td>159</td>
                              <td>$197,458</td>
                            </tr>
                            <tr>
                              <td>Apple iPhone X</td>
                              <td>$899</td>
                              <td>146</td>
                              <td>115,254</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="t_selling-month" role="tabpanel" aria-labelledby="t_selling-month-tab">
                    <div class="selling-table-wrap">
                      <div class="table-responsive">
                        <table class="table table--default body-px-25">
                          <thead>
                            <tr>
                              <th>PRDUCTS NAME</th>
                              <th>Price</th>
                              <th>Sold</th>
                              <th>Revenue</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Samsung Galaxy S8 256GB</td>
                              <td>$289</td>
                              <td>339</td>
                              <td>$60,258</td>
                            </tr>
                            <tr>
                              <td>Half Sleeve Shirt</td>
                              <td>$29</td>
                              <td>136</td>
                              <td>$2,483</td>
                            </tr>
                            <tr>
                              <td>Marco Shoes</td>
                              <td>$59</td>
                              <td>448</td>
                              <td>$19,758</td>
                            </tr>
                            <tr>
                              <td>15" Mackbook Pro</td>
                              <td>$1,299</td>
                              <td>159</td>
                              <td>$197,458</td>
                            </tr>
                            <tr>
                              <td>Apple iPhone X</td>
                              <td>$899</td>
                              <td>146</td>
                              <td>115,254</td>
                            </tr>
                            <tr>
                              <td>15" Mackbook Pro</td>
                              <td>$1,299</td>
                              <td>159</td>
                              <td>$197,458</td>
                            </tr>
                            <tr>
                              <td>Apple iPhone X</td>
                              <td>$899</td>
                              <td>146</td>
                              <td>115,254</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="t_selling-year" role="tabpanel" aria-labelledby="t_selling-year-tab">
                    <div class="selling-table-wrap">
                      <div class="table-responsive">
                        <table class="table table--default body-px-25">
                          <thead>
                            <tr>
                              <th>PRDUCTS NAME</th>
                              <th>Price</th>
                              <th>Sold</th>
                              <th>Revenue</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Samsung Galaxy S8 256GB</td>
                              <td>$289</td>
                              <td>339</td>
                              <td>$60,258</td>
                            </tr>
                            <tr>
                              <td>Half Sleeve Shirt</td>
                              <td>$29</td>
                              <td>136</td>
                              <td>$2,483</td>
                            </tr>
                            <tr>
                              <td>Marco Shoes</td>
                              <td>$59</td>
                              <td>448</td>
                              <td>$19,758</td>
                            </tr>
                            <tr>
                              <td>15" Mackbook Pro</td>
                              <td>$1,299</td>
                              <td>159</td>
                              <td>$197,458</td>
                            </tr>
                            <tr>
                              <td>Apple iPhone X</td>
                              <td>$899</td>
                              <td>146</td>
                              <td>115,254</td>
                            </tr>
                            <tr>
                              <td>15" Mackbook Pro</td>
                              <td>$1,299</td>
                              <td>159</td>
                              <td>$197,458</td>
                            </tr>
                            <tr>
                              <td>Apple iPhone X</td>
                              <td>$899</td>
                              <td>146</td>
                              <td>115,254</td>
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
          <div class="col-xxl-6 mt-30">

            <div class="card border-0">
              <div class="card-header">
                <h6>Source of Revenue Generated</h6>
                <div class="dropdown dropleft">
                  <a href="#" role="button" id="action" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                  </a>
                  <div class="dropdown-menu" aria-labelledby="action">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="table-responsive table-revenue">
                  <table class="table table--default body-px-25">
                    <thead>
                      <tr>
                        <th>Name of Source</th>
                        <th>Visitors</th>
                        <th>Page View</th>
                        <th>Revenue</th>
                        <th>Trend</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Direct</td>
                        <td>3,256</td>
                        <td>12,156</td>
                        <td>$2,225</td>
                        <td>
                          <div class="d-flex justify-content-end">
                            <canvas id="lineChartSm1"></canvas>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td>4,658</td>
                        <td>21,584</td>
                        <td>$9,753</td>
                        <td>
                          <div class="d-flex justify-content-end">
                            <canvas id="lineChartSm2"></canvas>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Organic Search</td>
                        <td>1,698</td>
                        <td>7,956%</td>
                        <td>1,159</td>
                        <td>
                          <div class="d-flex justify-content-end">
                            <canvas id="lineChartSm3"></canvas>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Referral</td>
                        <td>2,856</td>
                        <td>8,256</td>
                        <td>1,456</td>
                        <td>
                          <div class="d-flex justify-content-end">
                            <canvas id="lineChartSm4"></canvas>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Social Media</td>
                        <td>9,456</td>
                        <td>36,478</td>
                        <td>13,852</td>
                        <td>
                          <div class="d-flex justify-content-end">
                            <canvas id="lineChartSm5"></canvas>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
          <div class="col-12 mt-30">

            <div class="card mb-25">
              <div class="card-header">
                <h6>Drag & Drop</h6>
              </div>
              <div class="card-body pt-0 pb-0">
                <div class="drag-drop-wrap">
                  <div class="drag-drop table-responsive-lg w-100 mb-30">
                    <table class="table mb-0 table-basic">
                      <tbody>

                        <tr class="draggable" draggable="true">
                          <td>
                            <div class="item d-flex align-items-center">
                              <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                              <div class="item-info d-flex align-items-center">
                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url('img/tm6.png'); background-size: cover;"></a>
                                <div class="item_title">
                                  <h6>
                                    <a href="#">Kellie Marquot</a>
                                  </h6>
                                </div>
                              </div>

                            </div>
                          </td>
                          <td>
                            Marquot Store
                          </td>
                          <td>
                            347
                          </td>
                          <td>
                            $84,248.66
                          </td>
                          <td>
                            <span class="date">January 20, 2020</span>
                          </td>
                          <td>
                            <div class="table-actions">
                              <a href="#">
                                <img class="svg" src="{{ asset('assets/img/svg/edit.svg') }}" alt="edit">
                              </a>
                              <a href="#">
                                <img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="">
                              </a>
                            </div>
                          </td>
                        </tr>


                        <tr class="draggable" draggable="true">
                          <td>
                            <div class="item d-flex align-items-center">
                              <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                              <div class="item-info d-flex align-items-center">
                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url('img/tm1.png'); background-size: cover;"></a>
                                <div class="item_title">
                                  <h6>
                                    <a href="#">Kellie Marquot</a>
                                  </h6>
                                </div>
                              </div>

                            </div>
                          </td>
                          <td>
                            Marquot Store
                          </td>
                          <td>
                            347
                          </td>
                          <td>
                            $84,248.66
                          </td>
                          <td>
                            <span class="date">January 20, 2020</span>
                          </td>
                          <td>
                            <div class="table-actions">
                              <a href="#">
                                <img class="svg" src="{{ asset('assets/img/svg/edit.svg') }}" alt="edit">
                              </a>
                              <a href="#">
                                <img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="">
                              </a>
                            </div>
                          </td>
                        </tr>


                        <tr class="draggable" draggable="true">
                          <td>
                            <div class="item d-flex align-items-center">
                              <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                              <div class="item-info d-flex align-items-center">
                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url('img/tm2.png'); background-size: cover;"></a>
                                <div class="item_title">
                                  <h6>
                                    <a href="#">Kellie Marquot</a>
                                  </h6>
                                </div>
                              </div>

                            </div>
                          </td>
                          <td>
                            Marquot Store
                          </td>
                          <td>
                            347
                          </td>
                          <td>
                            $84,248.66
                          </td>
                          <td>
                            <span class="date">January 20, 2020</span>
                          </td>
                          <td>
                            <div class="table-actions">
                              <a href="#">
                                <img class="svg" src="{{ asset('assets/img/svg/edit.svg') }}" alt="edit">
                              </a>
                              <a href="#">
                                <img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="">
                              </a>
                            </div>
                          </td>
                        </tr>


                        <tr class="draggable" draggable="true">
                          <td>
                            <div class="item d-flex align-items-center">
                              <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                              <div class="item-info d-flex align-items-center">
                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url('img/tm3.png'); background-size: cover;"></a>
                                <div class="item_title">
                                  <h6>
                                    <a href="#">Kellie Marquot</a>
                                  </h6>
                                </div>
                              </div>

                            </div>
                          </td>
                          <td>
                            Marquot Store
                          </td>
                          <td>
                            347
                          </td>
                          <td>
                            $84,248.66
                          </td>
                          <td>
                            <span class="date">January 20, 2020</span>
                          </td>
                          <td>
                            <div class="table-actions">
                              <a href="#">
                                <img class="svg" src="{{ asset('assets/img/svg/edit.svg') }}" alt="edit">
                              </a>
                              <a href="#">
                                <img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="">
                              </a>
                            </div>
                          </td>
                        </tr>


                        <tr class="draggable" draggable="true">
                          <td>
                            <div class="item d-flex align-items-center">
                              <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                              <div class="item-info d-flex align-items-center">
                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url('img/tm4.png'); background-size: cover;"></a>
                                <div class="item_title">
                                  <h6>
                                    <a href="#">Kellie Marquot</a>
                                  </h6>
                                </div>
                              </div>

                            </div>
                          </td>
                          <td>
                            Marquot Store
                          </td>
                          <td>
                            347
                          </td>
                          <td>
                            $84,248.66
                          </td>
                          <td>
                            <span class="date">January 20, 2020</span>
                          </td>
                          <td>
                            <div class="table-actions">
                              <a href="#">
                                <img class="svg" src="{{ asset('assets/img/svg/edit.svg') }}" alt="edit">
                              </a>
                              <a href="#">
                                <img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="">
                              </a>
                            </div>
                          </td>
                        </tr>


                        <tr class="draggable" draggable="true">
                          <td>
                            <div class="item d-flex align-items-center">
                              <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                              <div class="item-info d-flex align-items-center">
                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url('img/tm5.png'); background-size: cover;"></a>
                                <div class="item_title">
                                  <h6>
                                    <a href="#">Kellie Marquot</a>
                                  </h6>
                                </div>
                              </div>

                            </div>
                          </td>
                          <td>
                            Marquot Store
                          </td>
                          <td>
                            347
                          </td>
                          <td>
                            $84,248.66
                          </td>
                          <td>
                            <span class="date">January 20, 2020</span>
                          </td>
                          <td>
                            <div class="table-actions">
                              <a href="#">
                                <img class="svg" src="{{ asset('assets/img/svg/edit.svg') }}" alt="edit">
                              </a>
                              <a href="#">
                                <img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="">
                              </a>
                            </div>
                          </td>
                        </tr>


                        <tr class="draggable" draggable="true">
                          <td>
                            <div class="item d-flex align-items-center">
                              <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                              <div class="item-info d-flex align-items-center">
                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url('img/tm6.png'); background-size: cover;"></a>
                                <div class="item_title">
                                  <h6>
                                    <a href="#">Kellie Marquot</a>
                                  </h6>
                                </div>
                              </div>

                            </div>
                          </td>
                          <td>
                            Marquot Store
                          </td>
                          <td>
                            347
                          </td>
                          <td>
                            $84,248.66
                          </td>
                          <td>
                            <span class="date">January 20, 2020</span>
                          </td>
                          <td>
                            <div class="table-actions">
                              <a href="#">
                                <img class="svg" src="{{ asset('assets/img/svg/edit.svg') }}" alt="edit">
                              </a>
                              <a href="#">
                                <img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="">
                              </a>
                            </div>
                          </td>
                        </tr>


                        <tr class="draggable" draggable="true">
                          <td>
                            <div class="item d-flex align-items-center">
                              <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                              <div class="item-info d-flex align-items-center">
                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url('img/tm7.png'); background-size: cover;"></a>
                                <div class="item_title">
                                  <h6>
                                    <a href="#">Kellie Marquot</a>
                                  </h6>
                                </div>
                              </div>

                            </div>
                          </td>
                          <td>
                            Marquot Store
                          </td>
                          <td>
                            347
                          </td>
                          <td>
                            $84,248.66
                          </td>
                          <td>
                            <span class="date">January 20, 2020</span>
                          </td>
                          <td>
                            <div class="table-actions">
                              <a href="#">
                                <img class="svg" src="{{ asset('assets/img/svg/edit.svg') }}" alt="edit">
                              </a>
                              <a href="#">
                                <img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="">
                              </a>
                            </div>
                          </td>
                        </tr>


                        <tr class="draggable" draggable="true">
                          <td>
                            <div class="item d-flex align-items-center">
                              <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                              <div class="item-info d-flex align-items-center">
                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url('img/tm3.png'); background-size: cover;"></a>
                                <div class="item_title">
                                  <h6>
                                    <a href="#">Kellie Marquot</a>
                                  </h6>
                                </div>
                              </div>

                            </div>
                          </td>
                          <td>
                            Marquot Store
                          </td>
                          <td>
                            347
                          </td>
                          <td>
                            $84,248.66
                          </td>
                          <td>
                            <span class="date">January 20, 2020</span>
                          </td>
                          <td>
                            <div class="table-actions">
                              <a href="#">
                                <img class="svg" src="{{ asset('assets/img/svg/edit.svg') }}" alt="edit">
                              </a>
                              <a href="#">
                                <img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="">
                              </a>
                            </div>
                          </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- ends: card -->

          </div>
        </div>
</div>
@endsection