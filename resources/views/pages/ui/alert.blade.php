@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-alert') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>UI elements</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-alert') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header  py-20">
                                <h6>Basic</h6>
                            </div>
                            <div class="card-body">


                                <div class=" alert alert-success " role="alert">


                                    <div class="alert-content">


                                        <p>Success Text</p>


                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>
                    <div class="col-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header  py-20">
                                <h6>Closable</h6>
                            </div>
                            <div class="card-body">


                                <div class=" alert alert-warning  alert-dismissible fade show " role="alert">


                                    <div class="alert-content">


                                        <p>Warning Text Warning Text Warning TextW arning Text Warning Text Warning TextWarning Text</p>


                                        <button type="button" class="btn-close text-capitalize" data-bs-dismiss="alert" aria-label="Close">

                                            <img src="{{ asset('assets/img/svg/x.svg') }}" alt="x" class="svg" aria-hidden="true">

                                        </button>

                                    </div>
                                </div>




                                <div class="alert-big alert alert-danger  alert-dismissible fade show " role="alert">


                                    <div class="alert-content">

                                        <h6 class='alert-heading'>Error Text</h6>


                                        <p>Warning Text Warning Text Warning TextW arning Text Warning Text Warning TextWarning Text</p>


                                        <button type="button" class="btn-close text-capitalize" data-bs-dismiss="alert" aria-label="Close">

                                            <img src="{{ asset('assets/img/svg/x.svg') }}" alt="x" class="svg" aria-hidden="true">

                                        </button>

                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>
                    <div class="col-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header  py-20">
                                <h6>Icon</h6>
                            </div>
                            <div class="card-body">


                                <div class="alert-icon-area alert alert-success " role="alert">


                                    <div class="alert-icon">
                                        <img src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                    </div>

                                    <div class="alert-content">


                                        <p>Success Tips</p>


                                    </div>
                                </div>




                                <div class="alert-icon-area alert alert-info " role="alert">


                                    <div class="alert-icon">
                                        <img src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                    </div>

                                    <div class="alert-content">


                                        <p>Informational Notes</p>


                                    </div>
                                </div>




                                <div class="alert-icon-area alert alert-warning " role="alert">


                                    <div class="alert-icon">
                                        <img src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                    </div>

                                    <div class="alert-content">


                                        <p>Warning</p>


                                    </div>
                                </div>




                                <div class="alert-icon-area alert alert-danger " role="alert">


                                    <div class="alert-icon">
                                        <img src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                    </div>

                                    <div class="alert-content">


                                        <p>Error</p>


                                    </div>
                                </div>





                                <div class="alert-icon-big alert alert-success " role="alert">


                                    <div class="alert-icon">
                                        <img src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                    </div>

                                    <div class="alert-content">

                                        <h6 class='alert-heading'>Success Tips</h6>


                                        <p>Detailed description and advice about successful copywriting.</p>


                                    </div>
                                </div>




                                <div class="alert-icon-big alert alert-info " role="alert">


                                    <div class="alert-icon">
                                        <img src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                    </div>

                                    <div class="alert-content">

                                        <h6 class='alert-heading'>Informational Notes</h6>


                                        <p>Additional description and information about copywriting.</p>


                                    </div>
                                </div>




                                <div class="alert-icon-big alert alert-warning " role="alert">


                                    <div class="alert-icon">
                                        <img src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                    </div>

                                    <div class="alert-content">

                                        <h6 class='alert-heading'>Warning</h6>


                                        <p>This is a warning notice about copywriting.</p>


                                    </div>
                                </div>




                                <div class="alert-icon-big alert alert-danger " role="alert">


                                    <div class="alert-icon">
                                        <img src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                    </div>

                                    <div class="alert-content">

                                        <h6 class='alert-heading'>Error</h6>


                                        <p>This is an error message about copywriting.</p>


                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>
                </div>
            </div>
            <!-- ends: .col-lg-6 -->
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header  py-20">
                                <h6>More Types</h6>
                            </div>
                            <div class="card-body">


                                <div class=" alert alert-success " role="alert">


                                    <div class="alert-content">


                                        <p>Success Text</p>


                                    </div>
                                </div>




                                <div class=" alert alert-info " role="alert">


                                    <div class="alert-content">


                                        <p>Info Text</p>


                                    </div>
                                </div>




                                <div class=" alert alert-warning " role="alert">


                                    <div class="alert-content">


                                        <p>Warning Text</p>


                                    </div>
                                </div>




                                <div class=" alert alert-danger " role="alert">


                                    <div class="alert-content">


                                        <p>Error Text</p>


                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>

                    <div class="col-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header  py-20">
                                <h6>Description</h6>
                            </div>
                            <div class="card-body">



                                <div class="alert-big alert alert-success " role="alert">


                                    <div class="alert-content">

                                        <h6 class='alert-heading'>Success Text</h6>


                                        <p>Detailed description and advice about successful copywriting.</p>


                                    </div>
                                </div>




                                <div class="alert-big alert alert-info " role="alert">


                                    <div class="alert-content">

                                        <h6 class='alert-heading'>Info Text</h6>


                                        <p>Additional description and information about copywriting.</p>


                                    </div>
                                </div>




                                <div class="alert-big alert alert-warning " role="alert">


                                    <div class="alert-content">

                                        <h6 class='alert-heading'>Warning Text</h6>


                                        <p>This is a warning notice about copywriting.</p>


                                    </div>
                                </div>




                                <div class="alert-big alert alert-danger " role="alert">


                                    <div class="alert-content">

                                        <h6 class='alert-heading'>Error Text</h6>


                                        <p>This is an error message about copywriting.</p>


                                    </div>
                                </div>



                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>

                    <div class="col-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header  py-20">
                                <h6>Customized Close Text</h6>
                            </div>
                            <div class="card-body">



                                <div class="text-capitalize alert alert-info  alert-dismissible fade show " role="alert">


                                    <div class="alert-content">


                                        <p>Info Text</p>


                                        <button type="button" class="btn-close text-capitalize" data-bs-dismiss="alert" aria-label="Close">

                                            <span aria-hidden="true">close now</span>

                                        </button>

                                    </div>
                                </div>



                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>

                    <div class="col-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header  py-20">
                                <h6>Smoothly Unmount</h6>
                            </div>
                            <div class="card-body">



                                <div class=" alert alert-success  alert-dismissible fade show " role="alert">


                                    <div class="alert-content">


                                        <p>Alert Message Text</p>


                                        <button type="button" class="btn-close text-capitalize" data-bs-dismiss="alert" aria-label="Close">

                                            <img src="{{ asset('assets/img/svg/x.svg') }}" alt="x" class="svg" aria-hidden="true">

                                        </button>

                                    </div>
                                </div>



                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>
                </div>
            </div>
            <!-- ends: .col-lg-6 -->
        </div>
    </div>
</div>
@endsection