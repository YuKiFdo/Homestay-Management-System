@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-collapse') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-collapse') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header py-20">
                        <h6>Basic</h6>
                    </div>
                    <div class="card-body">


                        <div class="dm-collapse">

                            <div class="dm-collapse-item">
                                <div class="dm-collapse-item__header active">
                                    <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-1" aria-expanded="true">

                                        <i class="la la-angle-right"></i>

                                        <h6>This is panel header 1</h6>
                                    </a>
                                </div>
                                <div id="collapse-body-1" class="collapse dm-collapse-item__body show">
                                    <div class="collapse-body-text">
                                        <p>
                                            A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                            welcome guest in many households across the world.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="dm-collapse-item">
                                <div class="dm-collapse-item__header">
                                    <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-2" aria-expanded="false">

                                        <i class="la la-angle-right"></i>

                                        <h6>This is panel header 1</h6>
                                    </a>
                                </div>
                                <div id="collapse-body-2" class="collapse dm-collapse-item__body">
                                    <div class="collapse-body-text">
                                        <p>
                                            A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                            welcome guest in many households across the world.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="dm-collapse-item">
                                <div class="dm-collapse-item__header">
                                    <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-3" aria-expanded="false">

                                        <i class="la la-angle-right"></i>

                                        <h6>This is panel header 1</h6>
                                    </a>
                                </div>
                                <div id="collapse-body-3" class="collapse dm-collapse-item__body">
                                    <div class="collapse-body-text">
                                        <p>
                                            A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                            welcome guest in many households across the world.
                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>
                </div>
                <!-- ends: .card -->
                <div class="card card-default card-md mb-4">
                    <div class="card-header py-20">
                        <h6>Nested panel</h6>
                    </div>
                    <div class="card-body">


                        <div class="dm-collapse ">

                            <div class="dm-collapse-item">
                                <div class="dm-collapse-item__header">
                                    <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-n-1" aria-expanded="true">
                                        <i class="la la-angle-down"></i>
                                        <h6>This is panel header 1</h6>
                                    </a>
                                </div>
                                <div id="collapse-body-n-1" class="collapse dm-collapse-item__body  show">
                                    <div class="callapse-nested-block">
                                        <div class="dm-collapse-item">
                                            <div class="dm-collapse-item__header">
                                                <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-nested-n-1" aria-expanded="true">
                                                    <i class="la la-angle-down"></i>
                                                    <h6>This is panel header 1</h6>
                                                </a>
                                            </div>
                                            <div id="collapse-body-nested-n-1" class="collapse dm-collapse-item__body  show">
                                                <div class="collapse-body-text">
                                                    <p>
                                                        A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can
                                                        be found as a
                                                        welcome guest in many households across the world.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dm-collapse-item">
                                <div class="dm-collapse-item__header">
                                    <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-n-2" aria-expanded="false">
                                        <i class="la la-angle-down"></i>
                                        <h6>This is panel header 1</h6>
                                    </a>
                                </div>
                                <div id="collapse-body-n-2" class="collapse dm-collapse-item__body ">
                                    <div class="callapse-nested-block">
                                        <div class="dm-collapse-item">
                                            <div class="dm-collapse-item__header">
                                                <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-nested-n-2" aria-expanded="false">
                                                    <i class="la la-angle-down"></i>
                                                    <h6>This is panel header 1</h6>
                                                </a>
                                            </div>
                                            <div id="collapse-body-nested-n-2" class="collapse dm-collapse-item__body ">
                                                <div class="collapse-body-text">
                                                    <p>
                                                        A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can
                                                        be found as a
                                                        welcome guest in many households across the world.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dm-collapse-item">
                                <div class="dm-collapse-item__header">
                                    <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-n-3" aria-expanded="false">
                                        <i class="la la-angle-down"></i>
                                        <h6>This is panel header 1</h6>
                                    </a>
                                </div>
                                <div id="collapse-body-n-3" class="collapse dm-collapse-item__body ">
                                    <div class="callapse-nested-block">
                                        <div class="dm-collapse-item">
                                            <div class="dm-collapse-item__header">
                                                <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-nested-n-3" aria-expanded="false">
                                                    <i class="la la-angle-down"></i>
                                                    <h6>This is panel header 1</h6>
                                                </a>
                                            </div>
                                            <div id="collapse-body-nested-n-3" class="collapse dm-collapse-item__body ">
                                                <div class="collapse-body-text">
                                                    <p>
                                                        A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can
                                                        be found as a
                                                        welcome guest in many households across the world.
                                                    </p>
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
                <div class="card card-default card-md mb-4">
                    <div class="card-header py-20">
                        <h6>No arrow</h6>
                    </div>
                    <div class="card-body">


                        <div class="dm-collapse">

                            <div class="dm-collapse-item">
                                <div class="dm-collapse-item__header active">
                                    <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-h-1" aria-expanded="true">
                                        <h6>This is panel header 1</h6>
                                    </a>
                                </div>
                                <div id="collapse-body-h-1" class="collapse dm-collapse-item__body show">
                                    <div class="collapse-body-text">
                                        <p>
                                            A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                            welcome guest in many households across the world.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="dm-collapse-item">
                                <div class="dm-collapse-item__header">
                                    <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-h-2" aria-expanded="true">

                                        <h6>This is panel header 1</h6>
                                    </a>
                                </div>
                                <div id="collapse-body-h-2" class="collapse dm-collapse-item__body">
                                    <div class="collapse-body-text">
                                        <p>
                                            A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                            welcome guest in many households across the world.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="dm-collapse-item">
                                <div class="dm-collapse-item__header">
                                    <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-h-3" aria-expanded="true">

                                        <h6>This is panel header 1</h6>
                                    </a>
                                </div>
                                <div id="collapse-body-h-3" class="collapse dm-collapse-item__body">
                                    <div class="collapse-body-text">
                                        <p>
                                            A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                            welcome guest in many households across the world.
                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>
                </div>
                <!-- ends: .card -->
            </div>
            <!-- ends: .col-12 -->
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header py-20">
                        <h6>Accordion</h6>
                    </div>
                    <div class="card-body">


                        <div class="dm-collapse dm-accordion">

                            <div class="dm-collapse-item">
                                <div class="dm-collapse-item__header">
                                    <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-a-1" aria-expanded="false">

                                        <i class="la la-angle-right"></i>

                                        <h6>This is panel header 1</h6>
                                    </a>
                                </div>
                                <div id="collapse-body-a-1" class="collapse dm-collapse-item__body">
                                    <div class="collapse-body-text">
                                        <p>
                                            A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                            welcome guest in many households across the world.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="dm-collapse-item">
                                <div class="dm-collapse-item__header">
                                    <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-a-2" aria-expanded="false">

                                        <i class="la la-angle-right"></i>

                                        <h6>This is panel header 1</h6>
                                    </a>
                                </div>
                                <div id="collapse-body-a-2" class="collapse dm-collapse-item__body">
                                    <div class="collapse-body-text">
                                        <p>
                                            A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                            welcome guest in many households across the world.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="dm-collapse-item">
                                <div class="dm-collapse-item__header">
                                    <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-a-3" aria-expanded="false">

                                        <i class="la la-angle-right"></i>

                                        <h6>This is panel header 1</h6>
                                    </a>
                                </div>
                                <div id="collapse-body-a-3" class="collapse dm-collapse-item__body">
                                    <div class="collapse-body-text">
                                        <p>
                                            A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                            welcome guest in many households across the world.
                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>
                </div>
                <!-- ends: .card -->
                <div class="card card-default card-md mb-4">
                    <div class="card-header py-20">
                        <h6>Borderless</h6>
                    </div>
                    <div class="card-body">


                        <div class="dm-collapse dm-collapse-borderless">

                            <div class="dm-collapse-item">
                                <div class="dm-collapse-item__header active">
                                    <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-b-1" aria-expanded="true">

                                        <i class="la la-angle-right"></i>

                                        <h6>This is panel header 1</h6>
                                    </a>
                                </div>
                                <div id="collapse-body-b-1" class="collapse dm-collapse-item__body show">
                                    <div class="collapse-body-text">
                                        <p>
                                            A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                            welcome guest in many households across the world.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="dm-collapse-item">
                                <div class="dm-collapse-item__header">
                                    <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-b-2" aria-expanded="false">

                                        <i class="la la-angle-right"></i>

                                        <h6>This is panel header 1</h6>
                                    </a>
                                </div>
                                <div id="collapse-body-b-2" class="collapse dm-collapse-item__body">
                                    <div class="collapse-body-text">
                                        <p>
                                            A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                            welcome guest in many households across the world.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="dm-collapse-item">
                                <div class="dm-collapse-item__header">
                                    <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-b-3" aria-expanded="false">

                                        <i class="la la-angle-right"></i>

                                        <h6>This is panel header 1</h6>
                                    </a>
                                </div>
                                <div id="collapse-body-b-3" class="collapse dm-collapse-item__body">
                                    <div class="collapse-body-text">
                                        <p>
                                            A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                            welcome guest in many households across the world.
                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>
                </div>
                <!-- ends: .card -->
                <div class="card card-default card-md mb-4">
                    <div class="card-header py-20">
                        <h6>Custom Panel</h6>
                    </div>
                    <div class="card-body">


                        <div class="dm-collapse dm-collapse-custom">

                            <div class="dm-collapse-item">
                                <div class="dm-collapse-item__header active">
                                    <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-c-1" aria-expanded="true">

                                        <i class="la la-angle-right"></i>

                                        <h6>This is panel header 1</h6>
                                    </a>
                                </div>
                                <div id="collapse-body-c-1" class="collapse dm-collapse-item__body show">
                                    <div class="collapse-body-text">
                                        <p>
                                            A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                            welcome guest in many households across the world.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="dm-collapse-item">
                                <div class="dm-collapse-item__header">
                                    <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-c-2" aria-expanded="false">

                                        <i class="la la-angle-right"></i>

                                        <h6>This is panel header 1</h6>
                                    </a>
                                </div>
                                <div id="collapse-body-c-2" class="collapse dm-collapse-item__body">
                                    <div class="collapse-body-text">
                                        <p>
                                            A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                            welcome guest in many households across the world.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="dm-collapse-item">
                                <div class="dm-collapse-item__header">
                                    <a href="#" class="item-link" data-bs-toggle="collapse" data-bs-target="#collapse-body-c-3" aria-expanded="false">

                                        <i class="la la-angle-right"></i>

                                        <h6>This is panel header 1</h6>
                                    </a>
                                </div>
                                <div id="collapse-body-c-3" class="collapse dm-collapse-item__body">
                                    <div class="collapse-body-text">
                                        <p>
                                            A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                            welcome guest in many households across the world.
                                        </p>
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