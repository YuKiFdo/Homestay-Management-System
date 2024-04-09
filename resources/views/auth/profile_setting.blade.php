@section('title', $title)
@section('description', $description)
@extends('layout.app')
@section('content')
    <div class="profile-setting ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.social-profile-setting') }}</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        {{ trans('menu.social-profile-setting') }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-5">
                    <div class="card mb-25">
                        <div class="card-body text-center p-0">
                            <div
                                class="account-profile border-bottom pt-25 px-25 pb-0 flex-column d-flex align-items-center ">
                                <div class="ap-img mb-20 pro_img_wrapper">
                                    <img class="ap-img__main2 rounded-circle wh-120"
                                        src="{{ asset('storage/' . Auth::user()->profilepic) }}" alt="profile">
                                </div>
                                <div class="ap-nameAddress pb-3">
                                    <h5 class="ap-nameAddress__title">{{ Auth::user()->name }}</h5>
                                    <p class="ap-nameAddress__subTitle fs-14 m-0">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                            <div class="ps-tab p-20 pb-25">
                                <div class="nav flex-column text-start" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                        href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                        aria-selected="true">
                                        <img src="{{ asset('assets/img/svg/user.svg') }}" alt="user" class="svg">Edit
                                        profile</a>
                                    <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                        href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                        aria-selected="false">
                                        <img src="{{ asset('assets/img/svg/key.svg') }}" alt="key"
                                            class="svg">change password</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-9 col-lg-8 col-sm-7">
                    <div class="as-cover">
                        <div class="as-cover__imgWrapper">
                        </div>
                    </div>
                    <div class="mb-50">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade  show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="edit-profile mt-25">
                                    <div class="card">
                                        <div class="card-header px-sm-25 px-3">
                                            <div class="edit-profile__title">
                                                <h6>Edit Profile</h6>
                                                <span class="fs-13 color-light fw-400">Set up your personal
                                                    information</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <div class="col-xxl-6 col-lg-8 col-sm-10">
                                                    <div class="edit-profile__body mx-lg-20">
                                                        <form method="POST"
                                                            action="{{ route('application.profile.update', app()->getLocale()) }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div
                                                                class="account-profile border-bottom pt-25 px-25 pb-0 flex-column d-flex align-items-center ">
                                                                <div class="ap-img mb-20 pro_img_wrapper">
                                                                    <input id="file-upload" type="file" name="profilepic"
                                                                        class="d-none">
                                                                          {{-- want to show preview of uploaded pic --}}
                                                                    <label for="file-upload">

                                                                        <img class="ap-img__main rounded-circle wh-120"
                                                                            src="{{ asset('storage/' . Auth::user()->profilepic) }}"
                                                                            alt="profile">
                                                                        <span class="cross" id="remove_pro_pic">
                                                                            <img src="{{ asset('assets/img/svg/camera.svg') }}"
                                                                                alt="camera" class="svg">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            @if ($errors->has('profilepic'))
                                                                <p class="text-danger">{{ $errors->first('profilepic') }}</p>
                                                            @endif
                                                            <div class="form-group mb-20">
                                                                <label for="names">name</label>
                                                                <input type="text" class="form-control" name="name"
                                                                    id="names" value="{{ Auth::user()->name }}">
                                                                @if ($errors->has('name'))
                                                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                                                @endif
                                                            </div>

                                                            <div class="button-group d-flex flex-wrap pt-30 mb-15">
                                                                <button
                                                                    class="btn btn-primary btn-default btn-squared me-15 text-capitalize">update
                                                                    profile
                                                                </button>
                                                                <button
                                                                    class="btn btn-light btn-default btn-squared fw-400 text-capitalize">cancel
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <div class="edit-profile mt-25">
                                    <div class="card">
                                        <div class="card-header  px-sm-25 px-3">
                                            <div class="edit-profile__title">
                                                <h6>change password</h6>
                                                <span class="fs-13 color-light fw-400">Change or reset your account
                                                    password</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <div class="col-xxl-6 col-lg-8 col-sm-10">
                                                    <div class="edit-profile__body mx-lg-20">
                                                        <form method="POST"
                                                            action="{{ route('application.profile.password', app()->getLocale()) }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="form-group mb-20">
                                                                <label for="name">old passowrd</label>
                                                                <input type="text" class="form-control"
                                                                    id="oldpassword" name="oldpassword">
                                                            </div>
                                                            <div class="form-group mb-1">
                                                                <label for="password-field">new password</label>
                                                                <div class="position-relative">
                                                                    <input id="newpassword-field" type="password"
                                                                        class="form-control pe-50" name="newpassword">
                                                                    <span
                                                                        class="fa fa-fw fa-eye-slash text-light fs-16 field-icon toggle-password2"></span>
                                                                </div>
                                                                <small id="passwordHelpInline"
                                                                    class="text-light fs-13">Minimum
                                                                    6
                                                                    characters
                                                                </small>
                                                            </div>
                                                            <div class="form-group mb-1">
                                                                <label for="password-field">confirm password</label>
                                                                <div class="position-relative">
                                                                    <input id="confirmpassword-field" type="password"
                                                                        class="form-control pe-50" name="confrimpassword">
                                                                    <span
                                                                        class="fa fa-fw fa-eye-slash text-light fs-16 field-icon toggle-password2"></span>
                                                                </div>
                                                            </div>
                                                            <div class="button-group d-flex flex-wrap pt-45 mb-35">
                                                                <button
                                                                    class="btn btn-primary btn-default btn-squared me-15 text-capitalize">Save
                                                                    Changes
                                                                </button>
                                                                <button
                                                                    class="btn btn-light btn-default btn-squared fw-400 text-capitalize">cancel
                                                                </button>
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
            </div>
        </div>
    </div>
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var successData = {!! json_encode(session('success')) !!};
                showMsg(successData);
            });
        </script>
    @endif
    <div class="message-wrapper"></div>

    <script>
        document.getElementById('file-upload').addEventListener('change', function(event) {
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = function(e) {
                document.querySelector('.ap-img__main').setAttribute('src', e.target.result);
            };
            reader.readAsDataURL(file);
        });
    </script>
@endsection
