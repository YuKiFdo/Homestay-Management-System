@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="job-details mt-md-20">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('page_title.job_detail') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>{{ trans('menu.dashboard-menu-title') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('page_title.job_detail') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
            <div class="col-lg-12">
                <div class="back-page">
                    <a href="jobSearch.html">

                        <img src="{{ asset('assets/img/svg/arrow-left.svg') }}" alt="arrow-left" class="svg">
                        go back</a>
                </div>
            </div>
            <div class="col-lg-8 mb-30">
                <div class="job-details-card">
                    <div class="job-details-card__top flex-wrap">
                        <div class="job-item__image">
                            <a href="#">
                                <img class="job-item__image-img img-fluid" src="{{ asset('assets/img/stats.png') }}" alt="digital-chair">
                            </a>
                            <div class="job-item__title">
                                <a href="jobDetails.html">
                                    <h3 class="card-title">WordPress Plugins Developer</h3>
                                </a>
                                <span>New York,USA</span>
                            </div>
                        </div>
                    </div>
                    <div class="job-details-card__middle">
                        <h4>Job Description</h4>
                        <p>There are have a many variations of passages of Lorem Ipsum available, but the randomised words which don't look even slightly believable. If you are going to sdsss embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making which don't
                            first true generator on the Internet.</p>
                        <h4>Requirements</h4>
                        <ul>
                            <li>At least 3+ years of working experience in PHP/WordPress.</li>
                            <li>Solid PHP knowledge and a good understanding of advanced PSP concepts eg. OOP, Namespace, Taits ,etc</li>
                            <li>HTMl/CSS</li>
                            <li>Intermediate to Advanced JavaScript knowledge.</li>
                            <li>Solid understanding of WordPress core features eg. action/hooks,restAPI,post type,taxonomies,post meta, database stuctures,etc.</li>
                            <li>Good understanding of PHP/WordPress coding standard </li>
                            <li>Must be able to write quality code following the coding standards and best practice.</li>
                            <li>Ability to work without supervision.</li>
                            <li>must be polite and should have good interpersonal communication skills.</li>
                            <li>Fast learner, self motivated , eager to learn new technologies.</li>
                        </ul>
                        <h4>Preferable Skills</h4>
                        <ul>
                            <li>Fluency in English.</li>
                            <li>Experience in other PHP framework.</li>
                            <li>Knowledge in Software design patterns.</li>
                            <li>Experience in Vue / React.</li>
                            <li>VPS/Server knowledge.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-30">
                <div class="job-details-widget">
                    <h4>Information</h4>
                    <div class="job-item__content d-inline-flex flex-column">
                        <div class="job-type">
                            <h6>Job Type:</h6>
                            <span>full time</span>
                        </div>
                        <div class="job-Industry">
                            <h6>Industry:</h6>
                            <span>Development</span>
                        </div>
                        <div class="job-salery">
                            <h6>Salary:</h6>
                            <span>$70-$150 per month</span>
                        </div>
                        <div class="job-location">
                            <h6>Location:</h6>
                            <span>$70-$150 per month</span>
                        </div>
                        <div class="job-deadline">
                            <h6>Deadline:</h6>
                            <span>31 may 2021</span>
                        </div>
                    </div>
                    <a href="job-apply.html" class="btn btn-primary w-100">Apply Now</a>
                </div>
            </div>
        </div>
        <!-- ends: .row -->
    </div>
</div>
@endsection