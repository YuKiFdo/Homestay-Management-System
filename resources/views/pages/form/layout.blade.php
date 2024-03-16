@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.form-layout') }}</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.form-layout') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-horizontal card-default card-md mb-4">
                <div class="card-header">
                    <h6>Horizontal Form</h6>
                </div>
                <div class="card-body py-md-30">
                    <div class="horizontal-form">
                        <form action="#">
                            <div class="form-group row mb-25">
                                <div class="col-sm-3 d-flex aling-items-center">
                                    <label for="inputName" class=" col-form-label color-dark fs-14 fw-500 align-center">Name</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" id="inputName" placeholder="Duran Clayton">
                                </div>
                            </div>
                            <div class="form-group row mb-25">
                                <div class="col-sm-3 d-flex aling-items-center">
                                    <label for="inputPassword" class="col-form-label  color-dark fs-14 fw-500 align-center">Email
                                        Address</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control  ih-medium ip-gray radius-xs b-light px-15" id="inputEmail" placeholder="username@email.com">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-sm-3">
                                    <label for="inputPassword" class=" col-form-label  color-dark fs-14 fw-500 align-center">Password</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control  ih-medium ip-gray radius-xs b-light px-15" id="inputPassword">
                                    <div class="layout-button mt-25">
                                        <button type="button" class="btn btn-default btn-squared border-normal bg-normal px-20 ">cancel</button>
                                        <button type="button" class="btn btn-primary btn-default btn-squared px-30">save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card card-horizontal card-default card-md mb-4">
                <div class="card-header">
                    <h6>Horizontal Form With Icons</h6>
                </div>
                <div class="card-body py-md-30">
                    <div class="horizontal-form">
                        <form action="#">
                            <div class="form-group row mb-25">
                                <div class="col-sm-3 d-flex aling-items-center">
                                    <label for="inputNameIcon" class=" col-form-label color-dark fs-14 fw-500 align-center">Name</label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="with-icon">
                                        <span class="la-user lar color-gray"></span>
                                        <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light" id="inputNameIcon" placeholder="Duran Clayton">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-25">
                                <div class="col-sm-3 d-flex aling-items-center">
                                    <label for="inputEmailIcon" class=" col-form-label color-dark fs-14 fw-500 align-center">Email
                                        Address</label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="with-icon">
                                        <span class="lar la-envelope color-gray"></span>
                                        <input type="email" class="form-control  ih-medium ip-gray radius-xs b-light" id="inputEmailIcon" placeholder="username@email.com">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-sm-3">
                                    <label for="inputPasswordIcon" class=" col-form-label color-dark fs-14 fw-500 align-center">Password</label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="with-icon">
                                        <span class="las la-lock color-gray"></span>
                                        <input type="password" class="form-control  ih-medium ip-gray radius-xs b-light" id="inputPasswordIcon">
                                    </div>
                                    <div class="layout-button mt-25">
                                        <button type="button" class="btn btn-default btn-squared border-normal bg-normal px-20 ">cancel</button>
                                        <button type="button" class="btn btn-primary btn-default btn-squared px-30">save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card card-Vertical card-default card-md mb-4">
                <div class="card-header">
                    <h6>Vertical Form</h6>
                </div>
                <div class="card-body pb-md-30">
                    <div class="Vertical-form">
                        <form action="#">
                            <div class="form-group">
                                <label for="formGroupExampleInput" class="color-dark fs-14 fw-500 align-center">Name</label>
                                <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" id="formGroupExampleInput" placeholder="Duran Clayton">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2" class="color-dark fs-14 fw-500 align-center">Email Address</label>
                                <input type="email" class="form-control ih-medium ip-gray radius-xs b-light px-15" id="formGroupExampleInput2" placeholder="username@email.com">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput3" class="color-dark fs-14 fw-500 align-center">Password</label>
                                <input type="password" class="form-control ih-medium ip-gray radius-xs b-light px-15" id="formGroupExampleInput3">
                            </div>
                            <div class="layout-button mt-25">
                                <button type="button" class="btn btn-default btn-squared border-normal bg-normal px-20 ">cancel</button>
                                <button type="button" class="btn btn-primary btn-default btn-squared px-30">save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card card-Vertical card-default card-md mb-4">
                <div class="card-header">
                    <h6>Vertical Form With Icon</h6>
                </div>
                <div class="card-body pb-md-30">
                    <div class="Vertical-form">
                        <form action="#">
                            <div class="form-group">
                                <label for="formGroupExampleInput4" class=" color-dark fs-14 fw-500 align-center">Name</label>
                                <div class="with-icon">
                                    <span class="la-user lar"></span>
                                    <input type="text" class="form-control ih-medium ip-gray radius-xs b-light" id="formGroupExampleInput4" placeholder="Duran Clayton">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput5" class=" color-dark fs-14 fw-500 align-center">Email Address</label>
                                <div class="with-icon">
                                    <span class="lar la-envelope"></span>
                                    <input type="email" class="form-control ih-medium ip-gray radius-xs b-light" id="formGroupExampleInput5" placeholder="username@email.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput6" class=" color-dark fs-14 fw-500 align-center">Password</label>
                                <div class="with-icon">
                                    <span class="las la-lock"></span>
                                    <input type="password" class="form-control ih-medium ip-gray radius-xs b-light" id="formGroupExampleInput6">
                                </div>
                            </div>
                            <div class="layout-button mt-25">
                                <button type="button" class="btn btn-default btn-squared border-normal bg-normal px-20 ">cancel</button>
                                <button type="button" class="btn btn-primary btn-default btn-squared px-30">save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card card-Vertical card-default card-md mb-4">
                <div class="card-header">
                    <h6>Multiple Column </h6>
                </div>
                <div class="card-body py-md-30">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-25">
                                <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="First Name">
                            </div>
                            <div class="col-md-6 mb-25">
                                <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Last Name">
                            </div>
                            <div class="col-md-6 mb-25">
                                <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="City">
                            </div>
                            <div class="col-md-6 mb-25">
                                <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Country">
                            </div>
                            <div class="col-md-6 mb-25">
                                <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Company">
                            </div>
                            <div class="col-md-6 mb-25">
                                <input type="email" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Email">
                            </div>
                            <div class="col-md-6">
                                <div class="layout-button mt-0">
                                    <button type="button" class="btn btn-default btn-squared border-normal bg-normal px-20 ">cancel</button>
                                    <button type="button" class="btn btn-primary btn-default btn-squared px-30">save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection