@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-radio') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-radio') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Basic</h6>
                    </div>
                    <div class="card-body">
                        <div class="radio-theme-default custom-radio ">
                            <input class="radio" type="radio" name="radio-default" value=0 id="radio-1">
                            <label for="radio-1">
                                <span class="radio-text">Radio</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Disabled</h6>
                    </div>
                    <div class="card-body">
                        <div class="radio-vertical-list">
                            <div class="radio-theme-default custom-radio disabled ">
                                <input class="radio" type="radio" name="radio-default" value=0 id="radio-2">
                                <label for="radio-2">
                                    <span class="radio-text">Disabled</span>
                                </label>
                            </div>
                            <div class="radio-theme-default custom-radio disabled ">
                                <input class="radio" type="radio" name="radio-default" value=0 id="radio-3" checked>
                                <label for="radio-3">
                                    <span class="radio-text">Disabled</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Vertical Radio</h6>
                    </div>
                    <div class="card-body">
                        <div class="radio-vertical-list">
                            <div class="radio-theme-default custom-radio ">
                                <input class="radio" type="radio" name="radio-vertical" value=0 id="radio-vl5">
                                <label for="radio-vl5">
                                    <span class="radio-text">A</span>
                                </label>
                            </div>
                            <div class="radio-theme-default custom-radio ">
                                <input class="radio" type="radio" name="radio-vertical" value=0 id="radio-vl6">
                                <label for="radio-vl6">
                                    <span class="radio-text">B</span>
                                </label>
                            </div>
                            <div class="radio-theme-default custom-radio ">
                                <input class="radio" type="radio" name="radio-vertical" value=0 id="radio-vl7">
                                <label for="radio-vl7">
                                    <span class="radio-text">C</span>
                                </label>
                            </div>
                            <div class="radio-theme-default custom-radio ">
                                <input class="radio" type="radio" name="radio-vertical" value=0 id="radio-vl8">
                                <label for="radio-vl8">
                                    <span class="radio-text">D</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Optional Radio</h6>
                    </div>
                    <div class="card-body">
                        <div class="radio-horizontal-list d-flex">
                            <div class="radio-theme-default custom-radio ">
                                <input class="radio" type="radio" name="radio-optional" value=0 id="radio-hl1">
                                <label for="radio-hl1">
                                    <span class="radio-text">Apple</span>
                                </label>
                            </div>
                            <div class="radio-theme-default custom-radio ">
                                <input class="radio" type="radio" name="radio-optional" value=0 id="radio-hl2">
                                <label for="radio-hl2">
                                    <span class="radio-text">Pear</span>
                                </label>
                            </div>
                            <div class="radio-theme-default custom-radio ">
                                <input class="radio" type="radio" name="radio-optional" value=0 id="radio-hl3">
                                <label for="radio-hl3">
                                    <span class="radio-text">Orange</span>
                                </label>
                            </div>
                        </div>
                        <div class="radio-horizontal-list d-flex">
                            <div class="radio-theme-default custom-radio ">
                                <input class="radio" type="radio" name="radio-optional" value=0 id="radio-hl4">
                                <label for="radio-hl4">
                                    <span class="radio-text">Apple</span>
                                </label>
                            </div>
                            <div class="radio-theme-default custom-radio ">
                                <input class="radio" type="radio" name="radio-optional" value=0 id="radio-hl5">
                                <label for="radio-hl5">
                                    <span class="radio-text">Pear</span>
                                </label>
                            </div>
                            <div class="radio-theme-default custom-radio ">
                                <input class="radio" type="radio" name="radio-optional" value=0 id="radio-hl6">
                                <label for="radio-hl6">
                                    <span class="radio-text">Orange</span>
                                </label>
                            </div>
                        </div>
                        <div class="radio-horizontal-list d-flex">
                            <div class="radio-theme-default custom-radio ">
                                <input class="radio" type="radio" name="radio-optional" value=0 id="radio-hl7">
                                <label for="radio-hl7">
                                    <span class="radio-text">Apple</span>
                                </label>
                            </div>
                            <div class="radio-theme-default custom-radio ">
                                <input class="radio" type="radio" name="radio-optional" value=0 id="radio-hl8">
                                <label for="radio-hl8">
                                    <span class="radio-text">Pear</span>
                                </label>
                            </div>
                            <div class="radio-theme-default custom-radio ">
                                <input class="radio" type="radio" name="radio-optional" value=0 id="radio-hl9">
                                <label for="radio-hl9">
                                    <span class="radio-text">Orange</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Horizontal Radio</h6>
                    </div>
                    <div class="card-body">
                        <div class="radio-horizontal-list d-flex">
                            <div class="radio-theme-default custom-radio ">
                                <input class="radio" type="radio" name="radio-horizontal" value=0 id="radio-vl1">
                                <label for="radio-vl1">
                                    <span class="radio-text">A</span>
                                </label>
                            </div>
                            <div class="radio-theme-default custom-radio ">
                                <input class="radio" type="radio" name="radio-horizontal" value=0 id="radio-vl2">
                                <label for="radio-vl2">
                                    <span class="radio-text">B</span>
                                </label>
                            </div>
                            <div class="radio-theme-default custom-radio ">
                                <input class="radio" type="radio" name="radio-horizontal" value=0 id="radio-vl3">
                                <label for="radio-vl3">
                                    <span class="radio-text">C</span>
                                </label>
                            </div>
                            <div class="radio-theme-default custom-radio ">
                                <input class="radio" type="radio" name="radio-horizontal" value=0 id="radio-vl4">
                                <label for="radio-vl4">
                                    <span class="radio-text">D</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection