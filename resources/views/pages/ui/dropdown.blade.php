@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-dropdown') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>{{ trans('menu.ui-menu-title') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-dropdown') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header py-20">
                        <h6>Basic</h6>
                    </div>
                    <div class="card-body">
                        <div class="dropdown  dropdown-hover">
                            <a class="btn-link" href="">
                                Hover me
                                <img src="{{ asset('assets/img/svg/chevron-down.svg') }}" alt="chevron-down" class="svg">
                            </a>
                            <div class="dropdown-default">
                                <a class="dropdown-item" href="#">Item One</a>
                                <a class="dropdown-item" href="#">Item Two</a>
                                <a class="dropdown-item" href="#">Item Three</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-default card-md mb-4">
                    <div class="card-header py-20">
                        <h6>Other elements</h6>
                    </div>
                    <div class="card-body">
                        <div class="dropdown  dropdown-hover">
                            <a class="btn-link" href="">
                                Hover me
                                <img src="{{ asset('assets/img/svg/chevron-down.svg') }}" alt="chevron-down" class="svg">
                            </a>
                            <div class="dropdown-default">
                                <a class="dropdown-item" href="#">Item One</a>
                                <a class="dropdown-item" href="#">Item Two</a>
                                <a class="dropdown-item" href="#">Item Three</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-default card-md mb-4">
                    <div class="card-header py-20">
                        <h6>Click event</h6>
                    </div>
                    <div class="card-body">
                        <div class="dropdown dropdown-hover">
                            <a class="btn-link" href="">
                                Hover me, Click menu item
                                <img src="{{ asset('assets/img/svg/chevron-down.svg') }}" alt="chevron-down" class="svg">
                            </a>
                            <div class="dropdown-default dropdown-clickEvent">
                                <a class="dropdown-item" href="#">Item One</a>
                                <a class="dropdown-item" href="#">Item Two</a>
                                <a class="dropdown-item" href="#">Item Three</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header py-20">
                        <h6>Placement</h6>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-end">
                            <div class="col-12 mb-2">
                                <div class="dropdown-list">
                                    <div class="dropdown dropdown-btn dropdown-hover">
                                        <button class="btn btn-outline-lighten fs-14 fw-400">
                                            Bottom Left
                                        </button>
                                        <div class="dropdown-default dropdown-bottomLeft">
                                            <a class="dropdown-item" href="#">Item One</a>
                                            <a class="dropdown-item" href="#">Item Two</a>
                                            <a class="dropdown-item" href="#">Item Three</a>
                                        </div>
                                    </div>
                                    <div class="dropdown dropdown-btn dropdown-hover">
                                        <button class="btn btn-outline-lighten fs-14 fw-400">
                                            Bottom Right
                                        </button>
                                        <div class="dropdown-default dropdown-bottomRight">
                                            <a class="dropdown-item" href="#">Item One</a>
                                            <a class="dropdown-item" href="#">Item Two</a>
                                            <a class="dropdown-item" href="#">Item Three</a>
                                        </div>
                                    </div>
                                    <div class="dropdown dropdown-btn dropdown-hover">
                                        <button class="btn btn-outline-lighten fs-14 fw-400">
                                            Bottom Center
                                        </button>
                                        <div class="dropdown-default dropdown-bottomCenter">
                                            <a class="dropdown-item" href="#">Item One</a>
                                            <a class="dropdown-item" href="#">Item Two</a>
                                            <a class="dropdown-item" href="#">Item Three</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="dropdown-list">
                                    <div class="dropdown dropdown-btn dropdown-hover">
                                        <button class="btn btn-outline-lighten fs-14 fw-400">
                                            Top Left
                                        </button>
                                        <div class="dropdown-default dropdown-topLeft">
                                            <a class="dropdown-item" href="#">Item One</a>
                                            <a class="dropdown-item" href="#">Item Two</a>
                                            <a class="dropdown-item" href="#">Item Three</a>
                                        </div>
                                    </div>
                                    <div class="dropdown dropdown-btn dropdown-hover">
                                        <button class="btn btn-outline-lighten fs-14 fw-400">
                                            Top Center
                                        </button>
                                        <div class="dropdown-default dropdown-topCenter">
                                            <a class="dropdown-item" href="#">Item One</a>
                                            <a class="dropdown-item" href="#">Item Two</a>
                                            <a class="dropdown-item" href="#">Item Three</a>
                                        </div>
                                    </div>
                                    <div class="dropdown dropdown-btn dropdown-hover">
                                        <button class="btn btn-outline-lighten fs-14 fw-400">
                                            Top Right
                                        </button>
                                        <div class="dropdown-default dropdown-topRight">
                                            <a class="dropdown-item" href="#">Item One</a>
                                            <a class="dropdown-item" href="#">Item Two</a>
                                            <a class="dropdown-item" href="#">Item Three</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-default card-md mb-4">
                    <div class="card-header py-20">
                        <h6>Trigger mode</h6>
                    </div>
                    <div class="card-body">
                        <div class="dropdown  dropdown-click ">
                            <a class="btn-link" href="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Click me
                                <img src="{{ asset('assets/img/svg/chevron-down.svg') }}" alt="chevron-down" class="svg">
                            </a>
                            <div class="dropdown-default dropdown-menu">
                                <a class="dropdown-item" href="#">Item One</a>
                                <a class="dropdown-item" href="#">Item Two</a>
                                <a class="dropdown-item" href="#">Item Three</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-default card-md mb-4">
                    <div class="card-header py-20">
                        <h6>Button with dropdown menu</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="dropdown-list">
                                    <div class="dropdown dropdown-click">
                                        <div class="btn-group dropleft">
                                            <button class="btn btn-outline-lighten btn-sm">Dropdown</button>
                                            <button type="button" class="btn btn-outline-lighten btn-sm dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="svg" src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal">
                                            </button>
                                            <div class="dropdown-default dropdown-menu">
                                                <a class="dropdown-item" href="#">Item One</a>
                                                <a class="dropdown-item" href="#">Item Two</a>
                                                <a class="dropdown-item" href="#">Item Three</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown dropdown-click">
                                        <div class="btn-group dropleft">
                                            <button class="btn btn-outline-lighten btn-sm">Dropdown</button>
                                            <button type="button" class="btn btn-outline-lighten btn-sm dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="{{ asset('assets/img/svg/user.svg') }}" alt="user" class="svg">
                                            </button>
                                            <div class="dropdown-default dropdown-menu">
                                                <a class="dropdown-item" href="#">Item One</a>
                                                <a class="dropdown-item" href="#">Item Two</a>
                                                <a class="dropdown-item" href="#">Item Three</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown dropdown-click dropdown-disable">
                                        <div class="btn-group dropleft">
                                            <button class="btn btn-outline-lighten btn-sm">Dropdown</button>
                                            <button type="button" class="btn btn-outline-lighten btn-sm dropdown-toggle-split">
                                                <img class="svg" src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal">
                                            </button>
                                        </div>
                                    </div>
                                    <div class="dropdown dropdown-click">
                                        <div class="btn-group dropleft">
                                            <button class="btn btn-outline-lighten btn-sm">With Tooltip</button>
                                            <button type="button" class="btn btn-outline-lighten btn-sm dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="svg" src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal">
                                            </button>
                                            <div class="dropdown-default dropdown-menu">
                                                <a class="dropdown-item" href="#">Item One</a>
                                                <a class="dropdown-item" href="#">Item Two</a>
                                                <a class="dropdown-item" href="#">Item Three</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown dropdown-click">
                                        <div class="btn-group dropleft">
                                            <button class="btn btn-outline-lighten btn-sm">Button</button>
                                            <button type="button" class="btn btn-outline-lighten btn-sm dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="{{ asset('assets/img/svg/chevron-down.svg') }}" alt="chevron-down" class="svg">
                                            </button>
                                            <div class="dropdown-default dropdown-menu">
                                                <a class="dropdown-item" href="#">Item One</a>
                                                <a class="dropdown-item" href="#">Item Two</a>
                                                <a class="dropdown-item" href="#">Item Three</a>
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
</div>
<div class="dm-message"></div>
@endsection