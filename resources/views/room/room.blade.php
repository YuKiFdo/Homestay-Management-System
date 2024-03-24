@section('title', $title)
@section('description', $description)
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.room-add') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Room</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.room-add') }}</li>
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
                        <h6>Add New Room</h6>
                    </div>
                    <div class="card-body py-md-30">
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-25">
                                    <label for="room_name">Room Name <span
                                    class="text-danger">*</span></label>
                                    <div class="with-icon">
                                        <span class="fas fa-house-user"></span>
                                        <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light"
                                            id="inputNameIcon" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-25">
                                    <div class="form-group">
                                        <label for="room_type">Room Type<span
                                            class="text-danger">*</span></label></label>
                                        <select class="form-control px-20" id="exampleFormControlSelect1">
                                            <option>Ac</option>
                                            <option>Non Ac</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-25">
                                    <div class="form-group">
                                        <label for="bed_type">Bed Type<span
                                            class="text-danger">*</span></label></label>
                                        <select class="form-control px-15" id="exampleFormControlSelect1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-25">
                                    <label for="kid_price">Kid Price<span
                                        class="text-danger">*</span></label>
                                    <div class="with-icon">
                                        <span class="fas fa-child"></span>
                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light" id="InputEmailIcon" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-25">
                                    <label for="adult_price">Adult Price<span
                                        class="text-danger">*</span></label>
                                    <div class="with-icon">
                                        <span class="fas fa-user"></span>
                                        <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light"
                                            id="inputPhoneIcon" placeholder="">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                </div>

                                <div class="col-md-6">
                                </div>

                                <!--<div class="col-md-6">
                                </div>-->

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
