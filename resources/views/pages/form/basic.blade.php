@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.form-basic') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.form-basic') }}</li>
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
                        <div class="basic-form-wrapper">
                            <form action="#">
                                <div class="form-basic">
                                    <div class="form-group mb-25">
                                        <label>Username or Email Address</label>
                                        <input class="form-control form-control-lg" type="text" name="username" placeholder="name@example.com">
                                    </div>
                                    <div class="form-group mb-25">
                                        <label>Password</label>
                                        <div class="position-relative">
                                            <input id="password-field" type="password" class="form-control form-control-lg" name="password" value="secret">
                                            <span toggle="#password-field" class="uil uil-eye-slash text-lighten fs-15 field-icon toggle-password2"></span>
                                        </div>
                                        <div class="form-inline-action d-flex justify-content-between align-items-center">
                                            <div class="checkbox-theme-default custom-checkbox ">
                                                <input class="checkbox" type="checkbox" id="check-1">
                                                <label for="check-1">
                                                    <span class="checkbox-text">
                                                        Keep me logged in
                                                    </span>
                                                </label>
                                            </div>
                                            <a href="#" class="forgot-pass">Forgot password?</a>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn btn-lg btn-primary btn-submit">Log In</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection