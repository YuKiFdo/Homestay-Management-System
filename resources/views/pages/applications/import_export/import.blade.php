@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="social-dash-wrap">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ie-import') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ie-import') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                    <div class="dm-upload">
                        <div class="dm-upload-avatar media-import">
                            <img class="svg" src="{{ asset('assets/img/svg/upload.svg') }}" alt="upload">
                            <p class="color-dark fs-20">Drop File or <a href="#">Browse</a></p>
                        </div>
                        <div class="avatar-up">
                            <input type="file" name="upload-avatar-input" class="upload-avatar-input">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection