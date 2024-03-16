@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex align-items-center user-member__title mb-30 mt-30">
                <h4 class="text-capitalize">{{ trans('menu.user-add') }}</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="user-info-tab w-100 bg-white global-shadow radius-xl mb-50">
                <div class="ap-tab-wrapper border-bottom ">
                    <ul class="nav px-30 ap-tab-main text-capitalize" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <li class="nav-item">
                            <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-selected="true">
                                <img src="{{ asset('assets/img/svg/user.svg') }}" alt="user" class="svg">personal info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-selected="false">
                                <img src="{{ asset('assets/img/svg/briefcase.svg') }}" alt="briefcase" class="svg">work info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-selected="false">
                                <img src="{{ asset('assets/img/svg/share-2.svg') }}" alt="share-2" class="svg">Social</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade  show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="row justify-content-center">
                            <div class="col-xxl-4 col-10">
                                <div class="mt-sm-40 mb-sm-50 mt-20 mb-20">
                                    <div class="user-tab-info-title mb-sm-40 mb-20 text-capitalize">
                                        <h5 class="fw-500">Personal Information</h5>
                                    </div>
                                    <div class="account-profile d-flex align-items-center mb-4 ">
                                        <div class="ap-img pro_img_wrapper">
                                            <input id="file-upload" type="file" name="fileUpload" class="d-none">
                                            <!-- Profile picture image-->
                                            <label for="file-upload">
                                                <img class="ap-img__main rounded-circle wh-120 bg-lighter d-flex" src="{{ asset('assets/img/author/profile.png') }}" alt="profile">
                                                <span class="cross" id="remove_pro_pic">
                                                    <img src="{{ asset('assets/img/svg/camera.svg') }}" alt="camera" class="svg">
                                                </span>
                                            </label>
                                        </div>
                                        <div class="account-profile__title">
                                            <h6 class="fs-15 ms-20 fw-500 text-capitalize">profile photo</h6>
                                        </div>
                                    </div>
                                    <div class="edit-profile__body">
                                        <form>
                                            <div class="form-group mb-25">
                                                <label for="name1">name</label>
                                                <input type="text" class="form-control" id="name1" placeholder="Duran Clayton">
                                            </div>
                                            <div class="form-group mb-25">
                                                <label for="name2">Email</label>
                                                <input type="email" class="form-control" id="name2" placeholder="sample@email.com">
                                            </div>
                                            <div class="form-group mb-25">
                                                <label for="phoneNumber5">phone number</label>
                                                <input type="tel" class="form-control" id="phoneNumber5" placeholder="+440 2546 5236">
                                            </div>
                                            <div class="form-group mb-25">
                                                <div class="countryOption">
                                                    <label for="countryOption">
                                                        country
                                                    </label>
                                                    <select class="js-example-basic-single js-states form-control" id="countryOption">
                                                        <option value="JAN">event</option>
                                                        <option value="FBR">Venues</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group mb-25">
                                                <div class="cityOption">
                                                    <label for="cityOption">
                                                        city
                                                    </label>
                                                    <select class="js-example-basic-single js-states form-control" id="cityOption">
                                                        <option value="JAN">event</option>
                                                        <option value="FBR">Venues</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group mb-25">
                                                <label for="name3">company name</label>
                                                <input type="text" class="form-control" id="name3" placeholder="Example">
                                            </div>
                                            <div class="form-group mb-25">
                                                <label for="phoneNumber2">website</label>
                                                <input type="email" class="form-control" id="phoneNumber2" placeholder="www.example.com">
                                            </div>
                                            <div class="button-group d-flex pt-sm-25 justify-content-md-end justify-content-start ">


                                                <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize radius-md btn-sm">cancel
                                                </button>







                                                <button class="btn btn-primary btn-default btn-squared text-capitalize radius-md shadow2 btn-sm">Save &amp; Next
                                                </button>





                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="row justify-content-center">
                            <div class="col-xxl-4 col-10">
                                <div class="mt-40 mb-50">
                                    <div class="user-tab-info-title mb-35 text-capitalize">
                                        <h5 class="fw-500">work Information</h5>
                                    </div>
                                    <div class="edit-profile__body">
                                        <form>
                                            <div class="form-group mb-25">
                                                <label for="name4">company name</label>
                                                <input type="text" class="form-control" id="name4" placeholder="Duran Clayton">
                                            </div>
                                            <div class="form-group mb-25">
                                                <label for="phoneNumber1">Department</label>
                                                <input type="text" class="form-control" id="phoneNumber1" placeholder="Design">
                                            </div>
                                            <div class="form-group mb-25">
                                                <label for="phoneNumber">Designation</label>
                                                <input type="text" class="form-control" id="phoneNumber" placeholder="UI Designrt">
                                            </div>
                                            <div class="form-group mb-25 form-group-calender">
                                                <label for="datepicker">Hiring Date</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" id="datepicker" placeholder="January 20, 2018">
                                                    <a href="#"><img class="svg" src="{{ asset('assets/img/svg/chevron-right.svg') }}" alt="chevron-right"></a>
                                                </div>
                                            </div>
                                            <div class="form-group mb-25 status-radio">
                                                <label class="mb-15" for="phoneNumber2">status</label>
                                                <div class="d-flex">
                                                    <div class="radio-horizontal-list d-flex flex-wrap">


                                                        <div class="radio-theme-default custom-radio ">
                                                            <input class="radio" type="radio" name="radio-optional" value=0 id="radio-hl1">
                                                            <label for="radio-hl1">
                                                                <span class="radio-text">status</span>
                                                            </label>
                                                        </div>




                                                        <div class="radio-theme-default custom-radio ">
                                                            <input class="radio" type="radio" name="radio-optional" value=0 id="radio-hl2">
                                                            <label for="radio-hl2">
                                                                <span class="radio-text">Deactivated</span>
                                                            </label>
                                                        </div>




                                                        <div class="radio-theme-default custom-radio ">
                                                            <input class="radio" type="radio" name="radio-optional" value=0 id="radio-hl3">
                                                            <label for="radio-hl3">
                                                                <span class="radio-text">bloked</span>
                                                            </label>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-group d-flex pt-20 justify-content-md-end justify-content-start">


                                                <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize radius-md">cancel
                                                </button>







                                                <button class="btn btn-primary btn-default btn-squared text-capitalize radius-md shadow2">Save &amp; Next
                                                </button>





                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div class="row justify-content-center">
                            <div class="col-xxl-4 col-10">
                                <div class="user-social-profile mt-40 mb-50">
                                    <div class="user-tab-info-title mb-40 text-capitalize">
                                        <h5>social profiles</h5>
                                    </div>
                                    <div class="edit-profile__body">
                                        <form>
                                            <div class=" mb-30">
                                                <label for="socialUrl">facebook</label>
                                                <div class="input-group flex-nowrap">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-facebook border-facebook text-white wh-44 radius-xs justify-content-center" id="addon-wrapping1">
                                                            <i class="lab la-facebook-f fs-18"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control form-control--social" placeholder="Url" aria-label="Username" aria-describedby="addon-wrapping1" id="socialUrl">
                                                </div>
                                            </div>
                                            <div class=" mb-30">
                                                <label for="twitterUrl">twitter</label>
                                                <div class="input-group flex-nowrap">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-twitter border-twitter text-white wh-44 radius-xs justify-content-center" id="addon-wrapping2">
                                                            <i class="lab la-twitter fs-18"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control form-control--social" placeholder="@Username" aria-label="Username" aria-describedby="addon-wrapping2" id="twitterUrl">
                                                </div>
                                            </div>
                                            <div class=" mb-30">
                                                <label for="webUrl">Website</label>
                                                <div class="input-group flex-nowrap">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-ruby border-ruby text-white wh-44 radius-xs justify-content-center" id="addon-wrapping3">
                                                            <i class="las la-basketball-ball fs-18"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control form-control--social" placeholder="Url" aria-label="Username" aria-describedby="addon-wrapping3" id="webUrl">
                                                </div>
                                            </div>
                                            <div class=" mb-30">
                                                <label for="instagramUrl">instagram</label>
                                                <div class="input-group flex-nowrap">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-instagram border-instagram text-white wh-44 radius-xs justify-content-center" id="addon-wrapping4">
                                                            <i class="lab la-instagram fs-18"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control form-control--social" aria-describedby="addon-wrapping4" placeholder="Url" id="instagramUrl">
                                                </div>
                                            </div>
                                            <div class=" mb-30">
                                                <label for="githubUrl">github</label>
                                                <div class="input-group flex-nowrap">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-dark border-dark  text-white wh-44 radius-xs justify-content-center" id="addon-wrapping5">
                                                            <i class="lab la-github fs-18"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control form-control--social" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping5" id="githubUrl">
                                                </div>
                                            </div>
                                            <div class=" mb-30">
                                                <label for="mediumUrl">medium</label>
                                                <div class="input-group flex-nowrap">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-dark border-dark text-white wh-44 radius-xs justify-content-center" id="addon-wrapping6">
                                                            <i class="lab la-medium fs-18"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control form-control--social" placeholder="Username" aria-label="medium" aria-describedby="addon-wrapping6" id="mediumUrl">
                                                </div>
                                            </div>
                                            <div class="button-group d-flex pt-20 justify-content-md-end justify-content-start">


                                                <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize radius-md">back
                                                </button>







                                                <button class="btn btn-primary btn-default btn-squared text-capitalize radius-md shadow2">Save profile
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
@endsection