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
                        <form action="{{ route('room.store', app()->getLocale()) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-25">
                                    <label for="room_name">Room Name <span class="text-danger">*</span></label>
                                    <div class="with-icon">
                                        <span class="fas fa-house-user"></span>
                                        <input type="text" name="room_name" value="{{ old('room_name') }}"
                                            class="form-control  ih-medium ip-gray radius-xs b-light" id="inputNameIcon"
                                            placeholder="">
                                    </div>
                                    @if ($errors->has('room_name'))
                                        <p class="text-danger">{{ $errors->first('room_name') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-25">
                                    <div class="form-group">
                                        <label for="room_type">Room Type<span class="text-danger">*</span></label></label>
                                        <select class="form-control px-15" id="exampleFormControlSelect1" name="room_type">
                                            <option>A/C</option>
                                            <option>non A/C</option>
                                        </select>
                                    </div>
                                    @if ($errors->has('room_type'))
                                        <p class="text-danger">{{ $errors->first('room_type') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-25">
                                    <div class="form-group">
                                        <label for="bed_type">Bed Type<span class="text-danger">*</span></label></label>
                                        <select class="textfd form-control px-15" id="exampleFormControlSelect2"
                                            name="bed_type">
                                            <option>Single</option>
                                            <option>Double</option>
                                            <option>Thriple</option>
                                            <option>King</option>
                                        </select>
                                    </div>
                                    @if ($errors->has('bed_type'))
                                        <p class="text-danger">{{ $errors->first('bed_type') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-25">
                                    <label for="kid_price">Kid Price<span class="text-danger">*</span></label>
                                    <div class="with-icon">
                                        <span class="fas fa-child"></span>
                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light" value="{{ old('kids_price') }}"
                                            id="InputEmailIcon" name="kids_price" placeholder="">
                                    </div>
                                    @if ($errors->has('kids_price'))
                                        <p class="text-danger">{{ $errors->first('kids_price') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-25">
                                    <label for="adult_price">Adult Price<span class="text-danger">*</span></label>
                                    <div class="with-icon">
                                        <span class="fas fa-user"></span>
                                        <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light" value="{{ old('adult_price') }}"
                                            id="inputPhoneIcon" name="adult_price" placeholder="">

                                    </div>
                                    @if ($errors->has('adult_price'))
                                        <p class="text-danger">{{ $errors->first('adult_price') }}</p>
                                    @endif
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
                                        <button type="button"
                                            class="btn btn-default btn-squared border-normal bg-normal px-20 mr-2">Cancel</button>
                                        <!-- Added 'mr-2' for right margin -->
                                        <button type="submit"
                                            class="btn btn-primary btn-default btn-squared px-30">Save</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var successData = {!! json_encode(session('success')) !!};
            showMsg(successData);
        });
    </script>
    @endif
    <div class="message-wrapper"></div>
@endsection
