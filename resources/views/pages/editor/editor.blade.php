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
                        <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.editor-menu-title') }}</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.editor-menu-title') }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="bg-white mb-25 rounded-xl">
                        <div class="reply-form pt-0">
                            <form action="#">
                                <div class="mailCompose-form-content">
                                    <div class="form-group">
                                        <textarea name="message" id="mail-reply-message2" class="form-control-lg" placeholder="Type your message..."></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="bg-white mb-25 rounded-xl">
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
                <div class="col-lg-12">
                    <div class="bg-white mb-25 rounded-xl">
                        <div class="dm-mailCompose ">
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
@endsection