@section('title', $title)
@section('description', $description)
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.order-add') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Foods</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.order-add') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-Vertical card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Order New Foods</h6>
                    </div>
                    <div class="card-body py-md-30">
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-25">
                                    <label for="food_name">Select A Booking<span
                                    class="text-danger">*</span></label>
                                    <select class="form-control  ih-medium ip-gray radius-xs b-ligh" id="exampleFormControlSelect2">
                                        <option>Select Booking</option>
                                        <option>Surathura-001</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-25">
                                </div>

                                <div class="col-md-6 mb-25">
                                    <label for="food_name">Select Foods<span
                                    class="text-danger">*</span></label>
                                    <select class="form-control  ih-medium ip-gray radius-xs b-ligh" id="exampleFormControlSelect2">
                                        <option>Select Foods</option>
                                        <option>Chicken Fried Rice</option>
                                        <option>Egg Fried Rice</option>
                                        <option>Mix Rice</option>
                                        <option>Sea Food Rice</option>
                                    </select>
                                </div>

                                <div class="col-md-2 mb-25">
                                    <label for="room_name">Quantity <span
                                    class="text-danger">*</span></label>
                                    <div class="with-icon">
                                        <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light"
                                            id="inputNameIcon" placeholder="">
                                    </div>
                                </div>
                        
                                <div class="col-md-6">
                                </div>

                                

                                <div class="col-md-0">
                                    <div class="layout-button mt-0 d-flex justify-content-start">
                                        <!-- Changed class to 'd-flex justify-content-end' -->
                                        {{-- <button type="button" class="btn btn-default btn-squared border-normal bg-normal px-20 mr-2">Place Order</button> --}}
                                        <!-- Added 'mr-2' for right margin -->
                                        <button type="button" class="btn btn-primary btn-default btn-squared px-30">Place Order</button>
                                        <button type="button" class="btn btn-primary btn-default btn-squared px-30">Add</button>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                </div>

                                <div class="col-md-6 mb-25 mr-2">
                                <!DOCTYPE html>
                                <html lang="en">
                                <head>
                                    <meta charset="UTF-8">
                                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                    <title>Table Example</title>
                                    <style>
                                        .table-container {
                                            max-height: 200px; 
                                            overflow-y: scroll; 
                                        }

                                        .scrollable-table {
                                            width: 100%; 
                                            border-collapse: collapse; 
                                        }

                                        .scrollable-table th,
                                        .scrollable-table td {
                                            padding: 8px; 
                                            border: 1px solid #ddd; 
                                        }
                                        
                                        .scrollable-table th {
                                            background-color: #f2f2f2; 
                                        }

                                        th, td {
                                            border: 1px solid #dddddd;
                                            text-align: left;
                                            padding: 8px;
                                        }
                                        
                                        th {
                                            background-color: #f2f2f2;
                                        }
                                    </style>
                                </head>
                                <body>
                                    <div class="table-container">
                                         <div class="d-flex align-items-center">
                                            <table class="scrollable-table">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <span class="userDatatable-title float-center">Food Name</span>
                                                        </th>
                                                        <th>
                                                            <span class="userDatatable-title float-center">Quantity</span>
                                                        </th>
                                                        <th>
                                                            <span class="userDatatable-title float-center">Price</span>
                                                        </th>
                                                        <th>
                                                            <span class="userDatatable-title float-center">Actions</span>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td>Apple</td>
                                                        <td>3</td>
                                                        <td>200.00</td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Apple</td>
                                                        <td>3</td>
                                                        <td>200.00</td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Apple</td>
                                                        <td>3</td>
                                                        <td>200.00</td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Apple</td>
                                                        <td>3</td>
                                                        <td>200.00</td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Apple</td>
                                                        <td>3</td>
                                                        <td>200.00</td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Apple</td>
                                                        <td>3</td>
                                                        <td>200.00</td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Apple</td>
                                                        <td>3</td>
                                                        <td>200.00</td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Apple</td>
                                                        <td>3</td>
                                                        <td>200.00</td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Apple</td>
                                                        <td>3</td>
                                                        <td>200.00</td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Apple</td>
                                                        <td>3</td>
                                                        <td>200.00</td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Apple</td>
                                                        <td>3</td>
                                                        <td>200.00</td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Apple</td>
                                                        <td>3</td>
                                                        <td>200.00</td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Apple</td>
                                                        <td>3</td>
                                                        <td>200.00</td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                 </body>
                                </html>
                                </div>
                                

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
