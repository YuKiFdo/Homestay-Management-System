@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.form-component') }}</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.form-component') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    <div class="form-element">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Input Groups</h6>
                            </div>
                            <div class="card-body py-md-30">
                                <form action="#">
                                    <div class="form-group row mb-n25">
                                        <div class="col-md-6 mb-25">
                                            <div class="with-icon">
                                                <span class="la-user lar color-light"></span>
                                                <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputNameIcon1" placeholder="Duran Clayton">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-25">
                                            <div class="with-icon">
                                                <span class="las la-envelope color-light"></span>
                                                <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputNameIcon2" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-25">
                                            <div class="with-icon">
                                                <span class="las la-map-marker color-light"></span>
                                                <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputNameIcon3" placeholder="Location">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-25">
                                            <div class="with-icon">
                                                <span class="la-lock las color-light"></span>
                                                <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputNameIcon4" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-25">
                                            <div class="with-icon">
                                                <span class="las la-credit-card color-light"></span>
                                                <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputNameIcon5" placeholder="Payment Method">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-25">
                                            <div class="with-icon">
                                                <span class="la-phone las color-light"></span>
                                                <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputNameIcon6" placeholder="Phone Number">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card card-horizontal card-default card-md mb-4">
                            <div class="card-header">
                                <h6>HTML5 Inputs</h6>
                            </div>
                            <div class="card-body py-md-30">
                                <div class="mb-25 select-style2">

                                    <div class="dm-select ">

                                        <select name="select-alerts2" id="select-alerts2" class="form-control ">
                                            <option value="01">Option 1</option>
                                            <option value="02">Option 2</option>
                                            <option value="03">Option 3</option>
                                            <option value="04">Option 4</option>
                                            <option value="05">Option 5</option>
                                        </select>

                                    </div>

                                </div>
                                <div class="select-style2">

                                    <div class="dm-select ">

                                        <select name="select-option2" id="select-option2" class="form-control ">
                                            <option value="01">Option 1</option>
                                            <option value="02">Option 2</option>
                                            <option value="03">Option 3</option>
                                            <option value="04">Option 4</option>
                                            <option value="05">Option 5</option>
                                        </select>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>
                    <div class="col-lg-12">
                        <div class="card card-horizontal card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Datepicker</h6>
                            </div>
                            <div class="card-body py-md-30">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-calender mb-20">
                                            <label for="datepicker8" class="il-gray fs-14 fw-500 align-center mb-10">Date</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light" id="datepicker8" placeholder="01/10/2021">
                                                <a href="#"><img class="svg" src="{{ asset('assets/img/svg/calendar.svg') }}" alt="calendar"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-group-calender">
                                            <div id="pageWrapper">
                                                <div id="pageMasthead" class="pageSection"></div>
                                                <div id="pageContentArea" class="pageSection">
                                                    <form>
                                                        <label for="txtDateRange" class="il-gray fs-14 fw-500 align-center mb-10">Date
                                                            Range:</label>
                                                        <input type="text" id="txtDateRange" name="txtDateRange" class="inputField shortInputField dateRangeField form-control  ih-medium ip-gray radius-xs b-light" placeholder="01/10/2021 - 01/15/2021" data-from-field="txtDateFrom" data-to-field="txtDateTo" />
                                                        <input type="hidden" id="txtDateFrom" value="" />
                                                        <input type="hidden" id="txtDateTo" value="" />
                                                    </form>
                                                </div>
                                                <div id="pageFooter" class="pageSection"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>
                    <div class="col-lg-12">
                        <div class="card card-horizontal card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Text Editor</h6>
                            </div>
                            <div class="card-body py-md-30">
                                <div class="form-group formElement-editor mb-0">
                                    <textarea name="message" id="mail-reply-message2" class="form-control-lg" placeholder="Type your message..."></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Tags</h6>
                            </div>
                            <div class="card-body py-md-30">
                                <div class="dm-tag-wrap">
                                    <div class="tag-box">


                                        <span class="dm-tag tag-light ">Tag 1</span>








                                        <span><a class="dm-tag tag-light" href="#">Tag 2</a></span>





                                        <span class="dm-tag tag-light">Tag 3 <a href="#" class="tag-closable"><i class="la la-times"></i></a></span>






                                        <span class="dm-tag tag-light">Prevent Default <a href="#" class="tag-closable"><i class="la la-times"></i></a></span>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Toggle buttons</h6>
                            </div>
                            <div class="card-body py-md-30">


                                <div class="form-check form-switch form-switch-primary form-switch-md">
                                    <input type="checkbox" class="form-check-input" id="switch-s1" checked>
                                    <label class="form-check-label" for="switch-s1"></label>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Sliders</h6>
                            </div>
                            <div class="card-body py-md-30">
                                <div class="slider-wrapper">

                                    <div class="dm-slider">

                                        <div class="slider-basic">

                                        </div>

                                    </div>

                                </div>
                                <div class="slider-wrapper">

                                    <div class="dm-slider">

                                        <div class="slider-range">

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card  card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Dropzone</h6>
                            </div>
                            <div class="card-body py-md-30">
                                <div class="dm-upload mb-25">
                                    <div class="dm-upload-avatar media-import mb-25 dropzone-lg-s">
                                        <p class="color-light mt-0 fs-15">Drop files here to upload</p>
                                    </div>
                                    <div class="avatar-up">
                                        <input type="file" name="upload-avatar-input" class="upload-avatar-input">
                                    </div>
                                </div>
                                <div class="dm-upload">
                                    <div class="dm-upload-avatar media-import dropzone-md-s">
                                        <p class="color-light mt-0 fs-14">Drop files here to upload</p>
                                    </div>
                                    <div class="avatar-up">
                                        <input type="file" name="upload-avatar-input" class="upload-avatar-input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection