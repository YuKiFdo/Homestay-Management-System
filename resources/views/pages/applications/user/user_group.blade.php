@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid ">
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb-main user-member justify-content-sm-between ">
                <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                    <div class="d-flex align-items-center user-member__title justify-content-center me-sm-25">
                        <h4 class="text-capitalize fw-500 breadcrumb-title">{{ trans('menu.user-group') }}</h4>
                        <span class="sub-title ms-sm-25 ps-sm-25">Home</span>
                    </div>

                    <form action="/" class="d-flex align-items-center user-member__form my-sm-0 my-2">
                        <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                        <input class="form-control me-sm-2 border-0 box-shadow-none" type="search" placeholder="Search by Name" aria-label="Search">
                    </form>

                </div>
                <div class="action-btn">
                    <a href="#" class="btn px-15 btn-primary" data-bs-toggle="modal" data-bs-target="#new-member">
                        <i class="las la-plus fs-16"></i>Add New Member</a>
                    <div class="modal fade new-member" id="new-member" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content  radius-xl">
                                <div class="modal-header">
                                    <h6 class="modal-title fw-500" id="staticBackdropLabel">Create project</h6>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="uil uil-times"></i>
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
                                                            <img src="{{ asset('assets/img/svg/calendar.svg') }}" alt="calendar" class="svg"></a>
                                                    </div>
                                                </div>
                                                <div class="form-group w-100 form-group-calender">
                                                    <label for="datepicker2">End Date</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" id="datepicker2" placeholder="mm/dd/yyyy">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/svg/calendar.svg') }}" alt="calendar" class="svg"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-group d-flex pt-25">
                                                <button class="btn btn-primary btn-default btn-squared text-capitalize">add new project
                                                </button>
                                                <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light">cancel
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
    <div class="row">
        <div class="col-xxl-4 col-md-6 mb-25">
            <div class="user-group px-30 pt-30 pb-25 radius-xl bg-white">
                <div class="border-bottom">
                    <div class="media user-group-media d-flex justify-content-between">
                        <div class="media-body d-flex align-items-center">
                            <img class="me-20 wh-70 rounded-circle bg-opacity-primary" src="{{ asset('assets/img/ugl1.png') }}" alt="author">
                            <div>
                                <a href="application-ui.html">
                                    <h6 class="mt-0  fw-500">Dashboard UI</h6>
                                </a>
                                <p class="fs-13 color-light mb-0">San Francisco, CA</p>
                            </div>
                        </div>
                        <div class="mt-n15">
                            <div class="dropdown dropdown-click">
                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                </button>
                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                    <a class="dropdown-item" href="#">view</a>
                                    <a class="dropdown-item" href="#">edit</a>
                                    <a class="dropdown-item" href="#">leave</a>
                                    <a class="dropdown-item" href="#">delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-group-people">
                        <p class="mt-15">Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam nonumy eirmod dolor ame.</p>
                        <ul class="d-flex flex-wrap mb-20 user-group-people__parent">
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm3.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm4.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm5.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm6.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="user-group-project">
                    <div class="d-flex justify-content-between user-group-progress-top">
                        <div>
                            <span class="color-light fs-12">Current project</span>
                            <p class="fs-14 fw-500 color-dark mb-0">Plugin Development</p>
                        </div>
                        <div>
                            <span class="color-light fs-12">Project Completed</span>
                            <p class="fs-16 fw-500 color-success mb-0 text-end">45</p>
                        </div>
                    </div>
                    <div class="user-group-progress-bar">
                        <div class="progress-wrap d-flex align-items-center ">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-percentage">30%</span>
                        </div>
                        <p class="color-light fs-12 mb-0">12 / 15 tasks completed</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-md-6 mb-25">
            <div class="user-group px-30 pt-30 pb-25 radius-xl bg-white">
                <div class="border-bottom">
                    <div class="media user-group-media d-flex justify-content-between">
                        <div class="media-body d-flex align-items-center">
                            <img class="me-20 wh-70 rounded-circle bg-opacity-primary" src="{{ asset('assets/img/ugl2.png') }}" alt="author">
                            <div>
                                <a href="application-ui.html">
                                    <h6 class="mt-0  fw-500">Dashboard UI</h6>
                                </a>
                                <p class="fs-13 color-light mb-0">San Francisco, CA</p>
                            </div>
                        </div>
                        <div class="mt-n15">
                            <div class="dropdown dropdown-click">
                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                </button>
                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                    <a class="dropdown-item" href="#">view</a>
                                    <a class="dropdown-item" href="#">edit</a>
                                    <a class="dropdown-item" href="#">leave</a>
                                    <a class="dropdown-item" href="#">delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-group-people">
                        <p class="mt-15">Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam nonumy eirmod dolor ame.</p>
                        <ul class="d-flex flex-wrap mb-20 user-group-people__parent">
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm3.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm4.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm5.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm6.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="user-group-project">
                    <div class="d-flex justify-content-between user-group-progress-top">
                        <div>
                            <span class="color-light fs-12">Current project</span>
                            <p class="fs-14 fw-500 color-dark mb-0">Plugin Development</p>
                        </div>
                        <div>
                            <span class="color-light fs-12">Project Completed</span>
                            <p class="fs-16 fw-500 color-success mb-0 text-end">45</p>
                        </div>
                    </div>
                    <div class="user-group-progress-bar">
                        <div class="progress-wrap d-flex align-items-center ">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-percentage">30%</span>
                        </div>
                        <p class="color-light fs-12 mb-0">12 / 15 tasks completed</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-md-6 mb-25">
            <div class="user-group px-30 pt-30 pb-25 radius-xl bg-white">
                <div class="border-bottom">
                    <div class="media user-group-media d-flex justify-content-between">
                        <div class="media-body d-flex align-items-center">
                            <img class="me-20 wh-70 rounded-circle bg-opacity-primary" src="{{ asset('assets/img/ugl3.png') }}" alt="author">
                            <div>
                                <a href="application-ui.html">
                                    <h6 class="mt-0  fw-500">Dashboard UI</h6>
                                </a>
                                <p class="fs-13 color-light mb-0">San Francisco, CA</p>
                            </div>
                        </div>
                        <div class="mt-n15">
                            <div class="dropdown dropdown-click">
                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                </button>
                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                    <a class="dropdown-item" href="#">view</a>
                                    <a class="dropdown-item" href="#">edit</a>
                                    <a class="dropdown-item" href="#">leave</a>
                                    <a class="dropdown-item" href="#">delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-group-people">
                        <p class="mt-15">Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam nonumy eirmod dolor ame.</p>
                        <ul class="d-flex flex-wrap mb-20 user-group-people__parent">
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm3.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm4.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm5.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm6.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="user-group-project">
                    <div class="d-flex justify-content-between user-group-progress-top">
                        <div>
                            <span class="color-light fs-12">Current project</span>
                            <p class="fs-14 fw-500 color-dark mb-0">Plugin Development</p>
                        </div>
                        <div>
                            <span class="color-light fs-12">Project Completed</span>
                            <p class="fs-16 fw-500 color-success mb-0 text-end">45</p>
                        </div>
                    </div>
                    <div class="user-group-progress-bar">
                        <div class="progress-wrap d-flex align-items-center ">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-percentage">30%</span>
                        </div>
                        <p class="color-light fs-12 mb-0">12 / 15 tasks completed</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-md-6 mb-25">
            <div class="user-group px-30 pt-30 pb-25 radius-xl bg-white">
                <div class="border-bottom">
                    <div class="media user-group-media d-flex justify-content-between">
                        <div class="media-body d-flex align-items-center">
                            <img class="me-20 wh-70 rounded-circle bg-opacity-primary" src="{{ asset('assets/img/ugl4.png') }}" alt="author">
                            <div>
                                <a href="application-ui.html">
                                    <h6 class="mt-0  fw-500">Dashboard UI</h6>
                                </a>
                                <p class="fs-13 color-light mb-0">San Francisco, CA</p>
                            </div>
                        </div>
                        <div class="mt-n15">
                            <div class="dropdown dropdown-click">
                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                </button>
                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                    <a class="dropdown-item" href="#">view</a>
                                    <a class="dropdown-item" href="#">edit</a>
                                    <a class="dropdown-item" href="#">leave</a>
                                    <a class="dropdown-item" href="#">delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-group-people">
                        <p class="mt-15">Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam nonumy eirmod dolor ame.</p>
                        <ul class="d-flex flex-wrap mb-20 user-group-people__parent">
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm3.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm4.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm5.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm6.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="user-group-project">
                    <div class="d-flex justify-content-between user-group-progress-top">
                        <div>
                            <span class="color-light fs-12">Current project</span>
                            <p class="fs-14 fw-500 color-dark mb-0">Plugin Development</p>
                        </div>
                        <div>
                            <span class="color-light fs-12">Project Completed</span>
                            <p class="fs-16 fw-500 color-success mb-0 text-end">45</p>
                        </div>
                    </div>
                    <div class="user-group-progress-bar">
                        <div class="progress-wrap d-flex align-items-center ">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-percentage">30%</span>
                        </div>
                        <p class="color-light fs-12 mb-0">12 / 15 tasks completed</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-md-6 mb-25">
            <div class="user-group px-30 pt-30 pb-25 radius-xl bg-white">
                <div class="border-bottom">
                    <div class="media user-group-media d-flex justify-content-between">
                        <div class="media-body d-flex align-items-center">
                            <img class="me-20 wh-70 rounded-circle bg-opacity-primary" src="{{ asset('assets/img/ugl5.png') }}" alt="author">
                            <div>
                                <a href="application-ui.html">
                                    <h6 class="mt-0  fw-500">Dashboard UI</h6>
                                </a>
                                <p class="fs-13 color-light mb-0">San Francisco, CA</p>
                            </div>
                        </div>
                        <div class="mt-n15">
                            <div class="dropdown dropdown-click">
                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                </button>
                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                    <a class="dropdown-item" href="#">view</a>
                                    <a class="dropdown-item" href="#">edit</a>
                                    <a class="dropdown-item" href="#">leave</a>
                                    <a class="dropdown-item" href="#">delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-group-people">
                        <p class="mt-15">Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam nonumy eirmod dolor ame.</p>
                        <ul class="d-flex flex-wrap mb-20 user-group-people__parent">
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm3.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm4.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm5.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm6.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="user-group-project">
                    <div class="d-flex justify-content-between user-group-progress-top">
                        <div>
                            <span class="color-light fs-12">Current project</span>
                            <p class="fs-14 fw-500 color-dark mb-0">Plugin Development</p>
                        </div>
                        <div>
                            <span class="color-light fs-12">Project Completed</span>
                            <p class="fs-16 fw-500 color-success mb-0 text-end">45</p>
                        </div>
                    </div>
                    <div class="user-group-progress-bar">
                        <div class="progress-wrap d-flex align-items-center ">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-percentage">30%</span>
                        </div>
                        <p class="color-light fs-12 mb-0">12 / 15 tasks completed</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-md-6 mb-25">
            <div class="user-group px-30 pt-30 pb-25 radius-xl bg-white">
                <div class="border-bottom">
                    <div class="media user-group-media d-flex justify-content-between">
                        <div class="media-body d-flex align-items-center">
                            <img class="me-20 wh-70 rounded-circle bg-opacity-primary" src="{{ asset('assets/img/ugl6.png') }}" alt="author">
                            <div>
                                <a href="application-ui.html">
                                    <h6 class="mt-0  fw-500">Dashboard UI</h6>
                                </a>
                                <p class="fs-13 color-light mb-0">San Francisco, CA</p>
                            </div>
                        </div>
                        <div class="mt-n15">
                            <div class="dropdown dropdown-click">
                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                </button>
                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                    <a class="dropdown-item" href="#">view</a>
                                    <a class="dropdown-item" href="#">edit</a>
                                    <a class="dropdown-item" href="#">leave</a>
                                    <a class="dropdown-item" href="#">delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-group-people">
                        <p class="mt-15">Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam nonumy eirmod dolor ame.</p>
                        <ul class="d-flex flex-wrap mb-20 user-group-people__parent">
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm3.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm4.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm5.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm6.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="user-group-project">
                    <div class="d-flex justify-content-between user-group-progress-top">
                        <div>
                            <span class="color-light fs-12">Current project</span>
                            <p class="fs-14 fw-500 color-dark mb-0">Plugin Development</p>
                        </div>
                        <div>
                            <span class="color-light fs-12">Project Completed</span>
                            <p class="fs-16 fw-500 color-success mb-0 text-end">45</p>
                        </div>
                    </div>
                    <div class="user-group-progress-bar">
                        <div class="progress-wrap d-flex align-items-center ">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-percentage">30%</span>
                        </div>
                        <p class="color-light fs-12 mb-0">12 / 15 tasks completed</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-md-6 mb-25">
            <div class="user-group px-30 pt-30 pb-25 radius-xl bg-white">
                <div class="border-bottom">
                    <div class="media user-group-media d-flex justify-content-between">
                        <div class="media-body d-flex align-items-center">
                            <img class="me-20 wh-70 rounded-circle bg-opacity-primary" src="{{ asset('assets/img/ugl1.png') }}" alt="author">
                            <div>
                                <a href="application-ui.html">
                                    <h6 class="mt-0  fw-500">Dashboard UI</h6>
                                </a>
                                <p class="fs-13 color-light mb-0">San Francisco, CA</p>
                            </div>
                        </div>
                        <div class="mt-n15">
                            <div class="dropdown dropdown-click">
                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                </button>
                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                    <a class="dropdown-item" href="#">view</a>
                                    <a class="dropdown-item" href="#">edit</a>
                                    <a class="dropdown-item" href="#">leave</a>
                                    <a class="dropdown-item" href="#">delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-group-people">
                        <p class="mt-15">Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam nonumy eirmod dolor ame.</p>
                        <ul class="d-flex flex-wrap mb-20 user-group-people__parent">
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm3.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm4.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm5.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm6.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="user-group-project">
                    <div class="d-flex justify-content-between user-group-progress-top">
                        <div>
                            <span class="color-light fs-12">Current project</span>
                            <p class="fs-14 fw-500 color-dark mb-0">Plugin Development</p>
                        </div>
                        <div>
                            <span class="color-light fs-12">Project Completed</span>
                            <p class="fs-16 fw-500 color-success mb-0 text-end">45</p>
                        </div>
                    </div>
                    <div class="user-group-progress-bar">
                        <div class="progress-wrap d-flex align-items-center ">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-percentage">30%</span>
                        </div>
                        <p class="color-light fs-12 mb-0">12 / 15 tasks completed</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-md-6 mb-25">
            <div class="user-group px-30 pt-30 pb-25 radius-xl bg-white">
                <div class="border-bottom">
                    <div class="media user-group-media d-flex justify-content-between">
                        <div class="media-body d-flex align-items-center">
                            <img class="me-20 wh-70 rounded-circle bg-opacity-primary" src="{{ asset('assets/img/ugl2.png') }}" alt="author">
                            <div>
                                <a href="application-ui.html">
                                    <h6 class="mt-0  fw-500">Dashboard UI</h6>
                                </a>
                                <p class="fs-13 color-light mb-0">San Francisco, CA</p>
                            </div>
                        </div>
                        <div class="mt-n15">
                            <div class="dropdown dropdown-click">
                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                </button>
                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                    <a class="dropdown-item" href="#">view</a>
                                    <a class="dropdown-item" href="#">edit</a>
                                    <a class="dropdown-item" href="#">leave</a>
                                    <a class="dropdown-item" href="#">delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-group-people">
                        <p class="mt-15">Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam nonumy eirmod dolor ame.</p>
                        <ul class="d-flex flex-wrap mb-20 user-group-people__parent">
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm3.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm4.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm5.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm6.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="user-group-project">
                    <div class="d-flex justify-content-between user-group-progress-top">
                        <div>
                            <span class="color-light fs-12">Current project</span>
                            <p class="fs-14 fw-500 color-dark mb-0">Plugin Development</p>
                        </div>
                        <div>
                            <span class="color-light fs-12">Project Completed</span>
                            <p class="fs-16 fw-500 color-success mb-0 text-end">45</p>
                        </div>
                    </div>
                    <div class="user-group-progress-bar">
                        <div class="progress-wrap d-flex align-items-center ">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-percentage">30%</span>
                        </div>
                        <p class="color-light fs-12 mb-0">12 / 15 tasks completed</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-md-6 mb-25">
            <div class="user-group px-30 pt-30 pb-25 radius-xl bg-white">
                <div class="border-bottom">
                    <div class="media user-group-media d-flex justify-content-between">
                        <div class="media-body d-flex align-items-center">
                            <img class="me-20 wh-70 rounded-circle bg-opacity-primary" src="{{ asset('assets/img/ugl3.png') }}" alt="author">
                            <div>
                                <a href="application-ui.html">
                                    <h6 class="mt-0  fw-500">Dashboard UI</h6>
                                </a>
                                <p class="fs-13 color-light mb-0">San Francisco, CA</p>
                            </div>
                        </div>
                        <div class="mt-n15">
                            <div class="dropdown dropdown-click">
                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                </button>
                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                    <a class="dropdown-item" href="#">view</a>
                                    <a class="dropdown-item" href="#">edit</a>
                                    <a class="dropdown-item" href="#">leave</a>
                                    <a class="dropdown-item" href="#">delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-group-people">
                        <p class="mt-15">Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam nonumy eirmod dolor ame.</p>
                        <ul class="d-flex flex-wrap mb-20 user-group-people__parent">
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm3.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm4.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm5.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm6.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="user-group-project">
                    <div class="d-flex justify-content-between user-group-progress-top">
                        <div>
                            <span class="color-light fs-12">Current project</span>
                            <p class="fs-14 fw-500 color-dark mb-0">Plugin Development</p>
                        </div>
                        <div>
                            <span class="color-light fs-12">Project Completed</span>
                            <p class="fs-16 fw-500 color-success mb-0 text-end">45</p>
                        </div>
                    </div>
                    <div class="user-group-progress-bar">
                        <div class="progress-wrap d-flex align-items-center ">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-percentage">30%</span>
                        </div>
                        <p class="color-light fs-12 mb-0">12 / 15 tasks completed</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-md-6 mb-25">
            <div class="user-group px-30 pt-30 pb-25 radius-xl bg-white">
                <div class="border-bottom">
                    <div class="media user-group-media d-flex justify-content-between">
                        <div class="media-body d-flex align-items-center">
                            <img class="me-20 wh-70 rounded-circle bg-opacity-primary" src="{{ asset('assets/img/ugl4.png') }}" alt="author">
                            <div>
                                <a href="application-ui.html">
                                    <h6 class="mt-0  fw-500">Dashboard UI</h6>
                                </a>
                                <p class="fs-13 color-light mb-0">San Francisco, CA</p>
                            </div>
                        </div>
                        <div class="mt-n15">
                            <div class="dropdown dropdown-click">
                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                </button>
                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                    <a class="dropdown-item" href="#">view</a>
                                    <a class="dropdown-item" href="#">edit</a>
                                    <a class="dropdown-item" href="#">leave</a>
                                    <a class="dropdown-item" href="#">delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-group-people">
                        <p class="mt-15">Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam nonumy eirmod dolor ame.</p>
                        <ul class="d-flex flex-wrap mb-20 user-group-people__parent">
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm3.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm4.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm5.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm6.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="user-group-project">
                    <div class="d-flex justify-content-between user-group-progress-top">
                        <div>
                            <span class="color-light fs-12">Current project</span>
                            <p class="fs-14 fw-500 color-dark mb-0">Plugin Development</p>
                        </div>
                        <div>
                            <span class="color-light fs-12">Project Completed</span>
                            <p class="fs-16 fw-500 color-success mb-0 text-end">45</p>
                        </div>
                    </div>
                    <div class="user-group-progress-bar">
                        <div class="progress-wrap d-flex align-items-center ">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-percentage">30%</span>
                        </div>
                        <p class="color-light fs-12 mb-0">12 / 15 tasks completed</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-md-6 mb-25">
            <div class="user-group px-30 pt-30 pb-25 radius-xl bg-white">
                <div class="border-bottom">
                    <div class="media user-group-media d-flex justify-content-between">
                        <div class="media-body d-flex align-items-center">
                            <img class="me-20 wh-70 rounded-circle bg-opacity-primary" src="{{ asset('assets/img/ugl5.png') }}" alt="author">
                            <div>
                                <a href="application-ui.html">
                                    <h6 class="mt-0  fw-500">Dashboard UI</h6>
                                </a>
                                <p class="fs-13 color-light mb-0">San Francisco, CA</p>
                            </div>
                        </div>
                        <div class="mt-n15">
                            <div class="dropdown dropdown-click">
                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                </button>
                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                    <a class="dropdown-item" href="#">view</a>
                                    <a class="dropdown-item" href="#">edit</a>
                                    <a class="dropdown-item" href="#">leave</a>
                                    <a class="dropdown-item" href="#">delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-group-people">
                        <p class="mt-15">Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam nonumy eirmod dolor ame.</p>
                        <ul class="d-flex flex-wrap mb-20 user-group-people__parent">
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm3.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm4.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm5.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm6.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="user-group-project">
                    <div class="d-flex justify-content-between user-group-progress-top">
                        <div>
                            <span class="color-light fs-12">Current project</span>
                            <p class="fs-14 fw-500 color-dark mb-0">Plugin Development</p>
                        </div>
                        <div>
                            <span class="color-light fs-12">Project Completed</span>
                            <p class="fs-16 fw-500 color-success mb-0 text-end">45</p>
                        </div>
                    </div>
                    <div class="user-group-progress-bar">
                        <div class="progress-wrap d-flex align-items-center ">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-percentage">30%</span>
                        </div>
                        <p class="color-light fs-12 mb-0">12 / 15 tasks completed</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-md-6 mb-25">
            <div class="user-group px-30 pt-30 pb-25 radius-xl bg-white">
                <div class="border-bottom">
                    <div class="media user-group-media d-flex justify-content-between">
                        <div class="media-body d-flex align-items-center">
                            <img class="me-20 wh-70 rounded-circle bg-opacity-primary" src="{{ asset('assets/img/ugl6.png') }}" alt="author">
                            <div>
                                <a href="application-ui.html">
                                    <h6 class="mt-0  fw-500">Dashboard UI</h6>
                                </a>
                                <p class="fs-13 color-light mb-0">San Francisco, CA</p>
                            </div>
                        </div>
                        <div class="mt-n15">
                            <div class="dropdown dropdown-click">
                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                </button>
                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                    <a class="dropdown-item" href="#">view</a>
                                    <a class="dropdown-item" href="#">edit</a>
                                    <a class="dropdown-item" href="#">leave</a>
                                    <a class="dropdown-item" href="#">delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-group-people">
                        <p class="mt-15">Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam nonumy eirmod dolor ame.</p>
                        <ul class="d-flex flex-wrap mb-20 user-group-people__parent">
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm3.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm4.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm5.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm6.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                            </li>
                            <li>
                                <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="user-group-project">
                    <div class="d-flex justify-content-between user-group-progress-top">
                        <div>
                            <span class="color-light fs-12">Current project</span>
                            <p class="fs-14 fw-500 color-dark mb-0">Plugin Development</p>
                        </div>
                        <div>
                            <span class="color-light fs-12">Project Completed</span>
                            <p class="fs-16 fw-500 color-success mb-0 text-end">45</p>
                        </div>
                    </div>
                    <div class="user-group-progress-bar">
                        <div class="progress-wrap d-flex align-items-center ">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-percentage">30%</span>
                        </div>
                        <p class="color-light fs-12 mb-0">12 / 15 tasks completed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="user-pagination">
                <div class="d-flex justify-content-sm-end justify-content-end mt-1 mb-30">
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