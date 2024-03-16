@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-tag') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-tag') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>Basic</h6>
                    </div>
                    <div class="card-body">
                        <div class="dm-tag-wrap">
                            <div class="tag-box">
                                <span class="dm-tag tag-light ">Tag 1</span>
                                <span><a class="dm-tag tag-light" href="#">Tag 2</a></span>
                                <span class="dm-tag tag-light">Tag 3 <a href="#" class="tag-closable"><i class="la la-times"></i></a></span>
                                <span class="dm-tag tag-light">Prevent Default <a href="#" class="tag-closable"><i class="la la-times"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>Color Tag</h6>
                    </div>
                    <div class="card-body">
                        <div class="dm-tag-wrap mb-25">
                            <h6>Preset:</h6>
                            <div class="tag-box">
                                <span class="dm-tag tag-primary tag-transparented">Primary</span>
                                <span class="dm-tag tag-secondary tag-transparented">Secondary</span>
                                <span class="dm-tag tag-success tag-transparented">Success</span>
                                <span class="dm-tag tag-warning tag-transparented">Warning</span>
                                <span class="dm-tag tag-info tag-transparented">Info</span>
                                <span class="dm-tag tag-danger tag-transparented">Danger</span>
                            </div>
                        </div>
                        <div class="dm-tag-wrap">
                            <h6>Custom:</h6>
                            <div class="tag-box">
                                <span class="dm-tag tag-primary ">#f50</span>
                                <span class="dm-tag tag-secondary ">#2db7f5</span>
                                <span class="dm-tag tag-success ">#87d068</span>
                                <span class="dm-tag tag-warning ">#108ee9</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>Dynamic</h6>
                    </div>
                    <div class="card-body">
                        <div class="dm-tag-wrap">
                            <div class="tag-box">
                                <span class="dm-tag tag-light ">Tag 1</span>
                                <span><a class="dm-tag tag-light" href="#">Tag 2</a></span>
                                <span class="dm-tag tag-light">Tag 3 <a href="#" class="tag-closable"><i class="la la-times"></i></a></span>
                                <span class="dm-tag tag-light">Prevent Default <a href="#" class="tag-closable"><i class="la la-times"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection