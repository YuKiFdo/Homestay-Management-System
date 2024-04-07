@section('title', $title)
@section('description', $description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="min-vh-100 content-center">
                <div class="maintenance-page text-center">
                    <img src="{{ asset('assets/img/svg/noperms.svg') }}" alt="noperms" class="svg" />
                    <h5 class="maintenance-page__title ">You do not have permission to Perform this !</h5>
                    <p class="fw-500">Please contact your administrator for more information.</p>
                    <a href="{{ route('customer.view', app()->getLocale()) }}" class="btn btn-primary mt-3 d-block mx-auto">
                        <i class="uil uil-arrow-left me-2"></i>Go Back
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
