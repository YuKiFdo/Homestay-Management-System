@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-select') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-select') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>Basic</h6>
                    </div>
                    <div class="card-body">
                        <div class="dm-select-list d-flex">
                            <div class="dm-select ">
                                <select name="select-1" id="select-1" class="form-control ">
                                    <option value="01">Option 1</option>
                                    <option value="02">Option 2</option>
                                    <option value="03">Option 3</option>
                                    <option value="04">Option 4</option>
                                    <option value="05">Option 5</option>
                                </select>
                            </div>
                            <div class="dm-select disabled ">
                                <select name="select-2" id="select-2" class="form-control " disabled>
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
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>Search Field</h6>
                    </div>
                    <div class="card-body">
                        <div class="dm-select-list d-flex">
                            <div class="dm-select ">
                                <select name="select-search" id="select-search" class="form-control ">
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
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>Select Tag</h6>
                    </div>
                    <div class="card-body">
                        <div class="dm-tag-mode">
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
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header  py-20">
                        <h6>Select Size</h6>
                    </div>
                    <div class="card-body">
                        <div class="select-size">
                            <div class="dm-nav-controller select-size__control">
                                <div class="btn-group dm-button-group btn-group-normal nav" role="tablist">
                                    <a href="#large" class="btn btn-sm btn-outline-light nav-link active" id="size-large" data-bs-toggle="tab" role="tab" aria-controls="large" aria-selected="true">Large</a>
                                    <a href="#default" class="btn btn-sm btn-outline-light nav-link" id="size-default" data-bs-toggle="tab" role="tab" aria-controls="default" aria-selected="false">Default</a>
                                    <a href="#small" class="btn btn-sm btn-outline-light nav-link" id="size-small" data-bs-toggle="tab" role="tab" aria-controls="small" aria-selected="false">Small</a>
                                </div>
                                <div class="nav-controller-content select-size-content tab-content">
                                    <div class="tab-pane fade show active" id="large" role="tabpanel" aria-labelledby="size-large">
                                        <div class="select-size-content__single">
                                            <div class="dm-select ">
                                                <select name="select-size-1" id="select-size-1" class="form-control  form-control-lg">
                                                    <option value="01">Option 1</option>
                                                    <option value="02">Option 2</option>
                                                    <option value="03">Option 3</option>
                                                    <option value="04">Option 4</option>
                                                    <option value="05">Option 5</option>
                                                </select>
                                            </div>
                                            <div class="dm-select ">
                                                <select name="select-size-3" id="select-size-3" class="form-control  form-control-lg">
                                                    <option value="01">Option 1</option>
                                                    <option value="02">Option 2</option>
                                                    <option value="03">Option 3</option>
                                                    <option value="04">Option 4</option>
                                                    <option value="05">Option 5</option>
                                                </select>
                                            </div>
                                            <div class="dm-select ">
                                                <select name="select-size-2" id="select-size-2" class="form-control  form-control-lg">
                                                    <option value="01">Option 1</option>
                                                    <option value="02">Option 2</option>
                                                    <option value="03">Option 3</option>
                                                    <option value="04">Option 4</option>
                                                    <option value="05">Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="default" role="tabpanel" aria-labelledby="size-small">
                                        <div class="select-size-content__single">
                                            <div class="dm-select ">
                                                <select name="select-size-4" id="select-size-4" class="form-control  form-control-default">
                                                    <option value="01">Option 1</option>
                                                    <option value="02">Option 2</option>
                                                    <option value="03">Option 3</option>
                                                    <option value="04">Option 4</option>
                                                    <option value="05">Option 5</option>
                                                </select>
                                            </div>
                                            <div class="dm-select ">
                                                <select name="select-size-5" id="select-size-5" class="form-control  form-control-default">
                                                    <option value="01">Option 1</option>
                                                    <option value="02">Option 2</option>
                                                    <option value="03">Option 3</option>
                                                    <option value="04">Option 4</option>
                                                    <option value="05">Option 5</option>
                                                </select>
                                            </div>
                                            <div class="dm-select ">
                                                <select name="select-size-6" id="select-size-6" class="form-control  form-control-default">
                                                    <option value="01">Option 1</option>
                                                    <option value="02">Option 2</option>
                                                    <option value="03">Option 3</option>
                                                    <option value="04">Option 4</option>
                                                    <option value="05">Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="small" role="tabpanel" aria-labelledby="size-default">
                                        <div class="select-size-content__single">
                                            <div class="dm-select ">
                                                <select name="select-size-17" id="select-size-17" class="form-control  form-control-sm">
                                                    <option value="01">Option 1</option>
                                                    <option value="02">Option 2</option>
                                                    <option value="03">Option 3</option>
                                                    <option value="04">Option 4</option>
                                                    <option value="05">Option 5</option>
                                                </select>
                                            </div>
                                            <div class="dm-select ">
                                                <select name="select-size-9" id="select-size-9" class="form-control  form-control-sm">
                                                    <option value="01">Option 1</option>
                                                    <option value="02">Option 2</option>
                                                    <option value="03">Option 3</option>
                                                    <option value="04">Option 4</option>
                                                    <option value="05">Option 5</option>
                                                </select>
                                            </div>
                                            <div class="dm-select ">
                                                <select name="select-size-0" id="select-size-0" class="form-control  form-control-sm">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection