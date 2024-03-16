@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-avatar') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>{{ trans('menu.ui-menu-title') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-avatar') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Basic</h6>
                            </div>
                            <div class="card-body">
                                <div class="dm-avatar-list d-flex align-items-center">
                                    <span class="avatar avatar-light avatar-lg avatar-circle  ">
                                        <img src="{{ asset('assets/img/svg/user.svg') }}" alt="user" class="svg avatar-icon">
                                    </span>
                                    <span class="avatar avatar-light avatar-md avatar-circle  ">
                                        <img src="{{ asset('assets/img/svg/user.svg') }}" alt="user" class="svg avatar-icon">
                                    </span>
                                    <span class="avatar avatar-light avatar-sm avatar-circle  ">
                                        <img src="{{ asset('assets/img/svg/user.svg') }}" alt="user" class="svg avatar-icon">
                                    </span>
                                    <span class="avatar avatar-light avatar-xs avatar-circle  ">
                                        <img src="{{ asset('assets/img/svg/user.svg') }}" alt="user" class="svg avatar-icon">
                                    </span>
                                </div>
                                <div class="dm-avatar-list d-flex align-items-center">
                                    <span class="avatar avatar-light avatar-lg avatar-square  ">
                                        <img src="{{ asset('assets/img/svg/user.svg') }}" alt="user" class="svg avatar-icon">
                                    </span>
                                    <span class="avatar avatar-light avatar-md avatar-square  ">
                                        <img src="{{ asset('assets/img/svg/user.svg') }}" alt="user" class="svg avatar-icon">
                                    </span>
                                    <span class="avatar avatar-light avatar-sm avatar-square  ">
                                        <img src="{{ asset('assets/img/svg/user.svg') }}" alt="user" class="svg avatar-icon">
                                    </span>
                                    <span class="avatar avatar-light avatar-xs avatar-square  ">
                                        <img src="{{ asset('assets/img/svg/user.svg') }}" alt="user" class="svg avatar-icon">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Type</h6>
                            </div>
                            <div class="card-body">
                                <div class="dm-avatar-list d-flex align-items-center">
                                    <span class="avatar avatar-light avatar-sm avatar-circle  ">
                                        <img src="{{ asset('assets/img/svg/user.svg') }}" alt="user" class="svg avatar-icon">
                                    </span>
                                    <span class="avatar avatar-light avatar-sm avatar-circle  ">
                                        <span class="avatar-letter">U</span>
                                    </span>
                                    <span class="avatar avatar-light avatar-sm avatar-circle  ">
                                        <span class="avatar-text">user</span>
                                    </span>
                                    <span class="avatar avatar-light avatar-sm avatar-circle  ">
                                        <img class="avatar-img" src="{{ asset('assets/img/author/1.jpg') }}" alt="">
                                    </span>
                                    <span class="avatar avatar-warning avatar-sm avatar-circle   avatar-transparent ">
                                        <span class="avatar-letter">U</span>
                                    </span>
                                    <span class="avatar avatar-success avatar-sm avatar-circle  ">
                                        <img src="{{ asset('assets/img/svg/user.svg') }}" alt="user" class="svg avatar-icon">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>With Badge</h6>
                            </div>
                            <div class="card-body">
                                <div class="dm-avatar-list d-flex align-items-center">
                                    <span class="avatar avatar-light avatar-sm avatar-square  ">
                                        <img src="{{ asset('assets/img/svg/user.svg') }}" alt="user" class="svg avatar-icon">
                                        <span class="avatar-badge-wrap">
                                            <span class="badge badge-danger badge- badge-sm">2</span>
                                        </span>
                                    </span>
                                    <span class="avatar avatar-light avatar-sm avatar-square  ">
                                        <img src="{{ asset('assets/img/svg/user.svg') }}" alt="user" class="svg avatar-icon">
                                        <span class="badge-dot-wrap">
                                            <span class="badge-dot dot-danger"></span>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection