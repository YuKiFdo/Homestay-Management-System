@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="contact-breadcrumb">
                <div class="breadcrumb-main add-contact justify-content-sm-between ">
                    <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                        <div class="d-flex align-items-center add-contact__title justify-content-center me-sm-25">
                            <h4 class="text-capitalize fw-500 breadcrumb-title">{{ trans('menu.contact-list') }}</h4>
                            <span class="sub-title ms-sm-25 ps-sm-25"></span>
                        </div>
                        <form action="/" class="d-flex align-items-center add-contact__form my-sm-0 my-2">
                            <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                            <input class="form-control me-sm-2 border-0 box-shadow-none" type="search" placeholder="Search by Name" aria-label="Search">
                        </form>
                    </div>
                    <div class="action-btn">
                        <a href="#" class="btn px-15 btn-primary" data-bs-toggle="modal" data-bs-target="#add-contact">
                            <i class="las la-plus fs-16"></i>Add New
                        </a>
                        <div class="modal fade add-contact" id="add-contact" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content radius-xl">
                                    <div class="modal-header">
                                        <h6 class="modal-title fw-500" id="staticBackdropLabel">Contact Information</h6>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <i class="uil uil-times"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="add-new-contact">
                                            <form action="/">
                                                <div class="form-group mb-20">
                                                    <label>Name:</label>
                                                    <input type="text" class="form-control form-control-lg" placeholder="Your Name">
                                                </div>
                                                <div class="form-group mb-20">
                                                    <label>Email Address:</label>
                                                    <input type="text" class="form-control form-control-lg" placeholder="Email Address">
                                                </div>
                                                <div class="form-group mb-20">
                                                    <label>Phone Number:</label>
                                                    <input type="text" class="form-control form-control-lg" placeholder="Phone Number">
                                                </div>
                                                <div class="form-group mb-20">
                                                    <label>Position:</label>
                                                    <input type="text" class="form-control form-control-lg" placeholder="Position">
                                                </div>
                                                <div class="form-group mb-20">
                                                    <label>Company Name:</label>
                                                    <input type="text" class="form-control form-control-lg" placeholder="Company Name">
                                                </div>
                                                <div class="button-group d-flex pt-20">
                                                    <button class="btn btn-primary btn-default btn-squared ">add new Contact
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
    <div class="row">
        <div class="col-12">
            <div class="contact-list-wrap mb-25">
                <div class="contact-list bg-white radius-xl w-100">
                    <div class="table-responsive">
                        <table class="table mb-0 table-borderless table-rounded">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="d-flex align-items-center">
                                            <div class="custom-checkbox  check-all">
                                                <input class="checkbox" type="checkbox" id="check-3">
                                                <label for="check-3">
                                                    <span class="checkbox-text userDatatable-title">Name</span>
                                                </label>
                                            </div>
                                        </div>
                                    </th>
                                    <th class="c-email">
                                        <span>emaill</span>
                                    </th>
                                    <th class="c-company">
                                        <span>company</span>
                                    </th>
                                    <th class="c-position">
                                        <span class="">position</span>
                                    </th>
                                    <th class="c-phone">
                                        <span class="">Phone</span>
                                    </th>
                                    <th class="c-action">
                                        <span class="float-right"></span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="contact-item d-flex align-items-center">
                                            <div class="contact-personal-wrap">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-c-1">
                                                            <label for="check-grp-c-1"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="contact-personal-info d-flex">
                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url({{ asset('assets/img/tm6.png') }}); background-size: cover;"></a>
                                                <div class="contact_title">
                                                    <h6>
                                                        <a href="#">Kellie Marquot</a>
                                                    </h6>
                                                    <span class="location">San Francisco, CA</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="email">marshall@yahoo.com</span>
                                    </td>
                                    <td>
                                        <span class="com-name">Business Development</span>
                                    </td>
                                    <td>
                                        <span class="position">Web Developer</span>
                                    </td>
                                    <td>
                                        <span class="email">+1 (861) 550-2796</span>
                                    </td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#" class="">
                                                <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                            </a>
                                            <div class="dropdown dropdown-click">
                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                </button>
                                                <div class="dropdown-default dropdown-menu">
                                                    <a class="dropdown-item" href="#">view</a>
                                                    <a class="dropdown-item" href="#">edit</a>
                                                    <a class="dropdown-item" href="#">delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="contact-item d-flex align-items-center">
                                            <div class="contact-personal-wrap">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-c-2">
                                                            <label for="check-grp-c-2"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="contact-personal-info d-flex">
                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url({{ asset('assets/img/tm1.png') }}); background-size: cover;"></a>
                                                <div class="contact_title">
                                                    <h6>
                                                        <a href="#">Kellie Marquot</a>
                                                    </h6>
                                                    <span class="location">San Francisco, CA</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="email">marshall@yahoo.com</span>
                                    </td>
                                    <td>
                                        <span class="com-name">Business Development</span>
                                    </td>
                                    <td>
                                        <span class="position">Web Developer</span>
                                    </td>
                                    <td>
                                        <span class="email">+1 (861) 550-2796</span>
                                    </td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#" class="active ">
                                                <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                            </a>
                                            <div class="dropdown dropdown-click">
                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                </button>
                                                <div class="dropdown-default dropdown-menu">
                                                    <a class="dropdown-item" href="#">view</a>
                                                    <a class="dropdown-item" href="#">edit</a>
                                                    <a class="dropdown-item" href="#">delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="contact-item d-flex align-items-center">
                                            <div class="contact-personal-wrap">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-c-3">
                                                            <label for="check-grp-c-3"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="contact-personal-info d-flex">
                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url({{ asset('assets/img/tm2.png') }}); background-size: cover;"></a>
                                                <div class="contact_title">
                                                    <h6>
                                                        <a href="#">Kellie Marquot</a>
                                                    </h6>
                                                    <span class="location">San Francisco, CA</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="email">marshall@yahoo.com</span>
                                    </td>
                                    <td>
                                        <span class="com-name">Business Development</span>
                                    </td>
                                    <td>
                                        <span class="position">Web Developer</span>
                                    </td>
                                    <td>
                                        <span class="email">+1 (861) 550-2796</span>
                                    </td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#" class="">
                                                <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                            </a>
                                            <div class="dropdown dropdown-click">
                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                </button>
                                                <div class="dropdown-default dropdown-menu">
                                                    <a class="dropdown-item" href="#">view</a>
                                                    <a class="dropdown-item" href="#">edit</a>
                                                    <a class="dropdown-item" href="#">delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="contact-item d-flex align-items-center">
                                            <div class="contact-personal-wrap">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-c-4">
                                                            <label for="check-grp-c-4"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="contact-personal-info d-flex">
                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url({{ asset('assets/img/tm3.png') }}); background-size: cover;"></a>
                                                <div class="contact_title">
                                                    <h6>
                                                        <a href="#">Kellie Marquot</a>
                                                    </h6>
                                                    <span class="location">San Francisco, CA</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="email">marshall@yahoo.com</span>
                                    </td>
                                    <td>
                                        <span class="com-name">Business Development</span>
                                    </td>
                                    <td>
                                        <span class="position">Web Developer</span>
                                    </td>
                                    <td>
                                        <span class="email">+1 (861) 550-2796</span>
                                    </td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#" class="active ">
                                                <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                            </a>
                                            <div class="dropdown dropdown-click">
                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                </button>
                                                <div class="dropdown-default dropdown-menu">
                                                    <a class="dropdown-item" href="#">view</a>
                                                    <a class="dropdown-item" href="#">edit</a>
                                                    <a class="dropdown-item" href="#">delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="contact-item d-flex align-items-center">
                                            <div class="contact-personal-wrap">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-c-5">
                                                            <label for="check-grp-c-5"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="contact-personal-info d-flex">
                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url({{ asset('assets/img/tm4.png') }}); background-size: cover;"></a>
                                                <div class="contact_title">
                                                    <h6>
                                                        <a href="#">Kellie Marquot</a>
                                                    </h6>
                                                    <span class="location">San Francisco, CA</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="email">marshall@yahoo.com</span>
                                    </td>
                                    <td>
                                        <span class="com-name">Business Development</span>
                                    </td>
                                    <td>
                                        <span class="position">Web Developer</span>
                                    </td>
                                    <td>
                                        <span class="email">+1 (861) 550-2796</span>
                                    </td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#" class="">
                                                <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                            </a>
                                            <div class="dropdown dropdown-click">
                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                </button>
                                                <div class="dropdown-default dropdown-menu">
                                                    <a class="dropdown-item" href="#">view</a>
                                                    <a class="dropdown-item" href="#">edit</a>
                                                    <a class="dropdown-item" href="#">delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="contact-item d-flex align-items-center">
                                            <div class="contact-personal-wrap">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-c-6">
                                                            <label for="check-grp-c-6"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="contact-personal-info d-flex">
                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url({{ asset('assets/img/tm5.png') }}); background-size: cover;"></a>
                                                <div class="contact_title">
                                                    <h6>
                                                        <a href="#">Kellie Marquot</a>
                                                    </h6>
                                                    <span class="location">San Francisco, CA</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="email">marshall@yahoo.com</span>
                                    </td>
                                    <td>
                                        <span class="com-name">Business Development</span>
                                    </td>
                                    <td>
                                        <span class="position">Web Developer</span>
                                    </td>
                                    <td>
                                        <span class="email">+1 (861) 550-2796</span>
                                    </td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#" class="active ">
                                                <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                            </a>
                                            <div class="dropdown dropdown-click">
                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                </button>
                                                <div class="dropdown-default dropdown-menu">
                                                    <a class="dropdown-item" href="#">view</a>
                                                    <a class="dropdown-item" href="#">edit</a>
                                                    <a class="dropdown-item" href="#">delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="contact-item d-flex align-items-center">
                                            <div class="contact-personal-wrap">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-c-7">
                                                            <label for="check-grp-c-7"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="contact-personal-info d-flex">
                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url({{ asset('assets/img/tm6.png') }}); background-size: cover;"></a>
                                                <div class="contact_title">
                                                    <h6>
                                                        <a href="#">Kellie Marquot</a>
                                                    </h6>
                                                    <span class="location">San Francisco, CA</span>
                                                </div>
                                            </div>

                                        </div>
                                    </td>
                                    <td>
                                        <span class="email">marshall@yahoo.com</span>
                                    </td>
                                    <td>
                                        <span class="com-name">Business Development</span>
                                    </td>
                                    <td>
                                        <span class="position">Web Developer</span>
                                    </td>
                                    <td>
                                        <span class="email">+1 (861) 550-2796</span>
                                    </td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#" class="">
                                                <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                            </a>
                                            <div class="dropdown dropdown-click">
                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                </button>
                                                <div class="dropdown-default dropdown-menu">
                                                    <a class="dropdown-item" href="#">view</a>
                                                    <a class="dropdown-item" href="#">edit</a>
                                                    <a class="dropdown-item" href="#">delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="contact-item d-flex align-items-center">
                                            <div class="contact-personal-wrap">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-c-8">
                                                            <label for="check-grp-c-8"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="contact-personal-info d-flex">
                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url({{ asset('assets/img/tm7.png') }}); background-size: cover;"></a>
                                                <div class="contact_title">
                                                    <h6>
                                                        <a href="#">Kellie Marquot</a>
                                                    </h6>
                                                    <span class="location">San Francisco, CA</span>
                                                </div>
                                            </div>

                                        </div>
                                    </td>
                                    <td>
                                        <span class="email">marshall@yahoo.com</span>
                                    </td>
                                    <td>
                                        <span class="com-name">Business Development</span>
                                    </td>
                                    <td>
                                        <span class="position">Web Developer</span>
                                    </td>
                                    <td>
                                        <span class="email">+1 (861) 550-2796</span>
                                    </td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#" class="">
                                                <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                            </a>
                                            <div class="dropdown dropdown-click">
                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                </button>
                                                <div class="dropdown-default dropdown-menu">
                                                    <a class="dropdown-item" href="#">view</a>
                                                    <a class="dropdown-item" href="#">edit</a>
                                                    <a class="dropdown-item" href="#">delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="contact-item d-flex align-items-center">
                                            <div class="contact-personal-wrap">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-c-9">
                                                            <label for="check-grp-c-9"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="contact-personal-info d-flex">
                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url({{ asset('assets/img/tm3.png') }}); background-size: cover;"></a>
                                                <div class="contact_title">
                                                    <h6>
                                                        <a href="#">Kellie Marquot</a>
                                                    </h6>
                                                    <span class="location">San Francisco, CA</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="email">marshall@yahoo.com</span>
                                    </td>
                                    <td>
                                        <span class="com-name">Business Development</span>
                                    </td>
                                    <td>
                                        <span class="position">Web Developer</span>
                                    </td>
                                    <td>
                                        <span class="email">+1 (861) 550-2796</span>
                                    </td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#" class="">
                                                <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                            </a>
                                            <div class="dropdown dropdown-click">
                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                </button>
                                                <div class="dropdown-default dropdown-menu">
                                                    <a class="dropdown-item" href="#">view</a>
                                                    <a class="dropdown-item" href="#">edit</a>
                                                    <a class="dropdown-item" href="#">delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection