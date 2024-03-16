@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-tab') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-tab') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
            <div class="col-12">
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>Basic</h6>
                    </div>
                    <div class="card-body">
                        <div class="tab-wrapper">

                            <div class="dm-tab tab-horizontal">
                                <ul class="nav nav-tabs vertical-tabs" role="tablist">

                                    <li class="nav-item">
                                        <a class="nav-link active" id="tab-v-1-tab" data-bs-toggle="tab" href="#tab-v-1" role="tab" aria-selected="true">Tab 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab-v-2-tab" data-bs-toggle="tab" href="#tab-v-2" role="tab" aria-selected="false">Tab 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab-v-3-tab" data-bs-toggle="tab" href="#tab-v-3" role="tab" aria-selected="false">Tab 3</a>
                                    </li>



                                </ul>
                                <div class="tab-content">



                                    <div class="tab-pane fade show active" id="tab-v-1" role="tabpanel" aria-labelledby="tab-v-1-tab">
                                        <p>Content of Tab Pane 1</p>
                                    </div>
                                    <div class="tab-pane fade" id="tab-v-2" role="tabpanel" aria-labelledby="tab-v-2-tab">
                                        <p>Content of Tab Pane 2</p>
                                    </div>
                                    <div class="tab-pane fade" id="tab-v-3" role="tabpanel" aria-labelledby="tab-v-3-tab">
                                        <p>Content of Tab Pane 3</p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- ends: .card -->
            </div>
            <!-- ends: .col-12 -->
            <div class="col-12">
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>Slide</h6>
                    </div>
                    <div class="card-body">
                        <div class="dm-nav-controller nav-controller-slide">
                            <div class="btn-group dm-button-group btn-group-normal nav" role="tablist">
                                <a class="btn btn-sm btn-outline-light color-light nav-link active" id="control1-tab" data-bs-toggle="tab" href="#control1" role="tab" aria-selected="true">Horizontal</a>
                                <a class="btn btn-sm btn-outline-light color-light nav-link" id="control2-tab" data-bs-toggle="tab" href="#control2" role="tab" aria-selected="false">Vertical</a>
                            </div>
                            <div class="nav-controller-content tab-content">
                                <div class="tab-pane fade show active" id="control1" role="tabpanel" aria-labelledby="control1-tab">
                                    <div class="tab-slide-content">

                                        <div class="dm-tab tab-horizontal">
                                            <ul class="nav nav-tabs vertical-tabs" role="tablist">



                                                <li class="nav-item">
                                                    <a class="nav-link active" id="tab-horizontal-1-tab" data-bs-toggle="tab" href="#tab-horizontal-1" role="tab" aria-selected="true">Tab 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="tab-horizontal-2-tab" data-bs-toggle="tab" href="#tab-horizontal-2" role="tab" aria-selected="false">Tab 2</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="tab-horizontal-3-tab" data-bs-toggle="tab" href="#tab-horizontal-3" role="tab" aria-selected="false">Tab 3</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="tab-horizontal-4-tab" data-bs-toggle="tab" href="#tab-horizontal-4" role="tab" aria-selected="false">Tab 4</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="tab-horizontal-5-tab" data-bs-toggle="tab" href="#tab-horizontal-5" role="tab" aria-selected="false">Tab 5</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="tab-horizontal-6-tab" data-bs-toggle="tab" href="#tab-horizontal-6" role="tab" aria-selected="false">Tab 6</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="tab-horizontal-7-tab" data-bs-toggle="tab" href="#tab-horizontal-7" role="tab" aria-selected="false">Tab 7</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="tab-horizontal-8-tab" data-bs-toggle="tab" href="#tab-horizontal-8" role="tab" aria-selected="false">Tab 8</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="tab-horizontal-9-tab" data-bs-toggle="tab" href="#tab-horizontal-9" role="tab" aria-selected="false">Tab 9</a>
                                                </li>

                                            </ul>
                                            <div class="tab-content">

                                                <div class="tab-pane fade show active" id="tab-horizontal-1" role="tabpanel" aria-labelledby="tab-horizontal-1-tab">
                                                    <p>Content of Tab Pane 1</p>
                                                </div>
                                                <div class="tab-pane fade" id="tab-horizontal-2" role="tabpanel" aria-labelledby="tab-horizontal-2-tab">
                                                    <p>Content of Tab Pane 2</p>
                                                </div>
                                                <div class="tab-pane fade" id="tab-horizontal-3" role="tabpanel" aria-labelledby="tab-horizontal-3-tab">
                                                    <p>Content of Tab Pane 3</p>
                                                </div>
                                                <div class="tab-pane fade" id="tab-horizontal-4" role="tabpanel" aria-labelledby="tab-horizontal-4-tab">
                                                    <p>Content of Tab Pane 4</p>
                                                </div>
                                                <div class="tab-pane fade" id="tab-horizontal-5" role="tabpanel" aria-labelledby="tab-horizontal-5-tab">
                                                    <p>Content of Tab Pane 5</p>
                                                </div>
                                                <div class="tab-pane fade" id="tab-horizontal-6" role="tabpanel" aria-labelledby="tab-horizontal-6-tab">
                                                    <p>Content of Tab Pane 6</p>
                                                </div>
                                                <div class="tab-pane fade" id="tab-horizontal-7" role="tabpanel" aria-labelledby="tab-horizontal-7-tab">
                                                    <p>Content of Tab Pane 7</p>
                                                </div>
                                                <div class="tab-pane fade" id="tab-horizontal-8" role="tabpanel" aria-labelledby="tab-horizontal-8-tab">
                                                    <p>Content of Tab Pane 8</p>
                                                </div>
                                                <div class="tab-pane fade" id="tab-horizontal-9" role="tabpanel" aria-labelledby="tab-horizontal-9-tab">
                                                    <p>Content of Tab Pane 9</p>
                                                </div>



                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="control2" role="tabpanel" aria-labelledby="control2-tab">
                                    <div class="tab-slide-content">

                                        <div class="dm-tab tab-vertical">
                                            <ul class="nav nav-tabs vertical-tabs" role="tablist">



                                                <li class="nav-item">
                                                    <a class="nav-link active" id="tab-vertical-1-tab" data-bs-toggle="tab" href="#tab-vertical-1" role="tab" aria-selected="true">Tab 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="tab-vertical-2-tab" data-bs-toggle="tab" href="#tab-vertical-2" role="tab" aria-selected="false">Tab 2</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="tab-vertical-3-tab" data-bs-toggle="tab" href="#tab-vertical-3" role="tab" aria-selected="false">Tab 3</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="tab-vertical-4-tab" data-bs-toggle="tab" href="#tab-vertical-4" role="tab" aria-selected="false">Tab 4</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="tab-vertical-5-tab" data-bs-toggle="tab" href="#tab-vertical-5" role="tab" aria-selected="false">Tab 5</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="tab-vertical-6-tab" data-bs-toggle="tab" href="#tab-vertical-6" role="tab" aria-selected="false">Tab 6</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="tab-vertical-7-tab" data-bs-toggle="tab" href="#tab-vertical-7" role="tab" aria-selected="false">Tab 7</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="tab-vertical-8-tab" data-bs-toggle="tab" href="#tab-vertical-8" role="tab" aria-selected="false">Tab 8</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="tab-vertical-9-tab" data-bs-toggle="tab" href="#tab-vertical-9" role="tab" aria-selected="false">Tab 9</a>
                                                </li>

                                            </ul>
                                            <div class="tab-content">

                                                <div class="tab-pane fade show active" id="tab-vertical-1" role="tabpanel" aria-labelledby="tab-vertical-1-tab">
                                                    <p>Content of Tab Pane 1</p>
                                                </div>
                                                <div class="tab-pane fade" id="tab-vertical-2" role="tabpanel" aria-labelledby="tab-vertical-2-tab">
                                                    <p>Content of Tab Pane 2</p>
                                                </div>
                                                <div class="tab-pane fade" id="tab-vertical-3" role="tabpanel" aria-labelledby="tab-vertical-3-tab">
                                                    <p>Content of Tab Pane 3</p>
                                                </div>
                                                <div class="tab-pane fade" id="tab-vertical-4" role="tabpanel" aria-labelledby="tab-vertical-4-tab">
                                                    <p>Content of Tab Pane 4</p>
                                                </div>
                                                <div class="tab-pane fade" id="tab-vertical-5" role="tabpanel" aria-labelledby="tab-vertical-5-tab">
                                                    <p>Content of Tab Pane 5</p>
                                                </div>
                                                <div class="tab-pane fade" id="tab-vertical-6" role="tabpanel" aria-labelledby="tab-vertical-6-tab">
                                                    <p>Content of Tab Pane 6</p>
                                                </div>
                                                <div class="tab-pane fade" id="tab-vertical-7" role="tabpanel" aria-labelledby="tab-vertical-7-tab">
                                                    <p>Content of Tab Pane 7</p>
                                                </div>
                                                <div class="tab-pane fade" id="tab-vertical-8" role="tabpanel" aria-labelledby="tab-vertical-8-tab">
                                                    <p>Content of Tab Pane 8</p>
                                                </div>
                                                <div class="tab-pane fade" id="tab-vertical-9" role="tabpanel" aria-labelledby="tab-vertical-9-tab">
                                                    <p>Content of Tab Pane 9</p>
                                                </div>



                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ends: .card -->
            </div>
            <!-- ends: .col-12 -->
            <div class="col-12">
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>Size</h6>
                    </div>
                    <div class="card-body">
                        <div class="dm-nav-controller">
                            <div class="btn-group dm-button-group btn-group-normal nav" role="tablist">
                                <a href="#large" class="btn btn-sm btn-outline-light color-light nav-link active" id="size-large" data-bs-toggle="tab" role="tab" aria-selected="true">Large</a>
                                <a href="#default" class="btn btn-sm btn-outline-light color-light nav-link" id="size-default" data-bs-toggle="tab" role="tab" aria-selected="false">Default</a>
                                <a href="#small" class="btn btn-sm btn-outline-light color-light nav-link" id="size-small" data-bs-toggle="tab" role="tab" aria-selected="false">Small</a>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="large" role="tabpanel" aria-labelledby="size-large">
                                <div class="tab-horizontal">

                                    <div class="dm-tab tab-large">
                                        <ul class="nav nav-tabs vertical-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="size_large1-tab" data-bs-toggle="tab" href="#size_large1" role="tab" aria-selected="true">Tab 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="size_large2-tab" data-bs-toggle="tab" href="#size_large2" role="tab" aria-selected="false">Tab 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="size_large3-tab" data-bs-toggle="tab" href="#size_large3" role="tab" aria-selected="false">Tab 3</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="size_large1" role="tabpanel" aria-labelledby="size_large1-tab">
                                                <p>Content of Tab Pane 1</p>
                                            </div>
                                            <div class="tab-pane fade" id="size_large2" role="tabpanel" aria-labelledby="size_large2-tab">
                                                <p>Content of Tab Pane 2</p>
                                            </div>
                                            <div class="tab-pane fade" id="size_large3" role="tabpanel" aria-labelledby="size_large3-tab">
                                                <p>Content of Tab Pane 3</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="default" role="tabpanel" aria-labelledby="size-default">
                                <div class="tab-horizontal">

                                    <div class="dm-tab tab-default">
                                        <ul class="nav nav-tabs vertical-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="size_default1-tab" data-bs-toggle="tab" href="#size_default1" role="tab" aria-selected="true">Tab 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="size_default2-tab" data-bs-toggle="tab" href="#size_default2" role="tab" aria-selected="false">Tab 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="size_default3-tab" data-bs-toggle="tab" href="#size_default3" role="tab" aria-selected="false">Tab 3</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="size_default1" role="tabpanel" aria-labelledby="size_default1-tab">
                                                <p>Content of Tab Pane 1</p>
                                            </div>
                                            <div class="tab-pane fade" id="size_default2" role="tabpanel" aria-labelledby="size_default2-tab">
                                                <p>Content of Tab Pane 2</p>
                                            </div>
                                            <div class="tab-pane fade" id="size_default3" role="tabpanel" aria-labelledby="size_default3-tab">
                                                <p>Content of Tab Pane 3</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="small" role="tabpanel" aria-labelledby="size-small">
                                <div class="tab-horizontal">

                                    <div class="dm-tab tab-small">
                                        <ul class="nav nav-tabs vertical-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="size_small1-tab" data-bs-toggle="tab" href="#size_small1" role="tab" aria-selected="true">Tab 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="size_small2-tab" data-bs-toggle="tab" href="#size_small2" role="tab" aria-selected="false">Tab 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="size_small3-tab" data-bs-toggle="tab" href="#size_small3" role="tab" aria-selected="false">Tab 3</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="size_small1" role="tabpanel" aria-labelledby="size_small1-tab">
                                                <p>Content of Tab Pane 1</p>
                                            </div>
                                            <div class="tab-pane fade" id="size_small2" role="tabpanel" aria-labelledby="size_small2-tab">
                                                <p>Content of Tab Pane 2</p>
                                            </div>
                                            <div class="tab-pane fade" id="size_small3" role="tabpanel" aria-labelledby="size_small3-tab">
                                                <p>Content of Tab Pane 3</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ends: .card -->
            </div>
            <!-- ends: .col-12 -->
        </div>
    </div>
</div>
@endsection