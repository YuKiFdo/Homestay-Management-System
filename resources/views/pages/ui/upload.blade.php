@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-upload') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-upload') }}</li>
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
                            <div class="dm-upload">
                                <div class="dm-upload__button">
                                    <a href="javascript:void(0)" class="btn btn-lg btn-outline-lighten btn-upload" onclick="$('#upload-1').click()"> <img src="{{ asset('assets/img/svg/upload.svg') }}" alt="upload" class="svg"> Click to Upload</a>
                                    <input type="file" name="upload-1" class="upload-one" id="upload-1">
                                </div>
                                <div class="dm-upload__file">
                                    <ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>Avatar</h6>
                    </div>
                    <div class="card-body">
                        <div class="dm-tag-wrap">
                            <div class="dm-upload">
                                <div class="dm-upload-avatar">
                                    <img class="avatrSrc" src="{{ asset('assets/img/upload.png') }}" alt="Avatar Upload">
                                </div>
                                <div class="avatar-up">
                                    <input type="file" name="upload-avatar-input" class="upload-avatar-input">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>Complete Control</h6>
                    </div>
                    <div class="card-body">
                        <div class="dm-tag-wrap">
                            <div class="dm-upload">
                                <div class="dm-upload__button">
                                    <a href="javascript:void(0)" class="btn btn-lg btn-outline-lighten btn-upload" onclick="$('#upload-2').click()"> <img src="{{ asset('assets/img/svg/upload.svg') }}" alt="upload" class="svg"> Upload</a>
                                    <input type="file" name="upload-2" class="upload-one" id="upload-2">
                                </div>
                                <div class="dm-upload__file">
                                    <ul>
                                        <li>
                                            <a href="#" class="file-name"><i class="las la-paperclip"></i> <span class="name-text">xxx.png<span></span></span></a>
                                            <a href="#" class="btn-delete"><i class="la la-trash"></i></a>
                                        </li>

                                        <li>
                                            <a href="#" class="file-name"><i class="las la-paperclip"></i> <span class="name-text">yyy.jpg<span></span></span></a>
                                            <a href="#" class="btn-delete"><i class="la la-trash"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>Upload Default</h6>
                    </div>
                    <div class="card-body">
                        <div class="dm-tag-wrap">
                            <div class="dm-upload">
                                <div class="dm-upload__button">
                                    <a href="javascript:void(0)" class="btn btn-lg btn-outline-lighten btn-upload" onclick="$('#upload-3').click()"> <img src="{{ asset('assets/img/svg/upload.svg') }}" alt="upload" class="svg"> Upload</a>
                                    <input type="file" name="upload-3" class="upload-one" id="upload-3">
                                </div>
                                <div class="dm-upload__file">
                                    <ul>
                                        <li>
                                            <a href="#" class="file-name"><i class="las la-paperclip"></i> <span class="name-text">xxx.png<span></span></span></a>
                                            <a href="#" class="btn-delete"><i class="la la-trash"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="file-name"><i class="las la-paperclip"></i> <span class="name-text">yyy.jpg<span></span></span></a>
                                            <a href="#" class="btn-delete"><i class="la la-trash"></i></a>
                                        </li>
                                        <li class="danger">
                                            <a href="#" class="file-name"><i class="las la-paperclip"></i> <span class="name-text">zzz.jpg<span></span></span></a>
                                            <a href="#" class="btn-delete"><i class="la la-trash"></i></a>
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
</div>
@endsection