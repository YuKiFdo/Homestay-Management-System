@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content notification-modal-box">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-notification') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-notification') }}</li>
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
                        <button class="btn btn-primary btn-sm btn-squired btn-toast notification-modal-box__btn" data-toastType="default">Open the Notification Box</button>
                    </div>
                </div>
                <!-- ends: .card -->
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Duration</h6>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary btn-sm btn-squired btn-toast notification-modal-box__btn" data-toastType="default" data-duration="5000">Open the Notification Box</button>
                    </div>
                </div>
                <!-- ends: .card -->
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Custom Close</h6>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary btn-sm btn-squired btn-toast notification-modal-box__btn" data-toastType="default" data-customclose="true" data-duration="8000">Open the Notification Box</button>
                    </div>
                </div>
                <!-- ends: .card -->
            </div>
            <!-- ends: .col-lg-6 -->
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card card-default card-md">
                        <div class="card-header">
                            <h6>With Icon</h6>
                        </div>
                        <div class="card-body">
                            <div class="button-group flex-wrap">
                                <button class="btn btn-outline-lighten btn-outline-lighten__height fw-400 btn-toast" data-toastType="info" data-toastIcon="info-circle">Info</button>
                                <button class="btn btn-outline-lighten btn-outline-lighten__height fw-400 btn-toast" data-toastType="success" data-toastIcon="check-circle">Success</button>
                                <button class="btn btn-outline-lighten btn-outline-lighten__height fw-400 btn-toast" data-toastType="danger" data-toastIcon="times-circle">Error</button>
                                <button class="btn btn-outline-lighten btn-outline-lighten__height fw-400 btn-toast" data-toastType="warning" data-toastIcon="exclamation-circle">Warning</button>
                            </div>
                        </div>
                    </div>
                    <!-- ends: .card -->

                </div>
                <!-- ends: .card -->
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Placement</h6>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-end">
                            <div class="col-12 mb-2">
                                <div class="notification-placement-wrap d-flex align-items-center">
                                    <div class="dm-select">
                                        <select name="noti-placement" id="noti-placement" class="form-control">
                                            <option value="tl">Top Left</option>
                                            <option value="tr">Top Right</option>
                                            <option value="bl">Bottom Left</option>
                                            <option value="br">Bottom Right</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-primary btn-sm btn-squired btn-toast notification-modal-box__btn" data-toastType="default">Open the Notification Box</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ends: .card -->
            </div>
            <!-- ends: .col-lg-6 -->
        </div>
    </div>
</div>
<!-- ends: .dm-page-content -->

<div class="notification-wrapper top-left"></div>
@endsection