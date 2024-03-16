@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-list') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-list') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Sinple List</h6>
                    </div>
                    <div class="card-body">
                        <div class="list-box">
                            <ul>
                                <li class="list-box__item">Header</li>
                                <li class="list-box__item">Racing car sprays burning fuel into crowd.</li>
                                <li class="list-box__item">Japanese princess to wed commoner.</li>
                                <li class="list-box__item">Australian walks 100km after outback crash.</li>
                                <li class="list-box__item">Man charged over missing wedding girl.</li>
                                <li class="list-box__item">Los Angeles battles huge wildfires.</li>
                                <li class="list-box__item">Footer</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection