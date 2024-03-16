@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="social-dash-wrap">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ie-export-selected') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ie-export-selected') }}</li>
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
                                <button type="button" class="btn-primary btn radius-md" data-bs-toggle="modal" data-bs-target="#staticBackdrop5">Export Selected</button>

                                <!-- Modal -->
                                <div class="modal fade fileM-Modal-overlay modal--selected" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop5Label" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title fw-500" id="staticBackdrop5Label">Export File</h6>
                                                <button type="button" class="close shadow-none border-0 bg-transparent" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true" class="la la-close"></span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group mb-15">
                                                        <input type="text" class="form-control" placeholder="Enter File Name">
                                                    </div>
                                                    <div class="mb-25">
                                                        <select class="js-example-basic-single js-states form-control" id="countryOption">
                                                            <option value="JAN">CSV</option>
                                                            <option value="FBR">XML</option>
                                                        </select>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer m-n1">
                                                <button type="button" class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light text-light" data-bs-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-primary btn-default btn-squared text-capitalize">Create</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                    <div class="export-table">
                        <div class="table-responsive">
                            <table class="table mb-0 table-hover table-borderless border-0 px-30 pb-30">
                                <thead>
                                    <tr class="userDatatable-header">
                                        <th>
                                            <div class="d-flex align-items-center">

                                                <div class="bd-example-indeterminate">
                                                    <div class="checkbox-theme-default custom-checkbox  check-all">
                                                        <input class="checkbox" type="checkbox" id="check-23e">
                                                        <label for="check-23e">
                                                            <span class="checkbox-text ms-3">
                                                                User
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
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
                                            <div class="d-flex align-items-center">
                                                <div class="me-3 d-flex align-items-center">
                                                    <div class="checkbox-group-wrapper">
                                                        <div class="checkbox-group d-flex">
                                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                <input class="checkbox" type="checkbox" id="check-grp-12">
                                                                <label for="check-grp-12"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="orderDatatable-title">
                                                    <p class="d-block mb-0">
                                                        Kellie Marquot
                                                    </p>
                                                </div>
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
                                            <div class="d-flex align-items-center">
                                                <div class="me-3 d-flex align-items-center">
                                                    <div class="checkbox-group-wrapper">
                                                        <div class="checkbox-group d-flex">
                                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                <input class="checkbox" type="checkbox" id="check-grp-13">
                                                                <label for="check-grp-13"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="orderDatatable-title">
                                                    <p class="d-block mb-0">
                                                        Kellie Marquot
                                                    </p>
                                                </div>
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
                                                January 28, 2020
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- End: tr -->
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-3 d-flex align-items-center">
                                                    <div class="checkbox-group-wrapper">
                                                        <div class="checkbox-group d-flex">
                                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                <input class="checkbox" type="checkbox" id="check-grp-14">
                                                                <label for="check-grp-14"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="orderDatatable-title">
                                                    <p class="d-block mb-0">
                                                        Kellie Marquot
                                                    </p>
                                                </div>
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
                                                January 28, 2020
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
</div>
@endsection