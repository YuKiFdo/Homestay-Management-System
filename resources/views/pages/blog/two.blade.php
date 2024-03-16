@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="blog-page2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.blog-style-two') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>{{ trans('menu.dashboard-menu-title') }}</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.blog-style-two') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
            <div class="col-xxl-3 col-lg-4 col-md-6 mb-25">

                <div class="blog-card blog-card--2">
                    <div class="blog-card__thumbnail">
                        <a href="#">
                            <img src="{{ asset('assets/img/blog2.png') }}" alt="">
                        </a>
                    </div>
                    <div class="blog-card__details pt-1 pb-25 px-25">
                        <div class="blog-card__content">
                            <div class="blog-card__header-top d-flex justify-content-between">
                                <div class="category">Web Development</div>
                                <div class="date">01 July 2020</div>
                            </div>
                            <h4 class="blog-card__title">
                                <a href="#" class="entry-title" rel="bookmark">How to Use Apples Products</a>
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
            <div class="col-xxl-3 col-lg-4 col-md-6 mb-25">

                <div class="blog-card blog-card--2">
                    <div class="blog-card__thumbnail">
                        <a href="#">
                            <img src="{{ asset('assets/img/blog3.png') }}" alt="">
                        </a>
                    </div>
                    <div class="blog-card__details pt-1 pb-25 px-25">
                        <div class="blog-card__content">
                            <div class="blog-card__header-top d-flex justify-content-between">
                                <div class="category">Web Development</div>
                                <div class="date">01 July 2020</div>
                            </div>
                            <h4 class="blog-card__title">
                                <a href="#" class="entry-title" rel="bookmark">How to Protect Global Weather</a>
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
            <div class="col-xxl-3 col-lg-4 col-md-6 mb-25">

                <div class="blog-card blog-card--2">
                    <div class="blog-card__thumbnail">
                        <a href="#">
                            <img src="{{ asset('assets/img/blog4.png') }}" alt="">
                        </a>
                    </div>
                    <div class="blog-card__details pt-1 pb-25 px-25">
                        <div class="blog-card__content">
                            <div class="blog-card__header-top d-flex justify-content-between">
                                <div class="category">Web Development</div>
                                <div class="date">01 July 2020</div>
                            </div>
                            <h4 class="blog-card__title">
                                <a href="#" class="entry-title" rel="bookmark">Important of Entertainments</a>
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
            <div class="col-xxl-3 col-lg-4 col-md-6 mb-25">

                <div class="blog-card blog-card--2">
                    <div class="blog-card__thumbnail">
                        <a href="#">
                            <img src="{{ asset('assets/img/blog5.png') }}" alt="">
                        </a>
                    </div>
                    <div class="blog-card__details pt-1 pb-25 px-25">
                        <div class="blog-card__content">
                            <div class="blog-card__header-top d-flex justify-content-between">
                                <div class="category">Web Development</div>
                                <div class="date">01 July 2020</div>
                            </div>
                            <h4 class="blog-card__title">
                                <a href="#" class="entry-title" rel="bookmark">How Climate Effect on Weather</a>
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
            <div class="col-xxl-3 col-lg-4 col-md-6 mb-25">

                <div class="blog-card blog-card--2">
                    <div class="blog-card__thumbnail">
                        <a href="#">
                            <img src="{{ asset('assets/img/blog6.png') }}" alt="">
                        </a>
                    </div>
                    <div class="blog-card__details pt-1 pb-25 px-25">
                        <div class="blog-card__content">
                            <div class="blog-card__header-top d-flex justify-content-between">
                                <div class="category">Web Development</div>
                                <div class="date">01 July 2020</div>
                            </div>
                            <h4 class="blog-card__title">
                                <a href="#" class="entry-title" rel="bookmark">How to improve your reading skill</a>
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
            <div class="col-xxl-3 col-lg-4 col-md-6 mb-25">

                <div class="blog-card blog-card--2">
                    <div class="blog-card__thumbnail">
                        <a href="#">
                            <img src="{{ asset('assets/img/blog7.png') }}" alt="">
                        </a>
                    </div>
                    <div class="blog-card__details pt-1 pb-25 px-25">
                        <div class="blog-card__content">
                            <div class="blog-card__header-top d-flex justify-content-between">
                                <div class="category">Web Development</div>
                                <div class="date">01 July 2020</div>
                            </div>
                            <h4 class="blog-card__title">
                                <a href="#" class="entry-title" rel="bookmark">How to Use Apples Products</a>
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
            <div class="col-xxl-3 col-lg-4 col-md-6 mb-25">

                <div class="blog-card blog-card--2">
                    <div class="blog-card__thumbnail">
                        <a href="#">
                            <img src="{{ asset('assets/img/blog8.png') }}" alt="">
                        </a>
                    </div>
                    <div class="blog-card__details pt-1 pb-25 px-25">
                        <div class="blog-card__content">
                            <div class="blog-card__header-top d-flex justify-content-between">
                                <div class="category">Web Development</div>
                                <div class="date">01 July 2020</div>
                            </div>
                            <h4 class="blog-card__title">
                                <a href="#" class="entry-title" rel="bookmark">Winter Session Life guide line</a>
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
            <div class="col-xxl-3 col-lg-4 col-md-6 mb-25">

                <div class="blog-card blog-card--2">
                    <div class="blog-card__thumbnail">
                        <a href="#">
                            <img src="{{ asset('assets/img/blog9.png') }}" alt="">
                        </a>
                    </div>
                    <div class="blog-card__details pt-1 pb-25 px-25">
                        <div class="blog-card__content">
                            <div class="blog-card__header-top d-flex justify-content-between">
                                <div class="category">Web Development</div>
                                <div class="date">01 July 2020</div>
                            </div>
                            <h4 class="blog-card__title">
                                <a href="#" class="entry-title" rel="bookmark">Important of Team work</a>
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
            <div class="col-xxl-3 col-lg-4 col-md-6 mb-25">

                <div class="blog-card blog-card--2">
                    <div class="blog-card__thumbnail">
                        <a href="#">
                            <img src="{{ asset('assets/img/blog10.png') }}" alt="">
                        </a>
                    </div>
                    <div class="blog-card__details pt-1 pb-25 px-25">
                        <div class="blog-card__content">
                            <div class="blog-card__header-top d-flex justify-content-between">
                                <div class="category">Web Development</div>
                                <div class="date">01 July 2020</div>
                            </div>
                            <h4 class="blog-card__title">
                                <a href="#" class="entry-title" rel="bookmark">How to get a Good Lawyer</a>
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
            <div class="col-xxl-3 col-lg-4 col-md-6 mb-25">

                <div class="blog-card blog-card--2">
                    <div class="blog-card__thumbnail">
                        <a href="#">
                            <img src="{{ asset('assets/img/blog11.png') }}" alt="">
                        </a>
                    </div>
                    <div class="blog-card__details pt-1 pb-25 px-25">
                        <div class="blog-card__content">
                            <div class="blog-card__header-top d-flex justify-content-between">
                                <div class="category">Web Development</div>
                                <div class="date">01 July 2020</div>
                            </div>
                            <h4 class="blog-card__title">
                                <a href="#" class="entry-title" rel="bookmark">How Climate Effect on Weather</a>
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
            <div class="col-xxl-3 col-lg-4 col-md-6 mb-25">

                <div class="blog-card blog-card--2">
                    <div class="blog-card__thumbnail">
                        <a href="#">
                            <img src="{{ asset('assets/img/blog2.png') }}" alt="">
                        </a>
                    </div>
                    <div class="blog-card__details pt-1 pb-25 px-25">
                        <div class="blog-card__content">
                            <div class="blog-card__header-top d-flex justify-content-between">
                                <div class="category">Web Development</div>
                                <div class="date">01 July 2020</div>
                            </div>
                            <h4 class="blog-card__title">
                                <a href="#" class="entry-title" rel="bookmark">How Climate Effect on Weather</a>
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
            <div class="col-xxl-3 col-lg-4 col-md-6 mb-25">

                <div class="blog-card blog-card--2">
                    <div class="blog-card__thumbnail">
                        <a href="#">
                            <img src="{{ asset('assets/img/blog5.png') }}" alt="">
                        </a>
                    </div>
                    <div class="blog-card__details pt-1 pb-25 px-25">
                        <div class="blog-card__content">
                            <div class="blog-card__header-top d-flex justify-content-between">
                                <div class="category">Web Development</div>
                                <div class="date">01 July 2020</div>
                            </div>
                            <h4 class="blog-card__title">
                                <a href="#" class="entry-title" rel="bookmark">How Climate Effect on Weather</a>
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
            <div class="col-12">
                <div class="d-flex justify-content-end mt-1 mb-50">

                    <nav class="dm-page ">
                        <ul class="dm-pagination d-flex">
                            <li class="dm-pagination__item">
                                <a href="#" class="dm-pagination__link pagination-control"><span class="la la-angle-left"></span></a>
                                <a href="#" class="dm-pagination__link"><span class="page-number">1</span></a>
                                <a href="#" class="dm-pagination__link active"><span class="page-number">2</span></a>
                                <a href="#" class="dm-pagination__link"><span class="page-number">3</span></a>
                                <a href="#" class="dm-pagination__link pagination-control"><span class="page-number">...</span></a>
                                <a href="#" class="dm-pagination__link"><span class="page-number">12</span></a>
                                <a href="#" class="dm-pagination__link pagination-control"><span class="la la-angle-right"></span></a>
                                <a href="#" class="dm-pagination__option">
                                </a>
                            </li>
                            <li class="dm-pagination__item">
                                <div class="paging-option">
                                    <select name="page-number" class="page-selection">
                                        <option value="20">20/page</option>
                                        <option value="40">40/page</option>
                                        <option value="60">60/page</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </nav>


                </div>
            </div>
        </div>
        <!-- ends: .row -->
    </div>
</div>
@endsection