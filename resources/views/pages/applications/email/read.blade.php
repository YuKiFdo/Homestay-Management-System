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
                        <h4 class="text-capitalize breadcrumb-title">{{ trans('page_title.read_email') }}</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>{{ trans('menu.email-menu-title') }}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ trans('page_title.read_email') }}</li>
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
                                    <i class="uil uil-times"></i>
                                </a>
                                <div class="card-body">
                                    <div class="d-flex align-content-center content-center px-15">
                                        <a href="#" class="btn-compose btn btn-md btn-primary btn-shadow-primary" data-trigger="compose"> <img src="{{ asset('assets/img/svg/plus.svg') }}" alt="plus" class="svg"> Compose</a>
                                    </div>
                                    <ul class="mail-list">
                                        <li><a class="active" href="#"><img src="{{ asset('assets/img/svg/inbox.svg') }}" alt="inbox" class="svg">Inbox <span class="badge badge-primary badge-transparent">5</span></a></li>
                                        <li><a href="#"><img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">Started</a></li>
                                        <li><a href="#"><img src="{{ asset('assets/img/svg/send.svg') }}" alt="send" class="svg">Send</a></li>
                                        <li><a href="#"><i class="uil uil-edit"></i>Draft <span class="badge badge-primary badge-transparent">12</span></a></li>
                                        <li><a href="#"><img src="{{ asset('assets/img/svg/alert-octagon.svg') }}" alt="alert-octagon" class="svg">Spam</a></li>
                                        <li><a href="#"><img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">Trash</a></li>
                                    </ul>
                                    <span class="mail-list-title mt-35">Lable</span>
                                    <ul class="mail-list mt-0">
                                        <li><a href="#"><img src="{{ asset('assets/img/svg/list.svg') }}" alt="list" class="svg">Personal</a></li>
                                        <li><a href="#"><img src="{{ asset('assets/img/svg/list.svg') }}" alt="list" class="svg">Social</a></li>
                                        <li><a href="#"><img src="{{ asset('assets/img/svg/list.svg') }}" alt="list" class="svg">Promotion</a></li>
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
                <div class="col-lg-10">
                    <div class="mailbar-toggle d-md-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="mailbox-container mb-30">
                        <div class="mail-read-wrapper">
                            <div class="card">
                                <div class="card-body">

                                    <div class="mailbox-top d-flex justify-content-between align-items-center">
                                        <div class="mailbox-top__left">
                                            <ul class="mailbox-top__actions d-flex align-items-center">
                                                <li class="me-0">
                                                    <a class="fs-15 color-gray" href="inbox.html">
                                                        <i class="las la-arrow-left wh-38 d-flex align-items-center justify-content-start"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="icon-action active" href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Archive">
                                                        <img src="{{ asset('assets/img/svg/archive.svg') }}" alt="archive" class="svg"></a>
                                                </li>
                                                <li>
                                                    <a class="icon-action" href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Info">
                                                        <img src="{{ asset('assets/img/svg/alert-octagon.svg') }}" alt="alert-octagon" class="svg  nav-icon">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="icon-action" href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg nav-icon"></a>
                                                </li>
                                                <li>
                                                    <a class="icon-action" href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Read">
                                                        <img src="{{ asset('assets/img/svg/book-open.svg') }}" alt="book-open" class="svg nav-icon">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="icon-action" href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Folder">
                                                        <img src="{{ asset('assets/img/svg/folder.svg') }}" alt="folder" class="svg nav-icon">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mailbox-top__right d-flex align-items-center">
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
                                    <div class="mail-read-content">
                                        <div class="mail-details">
                                            <div class="mail-details__top d-flex justify-content-between">
                                                <h2 class="mail-details__title">
                                                    <span>Email subject lorem ipsum</span>
                                                    <span class="badge badge-primary badge-transparent badge-round">Inbox</span>
                                                </h2>
                                                <div class="mail-details__action d-flex">
                                                    <a href="#" class="icon-action">
                                                        <div class="double-icon d-flex flex-column">
                                                            <img src="{{ asset('assets/img/svg/chevron-up.svg') }}" alt="chevron-up" class="svg">
                                                            <img src="{{ asset('assets/img/svg/chevron-down.svg') }}" alt="chevron-down" class="svg">
                                                        </div>
                                                    </a>
                                                    <a href="#" class="icon-action">
                                                        <img src="{{ asset('assets/img/svg/printer.svg') }}" alt="printer" class="svg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="mail-details__content mdc media">
                                                <div class="mdc__left">
                                                    <img src="{{ asset('assets/img/author/3.jpg') }}" alt="mail author">
                                                </div>
                                                <div class="mdc__right media-body">
                                                    <div class="mdc__head d-flex justify-content-between">
                                                        <div class="mdc__author media">
                                                            <div class="author-info">
                                                                <h6>Alice Freeman</h6>
                                                                <a class="mail-info-btn">To me
                                                                    <img src="{{ asset('assets/img/svg/chevron-down.svg') }}" alt="chevron-down" class="svg">
                                                                    <ul class="mail-info">
                                                                        <li>
                                                                            <span class="mail-info__label">from:</span>
                                                                            <span class="mail-info__text">sample@gmail.com</span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="mail-info__label">to:</span>
                                                                            <span class="mail-info__text">sample2@gmail.com</span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="mail-info__label">cc:</span>
                                                                            <span class="mail-info__text">example@gmail.com</span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="mail-info__label">date:</span>
                                                                            <span class="mail-info__text">Jan 2,2020,5:22 PM</span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="mail-info__label">Subject:</span>
                                                                            <span class="mail-info__text">Late Entry</span>
                                                                        </li>
                                                                    </ul>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="mdc__excerpt">
                                                            <img src="{{ asset('assets/img/svg/paperclip.svg') }}" alt="paperclip" class="svg">
                                                            <span class="date-meta">Jan 2, 2020, 5:22 PM</span>
                                                            <a href="#">
                                                                <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg"></a>
                                                            <a href="#">
                                                                <img src="{{ asset('assets/img/svg/corner-up-left.svg') }}" alt="corner-up-left" class="svg"></a>
                                                            <a href="#" class="dropdownMenu">
                                                                <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg"></a>
                                                        </div>
                                                    </div>
                                                    <div class="mdc__body">
                                                        <h6>Hello Adam,</h6>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                                                            ulabore etdolore magna aliquyam erat, sed diam voluptua. Atvero eos etaccusam justo duo dolores et
                                                            ea rebum. Stet clita kasd gubergren nosea takimata sanctus est Lorem ipsum dolor amet. Lorem ipsum
                                                            dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                                                            dolore magna aliquyam erat, sed diam voluptua.
                                                        </p>
                                                        <div class="mail-signature">
                                                            <span>Best regards</span>
                                                            <p class="author-name">Alice Freeman</p>
                                                        </div>
                                                    </div>
                                                    <div class="mdc__footer">
                                                        <div class="mail-attatched d-flex">
                                                            <div class="mail-attatched__item">
                                                                <figure class="mb-0">
                                                                    <div class="mail-attatched__image mb-3">
                                                                        <img src="{{ asset('assets/img/mail/1.png') }}" alt="attatched Image">
                                                                        <div class="mail-attatched__hover">
                                                                            <a href="#" class="btn-mail">
                                                                                <img src="{{ asset('assets/img/svg/download.svg') }}" alt="download" class="svg"></a>
                                                                            <a href="#" class="btn-mail">
                                                                                <img src="{{ asset('assets/img/svg/share-2.svg') }}" alt="share-2" class="svg">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <figcaption>
                                                                        <h6 class="file-name">Attatched.jpg</h6>
                                                                        <span class="file-size">256.5 KB</span>
                                                                    </figcaption>
                                                                </figure>
                                                            </div>
                                                            <div class="mail-attatched__item">
                                                                <figure class="mb-0">
                                                                    <div class="mail-attatched__image mb-3">
                                                                        <img src="{{ asset('assets/img/mail/2.png') }}" alt="attatched Image">
                                                                        <div class="mail-attatched__hover">
                                                                            <a href="#" class="btn-mail">
                                                                                <img src="{{ asset('assets/img/svg/download.svg') }}" alt="download" class="svg"></a>
                                                                            <a href="#" class="btn-mail">
                                                                                <img src="{{ asset('assets/img/svg/share-2.svg') }}" alt="share-2" class="svg"></a>
                                                                        </div>
                                                                    </div>
                                                                    <figcaption>
                                                                        <h6 class="file-name">Attatched.jpg</h6>
                                                                        <span class="file-size">256.5 KB</span>
                                                                    </figcaption>
                                                                </figure>
                                                            </div>
                                                            <div class="mail-attatched__item">
                                                                <figure class="mb-0">
                                                                    <div class="mail-attatched__image mb-3">
                                                                        <img src="{{ asset('assets/img/mail/3.png') }}" alt="attatched Image">
                                                                        <div class="mail-attatched__hover">
                                                                            <a href="#" class="btn-mail">
                                                                                <img src="{{ asset('assets/img/svg/download.svg') }}" alt="download" class="svg"></a>
                                                                            <a href="#" class="btn-mail">
                                                                                <img src="{{ asset('assets/img/svg/share-2.svg') }}" alt="share-2" class="svg"></a>
                                                                        </div>
                                                                    </div>
                                                                    <figcaption>
                                                                        <h6 class="file-name">Attatched.jpg</h6>
                                                                        <span class="file-size">256.5 KB</span>
                                                                    </figcaption>
                                                                </figure>
                                                            </div>
                                                            <div class="mail-attatched__item">
                                                                <figure class="mb-0">
                                                                    <div class="mail-attatched__image mb-3">
                                                                        <img src="{{ asset('assets/img/mail/4.png') }}" alt="attatched Image">
                                                                        <div class="mail-attatched__hover">
                                                                            <a href="#" class="btn-mail">
                                                                                <img src="{{ asset('assets/img/svg/download.svg') }}" alt="download" class="svg"></a>
                                                                            <a href="#" class="btn-mail">
                                                                                <img src="{{ asset('assets/img/svg/share-2.svg') }}" alt="share-2" class="svg"></a>
                                                                        </div>
                                                                    </div>
                                                                    <figcaption>
                                                                        <h6 class="file-name">Attatched.jpg</h6>
                                                                        <span class="file-size">256.5 KB</span>
                                                                    </figcaption>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mail-reply">
                                            <div class="mail-reply__single">
                                                <div class="mail-details__content mdc media">
                                                    <div class="mdc__left">
                                                        <img src="{{ asset('assets/img/author/3.jpg') }}" alt="mail author">
                                                    </div>
                                                    <div class="mdc__right media-body">
                                                        <div class="mdc__head d-flex justify-content-between">
                                                            <div class="mdc__author media">
                                                                <div class="author-info">
                                                                    <h6>Alice Freeman</h6>
                                                                </div>
                                                            </div>
                                                            <div class="mdc__excerpt">
                                                                <span class="date-meta">Jan 2, 2020, 5:22 PM</span>
                                                                <a href="#">
                                                                    <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg"></a>
                                                                <a href="#">
                                                                    <img src="{{ asset('assets/img/svg/corner-up-left.svg') }}" alt="corner-up-left" class="svg"></a>
                                                                <a href="#" class="dropdownMenu">
                                                                    <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg"></a>
                                                            </div>
                                                        </div>
                                                        <div class="mdc__body">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor inviduntLorem
                                                                ipsum dolor...
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mail-reply__action d-flex">
                                                <a href="#" class="btn btn-outline-lighten btn-md"><img src="{{ asset('assets/img/svg/corner-up-left.svg') }}" alt="corner-up-left" class="svg">Reply</a>
                                                <a href="#" class="btn btn-outline-lighten btn-md"><img src="{{ asset('assets/img/svg/corner-up-right.svg') }}" alt="corner-up-right" class="svg">Forword</a>
                                            </div>
                                            <div class="mail-reply-box media">
                                                <figure>
                                                    <img src="{{ asset('assets/img/reply-1.png') }}" alt="Reply Author">
                                                </figure>
                                                <div class="mail-reply-inner media-body">
                                                    <div class="reply-form">
                                                        <form action="#">
                                                            <div class="mailCompose-form-content">
                                                                <div class="form-group positon-relative">
                                                                    <span class="input-label">To</span>
                                                                    <select name="reply-to" id="reply-to" class="form-control-lg" multiple="multiple">
                                                                        <option value="01">demo@example.com</option>
                                                                        <option value="02">test@example.com</option>
                                                                        <option value="03">xxx@example.com</option>
                                                                    </select>
                                                                    <span class="mail-cc">Cc</span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea name="message" id="mail-reply-message" class="form-control-lg" placeholder="Type your message..."></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="reply-form__action d-flex justify-content-between align-items-center">
                                                                <div class="reply-form__left d-flex align-items-center">
                                                                    <button class="btn btn-md btn-primary btn-send">Send</button>
                                                                    <a href="#">
                                                                        <img src="{{ asset('assets/img/svg/paperclip.svg') }}" alt="paperclip" class="svg"></a>
                                                                    <a href="#">
                                                                        <img src="{{ asset('assets/img/svg/smile.svg') }}" alt="smile" class="svg"></a>
                                                                </div>
                                                                <div class="reply-form__right">
                                                                    <a href="#" class="btn-remove">
                                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dm-mailCompose dm-mailCompose--position">
                                        <form action="#">
                                            <div class="dm-mailCompose__header d-flex justify-content-between align-items-center">
                                                <h6 class="mailCompose-title">New Message</h6>
                                                <div class="dm-mailCompose__action">
                                                    <a href="#">
                                                        <img src="{{ asset('assets/img/svg/maximize-2.svg') }}" alt="maximize-2" class="svg">
                                                    </a>
                                                    <a class="compose-close" href="#" data-trigger="compose">
                                                        <i class="uil uil-times"></i></a>
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
                                                        <img src="{{ asset('assets/img/svg/paperclip.svg') }}" alt="paperclip" class="svg"></a>
                                                    <a href="#">
                                                        <img src="{{ asset('assets/img/svg/smile.svg') }}" alt="smile" class="svg"></a>
                                                </div>
                                                <div class="footer-right">
                                                    <a href="#" class="btn-remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
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