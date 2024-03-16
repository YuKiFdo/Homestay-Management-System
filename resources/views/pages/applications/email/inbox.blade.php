@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="mailbox-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">{{ trans('page_title.inbox') }}</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>{{ trans('menu.email-menu-title') }}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ trans('page_title.inbox') }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <aside class="mailbox-sidebar-container">
                        <div class="dm-mail-sidebar show mb-30">
                            <div class="card">
                                <a href="#" class="mailbar-cross d-md-none">
                                    <img src="{{ asset('assets/img/svg/x.svg') }}" alt="x" class="svg">
                                </a>
                                <div class="card-body">
                                    <div class="d-flex align-content-center content-center px-15">
                                        <a href="#" class="btn-compose btn btn-md btn-primary btn-shadow-primary" data-trigger="compose"> <img src="{{ asset('assets/img/svg/plus.svg') }}" alt="plus" class="svg"> Compose</a>
                                    </div>
                                    <ul class="mail-list">
                                        <li><a class="active" href="#"><img class="svg" src="{{ asset('assets/img/svg/inbox.svg') }}" alt="inbox">Inbox <span class="badge badge-primary badge-transparent">5</span></a></li>
                                        <li><a href="#"><img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">Started</a></li>
                                        <li><a href="#"><img class="svg" src="{{ asset('assets/img/svg/send.svg') }}" alt="send">Send</a></li>
                                        <li><a href="#"><img class="svg edit" src="{{ asset('assets/img/svg/edit.svg') }}" alt="edit">Draft<span class="badge badge-primary badge-transparent">12</span></a></li>
                                        <li><a href="#"><img src="{{ asset('assets/img/svg/alert-octagon.svg') }}" alt="alert-octagon" class="svg">Spam</a></li>
                                        <li><a href="#"><img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash">Trash</a></li>
                                    </ul>
                                    <span class="mail-list-title mt-35">Label</span>
                                    <ul class="mail-list mt-0">
                                        <li><a href="#"><img class="svg" src="{{ asset('assets/img/svg/list.svg') }}" alt="list">Personal</a></li>
                                        <li><a href="#"><img class="svg" src="{{ asset('assets/img/svg/list.svg') }}" alt="list">Social</a></li>
                                        <li><a href="#"><img class="svg" src="{{ asset('assets/img/svg/list.svg') }}" alt="list">Promotion</a></li>
                                    </ul>
                                    <div class="btn-add-label" data-trigger="label">
                                        <span class="cursor-true"><img src="{{ asset('assets/img/svg/plus.svg') }}" alt="plus" class="svg">Add New Label</span>
                                        <div class="add-lebel-from">
                                            <form action="#">
                                                <h6>Add New Label</h6>
                                                <input type="text" class="form-control" name="label" Placeholder="Enter label name">
                                                <div class="label-action d-flex button-group">
                                                    <button class="btn btn-primary btn-sm btn-squared">Add Label</button>
                                                    <button class="btn btn-white btn-sm btn-squared label-close" data-trigger="label">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-10 mb-30">
                    <div class="mailbox-container">
                        <div class="mailbar-toggle d-md-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="mailbox-list">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mailbox-top d-flex justify-content-between align-items-center">
                                        <div class="mailbox-top__left">
                                            <ul class="mailbox-top__actions d-flex align-items-center">
                                                <li class="mail-selection checkbox-theme-default custom-checkbox">
                                                    <input class="checkbox" type="checkbox" id="mail-select">
                                                    <label for="mail-select">
                                                        <img class="svg nav-icon" src="{{ asset('assets/img/svg/chevron-down.svg') }}" alt="chevron-down">
                                                    </label>
                                                    <ul class="mail-selection__dropdown">
                                                        <li>
                                                            <a href="#">All</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Read</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Starred</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Unstarred</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="icon-action active" href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Refresh">
                                                        <i class="las la-redo-alt"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="icon-action" href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Archive">
                                                        <img class="svg nav-icon" src="{{ asset('assets/img/svg/archive.svg') }}" alt="archive"></a>
                                                </li>

                                                <li>
                                                    <a class="icon-action" href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Info">
                                                        <img class="svg nav-icon" src="{{ asset('assets/img/svg/alert-octagon.svg') }}" alt="alert-octagon">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="icon-action" href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                                        <img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="icon-action" href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Read">
                                                        <img class="svg" src="{{ asset('assets/img/svg/book-open.svg') }}" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="icon-action" href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Folder">
                                                        <img src="{{ asset('assets/img/svg/folder.svg') }}" alt="folder" class="svg">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mailbox-top__right d-flex align-items-center">
                                            <div class="mailbox-top__search">
                                                <div class="input-container icon-left position-relative">
                                                    <span class="input-icon icon-left">
                                                        <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                                                    </span>
                                                    <input type="text" class="form-control form-control-lg" placeholder="Search mail">
                                                </div>
                                            </div>
                                            <div class="mailbox-top__extra d-flex align-items-center">
                                                <span class="result-perpage">1 - 50 of 235</span>
                                                <div class="mail-sliding-control">
                                                    <a class="icon-action" href="#">
                                                        <i class="la la-angle-left"></i>
                                                    </a>
                                                    <a class="icon-action active" href="#">
                                                        <i class="la la-angle-right"></i>
                                                    </a>
                                                </div>
                                                <a class="icon-action" href="#">
                                                    <img src="{{ asset('assets/img/svg/sliders.svg') }}" alt="sliders" class="svg"></a>
                                                <div class="dropdown">
                                                    <a href="#" class="ellipsis-more" role="button" id="ellipsis-more" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ellipsis-more">
                                                        <a class="dropdown-item" href="#">More One</a>
                                                        <a class="dropdown-item" href="#">More Two</a>
                                                        <a class="dropdown-item" href="#">More Three</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mailbox-list__content">
                                        <div class="mailbox-list__single d-flex justify-content-between ">
                                            <div class="mail-authorBox d-flex">
                                                <div class="checkbox-theme-default custom-checkbox">
                                                    <input class="checkbox" type="checkbox" id="mail-1">
                                                    <label for="mail-1"></label>
                                                </div>
                                                <a href="#" class="star-toggle">
                                                    <i class="lar la-star"></i>
                                                </a>
                                                <span class="author-info">
                                                    <img src="{{ asset('assets/img/author/e1.png') }}" alt="admin author">
                                                    <span class="author-name">Alice Freeman</span>
                                                </span>
                                            </div>
                                            <div class="mail-content">
                                                <div class="mail-content__top">
                                                    <h6 class="mail-title">
                                                        <a href="read-email.html">Email subject lorem ipsum</a>
                                                        <span class="badge badge-transparent badge-round">Inbox</span>
                                                    </h6>
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt...</p>
                                                </div>
                                            </div>
                                            <span class="time-meta">8:30 PM</span>
                                        </div>
                                        <div class="mailbox-list__single d-flex justify-content-between ">
                                            <div class="mail-authorBox d-flex">
                                                <div class="checkbox-theme-default custom-checkbox">
                                                    <input class="checkbox" type="checkbox" id="mail-2">
                                                    <label for="mail-2"></label>
                                                </div>
                                                <a href="#" class="star-toggle stared">
                                                    <i class="lar la-star"></i>
                                                </a>
                                                <span class="author-info">
                                                    <img src="{{ asset('assets/img/author/e1.png') }}" alt="admin author">
                                                    <span class="author-name">Alice Freeman</span>
                                                </span>
                                            </div>
                                            <div class="mail-content">
                                                <div class="mail-content__top">
                                                    <h6 class="mail-title">
                                                        <a href="read-email.html">Email subject lorem ipsum</a>
                                                        <span class="badge badge-transparent badge-round">Inbox</span>
                                                    </h6>
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt...</p>
                                                </div>
                                            </div>
                                            <span class="time-meta">8:30 PM</span>
                                        </div>
                                        <div class="mailbox-list__single d-flex justify-content-between attach-file">
                                            <div class="mail-authorBox d-flex">
                                                <div class="checkbox-theme-default custom-checkbox">
                                                    <input class="checkbox" type="checkbox" id="mail-3">
                                                    <label for="mail-3"></label>
                                                </div>
                                                <a href="#" class="star-toggle">
                                                    <i class="lar la-star"></i>
                                                </a>
                                                <span class="author-info">
                                                    <img src="{{ asset('assets/img/author/e1.png') }}" alt="admin author">
                                                    <span class="author-name">Alice Freeman</span>
                                                </span>
                                            </div>
                                            <div class="mail-content">
                                                <div class="mail-content__top">
                                                    <h6 class="mail-title">
                                                        <a href="read-email.html">Email subject lorem ipsum</a>
                                                        <span class="badge badge-transparent badge-round">Inbox</span>
                                                    </h6>
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt...</p>
                                                </div>
                                                <div class="mail-content__bottom">
                                                    <a href="#" class="mail-attatchment">
                                                        <i class="las la-paperclip"></i>
                                                        <span class="attatched-file">Attached.jpg</span></a>
                                                    <a href="#" class="mail-attatchment">
                                                        <i class="las la-paperclip"></i>
                                                        <span class="attatched-file">Attached.jpg</span></a>
                                                </div>
                                            </div>
                                            <span class="time-meta">8:30 PM</span>
                                        </div>
                                        <div class="mailbox-list__single d-flex justify-content-between ">
                                            <div class="mail-authorBox d-flex">
                                                <div class="checkbox-theme-default custom-checkbox">
                                                    <input class="checkbox" type="checkbox" id="mail-4">
                                                    <label for="mail-4"></label>
                                                </div>
                                                <a href="#" class="star-toggle">
                                                    <i class="lar la-star"></i>
                                                </a>
                                                <span class="author-info">
                                                    <img src="{{ asset('assets/img/author/e1.png') }}" alt="admin author">
                                                    <span class="author-name">Alice Freeman</span>
                                                </span>
                                            </div>
                                            <div class="mail-content">
                                                <div class="mail-content__top">
                                                    <h6 class="mail-title">
                                                        <a href="read-email.html">Email subject lorem ipsum</a>
                                                        <span class="badge badge-transparent badge-round">Inbox</span>
                                                    </h6>
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt...</p>
                                                </div>
                                            </div>
                                            <span class="time-meta">8:30 PM</span>
                                        </div>
                                        <div class="mailbox-list__single d-flex justify-content-between ">
                                            <div class="mail-authorBox d-flex">
                                                <div class="checkbox-theme-default custom-checkbox">
                                                    <input class="checkbox" type="checkbox" id="mail-5">
                                                    <label for="mail-5"></label>
                                                </div>
                                                <a href="#" class="star-toggle">
                                                    <i class="lar la-star"></i>
                                                </a>
                                                <span class="author-info">
                                                    <img src="{{ asset('assets/img/author/e1.png') }}" alt="admin author">
                                                    <span class="author-name">Alice Freeman</span>
                                                </span>
                                            </div>
                                            <div class="mail-content">
                                                <div class="mail-content__top">
                                                    <h6 class="mail-title">
                                                        <a href="read-email.html">Email subject lorem ipsum</a>
                                                        <span class="badge badge-transparent badge-round">Inbox</span>
                                                    </h6>
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt...</p>
                                                </div>
                                            </div>
                                            <span class="time-meta">8:30 PM</span>
                                        </div>
                                        <div class="mailbox-list__single d-flex justify-content-between ">
                                            <div class="mail-authorBox d-flex">
                                                <div class="checkbox-theme-default custom-checkbox">
                                                    <input class="checkbox" type="checkbox" id="mail-6">
                                                    <label for="mail-6"></label>
                                                </div>
                                                <a href="#" class="star-toggle">
                                                    <i class="lar la-star"></i>
                                                </a>
                                                <span class="author-info">
                                                    <img src="{{ asset('assets/img/author/e1.png') }}" alt="admin author">
                                                    <span class="author-name">Alice Freeman</span>
                                                </span>
                                            </div>
                                            <div class="mail-content">
                                                <div class="mail-content__top">
                                                    <h6 class="mail-title">
                                                        <a href="read-email.html">Email subject lorem ipsum</a>
                                                        <span class="badge badge-transparent badge-round">Inbox</span>
                                                    </h6>
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt...</p>
                                                </div>
                                            </div>
                                            <span class="time-meta">8:30 PM</span>
                                        </div>
                                    </div>
                                    <div class="dm-mailCompose dm-mailCompose--position">
                                        <form action="#">
                                            <div class="dm-mailCompose__header d-flex justify-content-between align-items-center">
                                                <h6 class="mailCompose-title">New Message</h6>
                                                <div class="dm-mailCompose__action">
                                                    <a href="#">
                                                        <img src="{{ asset('assets/img/svg/maximize-2.svg') }}" alt="sliders" class="svg">
                                                    </a>
                                                    <a class="compose-close" href="#" data-trigger="compose">
                                                        <img src="{{ asset('assets/img/svg/x.svg') }}" alt="x" class="svg"></a>
                                                </div>
                                            </div>
                                            <div class="dm-mailCompose__body">
                                                <div class="mailCompose-form-content">
                                                    <div class="form-group positon-relative">
                                                        <select name="mail-to" id="mail-to" class="form-control-lg" multiple="multiple">
                                                            <option value="01">demo@example.com</option>
                                                            <option value="02">test@example.com</option>
                                                            <option value="03">xxx@example.com</option>
                                                        </select>
                                                        <span class="input-label">To</span>
                                                    </div>
                                                    <div class="form-group positon-relative">
                                                        <input type="text" class="form-control-lg" name="mail-to" placeholder="Subject">
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea name="message" id="mail-message" class="form-control-lg" placeholder="Type your message..."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dm-mailCompose__footer d-flex justify-content-between align-items-center">
                                                <div class="footer-left d-flex align-items-center">
                                                    <button class="btn btn-md btn-primary">Send</button>
                                                    <a href="#">
                                                        <img class="svg" src="{{ asset('assets/img/svg/paperclip.svg') }}" alt="paperclip"></a>
                                                    <a href="#">
                                                        <img class="svg" src="{{ asset('assets/img/svg/smile.svg') }}" alt="smile"></a>
                                                </div>
                                                <div class="footer-right">
                                                    <a href="#" class="btn-remove">
                                                        <img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt=""></a>
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
        </div>
    </div>
</div>
@endsection