@section('title', $title)
@section('description', $description)
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-breadcrumb">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.wizard-three') }}</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.wizard-three') }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class=" checkout wizard8 global-shadow border px-sm-50 px-20 mb-30 bg-white radius-xl w-100">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="row justify-content-center">
                        <div class="col-xl-5">
                            <div class="checkout-progress-indicator ">
                                <div class="checkout-progress justify-content-center px-0">
                                    <div class="step completed" id="1">
                                        <span class="las la-check"></span>
                                    </div>
                                    <div class="step completed" id="2">
                                        <span class="las la-check"></span>
                                    </div>
                                    <div class="step completed" id="3">
                                        <span class="las la-check"></span>
                                    </div>
                                    <div class="step current" id="4">
                                        <span>4</span>
                                    </div>
                                </div>
                                <div class="card-header border-bottom-0">
                                    <h4>Review and confirm your order</h4>
                                    <p>Lorem Ipsum is simply dummy text of the
                                        dummy typesetting industry.</p>
                                    <img class="svg" src="{{ asset('assets/img/svg/progress4.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-8 col-sm-10">
                            <div class="checkout-shipping-form pt-sm-45 pt-20 pe-0">
                                <h4 class="fw-500 checkout-review-title mb-sm-50 mb-sm-20 mt-0">4. Review and confirm your
                                    order</h4>
                                <div class="card crc bg-normal p-sm-30 p-15 ">
                                    <div class="card-body mb-30 bg-white bg-shadow radius-xl px-sm-30 px-15 pt-25  mb-30">
                                        <div class="crc__title mb-30">
                                            <h5 class="color-gray">Shipping Information</h5> <span class="color"></span>
                                            <button type="submit"
                                                class="border-0 crc__title-btn shadow-none bg-transparent color-info content-center fs-14"><img
                                                    src="{{ asset('assets/img/svg/edit.svg') }}" alt="svg"
                                                    class="svg">edit</button>
                                        </div>
                                        <div class="d-flex mb-10">


                                            <div class="radio-theme-default custom-radio   me-2">
                                                <input class="radio" type="radio" name="radio-vertical" value=0
                                                    id="radio-vl5" checked>
                                                <label for="radio-vl5">
                                                    <span class="radio-text"></span>
                                                </label>
                                            </div>


                                            <div class="check-review__contact">
                                                <p>Ibn Adam <br> Phone: +61412345678</p>
                                                <span>795 Folsom Ave, Suite 600 San Francisco, CA 94107 United States</span>
                                            </div>
                                        </div>
                                        <button type="submit"
                                            class="border-0 crc__title-btn shadow-none bg-transparent color-info content-center fs-13 fw-500 p-0"><img
                                                class="svg" src="{{ asset('assets/img/svg/plus.svg') }}"
                                                alt="">Add new
                                            address</button>
                                    </div>
                                    <div class="card-body mb-30 bg-white bg-shadow radius-xl px-sm-30 px-15 pt-25  mb-30">
                                        <div class="crc__title mb-30">
                                            <h5 class="color-gray">Payment Method</h5> <span class="color"></span>
                                        </div>
                                        <div class="d-flex mb-20 align-items-center">


                                            <div class="radio-theme-default custom-radio   me-2">
                                                <input class="radio" type="radio" name="radio-vertical2" value=0
                                                    id="radio-vl6">
                                                <label for="radio-vl6">
                                                    <span class="radio-text"></span>
                                                </label>
                                            </div>


                                            <span class="crc__method"><img src="{{ asset('assets/img/ms.png') }}"
                                                    alt="img"> •••• •••• ••••
                                                2527</span>
                                        </div>
                                        <button type="submit"
                                            class="border-0 crc__title-btn shadow-none bg-transparent color-info content-center fs-13 fw-500 p-0"><img
                                                class="svg" src="{{ asset('assets/img/svg/plus.svg') }}"
                                                alt="">Add new card </button>
                                    </div>
                                    <div class="card-body bg-white bg-shadow radius-xl crc-table p-sm-30 p-15 ">
                                        <div class="table-responsive">
                                            <table id="cart" class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="Product-cart-title">
                                                            <div class="media  align-items-center">
                                                                <img class="me-3 wh-80 align-self-center"
                                                                    src="{{ asset('assets/img/review1.png') }}"
                                                                    alt="Generic placeholder image">
                                                                <div class="media-body">
                                                                    <h5 class="mt-0">Fiber base chair</h5>
                                                                    <div class="d-flex">
                                                                        <p>Size:<span>large</span></p>
                                                                        <p>color:<span>brown</span></p>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <!-- Start: Product Quantity -->
                                                            <div class="quantity product-cart__quantity">
                                                                <input type="button" value="-"
                                                                    class="qty-minus bttn bttn-left wh-36">
                                                                <input type="number" value="1"
                                                                    class="qty qh-36 input">
                                                                <input type="button" value="+"
                                                                    class="qty-plus bttn bttn-right wh-36">
                                                            </div>
                                                            <!-- End: Product Quantity -->
                                                        </td>
                                                        <td class=" subtotal">$743.30</td>

                                                    </tr>
                                                    <tr>
                                                        <td class="Product-cart-title">
                                                            <div class="media  align-items-center">
                                                                <img class="me-3 wh-80 align-self-center"
                                                                    src="{{ asset('assets/img/review2.png') }}"
                                                                    alt="Generic placeholder image">
                                                                <div class="media-body">
                                                                    <h5 class="mt-0">Fiber base chair</h5>
                                                                    <div class="d-flex">
                                                                        <p>Size:<span>large</span></p>
                                                                        <p>color:<span>brown</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <!-- Start: Product Quantity -->
                                                            <div class="quantity product-cart__quantity">
                                                                <input type="button" value="-"
                                                                    class="qty-minus bttn bttn-left wh-36">
                                                                <input type="number" value="1"
                                                                    class="qty qh-36 input">
                                                                <input type="button" value="+"
                                                                    class="qty-plus bttn bttn-right wh-36">
                                                            </div>
                                                            <!-- End: Product Quantity -->
                                                        </td>
                                                        <td class=" subtotal">$878.30</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td>

                                                        </td>
                                                        <td colspan="2" class="order-summery">
                                                            <div class="total">
                                                                <div class="subtotalTotal">
                                                                    Subtotal:
                                                                    <span>$1,690.26</span>
                                                                </div>
                                                                <div class="shipping">
                                                                    Shipping charge:
                                                                    <span>$46.30</span>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="total-money d-flex justify-content-between align-items-center mt-1">
                                                                <h6>Total :</h6>
                                                                <h5 class="text-primary">$1738.60</h5>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table><!-- ends: table -->
                                        </div>
                                    </div>
                                </div><!-- ends: .card -->
                                <div
                                    class="button-group d-flex pt-40 mb-xl-20  justify-content-sm-between justify-content-center m-0 mb-xl-30 mb-0 flex-wrap">
                                    <a href="{{ $prev_page_url }}"
                                        class="btn btn-light btn-default btn-squared fw-400 text-capitalize m-sm-0 m-1"><i
                                            class="las la-arrow-left me-10"></i>Previous</a>
                                    <a href="{{ $next_page_url }}"
                                        class="btn text-white btn-primary btn-default btn-squared text-capitalize m-sm-0 m-1">Save
                                        &
                                        Next<i class="ms-10 me-0 las la-arrow-right"></i></a>
                                </div><!-- ends: button group -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
