@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="course-ticket mt-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.course-menu-title') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>{{ trans('menu.dashboard-menu-title') }}</a></li>
                                <li class="breadcrumb-item"><a href="#">Page</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.course-menu-title') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
        <!-- ends: .row -->
        <div class="row mt-2">
            <div class="col-xxl-3 col-xl-4 col-sm-6 col-12 mb-25">

                <div class="course-card">
                    <div class="course-card__img-area">
                        <img class="big-img" src="{{ asset('assets/img/it1.png') }}" alt="gallery">
                    </div>
                    <div class="course-card__body">
                        <div class="course-card__title">
                            <h4>UI/UX Design Masters Couse</h4>
                        </div>
                        <div class="course-card__about">
                            <img src="{{ asset('assets/img/ellipse11.png') }}" alt="ellipse11">
                            <span>David Warner</span>
                        </div>
                    </div>
                    <div class="course-card__footer">
                        <div class="course-card__footer_left">
                            <div class="total-money color-success">
                                $250
                            </div>
                        </div>
                        <div class="course-card__footer_right">
                            <div class="total-lextures no-btn">
                                <img src="{{ asset('assets/img/svg/book.svg') }}" alt="book" class="svg">
                                35 Lectures
                            </div>
                            <div class="total-hours no-btn">
                                <img class="svg" src="{{ asset('assets/img/svg/clock.svg') }}" alt="clock">
                                15 hrs
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xxl-3 col-xl-4 col-sm-6 col-12 mb-25">

                <div class="course-card">
                    <div class="course-card__img-area">
                        <img class="big-img" src="{{ asset('assets/img/it2.png') }}" alt="gallery">
                    </div>
                    <div class="course-card__body">
                        <div class="course-card__title">
                            <h4>React Development Course</h4>
                        </div>
                        <div class="course-card__about">
                            <img src="{{ asset('assets/img/ellipse11.png') }}" alt="ellipse11">
                            <span>David Warner</span>
                        </div>
                    </div>
                    <div class="course-card__footer">
                        <div class="course-card__footer_left">
                            <div class="total-money color-success">
                                $250
                            </div>
                        </div>
                        <div class="course-card__footer_right">
                            <div class="total-lextures no-btn">
                                <img src="{{ asset('assets/img/svg/book.svg') }}" alt="book" class="svg">
                                35 Lectures
                            </div>
                            <div class="total-hours no-btn">
                                <img class="svg" src="{{ asset('assets/img/svg/clock.svg') }}" alt="clock">
                                15 hrs
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xxl-3 col-xl-4 col-sm-6 col-12 mb-25">

                <div class="course-card">
                    <div class="course-card__img-area">
                        <img class="big-img" src="{{ asset('assets/img/it3.png') }}" alt="gallery">
                    </div>
                    <div class="course-card__body">
                        <div class="course-card__title">
                            <h4>Digital Marketing Course</h4>
                        </div>
                        <div class="course-card__about">
                            <img src="{{ asset('assets/img/ellipse11.png') }}" alt="ellipse11">
                            <span>David Warner</span>
                        </div>
                    </div>
                    <div class="course-card__footer">
                        <div class="course-card__footer_left">
                            <div class="total-money color-success">
                                $250
                            </div>
                        </div>
                        <div class="course-card__footer_right">
                            <div class="total-lextures no-btn">
                                <img src="{{ asset('assets/img/svg/book.svg') }}" alt="book" class="svg">
                                35 Lectures
                            </div>
                            <div class="total-hours no-btn">
                                <img class="svg" src="{{ asset('assets/img/svg/clock.svg') }}" alt="clock">
                                15 hrs
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xxl-3 col-xl-4 col-sm-6 col-12 mb-25">

                <div class="course-card">
                    <div class="course-card__img-area">
                        <img class="big-img" src="{{ asset('assets/img/it4.png') }}" alt="gallery">
                    </div>
                    <div class="course-card__body">
                        <div class="course-card__title">
                            <h4>Video Editing Basic Course</h4>
                        </div>
                        <div class="course-card__about">
                            <img src="{{ asset('assets/img/ellipse11.png') }}" alt="ellipse11">
                            <span>David Warner</span>
                        </div>
                    </div>
                    <div class="course-card__footer">
                        <div class="course-card__footer_left">
                            <div class="total-money color-success">
                                $250
                            </div>
                        </div>
                        <div class="course-card__footer_right">
                            <div class="total-lextures no-btn">
                                <img src="{{ asset('assets/img/svg/book.svg') }}" alt="book" class="svg">
                                35 Lectures
                            </div>
                            <div class="total-hours no-btn">
                                <img class="svg" src="{{ asset('assets/img/svg/clock.svg') }}" alt="clock">
                                15 hrs
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xxl-3 col-xl-4 col-sm-6 col-12 mb-25">

                <div class="course-card">
                    <div class="course-card__img-area">
                        <img class="big-img" src="{{ asset('assets/img/it5.png') }}" alt="gallery">
                    </div>
                    <div class="course-card__body">
                        <div class="course-card__title">
                            <h4>Basic Graphic Design Course</h4>
                        </div>
                        <div class="course-card__about">
                            <img src="{{ asset('assets/img/ellipse11.png') }}" alt="ellipse11">
                            <span>David Warner</span>
                        </div>
                    </div>
                    <div class="course-card__footer">
                        <div class="course-card__footer_left">
                            <div class="total-money color-success">
                                $250
                            </div>
                        </div>
                        <div class="course-card__footer_right">
                            <div class="total-lextures no-btn">
                                <img src="{{ asset('assets/img/svg/book.svg') }}" alt="book" class="svg">
                                35 Lectures
                            </div>
                            <div class="total-hours no-btn">
                                <img class="svg" src="{{ asset('assets/img/svg/clock.svg') }}" alt="clock">
                                15 hrs
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xxl-3 col-xl-4 col-sm-6 col-12 mb-25">

                <div class="course-card">
                    <div class="course-card__img-area">
                        <img class="big-img" src="{{ asset('assets/img/it6.png') }}" alt="gallery">
                    </div>
                    <div class="course-card__body">
                        <div class="course-card__title">
                            <h4>UI/UX Design Masters Couse</h4>
                        </div>
                        <div class="course-card__about">
                            <img src="{{ asset('assets/img/ellipse11.png') }}" alt="ellipse11">
                            <span>David Warner</span>
                        </div>
                    </div>
                    <div class="course-card__footer">
                        <div class="course-card__footer_left">
                            <div class="total-money color-success">
                                $250
                            </div>
                        </div>
                        <div class="course-card__footer_right">
                            <div class="total-lextures no-btn">
                                <img src="{{ asset('assets/img/svg/book.svg') }}" alt="book" class="svg">
                                35 Lectures
                            </div>
                            <div class="total-hours no-btn">
                                <img class="svg" src="{{ asset('assets/img/svg/clock.svg') }}" alt="clock">
                                15 hrs
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xxl-3 col-xl-4 col-sm-6 col-12 mb-25">

                <div class="course-card">
                    <div class="course-card__img-area">
                        <img class="big-img" src="{{ asset('assets/img/it7.png') }}" alt="gallery">
                    </div>
                    <div class="course-card__body">
                        <div class="course-card__title">
                            <h4>Advance User Experience Design </h4>
                        </div>
                        <div class="course-card__about">
                            <img src="{{ asset('assets/img/ellipse11.png') }}" alt="ellipse11">
                            <span>David Warner</span>
                        </div>
                    </div>
                    <div class="course-card__footer">
                        <div class="course-card__footer_left">
                            <div class="total-money color-success">
                                $250
                            </div>
                        </div>
                        <div class="course-card__footer_right">
                            <div class="total-lextures no-btn">
                                <img src="{{ asset('assets/img/svg/book.svg') }}" alt="book" class="svg">
                                35 Lectures
                            </div>
                            <div class="total-hours no-btn">
                                <img class="svg" src="{{ asset('assets/img/svg/clock.svg') }}" alt="clock">
                                15 hrs
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xxl-3 col-xl-4 col-sm-6 col-12 mb-25">

                <div class="course-card">
                    <div class="course-card__img-area">
                        <img class="big-img" src="{{ asset('assets/img/it1.png') }}" alt="gallery">
                    </div>
                    <div class="course-card__body">
                        <div class="course-card__title">
                            <h4>Video Editing Advance Course</h4>
                        </div>
                        <div class="course-card__about">
                            <img src="{{ asset('assets/img/ellipse11.png') }}" alt="ellipse11">
                            <span>David Warner</span>
                        </div>
                    </div>
                    <div class="course-card__footer">
                        <div class="course-card__footer_left">
                            <div class="total-money color-success">
                                $250
                            </div>
                        </div>
                        <div class="course-card__footer_right">
                            <div class="total-lextures no-btn">
                                <img src="{{ asset('assets/img/svg/book.svg') }}" alt="book" class="svg">
                                35 Lectures
                            </div>
                            <div class="total-hours no-btn">
                                <img class="svg" src="{{ asset('assets/img/svg/clock.svg') }}" alt="clock">
                                15 hrs
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xxl-3 col-xl-4 col-sm-6 col-12 mb-25">

                <div class="course-card">
                    <div class="course-card__img-area">
                        <img class="big-img" src="{{ asset('assets/img/it2.png') }}" alt="gallery">
                    </div>
                    <div class="course-card__body">
                        <div class="course-card__title">
                            <h4>UI/UX Design Masters Course</h4>
                        </div>
                        <div class="course-card__about">
                            <img src="{{ asset('assets/img/ellipse11.png') }}" alt="ellipse11">
                            <span>David Warner</span>
                        </div>
                    </div>
                    <div class="course-card__footer">
                        <div class="course-card__footer_left">
                            <div class="total-money color-success">
                                $250
                            </div>
                        </div>
                        <div class="course-card__footer_right">
                            <div class="total-lextures no-btn">
                                <img src="{{ asset('assets/img/svg/book.svg') }}" alt="book" class="svg">
                                35 Lectures
                            </div>
                            <div class="total-hours no-btn">
                                <img class="svg" src="{{ asset('assets/img/svg/clock.svg') }}" alt="clock">
                                15 hrs
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xxl-3 col-xl-4 col-sm-6 col-12 mb-25">

                <div class="course-card">
                    <div class="course-card__img-area">
                        <img class="big-img" src="{{ asset('assets/img/it3.png') }}" alt="gallery">
                    </div>
                    <div class="course-card__body">
                        <div class="course-card__title">
                            <h4>Visual Dashboard Design </h4>
                        </div>
                        <div class="course-card__about">
                            <img src="{{ asset('assets/img/ellipse11.png') }}" alt="ellipse11">
                            <span>David Warner</span>
                        </div>
                    </div>
                    <div class="course-card__footer">
                        <div class="course-card__footer_left">
                            <div class="total-money color-success">
                                $250
                            </div>
                        </div>
                        <div class="course-card__footer_right">
                            <div class="total-lextures no-btn">
                                <img src="{{ asset('assets/img/svg/book.svg') }}" alt="book" class="svg">
                                35 Lectures
                            </div>
                            <div class="total-hours no-btn">
                                <img class="svg" src="{{ asset('assets/img/svg/clock.svg') }}" alt="clock">
                                15 hrs
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xxl-3 col-xl-4 col-sm-6 col-12 mb-25">

                <div class="course-card">
                    <div class="course-card__img-area">
                        <img class="big-img" src="{{ asset('assets/img/it4.png') }}" alt="gallery">
                    </div>
                    <div class="course-card__body">
                        <div class="course-card__title">
                            <h4>Video Editing Basic Course</h4>
                        </div>
                        <div class="course-card__about">
                            <img src="{{ asset('assets/img/ellipse11.png') }}" alt="ellipse11">
                            <span>David Warner</span>
                        </div>
                    </div>
                    <div class="course-card__footer">
                        <div class="course-card__footer_left">
                            <div class="total-money color-success">
                                $250
                            </div>
                        </div>
                        <div class="course-card__footer_right">
                            <div class="total-lextures no-btn">
                                <img src="{{ asset('assets/img/svg/book.svg') }}" alt="book" class="svg">
                                35 Lectures
                            </div>
                            <div class="total-hours no-btn">
                                <img class="svg" src="{{ asset('assets/img/svg/clock.svg') }}" alt="clock">
                                15 hrs
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xxl-3 col-xl-4 col-sm-6 col-12 mb-25">

                <div class="course-card">
                    <div class="course-card__img-area">
                        <img class="big-img" src="{{ asset('assets/img/it5.png') }}" alt="gallery">
                    </div>
                    <div class="course-card__body">
                        <div class="course-card__title">
                            <h4>UI/UX Design Masters Couse</h4>
                        </div>
                        <div class="course-card__about">
                            <img src="{{ asset('assets/img/ellipse11.png') }}" alt="ellipse11">
                            <span>David Warner</span>
                        </div>
                    </div>
                    <div class="course-card__footer">
                        <div class="course-card__footer_left">
                            <div class="total-money color-success">
                                $250
                            </div>
                        </div>
                        <div class="course-card__footer_right">
                            <div class="total-lextures no-btn">
                                <img src="{{ asset('assets/img/svg/book.svg') }}" alt="book" class="svg">
                                35 Lectures
                            </div>
                            <div class="total-hours no-btn">
                                <img class="svg" src="{{ asset('assets/img/svg/clock.svg') }}" alt="clock">
                                15 hrs
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- ends: .row -->
        <div class="row">
            <div class="col-12">
                <div class="user-pagination">
                    <div class="d-flex justify-content-md-end justify-content-end mt-1 mb-50">

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
                    <!-- End of Pagination-->
                </div>
            </div>
        </div>
        <!-- ends: .row -->
    </div>
</div>
@endsection