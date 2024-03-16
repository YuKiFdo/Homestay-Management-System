
@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="testimonial-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.testimonial-menu-title') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.testimonial-menu-title') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-section">
            <div class=" testimonial-section__padding bg-white">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="testimonial-section__title text-center">
                                <h1>Testimonial 1</h1>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="testimonial-slider1 testimonial-slider-global">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="author-thumb mb-sm-6 mb-xs-3">
                                            <div class="d-flex justify-content-center">
                                                <img class="wh-80 rounded-circle" src="{{ asset('assets/img/team-center.png') }}" alt="">
                                            </div>
                                            <p class="mb-0">Duran Clayton</p>
                                            <span class="d-flex justify-content-center">UI/UX Designer</span>
                                        </div>
                                        <p class="author-comment">It is a long established fact that a reader will page
                                            when
                                            looking at its layout. The point of be distracted by the readable</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="author-thumb mb-sm-6 mb-xs-3">
                                            <div class="d-flex justify-content-center">
                                                <img class="wh-80 rounded-circle" src="{{ asset('assets/img/team-2.png') }}" alt="">
                                            </div>
                                            <p class="mb-0">Duran Clayton</p>
                                            <span class="d-flex justify-content-center">UI/UX Designer</span>
                                        </div>
                                        <p class="author-comment">It is a long established fact that a reader will page
                                            when
                                            looking at its layout. The point of be distracted by the readable</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="author-thumb mb-sm-6 mb-xs-3">
                                            <div class="d-flex justify-content-center">
                                                <img class="wh-80 rounded-circle" src="{{ asset('assets/img/team-3.png') }}" alt="">
                                            </div>
                                            <p class="mb-0">Duran Clayton</p>
                                            <span class="d-flex justify-content-center">UI/UX Designer</span>
                                        </div>
                                        <p class="author-comment">It is a long established fact that a reader will page
                                            when
                                            looking at its layout. The point of be distracted by the readable</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="author-thumb mb-sm-6 mb-xs-3">
                                            <div class="d-flex justify-content-center">
                                                <img class="wh-80 rounded-circle" src="{{ asset('assets/img/team-center.png') }}" alt="">
                                            </div>
                                            <p class="mb-0">Duran Clayton</p>
                                            <span class="d-flex justify-content-center">UI/UX Designer</span>
                                        </div>
                                        <p class="author-comment">It is a long established fact that a reader will page
                                            when
                                            looking at its layout. The point of be distracted by the readable</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="author-thumb mb-sm-6 mb-xs-3">
                                            <div class="d-flex justify-content-center">
                                                <img class="wh-80 rounded-circle" src="{{ asset('assets/img/team-2.png') }}" alt="">
                                            </div>
                                            <p class="mb-0">Duran Clayton</p>
                                            <span class="d-flex justify-content-center">UI/UX Designer</span>
                                        </div>
                                        <p class="author-comment">It is a long established fact that a reader will page
                                            when
                                            looking at its layout. The point of be distracted by the readable</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="author-thumb mb-sm-6 mb-xs-3">
                                            <div class="d-flex justify-content-center">
                                                <img class="wh-80 rounded-circle" src="{{ asset('assets/img/team-3.png') }}" alt="">
                                            </div>
                                            <p class="mb-0">Duran Clayton</p>
                                            <span class="d-flex justify-content-center">UI/UX Designer</span>
                                        </div>
                                        <p class="author-comment">It is a long established fact that a reader will page
                                            when
                                            looking at its layout. The point of be distracted by the readable</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-section__padding bg-normal rounded-0">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="testimonial-section__title text-center">
                                <h1>Testimonial 2</h1>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="testimonial-slider2 testimonial-slider-global">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="author-thumb mb-sm-6 mb-xs-3 d-flex justify-content-between">
                                            <div class="d-flex flex-wrap">
                                                <div class="me-20">
                                                    <img class="wh-70 rounded-circle" src="{{ asset('assets/img/team-center.png') }}" alt="">
                                                </div>
                                                <div>
                                                    <p class="mb-0">Duran Clayton</p>
                                                    <span>UI/UX Designer</span>
                                                </div>
                                            </div>
                                            <div class="div">
                                                <img src="{{ asset('assets/img/svg/quote2.svg') }}" alt="">
                                            </div>
                                        </div>
                                        <p class="author-comment">It is a long established fact that a reader will page
                                            when
                                            looking at its layout. The point of be distracted by the readable</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="author-thumb mb-sm-6 mb-xs-3 d-flex justify-content-between">
                                            <div class="d-flex flex-wrap">
                                                <div class="me-20">
                                                    <img class="wh-70 rounded-circle" src="{{ asset('assets/img/team-center.png') }}" alt="">
                                                </div>
                                                <div>
                                                    <p class="mb-0">Duran Clayton</p>
                                                    <span>UI/UX Designer</span>
                                                </div>
                                            </div>
                                            <div class="div">
                                                <img src="{{ asset('assets/img/svg/quote2.svg') }}" alt="">
                                            </div>
                                        </div>
                                        <p class="author-comment">It is a long established fact that a reader will page
                                            when
                                            looking at its layout. The point of be distracted by the readable</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="author-thumb mb-sm-6 mb-xs-3 d-flex justify-content-between">
                                            <div class="d-flex flex-wrap">
                                                <div class="me-20">
                                                    <img class="wh-70 rounded-circle" src="{{ asset('assets/img/team-center.png') }}" alt="">
                                                </div>
                                                <div>
                                                    <p class="mb-0">Duran Clayton</p>
                                                    <span>UI/UX Designer</span>
                                                </div>
                                            </div>
                                            <div class="div">
                                                <img src="{{ asset('assets/img/svg/quote2.svg') }}" alt="">
                                            </div>
                                        </div>
                                        <p class="author-comment">It is a long established fact that a reader will page
                                            when
                                            looking at its layout. The point of be distracted by the readable</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-section__padding bg-white rounded-0">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="testimonial-section__title text-center">
                                <h1>Testimonial 3</h1>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="row justify-content-center">
                                <div class="col-xl-6">
                                    <div class="testimonial-slider3-nav testimonial-slider-global">
                                        <div class="d-flex m-0 justify-content-center">
                                            <img class=" rounded-circle" src="{{ asset('assets/img/team-center.png') }}" alt="">
                                        </div>
                                        <div class="d-flex m-0 justify-content-center">
                                            <img class=" rounded-circle" src="{{ asset('assets/img/team-2.png') }}" alt="">
                                        </div>
                                        <div class="d-flex m-0 justify-content-center">
                                            <img class="rounded-circle" src="{{ asset('assets/img/team-3.png') }}" alt="">
                                        </div>
                                        <div class="d-flex m-0 justify-content-center">
                                            <img class=" rounded-circle" src="{{ asset('assets/img/team-center.png') }}" alt="">
                                        </div>
                                        <div class="d-flex m-0 justify-content-center">
                                            <img class=" rounded-circle" src="{{ asset('assets/img/team-2.png') }}" alt="">
                                        </div>
                                        <div class="d-flex m-0 justify-content-center">
                                            <img class=" rounded-circle" src="{{ asset('assets/img/team-3.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="testimonial-slider3-for testimonial-slider-global">
                                <div class="card shadow-none border-0">
                                    <div class="card-body text-center">
                                        <p class="author-comment">Lorem ipsum dolor sit amet, consetetur sadipscing
                                            elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                            aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                            doloresea </p>
                                        <div class="author-thumb mb-sm-6 mb-xs-3">
                                            <p class="mb-0">John Clayton</p>
                                            <span class="d-flex justify-content-center">UI/UX Designer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow-none border-0">
                                    <div class="card-body text-center">
                                        <p class="author-comment">Lorem ipsum dolor sit amet, consetetur sadipscing
                                            elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                            aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                            doloresea.At vero eos et accusam et justo duo
                                            doloresea </p>
                                        <div class="author-thumb mb-sm-6 mb-xs-3">
                                            <p class="mb-0">Robin Clayton</p>
                                            <span class="d-flex justify-content-center">UI/UX Designer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow-none border-0">
                                    <div class="card-body text-center">
                                        <p class="author-comment">Lorem ipsum dolor sit amet, consetetur sadipscing
                                            elitr, sed diam nonumy </p>
                                        <div class="author-thumb mb-sm-6 mb-xs-3">
                                            <p class="mb-0">Heri Clayton</p>
                                            <span class="d-flex justify-content-center">UI/UX Designer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow-none border-0">
                                    <div class="card-body text-center">
                                        <p class="author-comment">Lorem ipsum dolor sit amet, consetetur sadipscing
                                            elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                            aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                            doloresea
                                            sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                            aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                            doloresea </p>
                                        <div class="author-thumb mb-sm-6 mb-xs-3">
                                            <p class="mb-0">Gomlms Clayton</p>
                                            <span class="d-flex justify-content-center">UI/UX Designer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow-none border-0">
                                    <div class="card-body text-center">
                                        <p class="author-comment">Lorem ipsum dolor sit amet, consetetur sadipscing
                                            elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                            aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                            doloresea </p>
                                        <div class="author-thumb mb-sm-6 mb-xs-3">
                                            <p class="mb-0">Duran Clayton</p>
                                            <span class="d-flex justify-content-center">UI/UX Designer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow-none border-0">
                                    <div class="card-body text-center">
                                        <p class="author-comment">Lorem ipsum dolor sit amet, consetetur sadipscing
                                            elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                            aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                            doloresea </p>
                                        <div class="author-thumb mb-sm-6 mb-xs-3">
                                            <p class="mb-0">Duran Clayton</p>
                                            <span class="d-flex justify-content-center">UI/UX Designer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-section__padding bg-normal rounded-0">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="testimonial-section__title text-center">
                                <h1>Testimonial 4</h1>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="testimonial-slider4 testimonial-slider-global">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="d-flex justify-content-center">
                                            <img class="wh-100 rounded-circle" src="{{ asset('assets/img/team-center.png') }}" alt="">
                                        </div>
                                        <p class="author-comment">Lorem ipsum dolor sit amet, consetetur sadipscing
                                            elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                            aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                            doloresea </p>
                                        <div class="author-thumb mb-sm-6 mb-xs-3">
                                            <p class="mb-0">Duran Clayton</p>
                                            <span class="d-flex justify-content-center">UI/UX Designer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="d-flex justify-content-center">
                                            <img class="wh-100 rounded-circle" src="{{ asset('assets/img/team-3.png') }}" alt="">
                                        </div>
                                        <p class="author-comment">Lorem ipsum dolor sit amet, consetetur sadipscing
                                            elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                            aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                            doloresea </p>
                                        <div class="author-thumb mb-sm-6 mb-xs-3">
                                            <p class="mb-0">Duran Clayton</p>
                                            <span class="d-flex justify-content-center">UI/UX Designer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="d-flex justify-content-center">
                                            <img class="wh-100 rounded-circle" src="{{ asset('assets/img/team-2.png') }}" alt="">
                                        </div>
                                        <p class="author-comment">Lorem ipsum dolor sit amet, consetetur sadipscing
                                            elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                            aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                            doloresea </p>
                                        <div class="author-thumb mb-sm-6 mb-xs-3">
                                            <p class="mb-0">Duran Clayton</p>
                                            <span class="d-flex justify-content-center">UI/UX Designer</span>
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