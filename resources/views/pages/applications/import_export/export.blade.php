@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="social-dash-wrap">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ie-export') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ie-export') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="exportDatatable userDatatable orderDatatable global-shadow border-0 py-30 bg-white radius-xl w-100 mb-30">
                    <div class="project-top-wrapper d-flex justify-content-between flex-wrap mb-25 mt-n10 px-sm-30 px-20 ">
                        <div class="content-center mt-10">
                            <div class="button-group m-0 mt-xl-0 mt-sm-10 order-button-group ">
                                <button type="button" class="btn-primary btn radius-md">Export</button>
                            </div>
                        </div><!-- End: .content-center -->
                        <div class="d-flex align-items-center flex-wrap justify-content-center">
                            <div class="project-search order-search  global-shadow mt-10">
                                <form action="/" class="order-search__form">
                                    <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                                    <input class="form-control me-sm-2 border-0 box-shadow-none" type="search" placeholder="Search" aria-label="Search">
                                </form>
                            </div><!-- End: .project-search -->
                            <!-- End: .project-category -->
                        </div><!-- End: .d-flex -->
                    </div><!-- End: .project-top-wrapper -->
                    <div class="table-responsive">
                        <table class="table mb-0 table-hover table-borderless border-0 px-30 pb-30">
                            <thead>
                                <tr class="userDatatable-header">
                                    <th>
                                        <span class="userDatatable-title">User</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Email</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Company</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Position</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title float-end">Join Date</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="orderDatatable-title">
                                            <p class="d-block mb-0">
                                                Kellie Marquot
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            john-keller@gmail.com
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            Business Development
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            Web Developer
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title float-end">
                                            January 20, 2020
                                        </div>
                                    </td>
                                </tr>
                                <!-- End: tr -->
                                <tr>
                                    <td>
                                        <div class="orderDatatable-title">
                                            <p class="d-block mb-0">
                                                Kellie Marquot
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            john-keller@gmail.com
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            Business Development
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            Web Developer
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title float-end">
                                            January 20, 2020
                                        </div>
                                    </td>
                                </tr>
                                <!-- End: tr -->
                                <tr>
                                    <td>
                                        <div class="orderDatatable-title">
                                            <p class="d-block mb-0">
                                                Kellie Marquot
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            john-keller@gmail.com
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            Business Development
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            Web Developer
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title float-end">
                                            January 20, 2020
                                        </div>
                                    </td>
                                </tr>
                                <!-- End: tr -->
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection