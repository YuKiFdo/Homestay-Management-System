@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="demo4 crm">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('page_title.dashboard') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>{{ trans('page_title.dashboard') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('page_title.demo_four') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 mb-25">
            @include('components.dashboard.demo_four.congrats')
            </div>
            <div class="col-xxl-4 col-lg-6 mb-25">
            @include('components.dashboard.demo_four.performance_overview')   
            </div>
            <div class="col-xxl-4 mb-25">
             @include('components.dashboard.demo_four.overview_cards') 
            </div>                          
            <div class="col-xl-6 mb-25">
                <div class="card border-0 px-25 pb-25">
                    @include('components.dashboard.demo_four.task_list')  
                </div>
            </div>
            <div class="col-xl-6 mb-25">
                @include('components.dashboard.demo_four.marketing')                
            </div>
            <div class="col-xxl-8">
                <div class="row">
                    <div class="col-md-6 mb-25">
                        @include('components.dashboard.demo_four.featured_profile')                
                    </div>
                    <div class="col-md-6 mb-25">
                        @include('components.dashboard.demo_four.team_members')                
                    </div>
                    <div class="col-12 mb-25">
                    @include('components.dashboard.demo_four.social_media')   
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 mb-25">
                @include('components.dashboard.demo_four.chat')                
            </div>
            
        </div>
    </div>
</div>
@endsection