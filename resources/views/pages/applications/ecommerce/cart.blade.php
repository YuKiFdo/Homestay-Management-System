@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="shop-breadcrumb">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ecommerce-cart') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>{{ trans('menu.ecommerce-menu-title') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ecommerce-cart') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="cartPage global-shadow pe-sm-30 ps-sm-30  p-15 py-sm-30 radius-xl w-100 mb-30">
        <div class="row justify-content-center">
            <div class="cus-xl-9 col-12 ">
                <div class="product-cart mb-sm-0 mb-20">
                    <div class="table-responsive">
                        <table id="cart" class="table table-borderless table-hover">
                            <thead>
                                <tr class="product-cart__header">
                                    <th scope="col">Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col" class="text-center">total</th>
                                    <th scope="col" class=""></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="Product-cart-title">
                                        <div class="media  align-items-center">
                                            <img class="me-3 wh-80 align-self-center radius-xl" src="{{ asset('assets/img/cart1.png') }}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="mt-0">Fiber base chair</h5>
                                                <div class="d-flex">
                                                    <p>Size:<span>large</span></p>
                                                    <p>color:<span>brown</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="price">$248.66</td>
                                    <td>
                                        <div class="quantity product-cart__quantity">
                                            <input type="button" value="-" class="qty-minus bttn bttn-left wh-36">
                                            <input type="number" value="1" class="qty qh-36 input">
                                            <input type="button" value="+" class="qty-plus bttn bttn-right wh-36">
                                        </div>
                                    </td>
                                    <td class="text-center subtotal">$5.11</td>
                                    <td class="actions">
                                        <button type="button" class="action-btn float-end">
                                            <i class="las la-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="Product-cart-title">
                                        <div class="media  align-items-center">
                                            <img class="me-3 wh-80 align-self-center radius-xl" src="{{ asset('assets/img/cart2.png') }}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="mt-0">Fiber base chair</h5>
                                                <div class="d-flex">
                                                    <p>Size:<span>large</span></p>
                                                    <p>color:<span>brown</span></p>

                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="price">$248.66</td>
                                    <td>
                                        <div class="quantity product-cart__quantity">
                                            <input type="button" value="-" class="qty-minus bttn bttn-left wh-36">
                                            <input type="number" value="1" class="qty qh-36 input">
                                            <input type="button" value="+" class="qty-plus bttn bttn-right wh-36">
                                        </div>
                                    </td>
                                    <td class="text-center subtotal">$5.11</td>
                                    <td class="actions">
                                        <button type="button" class="action-btn float-end">
                                            <i class="las la-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="Product-cart-title">
                                        <div class="media  align-items-center">
                                            <img class="me-3 wh-80 align-self-center radius-xl" src="{{ asset('assets/img/cart3.png') }}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="mt-0">Fiber base chair</h5>
                                                <div class="d-flex">
                                                    <p>Size:<span>large</span></p>
                                                    <p>color:<span>brown</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="price">$248.66</td>
                                    <td>
                                        <div class="quantity product-cart__quantity">
                                            <input type="button" value="-" class="qty-minus bttn bttn-left wh-36">
                                            <input type="number" value="1" class="qty qh-36 input">
                                            <input type="button" value="+" class="qty-plus bttn bttn-right wh-36">
                                        </div>
                                    </td>
                                    <td class="text-center subtotal">$5.11</td>
                                    <td class="actions">
                                        <button type="button" class="action-btn float-end">
                                            <i class="las la-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2">
                                        <div class="product-cart__cupon">
                                            <input type="text" class="form-control  col-xl-4 col-md-6 " placeholder="Coupon code" />
                                            <a href="#" class="btn btn-primary col-xl-3 col-lg-4 space-nowrap">Apply Coupon</a>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="cus-xl-3 col-md-8  ">
                <div class="card order-summery p-sm-25 p-15 order-summery--width mt-lg-0 mt-20">
                    <div class="card-header border-bottom-0 p-0 pb-25">
                        <h5 class="fw-500">Order Summary</h5>
                    </div>
                    <div class="card-body px-sm-25 px-20">
                        <div class="total">
                            <div class="subtotalTotal">
                                Subtotal:
                                <span>$1,690.26</span>
                            </div>
                            <div class="taxes">
                                discount:
                                <span>-$126.30</span>
                            </div>
                            <div class="shipping">
                                Shipping charge:
                                <span>$46.30</span>
                            </div>
                        </div>
                        <div class="select-cupon position-relative">
                            <span class="percent"><img src="{{ asset('assets/img/svg/coupon.svg') }}" alt="svg" class="svg"></span>
                            <select class="js-example-basic-single js-states form-control" id="cupon">
                                <option value="01">HROJSF</option>
                                <option value="02">RYZZWK</option>
                                <option value="03">CLMVBG</option>
                                <option value="04">RQAEAD</option>
                                <option value="05">DFINSX</option>
                            </select>
                        </div>
                        <div class="promo-code">
                            <form>
                                <label for="exampleInputEmail1">promo code</label>
                                <div class="d-flex align-items-center">
                                    <input id="exampleInputEmail1" type="text" class="form-control" />
                                    <a href="#" class="btn">apply</a>
                                </div>
                            </form>
                        </div>
                        <div class="total-money d-flex justify-content-between">
                            <h6>Total :</h6>
                            <h5>$1738.60</h5>
                        </div>
                        <a href="checkout.html" class="checkout btn-secondary content-center w-100 btn-lg mt-20"> procdces to
                            checkout<i class="las la-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection