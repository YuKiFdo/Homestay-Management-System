@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="demo5 mt-30 mb-25">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-12 mb-25">
              <div class="card banner-feature--18 d-flex">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-xl-6">
                      <div class="card-body px-25">
                        <h1 class="banner-feature__heading color-white">Welcome To Demo Dashboard</h1>
                        <p class="banner-feature__para color-white">There are many variations of passages of
                          Lorem
                          Ipsum available, but the majority have suffered
                          alteration in some form
                        </p>
                        <div class="d-flex justify-content-sm-start justify-content-center">
                          <button class="banner-feature__btn btn btn-primary color-white btn-md px-20 radius-xs fs-15" type="button">Learn More</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="banner-feature__shape px-md-25 px-25 py-sm-0 pt-15 pb-30 d-flex justify-content-sm-end justify-content-center">
                        <img src="{{ asset('assets/img/demo5-banner.png') }}" alt="img" class="svg">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-8 mb-25">
                @include('components.dashboard.demo_five.user_overview')
            </div>
            <div class="col-xxl-4 col-lg-6 order-xxl-0 order-1 mb-25">
                <div class="card card-md border-0 mb-0 date-picker__calendar-height h-100">
                    <div class="card-body px-10 d-flex align-items-center">
                        <div class="date-picker date-picker--demo5 w-100">
                            <div class="date-picker__calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 mb-25">
                @include('components.dashboard.demo_five.member_progress')                
            </div>
            <div class="col-xxl-6 mb-25">
                @include('components.dashboard.demo_five.upcoming_events')                
            </div>
            <div class="col-xxl-4 mb-25">
                <div class="card knowledge-base border-0 py-sm-30 px-sm-25">
                    <img src="{{ asset('assets/img/book-open.png') }}" alt="book">
                    <h1>Knowledge Base</h1>
                    <p>There are many variations of passages of Lorem Ipsum available
                        but the majority have suffered alteration</p>
                    <button type="button" class="btn btn-primary">
                        Browse Article
                    </button>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 mb-25">
                @include('components.dashboard.demo_five.timeline')                
            </div>
            <div class="col-xxl-4 col-lg-6 mb-25">
                @include('components.dashboard.demo_five.inbox')                
            </div>
            <div class="col-xxl-4 col-lg-6 mb-25">
                <div class="blog-card">
                    <div class="blog-card__thumbnail">
                        <a href="#">
                            <img src="{{ asset('assets/img/bg2.png') }}" alt="">
                        </a>
                    </div>
                    <div class="blog-card__details">
                        <div class="blog-card__content">
                            <div class="blog-card__title--top">15 March 2021</div>
                            <h4 class="blog-card__title">
                                <a href="#" class="entry-title" rel="bookmark">The Ultimate Glossary of Terms About</a>
                            </h4>
                            <p>There are many variations of passages of majority have suffered alteration in some form</p>
                        </div>
                        <div class="blog-card__meta">
                            <div class="blog-card__meta-profile">
                                <img src="{{ asset('assets/img/alex-suprun.png') }}" alt="">
                                <span>Machel Bold</span>
                            </div>
                            <div class="blog-card__meta-count">
                                <ul>
                                    <li>
                                        <div class="blog-card__meta-reaction">
                                            <img src="{{ asset('assets/img/svg/heart.svg') }}" alt="heart" class="svg">
                                            <span class="blog-card__meta-reaction-like">15 K</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="blog-card__meta-doc-wrapper">
                                            <img src="{{ asset('assets/img/svg/file-text.svg') }}" alt="file-text" class="svg">
                                            <span class="blog-card__meta-doc">75</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 mb-25">
                <div class="blog-card">
                    <div class="blog-card__thumbnail">
                        <a href="#">
                            <img src="{{ asset('assets/img/bg3.png') }}" alt="">
                        </a>
                    </div>
                    <div class="blog-card__details">
                        <div class="blog-card__content">
                            <div class="blog-card__title--top">15 March 2021</div>
                            <h4 class="blog-card__title">
                                <a href="#" class="entry-title" rel="bookmark">Multiple Dashboard Design Idea</a>
                            </h4>
                            <p>There are many variations of passages of majority have suffered alteration in some form</p>
                        </div>
                        <div class="blog-card__meta">
                            <div class="blog-card__meta-profile">
                                <img src="{{ asset('assets/img/alex-suprun.png') }}" alt="">
                                <span>Machel Bold</span>
                            </div>
                            <div class="blog-card__meta-count">
                                <ul>
                                    <li>
                                        <div class="blog-card__meta-reaction">
                                            <img src="{{ asset('assets/img/svg/heart.svg') }}" alt="heart" class="svg">
                                            <span class="blog-card__meta-reaction-like">15 K</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="blog-card__meta-doc-wrapper">
                                            <img src="{{ asset('assets/img/svg/file-text.svg') }}" alt="file-text" class="svg">
                                            <span class="blog-card__meta-doc">75</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 mb-25">
                <div class="blog-card">
                    <div class="blog-card__thumbnail">
                        <a href="#">
                            <img src="{{ asset('assets/img/bg4.png') }}" alt="">
                        </a>
                    </div>
                    <div class="blog-card__details">
                        <div class="blog-card__content">
                            <div class="blog-card__title--top">15 March 2021</div>
                            <h4 class="blog-card__title">
                                <a href="#" class="entry-title" rel="bookmark">How to Create a Niche Based Dashboard</a>
                            </h4>
                            <p>There are many variations of passages of majority have suffered alteration in some form</p>
                        </div>
                        <div class="blog-card__meta">
                            <div class="blog-card__meta-profile">
                                <img src="{{ asset('assets/img/alex-suprun.png') }}" alt="">
                                <span>Machel Bold</span>
                            </div>
                            <div class="blog-card__meta-count">
                                <ul>
                                    <li>
                                        <div class="blog-card__meta-reaction">
                                            <img src="{{ asset('assets/img/svg/heart.svg') }}" alt="heart" class="svg">
                                            <span class="blog-card__meta-reaction-like">15 K</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="blog-card__meta-doc-wrapper">
                                            <img src="{{ asset('assets/img/svg/file-text.svg') }}" alt="file-text" class="svg">
                                            <span class="blog-card__meta-doc">75</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection