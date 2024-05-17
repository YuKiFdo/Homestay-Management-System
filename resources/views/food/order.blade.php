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
                                    <select class="form-control  ih-medium ip-gray radius-xs b-ligh" name="booking" id="exampleFormControlSelect2">
                                        <option>Select Booking</option>
                                        @foreach($booking as $booking => $id)
                                            <option value="{{ $id }}">{{ $id->booking_id }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 mb-25">
                                </div>

                                <div class="col-md-6 mb-25">
                                    <label for="food_name">Select Foods<span
                                    class="text-danger">*</span></label>
                                    <select class="form-control  ih-medium ip-gray radius-xs b-ligh" name="food" id="food">
                                        <option>Select Foods</option>
                                        @foreach($food as $food => $id)
                                            <option value="{{ $id }}"
                                                data-price="{{ $id->fprice }}"
                                            >{{ $id->fname }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-2 mb-25">
                                    <label for="room_name">Quantity <span
                                    class="text-danger">*</span></label>
                                    <div class="with-icon">
                                        <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light"
                                            id="inputNameIcon" name="qty" id="quantity" placeholder="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                </div>



                                <div class="col-md-0">
                                    <div class="layout-button mt-0 d-flex justify-content-start">
                                        <button type="button" class="btn btn-primary btn-default btn-squared px-30"
                                        id="submit"
                                        >Place Order</button>
                                        <button type="button" class="btn btn-primary btn-default btn-squared px-30" id="addOrder">Add</button>
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
                                            <table class="scrollable-table" id="foodstable">
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

                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                            {{-- total price --}}


                                        </div>
                                    </div>
                                 </body>
                                </html>
                                </div>
                                <div class="col-md-6">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        document.getElementById('addOrder').addEventListener('click', function() {
            var foodSelect = document.getElementById('food');
            var selectedFood = foodSelect.options[foodSelect.selectedIndex].text;
            var quantity = document.getElementById('inputNameIcon').value;
            console.log(quantity);

            if (selectedFood !== 'Select Foods' && quantity !== '') {
                var tableBody = document.querySelector('#foodstable tbody');
                var newRow = tableBody.insertRow();

                var foodCell = newRow.insertCell(0);
                var quantityCell = newRow.insertCell(1);
                var priceCell = newRow.insertCell(2);
                var actionsCell = newRow.insertCell(3);

                var price = foodSelect.options[foodSelect.selectedIndex].dataset.price;

                console.log(price);

                foodCell.innerHTML = selectedFood;
                quantityCell.innerHTML = quantity;
                priceCell.innerHTML = price; // You can populate this with the price data if needed
                actionsCell.innerHTML = '<button class="btn btn-danger btn-sm delete-row">Delete</button>';

                document.getElementById('food').selectedIndex = 0;
                document.getElementById('inputNameIcon').value = '';

                // Add event listener to delete row button
                actionsCell.querySelector('.delete-row').addEventListener('click', function() {
                    tableBody.removeChild(newRow);
                });
            } else {
                alert('Please select a food and specify quantity.');
            }
        });
    </script>
@endsection
