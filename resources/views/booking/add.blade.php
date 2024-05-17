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
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Booking Rooms</a>
                                </li>
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
                        <form action="{{ route('booking.store', app()->getLocale()) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-25">
                                    {{-- <div class="col-md-6 mb-25"> --}}
                                    <label for="customer_id">Customer ID<span class="text-danger">*</span></label>
                                    <select class="form-control ih-medium ip-gray radius-xs b-ligh" id="customer_id"
                                        name="customer_id">
                                        <option value="">Select Customer</option>
                                        @foreach ($customers as $customer)
                                            <option value="{{ $customer->id }}">{{ $customer->cusid }} -
                                                {{ $customer->name }}</option>
                                        @endforeach
                                    </select>
                                    {{-- </div> --}}
                                    @if ($errors->has('name'))
                                        <p class="text-danger">{{ $errors->first('name') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-25">
                                    {{-- <div class="col-md-6 mb-25"> --}}
                                    <label for="room_id">Room ID<span class="text-danger">*</span></label>
                                    <select class="form-control ih-medium ip-gray radius-xs b-ligh" id="room_id"
                                        name="room_id">
                                        <option value="">Select Room</option>
                                        @foreach ($rooms as $room)
                                            <option value="{{ $room->id }}" data-adult-price="{{ $room->adultprice }}"
                                                data-child-price="{{ $room->kidprice }}">{{ $room->name }}</option>
                                        @endforeach
                                    </select>
                                    {{-- </div> --}}
                                    @if ($errors->has('name'))
                                        <p class="text-danger">{{ $errors->first('name') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-25">
                                    <label for="checkin">Check In<span class="text-danger">*</span></label>
                                    <div class="with-icon">
                                        <span class="fas fa-calendar"></span>
                                        <input type="text" name="checkin"
                                            class="form-control  ih-medium ip-gray radius-xs b-light" id="datepicker8"
                                            value="{{ old('checkin') }}" placeholder="">

                                    </div>
                                    @if ($errors->has('checkin'))
                                        <p class="text-danger">{{ $errors->first('checkout') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-25">
                                    <label for="checkout">Check Out<span class="text-danger">*</span></label>
                                    <div class="with-icon">
                                        <span class="fas fa-calendar"></span>
                                        <input type="text" name="checkout"
                                            class="form-control  ih-medium ip-gray radius-xs b-light" id="datepicker9"
                                            value="{{ old('checkout') }}" placeholder="">

                                    </div>
                                    @if ($errors->has('checkout'))
                                        <p class="text-danger">{{ $errors->first('checkout') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-25">
                                    <label for="email">Number Of Kids<span class="text-danger">*</span></label>
                                    <div class="with-icon">
                                        <span class="fas fa-child"></span>
                                        <input type="text" name="kids" value="{{ old('email') }}"
                                            class="form-control ih-medium ip-light radius-xs b-light" id="InputKidIcon"
                                            placeholder="">
                                    </div>
                                    @if ($errors->has('email'))
                                        <p class="text-danger">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-25">
                                    <label for="email">Number Of Adults<span class="text-danger">*</span></label>
                                    <div class="with-icon">
                                        <span class="fas fa-user"></span>
                                        <input type="text" name="adults" value="{{ old('email') }}"
                                            class="form-control ih-medium ip-light radius-xs b-light" id="InputAdultIcon"
                                            placeholder="">
                                    </div>
                                    @if ($errors->has('email'))
                                        <p class="text-danger">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-25" class="form-group tagSelect-rtl">
                                    <label for="packages">Packages<span class="text-danger">*</span></label>
                                    <select class="form-control ih-medium ip-gray radius-xs b-ligh" id="package"
                                        name="packages">
                                        <option value="">Select Package</option>
                                        <option value="1">Trip to Sigiriya</option>
                                        <option value="2">Trip to Kandy</option>
                                        <option value="3">Trip to Nuwara Eliya</option>
                                    </select>
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
                                                    <h5 id="total-price" class="text-primary">$0.00</h5>
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
    <script>
        // Get references to the room select element and total price element
        const roomSelect = document.getElementById('room_id');
        const totalPriceElement = document.getElementById('total-price');
        const adultInput = document.getElementById('InputAdultIcon');
        const kidInput = document.getElementById('InputKidIcon');
        const checkin = document.getElementById('datepicker8');
        const checkout = document.getElementById('datepicker9');

        // Function to update the total price
        function updateTotalPrice() {

            const noofdays = Math.floor((new Date(checkout.value) - new Date(checkin.value)) / (1000 * 60 * 60 * 24)) || 0;
            const selectedOption = roomSelect.options[roomSelect.selectedIndex];
            const adultPrice = parseFloat(selectedOption.getAttribute('data-adult-price'));
            const childPrice = parseFloat(selectedOption.getAttribute('data-child-price'));
            const adults = parseInt(adultInput.value) || 0;
            const children = parseInt(kidInput.value) || 0;
            // Calculate total price
            if (adults > 0 || children > 0) {
                // Calculate total price

                const totalPrice = (adults * adultPrice) + (children * childPrice) * noofdays;
                // Update the total price displayed
                totalPriceElement.textContent = '$' + totalPrice.toFixed(2);
            } else {
                // If no adults or kids selected, set total price to 0
                totalPriceElement.textContent = '$0.00';
            }
        }

        // Add event listener to room select element to update total price on change
        roomSelect.addEventListener('change', updateTotalPrice);

        // Add event listeners to adult and kid inputs to update total price on change
        adultInput.addEventListener('input', updateTotalPrice);
        kidInput.addEventListener('input', updateTotalPrice);
        checkout.addEventListener('change', updateTotalPrice);

        // Call the updateTotalPrice function initially to set the initial total price
        updateTotalPrice();
    </script>
@endsection
