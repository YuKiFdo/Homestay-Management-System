@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-input') }}</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-input') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Basic</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-0">
                            <input type="text" class="form-control form-control-lg" placeholder="Username">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Three sizes of Input</h6>
                    </div>
                    <div class="card-body">
                        <div class="input-list-wrap">
                            <div class="input-list d-flex flex-wrap">
                                <div class="input-list__single">
                                    <div class="form-group mb-0">
                                        <div class="input-container icon-left position-relative">
                                            <span class="input-icon icon-left"><img
                                                    src="{{ asset('assets/img/svg/user.svg') }}" alt="user"
                                                    class="svg"></span>
                                            <input type="text" class="form-control form-control-lg"
                                                placeholder="Large Size">
                                        </div>
                                    </div>
                                </div>
                                <div class="input-list__single">
                                    <div class="form-group mb-0">
                                        <div class="input-container icon-left position-relative">
                                            <span class="input-icon icon-left"><img
                                                    src="{{ asset('assets/img/svg/user.svg') }}" alt="user"
                                                    class="svg"></span>
                                            <input type="text" class="form-control form-control-default"
                                                placeholder="Default Size">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-list d-flex flex-wrap">
                                <div class="input-list__single">
                                    <div class="form-group mb-0">
                                        <div class="input-container icon-left position-relative">
                                            <span class="input-icon icon-left"><img
                                                    src="{{ asset('assets/img/svg/user.svg') }}" alt="user"
                                                    class="svg"></span>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Small Size">
                                        </div>
                                    </div>
                                </div>
                                <div class="input-list__single">

                                    <div class="form-group mb-0">
                                        <div class="position-relative">
                                            <div toggle="#password-field"
                                                class="uil uil-eye-slash text-lighten fs-15 field-icon toggle-password2">
                                            </div>
                                            <input id="password-field" type="password"
                                                class="form-control form-control-lg" placeholder="Large Password">
                                        </div>
                                    </div>

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
