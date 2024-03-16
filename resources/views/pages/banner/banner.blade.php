@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="social-dash-wrap">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Banner</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Banner</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6 ">
                <div class="card banner-feature">
                    <div class="card-body">
                        <h1 class="banner-feature__heading">15 Days Free Trail</h1>
                        <p class="banner-feature__para color-gray">Lorem ipsum dolor sit amet, consetetur sadipscing
                            elitr, sed
                            diam nonumy eirmod tempor invidunt ut</p>
                        <button class="banner-feature__btn btn btn-outline-primary btn-sm px-20 radius-xs fs-14" type="button">Start</button>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
                <div class="card banner-feature banner-feature--2">
                    <div class="banner-feature__shape">
                        <img src="{{ asset('assets/img/svg/group9010.svg') }}" alt="img" class="svg">
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="card-body">
                            <h1 class="banner-feature__heading color-white">Upgrade your plan</h1>
                            <p class="banner-feature__para color-white">Lorem ipsum dolor sit amet </p>
                            <button class="banner-feature__btn btn color-primary btn-md px-20 bg-white radius-xs fs-15" type="button">upgrade</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
                <div class="card banner-feature banner-feature--3">
                    <div class="banner-feature__shape">
                        <img src="{{ asset('assets/img/svg/group9060.svg') }}" alt="img" class="svg">
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="card-body">
                            <h1 class="banner-feature__heading color-white">Earn More Money</h1>
                            <button class="banner-feature__btn btn color-primary btn-md px-20 bg-white radius-xs fs-15 mt-35" type="button">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6 mb-30">
                <div class="card banner-feature banner-feature--4">
                    <div class="banner-feature__shape">
                        <img src="{{ asset('assets/img/svg/group3503.svg') }}" alt="img" class="svg">
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="card-body">
                            <h1 class="banner-feature__heading color-white">Win Your Bonus</h1>
                            <p class="banner-feature__para color-white">Weekly performance bonus</p>
                            <button class="banner-feature__btn btn color-primary btn-md px-20 bg-white radius-xs fs-15" type="button">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-sm-6  mb-md-50 mb-30">
                <div class="card banner-feature banner-feature--5">
                    <div class="banner-feature__shape">
                        <img src="{{ asset('assets/img/svg/group3320.svg') }}" alt="img">
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="card-body">
                            <h2 class="banner-feature__heading color-white">Congratulations Jhon!</h2>
                            <p class="banner-feature__para ">Best Seller on the last month.</p>
                            <button class="banner-feature__btn btn color-primary btn-md px-20 bg-white radius-xs fs-15" type="button">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-sm-6  mb-md-50 mb-30">
                <div class="card banner-feature banner-feature--6" style="background-image:url({{ asset('assets/img/rectangle381.png') }});">
                    <div class="d-flex justify-content-center">
                        <div class="card-body">
                            <img src="{{ asset('assets/img/sale.png') }}" alt="img">
                            <h3 class="banner-feature__heading color-danger">Up to 50 OFF</h3>
                            <button class="banner-feature__btn btn btn-outline-danger  btn-md px-20 radius-xs fs-15" type="button">buy now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 mb-md-50 mb-30">
                <div class="card banner-feature banner-feature--77">
                    <div class="d-flex justify-content-center">
                        <div class="card-body">
                            <div class="banner-feature__shape me-20">
                                <img src="{{ asset('assets/img/svg/group9102.svg') }}" alt="img">
                            </div>
                            <div class="div">
                                <h2 class="banner-feature__heading">Subscribe to our newsletter</h2>
                                <p class="banner-feature__para ">Lorem ipsum dolor sit amet, consetetur</p>
                                <button class="banner-feature__btn btn btn btn-outline-primary btn-md px-20 radius-xs fs-15" type="button">Subscribe Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 mb-xxl-45 mb-25">
                <div class="row">
                    <div class="col-md-6 mb-25">
                        <div class="card banner-feature--8 ">
                            <div class="slick-slider slick-dots-bottom banner-slider">
                                <div class=" d-flex">
                                    <div class="d-flex w-100">
                                        <div class="card-body">
                                            <div class="banner-feature__shape mb-30 content-center">
                                                <img src="{{ asset('assets/img/svg/group3488.svg') }}" alt="img" class="svg">
                                            </div>
                                            <div class="pb-md-0 pb-30">
                                                <h2 class="banner-feature__heading color-white">Achievements</h2>
                                                <p class="banner-feature__para ">Lorem ipsum dolor sit amet, consetetur
                                                    sadipscing elitr.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" d-flex">
                                    <div class="d-flex w-100">
                                        <div class="card-body">
                                            <div class="banner-feature__shape mb-30 content-center">
                                                <img src="{{ asset('assets/img/svg/group3488.svg') }}" alt="img" class="svg">
                                            </div>
                                            <div class=" pb-md-0 pb-30">
                                                <h2 class="banner-feature__heading color-white">Achievements</h2>
                                                <p class="banner-feature__para ">Lorem ipsum dolor sit amet, consetetur
                                                    sadipscing elitr.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" d-flex">
                                    <div class="d-flex w-100">
                                        <div class="card-body">
                                            <div class="banner-feature__shape mb-30 content-center">
                                                <img src="{{ asset('assets/img/svg/group3488.svg') }}" alt="img" class="svg">
                                            </div>
                                            <div class="pb-md-0 pb-30">
                                                <h2 class="banner-feature__heading color-white">Achievements</h2>
                                                <p class="banner-feature__para ">Lorem ipsum dolor sit amet, consetetur
                                                    sadipscing elitr.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card banner-feature--9">
                            <div class="card-body">
                                <h3 class="banner-feature__heading">Up To Date </h3>
                                <div class="banner-feature__shape mt-30">
                                    <img src="{{ asset('assets/img/svg/group3396.svg') }}" alt="img" class="svg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7 mb-xxl-45 mb-25">
                <div class="row">
                    <div class="col-md-6 mb-25">
                        <div class="card  banner-feature--10">
                            <div class="banner-feature__shape">
                                <img src="{{ asset('assets/img/svg/group93352.svg') }}" alt="img" class="svg w-100">
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="card-body">
                                    <h1 class="banner-feature__heading color-white">Need More Space?</h1>
                                    <button class="banner-feature__btn btn color-primary btn-md px-20 bg-white radius-xs fs-15" type="button">Buy Storage</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card banner-feature--11">
                            <div class="banner-feature__shape">
                                <img src="{{ asset('assets/img/svg/man.svg') }}" alt="img" class="svg">
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="card-body">
                                    <h1 class="banner-feature__heading color-white">Create Sale Report</h1>
                                    <p class="banner-feature__para ">Lorem ipsum dolor sit amet, consetetur sadipscing
                                        elitr, sed diam nonumy
                                    </p>
                                    <button class="banner-feature__btn btn color-primary btn-md px-20 bg-white radius-xs fs-15" type="button">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-xxl-45 mb-25">
                <div class="card banner-feature--12 d-flex">
                    <div class="d-flex flex-sm-nowrap flex-wrap align-items-center text-center">
                        <div class="banner-feature__shape">
                            <img src="{{ asset('assets/img/svg/group3474.svg') }}" alt="img" class="svg">
                        </div>
                        <div class="card-body">
                            <h1 class="banner-feature__heading">Dedicated Support</h1>
                            <div class="d-flex justify-content-center">
                                <button class="banner-feature__btn btn btn btn-primary btn-md px-20 radius-xs fs-15 mt-30" type="button">Learn More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-xxl-45 mb-25">
                <div class="card banner-feature--13 d-flex">
                    <div class="d-flex align-items-center flex-sm-nowrap flex-wrap text-sm-start text-center">
                        <div class="card-body">
                            <h2 class="banner-feature__heading">Welcome Back Garry Sobars!</h2>
                            <p class="banner-feature__para ">Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam
                            </p>
                            <div class="d-flex justify-content-sm-start justify-content-center">
                                <button class="banner-feature__btn btn color-primary btn-md px-20 bg-white radius-xs fs-15" type="button">Learn More</button>
                            </div>
                        </div>
                        <div class="banner-feature__shape">
                            <img src="{{ asset('assets/img/svg/objects.svg') }}" alt="img" class="svg">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection