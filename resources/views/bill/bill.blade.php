@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shop-breadcrumb">

                            <div class="breadcrumb-main">
                                <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ecommerce-invoices') }}</h4>
                                <div class="breadcrumb-action justify-content-center flex-wrap">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>{{ trans('menu.bill-menu-title') }}</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.bill-invoice') }}</li>
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
                    <div class="col-lg-12">
                        <div class="payment-invoice global-shadow radius-xl w-100 mb-30">
                            <div class="payment-invoice__body">
                                <div class="payment-invoice-address d-flex justify-content-sm-between">
                                    <div class="payment-invoice-logo">
                                        <a href="index.html">
                                            <img src="{{ asset('storage/' . config('application.logo')) }}" alt="img">
                                        </a>
                                    </div>
                                    <div class="payment-invoice-address__area">
                                        <address>Surathura Homestay<br> {{ config('application.address') }}<br>
                                             Telephone Number : 037 223 1957 <br> Mobile Number : {{ config('application.phone') }}</address>
                                    </div>
                                </div><!-- End: .payment-invoice-address -->
                                <div class="payment-invoice-qr d-flex justify-content-between mb-40 px-xl-50 px-30 py-sm-30 py-20 ">
                                    <div class="d-flex justify-content-center mb-lg-0 mb-25">
                                        <div class="payment-invoice-qr__number">
                                            <div class="display-3">
                                                Invoice
                                            </div>
                                            <p>No : <span>#00001</span></p>
                                            <p>Date : <span>Mar 17, 2024</span></p>
                                        </div>
                                    </div><!-- End: .d-flex -->

                                    <div class="d-flex justify-content-center">
                                        <div class="payment-invoice-qr__address">
                                            <p>Invoice To:</p>
                                            <span>BK - 001</span><br>
                                            <span>Mahinda Rajapaksha</span><br>
                                            <span>San Francisco, CA 94107, USA</span>
                                        </div>
                                    </div><!-- End: .d-flex -->
                                </div><!-- End: .payment-invoice-qr -->
                                <div class="payment-invoice-table">
                                    <div class="table-responsive">
                                        <table id="cart" class="table table-borderless" >
                                            <thead>
                                                <tr class="product-cart__header">
                                                    <th scope="col">#</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col" class="text-end"></th>
                                                    <th scope="col" class="text-end">Quantity</th>
                                                    <th scope="col" class="text-end">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>1</th>
                                                    <td class="Product-cart-title">
                                                        <div class="media  align-items-center">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Room Charge</h5>
                                                                <div class="d-flex">
                                                                    <p>Room Type:<span>A/C</span></p>
                                                                    <p>Bed Type:<span>Double</span></p>
                                                                    <p>Nights:<span>4</span></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="unit text-end"></td>
                                                    <td class="invoice-quantity text-end"></td>
                                                    <td class="text-end order">$120.00</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="1"></td>
                                                    <td class="Product-cart-title">
                                                        <div class="media  align-items-center">
                                                            <h3 class="mt-0">Additional Packages</h3>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>1</th>
                                                    <td class="Product-cart-title">
                                                        <div class="media  align-items-center">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Sigiriya Tour Package</h5>

                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="unit text-end"></td>
                                                    <td class="invoice-quantity text-end"></td>
                                                    <td class="text-end order">$35.00</td>
                                                </tr>
                                                <tr>
                                                    <th>2</th>
                                                    <td class="Product-cart-title">
                                                        <div class="media  align-items-center">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Airport Shuttle</h5>

                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="unit text-end"></td>
                                                    <td class="invoice-quantity text-end"></td>
                                                    <td class="text-end order">$50.00</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="1"></td>
                                                    <td class="Product-cart-title">
                                                        <div class="media  align-items-center">
                                                            <h3 class="mt-0">Orders</h3>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>1</th>
                                                    <td class="Product-cart-title">
                                                        <div class="media  align-items-center">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Lunch Package</h5>
                                                                <div class="">
                                                                    <p>Additional:<span>Fried Chicken 01</span></p>

                                                                    <p>Additional:<span>Vegetable Soup 01</span></p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td colspan="2" class="invoice-quantity text-end">4</td>
                                                    <td class="text-end order">$45.00</td>
                                                </tr>
                                                <tr>
                                                    <th>2</th>
                                                    <td class="Product-cart-title">
                                                        <div class="media  align-items-center">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Special Package</h5>
                                                                <div class="">
                                                                    <p>Name: <span> Sri Lankan Kalukum </span></p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td colspan="2" class="invoice-quantity text-end">1</td>
                                                    <td class="text-end order">$55.00</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="1"></td>
                                                    <td class="Product-cart-title">
                                                        <div class="media  align-items-center">
                                                            <h3 class="mt-0">Others</h3>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <th>1</th>
                                                <td class="Product-cart-title">
                                                    <div class="media  align-items-center">
                                                        <div class="media-body">
                                                            <h5 class="mt-0">Laundary</h5>


                                                        </div>
                                                    </div>
                                                </td>

                                                <td colspan="2" class="invoice-quantity text-end">20</td>
                                                <td class="text-end order">$20.00</td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="3"></td>
                                                    <td class="order-summery float-right border-0   ">
                                                        <div class="total">
                                                            <div class="subtotalTotal mb-0 text-end">
                                                                Service Charge :
                                                            </div>
                                                            <div class="subtotalTotal mb-0 text-end">
                                                                Subtotal :
                                                            </div>
                                                            <div class="taxes mb-0 text-end">
                                                                discount :
                                                            </div>

                                                        </div>
                                                        <div class="total-money mt-2 text-end">
                                                            <h6>Total <span style="color: black">(USD)</span> : </h6>
                                                        </div>
                                                        <div class="total-money mt-2 text-end">
                                                            <h6>Total <span style="color: black">(LKR)</span> :</h6>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="total-order float-right text-end fs-14 fw-500">
                                                            <p> $10 (5%)</p>
                                                            <p>$350.26</p>
                                                            <p>-$126.30</p>
                                                            <h5 >$210.30</h5>
                                                            <h5 class="mt-2">Rs.65,000.00</h5>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="payment-invoice__btn mt-xxl-50 pt-xxl-30">
                                        <button type="button" class="btn border rounded-pill bg-normal text-gray px-25 print-btn">
                                            <img src="{{ asset('assets/img/svg/printer.svg') }}" id="print-btn" alt="printer" class="svg">print</button>
                                        <button type="button" class="btn border rounded-pill bg-normal text-gray px-25">
                                            <img src="{{ asset('assets/img/svg/send.svg') }}" alt="send" class="svg">send invoice</button>
                                        <button type="button" class="btn-primary btn rounded-pill px-25 text-white download">
                                            <img src="{{ asset('assets/img/svg/upload.svg') }}" alt="upload" class="svg">download</button>
                                    </div>
                                </div><!-- End: .payment-invoice-table -->
                            </div><!-- End: .payment-invoice__body -->
                        </div><!-- End: .payment-invoice -->
                    </div><!-- End: .col -->
                </div>
            </div>
@endsection
