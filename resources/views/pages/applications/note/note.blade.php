@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="note-wrapper">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.note-menu-title') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.note-menu-title') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
            <div class="col-lg-12">
                <div class="note-contents">
                    <div class="note-sibebar-wrapper mb-30">

                        <div class="note-sidebar">
                            <div class="card border-0 shadow-none">
                                <div class="card-body px-15 pt-30">
                                    <div class="px-3">
                                        <a href="#" class="btn btn-primary btn-default btn-rounded btn-block" data-bs-toggle="modal" data-bs-target="#noteModal"> <img src="{{ asset('assets/img/svg/plus.svg') }}" alt="plus" class="svg">
                                            Add Note</a>
                                    </div>
                                    <div class="note-types">
                                        <ul class="list-unstyled">
                                            <li><a href="#" class="active"><img class="svg" src="{{ asset('assets/img/svg/edit.svg') }}" alt="edit"> All</a></li>
                                            <li><a href="#"><img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg"> Favorite</a></li>
                                        </ul>
                                    </div>

                                    <div class="note-labels">
                                        <p><img src="{{ asset('assets/img/svg/tag.svg') }}" alt="tag" class="svg"> Labels</p>
                                        <ul class="list-unstyled">
                                            <li><a class="label-personal" href=""><span></span> Personal</a></li>
                                            <li><a class="label-work" href=""><span></span> Work</a></li>
                                            <li><a class="label-social" href=""><span></span> Social</a></li>
                                            <li><a class="label-important" href=""><span></span> Important</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- ends: .col-lg-2 -->
                    <div class="note-grid-wrapper mb-30">
                        <div class="notes-wrapper">
                            <div class="note-grid">
                                <div class="note-single">

                                    <div class="note-card note-important">
                                        <div class="card border-0">
                                            <div class="card-body">
                                                <h4 class="note-title">Landing Page Design <span class="note-status"></span></h4>
                                                <p class="note-excerpt">Lorem Ipsum is simply dummy text of the printing</p>
                                                <div class="note-action">
                                                    <div class="note-action__left">
                                                        <a href="#" class=""><img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg"></a>
                                                        <a href="#"><img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt=""></a>
                                                    </div>
                                                    <div class="note-action__right">
                                                        <div class="label-dropdown dropdown dropdown-hover">
                                                            <a class="btn-link" href="#"><img class="svg" src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical"></a>
                                                            <div class="dropdown-default">
                                                                <a class="nl-personal dropdown-item" href="#">Personal</a>
                                                                <a class="nl-work dropdown-item" href="#">Work</a>
                                                                <a class="nl-social dropdown-item" href="#">Socail</a>
                                                                <a class="nl-important dropdown-item" href="#">Important</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="note-single">

                                    <div class="note-card note-social">
                                        <div class="card border-0">
                                            <div class="card-body">
                                                <h4 class="note-title">Socail Human Being <span class="note-status"></span></h4>
                                                <p class="note-excerpt">Lorem Ipsum is simply dummy text of the printing</p>
                                                <div class="note-action">
                                                    <div class="note-action__left">
                                                        <a href="#" class=""><img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg"></a>
                                                        <a href="#"><img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt=""></a>
                                                    </div>
                                                    <div class="note-action__right">
                                                        <div class="label-dropdown dropdown dropdown-hover">
                                                            <a class="btn-link" href="#"><img class="svg" src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical"></a>
                                                            <div class="dropdown-default">
                                                                <a class="nl-personal dropdown-item" href="#">Personal</a>
                                                                <a class="nl-work dropdown-item" href="#">Work</a>
                                                                <a class="nl-social dropdown-item" href="#">Socail</a>
                                                                <a class="nl-important dropdown-item" href="#">Important</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="note-single">

                                    <div class="note-card note-personal">
                                        <div class="card border-0">
                                            <div class="card-body">
                                                <h4 class="note-title">Landing Page Development <span class="note-status"></span></h4>
                                                <p class="note-excerpt">Lorem Ipsum is simply dummy text of the printing</p>
                                                <div class="note-action">
                                                    <div class="note-action__left">
                                                        <a href="#" class="favorite"><img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg"></a>
                                                        <a href="#"><img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt=""></a>
                                                    </div>
                                                    <div class="note-action__right">
                                                        <div class="label-dropdown dropdown dropdown-hover">
                                                            <a class="btn-link" href="#"><img class="svg" src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical"></a>
                                                            <div class="dropdown-default">
                                                                <a class="nl-personal dropdown-item" href="#">Personal</a>
                                                                <a class="nl-work dropdown-item" href="#">Work</a>
                                                                <a class="nl-social dropdown-item" href="#">Socail</a>
                                                                <a class="nl-important dropdown-item" href="#">Important</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="note-single">

                                    <div class="note-card note-default">
                                        <div class="card border-0">
                                            <div class="card-body">
                                                <h4 class="note-title">Shop Page Design <span class="note-status"></span></h4>
                                                <p class="note-excerpt">Lorem Ipsum is simply dummy text of the printing</p>
                                                <div class="note-action">
                                                    <div class="note-action__left">
                                                        <a href="#" class="favorite"><img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg"></a>
                                                        <a href="#"><img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt=""></a>
                                                    </div>
                                                    <div class="note-action__right">
                                                        <div class="label-dropdown dropdown dropdown-hover">
                                                            <a class="btn-link" href="#"><img class="svg" src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical"></a>
                                                            <div class="dropdown-default">
                                                                <a class="nl-personal dropdown-item" href="#">Personal</a>
                                                                <a class="nl-work dropdown-item" href="#">Work</a>
                                                                <a class="nl-social dropdown-item" href="#">Socail</a>
                                                                <a class="nl-important dropdown-item" href="#">Important</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="note-single">

                                    <div class="note-card note-work">
                                        <div class="card border-0">
                                            <div class="card-body">
                                                <h4 class="note-title">Plugin Development <span class="note-status"></span></h4>
                                                <p class="note-excerpt">Lorem Ipsum is simply dummy text of the printing</p>
                                                <div class="note-action">
                                                    <div class="note-action__left">
                                                        <a href="#" class="favorite"><img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg"></a>
                                                        <a href="#"><img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt=""></a>
                                                    </div>
                                                    <div class="note-action__right">
                                                        <div class="label-dropdown dropdown dropdown-hover">
                                                            <a class="btn-link" href="#"><img class="svg" src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical"></a>
                                                            <div class="dropdown-default">
                                                                <a class="nl-personal dropdown-item" href="#">Personal</a>
                                                                <a class="nl-work dropdown-item" href="#">Work</a>
                                                                <a class="nl-social dropdown-item" href="#">Socail</a>
                                                                <a class="nl-important dropdown-item" href="#">Important</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="note-single">

                                    <div class="note-card note-default">
                                        <div class="card border-0">
                                            <div class="card-body">
                                                <h4 class="note-title">Theme Development <span class="note-status"></span></h4>
                                                <p class="note-excerpt">Lorem Ipsum is simply dummy text of the printing</p>
                                                <div class="note-action">
                                                    <div class="note-action__left">
                                                        <a href="#" class=""><img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg"></a>
                                                        <a href="#"><img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt=""></a>
                                                    </div>
                                                    <div class="note-action__right">
                                                        <div class="label-dropdown dropdown dropdown-hover">
                                                            <a class="btn-link" href="#"><img class="svg" src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical"></a>
                                                            <div class="dropdown-default">
                                                                <a class="nl-personal dropdown-item" href="#">Personal</a>
                                                                <a class="nl-work dropdown-item" href="#">Work</a>
                                                                <a class="nl-social dropdown-item" href="#">Socail</a>
                                                                <a class="nl-important dropdown-item" href="#">Important</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="note-single">

                                    <div class="note-card note-important">
                                        <div class="card border-0">
                                            <div class="card-body">
                                                <h4 class="note-title">Improve Writing Skill <span class="note-status"></span></h4>
                                                <p class="note-excerpt">Lorem Ipsum is simply dummy text of the printing</p>
                                                <div class="note-action">
                                                    <div class="note-action__left">
                                                        <a href="#" class=""><img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg"></a>
                                                        <a href="#"><img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt=""></a>
                                                    </div>
                                                    <div class="note-action__right">
                                                        <div class="label-dropdown dropdown dropdown-hover">
                                                            <a class="btn-link" href="#"><img class="svg" src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical"></a>
                                                            <div class="dropdown-default">
                                                                <a class="nl-personal dropdown-item" href="#">Personal</a>
                                                                <a class="nl-work dropdown-item" href="#">Work</a>
                                                                <a class="nl-social dropdown-item" href="#">Socail</a>
                                                                <a class="nl-important dropdown-item" href="#">Important</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="note-single">

                                    <div class="note-card note-social">
                                        <div class="card border-0">
                                            <div class="card-body">
                                                <h4 class="note-title">Keep Social Distance <span class="note-status"></span></h4>
                                                <p class="note-excerpt">Lorem Ipsum is simply dummy text of the printing</p>
                                                <div class="note-action">
                                                    <div class="note-action__left">
                                                        <a href="#" class=""><img src="{{ asset('assets/img/svg/star.svg') }}" alt="star" class="svg"></a>
                                                        <a href="#"><img class="svg" src="{{ asset('assets/img/svg/trash-2.svg') }}" alt=""></a>
                                                    </div>
                                                    <div class="note-action__right">
                                                        <div class="label-dropdown dropdown dropdown-hover">
                                                            <a class="btn-link" href="#"><img class="svg" src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical"></a>
                                                            <div class="dropdown-default">
                                                                <a class="nl-personal dropdown-item" href="#">Personal</a>
                                                                <a class="nl-work dropdown-item" href="#">Work</a>
                                                                <a class="nl-social dropdown-item" href="#">Socail</a>
                                                                <a class="nl-important dropdown-item" href="#">Important</a>
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
                    </div><!-- ends: .col-lg-10 -->
                </div>
            </div><!-- ends: .col-lg-12 -->
        </div>
    </div>

    <div class="modal fade noteModal" id="noteModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body pb-0">
                    <button type="button" class="close bg-transparent" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <form action="/">
                        <div class="form-group mb-25">
                            <label class="mb-2" for="text">Title</label>
                            <input type="text" class="form-control" placeholder="Note Title" id="text">
                        </div>
                        <div class="form-group mb-25">
                            <label class="mb-2" for="textarea">Description</label>
                            <textarea id="textarea" class="form-control" placeholder="Note Description"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="mb-2" for="select-search">Note Label</label>
                            <select class="form-control" id="select-search">
                                <option>Social</option>
                                <option>Work</option>
                                <option>Personal</option>
                                <option>Important</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer note-submit-btn d-flex justify-content-end flex-wrap border-top-0 m-n1 px-30 pb-25">
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection