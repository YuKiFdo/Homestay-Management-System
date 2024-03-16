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
                                <h4 class="text-capitalize fw-500 breadcrumb-title">{{ trans('menu.customer-view-all') }}
                                </h4>
                                <span class="sub-title ms-sm-25 ps-sm-25"></span>
                            </div>
                            <div class="action-btn mt-sm-0 mt-15">
                                <a href="{{ route('customer.create', app()->getLocale()) }}" class="btn px-20 btn-primary ">
                                    <i class="las la-plus fs-16"></i>Add New
                                </a>
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
                        Customer List
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
                                                            <span class="checkbox-text userDatatable-title">Customer</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Emaill</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Phone</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Profession</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Gender</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Status</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title float-end">Actions</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($customers) == 0)
                                            <tr>
                                                <td colspan="7">
                                                    <p class="text-center">No Customer Found !</p>
                                                </td>
                                            </tr>
                                        @else
                                            @foreach ($customers as $customer)
                                                @php
                                                    $has_profile_picture = ! empty( $customer->profile_picture );
                                                @endphp
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="userDatatable__imgWrapper d-flex align-items-center">
                                                                <div class="checkbox-group-wrapper">
                                                                    <div class="checkbox-group d-flex">
                                                                        <div
                                                                            class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                            <input class="checkbox" type="checkbox" id="check-{{ $customer->id }}">
                                                                            <label for="check-{{ $customer->id }}"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('{{ $has_profile_picture ? Helper::get_public_storage_asset_url( $customer->profile_picture ) : asset( 'assets/img/svg/user.svg' ) }}'); background-size: cover;"></a>
                                                            </div>
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>{{ $customer->name }}</h6>
                                                                </a>
                                                                <p class="d-block mb-0">
                                                                    {{ $customer->address == null ? '' : $customer->address }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $customer->email }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $customer->phone }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $customer->profession }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $customer->gender == 'male' ? 'Male' : 'Female' }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content d-inline-block">
                                                            <span
                                                                class="bg-opacity-{{ get_status_class( $customer->status ) }}  color-{{ get_status_class( $customer->status ) }} rounded-pill userDatatable-content-status active">
                                                                {{ get_status_label( $customer->status ) }}
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                            <li>
                                                                <a href="{{ route('customer.edit', [app()->getLocale(), $customer->id]) }}"
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
                                                                            document.getElementById( 'delete-{{ $customer->id }}' ).submit();
                                                                        }
                                                                    "
                                                                >
                                                                    <i class="uil uil-trash-alt"></i>
                                                                </a>

                                                                <form style="display:none;" id="delete-{{ $customer->id }}"
                                                                    action="{{ route('customer.delete', [app()->getLocale(), $customer->id]) }}"
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
                            {{ $customers->links( 'pagination::bootstrap-5' ) }}

                            <ul class="dm-pagination d-flex">
                                <li class="dm-pagination__item">
                                    <div class="paging-option">
                                        <select name="page-number" class="page-selection" onchange="updatePagination( event )">
                                            <option value="20" {{ 20 == $customers->perPage() ? 'selected' : '' }}>20/page</option>
                                            <option value="40" {{ 40 == $customers->perPage() ? 'selected' : '' }}>40/page</option>
                                            <option value="60" {{ 60 == $customers->perPage() ? 'selected' : '' }}>60/page</option>
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
