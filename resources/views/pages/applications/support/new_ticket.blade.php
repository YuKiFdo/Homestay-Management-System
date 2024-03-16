@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="new-ticket mt-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('page_title.new_ticket') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>{{ trans('menu.support-menu-title') }}</a></li>
                                {{-- <li class="breadcrumb-item"><a href="#">Support</a></li> --}}
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('page_title.new_ticket') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-50 mt-25">
            <div class="col-sm-6">
                <div class="ticket_modal">
                    <div class="ticket_modal-modal">
                        <h1>
                            Submit your Ticket
                        </h1>
                        <form>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Priority</label>
                                <input type="text" class="form-control" placeholder="High">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <input type="text" class="form-control" placeholder="Open">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <div class="button-group d-flex pt-15">
                                <button class="btn btn-primary btn-default btn-squared ">Submit ticket</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection