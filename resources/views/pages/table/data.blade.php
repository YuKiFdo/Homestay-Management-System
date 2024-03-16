@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.table-data') }}</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>{{ trans('menu.table-menu-title') }}</a></li>
                            <li class="breadcrumb-item"><a href="#">Apps</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.table-data') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-30">
            <div class="support-ticket-system support-ticket-system--search">
                <div class="breadcrumb-main m-0 breadcrumb-main--table justify-content-sm-between ">
                    <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                        <div class="d-flex align-items-center ticket__title justify-content-center me-md-25 mb-md-0 mb-20">
                            <h4 class="text-capitalize fw-500 breadcrumb-title">Data Table</h4>
                        </div>
                    </div>
                    <div class="action-btn">
                        <a href="#" class="btn btn-primary">
                            Export
                            <i class="las la-angle-down"></i>
                        </a>
                    </div>
                </div>
                <div class="support-form datatable-support-form d-flex justify-content-xxl-between justify-content-center align-items-center flex-wrap">
                    <div class="support-form__input">
                        <div class="d-flex flex-wrap">
                            <div class="support-form__input-id">
                                <label>Id:</label>
                                <div class="dm-select ">
                                    <select name="select-search" class="select-search form-control ">
                                        <option value="01">All</option>
                                        <option value="02">Option 2</option>
                                        <option value="03">Option 3</option>
                                        <option value="04">Option 4</option>
                                        <option value="05">Option 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="support-form__input-status">
                                <label>status:</label>
                                <div class="dm-select ">
                                    <select name="select-search" class="select-search form-control ">
                                        <option value="01">All</option>
                                        <option value="02">Option 2</option>
                                        <option value="03">Option 3</option>
                                        <option value="04">Option 4</option>
                                        <option value="05">Option 5</option>
                                    </select>
                                </div>
                            </div>
                            <button class="support-form__input-button">search</button>
                        </div>
                    </div>
                    <div class="support-form__search">
                        <div class="support-order-search">
                            <form action="/" class="support-order-search__form">
                                <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                                <input class="form-control border-0 box-shadow-none" type="search" placeholder="Search" aria-label="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="userDatatable userDatatable--ticket userDatatable--ticket--2 mt-1">
                    <div class="table-responsive">
                        <table class="table mb-0 table-borderless">
                            <thead>
                                <tr class="userDatatable-header">
                                    <th>
                                        <span class="userDatatable-title">ID</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">User</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Country</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Company</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Position</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Join Date</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Status</span>
                                    </th>
                                    <th class="actions">
                                        <span class="userDatatable-title">Actions</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#01</td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                    <h6>Kellie Marquot</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            United Street
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Business Development
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            Web Developer
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            January 20, 2020
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content d-inline-block">
                                            <span class="bg-opacity-success  color-success userDatatable-content-status active">active</span>
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                            <li>
                                                <a href="#" class="view">
                                                    <i class="uil uil-setting"></i>
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
                                    <td>#02</td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                    <h6>Robert Clinton</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Japan
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Vehicle Master
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            Senior Manager
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            January 20, 2020
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content d-inline-block">
                                            <span class="bg-opacity-warning  color-warning userDatatable-content-status active">deactivated</span>
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                            <li>
                                                <a href="#" class="view">
                                                    <i class="uil uil-setting"></i>
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
                                    <td>#03</td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                    <h6>Chris Joe</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            South Africa
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Business Development
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            Content writer
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            July 30, 2020
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content d-inline-block">
                                            <span class="bg-opacity-danger  color-danger userDatatable-content-status active">blocked</span>
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                            <li>
                                                <a href="#" class="view">
                                                    <i class="uil uil-setting"></i>
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
                                    <td>#04</td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                    <h6>Jack Kalis</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            South Korea
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Smart Collection
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            UX/UI Designer
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            June 20, 2020
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content d-inline-block">
                                            <span class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                            <li>
                                                <a href="#" class="view">
                                                    <i class="uil uil-setting"></i>
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
                                    <td>#05</td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                    <h6>Black Smith</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            United Kingdom
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Print Media
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            Graphic Designer
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            August 20, 2020
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content d-inline-block">
                                            <span class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                            <li>
                                                <a href="#" class="view">
                                                    <i class="uil uil-setting"></i>
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
                                    <td>#06</td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                    <h6>Aftab Ahmed</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Bangladesh
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Online Super Shop
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            Marketer
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            January 15, 2021
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content d-inline-block">
                                            <span class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                            <li>
                                                <a href="#" class="view">
                                                    <i class="uil uil-setting"></i>
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
                                    <td>#07</td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                    <h6>Daniel White</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Australia
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Business Development
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            Project Manager
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            January 20, 2021
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content d-inline-block">
                                            <span class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                            <li>
                                                <a href="#" class="view">
                                                    <i class="uil uil-setting"></i>
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
                                    <td>#08</td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                    <h6>Black Smith</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            United Kingdom
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Print Media
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            Graphic Designer
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            August 20, 2020
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content d-inline-block">
                                            <span class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                            <li>
                                                <a href="#" class="view">
                                                    <i class="uil uil-setting"></i>
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
                                    <td>#09</td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                    <h6>Aftab Ahmed</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Bangladesh
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Online Super Shop
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            Marketer
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            January 15, 2021
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content d-inline-block">
                                            <span class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                            <li>
                                                <a href="#" class="view">
                                                    <i class="uil uil-setting"></i>
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
                                    <td>#10</td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                    <h6>Daniel White</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Australia
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Business Development
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            Project Manager
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            January 20, 2021
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content d-inline-block">
                                            <span class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                            <li>
                                                <a href="#" class="view">
                                                    <i class="uil uil-setting"></i>
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
        <div class="col-12 mb-30">
            <div class="support-ticket-system support-ticket-system--search">
                <div class="breadcrumb-main m-0 breadcrumb-main--table justify-content-sm-between ">
                    <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                        <div class="d-flex align-items-center ticket__title justify-content-center me-md-25 mb-md-0 mb-20">
                            <h4 class="text-capitalize fw-500 breadcrumb-title">Data Table</h4>
                        </div>
                    </div>
                    <div class="action-btn">
                        <a href="#" class="btn btn-primary">
                            Export
                            <i class="las la-angle-down"></i>
                        </a>
                    </div>
                </div>
                <div class="support-form datatable-support-form d-flex justify-content-xxl-between justify-content-center align-items-center flex-wrap">
                    <div class="support-form__input">
                        <div class="d-flex flex-wrap">
                            <div class="support-form__input-id">
                                <label>Id:</label>
                                <div class="dm-select ">
                                    <select name="select-search" class="select-search form-control ">
                                        <option value="01">All</option>
                                        <option value="02">Option 2</option>
                                        <option value="03">Option 3</option>
                                        <option value="04">Option 4</option>
                                        <option value="05">Option 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="support-form__input-status">
                                <label>status:</label>
                                <div class="dm-select ">
                                    <select name="select-search" class="select-search form-control ">
                                        <option value="01">All</option>
                                        <option value="02">Option 2</option>
                                        <option value="03">Option 3</option>
                                        <option value="04">Option 4</option>
                                        <option value="05">Option 5</option>
                                    </select>
                                </div>
                            </div>
                            <button class="support-form__input-button">search</button>
                        </div>
                    </div>
                    <div class="support-form__search">
                        <div class="support-order-search">
                            <form action="/" class="support-order-search__form">
                                <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                                <input class="form-control border-0 box-shadow-none" type="search" placeholder="Search" aria-label="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="userDatatable userDatatable--ticket userDatatable--ticket--2 mt-1">
                    <div class="table-responsive">
                        <table class="table mb-0 table-borderless">
                            <thead>
                                <tr class="userDatatable-header">
                                    <th class="pe-0">
                                        <div class="d-flex align-items-center">
                                            <div class="custom-checkbox  check-all">
                                                <input class="checkbox" type="checkbox" id="check-333">
                                                <label for="check-333" class="ps-0">
                                                    <span class="checkbox-text userDatatable-title"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">User</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Country</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Company</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Position</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Join Date</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Status</span>
                                    </th>
                                    <th class="actions">
                                        <span class="userDatatable-title">Actions</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pe-0">
                                        <div class="d-flex">
                                            <div class="userDatatable__imgWrapper d-flex align-items-center m-0">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-#01">
                                                            <label for="check-grp-#01" class="ps-0"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                    <h6>Kellie Marquot</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            United Street
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Business Development
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            Web Developer
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            January 20, 2020
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content d-inline-block">
                                            <span class="bg-opacity-success  color-success userDatatable-content-status active">active</span>
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                            <li>
                                                <a href="#" class="view">
                                                    <i class="uil uil-setting"></i>
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
                                    <td class="pe-0">
                                        <div class="d-flex">
                                            <div class="userDatatable__imgWrapper d-flex align-items-center m-0">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-#02">
                                                            <label for="check-grp-#02" class="ps-0"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                    <h6>Robert Clinton</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Japan
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Vehicle Master
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            Senior Manager
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            January 20, 2020
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content d-inline-block">
                                            <span class="bg-opacity-warning  color-warning userDatatable-content-status active">deactivated</span>
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                            <li>
                                                <a href="#" class="view">
                                                    <i class="uil uil-setting"></i>
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
                                    <td class="pe-0">
                                        <div class="d-flex">
                                            <div class="userDatatable__imgWrapper d-flex align-items-center m-0">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-#03">
                                                            <label for="check-grp-#03" class="ps-0"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                    <h6>Chris Joe</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            South Africa
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Business Development
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            Content writer
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            July 30, 2020
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content d-inline-block">
                                            <span class="bg-opacity-danger  color-danger userDatatable-content-status active">blocked</span>
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                            <li>
                                                <a href="#" class="view">
                                                    <i class="uil uil-setting"></i>
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
                                    <td class="pe-0">
                                        <div class="d-flex">
                                            <div class="userDatatable__imgWrapper d-flex align-items-center m-0">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-#04">
                                                            <label for="check-grp-#04" class="ps-0"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                    <h6>Jack Kalis</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            South Korea
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Smart Collection
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            UX/UI Designer
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            June 20, 2020
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content d-inline-block">
                                            <span class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                            <li>
                                                <a href="#" class="view">
                                                    <i class="uil uil-setting"></i>
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
                                    <td class="pe-0">
                                        <div class="d-flex">
                                            <div class="userDatatable__imgWrapper d-flex align-items-center m-0">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-#05">
                                                            <label for="check-grp-#05" class="ps-0"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                    <h6>Black Smith</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            United Kingdom
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Print Media
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            Graphic Designer
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            August 20, 2020
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content d-inline-block">
                                            <span class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                            <li>
                                                <a href="#" class="view">
                                                    <i class="uil uil-setting"></i>
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
                                    <td class="pe-0">
                                        <div class="d-flex">
                                            <div class="userDatatable__imgWrapper d-flex align-items-center m-0">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-#06">
                                                            <label for="check-grp-#06" class="ps-0"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                    <h6>Aftab Ahmed</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Bangladesh
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Online Super Shop
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            Marketer
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            January 15, 2021
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content d-inline-block">
                                            <span class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                            <li>
                                                <a href="#" class="view">
                                                    <i class="uil uil-setting"></i>
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
                                    <td class="pe-0">
                                        <div class="d-flex">
                                            <div class="userDatatable__imgWrapper d-flex align-items-center m-0">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-#07">
                                                            <label for="check-grp-#07" class="ps-0"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                    <h6>Daniel White</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Australia
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Business Development
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            Project Manager
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            January 20, 2021
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content d-inline-block">
                                            <span class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                            <li>
                                                <a href="#" class="view">
                                                    <i class="uil uil-setting"></i>
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
                                    <td class="pe-0">
                                        <div class="d-flex">
                                            <div class="userDatatable__imgWrapper d-flex align-items-center m-0">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-#08">
                                                            <label for="check-grp-#08" class="ps-0"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                    <h6>Black Smith</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            United Kingdom
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Print Media
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            Graphic Designer
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            August 20, 2020
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content d-inline-block">
                                            <span class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                            <li>
                                                <a href="#" class="view">
                                                    <i class="uil uil-setting"></i>
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
                                    <td class="pe-0">
                                        <div class="d-flex">
                                            <div class="userDatatable__imgWrapper d-flex align-items-center m-0">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-#09">
                                                            <label for="check-grp-#09" class="ps-0"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                    <h6>Aftab Ahmed</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Bangladesh
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Online Super Shop
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            Marketer
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            January 15, 2021
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content d-inline-block">
                                            <span class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                            <li>
                                                <a href="#" class="view">
                                                    <i class="uil uil-setting"></i>
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
                                    <td class="pe-0">
                                        <div class="d-flex">
                                            <div class="userDatatable__imgWrapper d-flex align-items-center m-0">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-#10">
                                                            <label for="check-grp-#10" class="ps-0"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                    <h6>Daniel White</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Australia
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                            Business Development
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            Project Manager
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            January 20, 2021
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content d-inline-block">
                                            <span class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                            <li>
                                                <a href="#" class="view">
                                                    <i class="uil uil-setting"></i>
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
        <div class="col-lg-12 mb-30">
            <div class="card">
                <div class="card-header color-dark fw-500">
                    Project List
                </div>
                <div class="card-body">
                    <div class="userDatatable projectDatatable project-table w-100 border-0">
                        <div class="table-responsive table-responsive--dynamic">
                            <table class="table mb-0">
                                <thead>
                                    <tr class="userDatatable-header">
                                        <th>
                                            <span class="projectDatatable-title">project</span>
                                        </th>
                                        <th>
                                            <span class="projectDatatable-title">start date</span>
                                        </th>
                                        <th>
                                            <span class="projectDatatable-title">deadline</span>
                                        </th>
                                        <th>
                                            <span class="projectDatatable-title">Assigned To</span>
                                        </th>
                                        <th>
                                            <span class="projectDatatable-title">status</span>
                                        </th>
                                        <th>
                                            <span class="projectDatatable-title">completion</span>
                                        </th>
                                        <th>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable-inline-title">
                                                    <a href="#" class="text-dark fw-500">
                                                        <h6>Dashboard UI Project</h6>
                                                    </a>
                                                    <p class="pt-1 d-block mb-0">
                                                        Web Design
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                26 Dec 2019
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                18 Mar 2020
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="d-flex user-group-people__parent align-content-center">
                                                <li>
                                                    <a href="#"><img class="rounded-circle wh-34" src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img class="rounded-circle wh-34" src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img class="rounded-circle wh-34" src="{{ asset('assets/img/tm3.png') }}" alt="author"></a>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-inline-block">
                                                <span class="media-badge color-white bg-primary">early</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="project-progress d-flex align-items-center">
                                                <div class="user-group-progress-bar">
                                                    <div class="progress-wrap d-flex align-items-center mb-0">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="progress-percentage">30%</span>
                                                    </div>
                                                    <p class="color-light fs-12 mt-1 mb-0">12 / 15 tasks completed</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="project-progress text-end">
                                                <div class="dropdown  dropdown-click ">
                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                    </button>
                                                    <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu dropdown-menu--dynamic">
                                                        <a class="dropdown-item" href="#">Item One</a>
                                                        <a class="dropdown-item" href="#">Item Two</a>
                                                        <a class="dropdown-item" href="#">Item Three</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable-inline-title">
                                                    <a href="#" class="text-dark fw-500">
                                                        <h6>Custom Software Development</h6>
                                                    </a>
                                                    <p class="pt-1 d-block mb-0">
                                                        Web Design
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                26 Dec 2019
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                18 Mar 2020
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="d-flex user-group-people__parent align-content-center">
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
                                                    <a href="#"><img class="rounded-circle wh-34" src="{{ asset('assets/img/tm6.png') }}" alt="author"></a>
                                                </li>
                                                <li class="d-flex align-items-center ms-1"><span class="fs-12 color-light fw-500"><i class="las la-plus fs-10"></i>5 more</span></li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-inline-block">
                                                <span class="media-badge color-white bg-secondary">on time</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="project-progress d-flex align-items-center">
                                                <div class="user-group-progress-bar">
                                                    <div class="progress-wrap d-flex align-items-center mb-0">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="progress-percentage">30%</span>
                                                    </div>
                                                    <p class="color-light fs-12 mt-1 mb-0">12 / 15 tasks completed</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="project-progress text-end">
                                                <div class="dropdown  dropdown-click ">
                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                    </button>
                                                    <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu dropdown-menu--dynamic">
                                                        <a class="dropdown-item" href="#">Item One</a>
                                                        <a class="dropdown-item" href="#">Item Two</a>
                                                        <a class="dropdown-item" href="#">Item Three</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable-inline-title">
                                                    <a href="#" class="text-dark fw-500">
                                                        <h6>Application UI Design</h6>
                                                    </a>
                                                    <p class="pt-1 d-block mb-0">
                                                        Web Design
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                26 Dec 2019
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                18 Mar 2020
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="d-flex user-group-people__parent align-content-center">
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
                                                    <a href="#"><img class="rounded-circle wh-34" src="{{ asset('assets/img/tm6.png') }}" alt="author"></a>
                                                </li>
                                                <li class="d-flex align-items-center ms-1"><span class="fs-12 color-light fw-500"><i class="las la-plus fs-10"></i>5 more</span></li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-inline-block">
                                                <span class="media-badge color-white bg-primary">early</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="project-progress d-flex align-items-center">
                                                <div class="user-group-progress-bar">
                                                    <div class="progress-wrap d-flex align-items-center mb-0">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="progress-percentage">30%</span>
                                                    </div>
                                                    <p class="color-light fs-12 mt-1 mb-0">12 / 15 tasks completed</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="project-progress text-end">
                                                <div class="dropdown  dropdown-click ">
                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                    </button>
                                                    <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu dropdown-menu--dynamic">
                                                        <a class="dropdown-item" href="#">Item One</a>
                                                        <a class="dropdown-item" href="#">Item Two</a>
                                                        <a class="dropdown-item" href="#">Item Three</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable-inline-title">
                                                    <a href="#" class="text-dark fw-500">
                                                        <h6>Website Builder</h6>
                                                    </a>
                                                    <p class="pt-1 d-block mb-0">
                                                        Web Design
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                26 Dec 2019
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                18 Mar 2020
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="d-flex user-group-people__parent align-content-center">
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
                                                    <a href="#"><img class="rounded-circle wh-34" src="{{ asset('assets/img/tm6.png') }}" alt="author"></a>
                                                </li>
                                                <li class="d-flex align-items-center ms-1"><span class="fs-12 color-light fw-500"><i class="las la-plus fs-10"></i>5 more</span></li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-inline-block">
                                                <span class="media-badge color-white bg-primary">early</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="project-progress d-flex align-items-center">
                                                <div class="user-group-progress-bar">
                                                    <div class="progress-wrap d-flex align-items-center mb-0">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="progress-percentage">30%</span>
                                                    </div>
                                                    <p class="color-light fs-12 mt-1 mb-0">12 / 15 tasks completed</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="project-progress text-end">
                                                <div class="dropdown  dropdown-click ">
                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                    </button>
                                                    <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu dropdown-menu--dynamic">
                                                        <a class="dropdown-item" href="#">Item One</a>
                                                        <a class="dropdown-item" href="#">Item Two</a>
                                                        <a class="dropdown-item" href="#">Item Three</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable-inline-title">
                                                    <a href="#" class="text-dark fw-500">
                                                        <h6>Component Library</h6>
                                                    </a>
                                                    <p class="pt-1 d-block mb-0">
                                                        Web Design
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                26 Dec 2019
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                18 Mar 2020
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="d-flex user-group-people__parent align-content-center">
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
                                                    <a href="#"><img class="rounded-circle wh-34" src="{{ asset('assets/img/tm6.png') }}" alt="author"></a>
                                                </li>
                                                <li class="d-flex align-items-center ms-1"><span class="fs-12 color-light fw-500"><i class="las la-plus fs-10"></i>5 more</span></li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-inline-block">
                                                <span class="media-badge color-white bg-danger">on hold</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="project-progress d-flex align-items-center">
                                                <div class="user-group-progress-bar">
                                                    <div class="progress-wrap d-flex align-items-center mb-0">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="progress-percentage">30%</span>
                                                    </div>
                                                    <p class="color-light fs-12 mt-1 mb-0">12 / 15 tasks completed</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="project-progress text-end">
                                                <div class="dropdown  dropdown-click ">
                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                    </button>
                                                    <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu dropdown-menu--dynamic">
                                                        <a class="dropdown-item" href="#">Item One</a>
                                                        <a class="dropdown-item" href="#">Item Two</a>
                                                        <a class="dropdown-item" href="#">Item Three</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable-inline-title">
                                                    <a href="#" class="text-dark fw-500">
                                                        <h6>Dashboard UI Project</h6>
                                                    </a>
                                                    <p class="pt-1 d-block mb-0">
                                                        Web Design
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                26 Dec 2019
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                18 Mar 2020
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="d-flex user-group-people__parent align-content-center">
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
                                                    <a href="#"><img class="rounded-circle wh-34" src="{{ asset('assets/img/tm6.png') }}" alt="author"></a>
                                                </li>
                                                <li class="d-flex align-items-center ms-1"><span class="fs-12 color-light fw-500"><i class="las la-plus fs-10"></i>5 more</span></li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-inline-block">
                                                <span class="media-badge color-white bg-warning">late</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="project-progress d-flex align-items-center">
                                                <div class="user-group-progress-bar">
                                                    <div class="progress-wrap d-flex align-items-center mb-0">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="progress-percentage">30%</span>
                                                    </div>
                                                    <p class="color-light fs-12 mt-1 mb-0">12 / 15 tasks completed</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="project-progress text-end">
                                                <div class="dropdown  dropdown-click ">
                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                    </button>
                                                    <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu dropdown-menu--dynamic">
                                                        <a class="dropdown-item" href="#">Item One</a>
                                                        <a class="dropdown-item" href="#">Item Two</a>
                                                        <a class="dropdown-item" href="#">Item Three</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable-inline-title">
                                                    <a href="#" class="text-dark fw-500">
                                                        <h6>Custom Software Development</h6>
                                                    </a>
                                                    <p class="pt-1 d-block mb-0">
                                                        Web Design
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                26 Dec 2019
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                18 Mar 2020
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="d-flex user-group-people__parent align-content-center">
                                                <li>
                                                    <a href="#"><img class="rounded-circle wh-34" src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img class="rounded-circle wh-34" src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img class="rounded-circle wh-34" src="{{ asset('assets/img/tm3.png') }}" alt="author"></a>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-inline-block">
                                                <span class="media-badge color-white bg-success">complete</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="project-progress d-flex align-items-center">
                                                <div class="media-ui--completed ">
                                                    <div class="user-group-progress-bar">
                                                        <div class="progress-wrap d-flex align-items-center mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <span class="progress-icon"><img src="{{ asset('assets/img/svg/check.svg') }}" alt="check" class="svg color-success"></span>
                                                        </div>
                                                        <p class="color-light fs-12 mt-1 mb-0">15 / 15 tasks completed</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="project-progress text-end">
                                                <div class="dropdown  dropdown-click ">
                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                    </button>
                                                    <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu dropdown-menu--dynamic">
                                                        <a class="dropdown-item" href="#">Item One</a>
                                                        <a class="dropdown-item" href="#">Item Two</a>
                                                        <a class="dropdown-item" href="#">Item Three</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable-inline-title">
                                                    <a href="#" class="text-dark fw-500">
                                                        <h6>Application UI Design</h6>
                                                    </a>
                                                    <p class="pt-1 d-block mb-0">
                                                        Web Design
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                26 Dec 2019
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                18 Mar 2020
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="d-flex user-group-people__parent align-content-center">
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
                                                    <a href="#"><img class="rounded-circle wh-34" src="{{ asset('assets/img/tm6.png') }}" alt="author"></a>
                                                </li>
                                                <li class="d-flex align-items-center ms-1"><span class="fs-12 color-light fw-500"><i class="las la-plus fs-10"></i>5 more</span></li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-inline-block">
                                                <span class="media-badge color-white bg-primary">early</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="project-progress d-flex align-items-center">
                                                <div class="user-group-progress-bar">
                                                    <div class="progress-wrap d-flex align-items-center mb-0">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="progress-percentage">30%</span>
                                                    </div>
                                                    <p class="color-light fs-12 mt-1 mb-0">12 / 15 tasks completed</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="project-progress text-end">
                                                <div class="dropdown  dropdown-click ">
                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                    </button>
                                                    <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu dropdown-menu--dynamic">
                                                        <a class="dropdown-item" href="#">Item One</a>
                                                        <a class="dropdown-item" href="#">Item Two</a>
                                                        <a class="dropdown-item" href="#">Item Three</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable-inline-title">
                                                    <a href="#" class="text-dark fw-500">
                                                        <h6>Website Builder</h6>
                                                    </a>
                                                    <p class="pt-1 d-block mb-0">
                                                        Web Design
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                26 Dec 2019
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                18 Mar 2020
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="d-flex user-group-people__parent align-content-center">
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
                                                    <a href="#"><img class="rounded-circle wh-34" src="{{ asset('assets/img/tm6.png') }}" alt="author"></a>
                                                </li>
                                                <li class="d-flex align-items-center ms-1"><span class="fs-12 color-light fw-500"><i class="las la-plus fs-10"></i>5 more</span></li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-inline-block">
                                                <span class="media-badge color-white bg-primary">early</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="project-progress d-flex align-items-center">
                                                <div class="user-group-progress-bar">
                                                    <div class="progress-wrap d-flex align-items-center mb-0">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="progress-percentage">30%</span>
                                                    </div>
                                                    <p class="color-light fs-12 mt-1 mb-0">12 / 15 tasks completed</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="project-progress text-end">
                                                <div class="dropdown  dropdown-click ">
                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                    </button>
                                                    <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu dropdown-menu--dynamic">
                                                        <a class="dropdown-item" href="#">Item One</a>
                                                        <a class="dropdown-item" href="#">Item Two</a>
                                                        <a class="dropdown-item" href="#">Item Three</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable-inline-title">
                                                    <a href="#" class="text-dark fw-500">
                                                        <h6>Custom Software Development</h6>
                                                    </a>
                                                    <p class="pt-1 d-block mb-0">
                                                        Web Design
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                26 Dec 2019
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                18 Mar 2020
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="d-flex user-group-people__parent align-content-center">
                                                <li>
                                                    <a href="#"><img class="rounded-circle wh-34" src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img class="rounded-circle wh-34" src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img class="rounded-circle wh-34" src="{{ asset('assets/img/tm3.png') }}" alt="author"></a>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="d-inline-block">
                                                <span class="media-badge color-white bg-secondary">on time</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="project-progress d-flex align-items-center">
                                                <div class="user-group-progress-bar">
                                                    <div class="progress-wrap d-flex align-items-center mb-0">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="progress-percentage">30%</span>
                                                    </div>
                                                    <p class="color-light fs-12 mt-1 mb-0">12 / 15 tasks completed</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="project-progress text-end">
                                                <div class="dropdown  dropdown-click ">
                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                    </button>
                                                    <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu dropdown-menu--dynamic">
                                                        <a class="dropdown-item" href="#">Item One</a>
                                                        <a class="dropdown-item" href="#">Item Two</a>
                                                        <a class="dropdown-item" href="#">Item Three</a>
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
        <div class="col-lg-12 mb-30">
            <div class="card">
                <div class="card-header color-dark fw-500">
                    User List
                </div>
                <div class="card-body">
                    <div class="userDatatable global-shadow border-light-0 w-100">
                        <div class="table-responsive">
                            <table class="table mb-0 table-borderless">
                                <thead>
                                    <tr class="userDatatable-header">
                                        <th>
                                            <div class="d-flex align-items-center">
                                                <div class="custom-checkbox  check-all">
                                                    <input class="checkbox" type="checkbox" id="check-45">
                                                    <label for="check-45">
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
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mb-30">
            <div class="card">
                <div class="card-header color-dark fw-500">
                    Basic Usage
                </div>
                <div class="card-body p-0">
                    <div class="form-group mb-0 status-radio px-25 pt-25">
                        <div class="d-flex">
                            <div class="radio-horizontal-list d-flex flex-wrap">
                                <div class="radio-theme-default custom-radio  me-20">
                                    <input class="radio" type="radio" name="radio-optional" value=0 id="radio-hl1">
                                    <label for="radio-hl1">
                                        <span class="radio-text">Checkbox</span>
                                    </label>
                                </div>
                                <div class="radio-theme-default custom-radio  me-20">
                                    <input class="radio" type="radio" name="radio-optional" value=0 id="radio-hl2">
                                    <label for="radio-hl2">
                                        <span class="radio-text">Radio</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table4 p-25 mb-30">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr class="userDatatable-header">
                                        <th>
                                            <div class="d-flex align-items-center">
                                                <div class="custom-checkbox  check-all">
                                                    <input class="checkbox" type="checkbox" id="check-4">
                                                    <label for="check-4">
                                                        <span class="ms-20 userDatatable-title">Name</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Age</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Address</span>
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
                                                                <input class="checkbox" type="checkbox" id="check-grp-52">
                                                                <label for="check-grp-52"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="userDatatable-content">
                                                    Mike
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                32
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                10 Downing Street
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                    <div class="checkbox-group-wrapper">
                                                        <div class="checkbox-group d-flex">
                                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                <input class="checkbox" type="checkbox" id="check-grp-53">
                                                                <label for="check-grp-53"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="userDatatable-content">
                                                    Jhon
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                42
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                5 Downing Street
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
        <div class="col-lg-12 mb-30">
            <div class="card">
                <div class="card-header color-dark fw-500">
                    Filter and sorter
                </div>
                <div class="card-body p-0">
                    <div class="table4 table5 p-25">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr class="userDatatable-header">
                                        <th>
                                            <div class="userDatatable-title">
                                                Age
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <span class="userDatatable-sort">
                                                        <i class="fas fa-caret-down"></i>
                                                    </span>
                                                    <span class="userDatatable-filter">
                                                        <i class="fas fa-filter"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="userDatatable-title">
                                                Age
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <span class="userDatatable-sort">
                                                        <i class="fas fa-sort-up up"></i>
                                                        <i class="fas fa-caret-down down"></i>
                                                    </span>
                                                    <span class="userDatatable-filter">
                                                        <i class="fas fa-filter"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="userDatatable-title">
                                                Address
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <span class="userDatatable-sort">
                                                        <i class="fas fa-sort-up up"></i>
                                                        <i class="fas fa-caret-down down"></i>
                                                    </span>
                                                    <span class="userDatatable-filter">
                                                        <i class="fas fa-filter"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">
                                                Mike
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                32
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                10 Herry Street
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">
                                                Jhon
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                2
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                34 Lolona Street
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">
                                                Hulk
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                4
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                5 Rigliah Street
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">
                                                Percy Jacksion
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                5
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                24 Downing Street
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">
                                                Donald
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                7
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                5 Downing Street
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">
                                                Mac Jons
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                8
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                18 Downing Street
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">
                                                Hery
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                15
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                5 Downing Street
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">
                                                Jhon Bush
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                18
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                85 Downing Street
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">
                                                Rabin
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                23
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                5 Downing Street
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">
                                                Herry
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                28
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                12 Downing Street
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
        <div class="col-lg-12 mb-30">
            <div class="card">
                <div class="card-header color-dark fw-500">
                    Pagination
                </div>
                <div class="card-body p-0">
                    <div class="table4 table5 p-25">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr class="userDatatable-header">
                                        <th>
                                            <div class="userDatatable-title">
                                                Age
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <span class="userDatatable-sort">
                                                        <i class="fas fa-caret-down"></i>
                                                    </span>
                                                    <span class="userDatatable-filter">
                                                        <i class="fas fa-filter"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="userDatatable-title">
                                                Age
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <span class="userDatatable-sort">
                                                        <i class="fas fa-sort-up up"></i>
                                                        <i class="fas fa-caret-down down"></i>
                                                    </span>
                                                    <span class="userDatatable-filter">
                                                        <i class="fas fa-filter"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="userDatatable-title">
                                                Address
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <span class="userDatatable-sort">
                                                        <i class="fas fa-sort-up up"></i>
                                                        <i class="fas fa-caret-down down"></i>
                                                    </span>
                                                    <span class="userDatatable-filter">
                                                        <i class="fas fa-filter"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">
                                                Mike
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                32
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                10 Herry Street
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">
                                                Jhon
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                2
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                34 Lolona Street
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">
                                                Hulk
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                4
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                5 Rigliah Street
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">
                                                Percy Jacksion
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                5
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                24 Downing Street
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">
                                                Donald
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                7
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                5 Downing Street
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">
                                                Mac Jons
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                8
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                18 Downing Street
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">
                                                Hery
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                15
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                5 Downing Street
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">
                                                Jhon Bush
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                18
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                85 Downing Street
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">
                                                Rabin
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                23
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                5 Downing Street
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">
                                                Herry
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                28
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                12 Downing Street
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-end mt-30">
                            <div class="pagination-total-text">1-3 of 8 items</div>
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
        <div class="col-lg-12 mb-30">
            <div class="card">
                <div class="card-header color-dark fw-500">
                    Task list
                </div>
                <div class="card-body p-0">
                    <div class="card-body px-0 pt-15 pb-15">
                        <div class="project-task table-responsive table-responsive--dynamic">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr class="project-task-list ptl--hover draggable " draggable="true">
                                        <td>
                                            <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                    <input class="checkbox" type="checkbox" id="check-grp-1" checked>
                                                    <label for="check-grp-1" class="fs-14 color-light strikethrough">
                                                        Add images to the product
                                                        gallery
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="project-task-list__right">
                                                <ul class="d-flex align-content-center">
                                                    <li>
                                                        <span class="fs-12 text-light time-completed">09:30
                                                            AM</span>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="cross">
                                                            <i class="uil uil-times"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="plus">
                                                            <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="dropdown dropleft">
                                                            <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu--dynamic">
                                                                <a class="dropdown-item" href="#">view</a>
                                                                <a class="dropdown-item" href="#">edit</a>
                                                                <a class="dropdown-item" href="#">leave</a>
                                                                <a class="dropdown-item" href="#">delete</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="project-task-list ptl--hover draggable " draggable="true">
                                        <td>
                                            <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                    <input class="checkbox" type="checkbox" id="check-grp-2" checked>
                                                    <label for="check-grp-2" class="fs-14 color-light strikethrough">
                                                        Update user profile page
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="project-task-list__right">
                                                <ul class="d-flex align-content-center">
                                                    <li>
                                                        <span class="fs-12 text-light time-completed">09:30
                                                            AM</span>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="cross">
                                                            <i class="uil uil-times"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="plus">
                                                            <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="dropdown dropleft">
                                                            <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu--dynamic">
                                                                <a class="dropdown-item" href="#">view</a>
                                                                <a class="dropdown-item" href="#">edit</a>
                                                                <a class="dropdown-item" href="#">leave</a>
                                                                <a class="dropdown-item" href="#">delete</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="project-task-list ptl--hover draggable " draggable="true">
                                        <td>
                                            <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                    <input class="checkbox" type="checkbox" id="check-grp-task3">
                                                    <label for="check-grp-task3" class="fs-14 color-light strikethrough">
                                                        Support tickets list doesn&#39;t support commas
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="project-task-list__right">
                                                <ul class="d-flex align-content-center">
                                                    <li>
                                                        <span class="fs-12 text-light time-completed">8:30
                                                            AM</span>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="cross">
                                                            <i class="uil uil-times"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="plus">
                                                            <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="dropdown dropleft">
                                                            <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu--dynamic">
                                                                <a class="dropdown-item" href="#">view</a>
                                                                <a class="dropdown-item" href="#">edit</a>
                                                                <a class="dropdown-item" href="#">leave</a>
                                                                <a class="dropdown-item" href="#">delete</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="project-task-list ptl--hover draggable " draggable="true">
                                        <td>
                                            <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                    <input class="checkbox" type="checkbox" id="check-grp-task4">
                                                    <label for="check-grp-task4" class="fs-14 color-light strikethrough">
                                                        Changing title text on single locations pages
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="project-task-list__right">
                                                <ul class="d-flex align-content-center">
                                                    <li>
                                                        <span class="fs-12 text-light time-completed">10:00
                                                            AM</span>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="cross">
                                                            <i class="uil uil-times"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="plus">
                                                            <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="dropdown dropleft">
                                                            <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu--dynamic">
                                                                <a class="dropdown-item" href="#">view</a>
                                                                <a class="dropdown-item" href="#">edit</a>
                                                                <a class="dropdown-item" href="#">leave</a>
                                                                <a class="dropdown-item" href="#">delete</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="project-task-list ptl--hover draggable " draggable="true">
                                        <td>
                                            <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                    <input class="checkbox" type="checkbox" id="check-grp-task5">
                                                    <label for="check-grp-task5" class="fs-14 color-light strikethrough">
                                                        Registration Confirmation! Email is missing some information
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="project-task-list__right">
                                                <ul class="d-flex align-content-center">
                                                    <li>
                                                        <span class="fs-12 text-light time-completed">8:30
                                                            PM</span>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="cross">
                                                            <i class="uil uil-times"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="plus">
                                                            <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="dropdown dropleft">
                                                            <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu--dynamic">
                                                                <a class="dropdown-item" href="#">view</a>
                                                                <a class="dropdown-item" href="#">edit</a>
                                                                <a class="dropdown-item" href="#">leave</a>
                                                                <a class="dropdown-item" href="#">delete</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="project-task-list ptl--hover draggable " draggable="true">
                                        <td>
                                            <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                    <input class="checkbox" type="checkbox" id="check-grp-task6">
                                                    <label for="check-grp-task6" class="fs-14 color-light strikethrough">
                                                        Login page not redirecting wrong
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="project-task-list__right">
                                                <ul class="d-flex align-content-center">
                                                    <li>
                                                        <span class="fs-12 text-light time-completed">Yesterday</span>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="cross">
                                                            <i class="uil uil-times"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="plus">
                                                            <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="dropdown dropleft">
                                                            <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu--dynamic">
                                                                <a class="dropdown-item" href="#">view</a>
                                                                <a class="dropdown-item" href="#">edit</a>
                                                                <a class="dropdown-item" href="#">leave</a>
                                                                <a class="dropdown-item" href="#">delete</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="project-task-list ptl--hover draggable " draggable="true">
                                        <td>
                                            <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                    <input class="checkbox" type="checkbox" id="check-grp-task7">
                                                    <label for="check-grp-task7" class="fs-14 color-light strikethrough">
                                                        Custom Field for Registration
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="project-task-list__right">
                                                <ul class="d-flex align-content-center">
                                                    <li>
                                                        <span class="fs-12 text-light time-completed">Wed</span>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="cross">
                                                            <i class="uil uil-times"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="plus">
                                                            <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="dropdown dropleft">
                                                            <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu--dynamic">
                                                                <a class="dropdown-item" href="#">view</a>
                                                                <a class="dropdown-item" href="#">edit</a>
                                                                <a class="dropdown-item" href="#">leave</a>
                                                                <a class="dropdown-item" href="#">delete</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="task-list-btn px-25 my-10">
                                <button class="text-primary">
                                    <img class="svg" src="{{ asset('assets/img/svg/plus.svg') }}" alt="">Add New
                                    Task</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection