@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="note-wrapper">
            <div class="row">
                <div class="col-lg-12">

                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.task-menu-title') }}</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.task-menu-title') }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
                <div class="col-lg-12">
                    <div class="note-contents">
                        <div class="note-sibebar-wrapper mb-30">

                            <div class="note-sidebar">
                                <div class="card border-0">
                                    <div class="card-body px-15 pt-30">
                                        <div class="px-3">
                                            <a href="#" class="btn btn-primary btn-default btn-rounded btn-block" data-bs-toggle="modal" data-bs-target="#taskModal"> <img src="{{ asset('assets/img/svg/plus.svg') }}" alt="plus" class="svg">
                                                Add Tasks</a>
                                        </div>
                                        <div class="note-types task-types">
                                            <ul class="nav  mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-selected="true"><img class="svg" src="{{ asset('assets/img/svg/edit.svg') }}" alt="edit"> All</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-selected="false"><img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                                        Favorite</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-selected="false"><img src="{{ asset('assets/img/svg/check.svg') }}" alt="check" class="svg">
                                                        Completed</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="pills-deleted-tab" data-bs-toggle="pill" href="#pills-deleted" role="tab" aria-selected="false"><img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="">
                                                        Deleted</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- ends: .col-lg-2 -->
                        <div class="note-grid-wrapper mb-30">
                            <div class="task-wrapper">
                                <div class="task-single">
                                    <div class="task-card card">
                                        <div class="card-header">
                                            Task Lists
                                        </div>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                                                <div class="card-body task-card__body">
                                                    <div class="task-card__content d-flex justify-content-between align-items-center">
                                                        <div class="task-card__header">
                                                            <div class="checkbox-group d-flex">
                                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                    <input class="checkbox" type="checkbox" id="check-grp-task1">
                                                                    <label for="check-grp-task1" class="">
                                                                        Dashboard design stucture
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                                                the industry's standard dummy text ever since the 1500s.</span>
                                                        </div>
                                                        <div class="table-actions">
                                                            <a href="#" class="">
                                                                <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                                            </a>
                                                            <div class="dropdown dropdown-click">
                                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <img class="svg" src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical">
                                                                </button>
                                                                <div class="dropdown-default dropdown-menu">
                                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#taskModal2"><img src="{{ asset('assets/img/svg/edit.svg') }}" alt="svg" class="svg"> edit</a>
                                                                    <a class="dropdown-item" href="#"><img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt=""> delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="card-body task-card__body">
                                                    <div class="task-card__content d-flex justify-content-between align-items-center">
                                                        <div class="task-card__header">
                                                            <div class="checkbox-group d-flex">
                                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                    <input class="checkbox" type="checkbox" id="check-grp-task2">
                                                                    <label for="check-grp-task2" class="">
                                                                        Dashboard design stucture
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                                                the industry's standard dummy text ever since the 1500s.</span>
                                                        </div>
                                                        <div class="table-actions">
                                                            <a href="#" class="active">
                                                                <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                                            </a>
                                                            <div class="dropdown dropdown-click">
                                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <img class="svg" src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical">
                                                                </button>
                                                                <div class="dropdown-default dropdown-menu">
                                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#taskModal2"><img src="{{ asset('assets/img/svg/edit.svg') }}" alt="svg" class="svg"> edit</a>
                                                                    <a class="dropdown-item" href="#"><img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt=""> delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="card-body task-card__body">
                                                    <div class="task-card__content d-flex justify-content-between align-items-center">
                                                        <div class="task-card__header">
                                                            <div class="checkbox-group d-flex">
                                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                    <input class="checkbox" type="checkbox" id="check-grp-task3" checked>
                                                                    <label for="check-grp-task3" class="">
                                                                        Dashboard design stucture
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                                                the industry's standard dummy text ever since the 1500s.</span>
                                                        </div>
                                                        <div class="table-actions">
                                                            <a href="#" class="">
                                                                <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                                            </a>
                                                            <div class="dropdown dropdown-click">
                                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <img class="svg" src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical">
                                                                </button>
                                                                <div class="dropdown-default dropdown-menu">
                                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#taskModal2"><img src="{{ asset('assets/img/svg/edit.svg') }}" alt="svg" class="svg"> edit</a>
                                                                    <a class="dropdown-item" href="#"><img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt=""> delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                <div class="task-single">

                                                    <div class="card-body task-card__body">
                                                        <div class="task-card__content d-flex justify-content-between align-items-center">
                                                            <div class="task-card__header">
                                                                <div class="checkbox-group d-flex">
                                                                    <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                        <input class="checkbox" type="checkbox" id="check-grp-task4">
                                                                        <label for="check-grp-task4" class="">
                                                                            Dashboard design stucture
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                                                    the industry's standard dummy text ever since the 1500s.</span>
                                                            </div>
                                                            <div class="table-actions">
                                                                <a href="#" class="active">
                                                                    <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                                                </a>
                                                                <div class="dropdown dropdown-click">
                                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <img class="svg" src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical">
                                                                    </button>
                                                                    <div class="dropdown-default dropdown-menu">
                                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#taskModal2"><img src="{{ asset('assets/img/svg/edit.svg') }}" alt="svg" class="svg"> edit</a>
                                                                        <a class="dropdown-item" href="#"><img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt=""> delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="card-body task-card__body">
                                                        <div class="task-card__content d-flex justify-content-between align-items-center">
                                                            <div class="task-card__header">
                                                                <div class="checkbox-group d-flex">
                                                                    <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                        <input class="checkbox" type="checkbox" id="check-grp-task5">
                                                                        <label for="check-grp-task5" class="">
                                                                            Dashboard design stucture
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                                                    the industry's standard dummy text ever since the 1500s.</span>
                                                            </div>
                                                            <div class="table-actions">
                                                                <a href="#" class="active">
                                                                    <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                                                </a>
                                                                <div class="dropdown dropdown-click">
                                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <img class="svg" src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical">
                                                                    </button>
                                                                    <div class="dropdown-default dropdown-menu">
                                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#taskModal2"><img src="{{ asset('assets/img/svg/edit.svg') }}" alt="svg" class="svg"> edit</a>
                                                                        <a class="dropdown-item" href="#"><img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt=""> delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="card-body task-card__body">
                                                        <div class="task-card__content d-flex justify-content-between align-items-center">
                                                            <div class="task-card__header">
                                                                <div class="checkbox-group d-flex">
                                                                    <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                        <input class="checkbox" type="checkbox" id="check-grp-task6">
                                                                        <label for="check-grp-task6" class="">
                                                                            Dashboard design stucture
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                                                    the industry's standard dummy text ever since the 1500s.</span>
                                                            </div>
                                                            <div class="table-actions">
                                                                <a href="#" class="active">
                                                                    <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                                                </a>
                                                                <div class="dropdown dropdown-click">
                                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <img class="svg" src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical">
                                                                    </button>
                                                                    <div class="dropdown-default dropdown-menu">
                                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#taskModal2"><img src="{{ asset('assets/img/svg/edit.svg') }}" alt="svg" class="svg"> edit</a>
                                                                        <a class="dropdown-item" href="#"><img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt=""> delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

                                                <div class="card-body task-card__body">
                                                    <div class="task-card__content d-flex justify-content-between align-items-center">
                                                        <div class="task-card__header">
                                                            <div class="checkbox-group d-flex">
                                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                    <input class="checkbox" type="checkbox" id="check-grp-task7" checked>
                                                                    <label for="check-grp-task7" class="">
                                                                        Dashboard design stucture
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                                                the industry's standard dummy text ever since the 1500s.</span>
                                                        </div>
                                                        <div class="table-actions">
                                                            <a href="#" class="">
                                                                <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                                            </a>
                                                            <div class="dropdown dropdown-click">
                                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <img class="svg" src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical">
                                                                </button>
                                                                <div class="dropdown-default dropdown-menu">
                                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#taskModal2"><img src="{{ asset('assets/img/svg/edit.svg') }}" alt="svg" class="svg"> edit</a>
                                                                    <a class="dropdown-item" href="#"><img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt=""> delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="card-body task-card__body">
                                                    <div class="task-card__content d-flex justify-content-between align-items-center">
                                                        <div class="task-card__header">
                                                            <div class="checkbox-group d-flex">
                                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                    <input class="checkbox" type="checkbox" id="check-grp-task8" checked>
                                                                    <label for="check-grp-task8" class="">
                                                                        Dashboard design stucture
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                                                the industry's standard dummy text ever since the 1500s.</span>
                                                        </div>
                                                        <div class="table-actions">
                                                            <a href="#" class="">
                                                                <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                                            </a>
                                                            <div class="dropdown dropdown-click">
                                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <img class="svg" src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical">
                                                                </button>
                                                                <div class="dropdown-default dropdown-menu">
                                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#taskModal2"><img src="{{ asset('assets/img/svg/edit.svg') }}" alt="svg" class="svg"> edit</a>
                                                                    <a class="dropdown-item" href="#"><img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt=""> delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="card-body task-card__body">
                                                    <div class="task-card__content d-flex justify-content-between align-items-center">
                                                        <div class="task-card__header">
                                                            <div class="checkbox-group d-flex">
                                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                    <input class="checkbox" type="checkbox" id="check-grp-task9" checked>
                                                                    <label for="check-grp-task9" class="">
                                                                        Dashboard design stucture
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                                                the industry's standard dummy text ever since the 1500s.</span>
                                                        </div>
                                                        <div class="table-actions">
                                                            <a href="#" class="">
                                                                <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                                            </a>
                                                            <div class="dropdown dropdown-click">
                                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <img class="svg" src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical">
                                                                </button>
                                                                <div class="dropdown-default dropdown-menu">
                                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#taskModal2"><img src="{{ asset('assets/img/svg/edit.svg') }}" alt="svg" class="svg"> edit</a>
                                                                    <a class="dropdown-item" href="#"><img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt=""> delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="pills-deleted" role="tabpanel" aria-labelledby="pills-deleted-tab">

                                                <div class="card-body task-card__body">
                                                    <div class="task-card__content d-flex justify-content-between align-items-center">
                                                        <div class="task-card__header">
                                                            <div class="checkbox-group d-flex">
                                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                    <input class="checkbox" type="checkbox" id="check-grp-task10">
                                                                    <label for="check-grp-task10" class="">
                                                                        Dashboard design stucture
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                                                the industry's standard dummy text ever since the 1500s.</span>
                                                        </div>
                                                        <div class="table-actions">
                                                            <a href="#" class="active">
                                                                <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                                            </a>
                                                            <div class="dropdown dropdown-click">
                                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <img class="svg" src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical">
                                                                </button>
                                                                <div class="dropdown-default dropdown-menu">
                                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#taskModal2"><img src="{{ asset('assets/img/svg/edit.svg') }}" alt="svg" class="svg"> edit</a>
                                                                    <a class="dropdown-item" href="#"><img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt=""> delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="card-body task-card__body">
                                                    <div class="task-card__content d-flex justify-content-between align-items-center">
                                                        <div class="task-card__header">
                                                            <div class="checkbox-group d-flex">
                                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                    <input class="checkbox" type="checkbox" id="check-grp-task11">
                                                                    <label for="check-grp-task11" class="">
                                                                        Dashboard design stucture
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                                                the industry's standard dummy text ever since the 1500s.</span>
                                                        </div>
                                                        <div class="table-actions">
                                                            <a href="#" class="active">
                                                                <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                                            </a>
                                                            <div class="dropdown dropdown-click">
                                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <img class="svg" src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical">
                                                                </button>
                                                                <div class="dropdown-default dropdown-menu">
                                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#taskModal2"><img src="{{ asset('assets/img/svg/edit.svg') }}" alt="svg" class="svg"> edit</a>
                                                                    <a class="dropdown-item" href="#"><img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt=""> delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="card-body task-card__body">
                                                    <div class="task-card__content d-flex justify-content-between align-items-center">
                                                        <div class="task-card__header">
                                                            <div class="checkbox-group d-flex">
                                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                    <input class="checkbox" type="checkbox" id="check-grp-task12">
                                                                    <label for="check-grp-task12" class="">
                                                                        Dashboard design stucture
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                                                the industry's standard dummy text ever since the 1500s.</span>
                                                        </div>
                                                        <div class="table-actions">
                                                            <a href="#" class="active">
                                                                <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                                            </a>
                                                            <div class="dropdown dropdown-click">
                                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <img class="svg" src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical">
                                                                </button>
                                                                <div class="dropdown-default dropdown-menu">
                                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#taskModal2"><img src="{{ asset('assets/img/svg/edit.svg') }}" alt="svg" class="svg"> edit</a>
                                                                    <a class="dropdown-item" href="#"><img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt=""> delete</a>
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
                        </div><!-- ends: .col-lg-10 -->
                    </div>
                </div><!-- ends: .col-lg-12 -->
            </div>
        </div>
    </div>
</div>
<!-- ends: .dm-page-content -->

<div class="modal fade task-modal" id="taskModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <h5 class="modal-title">Add Task</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <img src="{{ asset('assets/img/svg/x.svg') }}" alt="x" class="svg">
                    </button>
                </div>
                <form action="/">
                    <div class="form-group mb-20 mt-20">
                        <input type="text" class="form-control" placeholder="Title">
                    </div>
                    <div class="form-group mb-15">
                        <textarea class="form-control" placeholder="Add description"></textarea>
                    </div>
                </form>
                <div class="modal-footer m-n15">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Add Task</button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade task-modal" id="taskModal2" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Task</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <img src="{{ asset('assets/img/svg/x.svg') }}" alt="x" class="svg">
                    </button>
                </div>
                <form action="/">
                    <div class="form-group mb-20 mt-20">
                        <input type="text" class="form-control" placeholder="Edit Title" value="Dashboard design stucture">
                    </div>
                    <div class="form-group mb-15">
                        <textarea class="form-control" placeholder="Add description"></textarea>
                    </div>
                </form>
                <div class="modal-footer m-n15">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection