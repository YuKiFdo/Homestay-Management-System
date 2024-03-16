@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-step') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-step') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>Basic</h6>
                    </div>
                    <div class="card-body">
                        <div class="dm-steps-wrap">
                            <div class="dm-steps">
                                <ul class="nav">
                                    <li class="dm-steps__item finished">
                                        <div class="dm-steps__line"></div>
                                        <div class="dm-steps__content">
                                            <span class="dm-steps__icon"><i class="la la-check"></i></span>
                                            <span class="dm-steps__text">Finished</span>
                                        </div>
                                    </li>
                                    <li class="dm-steps__item active">
                                        <div class="dm-steps__line"></div>
                                        <div class="dm-steps__content">
                                            <span class="dm-steps__icon"><span class="dm-steps__count">2</span></span>
                                            <span class="dm-steps__text">In Progress</span>
                                        </div>
                                    </li>
                                    <li class="dm-steps__item">
                                        <div class="dm-steps__content">
                                            <span class="dm-steps__icon"><span class="dm-steps__count">3</span></span>
                                            <span class="dm-steps__text">Waiting</span>
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