@section('title', $title)
@section('description', $description)
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-breadcrumb">
                    <div class="breadcrumb-main add-contact justify-content-sm-between ">
                        <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                            <div class="d-flex align-items-center add-contact__title justify-content-center me-sm-25">
                                <h4 class="text-capitalize fw-500 breadcrumb-title">{{ trans('menu.booking-list') }}
                                </h4>
                                <span class="sub-title ms-sm-25 ps-sm-25"></span>
                            </div>
                        </div>
                        <div class="breadcrumb-main__wrapper">

                            <form action="/" class="d-flex align-items-center add-contact__form my-sm-0 my-2">
                                <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                                <input class="form-control me-sm-2 border-0 box-shadow-none" type="search"
                                    placeholder="Search by Name" aria-label="Search">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-30">
                <div class="card">
                    <div class="card-header color-dark fw-500">
                        Booking List
                        <div class="project-category d-flex align-items-center ms-md-30 mt-xxl-10 mt-15">
                            <p class="fs-14 color-gray text-capitalize mb-10 mb-md-0  me-10">Status :</p>
                            <div class="project-tap order-project-tap global-shadow">
                                <ul class="nav px-1" id="ap-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="ap-overview-tab" data-bs-toggle="pill" href="#ap-overview" role="tab" aria-selected="true">All</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="timeline-tab" data-bs-toggle="pill" href="#timeline" role="tab" aria-selected="false">Allocated</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="activity-tab" data-bs-toggle="pill" href="#activity" role="tab" aria-selected="false">Not Allocated</a>
                                    </li>
                                    <!--<li class="nav-item">
                                        <a class="nav-link" id="draft-tab" data-bs-toggle="pill" href="#draft" role="tab" aria-selected="false">Canceled</a>
                                    </li>-->
                                </ul>
                            </div>
                        </div>
                        <button type="button" class="order-bg-opacity-secondary text-secondary btn radius-md">Export</button>
                    </div>

                    <div class="card-body">
                        <div class="userDatatable global-shadow border-light-0 w-100">
                            <div class="table-responsive">
                                <table class="table mb-0 table-borderless">
                                    <thead>
                                        <tr class="userDatatable-header">
                                            <th>
                                                <div class="d-flex align-items-center">
                                                    <div class="custom-checkbox  check-all">
                                                        <input class="checkbox" type="checkbox" id="check-45">
                                                        <label for="check-45">
                                                            <span class="checkbox-text userDatatable-title">Booking ID</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Customer ID</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Room ID</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Room Type</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">No Of Kids</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">No Of Adults</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Packages</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Status</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title float-end">Checkin</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title float-end">Checkout</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title float-end">Actions</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($bookings) == 0)
                                            <tr>
                                            </tr>
                                        @else
                                            @foreach ($bookings as $booking)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="userDatatable__imgWrapper d-flex align-items-center">
                                                                <div class="checkbox-group-wrapper">
                                                                    <div class="checkbox-group d-flex">
                                                                        <div
                                                                            class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                            <input class="checkbox" type="checkbox" id="check-{{ $booking->id }}">
                                                                            <label for="check-{{ $booking->id }}"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="userDatatable-inline-title">
                                                                {{ $booking->booking_id}}
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $booking->cusid }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $booking->room_id }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $booking->type }}
                                                            {{-- {{ $customer->gender == 'male' ? 'Male' : 'Female' }} --}}
                                                        </div>
                                                    </td>
                                                    {{--<td>
                                                        <div class="userDatatable-content">
                                                            {{ $booking->bed }}
                                                             <span
                                                                class="bg-opacity-{{ get_status_class( $customer->status ) }}  color-{{ get_status_class( $customer->status ) }} rounded-pill userDatatable-content-status active">
                                                                {{ get_status_label( $customer->status ) }}
                                                            </span> 
                                                        </div>
                                                    </td>--}}
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $booking->kids }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $booking->adults }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $booking->package }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="orderDatatable-status d-inline-block">
                                                            <span class="order-bg-opacity-success  text-success rounded-pill active">
                                                            {{ $booking->status }}
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $booking->checkin }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $booking->checkout }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                            <li>
                                                                <a href="{{ route('booking.edit', [app()->getLocale(), $booking->id]) }}"
                                                                    class="edit">
                                                                    <i class="uil uil-edit"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="#"
                                                                    class="remove"
                                                                    onclick="
                                                                        event.preventDefault();
                                                                        if ( confirm('Are you sure you want to delete ?') ) {
                                                                            document.getElementById( 'delete-{{ $booking->id }}' ).submit();
                                                                        }
                                                                    "
                                                                >
                                                                    <i class="uil uil-trash-alt"></i>
                                                                </a>

                                                                <form style="display:none;" id="delete-{{ $booking->id }}"
                                                                    action="{{ route('booking.delete', [app()->getLocale(), $booking->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('post')
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="pagination-container d-flex justify-content-end pt-25">
                            {{ $bookings->links( 'pagination::bootstrap-5' ) }}

                            <ul class="dm-pagination d-flex">
                                <li class="dm-pagination__item">
                                    <div class="paging-option">
                                        <select name="page-number" class="page-selection" onchange="updatePagination( event )">
                                            <option value="20" {{ 20 == $bookings->perPage() ? 'selected' : '' }}>20/page</option>
                                            <option value="40" {{ 40 == $bookings->perPage() ? 'selected' : '' }}>40/page</option>
                                            <option value="60" {{ 60 == $bookings->perPage() ? 'selected' : '' }}>60/page</option>
                                        </select>
                                        <a href="/pagination-per-page/20" class="d-none per-page-pagination"></a>
                                    </div>
                                </li>
                            </ul>

                            <script>
                                function updatePagination( event ) {
                                    var per_page = event.target.value;

                                    const per_page_link = document.querySelector( '.per-page-pagination' );
                                    per_page_link.setAttribute( 'href', '/pagination-per-page/' + per_page  );

                                    per_page_link.click();
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
