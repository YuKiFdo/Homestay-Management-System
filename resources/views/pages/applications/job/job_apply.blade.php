@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="job-apply mt-20">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('page_title.job_apply') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>{{ trans('menu.job-menu-title') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('page_title.job_apply') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-25">
            <div class="col-sm-6">
                <div class="job-apply-wrapper">
                    <div class="job-apply__content">
                        <h1>
                            Submit your Ticket
                        </h1>
                        <form>
                            <div class="form-group">
                                <label>Full name</label>
                                <input type="text" class="form-control" placeholder="e.g. John Smith">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email address">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="number" class="form-control" placeholder="Number">
                            </div>
                            <div class="form-group">
                                <label>About you</label>
                                <textarea class="form-control" rows="3" placeholder="Tell us about yourself"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Website URL <span>(optional)</span></label>
                                <input type="text" class="form-control" placeholder="www.domain.com">
                            </div>
                            <div class="form-group">
                                <label>Portfolio URL <span>(optional)</span></label>
                                <input type="text" class="form-control" placeholder="www.domain.com">
                            </div>
                            <div class="form-group">
                                <label>Github URL <span>(optional)</span></label>
                                <input type="text" class="form-control" placeholder="www.domain.com">
                            </div>
                            <div class="form-group">
                                <label>What are you looking for in a new role?</label>
                                <textarea class="form-control" rows="3" placeholder="What can we help with?"></textarea>
                            </div>
                            <div class="form-group">
                                <label>What has been your most challenging experience in a past role? </label>
                                <textarea class="form-control" rows="3" placeholder="What can we help with?"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Salary Expectation</label>
                                <input type="text" class="form-control" placeholder="www.domain.com">
                            </div>
                            <div class="form-group">
                                <label>Please upload your CV</label>
                                <div class="dm-tag-wrap">
                                    <div class="dm-upload">
                                        <div class="dm-upload__button">
                                            <a href="javascript:void(0)" class="btn btn-lg btn-outline-lighten btn-upload" onclick="$('#upload-1').click()"> <img src="{{ asset('assets/img/svg/paperclip.svg') }}" alt="paperclip" class="svg"> Browse</a>
                                            <input type="file" name="upload-1" class="upload-one" id="upload-1">
                                        </div>
                                        <div class="dm-upload__file">
                                            <ul>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-group d-flex pt-15">
                                <button class="btn btn-primary btn-default btn-squared ">Submit Application</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection