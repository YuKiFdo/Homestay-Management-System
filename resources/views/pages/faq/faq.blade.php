@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.faq-menu-title') }}</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.faq-menu-title') }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-xxl-3 col-xl-4 col-sm-5">
            <!-- Card 1 -->
            <div class="card shadow-lg">
                <div class="card-body p-0">
                    <div class="faqs-wrapper">
                        <div class="px-30 pt-35 ">
                            <span class="px-20 py-2 fs-14 rounded-pill bg-normal color-light">Browse by Topic</span>
                        </div>
                        <div class="faqs-wrapper-tab p-15 pt-25 pb-30">
                            <div class="nav flex-column text-start mb-2" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                    href="#v-pills-home" role="tab" aria-selected="true">
                                    <span class="dot bg-primary"></span>Using Applications</a>
                                <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    href="#v-pills-profile" role="tab" aria-selected="false">
                                    <span class="dot bg-warning"></span>UI Elements</a>
                                <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                    href="#v-pills-messages" role="tab" aria-selected="false">
                                    <span class="dot bg-success"></span>Components</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                    href="#v-pills-settings" role="tab" aria-selected="false">
                                    <span class="dot bg-warning"></span>Build process</a>
                                <a class="nav-link" id="v-pills-notification-tab" data-bs-toggle="pill"
                                    href="#v-pills-notification" role="tab" aria-selected="false">
                                    <span class="dot bg-info"></span>Support Policy</a>
                                <a class="nav-link" id="v-pills-support-tab" data-bs-toggle="pill"
                                    href="#v-pills-support" role="tab" aria-selected="false">
                                    <span class="dot bg-danger"></span>Accounts & Billing</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="card shadow-lg mt-25 mb-md-50 mb-25">
                <div class="card-body py-40 px-50">
                    <div class="faq-support text-center">
                        <img src="{{ asset('assets/img/svg/faq-support.svg') }}" alt="support" class="svg img-fluid">
                        <h5 class="fw-500 mt-30 mb-20 color-dark">Not finding the help you need?</h5>
                        <div class="content-center">


                            <button class="btn btn-primary btn-default btn-squared text-capitalize px-30">Contact
                                Support
                            </button>





                        </div>
                    </div>
                </div>
            </div>
        </div><!-- ends: col -->
        <div class="col-xxl-9 col-xl-8 col-sm-7">
            <div class="mb-30">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade  show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">
                        <!-- Edit Profile -->

                        <div class="card h-100 shadow-lg pb-md-50 pb-30 mb-md-50 mb-30">
                            <div class="card-header px-30 pt-30 pb-25 border-bottom-0">
                                <h4 class="fw-500">Using Applications</h4>
                            </div>
                            <div class="card-body pt-0">
                                <div class="application-faqs">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <!-- panel 1 -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a data-bs-toggle="collapse" data-parent="#accordion"
                                                        href="#collapseOne" aria-expanded="true">
                                                        How long does it take to download updates?
                                                    </a>
                                                </h4>

                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in show"
                                                role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    <p class="mb-sm-35 mb-20">Many support queries and technical
                                                        questions will
                                                        already be answered in supporting documentation such as FAQ's
                                                        and comments from previous buyers. Anim pariatur cliche
                                                        reprehenderit, enim eiusmod high life accusamus terry richardson
                                                        ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                                        dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                                        3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                        single-origin coffee nulla assumenda shoreditch et.</p>
                                                    <span class="fs-14 fw-500 color-dark">Was this article
                                                        helpful?</span>
                                                    <div class="button-group d-flex mt-2">
                                                        <button
                                                            class="btn btn-default btn-squared color-success px-15 btn-outline-success px-15 "><img
                                                                src="{{ asset('assets/img/svg/smile.svg') }}"
                                                                alt="smile" class="svg">
                                                            Yes
                                                        </button>
                                                        <button
                                                            class="btn btn-default btn-squared color-warning px-15 btn-outline-warning px-15 "><img
                                                                src="{{ asset('assets/img/svg/frown.svg') }}"
                                                                alt="frown" class="svg">
                                                            No
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- panel 2 -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-bs-toggle="collapse"
                                                        data-parent="#accordion" href="#collapseTwo"
                                                        aria-expanded="false">
                                                        How to use SCSS variables to build custom color?
                                                    </a>
                                                </h4>

                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    <p class="mb-sm-35 mb-20">Many support queries and technical
                                                        questions will
                                                        already be answered in supporting documentation such as FAQ's
                                                        and comments from previous buyers. Anim pariatur cliche
                                                        reprehenderit, enim eiusmod high life accusamus terry richardson
                                                        ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                                        dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                                        3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                        single-origin coffee nulla assumenda shoreditch et.</p>
                                                    <span class="fs-14 fw-500 color-dark">Was this article
                                                        helpful?</span>
                                                    <div class="button-group d-flex mt-2">
                                                    <button
                                                            class="btn btn-default btn-squared color-success px-15 btn-outline-success px-15 "><img
                                                                src="{{ asset('assets/img/svg/smile.svg') }}"
                                                                alt="smile" class="svg">
                                                            Yes
                                                        </button>
                                                        <button
                                                            class="btn btn-default btn-squared color-warning px-15 btn-outline-warning px-15 "><img
                                                                src="{{ asset('assets/img/svg/frown.svg') }}"
                                                                alt="frown" class="svg">
                                                            No
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- panel 3 -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingThree">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-bs-toggle="collapse"
                                                        data-parent="#accordion" href="#collapseThree"
                                                        aria-expanded="false">
                                                        How long does it take to download updates?
                                                    </a>
                                                </h4>

                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingThree">
                                                <div class="panel-body">
                                                    <p class="mb-sm-35 mb-20">Many support queries and technical
                                                        questions will
                                                        already be answered in supporting documentation such as FAQ's
                                                        and comments from previous buyers. Anim pariatur cliche
                                                        reprehenderit, enim eiusmod high life accusamus terry richardson
                                                        ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                                        dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                                        3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                        single-origin coffee nulla assumenda shoreditch et.</p>
                                                    <span class="fs-14 fw-500 color-dark">Was this article
                                                        helpful?</span>
                                                    <div class="button-group d-flex mt-2">

                                                    <button
                                                            class="btn btn-default btn-squared color-success px-15 btn-outline-success px-15 "><img
                                                                src="{{ asset('assets/img/svg/smile.svg') }}"
                                                                alt="smile" class="svg">
                                                            Yes
                                                        </button>
                                                        <button
                                                            class="btn btn-default btn-squared color-warning px-15 btn-outline-warning px-15 "><img
                                                                src="{{ asset('assets/img/svg/frown.svg') }}"
                                                                alt="frown" class="svg">
                                                            No
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- panel 4 -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingfour">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-bs-toggle="collapse"
                                                        data-parent="#accordion" href="#collapsefour"
                                                        aria-expanded="false">
                                                        What is the flex layout?
                                                    </a>
                                                </h4>

                                            </div>
                                            <div id="collapsefour" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingfour">
                                                <div class="panel-body">
                                                    <p class="mb-sm-35 mb-20">Many support queries and technical
                                                        questions will
                                                        already be answered in supporting documentation such as FAQ's
                                                        and comments from previous buyers. Anim pariatur cliche
                                                        reprehenderit, enim eiusmod high life accusamus terry richardson
                                                        ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                                        dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                                        3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                        single-origin coffee nulla assumenda shoreditch et.</p>
                                                    <span class="fs-14 fw-500 color-dark">Was this article
                                                        helpful?</span>
                                                    <div class="button-group d-flex mt-2">
                                                    <button
                                                            class="btn btn-default btn-squared color-success px-15 btn-outline-success px-15 "><img
                                                                src="{{ asset('assets/img/svg/smile.svg') }}"
                                                                alt="smile" class="svg">
                                                            Yes
                                                        </button>
                                                        <button
                                                            class="btn btn-default btn-squared color-warning px-15 btn-outline-warning px-15 "><img
                                                                src="{{ asset('assets/img/svg/frown.svg') }}"
                                                                alt="frown" class="svg">
                                                            No
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- panel 5 -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingfive">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-bs-toggle="collapse"
                                                        data-parent="#accordion" href="#collapsefive"
                                                        aria-expanded="false">
                                                        How long does it take to download updates?
                                                    </a>
                                                </h4>

                                            </div>
                                            <div id="collapsefive" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingfive">
                                                <div class="panel-body">
                                                    <p class="mb-sm-35 mb-20">Many support queries and technical
                                                        questions will
                                                        already be answered in supporting documentation such as FAQ's
                                                        and comments from previous buyers. Anim pariatur cliche
                                                        reprehenderit, enim eiusmod high life accusamus terry richardson
                                                        ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                                        dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                                        3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                        single-origin coffee nulla assumenda shoreditch et.</p>
                                                    <span class="fs-14 fw-500 color-dark">Was this article
                                                        helpful?</span>
                                                    <div class="button-group d-flex mt-2">
                                                    <button
                                                            class="btn btn-default btn-squared color-success px-15 btn-outline-success px-15 "><img
                                                                src="{{ asset('assets/img/svg/smile.svg') }}"
                                                                alt="smile" class="svg">
                                                            Yes
                                                        </button>
                                                        <button
                                                            class="btn btn-default btn-squared color-warning px-15 btn-outline-warning px-15 "><img
                                                                src="{{ asset('assets/img/svg/frown.svg') }}"
                                                                alt="frown" class="svg">
                                                            No
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- panel 6 -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingsix">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-bs-toggle="collapse"
                                                        data-parent="#accordion" href="#collapsesix"
                                                        aria-expanded="false">
                                                        Where to buy this UI dashboard?
                                                    </a>
                                                </h4>

                                            </div>
                                            <div id="collapsesix" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingsix">
                                                <div class="panel-body">
                                                    <p class="mb-sm-35 mb-20">Many support queries and technical
                                                        questions will
                                                        already be answered in supporting documentation such as FAQ's
                                                        and comments from previous buyers. Anim pariatur cliche
                                                        reprehenderit, enim eiusmod high life accusamus terry richardson
                                                        ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                                        dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                                        3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                        single-origin coffee nulla assumenda shoreditch et.</p>
                                                    <span class="fs-14 fw-500 color-dark">Was this article
                                                        helpful?</span>
                                                    <div class="button-group d-flex mt-2">
                                                    <button
                                                            class="btn btn-default btn-squared color-success px-15 btn-outline-success px-15 "><img
                                                                src="{{ asset('assets/img/svg/smile.svg') }}"
                                                                alt="smile" class="svg">
                                                            Yes
                                                        </button>
                                                        <button
                                                            class="btn btn-default btn-squared color-warning px-15 btn-outline-warning px-15 "><img
                                                                src="{{ asset('assets/img/svg/frown.svg') }}"
                                                                alt="frown" class="svg">
                                                            No
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- panel 7 -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingseven">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-bs-toggle="collapse"
                                                        data-parent="#accordion" href="#collapseseven"
                                                        aria-expanded="false">
                                                        How long does it take to download updates?
                                                    </a>
                                                </h4>

                                            </div>
                                            <div id="collapseseven" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingseven">
                                                <div class="panel-body">
                                                    <p class="mb-sm-35 mb-20">Many support queries and technical
                                                        questions will
                                                        already be answered in supporting documentation such as FAQ's
                                                        and comments from previous buyers. Anim pariatur cliche
                                                        reprehenderit, enim eiusmod high life accusamus terry richardson
                                                        ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                                        dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                                        3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                        single-origin coffee nulla assumenda shoreditch et.</p>
                                                    <span class="fs-14 fw-500 color-dark">Was this article
                                                        helpful?</span>
                                                    <div class="button-group d-flex mt-2">
                                                    <button
                                                            class="btn btn-default btn-squared color-success px-15 btn-outline-success px-15 "><img
                                                                src="{{ asset('assets/img/svg/smile.svg') }}"
                                                                alt="smile" class="svg">
                                                            Yes
                                                        </button>
                                                        <button
                                                            class="btn btn-default btn-squared color-warning px-15 btn-outline-warning px-15 "><img
                                                                src="{{ asset('assets/img/svg/frown.svg') }}"
                                                                alt="frown" class="svg">
                                                            No
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Edit Profile End -->
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">
                    </div>
                    <div class="tab-pane fade " id="v-pills-settings" role="tabpanel"
                        aria-labelledby="v-pills-settings-tab">
                    </div>
                    <div class="tab-pane fade" id="v-pills-notification" role="tabpanel"
                        aria-labelledby="v-pills-notification-tab">
                    </div>
                    <div class="tab-pane fade" id="v-pills-support" role="tabpanel"
                        aria-labelledby="v-pills-support-tab">
                    </div>
                </div>
            </div>
        </div><!-- ends: col -->
    </div>
</div>
@endsection
