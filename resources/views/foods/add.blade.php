@section('title', $title)
@section('description', $description)
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.foods-add') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Foods</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.foods-add') }}</li>
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
                        <h6>Add New Food</h6>
                    </div>
                    <div class="card-body py-md-30">
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-25">
                                    <label for="food_name">Food Name <span
                                    class="text-danger">*</span></label>
                                    <div class="with-icon">
                                        <span class="fas fa-utensils"></span>
                                        <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light"
                                            id="inputNameIcon" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-25">
                                    <label for="food_price">Food Price<span
                                        class="text-danger">*</span></label>
                                    <div class="with-icon">
                                        <span class="fas fa-tag"></span>
                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light" id="InputEmailIcon" placeholder="">
                                    </div>
                                </div>
                        
                                <div class="col-md-6">
                                </div>

                                

                                <div class="col-md-6 mb-25">
                                    <div class="layout-button mt-0 d-flex justify-content-end">
                                        <!-- Changed class to 'd-flex justify-content-end' -->
                                        <button type="button" class="btn btn-default btn-squared border-normal bg-normal px-20 mr-2">Cancel</button> <!-- Added 'mr-2' for right margin -->
                                        <button type="button" class="btn btn-primary btn-default btn-squared px-30">Save</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
