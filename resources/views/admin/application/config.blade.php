@section('title', $title)
@section('description', $description)
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main d-flex justify-content-end">
                    <div class="breadcrumb-action">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Application</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Configuration</li>
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
                        <h6>Application Configuration </h6>
                    </div>
                    <div class="card-body py-md-30">
                        <form method="POST" action="{{ route('application.update', app()->getLocale()) }}"
                            enctype="multipart/form-data" class="row">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-25">
                                    <label for="application_name">Homestay Name <span
                                            class="text-danger">*</span></label>
                                    <input id="application_name" type="text"
                                        class="form-control ih-medium ip-gray radius-xs b-light px-15 @error('application_name') is-invalid @enderror"
                                        name="application_name"
                                        value="{{ old('application_name') ?? config('application.name') }}" required>
                                    @error('application_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-25">
                                    <label for="application_address">Homestay Address <span
                                            class="text-danger">*</span></label>
                                    <input id="application_address" type="text"
                                        class="form-control ih-medium ip-gray radius-xs b-light px-15 @error('application_address') is-invalid @enderror"
                                        name="application_address"
                                        value="{{ old('application_address') ?? config('application.address') }}" required>
                                    @error('application_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-25">
                                    <label for="application_logo">Homestay Logo</label>
                                    <div class="dm-tag-wrap">
                                        <div class="dm-upload">
                                            <div class="dm-upload__button">
                                                <a href="javascript:void(0)"
                                                    class="btn btn-lg btn-outline-lighten btn-upload"
                                                    onclick="$('#upload-1').click()"> <img
                                                        src="{{ asset('assets/img/svg/upload.svg') }}" alt="upload"
                                                        class="svg"> Click to Upload</a>
                                                <input type="file" name="application_logo"
                                                    class="upload-one @error('application_logo') is-invalid @enderror"
                                                    id="upload-1">
                                            </div>
                                            <div class="dm-upload__file">
                                                <ul>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @error('application_logo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-default btn-squared px-30">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- {{-- Add toast js --}}
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
