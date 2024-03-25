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
                                <h4 class="text-capitalize fw-500 breadcrumb-title">{{ trans('menu.customers-list') }}
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
                        Customer List
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
                                                            <span class="checkbox-text userDatatable-title">Customer ID</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Customer Name</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">ID/Passport</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Telephone</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Email</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Country</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">DOB</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Anniversary</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title float-end">Actions</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($customers) == 0)
                                            <tr>
                                            </tr>
                                        @else
                                            @foreach ($customers as $customer)
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
                                                            </div>
                                                            <div class="userDatatable-inline-title">
                                                                {{ $customer->id }}
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $customer->name }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $customer->passport }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $customer->telephone }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $customer->email }}
                                                            {{-- {{ $customer->gender == 'male' ? 'Male' : 'Female' }} --}}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $customer->country }}
                                                            {{-- <span
                                                                class="bg-opacity-{{ get_status_class( $customer->status ) }}  color-{{ get_status_class( $customer->status ) }} rounded-pill userDatatable-content-status active">
                                                                {{ get_status_label( $customer->status ) }}
                                                            </span> --}}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $customer->dob }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $customer->anniversary }}
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
