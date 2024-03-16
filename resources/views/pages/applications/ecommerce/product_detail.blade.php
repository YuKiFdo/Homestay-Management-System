@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="shop-breadcrumb">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ecommerce-product-details') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>{{ trans('menu.dashboard-menu-title') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ecommerce-product-details') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="products mb-30">
    <div class="container-fluid">
        <div class="card product-details h-100 border-0">
            <div class="product-item d-flex p-sm-50 p-20">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="product-item__image">
                            <div class="wrap-gallery-article carousel slide carousel-fade" id="carouselExampleCaptions" data-bs-ride="carousel">
                                <div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="img-fluid d-flex bg-opacity-primary " src="{{ asset('assets/img/furniture') }}.jpg" alt="Card image cap" title="">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid d-flex bg-opacity-primary" src="{{ asset('assets/img/furniture2') }}.jpg" alt="Card image cap" title="">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid d-flex bg-opacity-primary" src="{{ asset('assets/img/furniture3') }}.jpg" alt="Card image cap" title="">
                                        </div>
                                    </div>
                                </div>
                                <div class="overflow-hidden">
                                    <ul class="reset-ul d-flex flex-wrap list-thumb-gallery">
                                        <li>
                                            <a href="#" class="thumbnail active" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1">
                                                <img class="img-fluid d-flex" src="{{ asset('assets/img/furniture.jpg') }}" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="thumbnail " data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2">
                                                <img class="img-fluid d-flex" src="{{ asset('assets/img/furniture2.jpg') }}" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="thumbnail " data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3">
                                                <img class="img-fluid d-flex" src="{{ asset('assets/img/furniture3.jpg') }}" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-7">
                        <div class=" b-normal-b mb-25 pb-sm-35 pb-15 mt-lg-0 mt-15">
                            <div class="product-item__body">
                                <div class="product-item__title">
                                    <a href="#">
                                        <h1 class="card-title">
                                            This stools are also decently
                                            stored
                                        </h1>
                                    </a>
                                </div>
                                <div class="product-item__content text-capitalize">
                                    <div class="stars-rating d-flex align-items-center">
                                        <span class="star-icon las la-star active"></span>
                                        <span class="star-icon las la-star active"></span>
                                        <span class="star-icon las la-star active"></span>
                                        <span class="star-icon las la-star active"></span>
                                        <span class="star-icon las la-star-half-alt active"></span>
                                        <span class="stars-rating__point">4.9</span>
                                        <span class="stars-rating__review">
                                            <span>778</span> Reviews</span>
                                    </div>
                                    <span class="product-details-brandName">Brand:<span>Louis
                                            Poulsen</span></span>
                                    <span class="product-desc-price">
                                        <sub>$</sub>200.00</span>
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="product-price">$100.00</span>
                                        <span class="product-discount">50% Off</span>
                                    </div>
                                    <p class=" product-deatils-pera">Lorem ipsum dolor sit amet, consetetur
                                        sadipscing elitr, sed diam
                                        nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                                    <div class="product-details__availability">
                                        <div class="title">
                                            <p>Available:</p>
                                            <span class="stock">In stock</span>
                                        </div>
                                        <div class="title">
                                            <p>Shipping:</p>
                                            <span class="free"> Free</span>
                                        </div>
                                    </div>
                                    <div class="quantity product-quantity flex-wrap">
                                        <div class="me-15 d-flex align-items-center flex-wrap">
                                            <p class="fs-14 fw-500 color-dark">Quantity:</p>
                                            <input type="button" value="-" class="qty-minus bttn bttn-left wh-36">
                                            <input type="number" value="1" class="qty qh-36 input">
                                            <input type="button" value="+" class="qty-plus bttn bttn-right wh-36">
                                        </div>
                                        <span class="fs-13 fw-400 color-light my-sm-0 my-10">540 pieces available</span>
                                    </div>
                                    <div class="product-item__button mt-lg-30 mt-sm-25 mt-20 d-flex flex-wrap">
                                        <div class=" d-flex flex-wrap product-item__action align-items-center">
                                            <button class="btn btn-primary btn-default btn-squared border-0 me-10 my-sm-0 my-2">buy
                                                now</button>
                                            <button class="btn btn-secondary btn-default btn-squared border-0 px-25 my-sm-0 my-2 me-10">
                                                <img src="{{ asset('assets/img/svg/shopping-bag.svg') }}" alt="shopping-bag" class="svg">
                                                Add To Cart</button>
                                            <div class="like-icon">
                                                <button type="button">
                                                    <i class="lar la-heart icon"></i>
                                                </button>
                                            </div>
                                            <div class="like-icon me-15 my-sm-0 my-3 ">
                                                <button type="button">
                                                    <img class="svg" src="{{ asset('assets/img/svg/share-2.svg') }}" alt="share-2">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-deatils__social my-xxl-0 my-10 d-flex align-items-center">
                                            <ul class="d-flex">
                                                <li>
                                                    <a href="#">
                                                        <i class="lab la-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="lab la-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="lab la-pinterest"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="lab la-linkedin-in"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="lab la-telegram"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-details__availability">
                            <div class="title">
                                <p>Category:</p>
                                <span class="free">Furniture</span>
                            </div>
                            <div class="title">
                                <p>Tags:</p>
                                <span class="free"> Blue, Green, Light</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection