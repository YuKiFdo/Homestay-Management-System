@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="course-details mt-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.course-detail') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>{{ trans('menu.dashboard-menu-title') }}</a></li>
                                <li class="breadcrumb-item"><a href="#">Page</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.course-detail') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
        <!-- ends: .row -->
        <div class="course-details-wrapper mb-45">
            <div class="row">
                <div class="col-lg-6">
                    <div class="course-details-about">
                        <div class="course-details-about__content">
                            <h1 class="main-title">UI/UX Design Masters Course</h1>
                            <p class="main-title-sub mb-30">
                                Many support queries and technical questions will already be answered in supporting
                                documentation such as and comments from previous buyers. Anim pariatur cliche
                                reprehenderit,
                                enim eiusmod.
                            </p>
                            <h5 class="mb-3">About Instructor </h5>
                            <div class="course-details-author">
                                <img src="{{ asset('assets/img/ellipse11.png') }}" alt="ellipse11">
                                <div class="course-details-author__title">
                                    <h6>David Warner</h6>
                                    <span>Senior UI/UX Designer at Dribble, Top Rated Freelancer at Upwork </span>
                                </div>
                            </div>
                            <h5>
                                About This Course
                            </h5>
                            <p class="main-title-sub mb-30">User interface design or user interface engineering is the
                                design of user interfaces for
                                machines and software, such as computers, home appliances, mobile devices, and other
                                electronic devices, with the focus on maximizing usability and the user experience.
                            </p>
                            <p class="main-title-sub mb-40">User interface design or user interface engineering is the
                                design of user interfaces for
                                machines and software, such as computers, home appliances, mobile devices, and other
                                electronic devices, with the focus on maximizing.</p>
                            <h5>What You Will Learn</h5>
                            <div class="course-details__step-list">
                                <ul>
                                    <li>Basic to Advance knowledge of UI/UX Design </li>
                                    <li>UI/UX Design Fundamental </li>
                                    <li>Colour Theory </li>
                                    <li>Typography</li>
                                    <li>Design Systems</li>
                                    <li>Alignment</li>
                                    <li>User Research</li>
                                    <li>User Flow</li>
                                </ul>
                            </div>
                            <h5>Course content</h5>
                            <div class="course-details-collapse mb-30">
                                <div class="course-collapse course-accordion accordion" id="accordionExample">


                                    <div class="border-0 dm-collapse dm-accordion">

                                        <div class="dm-collapse-item">
                                            <div class="border-bottom-0 mb-0 dm-collapse-item__header active">
                                                <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-a-1" aria-expanded="true">
                                                    <div class="dm-collapse-title">

                                                        <i class="las la-plus"></i>

                                                        <h6>Getting Started</h6>
                                                    </div>
                                                    <div class="course-collapse-right">
                                                        <div class="course-collapse-lecture">
                                                            03 Lectures
                                                        </div>
                                                        <div class="course-collapse-duration">
                                                            15:00
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-body-a-1" class="collapse show dm-collapse-item__body show">
                                                <div class="collapse-body-text">
                                                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                        <div class="course-collapse-body-item">
                                                            <div class="course-collapse-body-item__left">
                                                                <img class="course-icon" src="{{ asset('assets/img/play.png') }}" alt="play">
                                                                <div class="course-title">Course Introduction</div>
                                                            </div>
                                                            <div class="course-collapse-body-item__right">
                                                                <div class="course-preview-lectures">
                                                                    Preview
                                                                </div>
                                                                <div class="course-duration">
                                                                    5:00
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="course-collapse-body-item">
                                                            <div class="course-collapse-body-item__left">
                                                                <img class="course-icon" src="{{ asset('assets/img/play.png') }}" alt="play">
                                                                <div class="course-title"> Demand of UI/UX Design</div>
                                                            </div>
                                                            <div class="course-collapse-body-item__right">
                                                                <div class="course-preview-lectures">
                                                                    Preview
                                                                </div>
                                                                <div class="course-duration">
                                                                    5:00
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="course-collapse-body-item">
                                                            <div class="course-collapse-body-item__left">
                                                                <img class="course-icon" src="{{ asset('assets/img/play.png') }}" alt="play">
                                                                <div class="course-title">Tools</div>
                                                            </div>
                                                            <div class="course-collapse-body-item__right">
                                                                <div class="course-preview-lectures">
                                                                    Preview
                                                                </div>
                                                                <div class="course-duration">
                                                                    5:00
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dm-collapse-item">
                                            <div class="border-bottom-0 mb-0 dm-collapse-item__header">
                                                <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-a-2" aria-expanded="false">
                                                    <div class="dm-collapse-title">

                                                        <i class="las la-plus"></i>

                                                        <h6>User Interface Vs User Experience</h6>
                                                    </div>
                                                    <div class="course-collapse-right">
                                                        <div class="course-collapse-lecture">
                                                            05 Lectures
                                                        </div>
                                                        <div class="course-collapse-duration">
                                                            15:00
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-body-a-2" class="collapse  dm-collapse-item__body">
                                                <div class="collapse-body-text">
                                                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                        <div class="course-collapse-body-item">
                                                            <div class="course-collapse-body-item__left">
                                                                <img class="course-icon" src="{{ asset('assets/img/play.png') }}" alt="play">
                                                                <div class="course-title">Course Introduction</div>
                                                            </div>
                                                            <div class="course-collapse-body-item__right">
                                                                <div class="course-preview-lectures">
                                                                    Preview
                                                                </div>
                                                                <div class="course-duration">
                                                                    5:00
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="course-collapse-body-item">
                                                            <div class="course-collapse-body-item__left">
                                                                <img class="course-icon" src="{{ asset('assets/img/play.png') }}" alt="play">
                                                                <div class="course-title"> Demand of UI/UX Design</div>
                                                            </div>
                                                            <div class="course-collapse-body-item__right">
                                                                <div class="course-preview-lectures">
                                                                    Preview
                                                                </div>
                                                                <div class="course-duration">
                                                                    5:00
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="course-collapse-body-item">
                                                            <div class="course-collapse-body-item__left">
                                                                <img class="course-icon" src="{{ asset('assets/img/play.png') }}" alt="play">
                                                                <div class="course-title">Tools</div>
                                                            </div>
                                                            <div class="course-collapse-body-item__right">
                                                                <div class="course-preview-lectures">
                                                                    Preview
                                                                </div>
                                                                <div class="course-duration">
                                                                    5:00
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dm-collapse-item">
                                            <div class="border-bottom-0 mb-0 dm-collapse-item__header">
                                                <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-a-3" aria-expanded="false">
                                                    <div class="dm-collapse-title">

                                                        <i class="las la-plus"></i>

                                                        <h6>Design Fundamental</h6>
                                                    </div>
                                                    <div class="course-collapse-right">
                                                        <div class="course-collapse-lecture">
                                                            15 Lectures
                                                        </div>
                                                        <div class="course-collapse-duration">
                                                            15:00
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-body-a-3" class="collapse  dm-collapse-item__body">
                                                <div class="collapse-body-text">
                                                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                        <div class="course-collapse-body-item">
                                                            <div class="course-collapse-body-item__left">
                                                                <img class="course-icon" src="{{ asset('assets/img/play.png') }}" alt="play">
                                                                <div class="course-title">Course Introduction</div>
                                                            </div>
                                                            <div class="course-collapse-body-item__right">
                                                                <div class="course-preview-lectures">
                                                                    Preview
                                                                </div>
                                                                <div class="course-duration">
                                                                    5:00
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="course-collapse-body-item">
                                                            <div class="course-collapse-body-item__left">
                                                                <img class="course-icon" src="{{ asset('assets/img/play.png') }}" alt="play">
                                                                <div class="course-title"> Demand of UI/UX Design</div>
                                                            </div>
                                                            <div class="course-collapse-body-item__right">
                                                                <div class="course-preview-lectures">
                                                                    Preview
                                                                </div>
                                                                <div class="course-duration">
                                                                    5:00
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="course-collapse-body-item">
                                                            <div class="course-collapse-body-item__left">
                                                                <img class="course-icon" src="{{ asset('assets/img/play.png') }}" alt="play">
                                                                <div class="course-title">Tools</div>
                                                            </div>
                                                            <div class="course-collapse-body-item__right">
                                                                <div class="course-preview-lectures">
                                                                    Preview
                                                                </div>
                                                                <div class="course-duration">
                                                                    5:00
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dm-collapse-item">
                                            <div class="border-bottom-0 mb-0 dm-collapse-item__header">
                                                <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-a-4" aria-expanded="false">
                                                    <div class="dm-collapse-title">

                                                        <i class="las la-plus"></i>

                                                        <h6>Colour Theory</h6>
                                                    </div>
                                                    <div class="course-collapse-right">
                                                        <div class="course-collapse-lecture">
                                                            03 Lectures
                                                        </div>
                                                        <div class="course-collapse-duration">
                                                            15:00
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-body-a-4" class="collapse  dm-collapse-item__body">
                                                <div class="collapse-body-text">
                                                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                        <div class="course-collapse-body-item">
                                                            <div class="course-collapse-body-item__left">
                                                                <img class="course-icon" src="{{ asset('assets/img/play.png') }}" alt="play">
                                                                <div class="course-title">Course Introduction</div>
                                                            </div>
                                                            <div class="course-collapse-body-item__right">
                                                                <div class="course-preview-lectures">
                                                                    Preview
                                                                </div>
                                                                <div class="course-duration">
                                                                    5:00
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="course-collapse-body-item">
                                                            <div class="course-collapse-body-item__left">
                                                                <img class="course-icon" src="{{ asset('assets/img/play.png') }}" alt="play">
                                                                <div class="course-title"> Demand of UI/UX Design</div>
                                                            </div>
                                                            <div class="course-collapse-body-item__right">
                                                                <div class="course-preview-lectures">
                                                                    Preview
                                                                </div>
                                                                <div class="course-duration">
                                                                    5:00
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="course-collapse-body-item">
                                                            <div class="course-collapse-body-item__left">
                                                                <img class="course-icon" src="{{ asset('assets/img/play.png') }}" alt="play">
                                                                <div class="course-title">Tools</div>
                                                            </div>
                                                            <div class="course-collapse-body-item__right">
                                                                <div class="course-preview-lectures">
                                                                    Preview
                                                                </div>
                                                                <div class="course-duration">
                                                                    5:00
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dm-collapse-item">
                                            <div class="border-bottom-0 mb-0 dm-collapse-item__header">
                                                <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-a-5" aria-expanded="false">
                                                    <div class="dm-collapse-title">

                                                        <i class="las la-plus"></i>

                                                        <h6>Typography</h6>
                                                    </div>
                                                    <div class="course-collapse-right">
                                                        <div class="course-collapse-lecture">
                                                            03 Lectures
                                                        </div>
                                                        <div class="course-collapse-duration">
                                                            15:00
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-body-a-5" class="collapse  dm-collapse-item__body">
                                                <div class="collapse-body-text">
                                                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                        <div class="course-collapse-body-item">
                                                            <div class="course-collapse-body-item__left">
                                                                <img class="course-icon" src="{{ asset('assets/img/play.png') }}" alt="play">
                                                                <div class="course-title">Course Introduction</div>
                                                            </div>
                                                            <div class="course-collapse-body-item__right">
                                                                <div class="course-preview-lectures">
                                                                    Preview
                                                                </div>
                                                                <div class="course-duration">
                                                                    5:00
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="course-collapse-body-item">
                                                            <div class="course-collapse-body-item__left">
                                                                <img class="course-icon" src="{{ asset('assets/img/play.png') }}" alt="play">
                                                                <div class="course-title"> Demand of UI/UX Design</div>
                                                            </div>
                                                            <div class="course-collapse-body-item__right">
                                                                <div class="course-preview-lectures">
                                                                    Preview
                                                                </div>
                                                                <div class="course-duration">
                                                                    5:00
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="course-collapse-body-item">
                                                            <div class="course-collapse-body-item__left">
                                                                <img class="course-icon" src="{{ asset('assets/img/play.png') }}" alt="play">
                                                                <div class="course-title">Tools</div>
                                                            </div>
                                                            <div class="course-collapse-body-item__right">
                                                                <div class="course-preview-lectures">
                                                                    Preview
                                                                </div>
                                                                <div class="course-duration">
                                                                    5:00
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dm-collapse-item">
                                            <div class="border-bottom-0 mb-0 dm-collapse-item__header">
                                                <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-a-6" aria-expanded="false">
                                                    <div class="dm-collapse-title">

                                                        <i class="las la-plus"></i>

                                                        <h6>Live Project 01</h6>
                                                    </div>
                                                    <div class="course-collapse-right">
                                                        <div class="course-collapse-lecture">
                                                            03 Lectures
                                                        </div>
                                                        <div class="course-collapse-duration">
                                                            15:00
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-body-a-6" class="collapse  dm-collapse-item__body">
                                                <div class="collapse-body-text">
                                                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                        <div class="course-collapse-body-item">
                                                            <div class="course-collapse-body-item__left">
                                                                <img class="course-icon" src="{{ asset('assets/img/play.png') }}" alt="play">
                                                                <div class="course-title">Course Introduction</div>
                                                            </div>
                                                            <div class="course-collapse-body-item__right">
                                                                <div class="course-preview-lectures">
                                                                    Preview
                                                                </div>
                                                                <div class="course-duration">
                                                                    5:00
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="course-collapse-body-item">
                                                            <div class="course-collapse-body-item__left">
                                                                <img class="course-icon" src="{{ asset('assets/img/play.png') }}" alt="play">
                                                                <div class="course-title"> Demand of UI/UX Design</div>
                                                            </div>
                                                            <div class="course-collapse-body-item__right">
                                                                <div class="course-preview-lectures">
                                                                    Preview
                                                                </div>
                                                                <div class="course-duration">
                                                                    5:00
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="course-collapse-body-item">
                                                            <div class="course-collapse-body-item__left">
                                                                <img class="course-icon" src="{{ asset('assets/img/play.png') }}" alt="play">
                                                                <div class="course-title">Tools</div>
                                                            </div>
                                                            <div class="course-collapse-body-item__right">
                                                                <div class="course-preview-lectures">
                                                                    Preview
                                                                </div>
                                                                <div class="course-duration">
                                                                    5:00
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dm-collapse-item">
                                            <div class="border-bottom-0 mb-0 dm-collapse-item__header">
                                                <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-a-7" aria-expanded="false">
                                                    <div class="dm-collapse-title">

                                                        <i class="las la-plus"></i>

                                                        <h6>Live Project 02</h6>
                                                    </div>
                                                    <div class="course-collapse-right">
                                                        <div class="course-collapse-lecture">
                                                            03 Lectures
                                                        </div>
                                                        <div class="course-collapse-duration">
                                                            15:00
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-body-a-7" class="collapse  dm-collapse-item__body">
                                                <div class="collapse-body-text">
                                                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                        <div class="course-collapse-body-item">
                                                            <div class="course-collapse-body-item__left">
                                                                <img class="course-icon" src="{{ asset('assets/img/play.png') }}" alt="play">
                                                                <div class="course-title">Course Introduction</div>
                                                            </div>
                                                            <div class="course-collapse-body-item__right">
                                                                <div class="course-preview-lectures">
                                                                    Preview
                                                                </div>
                                                                <div class="course-duration">
                                                                    5:00
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="course-collapse-body-item">
                                                            <div class="course-collapse-body-item__left">
                                                                <img class="course-icon" src="{{ asset('assets/img/play.png') }}" alt="play">
                                                                <div class="course-title"> Demand of UI/UX Design</div>
                                                            </div>
                                                            <div class="course-collapse-body-item__right">
                                                                <div class="course-preview-lectures">
                                                                    Preview
                                                                </div>
                                                                <div class="course-duration">
                                                                    5:00
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="course-collapse-body-item">
                                                            <div class="course-collapse-body-item__left">
                                                                <img class="course-icon" src="{{ asset('assets/img/play.png') }}" alt="play">
                                                                <div class="course-title">Tools</div>
                                                            </div>
                                                            <div class="course-collapse-body-item__right">
                                                                <div class="course-preview-lectures">
                                                                    Preview
                                                                </div>
                                                                <div class="course-duration">
                                                                    5:00
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dm-collapse-item">
                                            <div class="border-bottom-0 mb-0 dm-collapse-item__header">
                                                <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-a-8" aria-expanded="false">
                                                    <div class="dm-collapse-title">

                                                        <i class="las la-plus"></i>

                                                        <h6>Live Project 03</h6>
                                                    </div>
                                                    <div class="course-collapse-right">
                                                        <div class="course-collapse-lecture">
                                                            03 Lectures
                                                        </div>
                                                        <div class="course-collapse-duration">
                                                            15:00
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-body-a-8" class="collapse  dm-collapse-item__body">
                                                <div class="collapse-body-text">
                                                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                        <div class="course-collapse-body-item">
                                                            <div class="course-collapse-body-item__left">
                                                                <img class="course-icon" src="{{ asset('assets/img/play.png') }}" alt="play">
                                                                <div class="course-title">Course Introduction</div>
                                                            </div>
                                                            <div class="course-collapse-body-item__right">
                                                                <div class="course-preview-lectures">
                                                                    Preview
                                                                </div>
                                                                <div class="course-duration">
                                                                    5:00
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="course-collapse-body-item">
                                                            <div class="course-collapse-body-item__left">
                                                                <img class="course-icon" src="{{ asset('assets/img/play.png') }}" alt="play">
                                                                <div class="course-title"> Demand of UI/UX Design</div>
                                                            </div>
                                                            <div class="course-collapse-body-item__right">
                                                                <div class="course-preview-lectures">
                                                                    Preview
                                                                </div>
                                                                <div class="course-duration">
                                                                    5:00
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="course-collapse-body-item">
                                                            <div class="course-collapse-body-item__left">
                                                                <img class="course-icon" src="{{ asset('assets/img/play.png') }}" alt="play">
                                                                <div class="course-title">Tools</div>
                                                            </div>
                                                            <div class="course-collapse-body-item__right">
                                                                <div class="course-preview-lectures">
                                                                    Preview
                                                                </div>
                                                                <div class="course-duration">
                                                                    5:00
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dm-collapse-item">
                                            <div class="border-bottom-0 mb-0 dm-collapse-item__header">
                                                <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-a-9" aria-expanded="false">
                                                    <div class="dm-collapse-title">

                                                        <i class="las la-plus"></i>

                                                        <h6>Conclusion</h6>
                                                    </div>
                                                    <div class="course-collapse-right">
                                                        <div class="course-collapse-lecture">
                                                            03 Lectures
                                                        </div>
                                                        <div class="course-collapse-duration">
                                                            15:00
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-body-a-9" class="collapse  dm-collapse-item__body">
                                                <div class="collapse-body-text">
                                                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                        <div class="course-collapse-body-item">
                                                            <div class="course-collapse-body-item__left">
                                                                <img class="course-icon" src="{{ asset('assets/img/play.png') }}" alt="play">
                                                                <div class="course-title">Course Introduction</div>
                                                            </div>
                                                            <div class="course-collapse-body-item__right">
                                                                <div class="course-preview-lectures">
                                                                    Preview
                                                                </div>
                                                                <div class="course-duration">
                                                                    5:00
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="course-collapse-body-item">
                                                            <div class="course-collapse-body-item__left">
                                                                <img class="course-icon" src="{{ asset('assets/img/play.png') }}" alt="play">
                                                                <div class="course-title"> Demand of UI/UX Design</div>
                                                            </div>
                                                            <div class="course-collapse-body-item__right">
                                                                <div class="course-preview-lectures">
                                                                    Preview
                                                                </div>
                                                                <div class="course-duration">
                                                                    5:00
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="course-collapse-body-item">
                                                            <div class="course-collapse-body-item__left">
                                                                <img class="course-icon" src="{{ asset('assets/img/play.png') }}" alt="play">
                                                                <div class="course-title">Tools</div>
                                                            </div>
                                                            <div class="course-collapse-body-item__right">
                                                                <div class="course-preview-lectures">
                                                                    Preview
                                                                </div>
                                                                <div class="course-duration">
                                                                    5:00
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                </div>
                            </div>
                            <h5>FAQ</h5>
                            <div class="course-details-collapse">
                                <div class="course-collapse course-collapse__icon-right-fixed course-accordion accordion" id="accordionExample2">


                                    <div class="border-0 dm-collapse dm-accordion">

                                        <div class="dm-collapse-item">
                                            <div class="border-bottom-0 mb-0 dm-collapse-item__header active">
                                                <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-f-1" aria-expanded="true">
                                                    <div class="dm-collapse-title">
                                                        <h6>How can I Apply for this Course?</h6>
                                                    </div>
                                                    <div class="course-collapse-right">

                                                        <i class="las la-plus"></i>

                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-body-f-1" class="collapse show dm-collapse-item__body show">
                                                <div class="collapse-body-text">
                                                    <div class="course-collapse-body-item">
                                                        <p>User interface design or user interface engineering is the design of user interfaces for machines and software, such as computers, home appliances, mobile devices, and other electronic devices, with the
                                                            User interface design or user interface engineering is the design of user interfaces for machines and software, such as computers, home appliances, mobile devices, and other electronic devices, with the </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dm-collapse-item">
                                            <div class="border-bottom-0 mb-0 dm-collapse-item__header">
                                                <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-f-2" aria-expanded="false">
                                                    <div class="dm-collapse-title">
                                                        <h6>What is UI/UX Design?</h6>
                                                    </div>
                                                    <div class="course-collapse-right">

                                                        <i class="las la-plus"></i>

                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-body-f-2" class="collapse  dm-collapse-item__body">
                                                <div class="collapse-body-text">
                                                    <div class="course-collapse-body-item">
                                                        <p>User interface design or user interface engineering is the design of user interfaces for machines and software, such as computers, home appliances, mobile devices, and other electronic devices, with the
                                                            User interface design or user interface engineering is the design of user interfaces for machines and software, such as computers, home appliances, mobile devices, and other electronic devices, with the </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dm-collapse-item">
                                            <div class="border-bottom-0 mb-0 dm-collapse-item__header">
                                                <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-f-3" aria-expanded="false">
                                                    <div class="dm-collapse-title">
                                                        <h6>How to use SCSS variables to build custom color</h6>
                                                    </div>
                                                    <div class="course-collapse-right">

                                                        <i class="las la-plus"></i>

                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-body-f-3" class="collapse  dm-collapse-item__body">
                                                <div class="collapse-body-text">
                                                    <div class="course-collapse-body-item">
                                                        <p>User interface design or user interface engineering is the design of user interfaces for machines and software, such as computers, home appliances, mobile devices, and other electronic devices, with the
                                                            User interface design or user interface engineering is the design of user interfaces for machines and software, such as computers, home appliances, mobile devices, and other electronic devices, with the </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dm-collapse-item">
                                            <div class="border-bottom-0 mb-0 dm-collapse-item__header">
                                                <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-f-4" aria-expanded="false">
                                                    <div class="dm-collapse-title">
                                                        <h6>How long does it take to download updates?</h6>
                                                    </div>
                                                    <div class="course-collapse-right">

                                                        <i class="las la-plus"></i>

                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-body-f-4" class="collapse  dm-collapse-item__body">
                                                <div class="collapse-body-text">
                                                    <div class="course-collapse-body-item">
                                                        <p>User interface design or user interface engineering is the design of user interfaces for machines and software, such as computers, home appliances, mobile devices, and other electronic devices, with the
                                                            User interface design or user interface engineering is the design of user interfaces for machines and software, such as computers, home appliances, mobile devices, and other electronic devices, with the </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dm-collapse-item">
                                            <div class="border-bottom-0 mb-0 dm-collapse-item__header">
                                                <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-f-5" aria-expanded="false">
                                                    <div class="dm-collapse-title">
                                                        <h6>What is the flex layout?</h6>
                                                    </div>
                                                    <div class="course-collapse-right">

                                                        <i class="las la-plus"></i>

                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-body-f-5" class="collapse  dm-collapse-item__body">
                                                <div class="collapse-body-text">
                                                    <div class="course-collapse-body-item">
                                                        <p>User interface design or user interface engineering is the design of user interfaces for machines and software, such as computers, home appliances, mobile devices, and other electronic devices, with the
                                                            User interface design or user interface engineering is the design of user interfaces for machines and software, such as computers, home appliances, mobile devices, and other electronic devices, with the </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dm-collapse-item">
                                            <div class="border-bottom-0 mb-0 dm-collapse-item__header">
                                                <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-f-6" aria-expanded="false">
                                                    <div class="dm-collapse-title">
                                                        <h6>How long does it take to download updates?</h6>
                                                    </div>
                                                    <div class="course-collapse-right">

                                                        <i class="las la-plus"></i>

                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-body-f-6" class="collapse  dm-collapse-item__body">
                                                <div class="collapse-body-text">
                                                    <div class="course-collapse-body-item">
                                                        <p>User interface design or user interface engineering is the design of user interfaces for machines and software, such as computers, home appliances, mobile devices, and other electronic devices, with the
                                                            User interface design or user interface engineering is the design of user interfaces for machines and software, such as computers, home appliances, mobile devices, and other electronic devices, with the </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dm-collapse-item">
                                            <div class="border-bottom-0 mb-0 dm-collapse-item__header">
                                                <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-f-7" aria-expanded="false">
                                                    <div class="dm-collapse-title">
                                                        <h6>Where to buy this UI dashboard?</h6>
                                                    </div>
                                                    <div class="course-collapse-right">

                                                        <i class="las la-plus"></i>

                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-body-f-7" class="collapse  dm-collapse-item__body">
                                                <div class="collapse-body-text">
                                                    <div class="course-collapse-body-item">
                                                        <p>User interface design or user interface engineering is the design of user interfaces for machines and software, such as computers, home appliances, mobile devices, and other electronic devices, with the
                                                            User interface design or user interface engineering is the design of user interfaces for machines and software, such as computers, home appliances, mobile devices, and other electronic devices, with the </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dm-collapse-item">
                                            <div class="border-bottom-0 mb-0 dm-collapse-item__header">
                                                <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-f-8" aria-expanded="false">
                                                    <div class="dm-collapse-title">
                                                        <h6>How long does it take to download updates?</h6>
                                                    </div>
                                                    <div class="course-collapse-right">

                                                        <i class="las la-plus"></i>

                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-body-f-8" class="collapse  dm-collapse-item__body">
                                                <div class="collapse-body-text">
                                                    <div class="course-collapse-body-item">
                                                        <p>User interface design or user interface engineering is the design of user interfaces for machines and software, such as computers, home appliances, mobile devices, and other electronic devices, with the
                                                            User interface design or user interface engineering is the design of user interfaces for machines and software, such as computers, home appliances, mobile devices, and other electronic devices, with the </p>
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
                <div class="col-lg-6 mt-lg-0 mt-30">
                    <div class="cvg">
                        <div class="cvg__item cvg-overlay">
                            <img src="{{ asset('assets/img/profile_bg_2.png') }}" alt="gallery">
                            <div class="cvg__item-content">
                                <a class="cvg__iconWrapper popup-youtube" href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                    <img class="svg" src="{{ asset('assets/img/svg/youtube.svg') }}" alt="img">
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center flex-wrap mt-20">
                            <div class="cvg__icon-area">
                                <div class="svg-icon order-bg-opacity-primary">
                                    <img class="svg" src="{{ asset('assets/img/svg/book-alt.svg') }}" alt="booked">
                                </div>
                                <span>35 Lectures</span>
                            </div>
                            <div class="cvg__icon-area">
                                <div class="svg-icon order-bg-opacity-secondary">
                                    <img class="svg" src="{{ asset('assets/img/svg/clock2.svg') }}" alt="clock">
                                </div>
                                <span>35 Lectures</span>
                            </div>
                            <div class="cvg__icon-area">
                                <div class="svg-icon order-bg-opacity-success">
                                    <img class="svg" src="{{ asset('assets/img/svg/award.svg') }}" alt="award">
                                </div>
                                <span>35 Lectures</span>
                            </div>
                            <div class="cvg__icon-area">
                                <div class="svg-icon order-bg-opacity-warning">
                                    <img class="svg" src="{{ asset('assets/img/svg/sync.svg') }}" alt="sync">
                                </div>
                                <span>35 Lectures</span>
                            </div>
                        </div>
                        <div class="cvg__contents">
                            <h1>$250</h1>
                            <button class="btn btn-primary">
                                Start This Course
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection