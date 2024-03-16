@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="todo-breadcrumb">

                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.todo-menu-title') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.todo-menu-title') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-25">
                <div class="card-header">
                    <h6>Task Lists</h6>
                </div>
                <div class="card-body px-0 pt-15 pb-25">
                    <div class="todo-task table-responsive todo-task1">
                        <table class="table table-borderless">
                            <tbody>

                                <tr class="todo-list ptl--hover draggable" draggable="true">
                                    <td>
                                        <div class="checkbox-group d-flex">
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                <input class="checkbox" type="checkbox" id="check-grp-td1" checked>
                                                <label for="check-grp-td1" class="fs-14 color-primary strikethrough">
                                                    Add images to the product gallery
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="todo-list__right">
                                            <ul class="d-flex align-content-center justify-content-end">
                                                <li>
                                                    <a href="#" class="plus">
                                                        <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="active ">
                                                        <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="">
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>


                                <tr class="todo-list ptl--hover draggable" draggable="true">
                                    <td>
                                        <div class="checkbox-group d-flex">
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                <input class="checkbox" type="checkbox" id="check-grp-td2" checked>
                                                <label for="check-grp-td2" class="fs-14 color-primary strikethrough">
                                                    Update user profile page
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="todo-list__right">
                                            <ul class="d-flex align-content-center justify-content-end">
                                                <li>
                                                    <a href="#" class="plus">
                                                        <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="active ">
                                                        <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="">
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>


                                <tr class="todo-list ptl--hover draggable" draggable="true">
                                    <td>
                                        <div class="checkbox-group d-flex">
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                <input class="checkbox" type="checkbox" id="check-grp-td3">
                                                <label for="check-grp-td3" class="fs-14 color-primary strikethrough">
                                                    Support tickets list doesn&#39;t support commas
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="todo-list__right">
                                            <ul class="d-flex align-content-center justify-content-end">
                                                <li>
                                                    <a href="#" class="plus">
                                                        <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="">
                                                        <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="">
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>


                                <tr class="todo-list ptl--hover draggable" draggable="true">
                                    <td>
                                        <div class="checkbox-group d-flex">
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                <input class="checkbox" type="checkbox" id="check-grp-td4">
                                                <label for="check-grp-td4" class="fs-14 color-primary strikethrough">
                                                    Changing title text on single locations pages
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="todo-list__right">
                                            <ul class="d-flex align-content-center justify-content-end">
                                                <li>
                                                    <a href="#" class="plus">
                                                        <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="active ">
                                                        <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="">
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>


                                <tr class="todo-list ptl--hover draggable" draggable="true">
                                    <td>
                                        <div class="checkbox-group d-flex">
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                <input class="checkbox" type="checkbox" id="check-grp-td5">
                                                <label for="check-grp-td5" class="fs-14 color-primary strikethrough">
                                                    Registration Confirmation! Email is missing some information
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="todo-list__right">
                                            <ul class="d-flex align-content-center justify-content-end">
                                                <li>
                                                    <a href="#" class="plus">
                                                        <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="">
                                                        <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="">
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>


                                <tr class="todo-list ptl--hover draggable" draggable="true">
                                    <td>
                                        <div class="checkbox-group d-flex">
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                <input class="checkbox" type="checkbox" id="check-grp-td6">
                                                <label for="check-grp-td6" class="fs-14 color-primary strikethrough">
                                                    Login page not redirecting wrong
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="todo-list__right">
                                            <ul class="d-flex align-content-center justify-content-end">
                                                <li>
                                                    <a href="#" class="plus">
                                                        <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="">
                                                        <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="">
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>


                                <tr class="todo-list ptl--hover draggable" draggable="true">
                                    <td>
                                        <div class="checkbox-group d-flex">
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                <input class="checkbox" type="checkbox" id="check-grp-td7">
                                                <label for="check-grp-td7" class="fs-14 color-primary strikethrough">
                                                    Custom Field for Registration
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="todo-list__right">
                                            <ul class="d-flex align-content-center justify-content-end">
                                                <li>
                                                    <a href="#" class="plus">
                                                        <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="">
                                                        <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="">
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="add-task-action">
                        <button type="submit" class="btn btn-primary btn-transparent-primary btn-lg" data-bs-toggle="modal" data-bs-target="#add-todo-modal">
                            <img class="svg" src="{{ asset('assets/img/svg/plus.svg') }}" alt=""> Add New Task</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ends: col-xl-6 -->
        <div class="col-xl-6">
            <div class="card mb-25">
                <div class="card-header">
                    <h6>Task Lists</h6>
                </div>
                <div class="card-body px-0 pt-15 pb-25">
                    <div class="todo-task table-responsive todo-task2">
                        <table class="table table-borderless">
                            <tbody>

                                <tr class="todo-list ptl--hover draggable" draggable="true">
                                    <td>
                                        <div class="checkbox-group d-flex">
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                <input class="checkbox" type="checkbox" id="check-grp-td8" checked>
                                                <label for="check-grp-td8" class="fs-14 color-primary strikethrough">
                                                    Add images to the product gallery
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="todo-list__right">
                                            <ul class="d-flex align-content-center justify-content-end">
                                                <li>
                                                    <a href="#" class="plus">
                                                        <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="active ">
                                                        <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="">
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>


                                <tr class="todo-list ptl--hover draggable" draggable="true">
                                    <td>
                                        <div class="checkbox-group d-flex">
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                <input class="checkbox" type="checkbox" id="check-grp-td9" checked>
                                                <label for="check-grp-td9" class="fs-14 color-primary strikethrough">
                                                    Update user profile page
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="todo-list__right">
                                            <ul class="d-flex align-content-center justify-content-end">
                                                <li>
                                                    <a href="#" class="plus">
                                                        <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="active ">
                                                        <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="">
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>


                                <tr class="todo-list ptl--hover draggable" draggable="true">
                                    <td>
                                        <div class="checkbox-group d-flex">
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                <input class="checkbox" type="checkbox" id="check-grp-td10">
                                                <label for="check-grp-td10" class="fs-14 color-primary strikethrough">
                                                    Support tickets list doesn&#39;t support commas
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="todo-list__right">
                                            <ul class="d-flex align-content-center justify-content-end">
                                                <li>
                                                    <a href="#" class="plus">
                                                        <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="">
                                                        <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="">
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>


                                <tr class="todo-list ptl--hover draggable" draggable="true">
                                    <td>
                                        <div class="checkbox-group d-flex">
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                <input class="checkbox" type="checkbox" id="check-grp-td11">
                                                <label for="check-grp-td11" class="fs-14 color-primary strikethrough">
                                                    Changing title text on single locations pages
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="todo-list__right">
                                            <ul class="d-flex align-content-center justify-content-end">
                                                <li>
                                                    <a href="#" class="plus">
                                                        <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="active ">
                                                        <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="">
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>


                                <tr class="todo-list ptl--hover draggable" draggable="true">
                                    <td>
                                        <div class="checkbox-group d-flex">
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                <input class="checkbox" type="checkbox" id="check-grp-td12">
                                                <label for="check-grp-td12" class="fs-14 color-primary strikethrough">
                                                    Registration Confirmation! Email is missing some information
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="todo-list__right">
                                            <ul class="d-flex align-content-center justify-content-end">
                                                <li>
                                                    <a href="#" class="plus">
                                                        <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="">
                                                        <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="">
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>


                                <tr class="todo-list ptl--hover draggable" draggable="true">
                                    <td>
                                        <div class="checkbox-group d-flex">
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                <input class="checkbox" type="checkbox" id="check-grp-td13">
                                                <label for="check-grp-td13" class="fs-14 color-primary strikethrough">
                                                    Login page not redirecting wrong
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="todo-list__right">
                                            <ul class="d-flex align-content-center justify-content-end">
                                                <li>
                                                    <a href="#" class="plus">
                                                        <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="">
                                                        <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="">
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>


                                <tr class="todo-list ptl--hover draggable" draggable="true">
                                    <td>
                                        <div class="checkbox-group d-flex">
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                <input class="checkbox" type="checkbox" id="check-grp-td14">
                                                <label for="check-grp-td14" class="fs-14 color-primary strikethrough">
                                                    Custom Field for Registration
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="todo-list__right">
                                            <ul class="d-flex align-content-center justify-content-end">
                                                <li>
                                                    <a href="#" class="plus">
                                                        <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="">
                                                        <img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="">
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- ends: todo-task -->
                    <div class="add-task-action">
                        <button type="submit" class="btn btn-primary btn-transparent-primary btn-lg" data-bs-toggle="modal" data-bs-target="#add-todo-modal">
                            <img class="svg" src="{{ asset('assets/img/svg/plus.svg') }}" alt=""> Add New Task</button>
                    </div>
                    <!-- ends: add-task-action -->
                </div>
            </div>
        </div>
        <!-- ends: col-xl-6 -->
    </div>
</div>

<div class="add-todo-modal modal fade" id="add-todo-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md add-todo-dialog modal-dialog-centered" id="add-todo" role="document">
        <div class="modal-content">
            <div class="modal-header add-todo-header">
                <h6 class="modal-title add-todo-title">Add New Todo</h6>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <img src="{{ asset('assets/img/svg/x.svg') }}" alt="x" class="svg"></button>
            </div>
            <div class="modal-body">
                <div class="add-todo-form">
                    <form action="/">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" name="todo-text" placeholder="Write your task">
                        </div>
                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-lg btn-primary">Add Task</button>
                        </div>
                    </form>
                </div>
                <!-- ends: .add-todo-form -->
            </div>
        </div>
    </div>
</div>
@endsection