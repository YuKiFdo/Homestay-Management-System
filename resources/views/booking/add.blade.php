@section('title', $title)
@section('description', $description)
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.booking-add') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Booking Rooms</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.booking-add') }}
                                </li>
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
                        <h6>Booking A New Room </h6>
                    </div>
                    <div class="card-body py-md-30">
                        <form action="{{ route('customer.store', app()->getLocale()) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-25">
                                    <label for="customer_name">Customer ID<span class="text-danger">*</span></label>
                                    <div class="with-icon">
                                        <span class="la-user lar color-gray"></span>
                                        <input type="text" name="name"
                                            class="form-control  ih-medium ip-gray radius-xs b-light" id="inputNameIcon"
                                            value="{{ old('name') }}" placeholder="">

                                    </div>
                                    @if ($errors->has('name'))
                                        <p class="text-danger">{{ $errors->first('name') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="id_or_passport">ID / Passport<span class="text-danger">*</span></label>
                                    <div class="with-icon">
                                        <span class="fas fa-id-card"></span>
                                        <input type="text" name="passport"
                                            class="form-control  ih-medium ip-gray radius-xs b-light" id="inputIdIcon"
                                            value="{{ old('passport') }}" placeholder="">
                                    </div>
                                    @if ($errors->has('passport'))
                                        <p class="text-danger">{{ $errors->first('passport') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-25">
                                    <label for="phone_number">Room Name<span class="text-danger">*</span></label>
                                    <div class="with-icon">
                                        <span class="fas fa-home"></span>
                                        <input type="text" name="telephone"
                                            class="form-control  ih-medium ip-gray radius-xs b-light" id="inputPhoneIcon"
                                            value="{{ old('telephone') }}" placeholder="">

                                    </div>
                                    @if ($errors->has('telephone'))
                                        <p class="text-danger">{{ $errors->first('telephone') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Number Of Kids<span class="text-danger">*</span></label>
                                    <div class="with-icon">
                                        <span class="fas fa-child"></span>
                                        <input type="text" name="email" value="{{ old('email') }}"
                                            class="form-control ih-medium ip-light radius-xs b-light" id="InputEmailIcon"
                                            placeholder="">
                                    </div>
                                    @if ($errors->has('email'))
                                        <p class="text-danger">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Number Of Adults<span class="text-danger">*</span></label>
                                    <div class="with-icon">
                                        <span class="fas fa-user"></span>
                                        <input type="text" name="email" value="{{ old('email') }}"
                                            class="form-control ih-medium ip-light radius-xs b-light" id="InputEmailIcon"
                                            placeholder="">
                                    </div>
                                    @if ($errors->has('email'))
                                        <p class="text-danger">{{ $errors->first('email') }}</p>
                                    @endif
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
                            <div class="col-md-6 mb-25" class="form-group tagSelect-rtl">
                                <label>Packages<span class="text-danger">*</span></label>
                                <div class="dm-select ">
                                    <select name="select-tag" id="select-tag" class="form-control " multiple="multiple">
                                        <option value="01">Option 1</option>
                                        <option value="02">Option 2</option>
                                        <option value="03">Option 3</option>
                                        <option value="04">Option 4</option>
                                        <option value="05">Option 5</option>
                                    </select>
                                </div>
                            </div>
                                <div class="col-md-6 mb-25">
                                    <label for="phone_number">Check In<span class="text-danger">*</span></label>
                                    <div class="with-icon">
                                        <span class="fas fa-mobile"></span>
                                        <input type="text" name="telephone"
                                            class="form-control  ih-medium ip-gray radius-xs b-light" id="inputPhoneIcon"
                                            value="{{ old('telephone') }}" placeholder="">

                                    </div>
                                    @if ($errors->has('telephone'))
                                        <p class="text-danger">{{ $errors->first('telephone') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-25">
                                    <label for="phone_number">Check Out<span class="text-danger">*</span></label>
                                    <div class="with-icon">
                                        <span class="fas fa-mobile"></span>
                                        <input type="text" name="telephone"
                                            class="form-control  ih-medium ip-gray radius-xs b-light" id="inputPhoneIcon"
                                            value="{{ old('telephone') }}" placeholder="">

                                    </div>
                                    @if ($errors->has('telephone'))
                                        <p class="text-danger">{{ $errors->first('telephone') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                </div>

                                <div class="col-md-6">
                                </div>

                                <div class="col-md-6">
                                    <table class="table table-borderless">
                                        <tr>
                                            <td class="order-summery float-right border-0">
                                                <div class="total-money mt-2 text-end">
                                                    <h6>Total :</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="total-order float-right text-end fs-14 fw-500">
                                                    <h5 class="text-primary">$0.00</h5>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                                

                                <div class="col-md-6">
                                </div>

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
@endsection
