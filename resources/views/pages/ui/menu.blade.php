@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-menu') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-menu') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Top Navigation</h6>
                    </div>
                    <div class="card-body">
                        <a href="" class="menu-mob-trigger d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                        <div class="menu-wrapper">
                            <ul class="dm-menu menu-top menu-horizontal ">
                                <li class="dm-menu__item has-submenu">
                                    <a class="dm-menu__link active" href="#">
                                        <span class="dm-menu__icon"><img src="{{ asset('assets/img/svg/mail.svg') }}" alt="mail" class="svg"></span>
                                        <span class="dm-menu__text">Navigation One</span>
                                    </a>
                                    <ul class="dm-submenu">
                                        <li class="dm-menu__item">
                                            <span class="submenu-title">Item One</span>
                                            <ul class="dm-submenu-item">
                                                <li><a href="#"> Option 1</a></li>
                                                <li><a href="#"> Option 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="dm-menu__item has-submenu">
                                            <a href="#" class="dm-menu__link">Item One</a>
                                            <ul class="dm-submenu">
                                                <li><a class="dm-menu__link" href="#"> Option 1</a></li>
                                                <li><a class="dm-menu__link" href="#"> Option 2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dm-menu__item menu-item-disabled">
                                    <a class="dm-menu__link" href="#">
                                        <span class="dm-menu__icon"><img src="{{ asset('assets/img/svg/mail.svg') }}" alt="mail" class="svg"></span>
                                        <span class="dm-menu__text">Navigation Two</span>
                                    </a>
                                </li>
                                <li class="dm-menu__item has-submenu">
                                    <a class="dm-menu__link" href="#">
                                        <span class="dm-menu__icon"><img src="{{ asset('assets/img/svg/settings.svg') }}" alt="settings" class="svg"></span>
                                        <span class="dm-menu__text">Navigation Three-Submenu</span>
                                    </a>
                                    <ul class="dm-submenu">
                                        <li>
                                            <span class="submenu-title">Item One</span>
                                            <ul class="dm-submenu-item">
                                                <li><a href="#"> Option 1</a></li>
                                                <li><a href="#"> Option 2</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class="submenu-title">Item Two</span>
                                            <ul class="dm-submenu-item">
                                                <li><a href="#"> Option 1</a></li>
                                                <li><a href="#"> Option 2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dm-menu__item">
                                    <a class="dm-menu__link" href="#">
                                        <span class="dm-menu__icon"><img src="{{ asset('assets/img/svg/mail.svg') }}" alt="mail" class="svg"></span>
                                        <span class="dm-menu__text">Navigation Four Link</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Vertical Menu</h6>
                    </div>
                    <div class="card-body">
                        <div class="menu-wrapper">
                            <ul class="dm-menu menu-top menu-vertical ">
                                <li class="dm-menu__item has-submenu">
                                    <a class="dm-menu__link active" href="#">
                                        <span class="dm-menu__icon"><img src="{{ asset('assets/img/svg/mail.svg') }}" alt="mail" class="svg"></span>
                                        <span class="dm-menu__text">Navigation One</span>
                                    </a>
                                    <ul class="dm-submenu">
                                        <li class="dm-menu__item">
                                            <span class="submenu-title">Item One</span>
                                            <ul class="dm-submenu-item">
                                                <li><a href="#"> Option 1</a></li>
                                                <li><a href="#"> Option 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="dm-menu__item has-submenu">
                                            <a href="#" class="dm-menu__link">Item One</a>
                                            <ul class="dm-submenu">
                                                <li><a class="dm-menu__link" href="#"> Option 1</a></li>
                                                <li><a class="dm-menu__link" href="#"> Option 2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dm-menu__item menu-item-disabled">
                                    <a class="dm-menu__link" href="#">
                                        <span class="dm-menu__icon"><img src="{{ asset('assets/img/svg/mail.svg') }}" alt="mail" class="svg"></span>
                                        <span class="dm-menu__text">Navigation Two</span>
                                    </a>
                                </li>
                                <li class="dm-menu__item has-submenu">
                                    <a class="dm-menu__link" href="#">
                                        <span class="dm-menu__icon"><img src="{{ asset('assets/img/svg/settings.svg') }}" alt="settings" class="svg"></span>
                                        <span class="dm-menu__text">Navigation Three-Submenu</span>
                                    </a>
                                    <ul class="dm-submenu">
                                        <li>
                                            <span class="submenu-title">Item One</span>
                                            <ul class="dm-submenu-item">
                                                <li><a href="#"> Option 1</a></li>
                                                <li><a href="#"> Option 2</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class="submenu-title">Item Two</span>
                                            <ul class="dm-submenu-item">
                                                <li><a href="#"> Option 1</a></li>
                                                <li><a href="#"> Option 2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dm-menu__item">
                                    <a class="dm-menu__link" href="#">
                                        <span class="dm-menu__icon"><img src="{{ asset('assets/img/svg/mail.svg') }}" alt="mail" class="svg"></span>
                                        <span class="dm-menu__text">Navigation Four Link</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Current Sub Menu</h6>
                    </div>
                    <div class="card-body">
                        <div class="menu-wrapper">
                            <ul class="dm-menu menu-top menu-vertical menu-collapsable">
                                <li class="dm-menu__item has-submenu">
                                    <a class="dm-menu__link active" href="#">
                                        <span class="dm-menu__icon"><img src="{{ asset('assets/img/svg/mail.svg') }}" alt="mail" class="svg"></span>
                                        <span class="dm-menu__text">Navigation One</span>
                                    </a>
                                    <ul class="dm-submenu">
                                        <li class="dm-menu__item">
                                            <span class="submenu-title">Item One</span>
                                            <ul class="dm-submenu-item">
                                                <li><a href="#"> Option 1</a></li>
                                                <li><a href="#"> Option 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="dm-menu__item has-submenu">
                                            <a href="#" class="dm-menu__link">Item One</a>
                                            <ul class="dm-submenu">
                                                <li><a class="dm-menu__link" href="#"> Option 1</a></li>
                                                <li><a class="dm-menu__link" href="#"> Option 2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dm-menu__item menu-item-disabled">
                                    <a class="dm-menu__link" href="#">
                                        <span class="dm-menu__icon"><img src="{{ asset('assets/img/svg/mail.svg') }}" alt="mail" class="svg"></span>
                                        <span class="dm-menu__text">Navigation Two</span>
                                    </a>
                                </li>
                                <li class="dm-menu__item has-submenu">
                                    <a class="dm-menu__link" href="#">
                                        <span class="dm-menu__icon"><img src="{{ asset('assets/img/svg/settings.svg') }}" alt="settings" class="svg"></span>
                                        <span class="dm-menu__text">Navigation Three-Submenu</span>
                                    </a>
                                    <ul class="dm-submenu">
                                        <li>
                                            <span class="submenu-title">Item One</span>
                                            <ul class="dm-submenu-item">
                                                <li><a href="#"> Option 1</a></li>
                                                <li><a href="#"> Option 2</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class="submenu-title">Item Two</span>
                                            <ul class="dm-submenu-item">
                                                <li><a href="#"> Option 1</a></li>
                                                <li><a href="#"> Option 2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dm-menu__item">
                                    <a class="dm-menu__link" href="#">
                                        <span class="dm-menu__icon"><img src="{{ asset('assets/img/svg/mail.svg') }}" alt="mail" class="svg"></span>
                                        <span class="dm-menu__text">Navigation Four Link</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mobile-nav-wrapper">
    <a href="#" class="nav-close">
        <i class="uil uil-times"></i></a>
</div>
@endsection