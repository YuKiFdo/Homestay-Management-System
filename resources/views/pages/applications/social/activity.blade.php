@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="profile-content mb-50">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.social-activity') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <div class="action-btn">
                            <div class="form-group mb-0">
                                <div class="input-container icon-left position-relative">
                                    <span class="input-icon icon-left">
                                        <img src="{{ asset('assets/img/svg/calendar.svg') }}" alt="calendar" class="svg">
                                    </span>
                                    <input type="text" class="form-control form-control-default date-ranger" name="date-ranger" placeholder="Oct 30, 2019 - Nov 30, 2019">
                                    <span class="input-icon icon-right">
                                        <img src="{{ asset('assets/img/svg/chevron-down.svg') }}" alt="chevron-down" class="svg">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown action-btn">
                            <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-download"></i> Export
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <span class="dropdown-item">Export With</span>
                                <div class="dropdown-divider"></div>
                                <a href="" class="dropdown-item">
                                    <i class="la la-print"></i> Printer</a>
                                <a href="" class="dropdown-item">
                                    <i class="la la-file-pdf"></i> PDF</a>
                                <a href="" class="dropdown-item">
                                    <i class="la la-file-text"></i> Google Sheets</a>
                                <a href="" class="dropdown-item">
                                    <i class="la la-file-excel"></i> Excel (XLSX)</a>
                                <a href="" class="dropdown-item">
                                    <i class="la la-file-csv"></i> CSV</a>
                            </div>
                        </div>
                        <div class="dropdown action-btn">
                            <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-share"></i> Share
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                                <span class="dropdown-item">Share Link</span>
                                <div class="dropdown-divider"></div>
                                <a href="" class="dropdown-item">
                                    <i class="la la-facebook"></i> Facebook</a>
                                <a href="" class="dropdown-item">
                                    <i class="la la-twitter"></i> Twitter</a>
                                <a href="" class="dropdown-item">
                                    <i class="la la-google"></i> Google</a>
                                <a href="" class="dropdown-item">
                                    <i class="la la-feed"></i> Feed</a>
                                <a href="" class="dropdown-item">
                                    <i class="la la-instagram"></i> Instagram</a>
                            </div>
                        </div>
                        <div class="action-btn">
                            <a href="" class="btn btn-sm btn-primary btn-add">
                                <i class="la la-plus"></i> Add New</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cos-lg-3 col-md-4  ">
                <aside class="profile-sider">
                    <div class="card mb-25">
                        <div class="card-body text-center pt-sm-30 pb-sm-0  px-25 pb-0">
                            <div class="account-profile">
                                <div class="ap-img w-100 d-flex justify-content-center">
                                    <img class="ap-img__main rounded-circle mb-3  wh-120 d-flex bg-opacity-primary" src="{{ asset('assets/img/author/profile.png') }}" alt="profile">
                                </div>
                                <div class="ap-nameAddress pb-3 pt-1">
                                    <h5 class="ap-nameAddress__title">Duran Clayton</h5>
                                    <p class="ap-nameAddress__subTitle fs-14 m-0">UI/UX Designer</p>
                                    <p class="ap-nameAddress__subTitle fs-14 m-0">
                                        <img src="{{ asset('assets/img/svg/map-pin.svg') }}" alt="map-pin" class="svg">London, England
                                    </p>
                                </div>
                                <div class="ap-button button-group d-flex justify-content-center flex-wrap">
                                    <button type="button" class="border text-capitalize px-25 color-gray transparent shadow2 radius-md">
                                        <img src="{{ asset('assets/img/svg/mail.svg') }}" alt="mail" class="svg">message</button>
                                    <button class="btn btn-primary btn-default btn-squared text-capitalize  px-25"><img src="{{ asset('assets/img/svg/user-plus.svg') }}" alt="user-plus" class="svg">
                                        follow
                                    </button>
                                </div>
                            </div>
                            <div class="card-footer mt-20 pt-20 pb-20 px-0">
                                <div class="profile-overview d-flex justify-content-between flex-wrap">
                                    <div class="po-details">
                                        <h6 class="po-details__title pb-1">$72,572</h6>
                                        <span class="po-details__sTitle">Total Revenue</span>
                                    </div>
                                    <div class="po-details">
                                        <h6 class="po-details__title pb-1">3,257</h6>
                                        <span class="po-details__sTitle">order</span>
                                    </div>
                                    <div class="po-details">
                                        <h6 class="po-details__title pb-1">74</h6>
                                        <span class="po-details__sTitle">Products</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-25">
                        <div class="user-bio border-bottom">
                            <div class="card-header border-bottom-0 pt-sm-30 pb-sm-0  px-md-25 px-3">
                                <div class="profile-header-title">
                                    User Bio
                                </div>
                            </div>
                            <div class="card-body pt-md-1 pt-0">
                                <div class="user-bio__content">
                                    <p class="m-0">Nam malesuada dolor tellus pretium amet was hendrerit facilisi id
                                        vitae enim
                                        sed ornare
                                        there suspendisse sed orci neque ac sed aliquet risus faucibus in pretium
                                        molestie nisl
                                        tempor quis odio habitant.</p>
                                </div>
                            </div>
                        </div>
                        <div class="user-info border-bottom">
                            <div class="card-header border-bottom-0 pt-sm-25 pb-sm-0  px-md-25 px-3">
                                <div class="profile-header-title">
                                    Contact info
                                </div>
                            </div>
                            <div class="card-body pt-md-1 pt-0">
                                <div class="user-content-info">
                                    <p class="user-content-info__item">
                                        <img src="{{ asset('assets/img/svg/mail.svg') }}" alt="mail" class="svg">Clayton@example.com
                                    </p>
                                    <p class="user-content-info__item">
                                        <img src="{{ asset('assets/img/svg/phone.svg') }}" alt="phone" class="svg">+44 (0161) 347
                                        8854
                                    </p>
                                    <p class="user-content-info__item mb-0">
                                        <img src="{{ asset('assets/img/svg/globe.svg') }}" alt="globe" class="svg">www.example.com
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="user-skils border-bottom">
                            <div class="card-header border-bottom-0 pt-sm-25 pb-sm-0  px-md-25 px-3">
                                <div class="profile-header-title">
                                    Skills
                                </div>
                            </div>
                            <div class="card-body pt-md-1 pt-0">
                                <ul class="user-skils-parent">
                                    <li class="user-skils-parent__item">
                                        <a href="#">UI/UX</a>
                                    </li>
                                    <li class="user-skils-parent__item">
                                        <a href="#">Branding</a>
                                    </li>
                                    <li class="user-skils-parent__item">
                                        <a href="#">product design</a>
                                    </li>
                                    <li class="user-skils-parent__item">
                                        <a href="#">Application</a>
                                    </li>
                                    <li class="user-skils-parent__item mb-0">
                                        <a href="#">web design</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="db-social border-bottom">
                            <div class="card-header border-bottom-0 pt-sm-25 pb-sm-0  px-md-25 px-3">
                                <div class="profile-header-title">
                                    Social Profiles
                                </div>
                            </div>
                            <div class="card-body pt-md-1 pt-0">
                                <ul class="db-social-parent mb-0">
                                    <li class="db-social-parent__item">
                                        <a class="color-facebook hover-facebook wh-44 fs-22" href="#">
                                            <i class="lab la-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="db-social-parent__item">
                                        <a class="color-twitter hover-twitter wh-44 fs-22" href="#">
                                            <i class="lab la-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="db-social-parent__item">
                                        <a class="color-ruby hover-ruby  wh-44 fs-22" href="#">
                                            <i class="las la-basketball-ball"></i>
                                        </a>
                                    </li>
                                    <li class="db-social-parent__item">
                                        <a class="color-instagram hover-instagram wh-44 fs-22" href="#">
                                            <i class="lab la-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="col">
                <div class="ap-tab ap-tab-header">
                    <div class="ap-tab-header__img">
                        <img src="{{ asset('assets/img/ap-header.png') }}" alt="ap-header" class="img-fluid w-100">
                    </div>
                    <div class="ap-tab-wrapper">
                        <ul class="nav px-25 ap-tab-main" id="ap-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="ap-overview-tab" data-bs-toggle="pill" href="#ap-overview" role="tab" aria-controls="ap-overview" aria-selected="false">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="timeline-tab" data-bs-toggle="pill" href="#timeline" role="tab" aria-controls="timeline" aria-selected="false">Timeline</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="activity-tab" data-bs-toggle="pill" href="#activity" role="tab" aria-controls="activity" aria-selected="true">Activity</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content mt-25" id="ap-tabContent">
                    <div class="tab-pane fade" id="ap-overview" role="tabpanel" aria-labelledby="ap-overview-tab">
                        <div class="ap-content-wrapper">
                            <div class="row">
                                <div class="col-lg-4 mb-25">
                                    <div class="ap-po-details radius-xl bg-white d-flex justify-content-between">
                                        <div>
                                            <div class="overview-content">
                                                <h1>3,257</h1>
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
                                <div class="col-lg-4 mb-25">
                                    <div class="ap-po-details radius-xl bg-white d-flex justify-content-between">
                                        <div>
                                            <div class="overview-content">
                                                <h1>$72,572</h1>
                                                <p>Total Revenue</p>
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
                                <div class="col-lg-4 mb-25">
                                    <div class="ap-po-details radius-xl bg-white d-flex justify-content-between">
                                        <div>
                                            <div class="overview-content">
                                                <h1>1,274</h1>
                                                <p>product sold</p>
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
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header text-capitalize px-md-25 px-3">
                                            <h6>General Statistics</h6>
                                            <div class="dropdown">
                                                <a href="#" role="button" id="statistics1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="statistics1">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="ap-statistics-charts">
                                                <div class="parentContainer">
                                                    <div>
                                                        <canvas id="profile-chart"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card mt-25 mb-40">
                                        <div class="card-header text-capitalize px-md-25 px-3">
                                            <h6>My products</h6>
                                            <div class="dropdown">
                                                <a href="#" role="button" id="products" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="products">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="ap-product">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Products Name</th>
                                                                <th scope="col">Price</th>
                                                                <th scope="col">sold</th>
                                                                <th scope="col">Revenue</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Samsung Galaxy S8 256GB</td>
                                                                <td>$280</td>
                                                                <td>126</td>
                                                                <td>$38,536</td>
                                                            </tr>
                                                            <tr>
                                                                <td> Half Sleeve Shirt</td>
                                                                <td>$25</td>
                                                                <td>80</td>
                                                                <td>$20,573 </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Marco Shoes </td>
                                                                <td>$32</td>
                                                                <td>58</td>
                                                                <td>$17,457</td>
                                                            </tr>
                                                            <tr>
                                                                <td>15 Mackbook Pro</td>
                                                                <td>$9,50</td>
                                                                <td>36</td>
                                                                <td>$15,354</td>
                                                            </tr>
                                                            <tr>
                                                                <td>apple iphone x</td>
                                                                <td>$985</td>
                                                                <td>24</td>
                                                                <td>$10,710</td>
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
                    </div>
                    <div class="tab-pane fade" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
                        <div class="ap-post-content">
                            <div class="row">
                                <div class="col-xxl-8">
                                    <div class="ap-post-form">
                                        <div class="card border mb-25">
                                            <div class="card-header px-md-25 px-3">
                                                <h6>Post something</h6>
                                            </div>
                                            <div class="card-body p-0 px-25">
                                                <div class="d-flex flex-column">
                                                    <div class="border-0  flex-1 position-relative">
                                                        <div class="pt-20 outline-0 pb-2 pe-0 ps-0 rounded-0 position-relative border-bottom" tabindex="-1">
                                                            <span class="ap-profile-image bg-opacity-secondary rounded-circle d-block position-absolute" style="background-image:url('/img/ap-author.png'); background-size: cover;"></span>
                                                            <div class="ps-15 ms-50 pt-10">
                                                                <textarea class="form-control border-0 p-0 fs-xl bg-transparent" rows="3" placeholder="Write something..."></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ap-post-attach d-flex flex-row align-items-center flex-wrap flex-shrink-0">
                                                        <a href="#" class="btn rounded-pill me-2">
                                                            <img class="svg" src="{{ asset('assets/img/svg/image.svg') }}" alt="img">
                                                            Photo/Video
                                                        </a>
                                                        <a href="#" class="btn rounded-pill ap-post-attach__drop">
                                                                            <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                        </a>
                                                        <button class="btn btn-primary btn-default btn-squared ml-auto ap-post-attach__btn">public post
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ap-main-post">
                                        <div class="card mb-25">
                                            <div class="card-body pb-0 px-25 ap-main-post__header">
                                                <div class="d-flex flex-row pb-20 border-top-0 border-left-0 border-right-0 ap-post-content__title align-items-center ">
                                                    <div class="d-inline-block align-middle me-15">
                                                        <span class="profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0" style="background-image:url('img/author/1.jpg'); background-size: cover;"></span>
                                                    </div>
                                                    <h6 class="mb-0 flex-1 text-dark">
                                                        Meyri Carles
                                                        <small class="m-0 d-block">
                                                            2 minuts ago
                                                        </small>
                                                    </h6>

                                                    <div class="dropdown  dropdown-click ">
                                                        <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img class="svg" src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal">
                                                        </button>
                                                        <div class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                            <a class="dropdown-item" href="#">Item One</a>
                                                            <a class="dropdown-item" href="#">Item Two</a>
                                                            <a class="dropdown-item" href="#">Item Three</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-15">
                                                    <img src="{{ asset('assets/img/post-image.png') }}" alt="post image" class="ap-post-attach__headImg w-100">
                                                </div>
                                                <div class="pb-3 border-top-0 border-left-0 border-right-0 ap-post-content__p">
                                                    Nam malesuada dolor tellus pretium amet was hendrerit facilisi
                                                    tempor
                                                    quis
                                                    enim sed ornare there suspendisse sed orci neque ac sed aliquet
                                                    risus
                                                    faucibus in pretium molestee.
                                                </div>
                                            </div>
                                            <div class="card-body border-top border-bottom py-0 ap-main-post__reaction">
                                                <div class="d-flex align-items-center demo-h-spacing ap-post-content__feedback">
                                                    <a href="#" class="d-inline-flex align-items-center">
                                                        <img src="{{ asset('assets/img/svg/thumbs-up.svg') }}" alt="thumbs-up" class="svg">274
                                                    </a>
                                                    <a href="#" class="d-inline-flex align-items-center">
                                                        <img src="{{ asset('assets/img/svg/message-square.svg') }}" alt="message-square" class="svg">56</a>
                                                    <a href="#" class="d-inline-flex align-items-center">
                                                        <img src="{{ asset('assets/img/svg/share-2.svg') }}" alt="share-2" class="svg"> share
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-body px-25 py-20 ap-main-post__footer">
                                                <div class="ap-post-content-comment">
                                                    <div class="pt-0 outline-0 pb-0 pe-0 ps-0 rounded-0 position-relative d-flex align-items-center" tabindex="-1">
                                                        <span class="rounded-circle d-block position-absolute wh-36" style="background-image:url('/img/ap-author.png'); background-size: cover;"></span>
                                                        <div class="d-flex justify-content-between align-items-center w-100">
                                                            <div class=" flex-1 d-flex align-items-center me-10 ap-post-content-comment__write">
                                                                <input class="form-control border-0 p-0 bg-transparent pe-sm-0 pe-20" placeholder="This is my comment...">
                                                                <div class="d-flex">
                                                                    <a href="#">
                                                                        <img src="{{ asset('assets/img/svg/smile.svg') }}" alt="smile" class="svg"></a>
                                                                    <a href="#">
                                                                        <img src="{{ asset('assets/img/svg/image.svg') }}" alt="image" class="svg"></a>
                                                                    <a href="#">
                                                                        <img src="{{ asset('assets/img/svg/paperclip.svg') }}" alt="paperclip" class="svg"></a>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="border-0 btn-primary wh-50 p-10 rounded-circle">
                                                                <img src="{{ asset('assets/img/svg/send.svg') }}" alt="send" class="svg"></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ap-main-post">
                                        <div class="card mb-25">
                                            <div class="card-body pb-0 px-25 ap-main-post__header">
                                                <div class="d-flex flex-row pb-20 border-top-0 border-left-0 border-right-0 ap-post-content__title align-items-center ">
                                                    <div class="d-inline-block align-middle me-15">
                                                        <span class=" profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0" style="background-image:url('img/author/2.jpg'); background-size: cover;"></span>
                                                    </div>
                                                    <h6 class="mb-0 flex-1 text-dark">
                                                        Alexendra Dhadio
                                                        <small class="m-0 d-block">
                                                            2 days ago
                                                        </small>
                                                    </h6>
                                                    <div class="dropdown  dropdown-click ">
                                                        <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img class="svg" src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal">
                                                        </button>
                                                        <div class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                            <a class="dropdown-item" href="#">Item One</a>
                                                            <a class="dropdown-item" href="#">Item Two</a>
                                                            <a class="dropdown-item" href="#">Item Three</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pb-3 border-top-0 border-left-0 border-right-0 ap-post-content__p">
                                                    Nam malesuada dolor tellus pretium amet was hendrerit facilisi
                                                    tempor
                                                    quis
                                                    enim sed ornare there suspendisse sed orci neque ac sed aliquet
                                                    risus
                                                    faucibus in pretium molestee.
                                                </div>
                                            </div>
                                            <div class="card-body border-top border-bottom py-0 ap-main-post__reaction">
                                                <div class="d-flex align-items-center demo-h-spacing ap-post-content__feedback">
                                                    <a href="#" class="d-inline-flex align-items-center">
                                                        <img src="{{ asset('assets/img/svg/thumbs-up.svg') }}" alt="thumbs-up" class="svg">274
                                                    </a>
                                                    <a href="#" class="d-inline-flex align-items-center">
                                                        <img src="{{ asset('assets/img/svg/message-square.svg') }}" alt="message-square" class="svg">56</a>
                                                    <a href="#" class="d-inline-flex align-items-center">
                                                        <img src="{{ asset('assets/img/svg/share-2.svg') }}" alt="share-2" class="svg"> share
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-body px-25 py-20 ap-main-post__footer">
                                                <div class="ap-post-content-comment">
                                                    <div class="pt-0 outline-0 pb-0 pe-0 ps-0 rounded-0 position-relative d-flex align-items-center" tabindex="-1">
                                                        <span class="rounded-circle d-block position-absolute wh-36" style="background-image:url('/img/ap-author.png'); background-size: cover;"></span>
                                                        <div class="d-flex justify-content-between align-items-center w-100">
                                                            <div class=" flex-1 d-flex align-items-center me-10 ap-post-content-comment__write">
                                                                <input class="form-control border-0 p-0 bg-transparent pe-sm-0 pe-20" placeholder="Type your comment...">
                                                                <div class="d-flex">
                                                                    <a href="#">
                                                                        <img src="{{ asset('assets/img/svg/smile.svg') }}" alt="smile" class="svg"></a>
                                                                    <a href="#">
                                                                        <img src="{{ asset('assets/img/svg/image.svg') }}" alt="image" class="svg"></a>
                                                                    <a href="#">
                                                                        <img src="{{ asset('assets/img/svg/paperclip.svg') }}" alt="paperclip" class="svg"></a>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="border-0 btn-primary wh-50 p-10 rounded-circle">
                                                                <img src="{{ asset('assets/img/svg/send.svg') }}" alt="send" class="svg"></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ap-main-post">
                                        <div class="card mb-25">
                                            <div class="card-body pb-0 px-25 ap-main-post__header">
                                                <div class="d-flex flex-row pb-3 border-top-0 border-left-0 border-right-0 ap-post-content__title align-items-center ">
                                                    <div class="d-inline-block align-middle me-15">
                                                        <span class=" profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0" style="background-image:url('img/author/4.jpg'); background-size: cover;"></span>
                                                    </div>
                                                    <h6 class="mb-0 flex-1 text-dark fw-500">
                                                        Olivia Jon
                                                        <small class="m-0 d-block">
                                                            19 January at 21:53
                                                        </small>
                                                    </h6>
                                                    <div class="dropdown  dropdown-click ">
                                                        <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img class="svg" src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal">
                                                        </button>
                                                        <div class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                            <a class="dropdown-item" href="#">Item One</a>
                                                            <a class="dropdown-item" href="#">Item Two</a>
                                                            <a class="dropdown-item" href="#">Item Three</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 ap-post-gallery">
                                                    <div class="ap-post-gallery-top">
                                                        <div class="ap-post-gallery__item">
                                                            <a href="{{ asset('assets/img/506.png') }}"><img src="{{ asset('assets/img/506.png') }}" alt="gallery" class="w-100 img-fluid"></a>
                                                        </div>
                                                        <div class="ap-post-gallery__item">
                                                            <a href="{{ asset('assets/img/907.png') }}"><img src="{{ asset('assets/img/907.png') }}" alt="gallery" class="w-100 img-fluid"></a>
                                                        </div>
                                                    </div>
                                                    <div class="ap-post-gallery-bottom">
                                                        <div class="ap-post-gallery__item">
                                                            <a href="{{ asset('assets/img/brightland_3744.png') }}"><img src="{{ asset('assets/img/brightland_3744.png') }}" alt="gallery" class="w-100 img-fluid"></a>
                                                        </div>
                                                        <div class="ap-post-gallery__item">
                                                            <a href="{{ asset('assets/img/room.png') }}"><img src="{{ asset('assets/img/room.png') }}" alt="gallery" class="w-100 img-fluid"></a>
                                                        </div>
                                                        <div class="ap-post-gallery__item">
                                                            <a href="{{ asset('assets/img/165.png') }}" class="ap-post-gallery-overlay">
                                                                <img src="{{ asset('assets/img/165.png') }}" alt="gallery" class="w-100 img-fluid">
                                                                <div class="ap-post-gallery-overlay__content">
                                                                    <span>26<span class="las la-plus"></span></span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body border-top border-bottom py-0 ap-main-post__reaction">
                                                <div class="d-flex align-items-center demo-h-spacing ap-post-content__feedback">
                                                    <a href="#" class="d-inline-flex align-items-center">
                                                        <img src="{{ asset('assets/img/svg/thumbs-up.svg') }}" alt="thumbs-up" class="svg">274
                                                    </a>
                                                    <a href="#" class="d-inline-flex align-items-center">
                                                        <img src="{{ asset('assets/img/svg/message-square.svg') }}" alt="message-square" class="svg">56</a>
                                                    <a href="#" class="d-inline-flex align-items-center">
                                                        <img src="{{ asset('assets/img/svg/share-2.svg') }}" alt="share-2" class="svg"> share
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-body px-25 py-20 border-bottom ap-main-post__footer">
                                                <div class="ap-post-content-comment">
                                                    <div class="pt-0 outline-0 pb-0 pe-0 ps-0 rounded-0 position-relative d-flex align-items-center" tabindex="-1">
                                                        <span class="rounded-circle d-block position-absolute wh-36" style="background-image:url('/img/ap-author.png'); background-size: cover;"></span>
                                                        <div class="d-flex justify-content-between align-items-center w-100">
                                                            <div class=" flex-1 d-flex align-items-center me-10 ap-post-content-comment__write">
                                                                <input class="form-control border-0 p-0 bg-transparent pe-sm-0 pe-20" placeholder="Type your comment...">
                                                                <div class="d-flex">
                                                                    <a href="#">
                                                                        <img src="{{ asset('assets/img/svg/smile.svg') }}" alt="smile" class="svg"></a>
                                                                    <a href="#">
                                                                        <img src="{{ asset('assets/img/svg/image.svg') }}" alt="image" class="svg"></a>
                                                                    <a href="#">
                                                                        <img src="{{ asset('assets/img/svg/paperclip.svg') }}" alt="paperclip" class="svg"></a>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="border-0 btn-primary wh-50 p-10 rounded-circle">
                                                                <img src="{{ asset('assets/img/svg/send.svg') }}" alt="send" class="svg"></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body pt-20 ap-main-post__comment">
                                                <div class="ap-post-cc-reply d-flex flex-column align-items-center">
                                                    <div class="d-flex flex-row w-100">
                                                        <div class="d-inline-block align-middle status status-sm status-success">
                                                            <span class=" profile-image bg-opacity-secondary profile-image-md rounded-circle d-block ms-0 wh-36 me-10" style="background-image:url('img/author/1.jpg'); background-size: cover;"></span>
                                                        </div>
                                                        <div class="mb-0 flex-1 text-dark">
                                                            <div class="cbg-light rounded-xl py-10 px-10">
                                                                <div class="d-flex ap-post-content__title">
                                                                    <a href="#" class="fw-500">
                                                                        <h6>Hunter Carter</h6>
                                                                    </a>
                                                                </div>
                                                                <p class="mb-0 mt-10 text-gray">
                                                                    ullamco laboris nisi ut aliquip ex ea commodo
                                                                    consequat.
                                                                    Duis aute irure dolor in reprehenderit in voluptate
                                                                    velit
                                                                    esse cillum dolore eu fugiat nulla pariatur.Congrats
                                                                    mate!
                                                                </p>
                                                            </div>
                                                            <ul class="mb-0 d-flex ap-post-cc-reply__reaction">
                                                                <li class="#">
                                                                    <a href="#">Like</a>
                                                                </li>
                                                                <li class="#">
                                                                    <a href="#">
                                                                        reply
                                                                    </a>
                                                                </li>
                                                                <li class="#">
                                                                    <span>5 months ago</span>
                                                                </li>
                                                            </ul>
                                                            <div class="ap-post-cc-reply__reply ps-0 d-flex flex-row w-100 pb-0">
                                                                <div class="d-inline-block align-middle status status-sm status-success">
                                                                    <span class=" profile-image bg-opacity-secondary profile-image-md rounded-circle d-block ms-0 wh-36 me-10" style="background-image:url('img/author/2.jpg'); background-size: cover;"></span>
                                                                </div>
                                                                <div class="mb-0 flex-1 text-dark">
                                                                    <div class="cbg-light rounded-xl py-10 px-10">
                                                                        <div class="d-flex ap-post-content__title">
                                                                            <a href="#" class="fw-500">
                                                                                <h6>Dr. John Cook PhD</h6>
                                                                            </a>
                                                                        </div>
                                                                        <p class="mb-0 mt-10 text-gray">
                                                                            ullamco laboris nisi ut aliquip ex ea
                                                                            commodo
                                                                            consequat.
                                                                            Duis aute irure dolor in reprehenderit in
                                                                            voluptate
                                                                            velit esse cillum dolore eu fugiat nulla
                                                                            pariatur.
                                                                        </p>
                                                                    </div>
                                                                    <ul class="mb-0 d-flex ap-post-cc-reply__reaction">
                                                                        <li class="#">
                                                                            <a href="#">Like</a>
                                                                        </li>
                                                                        <li class="#">
                                                                            <a href="#" class="color-primary">
                                                                                reply
                                                                            </a>
                                                                        </li>
                                                                        <li class="#">
                                                                            <span>5 months ago</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ap-post-cc-reply d-flex flex-column align-items-center mt-20">
                                                    <div class="d-flex flex-row w-100">
                                                        <div class="d-inline-block align-middle status status-sm status-success">
                                                            <span class=" profile-image bg-opacity-secondary profile-image-md rounded-circle d-block ms-0 wh-36 me-10" style="background-image:url('img/author/1.jpg'); background-size: cover;"></span>
                                                        </div>
                                                        <div class="mb-0 flex-1 text-dark">
                                                            <div class="cbg-light rounded-xl py-10 px-10">
                                                                <div class="d-flex ap-post-content__title">
                                                                    <a href="#" class="fw-500">
                                                                        <h6>Dr. Codex Lantern</h6>
                                                                    </a>
                                                                </div>
                                                                <p class="mb-0 mt-10 text-gray">
                                                                    Nam malesuada dolor tellus pretium amet was
                                                                    hendrerit
                                                                    facilisi tempor quis eni
                                                                </p>
                                                            </div>
                                                            <ul class="mb-0 d-flex ap-post-cc-reply__reaction">
                                                                <li class="#">
                                                                    <a href="#">Like</a>
                                                                </li>
                                                                <li class="#">
                                                                    <a href="#">
                                                                        reply
                                                                    </a>
                                                                </li>
                                                                <li class="#">
                                                                    <span>5 months ago</span>
                                                                </li>
                                                            </ul>
                                                            <div class="ap-post-cc-reply__reply ps-0 d-flex flex-row w-100 pb-0">
                                                                <div class="card-body p-0">
                                                                    <div class="ap-post-content-comment">
                                                                        <div class="pt-0 outline-0 pb-0 pe-0 ps-0 rounded-0 position-relative d-flex align-items-center" tabindex="-1">
                                                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                                                <div class=" flex-1 d-flex align-items-center me-10 ap-post-content-comment__write ms-0">
                                                                                    <input class="form-control border-0 p-0 bg-transparent pe-sm-0 pe-20" placeholder="Type your comment...">
                                                                                    <div class="d-flex">
                                                                                        <a href="#">
                                                                                            <img src="{{ asset('assets/img/svg/smile.svg') }}" alt="smile" class="svg"></a>
                                                                                        <a href="#">
                                                                                            <img src="{{ asset('assets/img/svg/image.svg') }}" alt="image" class="svg"></a>
                                                                                        <a href="#">
                                                                                            <img src="{{ asset('assets/img/svg/paperclip.svg') }}" alt="paperclip" class="svg"></a>
                                                                                    </div>
                                                                                </div>
                                                                                <button type="button" class="border-0 btn-primary wh-50 p-10 rounded-circle">
                                                                                    <img src="{{ asset('assets/img/svg/send.svg') }}" alt="send" class="svg"></button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="view-more-comment color-primary fs-13 fw-500" href="#">View 53
                                                    more
                                                    comments</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4">
                                    <div class="card global-shadow mb-25">
                                        <div class="friends-widget">
                                            <div class="card-header px-md-25 px-3">
                                                <h6>Friends</h6>
                                            </div>
                                            <div class="card-body p-0">
                                                <div class="ffw d-flex justify-content-between">
                                                    <div class="d-flex flex-wrap">
                                                        <div class="me-3 ffw__imgWrapper">
                                                            <span class=" profile-image bg-opacity-secondary rounded-circle d-block ap-profile-image " style="background-image:url('img/author/4.jpg'); background-size: cover;"></span>
                                                        </div>
                                                        <div class="ffw__title">
                                                            <a href="#" class="text-dark fw-500">
                                                                <h6>Meyri Carles</h6>
                                                            </a>
                                                            <span class="d-block">
                                                                UI Designer
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-default btn-squared btn-outline-light friends-follow">follow
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="ffw d-flex justify-content-between">
                                                    <div class="d-flex flex-wrap">
                                                        <div class="me-3 ffw__imgWrapper">
                                                            <span class=" profile-image bg-opacity-secondary rounded-circle d-block ap-profile-image " style="background-image:url('img/author/1.jpg'); background-size: cover;"></span>
                                                        </div>
                                                        <div class="ffw__title">
                                                            <a href="#" class="text-dark fw-500">
                                                                <h6>Shreyu Neu</h6>
                                                            </a>
                                                            <span class="d-block">
                                                                Product Designer
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="ffw__button">
                                                        <button class="btn btn-default btn-squared btn-outline-light friends-follow"><img src="{{ asset('assets/img/svg/check.svg') }}" alt="check" class="svg">
                                                            follow
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="ffw d-flex justify-content-between">
                                                    <div class="d-flex flex-wrap">
                                                        <div class="me-3 ffw__imgWrapper">
                                                            <span class=" profile-image bg-opacity-secondary rounded-circle d-block ap-profile-image " style="background-image:url('img/author/4.jpg'); background-size: cover;"></span>
                                                        </div>
                                                        <div class="ffw__title">
                                                            <a href="#" class="text-dark fw-500">
                                                                <h6>Domnic Harris</h6>
                                                            </a>
                                                            <span class="d-block">
                                                                Executive Assistant
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="ffw__button">
                                                        <button class="btn btn-default btn-squared btn-outline-light friends-follow"><img src="{{ asset('assets/img/svg/check.svg') }}" alt="check" class="svg">
                                                            follow
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="ffw d-flex justify-content-between">
                                                    <div class="d-flex flex-wrap">
                                                        <div class="me-3 ffw__imgWrapper">
                                                            <span class=" profile-image bg-opacity-secondary rounded-circle d-block ap-profile-image " style="background-image:url('img/author/2.jpg'); background-size: cover;"></span>
                                                        </div>
                                                        <div class="ffw__title">
                                                            <a href="#" class="text-dark fw-500">
                                                                <h6>Khalid Hasan</h6>
                                                            </a>
                                                            <span class="d-block">
                                                                UI director
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="ffw__button">
                                                        <button class="btn btn-default btn-squared btn-outline-light friends-follow"><img src="{{ asset('assets/img/svg/check.svg') }}" alt="check" class="svg">
                                                            follow
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="ffw d-flex justify-content-between">
                                                    <div class="d-flex flex-wrap">
                                                        <div class="me-3 ffw__imgWrapper">
                                                            <span class=" profile-image bg-opacity-secondary rounded-circle d-block ap-profile-image " style="background-image:url('img/author/3.jpg'); background-size: cover;"></span>
                                                        </div>
                                                        <div class="ffw__title">
                                                            <a href="#" class="text-dark fw-500">
                                                                <h6>Tuhin Molla</h6>
                                                            </a>
                                                            <span class="d-block">
                                                                System Administrator
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="ffw__button">
                                                        <button class="btn btn-default btn-squared btn-outline-light friends-follow"><img src="{{ asset('assets/img/svg/check.svg') }}" alt="check" class="svg">
                                                            follow
                                                        </button>
                                                    </div>
                                                </div>
                                                <a class="view-more-comment color-primary fs-13 fw-500 px-25 pb-20" href="#">Load more friends</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card global-shadow mb-25">
                                        <div class="photo-gallery-widget">
                                            <div class="card-header justify-content-between d-flex flex-wrap px-md-25 px-3">
                                                <h6>photos</h6>
                                                <a class="color-primary fs-13 fw-500 mt-lg-0 mt-1" href="#">see all</a>
                                            </div>
                                            <div class="card-body">
                                                <div class="wig">
                                                    <div class="wig__item">
                                                        <img src="{{ asset('assets/img/315.png') }}" alt="gallery">
                                                    </div>
                                                    <div class="wig__item">
                                                        <img src="{{ asset('assets/img/325.png') }}" alt="gallery">
                                                    </div>
                                                    <div class="wig__item">
                                                        <img src="{{ asset('assets/img/design.png') }}" alt="gallery">
                                                    </div>
                                                    <div class="wig__item">
                                                        <img src="{{ asset('assets/img/99.png') }}" alt="gallery">
                                                    </div>
                                                    <div class="wig__item">
                                                        <img src="{{ asset('assets/img/166.png') }}" alt="gallery">
                                                    </div>
                                                    <div class="wig__item">
                                                        <img src="{{ asset('assets/img/287.png') }}" alt="gallery">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card global-shadow mb-25">
                                        <div class="video-gallery-widget">
                                            <div class="card-header justify-content-between d-flex flex-wrap px-md-25 px-3">
                                                <h6>videos</h6>
                                                <a class="color-primary fs-13 fw-500 mt-lg-0 mt-1" href="#">see all</a>
                                            </div>
                                            <div class="card-body">
                                                <div class="wig">
                                                    <div class="wig__item wig-overlay">
                                                        <img src="{{ asset('assets/img/juice-2.png') }}" alt="gallery">
                                                        <div class="wig-overlay__content">
                                                            <a class="wig-overlay__iconWrapper popup-youtube" href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                                <img class="svg" src="{{ asset('assets/img/svg/play.svg') }}" alt="img">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="wig__item wig-overlay">
                                                        <img src="{{ asset('assets/img/cup-card.png') }}" alt="gallery">
                                                        <div class="wig-overlay__content">
                                                            <a class="wig-overlay__iconWrapper popup-youtube" href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                                <img class="svg" src="{{ asset('assets/img/svg/play.svg') }}" alt="img">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="wig__item wig-overlay">
                                                        <img src="{{ asset('assets/img/round-box.png') }}" alt="gallery">
                                                        <div class="wig-overlay__content">
                                                            <a class="wig-overlay__iconWrapper popup-youtube" href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                                <img class="svg" src="{{ asset('assets/img/svg/play.svg') }}" alt="img">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="wig__item wig-overlay">
                                                        <img src="{{ asset('assets/img/glass.png') }}" alt="gallery">
                                                        <div class="wig-overlay__content">
                                                            <a class="wig-overlay__iconWrapper popup-youtube" href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                                <img class="svg" src="{{ asset('assets/img/svg/play.svg') }}" alt="img">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="wig__item wig-overlay">
                                                        <img src="{{ asset('assets/img/bottles.png') }}" alt="gallery">
                                                        <div class="wig-overlay__content">
                                                            <a class="wig-overlay__iconWrapper popup-youtube" href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                                <img class="svg" src="{{ asset('assets/img/svg/play.svg') }}" alt="img">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="wig__item wig-overlay">
                                                        <img src="{{ asset('assets/img/325.png') }}" alt="gallery">
                                                        <div class="wig-overlay__content">
                                                            <a class="wig-overlay__iconWrapper" href="#">
                                                                <img class="svg" src="{{ asset('assets/img/svg/play.svg') }}" alt="img">
                                                            </a>
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
                    <div class="tab-pane fade show active" id="activity" role="tabpanel" aria-labelledby="activity-tab">
                        <div class="ap-post-content">
                            <div class="row">
                                <div class="col-xxl-8">
                                    <div class="card global-shadow mb-25">
                                        <div class="friends-widget">
                                            <div class="card-header px-md-25 px-3">
                                                <h6>Friends</h6>
                                            </div>
                                            <div class="card-body p-0 py-10">
                                                <div class="ffp d-flex ffp--hover justify-content-between  align-items-center w-100">
                                                    <div class="d-flex">
                                                        <div class="me-3 ffp__imgWrapper d-flex align-items-center">
                                                            <span class="ffp__icon color-primary bg-opacity-primary">
                                                                <img src="{{ asset('assets/img/svg/inbox.svg') }}" alt="inbox" class="svg"></span>
                                                            <span class=" profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0 " style="background-image:url('img/author/4.jpg'); background-size: cover;"></span>
                                                        </div>
                                                        <div class="ffp__title">
                                                            <a href="#" class="text-dark fw-500">
                                                                <h6>
                                                                    <span class="color-primary">James</span> sent you a
                                                                    message
                                                                </h6>
                                                            </a>
                                                            <p class="d-block">
                                                                5 hours ago
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="ffp__button">
                                                        <div class="dropdown  dropdown-click ">
                                                            <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img class="svg" src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal">
                                                            </button>
                                                            <div class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                                <a class="dropdown-item" href="#">Item One</a>
                                                                <a class="dropdown-item" href="#">Item Two</a>
                                                                <a class="dropdown-item" href="#">Item Three</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ffp d-flex ffp--hover justify-content-between  align-items-center w-100">
                                                    <div class="d-flex">
                                                        <div class="me-3 ffp__imgWrapper d-flex align-items-center">
                                                            <span class="ffp__icon color-secondary bg-opacity-secondary">
                                                                <img src="{{ asset('assets/img/svg/upload.svg') }}" alt="upload" class="svg"></span>
                                                            <span class=" profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0 " style="background-image:url('img/author/1.jpg'); background-size: cover;"></span>
                                                        </div>
                                                        <div class="ffp__title">
                                                            <a href="#" class="text-dark fw-500">
                                                                <h6>
                                                                    <span class="color-primary">Adam </span>upload
                                                                    website template for sale
                                                                </h6>
                                                            </a>
                                                            <p class="d-block">
                                                                5 hours ago
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="ffp__button">
                                                        <div class="dropdown  dropdown-click ">
                                                            <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img class="svg" src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal">
                                                            </button>
                                                            <div class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                                <a class="dropdown-item" href="#">Item One</a>
                                                                <a class="dropdown-item" href="#">Item Two</a>
                                                                <a class="dropdown-item" href="#">Item Three</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ffp d-flex ffp--hover justify-content-between  align-items-center w-100">
                                                    <div class="d-flex">
                                                        <div class="me-3 ffp__imgWrapper d-flex align-items-center">
                                                            <span class="ffp__icon color-success bg-opacity-success">
                                                                <img src="{{ asset('assets/img/svg/log-in.svg') }}" alt="log-in" class="svg"></span>
                                                            <span class=" profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0 " style="background-image:url('img/author/4.jpg'); background-size: cover;"></span>
                                                        </div>
                                                        <div class="ffp__title">
                                                            <a href="#" class="text-dark fw-500">
                                                                <h6>
                                                                    <span class="color-primary">Mumtahin </span>has
                                                                    registered
                                                                </h6>
                                                            </a>
                                                            <p class="d-block">
                                                                5 hours ago
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="ffp__button">
                                                        <div class="dropdown  dropdown-click ">
                                                            <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img class="svg" src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal">
                                                            </button>
                                                            <div class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                                <a class="dropdown-item" href="#">Item One</a>
                                                                <a class="dropdown-item" href="#">Item Two</a>
                                                                <a class="dropdown-item" href="#">Item Three</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ffp d-flex ffp--hover justify-content-between  align-items-center w-100">
                                                    <div class="d-flex">
                                                        <div class="me-3 ffp__imgWrapper d-flex align-items-center">
                                                            <span class="ffp__icon color-info bg-opacity-info">
                                                                <img src="{{ asset('assets/img/svg/at-sign.svg') }}" alt="at-sign" class="svg"></span>
                                                            <span class=" profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0 " style="background-image:url('img/author/2.jpg'); background-size: cover;"></span>
                                                        </div>
                                                        <div class="ffp__title">
                                                            <a href="#" class="text-dark fw-500">
                                                                <h6>
                                                                    <span class="color-primary">James </span>Send you a
                                                                    message
                                                                </h6>
                                                            </a>
                                                            <p class="d-block">
                                                                5 hours ago
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="ffp__button">
                                                        <div class="dropdown  dropdown-click ">
                                                            <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img class="svg" src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal">
                                                            </button>
                                                            <div class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                                <a class="dropdown-item" href="#">Item One</a>
                                                                <a class="dropdown-item" href="#">Item Two</a>
                                                                <a class="dropdown-item" href="#">Item Three</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ffp d-flex ffp--hover justify-content-between  align-items-center w-100">
                                                    <div class="d-flex align">
                                                        <div class="me-3 ffp__imgWrapper d-flex align-items-center">
                                                            <span class="ffp__icon color-danger bg-opacity-danger">
                                                                <img src="{{ asset('assets/img/svg/heart.svg') }}" alt="heart" class="svg"></span>
                                                            <span class=" profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0 " style="background-image:url('img/author/3.jpg'); background-size: cover;"></span>
                                                        </div>
                                                        <div class="ffp__title">
                                                            <a href="#" class="text-dark fw-500">
                                                                <h6>
                                                                    <span class="color-primary">Adam </span>upload
                                                                    website template for sale
                                                                </h6>
                                                            </a>
                                                            <p class="d-block">
                                                                5 hours ago
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="ffp__button">
                                                        <div class="dropdown  dropdown-click ">
                                                            <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img class="svg" src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal">
                                                            </button>
                                                            <div class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                                <a class="dropdown-item" href="#">Item One</a>
                                                                <a class="dropdown-item" href="#">Item Two</a>
                                                                <a class="dropdown-item" href="#">Item Three</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ffp d-flex ffp--hover justify-content-between  align-items-center w-100">
                                                    <div class="d-flex">
                                                        <div class="me-3 ffp__imgWrapper d-flex align-items-center">
                                                            <span class="ffp__icon color-warning bg-opacity-warning">
                                                                <img src="{{ asset('assets/img/svg/message-square.svg') }}" alt="message-square" class="svg"></span>
                                                            <span class=" profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0 " style="background-image:url('img/author/4.jpg'); background-size: cover;"></span>
                                                        </div>
                                                        <div class="ffp__title">
                                                            <a href="#" class="text-dark fw-500">
                                                                <h6>
                                                                    <span class="color-primary">James</span> sent you a
                                                                    message
                                                                </h6>
                                                            </a>
                                                            <p class="d-block">
                                                                5 hours ago
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="ffp__button">
                                                        <div class="dropdown  dropdown-click ">
                                                            <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img class="svg" src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal">
                                                            </button>
                                                            <div class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                                <a class="dropdown-item" href="#">Item One</a>
                                                                <a class="dropdown-item" href="#">Item Two</a>
                                                                <a class="dropdown-item" href="#">Item Three</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ffp d-flex ffp--hover justify-content-between  align-items-center w-100">
                                                    <div class="d-flex">
                                                        <div class="me-3 ffp__imgWrapper d-flex align-items-center">
                                                            <span class="ffp__icon color-secondary bg-opacity-secondary">
                                                                <img src="{{ asset('assets/img/svg/upload.svg') }}" alt="upload" class="svg"></span>
                                                            <span class=" profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0" style="background-image:url('img/author/1.jpg'); background-size: cover;"></span>
                                                        </div>
                                                        <div class="ffp__title">
                                                            <a href="#" class="text-dark fw-500">
                                                                <h6>
                                                                    <span class="color-primary">Shreyu Neu</span> sent
                                                                    you a
                                                                    message
                                                                </h6>
                                                            </a>
                                                            <p class="d-block">
                                                                5 hours ago
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="ffp__button">
                                                        <div class="dropdown  dropdown-click ">
                                                            <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img class="svg" src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal">
                                                            </button>
                                                            <div class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                                <a class="dropdown-item" href="#">Item One</a>
                                                                <a class="dropdown-item" href="#">Item Two</a>
                                                                <a class="dropdown-item" href="#">Item Three</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ffp d-flex ffp--hover justify-content-between  align-items-center w-100">
                                                    <div class="d-flex">
                                                        <div class="me-3 ffp__imgWrapper d-flex align-items-center">
                                                            <span class="ffp__icon color-success bg-opacity-success">
                                                                <img src="{{ asset('assets/img/svg/log-in.svg') }}" alt="log-in" class="svg"></span>
                                                            <span class=" profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0 " style="background-image:url('img/author/4.jpg'); background-size: cover;"></span>
                                                        </div>
                                                        <div class="ffp__title">
                                                            <a href="#" class="text-dark fw-500">
                                                                <h6>
                                                                    <span class="color-primary">Mumtahin </span>has
                                                                    registered
                                                                </h6>
                                                            </a>
                                                            <p class="d-block">
                                                                5 hours ago
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="ffp__button">
                                                        <div class="dropdown  dropdown-click ">
                                                            <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img class="svg" src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal">
                                                            </button>
                                                            <div class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                                <a class="dropdown-item" href="#">Item One</a>
                                                                <a class="dropdown-item" href="#">Item Two</a>
                                                                <a class="dropdown-item" href="#">Item Three</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ffp d-flex ffp--hover justify-content-between  align-items-center w-100">
                                                    <div class="d-flex">
                                                        <div class="me-3 ffp__imgWrapper d-flex align-items-center">
                                                            <span class="ffp__icon color-info bg-opacity-info">
                                                                <img src="{{ asset('assets/img/svg/at-sign.svg') }}" alt="at-sign" class="svg"></span>
                                                            <span class=" profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0 " style="background-image:url('img/author/2.jpg'); background-size: cover;"></span>
                                                        </div>
                                                        <div class="ffp__title">
                                                            <a href="#" class="text-dark fw-500">
                                                                <h6>
                                                                    <span class="color-primary">James </span>Send you a
                                                                    message
                                                                </h6>
                                                            </a>
                                                            <p class="d-block">
                                                                5 hours ago
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="ffp__button">
                                                        <div class="dropdown  dropdown-click ">
                                                            <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img class="svg" src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal">
                                                            </button>
                                                            <div class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                                <a class="dropdown-item" href="#">Item One</a>
                                                                <a class="dropdown-item" href="#">Item Two</a>
                                                                <a class="dropdown-item" href="#">Item Three</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ffp d-flex ffp--hover justify-content-between  align-items-center w-100">
                                                    <div class="d-flex align">
                                                        <div class="me-3 ffp__imgWrapper d-flex align-items-center">
                                                            <span class="ffp__icon color-danger bg-opacity-danger">
                                                                <img src="{{ asset('assets/img/svg/heart.svg') }}" alt="heart" class="svg"></span>
                                                            <span class=" profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0 " style="background-image:url('img/author/3.jpg'); background-size: cover;"></span>
                                                        </div>
                                                        <div class="ffp__title">
                                                            <a href="#" class="text-dark fw-500">
                                                                <h6>
                                                                    <span class="color-primary">Adam </span>upload
                                                                    website template for sale
                                                                </h6>
                                                            </a>
                                                            <p class="d-block">
                                                                5 hours ago
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="ffp__button">
                                                        <div class="dropdown  dropdown-click ">
                                                            <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img class="svg" src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal">
                                                            </button>
                                                            <div class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                                <a class="dropdown-item" href="#">Item One</a>
                                                                <a class="dropdown-item" href="#">Item Two</a>
                                                                <a class="dropdown-item" href="#">Item Three</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ffp d-flex ffp--hover justify-content-between  align-items-center w-100">
                                                    <div class="d-flex">
                                                        <div class="me-3 ffp__imgWrapper d-flex align-items-center">
                                                            <span class="ffp__icon color-warning bg-opacity-warning">
                                                                <img src="{{ asset('assets/img/svg/message-square.svg') }}" alt="message-square" class="svg"></span>
                                                            <span class=" profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0 " style="background-image:url('img/author/4.jpg'); background-size: cover;"></span>
                                                        </div>
                                                        <div class="ffp__title">
                                                            <a href="#" class="text-dark fw-500">
                                                                <h6>
                                                                    <span class="color-primary">James</span> sent you a
                                                                    message
                                                                </h6>
                                                            </a>
                                                            <p class="d-block">
                                                                5 hours ago
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="ffp__button">
                                                        <div class="dropdown  dropdown-click ">
                                                            <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img class="svg" src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal">
                                                            </button>
                                                            <div class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                                <a class="dropdown-item" href="#">Item One</a>
                                                                <a class="dropdown-item" href="#">Item Two</a>
                                                                <a class="dropdown-item" href="#">Item Three</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ffp d-flex ffp--hover justify-content-between  align-items-center w-100">
                                                    <div class="d-flex">
                                                        <div class="me-3 ffp__imgWrapper d-flex align-items-center">
                                                            <span class="ffp__icon color-secondary bg-opacity-secondary">
                                                                <img src="{{ asset('assets/img/svg/upload.svg') }}" alt="upload" class="svg"></span>
                                                            <span class=" profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0" style="background-image:url('img/author/1.jpg'); background-size: cover;"></span>
                                                        </div>
                                                        <div class="ffp__title">
                                                            <a href="#" class="text-dark fw-500">
                                                                <h6>
                                                                    <span class="color-primary">Shreyu Neu</span> sent
                                                                    you a
                                                                    message
                                                                </h6>
                                                            </a>
                                                            <p class="d-block">
                                                                5 hours ago
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="ffp__button">
                                                        <div class="dropdown  dropdown-click ">
                                                            <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img class="svg" src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal">
                                                            </button>
                                                            <div class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                                <a class="dropdown-item" href="#">Item One</a>
                                                                <a class="dropdown-item" href="#">Item Two</a>
                                                                <a class="dropdown-item" href="#">Item Three</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4">
                                    <div class="card global-shadow mb-25">
                                        <div class="friends-widget">
                                            <div class="card-header px-md-25 px-3">
                                                <h6>Friends</h6>
                                            </div>
                                            <div class="card-body p-0">
                                                <div class="ffw d-flex justify-content-between">
                                                    <div class="d-flex flex-wrap">
                                                        <div class="me-3 ffw__imgWrapper">
                                                            <span class=" profile-image bg-opacity-secondary rounded-circle d-block ap-profile-image " style="background-image:url('img/author/4.jpg'); background-size: cover;"></span>
                                                        </div>
                                                        <div class="ffw__title">
                                                            <a href="#" class="text-dark fw-500">
                                                                <h6>Meyri Carles</h6>
                                                            </a>
                                                            <span class="d-block">
                                                                UI Designer
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-default btn-squared btn-outline-light friends-follow">follow
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="ffw d-flex justify-content-between">
                                                    <div class="d-flex flex-wrap">
                                                        <div class="me-3 ffw__imgWrapper">
                                                            <span class=" profile-image bg-opacity-secondary rounded-circle d-block ap-profile-image " style="background-image:url('img/author/1.jpg'); background-size: cover;"></span>
                                                        </div>
                                                        <div class="ffw__title">
                                                            <a href="#" class="text-dark fw-500">
                                                                <h6>Shreyu Neu</h6>
                                                            </a>
                                                            <span class="d-block">
                                                                Product Designer
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="ffw__button">
                                                        <button class="btn btn-default btn-squared btn-outline-light friends-follow"><img src="{{ asset('assets/img/svg/check.svg') }}" alt="check" class="svg">
                                                            follow
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="ffw d-flex justify-content-between">
                                                    <div class="d-flex flex-wrap">
                                                        <div class="me-3 ffw__imgWrapper">
                                                            <span class=" profile-image bg-opacity-secondary rounded-circle d-block ap-profile-image " style="background-image:url('img/author/4.jpg'); background-size: cover;"></span>
                                                        </div>
                                                        <div class="ffw__title">
                                                            <a href="#" class="text-dark fw-500">
                                                                <h6>Domnic Harris</h6>
                                                            </a>
                                                            <span class="d-block">
                                                                Executive Assistant
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="ffw__button">
                                                        <button class="btn btn-default btn-squared btn-outline-light friends-follow"><img src="{{ asset('assets/img/svg/check.svg') }}" alt="check" class="svg">
                                                            follow
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="ffw d-flex justify-content-between">
                                                    <div class="d-flex flex-wrap">
                                                        <div class="me-3 ffw__imgWrapper">
                                                            <span class=" profile-image bg-opacity-secondary rounded-circle d-block ap-profile-image " style="background-image:url('img/author/2.jpg'); background-size: cover;"></span>
                                                        </div>
                                                        <div class="ffw__title">
                                                            <a href="#" class="text-dark fw-500">
                                                                <h6>Khalid Hasan</h6>
                                                            </a>
                                                            <span class="d-block">
                                                                UI director
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="ffw__button">
                                                        <button class="btn btn-default btn-squared btn-outline-light friends-follow"><img src="{{ asset('assets/img/svg/check.svg') }}" alt="check" class="svg">
                                                            follow
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="ffw d-flex justify-content-between">
                                                    <div class="d-flex flex-wrap">
                                                        <div class="me-3 ffw__imgWrapper">
                                                            <span class=" profile-image bg-opacity-secondary rounded-circle d-block ap-profile-image " style="background-image:url('img/author/3.jpg'); background-size: cover;"></span>
                                                        </div>
                                                        <div class="ffw__title">
                                                            <a href="#" class="text-dark fw-500">
                                                                <h6>Tuhin Molla</h6>
                                                            </a>
                                                            <span class="d-block">
                                                                System Administrator
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="ffw__button">
                                                        <button class="btn btn-default btn-squared btn-outline-light friends-follow"><img src="{{ asset('assets/img/svg/check.svg') }}" alt="check" class="svg">
                                                            follow
                                                        </button>
                                                    </div>
                                                </div>
                                                <a class="view-more-comment color-primary fs-13 fw-500 px-25 pb-20" href="#">Load more friends</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card global-shadow mb-25">
                                        <div class="photo-gallery-widget">
                                            <div class="card-header justify-content-between d-flex flex-wrap px-md-25 px-3">
                                                <h6>photos</h6>
                                                <a class="color-primary fs-13 fw-500 mt-lg-0 mt-1" href="#">see all</a>
                                            </div>
                                            <div class="card-body">
                                                <div class="wig">
                                                    <div class="wig__item">
                                                        <img src="{{ asset('assets/img/315.png') }}" alt="gallery">
                                                    </div>
                                                    <div class="wig__item">
                                                        <img src="{{ asset('assets/img/325.png') }}" alt="gallery">
                                                    </div>
                                                    <div class="wig__item">
                                                        <img src="{{ asset('assets/img/design.png') }}" alt="gallery">
                                                    </div>
                                                    <div class="wig__item">
                                                        <img src="{{ asset('assets/img/99.png') }}" alt="gallery">
                                                    </div>
                                                    <div class="wig__item">
                                                        <img src="{{ asset('assets/img/166.png') }}" alt="gallery">
                                                    </div>
                                                    <div class="wig__item">
                                                        <img src="{{ asset('assets/img/287.png') }}" alt="gallery">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card global-shadow mb-25">
                                        <div class="video-gallery-widget">
                                            <div class="card-header justify-content-between d-flex flex-wrap px-md-25 px-3">
                                                <h6>videos</h6>
                                                <a class="color-primary fs-13 fw-500 mt-lg-0 mt-1" href="#">see all</a>
                                            </div>
                                            <div class="card-body">
                                                <div class="wig">
                                                    <div class="wig__item wig-overlay">
                                                        <img src="{{ asset('assets/img/juice-2.png') }}" alt="gallery">
                                                        <div class="wig-overlay__content">
                                                            <a class="wig-overlay__iconWrapper popup-youtube" href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                                <img class="svg" src="{{ asset('assets/img/svg/play.svg') }}" alt="img">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="wig__item wig-overlay">
                                                        <img src="{{ asset('assets/img/cup-card.png') }}" alt="gallery">
                                                        <div class="wig-overlay__content">
                                                            <a class="wig-overlay__iconWrapper popup-youtube" href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                                <img class="svg" src="{{ asset('assets/img/svg/play.svg') }}" alt="img">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="wig__item wig-overlay">
                                                        <img src="{{ asset('assets/img/round-box.png') }}" alt="gallery">
                                                        <div class="wig-overlay__content">
                                                            <a class="wig-overlay__iconWrapper popup-youtube" href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                                <img class="svg" src="{{ asset('assets/img/svg/play.svg') }}" alt="img">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="wig__item wig-overlay">
                                                        <img src="{{ asset('assets/img/glass.png') }}" alt="gallery">
                                                        <div class="wig-overlay__content">
                                                            <a class="wig-overlay__iconWrapper popup-youtube" href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                                <img class="svg" src="{{ asset('assets/img/svg/play.svg') }}" alt="img">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="wig__item wig-overlay">
                                                        <img src="{{ asset('assets/img/bottles.png') }}" alt="gallery">
                                                        <div class="wig-overlay__content">
                                                            <a class="wig-overlay__iconWrapper popup-youtube" href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                                <img class="svg" src="{{ asset('assets/img/svg/play.svg') }}" alt="img">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="wig__item wig-overlay">
                                                        <img src="{{ asset('assets/img/325.png') }}" alt="gallery">
                                                        <div class="wig-overlay__content">
                                                            <a class="wig-overlay__iconWrapper" href="#">
                                                                <img class="svg" src="{{ asset('assets/img/svg/play.svg') }}" alt="img">
                                                            </a>
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
</div>
@endsection