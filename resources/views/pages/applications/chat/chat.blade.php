@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">{{ trans('page_title.chat') }}</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ trans('page_title.chat') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="chat-area d-flex mb-40">
    <div class="mb-lg-0 mb-40 chat-sidebar">
        <div class="sidebar-group left-sidebar chat_sidebar">
            <div id="chat" class="left-sidebar-wrap bg-white radius-xl active">
                <div class="chat-wrapper py-25">
                    <div class="search-header">
                        <form action="/" class="d-flex align-items-center">
                            <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                            <input class="form-control me-sm-2 border-0 box-shadow-none" type="search" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                    <div class="search-tab">
                        <ul class="nav ap-tab-main border-bottom text-capitalize" id="ueberTab" role="tablist">
                            <li class="nav-item me-0">
                                <a class="nav-link active" id="first-tab" data-bs-target="#panel_b_first" data-secondary="#panel_a_first" data-bs-toggle="tab" href="#first" role="tab" aria-controls="first-tab" aria-selected="true">private
                                    chat</a>
                            </li>
                            <li class="nav-item me-0">
                                <a class="nav-link group-notification" id="second-tab" data-bs-target="#panel_b_second" data-secondary="#panel_a_second" data-bs-toggle="tab" href="#second" role="tab" aria-controls="second-tab" aria-selected="false">
                                    group chat
                                    <span class="total-message ms-1">
                                        <span class="badge badge-danger ">5</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item me-0">
                                <a class="nav-link" id="third-tab" data-bs-target="#panel_b_thrid" data-secondary="#panel_a_third" data-bs-toggle="tab" href="#third" role="tab" aria-controls="third-tab" aria-selected="false">all
                                    contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="search-body">
                        <div class="tab-content" id="ueberTabA">
                            <div class="tab-pane fade show active" id="panel_a_first" role="tabpanel" aria-labelledby="first-tab">
                                <ul class="user-list">
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse1.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet fdsfdsf sdf dsf dsf dsf dsf dsf d</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                    <div class="total-message mt-1 d-flex justify-content-end">
                                                        <span class="badge badge-success ">5</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse2.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-offline"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Shreyu Neu</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse3.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Domnic Harris</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                    <div class="total-message mt-1 d-flex justify-content-end">
                                                        <span class="badge badge-success ">15</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse4.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-offline"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Khalid Hasan</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse5.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Tuhin Molla</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse6.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Billal Hossain</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse7.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Ibn Adam</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse8.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-offline"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Tanim</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse9.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Tabib Rahman</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse2.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Shreyu Neu</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse1.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse3.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-offline"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Domnic Harris</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse4.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Khalid Hasan</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse1.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse6.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-offline"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Billal Hossain</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="panel_a_second" role="tabpanel" aria-labelledby="second-tab">
                                <ul class="user-list">
                                    <li>
                                        <div class="user-button-top">
                                            <button type="button" class="border bg-normal color-gray rounded-pill content-center">
                                                <img src="{{ asset('assets/img/svg/edit.svg') }}" alt="edit" class="svg">
                                                create a new group</button>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse1.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                    <div class="total-message mt-1 d-flex justify-content-end">
                                                        <span class="badge badge-success ">2</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse2.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-offline"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse3.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                    <div class="total-message mt-1 d-flex justify-content-end">
                                                        <span class="badge badge-success ">12</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse4.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-offline"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse5.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse6.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse7.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse8.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse9.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse10.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-offline"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse11.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse12.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse13.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse2.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-offline"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse15.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="panel_a_third" role="tabpanel" aria-labelledby="third-tab">
                                <ul class="user-list">
                                    <li>
                                        <div class="user-button-top">
                                            <button type="button" class="border bg-normal color-gray rounded-pill content-center"><img src="{{ asset('assets/img/svg/user-plus.svg') }}" alt="user-plus" class="svg">Add New Contact</button>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse1.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                    <div class="total-message mt-1 d-flex justify-content-end">
                                                        <span class="badge badge-success ">4</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse2.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-offline"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse3.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                    <div class="total-message mt-1 d-flex justify-content-end">
                                                        <span class="badge badge-success ">24</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse4.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-offline"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse5.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse6.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-offlien"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse7.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse8.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                    <div class="total-message mt-1 d-flex justify-content-end">
                                                        <span class="badge badge-success ">3</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse9.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-offline"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse10.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse11.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse12.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse13.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-offline"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                    <div class="total-message mt-1 d-flex justify-content-end">
                                                        <span class="badge badge-success ">3</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse2.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="user-list-item__wrapper">
                                            <div class="avatar avatar-circle ms-0">
                                                <img src="{{ asset('assets/img/ellipse15.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                <div class="badge-direction-bottom">
                                                    <span class="chat-badge-dot avatar-online"></span>
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div class="users-list-body-title">
                                                    <h6>Meyri Carles</h6>
                                                    <div class="text-limit" data-maxlength="10">
                                                        <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                    </div>
                                                </div>
                                                <div class="last-chat-time unread">
                                                    <small>14:45 pm</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-content" id="ueberTabB">
        <div class="tab-pane fade  show active" id="panel_b_first" role="tabpanel" aria-labelledby="first-tab">
            <div class="chat">
                <div class="chat-body bg-white radius-xl">
                    <div class="chat-header">
                        <div class="media chat-name align-items-center">
                            <div class="media-body align-self-center ">
                                <h5 class=" mb-0 fw-500 mb-2">Domnic Harys</h5>
                                <div class="media-body__content d-flex align-items-center">
                                    <span class="badge-dot dot-success me-1"></span>
                                    <small class="d-flex color-light fs-12 text-capitalize">
                                        active now
                                    </small>
                                </div>
                            </div>
                        </div>
                        <ul class="nav flex-nowrap">
                            <li class="nav-item list-inline-item me-0">
                                <div class="dropdown">
                                    <a href="#" role="button" title="Details" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item align-items-center d-flex" href="#" data-chat-info-toggle="">
                                            <img src="{{ asset('assets/img/svg/users.svg') }}" alt="users" class="svg">
                                            <span>Create new group</span>
                                        </a>
                                        <a class="dropdown-item align-items-center d-flex" href="#">
                                            <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">
                                            <span>Delete conversation</span>
                                        </a>
                                        <a class="dropdown-item align-items-center d-flex" href="#">
                                            <img src="{{ asset('assets/img/svg/x-octagon.svg') }}" alt="x-octagon" class="svg">
                                            <span>Block & report</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="chat-box chat-box--big p-xl-30 ps-lg-20 pe-lg-0">
                        <div class="flex-1 incoming-chat">
                            <div class="chat-text-box">
                                <div class="media ">
                                    <div class="chat-text-box__photo ">
                                        <img src="{{ asset('assets/img/author/1.jpg') }}" class="align-self-start me-15 wh-46" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <div class="chat-text-box__content">
                                            <div class="chat-text-box__title d-flex align-items-center">
                                                <h6 class="fs-14">Domnic Harys</h6>
                                                <span class="chat-text-box__time fs-12 color-light fw-400 ms-15">8:30
                                                    PM</span>
                                            </div>
                                            <div class="d-flex align-items-center mb-20 mt-10">
                                                <div class="chat-text-box__subtitle p-20 bg-primary">
                                                    <p class="color-white">Jam nonumy eirmod tempor invidunt ut
                                                        labore
                                                        et dolore magna aliquyam erat consetetur sadipscing elitr
                                                        sed
                                                        diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                        aliquyam erat sed diam voluptua..</p>
                                                </div>
                                                <div class="chat-text-box__other d-flex">
                                                    <div class="chat-text-box__reaction px-sm-15 px-2">
                                                        <div class="emotions">
                                                            <div class="dropdown  dropdown-click ">
                                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <img src="{{ asset('assets/img/svg/smile.svg') }}" alt="smile" class="svg"> </button>
                                                                <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu">
                                                                    <ul class="emotions__parent d-flex">
                                                                        <li>
                                                                            <a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/cool.png') }}" alt="emotions">
                                                                            </a>
                                                                        </li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/happy2.png') }}" alt="emotions">
                                                                            </a></li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/happy.png') }}" alt="emotions">
                                                                            </a></li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/shocked.png') }}" alt="emotions">
                                                                            </a></li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/like.png') }}" alt="emotions">
                                                                            </a></li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/heart.png') }}" alt="emotions">
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown dropdown-click">
                                                        <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                        </button>
                                                        <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu" style="">
                                                            <a class="dropdown-item" href="#">Copy</a>
                                                            <a class="dropdown-item" href="#">Quote</a>
                                                            <a class="dropdown-item" href="#">Forward</a>
                                                            <a class="dropdown-item" href="#">Report</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="social-connector text-center text-capitalize">
                            <span>today</span>
                        </p>
                        <div class="flex-1 justify-content-end d-flex outgoing-chat mt-20">
                            <div class="chat-text-box">
                                <div class="media ">
                                    <div class="media-body">
                                        <div class="chat-text-box__content">
                                            <div class="chat-text-box__title d-flex align-items-center justify-content-end mb-2">
                                                <span class="chat-text-box__time fs-12 color-light fw-400">8:30
                                                    PM</span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-end">
                                                <div class="chat-text-box__other d-flex">
                                                    <div class="px-15">
                                                        <div class="dropdown dropdown-click">
                                                            <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                            </button>
                                                            <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu" style="">
                                                                <a class="dropdown-item" href="#">Copy</a>
                                                                <a class="dropdown-item" href="#">Quote</a>
                                                                <a class="dropdown-item" href="#">Forward</a>
                                                                <a class="dropdown-item" href="#">Report</a>
                                                                <a class="dropdown-item" href="#">remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-text-box__subtitle p-20 bg-deep">
                                                    <p class="color-gray">Jam nonumy eirmod tempor invidunt ut
                                                        labore
                                                        et dolore magna aliquyam erat consetetur sadipscing elitr
                                                        sed
                                                        diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                        aliquyam erat sed diam voluptua..</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 justify-content-end d-flex outgoing-chat">
                            <div class="chat-text-box">
                                <div class="media ">
                                    <div class="media-body">
                                        <div class="chat-text-box__content">
                                            <div class="d-flex align-items-center justify-content-end">
                                                <div class="chat-text-box__other d-flex">
                                                    <div class="px-15">
                                                        <div class="dropdown dropdown-click">
                                                            <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                            </button>
                                                            <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu" style="">
                                                                <a class="dropdown-item" href="#">Copy</a>
                                                                <a class="dropdown-item" href="#">Quote</a>
                                                                <a class="dropdown-item" href="#">Forward</a>
                                                                <a class="dropdown-item" href="#">Report</a>
                                                                <a class="dropdown-item" href="#">remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-text-box__subtitle p-20 bg-deep">
                                                    <p class="color-gray">Jam nonumy eirmod tempor invidunt ut
                                                        labore et
                                                        dolore magna.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 incoming-chat mt-30">
                            <div class="chat-text-box">
                                <div class="media ">
                                    <div class="chat-text-box__photo ">
                                        <img src="{{ asset('assets/img/author/1.jpg') }}" class="align-self-start me-15 wh-46" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <div class="chat-text-box__content">
                                            <div class="chat-text-box__title d-flex align-items-center">
                                                <h6 class="fs-14">Domnic Harys</h6>
                                                <span class="chat-text-box__time fs-12 color-light fw-400 ms-15">8:30
                                                    PM</span>
                                            </div>
                                            <div class="d-flex align-items-center mb-20 mt-10">
                                                <div class="chat-text-box__subtitle p-20 bg-primary">
                                                    <p class="color-white">Jam nonumy eirmod tempor invidunt ut
                                                        labore
                                                        et dolore magna.</p>
                                                </div>
                                                <div class="chat-text-box__other d-flex">
                                                    <div class="chat-text-box__reaction px-sm-15 px-2">
                                                        <div class="emotions">
                                                            <div class="dropdown  dropdown-click ">
                                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <img src="{{ asset('assets/img/svg/smile.svg') }}" alt="smile" class="svg"> </button>
                                                                <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu">
                                                                    <ul class="emotions__parent d-flex">
                                                                        <li>
                                                                            <a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/cool.png') }}" alt="emotions">
                                                                            </a>
                                                                        </li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/happy2.png') }}" alt="emotions">
                                                                            </a></li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/happy.png') }}" alt="emotions">
                                                                            </a></li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/shocked.png') }}" alt="emotions">
                                                                            </a></li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/like.png') }}" alt="emotions">
                                                                            </a></li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/heart.png') }}" alt="emotions">
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown dropdown-click">
                                                        <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                        </button>
                                                        <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu" style="">
                                                            <a class="dropdown-item" href="#">Copy</a>
                                                            <a class="dropdown-item" href="#">Quote</a>
                                                            <a class="dropdown-item" href="#">Forward</a>
                                                            <a class="dropdown-item" href="#">Report</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 justify-content-end d-flex outgoing-chat">
                            <div class="chat-text-box">
                                <div class="media ">
                                    <div class="media-body">
                                        <div class="chat-text-box__content">
                                            <div class="chat-text-box__title d-flex align-items-center justify-content-end mb-2">
                                                <span class="chat-text-box__time fs-12 color-light fw-400">8:30
                                                    PM</span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-end">
                                                <div class="chat-text-box__other d-flex">
                                                    <div class="px-15">
                                                        <div class="dropdown dropdown-click">
                                                            <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                            </button>
                                                            <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu" style="">
                                                                <a class="dropdown-item" href="#">Copy</a>
                                                                <a class="dropdown-item" href="#">Quote</a>
                                                                <a class="dropdown-item" href="#">Forward</a>
                                                                <a class="dropdown-item" href="#">Report</a>
                                                                <a class="dropdown-item" href="#">remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-text-box__subtitle p-20 bg-deep">
                                                    <p class="color-gray">Jam nonumy eirmod tempor invidunt ut
                                                        labore et
                                                        dolore magna.</p>
                                                </div>
                                            </div>
                                            <div class="seen-chat d-flex align-items-center  justify-content-end mb-2 mt-10">
                                                <div class="chat-text-box__title d-flex align-items-center me-10 ">
                                                    <span class="chat-text-box__time fs-12 color-light fw-400">Seen
                                                        9:20
                                                        PM</span>
                                                </div>
                                                <img src="{{ asset('assets/img/author/1.jpg') }}" alt="img" class="wh-20 rounded-circle">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 incoming-chat mt-30">
                            <div class="chat-text-box">
                                <div class="media ">
                                    <div class="chat-text-box__photo ">
                                        <img src="{{ asset('assets/img/author/1.jpg') }}" class="align-self-start me-15 wh-46" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <div class="chat-text-box__content">
                                            <div class="d-flex align-items-center ">
                                                <div class="chat-text-box__subtitle typing cbg-light pe-30">
                                                    <p class="color-light text-capitalize">typing...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chat-footer px-xl-30 px-lg-20 pb-lg-30 pt-1">
                        <div class="chat-type-text">
                            <div class="pt-0 outline-0 pb-0 pe-0 ps-0 rounded-0 position-relative d-flex align-items-center" tabindex="-1">
                                <div class="d-flex justify-content-between align-items-center w-100 flex-wrap">
                                    <div class=" flex-1 d-flex align-items-center chat-type-text__write ms-0">
                                        <a href="#"><img class="svg" src="{{ asset('assets/img/svg/smile.svg') }}" alt="smile"></a>
                                        <input class="form-control border-0 bg-transparent box-shadow-none" placeholder="Type your message...">
                                    </div>
                                    <div class="chat-type-text__btn">
                                        <button type="button" class="border-0 btn-deep color-light wh-50 p-10 rounded-circle">
                                            <img class="svg" src="{{ asset('assets/img/svg/image.svg') }}" alt="image"></button>
                                        <button type="button" class="border-0 btn-deep color-light wh-50 p-10 rounded-circle">
                                            <img class="svg" src="{{ asset('assets/img/svg/paperclip.svg') }}" alt="paperclip"></button>
                                        <button type="button" class="border-0 btn-primary wh-50 p-10 rounded-circle">
                                            <img class="svg" src="{{ asset('assets/img/svg/send.svg') }}" alt="send"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="panel_b_second" role="tabpanel" aria-labelledby="second-tab">
            <div class="chat">
                <div class="chat-body bg-white radius-xl">
                    <div class="chat-header bg-white">
                        <div class="media chat-name align-items-center">
                            <div class="media-body align-self-center ">
                                <h5 class=" mb-0 fw-500 text-uppercase">ui/ux group</h5>
                            </div>
                        </div>
                        <div class="image-group">
                            <ul class="d-flex">
                                <li>
                                    <img src="{{ asset('assets/img/author/1.jpg') }}" alt="img" class="wh-30 rounded-circle">
                                </li>
                                <li>
                                    <img src="{{ asset('assets/img/author/1.jpg') }}" alt="img" class="wh-30 rounded-circle">
                                </li>
                                <li>
                                    <img src="{{ asset('assets/img/author/1.jpg') }}" alt="img" class="wh-30 rounded-circle">
                                </li>
                                <li>
                                    <img src="{{ asset('assets/img/author/1.jpg') }}" alt="img" class="wh-30 rounded-circle">
                                </li>
                                <li>
                                    <img src="{{ asset('assets/img/author/1.jpg') }}" alt="img" class="wh-30 rounded-circle">
                                </li>
                                <li>
                                    <a href="#" class="bg-primary rounded-circle wh-30 color-white content-center fs-10 fw-500">20+</a>
                                </li>
                                <li>
                                    <a href="#" class="border rounded-circle wh-30 color-extra-light content-center">
                                        <img src="{{ asset('assets/img/svg/plus.svg') }}" alt="plus" class="svg">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <ul class="nav flex-nowrap">
                            <li class="nav-item list-inline-item d-none d-sm-block me-0">
                                <div class="dropdown">
                                    <a href="#" role="button" title="Details" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item align-items-center d-flex" href="#" data-chat-info-toggle="">
                                            <img src="{{ asset('assets/img/svg/users.svg') }}" alt="users" class="svg">
                                            <span>Create new group</span>
                                        </a>
                                        <a class="dropdown-item align-items-center d-flex" href="#">
                                            <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">
                                            <span>Delete conversation</span>
                                        </a>
                                        <a class="dropdown-item align-items-center d-flex" href="#">
                                            <img src="{{ asset('assets/img/svg/x-octagon.svg') }}" alt="x-octagon" class="svg">
                                            <span>Block & report</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="chat-box chat-box--big p-xl-30 ps-lg-20 pe-lg-0">
                        <div class="flex-1 incoming-chat">
                            <div class="chat-text-box">
                                <div class="media ">
                                    <div class="chat-text-box__photo ">
                                        <img src="{{ asset('assets/img/author/1.jpg') }}" class="align-self-start me-15 wh-46" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <div class="chat-text-box__content">
                                            <div class="chat-text-box__title d-flex align-items-center">
                                                <h6 class="fs-14">Domnic Harys</h6>
                                                <span class="chat-text-box__time fs-12 color-light fw-400 ms-15">8:30
                                                    PM</span>
                                            </div>
                                            <div class="d-flex align-items-center mb-20 mt-10">
                                                <div class="chat-text-box__subtitle p-20 bg-primary">
                                                    <p class="color-white">Jam nonumy eirmod tempor invidunt ut
                                                        labore
                                                        et dolore magna aliquyam erat consetetur sadipscing elitr
                                                        sed
                                                        diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                        aliquyam erat sed diam voluptua..</p>
                                                </div>
                                                <div class="chat-text-box__other d-flex">
                                                    <div class="chat-text-box__reaction px-sm-15 px-2">
                                                        <div class="emotions">
                                                            <div class="dropdown  dropdown-click ">
                                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <img class="svg" src="{{ asset('assets/img/svg/smile.svg') }}" alt="smile"> </button>
                                                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-left dropdown-menu">
                                                                    <ul class="emotions__parent d-flex">
                                                                        <li>
                                                                            <a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/cool.png') }}" alt="emotions">
                                                                            </a>
                                                                        </li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/happy2.png') }}" alt="emotions">
                                                                            </a></li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/happy.png') }}" alt="emotions">
                                                                            </a></li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/shocked.png') }}" alt="emotions">
                                                                            </a></li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/like.png') }}" alt="emotions">
                                                                            </a></li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/heart.png') }}" alt="emotions">
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown dropdown-click">
                                                        <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                        </button>
                                                        <div class="dropdown-default dropdown-bottomLeft dropdown-menu-left dropdown-menu" style="">
                                                            <a class="dropdown-item" href="#">Copy</a>
                                                            <a class="dropdown-item" href="#">Quote</a>
                                                            <a class="dropdown-item" href="#">Forward</a>
                                                            <a class="dropdown-item" href="#">Report</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="social-connector text-center text-capitalize">
                            <span>today</span>
                        </p>
                        <div class="flex-1 justify-content-end d-flex outgoing-chat mt-20">
                            <div class="chat-text-box">
                                <div class="media ">
                                    <div class="media-body">
                                        <div class="chat-text-box__content">
                                            <div class="chat-text-box__title d-flex align-items-center justify-content-end mb-2">
                                                <span class="chat-text-box__time fs-12 color-light fw-400">8:30
                                                    PM</span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-end">
                                                <div class="chat-text-box__other d-flex">
                                                    <div class="px-15">
                                                        <div class="dropdown dropdown-click">
                                                            <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                            </button>
                                                            <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu" style="">
                                                                <a class="dropdown-item" href="#">Copy</a>
                                                                <a class="dropdown-item" href="#">Quote</a>
                                                                <a class="dropdown-item" href="#">Forward</a>
                                                                <a class="dropdown-item" href="#">Report</a>
                                                                <a class="dropdown-item" href="#">remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-text-box__subtitle p-20 bg-deep">
                                                    <p class="color-gray">Jam nonumy eirmod tempor invidunt ut
                                                        labore
                                                        et dolore magna aliquyam erat consetetur sadipscing elitr
                                                        sed
                                                        diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                        aliquyam erat sed diam voluptua..</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 justify-content-end d-flex outgoing-chat">
                            <div class="chat-text-box">
                                <div class="media ">
                                    <div class="media-body">
                                        <div class="chat-text-box__content">
                                            <div class="d-flex align-items-center justify-content-end">
                                                <div class="chat-text-box__other d-flex">
                                                    <div class="px-15">
                                                        <div class="dropdown dropdown-click">
                                                            <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                            </button>
                                                            <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu" style="">
                                                                <a class="dropdown-item" href="#">Copy</a>
                                                                <a class="dropdown-item" href="#">Quote</a>
                                                                <a class="dropdown-item" href="#">Forward</a>
                                                                <a class="dropdown-item" href="#">Report</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="chat-text-box__subtitle p-20 bg-deep">
                                                    <p class="color-gray">Jam nonumy eirmod tempor invidunt ut
                                                        labore et
                                                        dolore magna.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 incoming-chat mt-30">
                            <div class="chat-text-box">
                                <div class="media ">
                                    <div class="chat-text-box__photo ">
                                        <img src="{{ asset('assets/img/author/1.jpg') }}" class="align-self-start me-15 wh-46" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <div class="chat-text-box__content">
                                            <div class="chat-text-box__title d-flex align-items-center">
                                                <h6 class="fs-14">Domnic Harys</h6>
                                                <span class="chat-text-box__time fs-12 color-light fw-400 ms-15">8:30
                                                    PM</span>
                                            </div>
                                            <div class="d-flex align-items-center mb-20 mt-10">
                                                <div class="chat-text-box__subtitle p-20 bg-primary">
                                                    <p class="color-white">Jam nonumy eirmod tempor invidunt ut
                                                        labore
                                                        et dolore magna.</p>
                                                </div>
                                                <div class="chat-text-box__other d-flex">
                                                    <div class="chat-text-box__reaction px-sm-15 px-2">
                                                        <div class="emotions">
                                                            <div class="dropdown  dropdown-click ">
                                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <img src="{{ asset('assets/img/svg/smile.svg') }}" alt="smile" class="svg"> </button>
                                                                <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu">
                                                                    <ul class="emotions__parent d-flex">
                                                                        <li>
                                                                            <a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/cool.png') }}" alt="emotions">
                                                                            </a>
                                                                        </li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/happy2.png') }}" alt="emotions">
                                                                            </a></li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/happy.png') }}" alt="emotions">
                                                                            </a></li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/shocked.png') }}" alt="emotions">
                                                                            </a></li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/like.png') }}" alt="emotions">
                                                                            </a></li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/heart.png') }}" alt="emotions">
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown dropdown-click">
                                                        <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                        </button>
                                                        <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu" style="">
                                                            <a class="dropdown-item" href="#">Copy</a>
                                                            <a class="dropdown-item" href="#">Quote</a>
                                                            <a class="dropdown-item" href="#">Forward</a>
                                                            <a class="dropdown-item" href="#">Report</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 justify-content-end d-flex outgoing-chat">
                            <div class="chat-text-box">
                                <div class="media ">
                                    <div class="media-body">
                                        <div class="chat-text-box__content">
                                            <div class="chat-text-box__title d-flex align-items-center justify-content-end mb-2">
                                                <span class="chat-text-box__time fs-12 color-light fw-400">8:30
                                                    PM</span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-end">
                                                <div class="chat-text-box__other d-flex">
                                                    <div class="px-15">
                                                        <div class="dropdown dropdown-click">
                                                            <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                            </button>
                                                            <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu" style="">
                                                                <a class="dropdown-item" href="#">Copy</a>
                                                                <a class="dropdown-item" href="#">Quote</a>
                                                                <a class="dropdown-item" href="#">Forward</a>
                                                                <a class="dropdown-item" href="#">Report</a>
                                                                <a class="dropdown-item" href="#">remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-text-box__subtitle p-20 bg-deep">
                                                    <p class="color-gray">Jam nonumy eirmod tempor invidunt ut
                                                        labore et
                                                        dolore magna.</p>
                                                </div>
                                            </div>
                                            <div class="seen-chat seen-chat-group  d-flex align-items-center  justify-content-end mb-2 mt-10">
                                                <ul class="d-flex">
                                                    <li>
                                                        <img src="{{ asset('assets/img/author/1.jpg') }}" alt="img" class="wh-20 rounded-circle">
                                                    </li>
                                                    <li>
                                                        <img src="{{ asset('assets/img/author/2.jpg') }}" alt="img" class="wh-20 rounded-circle">
                                                    </li>
                                                    <li>
                                                        <img src="{{ asset('assets/img/author/3.jpg') }}" alt="img" class="wh-20 rounded-circle">
                                                    </li>
                                                    <li>
                                                        <img src="{{ asset('assets/img/author/4.jpg') }}" alt="img" class="wh-20 rounded-circle">
                                                    </li>
                                                    <li>
                                                        <img src="{{ asset('assets/img/author/1.jpg') }}" alt="img" class="wh-20 rounded-circle">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 incoming-chat mt-30">
                            <div class="chat-text-box">
                                <div class="media ">
                                    <div class="chat-text-box__photo ">
                                        <img src="{{ asset('assets/img/author/1.jpg') }}" class="align-self-start me-15 wh-46" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <div class="chat-text-box__content">
                                            <div class="d-flex align-items-center ">
                                                <div class="chat-text-box__subtitle typing cbg-light pe-30">
                                                    <p class="color-light text-capitalize">typing...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chat-footer px-xl-30 px-lg-20 pb-lg-30 pt-1">
                        <div class="chat-type-text">
                            <div class="pt-0 outline-0 pb-0 pe-0 ps-0 rounded-0 position-relative d-flex align-items-center" tabindex="-1">
                                <div class="d-flex justify-content-between align-items-center w-100 flex-wrap">
                                    <div class=" flex-1 d-flex align-items-center chat-type-text__write ms-0">
                                        <a href="#">
                                            <img src="{{ asset('assets/img/svg/smile.svg') }}" alt="smile" class="svg">
                                        </a>
                                        <input class="form-control border-0 bg-transparent" placeholder="Type your message...">
                                    </div>
                                    <div class="chat-type-text__btn">
                                        <button type="button" class="border-0 btn-deep color-light wh-50 p-10 rounded-circle">
                                            <img src="{{ asset('assets/img/svg/image.svg') }}" alt="image" class="svg"></button>
                                        <button type="button" class="border-0 btn-deep color-light wh-50 p-10 rounded-circle">
                                            <img src="{{ asset('assets/img/svg/paperclip.svg') }}" alt="paperclip" class="svg"></button>
                                        <button type="button" class="border-0 btn-primary wh-50 p-10 rounded-circle">
                                            <img src="{{ asset('assets/img/svg/send.svg') }}" alt="send" class="svg"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="panel_b_thrid" role="tabpanel" aria-labelledby="third-tab">
            <div class="chat">
                <div class="chat-body bg-white radius-xl">
                    <div class="chat-header bg-white">
                        <div class="media chat-name align-items-center">
                            <div class="media-body align-self-center ">
                                <h5 class=" mb-0 fw-500 mb-2">Domnic Harys</h5>
                                <div class="d-flex align-items-center">
                                    <span class="badge-dot dot-success me-1"></span>
                                    <small class="d-flex color-light fs-12 text-capitalize">
                                        active now
                                    </small>
                                </div>
                            </div>
                        </div>
                        <ul class="nav flex-nowrap">
                            <li class="nav-item list-inline-item d-none d-sm-block me-0">
                                <div class="dropdown">
                                    <a href="#" role="button" title="Details" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item align-items-center d-flex" href="#" data-chat-info-toggle="">
                                            <img src="{{ asset('assets/img/svg/users.svg') }}" alt="users" class="svg">
                                            <span>Create new group</span>
                                        </a>
                                        <a class="dropdown-item align-items-center d-flex" href="#">
                                            <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">
                                            <span>Delete conversation</span>
                                        </a>
                                        <a class="dropdown-item align-items-center d-flex" href="#">
                                            <img src="{{ asset('assets/img/svg/x-octagon.svg') }}" alt="x-octagon" class="svg">
                                            <span>Block & report</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="chat-box chat-box--big p-xl-30 ps-lg-20 pe-lg-0">
                        <div class="flex-1 incoming-chat">
                            <div class="chat-text-box ">
                                <div class="media d-flex">
                                    <div class="chat-text-box__photo ">
                                        <img src="{{ asset('assets/img/author/1.jpg') }}" class="align-self-start me-15 wh-46" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <div class="chat-text-box__content">
                                            <div class="chat-text-box__title d-flex align-items-center">
                                                <h6 class="fs-14">Domnic Harys</h6>
                                                <span class="chat-text-box__time fs-12 color-light fw-400 ms-15">8:30
                                                    PM</span>
                                            </div>
                                            <div class="d-flex align-items-center mb-20 mt-10">
                                                <div class="chat-text-box__subtitle p-20 bg-primary">
                                                    <p class="color-white">Jam nonumy eirmod tempor invidunt ut
                                                        labore
                                                        et dolore magna aliquyam erat consetetur sadipscing elitr
                                                        sed
                                                        diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                        aliquyam erat sed diam voluptua..</p>
                                                </div>
                                                <div class="chat-text-box__other d-flex">
                                                    <div class="chat-text-box__reaction px-sm-15 px-2">
                                                        <div class="emotions">
                                                            <div class="dropdown  dropdown-click ">
                                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <img class="svg" src="{{ asset('assets/img/svg/smile.svg') }}" alt="smile"> </button>
                                                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-left dropdown-menu">
                                                                    <ul class="emotions__parent d-flex">
                                                                        <li>
                                                                            <a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/cool.png') }}" alt="emotions">
                                                                            </a>
                                                                        </li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/happy2.png') }}" alt="emotions">
                                                                            </a></li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/happy.png') }}" alt="emotions">
                                                                            </a></li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/shocked.png') }}" alt="emotions">
                                                                            </a></li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/like.png') }}" alt="emotions">
                                                                            </a></li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/heart.png') }}" alt="emotions">
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown dropdown-click">
                                                        <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                        </button>
                                                        <div class="dropdown-default dropdown-bottomLeft dropdown-menu-left dropdown-menu" style="">
                                                            <a class="dropdown-item" href="#">Copy</a>
                                                            <a class="dropdown-item" href="#">Quote</a>
                                                            <a class="dropdown-item" href="#">Forward</a>
                                                            <a class="dropdown-item" href="#">Report</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="social-connector text-center text-capitalize">
                            <span>today</span>
                        </p>
                        <div class="flex-1 justify-content-end d-flex outgoing-chat mt-20">
                            <div class="chat-text-box">
                                <div class="media ">
                                    <div class="media-body">
                                        <div class="chat-text-box__content">
                                            <div class="chat-text-box__title d-flex align-items-center justify-content-end mb-2">
                                                <span class="chat-text-box__time fs-12 color-light fw-400">8:30
                                                    PM</span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-end">
                                                <div class="chat-text-box__other d-flex">
                                                    <div class="px-15">
                                                        <div class="dropdown dropdown-click">
                                                            <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                            </button>
                                                            <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu" style="">
                                                                <a class="dropdown-item" href="#">Copy</a>
                                                                <a class="dropdown-item" href="#">Quote</a>
                                                                <a class="dropdown-item" href="#">Forward</a>
                                                                <a class="dropdown-item" href="#">Report</a>
                                                                <a class="dropdown-item" href="#">remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-text-box__subtitle p-20 bg-deep">
                                                    <p class="color-gray">Jam nonumy eirmod tempor invidunt ut
                                                        labore
                                                        et dolore magna aliquyam erat consetetur sadipscing elitr
                                                        sed
                                                        diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                        aliquyam erat sed diam voluptua..</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 justify-content-end d-flex outgoing-chat">
                            <div class="chat-text-box">
                                <div class="media ">
                                    <div class="media-body">
                                        <div class="chat-text-box__content">
                                            <div class="d-flex align-items-center justify-content-end">
                                                <div class="chat-text-box__other d-flex">
                                                    <div class="px-15">
                                                        <div class="dropdown dropdown-click">
                                                            <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                            </button>
                                                            <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu" style="">
                                                                <a class="dropdown-item" href="#">Copy</a>
                                                                <a class="dropdown-item" href="#">Quote</a>
                                                                <a class="dropdown-item" href="#">Forward</a>
                                                                <a class="dropdown-item" href="#">Report</a>
                                                                <a class="dropdown-item" href="#">remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-text-box__subtitle p-20 bg-deep">
                                                    <p class="color-gray">Jam nonumy eirmod tempor invidunt ut
                                                        labore et
                                                        dolore magna.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 incoming-chat mt-30">
                            <div class="chat-text-box">
                                <div class="media d-flex">
                                    <div class="chat-text-box__photo ">
                                        <img src="{{ asset('assets/img/author/1.jpg') }}" class="align-self-start me-15 wh-46" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <div class="chat-text-box__content">
                                            <div class="chat-text-box__title d-flex align-items-center">
                                                <h6 class="fs-14">Domnic Harys</h6>
                                                <span class="chat-text-box__time fs-12 color-light fw-400 ms-15">8:30
                                                    PM</span>
                                            </div>
                                            <div class="d-flex align-items-center mb-20 mt-10">
                                                <div class="chat-text-box__subtitle p-20 bg-primary">
                                                    <p class="color-white">Jam nonumy eirmod tempor invidunt ut
                                                        labore
                                                        et dolore magna.</p>
                                                </div>
                                                <div class="chat-text-box__other d-flex">
                                                    <div class="chat-text-box__reaction px-sm-15 px-2">
                                                        <div class="emotions">
                                                            <div class="dropdown  dropdown-click ">
                                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <img class="svg" src="{{ asset('assets/img/svg/smile.svg') }}" alt="smile"> </button>
                                                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-left dropdown-menu">
                                                                    <ul class="emotions__parent d-flex">
                                                                        <li>
                                                                            <a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/cool.png') }}" alt="emotions">
                                                                            </a>
                                                                        </li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/happy2.png') }}" alt="emotions">
                                                                            </a></li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/happy.png') }}" alt="emotions">
                                                                            </a></li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/shocked.png') }}" alt="emotions">
                                                                            </a></li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/like.png') }}" alt="emotions">
                                                                            </a></li>
                                                                        <li><a class="" href="#">
                                                                                <img src="{{ asset('assets/img/svg/heart.png') }}" alt="emotions">
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown dropdown-click">
                                                        <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                        </button>
                                                        <div class="dropdown-default dropdown-bottomLeft dropdown-menu-left dropdown-menu" style="">
                                                            <a class="dropdown-item" href="#">Copy</a>
                                                            <a class="dropdown-item" href="#">Quote</a>
                                                            <a class="dropdown-item" href="#">Forward</a>
                                                            <a class="dropdown-item" href="#">Report</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 justify-content-end d-flex outgoing-chat">
                            <div class="chat-text-box">
                                <div class="media ">
                                    <div class="media-body">
                                        <div class="chat-text-box__content">
                                            <div class="chat-text-box__title d-flex align-items-center justify-content-end mb-2">
                                                <span class="chat-text-box__time fs-12 color-light fw-400">8:30
                                                    PM</span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-end">
                                                <div class="chat-text-box__other d-flex">
                                                    <div class="px-15">
                                                        <div class="dropdown dropdown-click">
                                                            <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                            </button>
                                                            <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu" style="">
                                                                <a class="dropdown-item" href="#">Copy</a>
                                                                <a class="dropdown-item" href="#">Quote</a>
                                                                <a class="dropdown-item" href="#">Forward</a>
                                                                <a class="dropdown-item" href="#">Report</a>
                                                                <a class="dropdown-item" href="#">remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-text-box__subtitle p-20 bg-deep">
                                                    <p class="color-gray">Jam nonumy eirmod tempor invidunt ut
                                                        labore et
                                                        dolore magna.</p>
                                                </div>
                                            </div>
                                            <div class="seen-chat d-flex align-items-center  justify-content-end mb-2 mt-10">
                                                <div class="chat-text-box__title d-flex align-items-center me-10 ">
                                                    <span class="chat-text-box__time fs-12 color-light fw-400">Seen
                                                        9:20
                                                        PM</span>
                                                </div>
                                                <img src="{{ asset('assets/img/author/1.jpg') }}" alt="img" class="wh-20 rounded-circle">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 incoming-chat mt-30">
                            <div class="chat-text-box">
                                <div class="media d-flex">
                                    <div class="chat-text-box__photo ">
                                        <img src="{{ asset('assets/img/author/1.jpg') }}" class="align-self-start me-15 wh-46" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <div class="chat-text-box__content">
                                            <div class="d-flex align-items-center ">
                                                <div class="chat-text-box__subtitle typing cbg-light pe-30">
                                                    <p class="color-light text-capitalize">typing...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chat-footer px-xl-30 px-lg-20 pb-lg-30 pt-1">
                        <div class="chat-type-text">
                            <div class="pt-0 outline-0 pb-0 pe-0 ps-0 rounded-0 position-relative d-flex align-items-center" tabindex="-1">
                                <div class="d-flex justify-content-between align-items-center w-100 flex-wrap">
                                    <div class=" flex-1 d-flex align-items-center chat-type-text__write ms-0">
                                        <a href="#">
                                            <img class="svg" src="{{ asset('assets/img/svg/smile.svg') }}" alt="smile"></a>
                                        <input class="form-control border-0 bg-transparent box-shadow-none" placeholder="Type your message...">
                                    </div>
                                    <div class="chat-type-text__btn">
                                        <button type="button" class="border-0 btn-deep color-light wh-50 p-10 rounded-circle">
                                            <img class="svg" src="{{ asset('assets/img/svg/image.svg') }}" alt="image"></button>
                                        <button type="button" class="border-0 btn-deep color-light wh-50 p-10 rounded-circle">
                                            <img class="svg" src="{{ asset('assets/img/svg/paperclip.svg') }}" alt="paperclip"></button>
                                        <button type="button" class="border-0 btn-primary wh-50 p-10 rounded-circle">
                                            <img class="svg" src="{{ asset('assets/img/svg/send.svg') }}" alt="send"></button>
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