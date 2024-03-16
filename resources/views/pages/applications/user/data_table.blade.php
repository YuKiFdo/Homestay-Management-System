@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">

            <div class="breadcrumb-main user-member justify-content-sm-between ">
                <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                    <div class="d-flex align-items-center user-member__title justify-content-center me-sm-25">
                        <h4 class="text-capitalize fw-500 breadcrumb-title">{{ trans('menu.user-table') }}</h4>
                        <span class="sub-title ms-sm-25 ps-sm-25">Home</span>
                    </div>

                    <form action="/" class="d-flex align-items-center user-member__form my-sm-0 my-2">
                        <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                        <input class="form-control me-sm-2 border-0 box-shadow-none" type="search" placeholder="Search by Name" aria-label="Search">
                    </form>

                </div>
                <div class="action-btn">
                    <a href="#" class="btn px-15 btn-primary" data-bs-toggle="modal" data-bs-target="#new-member">
                        <i class="las la-plus fs-16"></i>users list datatable</a>

                    <!-- Modal -->
                    <div class="modal fade new-member " id="new-member" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content  radius-xl">
                                <div class="modal-header">
                                    <h6 class="modal-title fw-500" id="staticBackdropLabel">Create project</h6>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <img src="{{ asset('assets/img/svg/x.svg') }}" alt="x" class="svg">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="new-member-modal">
                                        <form>
                                            <div class="form-group mb-20">
                                                <input type="text" class="form-control" placeholder="Duran Clayton">
                                            </div>
                                            <div class="form-group mb-20">
                                                <div class="category-member">
                                                    <select class="js-example-basic-single js-states form-control" id="category-member">
                                                        <option value="JAN">1</option>
                                                        <option value="FBR">2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group mb-20">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Project description"></textarea>
                                            </div>
                                            <div class="form-group textarea-group">
                                                <label class="mb-15">status</label>
                                                <div class="d-flex">
                                                    <div class="project-task-list__left d-flex align-items-center">
                                                        <div class="checkbox-group d-flex me-50 pe-10">
                                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                <input class="checkbox" type="checkbox" id="check-grp-1" checked>
                                                                <label for="check-grp-1" class="fs-14 color-light strikethrough">
                                                                    status
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="checkbox-group d-flex me-50 pe-10">
                                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                <input class="checkbox" type="checkbox" id="check-grp-2">
                                                                <label for="check-grp-2" class="fs-14 color-light strikethrough">
                                                                    Deactivated
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="checkbox-group d-flex">
                                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                <input class="checkbox" type="checkbox" id="check-grp-3">
                                                                <label for="check-grp-3" class="fs-14 color-light strikethrough">
                                                                    bloked
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-25">
                                                <div class="form-group mb-10">
                                                    <label for="name47">project member</label>
                                                    <input type="text" class="form-control" id="name47" placeholder="Search members">
                                                </div>
                                                <ul class="d-flex flex-wrap mb-20 user-group-people__parent">
                                                    <li>
                                                        <a href="#"><img class="rounded-circle wh-34" src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img class="rounded-circle wh-34" src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img class="rounded-circle wh-34" src="{{ asset('assets/img/tm3.png') }}" alt="author"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img class="rounded-circle wh-34" src="{{ asset('assets/img/tm4.png') }}" alt="author"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img class="rounded-circle wh-34" src="{{ asset('assets/img/tm5.png') }}" alt="author"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="d-flex new-member-calendar">
                                                <div class="form-group w-100 me-sm-15 form-group-calender">
                                                    <label for="datepicker">start Date</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" id="datepicker" placeholder="mm/dd/yyyy">
                                                        <a href="#">
                                                            <img class="svg" src="{{ asset('assets/img/svg/chevron-right.svg') }}" alt="chevron-right.svg"></a>
                                                    </div>
                                                </div>
                                                <div class="form-group w-100 form-group-calender">
                                                    <label for="datepicker2">End Date</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" id="datepicker2" placeholder="mm/dd/yyyy">
                                                        <a href="#">
                                                            <img class="svg" src="{{ asset('assets/img/svg/chevron-right.svg') }}" alt="chevron-right.svg"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-group d-flex pt-25">


                                                <button class="btn btn-primary btn-default btn-squared text-capitalize">add new project
                                                </button>





                                                <button type="button" class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light" data-bs-dismiss="modal">cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->

                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="userDatatable global-shadow border-light-0 p-30 bg-white radius-xl w-100 mb-30">
                <div class="table-responsive">
                    <table class="table mb-0 table-borderless">
                        <thead>
                            <tr class="userDatatable-header">
                                <th>
                                    <div class="d-flex align-items-center">
                                        <div class="custom-checkbox  check-all">
                                            <input class="checkbox" type="checkbox" id="check-44">
                                            <label for="check-44">
                                                <span class="checkbox-text userDatatable-title">user</span>
                                            </label>
                                        </div>
                                    </div>
                                </th>
                                <th>
                                    <span class="userDatatable-title">emaill</span>
                                </th>
                                <th>
                                    <span class="userDatatable-title">company</span>
                                </th>
                                <th>
                                    <span class="userDatatable-title">position</span>
                                </th>
                                <th>
                                    <span class="userDatatable-title">join date</span>
                                </th>
                                <th>
                                    <span class="userDatatable-title">status</span>
                                </th>
                                <th>
                                    <span class="userDatatable-title float-end">action</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <div class="userDatatable__imgWrapper d-flex align-items-center">
                                            <div class="checkbox-group-wrapper">
                                                <div class="checkbox-group d-flex">
                                                    <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                        <input class="checkbox" type="checkbox" id="check-grp-12">
                                                        <label for="check-grp-12"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url({{ asset('assets/img/tm6.png') }}); background-size: cover;"></a>
                                        </div>
                                        <div class="userDatatable-inline-title">
                                            <a href="#" class="text-dark fw-500">
                                                <h6>Kellie Marquot</h6>
                                            </a>
                                            <p class="d-block mb-0">
                                                San Francisco, CA
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        john-keller@gmail.com
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        Business Development
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        Web Developer
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        January 20, 2020
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content d-inline-block">
                                        <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
                                    </div>
                                </td>
                                <td>
                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                        <li>
                                            <a href="#" class="view">
                                                <i class="uil uil-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="edit">
                                                <i class="uil uil-edit"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="remove">
                                                <i class="uil uil-trash-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <div class="userDatatable__imgWrapper d-flex align-items-center">
                                            <div class="checkbox-group-wrapper">
                                                <div class="checkbox-group d-flex">
                                                    <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                        <input class="checkbox" type="checkbox" id="check-grp-13">
                                                        <label for="check-grp-13"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url({{ asset('assets/img/tm2.png') }}); background-size: cover;"></a>
                                        </div>
                                        <div class="userDatatable-inline-title">
                                            <a href="#" class="text-dark fw-500">
                                                <h6>Kellie Marquot</h6>
                                            </a>
                                            <p class="d-block mb-0">
                                                San Francisco, CA
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        john-keller@gmail.com
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        Business Development
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        Web Developer
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        January 20, 2020
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content d-inline-block">
                                        <span class="bg-opacity-warning  color-warning rounded-pill userDatatable-content-status active">deactivete</span>
                                    </div>
                                </td>
                                <td>
                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                        <li>
                                            <a href="#" class="view">
                                                <i class="uil uil-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="edit">
                                                <i class="uil uil-edit"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="remove">
                                                <i class="uil uil-trash-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <div class="userDatatable__imgWrapper d-flex align-items-center">
                                            <div class="checkbox-group-wrapper">
                                                <div class="checkbox-group d-flex">
                                                    <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                        <input class="checkbox" type="checkbox" id="check-grp-14">
                                                        <label for="check-grp-14"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url({{ asset('assets/img/tm2.png') }}); background-size: cover;"></a>
                                        </div>
                                        <div class="userDatatable-inline-title">
                                            <a href="#" class="text-dark fw-500">
                                                <h6>Kellie Marquot</h6>
                                            </a>
                                            <p class="d-block mb-0">
                                                San Francisco, CA
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        john-keller@gmail.com
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        Business Development
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        Web Developer
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        January 20, 2020
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content d-inline-block">
                                        <span class="bg-opacity-danger  color-danger rounded-pill userDatatable-content-status active">blocked</span>
                                    </div>
                                </td>
                                <td>
                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                        <li>
                                            <a href="#" class="view">
                                                <i class="uil uil-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="edit">
                                                <i class="uil uil-edit"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="remove">
                                                <i class="uil uil-trash-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <div class="userDatatable__imgWrapper d-flex align-items-center">
                                            <div class="checkbox-group-wrapper">
                                                <div class="checkbox-group d-flex">
                                                    <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                        <input class="checkbox" type="checkbox" id="check-grp-4">
                                                        <label for="check-grp-4"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url({{ asset('assets/img/tm3.png') }}); background-size: cover;"></a>
                                        </div>
                                        <div class="userDatatable-inline-title">
                                            <a href="#" class="text-dark fw-500">
                                                <h6>Kellie Marquot</h6>
                                            </a>
                                            <p class="d-block mb-0">
                                                San Francisco, CA
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        john-keller@gmail.com
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        Business Development
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        Web Developer
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        January 20, 2020
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content d-inline-block">
                                        <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
                                    </div>
                                </td>
                                <td>
                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                        <li>
                                            <a href="#" class="view">
                                                <i class="uil uil-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="edit">
                                                <i class="uil uil-edit"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="remove">
                                                <i class="uil uil-trash-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <div class="userDatatable__imgWrapper d-flex align-items-center">
                                            <div class="checkbox-group-wrapper">
                                                <div class="checkbox-group d-flex">
                                                    <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                        <input class="checkbox" type="checkbox" id="check-grp-5">
                                                        <label for="check-grp-5"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url({{ asset('assets/img/tm4.png') }}); background-size: cover;"></a>
                                        </div>
                                        <div class="userDatatable-inline-title">
                                            <a href="#" class="text-dark fw-500">
                                                <h6>Kellie Marquot</h6>
                                            </a>
                                            <p class="d-block mb-0">
                                                San Francisco, CA
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        john-keller@gmail.com
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        Business Development
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        Web Developer
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        January 20, 2020
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content d-inline-block">
                                        <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
                                    </div>
                                </td>
                                <td>
                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                        <li>
                                            <a href="#" class="view">
                                                <i class="uil uil-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="edit">
                                                <i class="uil uil-edit"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="remove">
                                                <i class="uil uil-trash-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <div class="userDatatable__imgWrapper d-flex align-items-center">
                                            <div class="checkbox-group-wrapper">
                                                <div class="checkbox-group d-flex">
                                                    <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                        <input class="checkbox" type="checkbox" id="check-grp-6">
                                                        <label for="check-grp-6"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url({{ asset('assets/img/tm5.png') }}); background-size: cover;"></a>
                                        </div>
                                        <div class="userDatatable-inline-title">
                                            <a href="#" class="text-dark fw-500">
                                                <h6>Kellie Marquot</h6>
                                            </a>
                                            <p class="d-block mb-0">
                                                San Francisco, CA
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        john-keller@gmail.com
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        Business Development
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        Web Developer
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        January 20, 2020
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content d-inline-block">
                                        <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
                                    </div>
                                </td>
                                <td>
                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                        <li>
                                            <a href="#" class="view">
                                                <i class="uil uil-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="edit">
                                                <i class="uil uil-edit"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="remove">
                                                <i class="uil uil-trash-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <div class="userDatatable__imgWrapper d-flex align-items-center">
                                            <div class="checkbox-group-wrapper">
                                                <div class="checkbox-group d-flex">
                                                    <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                        <input class="checkbox" type="checkbox" id="check-grp-7">
                                                        <label for="check-grp-7"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url({{ asset('assets/img/tm6.png') }}); background-size: cover;"></a>
                                        </div>
                                        <div class="userDatatable-inline-title">
                                            <a href="#" class="text-dark fw-500">
                                                <h6>Kellie Marquot</h6>
                                            </a>
                                            <p class="d-block mb-0">
                                                San Francisco, CA
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        john-keller@gmail.com
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        Business Development
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        Web Developer
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        January 20, 2020
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content d-inline-block">
                                        <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
                                    </div>
                                </td>
                                <td>
                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                        <li>
                                            <a href="#" class="view">
                                                <i class="uil uil-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="edit">
                                                <i class="uil uil-edit"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="remove">
                                                <i class="uil uil-trash-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <div class="userDatatable__imgWrapper d-flex align-items-center">
                                            <div class="checkbox-group-wrapper">
                                                <div class="checkbox-group d-flex">
                                                    <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                        <input class="checkbox" type="checkbox" id="check-grp-8">
                                                        <label for="check-grp-8"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url({{ asset('assets/img/tm1.png') }}); background-size: cover;"></a>
                                        </div>
                                        <div class="userDatatable-inline-title">
                                            <a href="#" class="text-dark fw-500">
                                                <h6>Kellie Marquot</h6>
                                            </a>
                                            <p class="d-block mb-0">
                                                San Francisco, CA
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        john-keller@gmail.com
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        Business Development
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        Web Developer
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        January 20, 2020
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content d-inline-block">
                                        <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
                                    </div>
                                </td>
                                <td>
                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                        <li>
                                            <a href="#" class="view">
                                                <i class="uil uil-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="edit">
                                                <i class="uil uil-edit"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="remove">
                                                <i class="uil uil-trash-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <div class="userDatatable__imgWrapper d-flex align-items-center">
                                            <div class="checkbox-group-wrapper">
                                                <div class="checkbox-group d-flex">
                                                    <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                        <input class="checkbox" type="checkbox" id="check-grp-9">
                                                        <label for="check-grp-9"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url({{ asset('assets/img/tm2.png') }}); background-size: cover;"></a>
                                        </div>
                                        <div class="userDatatable-inline-title">
                                            <a href="#" class="text-dark fw-500">
                                                <h6>Kellie Marquot</h6>
                                            </a>
                                            <p class="d-block mb-0">
                                                San Francisco, CA
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        john-keller@gmail.com
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        Business Development
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        Web Developer
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        January 20, 2020
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content d-inline-block">
                                        <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
                                    </div>
                                </td>
                                <td>
                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                        <li>
                                            <a href="#" class="view">
                                                <i class="uil uil-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="edit">
                                                <i class="uil uil-edit"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="remove">
                                                <i class="uil uil-trash-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <div class="userDatatable__imgWrapper d-flex align-items-center">
                                            <div class="checkbox-group-wrapper">
                                                <div class="checkbox-group d-flex">
                                                    <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                        <input class="checkbox" type="checkbox" id="check-grp-10">
                                                        <label for="check-grp-10"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url({{ asset('assets/img/tm3.png') }}); background-size: cover;"></a>
                                        </div>
                                        <div class="userDatatable-inline-title">
                                            <a href="#" class="text-dark fw-500">
                                                <h6>Kellie Marquot</h6>
                                            </a>
                                            <p class="d-block mb-0">
                                                San Francisco, CA
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        john-keller@gmail.com
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        Business Development
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        Web Developer
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        January 20, 2020
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content d-inline-block">
                                        <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
                                    </div>
                                </td>
                                <td>
                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                        <li>
                                            <a href="#" class="view">
                                                <i class="uil uil-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="edit">
                                                <i class="uil uil-edit"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="remove">
                                                <i class="uil uil-trash-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <div class="userDatatable__imgWrapper d-flex align-items-center">
                                            <div class="checkbox-group-wrapper">
                                                <div class="checkbox-group d-flex">
                                                    <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                        <input class="checkbox" type="checkbox" id="check-grp-11">
                                                        <label for="check-grp-11"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url({{ asset('assets/img/tm4.png') }}); background-size: cover;"></a>
                                        </div>
                                        <div class="userDatatable-inline-title">
                                            <a href="#" class="text-dark fw-500">
                                                <h6>Kellie Marquot</h6>
                                            </a>
                                            <p class="d-block mb-0">
                                                San Francisco, CA
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        john-keller@gmail.com
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        Business Development
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        Web Developer
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        January 20, 2020
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content d-inline-block">
                                        <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
                                    </div>
                                </td>
                                <td>
                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                        <li>
                                            <a href="#" class="view">
                                                <i class="uil uil-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="edit">
                                                <i class="uil uil-edit"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="remove">
                                                <i class="uil uil-trash-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-end pt-30">

                    <nav class="dm-page ">
                        <ul class="dm-pagination d-flex">
                            <li class="dm-pagination__item">
                                <a href="#" class="dm-pagination__link pagination-control"><span class="la la-angle-left"></span></a>
                                <a href="#" class="dm-pagination__link"><span class="page-number">1</span></a>
                                <a href="#" class="dm-pagination__link active"><span class="page-number">2</span></a>
                                <a href="#" class="dm-pagination__link"><span class="page-number">3</span></a>
                                <a href="#" class="dm-pagination__link pagination-control"><span class="page-number">...</span></a>
                                <a href="#" class="dm-pagination__link"><span class="page-number">12</span></a>
                                <a href="#" class="dm-pagination__link pagination-control"><span class="la la-angle-right"></span></a>
                                <a href="#" class="dm-pagination__option">
                                </a>
                            </li>
                            <li class="dm-pagination__item">
                                <div class="paging-option">
                                    <select name="page-number" class="page-selection">
                                        <option value="20">20/page</option>
                                        <option value="40">40/page</option>
                                        <option value="60">60/page</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </nav>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection