@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.search-menu-title') }}</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.search-menu-title') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="search-result global-shadow rounded-pill bg-white">
                <form action="/" class="d-flex align-items-center justify-content-between">
                    <div class="border-right d-flex align-items-center w-100  ps-25 pe-sm-25 pe-0 py-1">
                        <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                        <input class="form-control border-0 box-shadow-none" type="search" placeholder="Type and search" aria-label="Search">
                    </div>
                    <button type="button" class="border-0 bg-transparent px-25">search</button>
                </form>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="search-keyword mt-20 mb-30">
                <ul class="nav m-n1" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-selected="true">all</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-selected="false">Ui design</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-selected="false">Wireframe Kits</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-presentation-tab" data-bs-toggle="pill" href="#pills-presentation" role="tab" aria-selected="false">Presentation</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-web-tab" data-bs-toggle="pill" href="#pills-web" role="tab" aria-selected="false">web design</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-12">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="search-content bg-white radius-xl d-flex mb-50">
                        <div class="card  border-0 px-sm-30 px-20">
                            <div class="card-header flex-1 d-flex align-items-center flex-wrap justify-content-between border-bottom-0 px-0">
                                <p class="keyword-searching text-dark py-10">207 <span class="color-light fw-400">results found
                                        for</span> “Keyword”</p>
                                <p class="mb-0 fs-14 color-light fw-400 ">Showing 1-10 of 76 results</p>
                            </div>
                            <div class="card-body border-bottom border-top px-0 pb-0 pt-25">
                                <div class="search-content__keyResult">
                                    <div class="mb-30">
                                        <a href="#">
                                            <h6 class="fw-500">
                                                <span class="color-primary"> Keyword </span> installing
                                                lorem
                                                multi vendor marketplace
                                            </h6>
                                        </a>
                                        <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                            world-class
                                            sadipscing elitr, sed diam nonumy eirmod...</p>
                                    </div>
                                    <div class="mb-30">
                                        <a href="#">
                                            <h6 class="fw-500">
                                                <span class="color-primary"> Keyword </span> how to
                                                copyright and
                                                trademarks
                                            </h6>
                                        </a>
                                        <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                            world-class
                                            sadipscing elitr, sed diam nonumy eirmod...</p>
                                    </div>
                                    <div class="mb-30">
                                        <a href="#">
                                            <h6 class="fw-500">How to stop getting emails from lorem <span class="color-primary"> Keyword </span></h6>
                                        </a>
                                        <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                            world-class
                                            sadipscing elitr, sed diam nonumy eirmod...</p>
                                    </div>
                                    <div class="mb-30">
                                        <a href="#">
                                            <h6 class="fw-500">How to installing lorem multi vendor <span class="color-primary">
                                                    Keyword </span> marketplace</h6>
                                        </a>
                                        <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                            world-class
                                            sadipscing elitr, sed diam nonumy eirmod...</p>
                                    </div>
                                    <div class="mb-30">
                                        <a href="#">
                                            <h6 class="fw-500">
                                                <span class="color-primary"> Keyword </span> installing
                                                lorem
                                                multi vendor marketplace
                                            </h6>
                                        </a>
                                        <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                            world-class
                                            sadipscing elitr, sed diam nonumy eirmod...</p>
                                    </div>
                                    <div class="mb-30">
                                        <a href="#">
                                            <h6 class="fw-500">
                                                <span class="color-primary"> Keyword </span> how to
                                                copyright and
                                                trademarks
                                            </h6>
                                        </a>
                                        <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                            world-class
                                            sadipscing elitr, sed diam nonumy eirmod...</p>
                                    </div>
                                    <div class="mb-30">
                                        <a href="#">
                                            <h6 class="fw-500">How to stop getting emails from lorem <span class="color-primary"> Keyword </span></h6>
                                        </a>
                                        <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                            world-class
                                            sadipscing elitr, sed diam nonumy eirmod...</p>
                                    </div>
                                    <div class="mb-30">
                                        <a href="#">
                                            <h6 class="fw-500">How to installing lorem multi vendor <span class="color-primary">
                                                    Keyword </span> marketplace</h6>
                                        </a>
                                        <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                            world-class
                                            sadipscing elitr, sed diam nonumy eirmod...</p>
                                    </div>
                                    <div class="mb-30">
                                        <a href="#">
                                            <h6 class="fw-500">
                                                <span class="color-primary"> Keyword </span> how to
                                                copyright and
                                                trademarks
                                            </h6>
                                        </a>
                                        <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                            world-class
                                            sadipscing elitr, sed diam nonumy eirmod...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-0 pt-30 pb-40 px-0 bg-transparent">

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
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="search-content mt-30 bg-white radius-xl d-flex mb-50">
                        <div class="card  border-0 px-sm-30 px-20">
                            <div class="card-header flex-1 d-flex align-items-center flex-wrap justify-content-between border-bottom-0 px-0">
                                <p class="keyword-searching text-dark py-10">207 <span class="color-light fw-400">results found
                                        for</span> “Ui design”</p>
                                <p class="mb-0 fs-14 color-light fw-400 py-10">Showing 1-10 of 76 results</p>
                            </div>
                            <div class="card-body border-bottom border-top px-0 pb-0 pt-25">
                                <div class="search-content__keyResult">
                                    <div class="mb-30">
                                        <a href="#">
                                            <h6 class="fw-500">
                                                <span class="color-primary"> Ui design </span> installing
                                                lorem
                                                multi vendor marketplace
                                            </h6>
                                        </a>
                                        <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                            world-class
                                            sadipscing elitr, sed diam nonumy eirmod...</p>
                                    </div>
                                    <div class="mb-30">
                                        <a href="#">
                                            <h6 class="fw-500">
                                                <span class="color-primary"> Ui design </span> how to
                                                copyright and
                                                trademarks
                                            </h6>
                                        </a>
                                        <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                            world-class
                                            sadipscing elitr, sed diam nonumy eirmod...</p>
                                    </div>
                                    <div class="mb-30">
                                        <a href="#">
                                            <h6 class="fw-500">How to stop getting emails from lorem <span class="color-primary"> Ui design </span></h6>
                                        </a>
                                        <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                            world-class
                                            sadipscing elitr, sed diam nonumy eirmod...</p>
                                    </div>
                                    <div class="mb-30">
                                        <a href="#">
                                            <h6 class="fw-500">How to installing lorem multi vendor <span class="color-primary">
                                                    Ui design </span> marketplace</h6>
                                        </a>
                                        <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                            world-class
                                            sadipscing elitr, sed diam nonumy eirmod...</p>
                                    </div>
                                    <div class="mb-30">
                                        <a href="#">
                                            <h6 class="fw-500">
                                                <span class="color-primary"> Ui design </span> installing
                                                lorem
                                                multi vendor marketplace
                                            </h6>
                                        </a>
                                        <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                            world-class
                                            sadipscing elitr, sed diam nonumy eirmod...</p>
                                    </div>
                                    <div class="mb-30">
                                        <a href="#">
                                            <h6 class="fw-500">
                                                <span class="color-primary"> Ui design </span> how to
                                                copyright and
                                                trademarks
                                            </h6>
                                        </a>
                                        <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                            world-class
                                            sadipscing elitr, sed diam nonumy eirmod...</p>
                                    </div>
                                    <div class="mb-30">
                                        <a href="#">
                                            <h6 class="fw-500">How to stop getting emails from lorem <span class="color-primary"> Ui design </span></h6>
                                        </a>
                                        <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                            world-class
                                            sadipscing elitr, sed diam nonumy eirmod...</p>
                                    </div>
                                    <div class="mb-30">
                                        <a href="#">
                                            <h6 class="fw-500">How to installing lorem multi vendor <span class="color-primary">
                                                    Ui design </span> marketplace</h6>
                                        </a>
                                        <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                            world-class
                                            sadipscing elitr, sed diam nonumy eirmod...</p>
                                    </div>
                                    <div class="mb-30">
                                        <a href="#">
                                            <h6 class="fw-500">
                                                <span class="color-primary"> Ui design </span> how to
                                                copyright and
                                                trademarks
                                            </h6>
                                        </a>
                                        <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                            world-class
                                            sadipscing elitr, sed diam nonumy eirmod...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-0 pt-30 pb-40 px-0">

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
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="search-content mt-30 bg-white radius-xl d-flex mb-50">
                        <div class="card  border-0 px-sm-30 px-20">
                            <div class="card-header flex-1 d-flex align-items-center flex-wrap justify-content-between border-bottom-0 px-0">
                                <p class="keyword-searching text-dark py-10">207 <span class="color-light fw-400">results found
                                        for</span> “Wireframe Kits”</p>
                                <p class="mb-0 fs-14 color-light fw-400 py-10">Showing 1-10 of 76 results</p>
                            </div>
                            <div class="card-body border-bottom border-top px-0 pb-0 pt-25">
                                <div class="search-content__keyResult">
                                    <div class="mb-30">
                                        <a href="#">
                                            <h6 class="fw-500">
                                                <span class="color-primary"> wireframe Kits </span> installing
                                                lorem
                                                multi vendor marketplace
                                            </h6>
                                        </a>
                                        <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                            world-class
                                            sadipscing elitr, sed diam nonumy eirmod...</p>
                                    </div>
                                    <div class="mb-30">
                                        <a href="#">
                                            <h6 class="fw-500">
                                                <span class="color-primary"> wireframe Kits </span> how to
                                                copyright and
                                                trademarks
                                            </h6>
                                        </a>
                                        <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a world-class sadipscing nonumy eirmod...</p>
                                    </div>
                                    <div class="mb-30">
                                        <a href="#">
                                            <h6 class="fw-500">How to stop getting emails from lorem <span class="color-primary"> wireframe Kits </span></h6>
                                        </a>
                                        <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a world-class sadipscing...</p>
                                    </div>
                                    <div class="mb-30">
                                        <a href="#">
                                            <h6 class="fw-500">How to installing lorem multi vendor <span class="color-primary">
                                                    wireframe Kits </span> marketplace</h6>
                                        </a>
                                        <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a world-class sadipscing...</p>
                                    </div>
                                    <div class="mb-30">
                                        <a href="#">
                                            <h6 class="fw-500">
                                                <span class="color-primary"> wireframe Kits </span> installing
                                                lorem
                                                multi vendor marketplace
                                            </h6>
                                        </a>
                                        <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a world-class sadipscing elitr, sed diam nonumy eirmod...</p>
                                    </div>
                                    <div class="mb-30">
                                        <a href="#">
                                            <h6 class="fw-500">
                                                <span class="color-primary"> wireframe Kits </span> how to
                                                copyright and
                                                trademarks
                                            </h6>
                                        </a>
                                        <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                            world-class
                                            sadipscing elitr, sed diam nonumy eirmod...</p>
                                    </div>
                                    <div class="mb-30">
                                        <a href="#">
                                            <h6 class="fw-500">How to stop getting emails from lorem <span class="color-primary"> wireframe Kits </span></h6>
                                        </a>
                                        <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a world-class sadipscing...</p>
                                    </div>
                                    <div class="mb-30">
                                        <a href="#">
                                            <h6 class="fw-500">How to installing lorem multi vendor <span class="color-primary">
                                                    wireframe Kits </span> marketplace</h6>
                                        </a>
                                        <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a world-class sadipscing...</p>
                                    </div>
                                    <div class="mb-30">
                                        <a href="#">
                                            <h6 class="fw-500">
                                                <span class="color-primary"> wireframe Kits </span> how to
                                                copyright and
                                                trademarks
                                            </h6>
                                        </a>
                                        <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                            world-class
                                            sadipscing elitr, sed diam nonumy eirmod...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-0 pt-30 pb-40 px-0">

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
                <div class="tab-pane fade" id="pills-presentation" role="tabpanel" aria-labelledby="pills-presentation-tab">
                </div>
                <div class="tab-pane fade" id="pills-web" role="tabpanel" aria-labelledby="pills-web-tab">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection