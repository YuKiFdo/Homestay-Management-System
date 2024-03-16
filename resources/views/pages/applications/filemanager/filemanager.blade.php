@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="fileM-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.filemanager-menu-title') }}</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.filemanager-menu-title') }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="fileM-contents">
                        <div class="row">
                            <div class=" col-20 col-lg-3 col-sm-4">
                                <div class="fileM-sidebar-wrapper mb-30">
                                    <div class="fileM-sidebar">
                                        <div class="card border-0 shadow-none">
                                            <div class="card-body px-15 pt-30">
                                                <div class="px-xl-3">
                                                    <div class="fileM-action__right">
                                                        <div class="dropdown dropleft content-center d-flex">
                                                            <a href="#" class="btn btn-primary btn-default btn-rounded content-center" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img class="svg" src="{{ asset('assets/img/svg/plus.svg') }}" alt="">
                                                                Add Files</a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop1"><img src="{{ asset('assets/img/svg/folder.svg') }}" alt="folder" class="svg">Create folder</a>
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop2"><img src="{{ asset('assets/img/svg/folder.svg') }}" alt="folder" class="svg">File Upload </a>
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop3"><img src="{{ asset('assets/img/svg/folder.svg') }}" alt="folder" class="svg">Folder Upload</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade fileM-Modal-overlay" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop1Label" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h6 class="modal-title fw-500" id="staticBackdrop1Label">Create File</h6>
                                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                                    <img class="svg" src="{{ asset('assets/img/svg/x.svg') }}" alt="x">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form>
                                                                    <div class="form-group mb-20">
                                                                        <input type="text" class="form-control" placeholder="File name">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer m-n1">
                                                                <button type="button" class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light" data-bs-dismiss="modal">Cancel</button>
                                                                <button type="button" class="btn btn-primary btn-default btn-squared text-capitalize">Create</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade fileM-Modal-overlay" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop2Label" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h6 class="modal-title fw-500" id="staticBackdrop2Label">File Upload File</h6>
                                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                                    <img class="svg" src="{{ asset('assets/img/svg/x.svg') }}" alt="x">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form>
                                                                    <div class="form-group mb-20">
                                                                        <input type="text" class="form-control" placeholder="File name">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer m-n1">
                                                                <button type="button" class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light" data-bs-dismiss="modal">Cancel</button>
                                                                <button type="button" class="btn btn-primary btn-default btn-squared text-capitalize">Create</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade fileM-Modal-overlay" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop3Label" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h6 class="modal-title fw-500" id="staticBackdrop3Label">Folder Upload</h6>
                                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                                    <img class="svg" src="{{ asset('assets/img/svg/x.svg') }}" alt="x">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form>
                                                                    <div class="form-group mb-20">
                                                                        <input type="text" class="form-control" placeholder="Folder name">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer m-n1">
                                                                <button type="button" class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light" data-bs-dismiss="modal">Cancel</button>
                                                                <button type="button" class="btn btn-primary btn-default btn-squared text-capitalize">Create</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fileM-types">
                                                    <div class="sidebar__menu-group">
                                                        <ul class="sidebar_nav">
                                                            <li class="menu-title">
                                                                <span>Files</span>
                                                            </li>
                                                            <li class="has-child">
                                                                <a href="#" class="">
                                                                    <img src="{{ asset('assets/img/svg/file.svg') }}" alt="file" class="svg nav-icon">
                                                                    <span class="menu-text">My files</span>
                                                                    <span class="toggle-icon"></span>
                                                                </a>
                                                                <ul>
                                                                    <li class="has-child">
                                                                        <a href="#" class="">
                                                                            <img class="svg nav-icon" src="{{ asset('assets/img/svg/folder.svg') }}" alt="folder">
                                                                            <span class="menu-text">My files</span>
                                                                            <span class="toggle-icon"></span>
                                                                        </a>
                                                                        <ul class="nav flex-column mb-3" role="tablist">
                                                                            <li>
                                                                                <a class=" active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                                                                                    <img class="svg nav-icon" src="{{ asset('assets/img/svg/folder.svg') }}" alt="folder">
                                                                                    Prototypes
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><img class="svg nav-icon" src="{{ asset('assets/img/svg/folder.svg') }}" alt="folder">Images</a>
                                                                            </li>
                                                                            <li>
                                                                                <a id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><img class="svg nav-icon" src="{{ asset('assets/img/svg/folder.svg') }}" alt="folder">Illustrations</a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <a class="" href="#">
                                                                            <img class="svg nav-icon" src="{{ asset('assets/img/svg/folder.svg') }}" alt="folder">
                                                                            Prototypes
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="" href="#"><img class="svg nav-icon" src="{{ asset('assets/img/svg/folder.svg') }}" alt="folder">Images</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="" href="#"><img class="svg nav-icon" src="{{ asset('assets/img/svg/folder.svg') }}" alt="folder">Illustrations</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="">
                                                                <img src="{{ asset('assets/img/svg/file.svg') }}" alt="file" class="svg nav-icon">
                                                                    <span class="menu-text">My Computer</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="fileM-progress">
                                                    <div class="user-group-progress-bar">
                                                        <p>Storage</p>
                                                        <div class="progress-wrap d-flex align-items-center mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-success" role="progressbar" style="width:84%;" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <span class="progress-percentage">83%</span>
                                                        </div>
                                                        <span class="">9.5 GB of 15 GB used</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-79 col-lg-9 col-sm-8">
                                <div class="fileM-grid-wrapper mb-30 ">
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                            <div class="fileM-wrapper">
                                                <div class="fileM-top-search">
                                                    <form action="/" class="d-flex align-items-center">
                                                        <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                                                        <input class="form-control px-10 border-0 box-shadow-none" type="search" placeholder="Search by Name" aria-label="Search">
                                                    </form>
                                                    <div class="project-icon-selected">
                                                        <div class="listing-social-link pb-lg-0 pb-xs-2">
                                                            <div class="icon-list-social d-flex">
                                                                <a class="icon-list-social__link rounded-circle icon-list-social__style justify-content-center ms-xl-20 me-20  active" href="{{ route('filemanager',app()->getLocale()) }}">
                                                                    <img src="{{ asset('assets/img/svg/grid.svg') }}" alt="grid" class="svg"></a>
                                                                <a class="icon-list-social__link rounded-circle icon-list-social__style justify-content-center " href="{{ route('filemanager_list',app()->getLocale()) }}">
                                                                    <img src="{{ asset('assets/img/svg/list.svg') }}" alt="list" class="svg"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="fileM-wrapper__title">Quick Access</h6>
                                                <div class="row">
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="fileM-single mb-25">
                                                            <div class="fileM-card ">
                                                                <div class="card border-0">
                                                                    <div class="card-body pb-40 pt-45">
                                                                        <div class="fileM-img">
                                                                            <img class="wh-50" src="{{ asset('assets/img/zip.png') }}" alt="">
                                                                        </div>
                                                                        <p class="fileM-excerpt">Main-admin-design.zip </p>
                                                                        <div class="fileM-action">
                                                                            <div class="fileM-action__right ">
                                                                                <div class="dropdown dropleft position-absolute">
                                                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                                                    </button>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="#">
                                                                                            <img src="{{ asset('assets/img/svg/download.svg') }}" alt="download" class="svg">
                                                                                            Download
                                                                                        </a>
                                                                                        <a class="dropdown-item" href="#">
                                                                                            <img src="{{ asset('assets/img/svg/link-2.svg') }}" alt="link-2" class="svg">
                                                                                            Copy
                                                                                        </a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="fileM-single mb-25">
                                                            <div class="fileM-card ">
                                                                <div class="card border-0">
                                                                    <div class="card-body pb-40 pt-45">
                                                                        <div class="fileM-img">
                                                                            <img class="wh-50" src="{{ asset('assets/img/pdf.png') }}" alt="">
                                                                        </div>
                                                                        <p class="fileM-excerpt">Product-guidelines.pdf </p>
                                                                        <div class="fileM-action">
                                                                            <div class="fileM-action__right ">
                                                                                <div class="dropdown dropleft position-absolute">
                                                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                                                    </button>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/download.svg') }}" alt="download" class="svg">Download</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/link-2.svg') }}" alt="link-2" class="svg">Copy</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="fileM-single mb-25">
                                                            <div class="fileM-card ">
                                                                <div class="card border-0">
                                                                    <div class="card-body pb-40 pt-45">
                                                                        <div class="fileM-img">
                                                                            <img class="wh-50" src="{{ asset('assets/img/psd.png') }}" alt="">
                                                                        </div>
                                                                        <p class="fileM-excerpt">admin-wireframe.psd </p>
                                                                        <div class="fileM-action">
                                                                            <div class="fileM-action__right ">
                                                                                <div class="dropdown dropleft position-absolute">
                                                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                                                    </button>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/download.svg') }}" alt="download" class="svg">Download</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/link-2.svg') }}" alt="link-2" class="svg">Copy</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="fileM-single mb-25">
                                                            <div class="fileM-card ">
                                                                <div class="card border-0">
                                                                    <div class="card-body pb-40 pt-45">
                                                                        <div class="fileM-img">
                                                                            <img class="wh-50" src="{{ asset('assets/img/zip.png') }}" alt="">
                                                                        </div>
                                                                        <p class="fileM-excerpt">Main-admin-design.zip </p>
                                                                        <div class="fileM-action">
                                                                            <div class="fileM-action__right ">
                                                                                <div class="dropdown dropleft position-absolute">
                                                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                                                    </button>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/download.svg') }}" alt="download" class="svg">Download</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/link-2.svg') }}" alt="link-2" class="svg">Copy</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">Delete</a>
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
                                            <div class="fileM-wrapper">
                                                <h6 class="fileM-wrapper__title">Recent files</h6>
                                                <div class="row">
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="fileM-single mb-25">
                                                            <div class="fileM-card ">
                                                                <div class="card border-0">
                                                                    <div class="card-body pb-40 pt-45">
                                                                        <div class="fileM-img">
                                                                            <img class="wh-50" src="{{ asset('assets/img/zip.png') }}" alt="">
                                                                        </div>
                                                                        <p class="fileM-excerpt">Main-admin-design.zip </p>
                                                                        <div class="fileM-action">
                                                                            <div class="fileM-action__right ">
                                                                                <div class="dropdown dropleft position-absolute">
                                                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                                                    </button>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/download.svg') }}" alt="download" class="svg">Download</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/link-2.svg') }}" alt="link-2" class="svg">Copy</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="fileM-single mb-25">
                                                            <div class="fileM-card ">
                                                                <div class="card border-0">
                                                                    <div class="card-body pb-40 pt-45">
                                                                        <div class="fileM-img">
                                                                            <img class="wh-50" src="{{ asset('assets/img/pdf.png') }}" alt="">
                                                                        </div>
                                                                        <p class="fileM-excerpt">Product-guidelines.pdf </p>
                                                                        <div class="fileM-action">
                                                                            <div class="fileM-action__right ">
                                                                                <div class="dropdown dropleft position-absolute">
                                                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                                                    </button>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/download.svg') }}" alt="download" class="svg">Download</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/link-2.svg') }}" alt="link-2" class="svg">Copy</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="fileM-single mb-25">
                                                            <div class="fileM-card ">
                                                                <div class="card border-0">
                                                                    <div class="card-body pb-40 pt-45">
                                                                        <div class="fileM-img">
                                                                            <img class="wh-50" src="{{ asset('assets/img/psd.png') }}" alt="">
                                                                        </div>
                                                                        <p class="fileM-excerpt">admin-wireframe.psd </p>
                                                                        <div class="fileM-action">
                                                                            <div class="fileM-action__right ">
                                                                                <div class="dropdown dropleft position-absolute">
                                                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                                                    </button>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/download.svg') }}" alt="download" class="svg">Download</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/link-2.svg') }}" alt="link-2" class="svg">Copy</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="fileM-single mb-25">
                                                            <div class="fileM-card ">
                                                                <div class="card border-0">
                                                                    <div class="card-body pb-40 pt-45">
                                                                        <div class="fileM-img">
                                                                            <img class="wh-50" src="{{ asset('assets/img/zip.png') }}" alt="">
                                                                        </div>
                                                                        <p class="fileM-excerpt">Main-admin-design.zip </p>
                                                                        <div class="fileM-action">
                                                                            <div class="fileM-action__right ">
                                                                                <div class="dropdown dropleft position-absolute">
                                                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                                                    </button>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/download.svg') }}" alt="download" class="svg">Download</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/link-2.svg') }}" alt="link-2" class="svg">Copy</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="fileM-single mb-25">
                                                            <div class="fileM-card ">
                                                                <div class="card border-0">
                                                                    <div class="card-body pb-40 pt-45">
                                                                        <div class="fileM-img">
                                                                            <img class="wh-50" src="{{ asset('assets/img/pdf.png') }}" alt="">
                                                                        </div>
                                                                        <p class="fileM-excerpt">Product-guidelines.pdf </p>
                                                                        <div class="fileM-action">
                                                                            <div class="fileM-action__right ">
                                                                                <div class="dropdown dropleft position-absolute">
                                                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                                                    </button>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/download.svg') }}" alt="download" class="svg">Download</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/link-2.svg') }}" alt="link-2" class="svg">Copy</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="fileM-single mb-25">
                                                            <div class="fileM-card ">
                                                                <div class="card border-0">
                                                                    <div class="card-body pb-40 pt-45">
                                                                        <div class="fileM-img">
                                                                            <img class="wh-50" src="{{ asset('assets/img/psd.png') }}" alt="">
                                                                        </div>
                                                                        <p class="fileM-excerpt">admin-wireframe.psd </p>
                                                                        <div class="fileM-action">
                                                                            <div class="fileM-action__right ">
                                                                                <div class="dropdown dropleft position-absolute">
                                                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                                                    </button>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/download.svg') }}" alt="download" class="svg">Download</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/link-2.svg') }}" alt="link-2" class="svg">Copy</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="fileM-single mb-25">
                                                            <div class="fileM-card ">
                                                                <div class="card border-0">
                                                                    <div class="card-body pb-40 pt-45">
                                                                        <div class="fileM-img">
                                                                            <img class="wh-50" src="{{ asset('assets/img/zip.png') }}" alt="">
                                                                        </div>
                                                                        <p class="fileM-excerpt">Main-admin-design.zip </p>
                                                                        <div class="fileM-action">
                                                                            <div class="fileM-action__right ">
                                                                                <div class="dropdown dropleft position-absolute">
                                                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                                                    </button>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/download.svg') }}" alt="download" class="svg">Download</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/link-2.svg') }}" alt="link-2" class="svg">Copy</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="fileM-single mb-25">
                                                            <div class="fileM-card ">
                                                                <div class="card border-0">
                                                                    <div class="card-body pb-40 pt-45">
                                                                        <div class="fileM-img">
                                                                            <img class="wh-50" src="{{ asset('assets/img/pdf.png') }}" alt="">
                                                                        </div>
                                                                        <p class="fileM-excerpt">Product-guidelines.pdf </p>
                                                                        <div class="fileM-action">
                                                                            <div class="fileM-action__right ">
                                                                                <div class="dropdown dropleft position-absolute">
                                                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                                                    </button>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/download.svg') }}" alt="download" class="svg">Download</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/link-2.svg') }}" alt="link-2" class="svg">Copy</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">Delete</a>
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
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <div class="fileM-wrapper">
                                                <div class="fileM-top-search">
                                                    <form action="/" class="d-flex align-items-center">
                                                        <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                                                        <input class="form-control px-10 border-0 box-shadow-none" type="search" placeholder="Search by Name" aria-label="Search">
                                                    </form>
                                                    <div class="project-icon-selected">
                                                        <div class="listing-social-link pb-lg-0 pb-xs-2">
                                                            <div class="icon-list-social d-flex">
                                                                <a class="icon-list-social__link rounded-circle icon-list-social__style justify-content-center ms-xl-20 me-20  active" href="#">
                                                                    <img src="{{ asset('assets/img/svg/grid.svg') }}" alt="grid" class="svg"></a>
                                                                <a class="icon-list-social__link rounded-circle icon-list-social__style justify-content-center " href="file-manager-list.html">
                                                                    <img src="{{ asset('assets/img/svg/list.svg') }}" alt="list" class="svg"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="fileM-wrapper__title">Images</h6>
                                                <div class="row">
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="fileM-single mb-25">
                                                            <div class="fileM-card ">
                                                                <div class="card border-0">
                                                                    <div class="card-body pb-40 pt-45">
                                                                        <div class="fileM-img">
                                                                            <img class="wh-50" src="img/zip.png" alt="">
                                                                        </div>
                                                                        <p class="fileM-excerpt">Main-admin-design.zip </p>
                                                                        <div class="fileM-action">
                                                                            <div class="fileM-action__right ">
                                                                                <div class="dropdown dropleft position-absolute">
                                                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                                                    </button>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/download.svg') }}" alt="download" class="svg">Download</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/link-2.svg') }}" alt="link-2" class="svg">Copy</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="fileM-single mb-25">
                                                            <div class="fileM-card ">
                                                                <div class="card border-0">
                                                                    <div class="card-body pb-40 pt-45">
                                                                        <div class="fileM-img">
                                                                            <img class="wh-50" src="{{ asset('assets/img/pdf.png') }}" alt="">
                                                                        </div>
                                                                        <p class="fileM-excerpt">Product-guidelines.pdf </p>
                                                                        <div class="fileM-action">
                                                                            <div class="fileM-action__right ">
                                                                                <div class="dropdown dropleft position-absolute">
                                                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                                                    </button>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/download.svg') }}" alt="download" class="svg">Download</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/link-2.svg') }}" alt="link-2" class="svg">Copy</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="fileM-single mb-25">
                                                            <div class="fileM-card ">
                                                                <div class="card border-0">
                                                                    <div class="card-body pb-40 pt-45">
                                                                        <div class="fileM-img">
                                                                            <img class="wh-50" src="{{ asset('assets/img/psd.png') }}" alt="">
                                                                        </div>
                                                                        <p class="fileM-excerpt">admin-wireframe.psd </p>
                                                                        <div class="fileM-action">
                                                                            <div class="fileM-action__right ">
                                                                                <div class="dropdown dropleft position-absolute">
                                                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                                                    </button>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/download.svg') }}" alt="download" class="svg">Download</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/link-2.svg') }}" alt="link-2" class="svg">Copy</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="fileM-single mb-25">
                                                            <div class="fileM-card ">
                                                                <div class="card border-0">
                                                                    <div class="card-body pb-40 pt-45">
                                                                        <div class="fileM-img">
                                                                            <img class="wh-50" src="{{ asset('assets/img/zip.png') }}" alt="">
                                                                        </div>
                                                                        <p class="fileM-excerpt">Main-admin-design.zip </p>
                                                                        <div class="fileM-action">
                                                                            <div class="fileM-action__right ">
                                                                                <div class="dropdown dropleft position-absolute">
                                                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                                                    </button>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/download.svg') }}" alt="download" class="svg">Download</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/link-2.svg') }}" alt="link-2" class="svg">Copy</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">Delete</a>
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
                                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                            <div class="fileM-wrapper">
                                                <div class="fileM-top-search">
                                                    <form action="/" class="d-flex align-items-center">
                                                        <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                                                        <input class="form-control px-10 border-0 box-shadow-none" type="search" placeholder="Search by Name" aria-label="Search">
                                                    </form>
                                                    <div class="project-icon-selected">
                                                        <div class="listing-social-link pb-lg-0 pb-xs-2">
                                                            <div class="icon-list-social d-flex">
                                                                <a class="icon-list-social__link rounded-circle icon-list-social__style justify-content-center ms-xl-20 me-20  active" href="#">
                                                                    <img src="{{ asset('assets/img/svg/grid.svg') }}" alt="grid" class="svg"></a>
                                                                <a class="icon-list-social__link rounded-circle icon-list-social__style justify-content-center " href="file-manager-list.html">
                                                                    <img src="{{ asset('assets/img/svg/list.svg') }}" alt="list" class="svg"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="fileM-wrapper__title">Illustrations</h6>
                                                <div class="row">
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="fileM-single mb-25">
                                                            <div class="fileM-card ">
                                                                <div class="card border-0">
                                                                    <div class="card-body pb-40 pt-45">
                                                                        <div class="fileM-img">
                                                                            <img class="wh-50" src="{{ asset('assets/img/zip.png') }}" alt="">
                                                                        </div>
                                                                        <p class="fileM-excerpt">Main-admin-design.zip </p>
                                                                        <div class="fileM-action">
                                                                            <div class="fileM-action__right ">
                                                                                <div class="dropdown dropleft position-absolute">
                                                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                                                    </button>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/download.svg') }}" alt="download" class="svg">Download</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/link-2.svg') }}" alt="link-2" class="svg">Copy</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="fileM-single mb-25">
                                                            <div class="fileM-card ">
                                                                <div class="card border-0">
                                                                    <div class="card-body pb-40 pt-45">
                                                                        <div class="fileM-img">
                                                                            <img class="wh-50" src="{{ asset('assets/img/pdf.png') }}" alt="">
                                                                        </div>
                                                                        <p class="fileM-excerpt">Product-guidelines.pdf </p>
                                                                        <div class="fileM-action">
                                                                            <div class="fileM-action__right ">
                                                                                <div class="dropdown dropleft position-absolute">
                                                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                                                    </button>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/download.svg') }}" alt="download" class="svg">Download</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/link-2.svg') }}" alt="link-2" class="svg">Copy</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="fileM-single mb-25">
                                                            <div class="fileM-card ">
                                                                <div class="card border-0">
                                                                    <div class="card-body pb-40 pt-45">
                                                                        <div class="fileM-img">
                                                                            <img class="wh-50" src="{{ asset('assets/img/psd.png') }}" alt="">
                                                                        </div>
                                                                        <p class="fileM-excerpt">admin-wireframe.psd </p>
                                                                        <div class="fileM-action">
                                                                            <div class="fileM-action__right ">
                                                                                <div class="dropdown dropleft position-absolute">
                                                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                                                    </button>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/download.svg') }}" alt="download" class="svg">Download</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/link-2.svg') }}" alt="link-2" class="svg">Copy</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="fileM-single mb-25">
                                                            <div class="fileM-card ">
                                                                <div class="card border-0">
                                                                    <div class="card-body pb-40 pt-45">
                                                                        <div class="fileM-img">
                                                                            <img class="wh-50" src="{{ asset('assets/img/zip.png') }}" alt="">
                                                                        </div>
                                                                        <p class="fileM-excerpt">Main-admin-design.zip </p>
                                                                        <div class="fileM-action">
                                                                            <div class="fileM-action__right ">
                                                                                <div class="dropdown dropleft position-absolute">
                                                                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg">
                                                                                    </button>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/download.svg') }}" alt="download" class="svg">Download</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/link-2.svg') }}" alt="link-2" class="svg">Copy</a>
                                                                                        <a class="dropdown-item" href="#"><img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">Delete</a>
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
<div class="modal fade" id="noteModal" tabindex="-1" aria-labelledby="noteModalLabal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body pb-0">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <form action="/">
                    <div class="form-group mb-25">
                        <label for="text">Title</label>
                        <input type="text" class="form-control" placeholder="Note Title" id="text">
                    </div>
                    <div class="form-group mb-25">
                        <label for="textarea">Description</label>
                        <textarea id="textarea" class="form-control" placeholder="Note Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="n-labels">Note Label</label>
                        <select class="form-control" id="n-labels">
                            <option>Social</option>
                            <option>Work</option>
                            <option>Personal</option>
                            <option>Important</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer note-submit-btn d-flex justify-content-end flex-wrap border-top-0 m-n1 px-30 pb-25">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
@endsection