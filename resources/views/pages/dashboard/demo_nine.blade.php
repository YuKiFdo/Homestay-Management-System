@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="demo4">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('page_title.dashboard') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>{{ trans('page_title.dashboard') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('page_title.demo_six') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            @include('components.dashboard.demo_nine.congrats')
            @include('components.dashboard.demo_nine.sales_overview')
            @include('components.dashboard.demo_nine.overview_cards')
            @include('components.dashboard.demo_nine.task_list')
            @include('components.dashboard.demo_nine.marketing')
            @include('components.dashboard.demo_nine.todo')
            @include('components.dashboard.demo_nine.team_members')
            @include('components.dashboard.demo_nine.featured_profile')
            @include('components.dashboard.demo_nine.chat')
            @include('components.dashboard.demo_nine.social_media')
            
                        
        </div>
    </div>
</div>
@endsection