@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-comment') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>{{ trans('menu.ui-menu-title') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-comment') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card card-default card-md mb-4">
                    <div class="card-header py-20">
                        <h6>Basic comment</h6>
                    </div>
                    <div class="card-body pb-10">
                        <div class="dm-comment-box media">
                            <div class="dm-comment-box__author">
                                <figure>
                                    <img src="{{ asset('assets/img/author/1.jpg') }}" class="bg-opacity-primary d-flex" alt="Admin Autor">
                                </figure>
                            </div>
                            <div class="dm-comment-box__content media-body">
                                <div class="comment-content-inner cci">
                                    <span class="cci__author-info">David</span>
                                    <p class="cci__comment-text">We supply a series of design principles, practical patterns and high quality
                                        design resources (Sketch and Axure), to help people create their product prototypes beautifully and
                                        efficiently.</p>
                                    <div class="cci__comment-actions">
                                        <a href="#" class="btn-like">
                                            <img src="{{ asset('assets/img/svg/thumbs-up.svg') }}" alt="thumbs-up" class="svg">
                                            <span class="line-count">0</span>
                                        </a>
                                        <a href="#" class="btn-dislike">
                                            <img src="{{ asset('assets/img/svg/thumbs-down.svg') }}" alt="thumbs-down" class="svg">
                                            <span class="line-count">0</span>
                                        </a>
                                        <a href="#" class="btn-reply">
                                            <span>Reply</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-default card-md mb-4">
                    <div class="card-header py-20">
                        <h6>Usage with list</h6>
                    </div>
                    <div class="card-body">
                        <div class="comment-list">
                            <div class="comment-list__title">
                                <h6>Reply To</h6>
                            </div>
                            <ul class="comment-list__content">
                                <li class="mb-20">
                                    <div class="dm-comment-box media">
                                        <div class="dm-comment-box__author">
                                            <figure>
                                                <img src="{{ asset('assets/img/author/1.jpg') }}" class="bg-opacity-primary d-flex" alt="Admin Autor">
                                            </figure>
                                        </div>
                                        <div class="dm-comment-box__content media-body">
                                            <div class="comment-content-inner cci">
                                                <span class="cci__author-info">David</span>
                                                <p class="cci__comment-text">We supply a series of design principles, practical patterns and high quality
                                                    design resources (Sketch and Axure), to help people create their product prototypes beautifully and
                                                    efficiently.</p>
                                                <div class="cci__comment-actions">
                                                    <a href="#" class="btn-like">
                                                        <img src="{{ asset('assets/img/svg/thumbs-up.svg') }}" alt="thumbs-up" class="svg">
                                                        <span class="line-count">0</span>
                                                    </a>
                                                    <a href="#" class="btn-dislike">
                                                        <img src="{{ asset('assets/img/svg/thumbs-down.svg') }}" alt="thumbs-down" class="svg">
                                                        <span class="line-count">0</span>
                                                    </a>
                                                    <a href="#" class="btn-reply">
                                                        <span>Reply</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dm-comment-box media">
                                        <div class="dm-comment-box__author">
                                            <figure>
                                                <img src="{{ asset('assets/img/author/1.jpg') }}" class="bg-opacity-primary d-flex" alt="Admin Autor">
                                            </figure>
                                        </div>
                                        <div class="dm-comment-box__content media-body">
                                            <div class="comment-content-inner cci">
                                                <span class="cci__author-info">David</span>
                                                <p class="cci__comment-text">We supply a series of design principles, practical patterns and high quality
                                                    design resources (Sketch and Axure), to help people create their product prototypes beautifully and
                                                    efficiently.</p>
                                                <div class="cci__comment-actions">
                                                    <a href="#" class="btn-like">
                                                        <img src="{{ asset('assets/img/svg/thumbs-up.svg') }}" alt="thumbs-up" class="svg">
                                                        <span class="line-count">0</span>
                                                    </a>
                                                    <a href="#" class="btn-dislike">
                                                        <img src="{{ asset('assets/img/svg/thumbs-down.svg') }}" alt="thumbs-down" class="svg">
                                                        <span class="line-count">0</span>
                                                    </a>
                                                    <a href="#" class="btn-reply">
                                                        <span>Reply</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card card-default card-md mb-4">
                    <div class="card-header py-20">
                        <h6>Nested comments</h6>
                    </div>
                    <div class="card-body">
                        <div class="comment-list">
                            <div class="comment-list__title">
                                <h6>Reply To</h6>
                            </div>
                            <ul class="comment-list__ul">
                                <li class="mb-20">
                                    <div class="dm-comment-box media">
                                        <div class="dm-comment-box__author">
                                            <figure>
                                                <img src="{{ asset('assets/img/author/1.jpg') }}" class="bg-opacity-primary d-flex" alt="Admin Autor">
                                            </figure>
                                        </div>
                                        <div class="dm-comment-box__content media-body">
                                            <div class="comment-content-inner cci">
                                                <span class="cci__author-info">David</span>
                                                <p class="cci__comment-text">We supply a series of design principles, practical patterns and high quality
                                                    design resources (Sketch and Axure), to help people create their product prototypes beautifully and
                                                    efficiently.</p>
                                                <div class="cci__comment-actions">
                                                    <a href="#" class="btn-reply">
                                                        <span>Reply</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dm-comment-box media">
                                        <div class="dm-comment-box__author">
                                            <figure>
                                                <img src="{{ asset('assets/img/author/1.jpg') }}" class="bg-opacity-primary d-flex" alt="Admin Autor">
                                            </figure>
                                        </div>
                                        <div class="dm-comment-box__content media-body">
                                            <div class="comment-content-inner cci">
                                                <span class="cci__author-info">David</span>
                                                <p class="cci__comment-text">We supply a series of design principles, practical patterns and high quality
                                                    design resources (Sketch and Axure), to help people create their product prototypes beautifully and
                                                    efficiently.</p>
                                                <div class="cci__comment-actions">
                                                    <a href="#" class="btn-reply">
                                                        <span>Reply</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="comment-list__ul">
                                        <li class="mt-4">
                                            <div class="dm-comment-box media">
                                                <div class="dm-comment-box__author">
                                                    <figure>
                                                        <img src="{{ asset('assets/img/author/1.jpg') }}" class="bg-opacity-primary d-flex" alt="Admin Autor">
                                                    </figure>
                                                </div>
                                                <div class="dm-comment-box__content media-body">
                                                    <div class="comment-content-inner cci">
                                                        <span class="cci__author-info">David</span>
                                                        <p class="cci__comment-text">We supply a series of design principles, practical patterns and high quality
                                                            design resources (Sketch and Axure), to help people create their product prototypes beautifully and
                                                            efficiently.</p>
                                                        <div class="cci__comment-actions">
                                                            <a href="#" class="btn-reply">
                                                                <span>Reply</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="comment-list__ul">
                                                <li class="mb-20 mt-4">
                                                    <div class="dm-comment-box media">
                                                        <div class="dm-comment-box__author">
                                                            <figure>
                                                                <img src="{{ asset('assets/img/author/1.jpg') }}" class="bg-opacity-primary d-flex" alt="Admin Autor">
                                                            </figure>
                                                        </div>
                                                        <div class="dm-comment-box__content media-body">
                                                            <div class="comment-content-inner cci">
                                                                <span class="cci__author-info">David</span>
                                                                <p class="cci__comment-text">We supply a series of design principles, practical patterns and high quality
                                                                    design resources (Sketch and Axure), to help people create their product prototypes beautifully and
                                                                    efficiently.</p>
                                                                <div class="cci__comment-actions">
                                                                    <a href="#" class="btn-reply">
                                                                        <span>Reply</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="dm-comment-box media">
                                                        <div class="dm-comment-box__author">
                                                            <figure>
                                                                <img src="{{ asset('assets/img/author/1.jpg') }}" class="bg-opacity-primary d-flex" alt="Admin Autor">
                                                            </figure>
                                                        </div>
                                                        <div class="dm-comment-box__content media-body">
                                                            <div class="comment-content-inner cci">
                                                                <span class="cci__author-info">David</span>
                                                                <p class="cci__comment-text">We supply a series of design principles, practical patterns and high quality
                                                                    design resources (Sketch and Axure), to help people create their product prototypes beautifully and
                                                                    efficiently.</p>
                                                                <div class="cci__comment-actions">
                                                                    <a href="#" class="btn-reply">
                                                                        <span>Reply</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header py-20">
                        <h6>Basic comment</h6>
                    </div>
                    <div class="card-body pb-10">
                        <div class="reply-editor media">
                            <div class="reply-editor__author">
                                <img src="{{ asset('assets/img/author/1.jpg') }}" class="bg-opacity-primary d-flex" alt="Reply Editor Author">
                            </div>
                            <div class="reply-editor__form media-body">
                                <form action="$">
                                    <div class="form-row">
                                        <div class="form-group col-12">
                                            <textarea name="reply-text" class="form-control mb-4"></textarea>
                                            <button class="btn btn-primary btn-lg btn-squared btn-shadow-primary fw-400">Add Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection