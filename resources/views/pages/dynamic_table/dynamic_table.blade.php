@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 mb-30">
            <div class="card mt-30">
                <div class="card-body">
                    <div class="userDatatable adv-table-table global-shadow border-0 bg-white w-100 adv-table">
                        <div class="table-responsive">
                            <div class="adv-table-table__header">
                                <h4>{{ trans('menu.dynamic-table-menu-title') }}</h4>
                                <div class="adv-table-table__button">
                                    <div class="dropdown">
                                        <a class="btn btn-primary dropdown-toggle dm-select" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Export
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">copy</a>
                                            <a class="dropdown-item" href="#">csv</a>
                                            <a class="dropdown-item" href="#">print</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="filter-form-container"></div>
                            <table class="table mb-0 table-borderless adv-table" data-sorting="true" data-filter-container="#filter-form-container" data-paging-current="1" data-paging-position="right" data-paging-size="10">
                                <thead>
                                    <tr class="userDatatable-header">
                                        <th>
                                            <span class="userDatatable-title">id</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">user</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">emaill</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">company</span>
                                        </th>
                                        <th data-type="html" data-name='position'>
                                            <span class="userDatatable-title">position</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">join date</span>
                                        </th>
                                        <th data-type="html" data-name='status'>
                                            <span class="userDatatable-title">status</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title float-right">action</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">01</div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable-inline-title">
                                                    <a href="#" class="text-dark fw-500">
                                                        <h6>Kellie Marquot </h6>
                                                    </a>
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
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">02</div>
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
                                            <div class="userDatatable-content">
                                                Japan
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Vehicle Master
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Senior Manager
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                January 25, 2020
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content d-inline-block">
                                                <span class="bg-opacity-warning  color-warning rounded-pill userDatatable-content-status active">deactivate</span>
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
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">03</div>
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
                                            <div class="userDatatable-content">
                                                South Korea
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Smart Collection
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                UX/UI Designer
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                June 20, 2020
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
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">04</div>
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
                                            <div class="userDatatable-content">
                                                South Africa
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Business Development
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Content writer
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                July 30, 2020
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
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">05</div>
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
                                            <div class="userDatatable-content">
                                                United Kingdom
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Print Media
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Graphic Designer
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                August 20, 2020
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
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">06</div>
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
                                            <div class="userDatatable-content">
                                                Bangladesh
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Online Super Shop
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Marketer
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                January 15, 2021
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
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">07</div>
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
                                            <div class="userDatatable-content">
                                                Australia
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Business Development
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Project Manager
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                January 20, 2021
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
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">08</div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable-inline-title">
                                                    <a href="#" class="text-dark fw-500">
                                                        <h6>Chris john</h6>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Japan
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Boss IT Farm
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Web Developer
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                February 20, 2021
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
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">09</div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable-inline-title">
                                                    <a href="#" class="text-dark fw-500">
                                                        <h6>David Manal</h6>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Russia
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Business Development
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                UI Designer
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                March 20, 2021
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
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">10</div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable-inline-title">
                                                    <a href="#" class="text-dark fw-500">
                                                        <h6>Kapil Deb</h6>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                India
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Business Development
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Manager
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                March 31, 2021
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
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">11</div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable-inline-title">
                                                    <a href="#" class="text-dark fw-500">
                                                        <h6>Kellie Marquot </h6>
                                                    </a>
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
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">12</div>
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
                                            <div class="userDatatable-content">
                                                Japan
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Vehicle Master
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Senior Manager
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                January 25, 2020
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content d-inline-block">
                                                <span class="bg-opacity-warning  color-warning rounded-pill userDatatable-content-status active">deactivate</span>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                <li>
                                                    <a href="#" class="view">
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">13</div>
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
                                            <div class="userDatatable-content">
                                                South Korea
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Smart Collection
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                UX/UI Designer
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                June 20, 2020
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
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">14</div>
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
                                            <div class="userDatatable-content">
                                                South Africa
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Business Development
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Content writer
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                July 30, 2020
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
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">15</div>
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
                                            <div class="userDatatable-content">
                                                United Kingdom
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Print Media
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Graphic Designer
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                August 20, 2020
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
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">16</div>
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
                                            <div class="userDatatable-content">
                                                Bangladesh
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Online Super Shop
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Marketer
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                January 15, 2021
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
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">17</div>
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
                                            <div class="userDatatable-content">
                                                Australia
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Business Development
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Project Manager
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                January 20, 2021
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
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">18</div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable-inline-title">
                                                    <a href="#" class="text-dark fw-500">
                                                        <h6>Chris john</h6>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Japan
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Boss IT Farm
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Web Developer
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                February 20, 2021
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
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">19</div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable-inline-title">
                                                    <a href="#" class="text-dark fw-500">
                                                        <h6>David Manal</h6>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Russia
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Business Development
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                UI Designer
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                March 20, 2021
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
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">20</div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable-inline-title">
                                                    <a href="#" class="text-dark fw-500">
                                                        <h6>Kapil Deb</h6>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                India
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Business Development
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Manager
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                March 31, 2021
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
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">21</div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable-inline-title">
                                                    <a href="#" class="text-dark fw-500">
                                                        <h6>Kellie Marquot </h6>
                                                    </a>
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
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">12</div>
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
                                            <div class="userDatatable-content">
                                                Japan
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Vehicle Master
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Senior Manager
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                January 25, 2020
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content d-inline-block">
                                                <span class="bg-opacity-warning  color-warning rounded-pill userDatatable-content-status active">deactivate</span>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                <li>
                                                    <a href="#" class="view">
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">23</div>
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
                                            <div class="userDatatable-content">
                                                South Korea
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Smart Collection
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                UX/UI Designer
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                June 20, 2020
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
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">24</div>
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
                                            <div class="userDatatable-content">
                                                South Africa
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Business Development
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Content writer
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                July 30, 2020
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
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">25</div>
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
                                            <div class="userDatatable-content">
                                                United Kingdom
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Print Media
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Graphic Designer
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                August 20, 2020
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
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">26</div>
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
                                            <div class="userDatatable-content">
                                                Bangladesh
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Online Super Shop
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Marketer
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                January 15, 2021
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
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">27</div>
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
                                            <div class="userDatatable-content">
                                                Australia
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Business Development
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Project Manager
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                January 20, 2021
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
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">28</div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable-inline-title">
                                                    <a href="#" class="text-dark fw-500">
                                                        <h6>Chris john</h6>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Japan
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Boss IT Farm
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Web Developer
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                February 20, 2021
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
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">29</div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable-inline-title">
                                                    <a href="#" class="text-dark fw-500">
                                                        <h6>David Manal</h6>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Russia
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Business Development
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                UI Designer
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                March 20, 2021
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
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">30</div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable-inline-title">
                                                    <a href="#" class="text-dark fw-500">
                                                        <h6>Kapil Deb</h6>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                India
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Business Development
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                Manager
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                March 31, 2021
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
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg"></a>
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
    </div>
</div>
@endsection