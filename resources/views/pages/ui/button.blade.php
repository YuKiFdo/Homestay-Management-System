@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-button') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-button') }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Basic</h6>
                            </div>
                            <div class="card-body">
                                <div class="dm-button-list d-flex flex-wrap">


                                    <button class="btn btn-primary btn-default btn-squared ">Primary
                                    </button>







                                    <button class="btn btn-secondary btn-default btn-squared ">Secondary
                                    </button>







                                    <button class="btn btn-success btn-default btn-squared ">Success
                                    </button>







                                    <button class="btn btn-info btn-default btn-squared ">Info
                                    </button>







                                    <button class="btn btn-warning btn-default btn-squared ">Wraning
                                    </button>







                                    <button class="btn btn-danger btn-default btn-squared ">Danger
                                    </button>







                                    <button class="btn btn-dark btn-default btn-squared ">Dark
                                    </button>







                                    <button class="btn btn-light btn-default btn-squared ">Light
                                    </button>







                                    <button class="btn btn-white btn-default btn-squared ">White
                                    </button>





                                </div>
                                <!-- ends: .dm-button-list" -->
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Light Color</h6>
                            </div>
                            <div class="card-body">
                                <div class="dm-button-list d-flex flex-wrap">


                                    <button
                                        class="btn btn-primary btn-default btn-squared btn-transparent-primary ">Primary
                                    </button>







                                    <button
                                        class="btn btn-secondary btn-default btn-squared btn-transparent-secondary ">Secondary
                                    </button>







                                    <button
                                        class="btn btn-success btn-default btn-squared btn-transparent-success ">Success
                                    </button>







                                    <button class="btn btn-info btn-default btn-squared btn-transparent-info ">Info
                                    </button>







                                    <button
                                        class="btn btn-warning btn-default btn-squared btn-transparent-warning ">Wraning
                                    </button>







                                    <button
                                        class="btn btn-danger btn-default btn-squared btn-transparent-danger ">Danger
                                    </button>







                                    <button class="btn btn-dark btn-default btn-squared btn-transparent-dark ">Dark
                                    </button>







                                    <button class="btn btn-light btn-default btn-squared btn-transparent-light ">Light
                                    </button>





                                </div>
                                <!-- ends: .dm-button-list" -->
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Rounded</h6>
                            </div>
                            <div class="card-body">
                                <div class="dm-button-list d-flex flex-wrap">


                                    <button class="btn btn-primary btn-default btn-rounded ">Primary
                                    </button>







                                    <button class="btn btn-secondary btn-default btn-rounded ">Secondary
                                    </button>







                                    <button class="btn btn-success btn-default btn-rounded ">Success
                                    </button>







                                    <button class="btn btn-info btn-default btn-rounded ">Info
                                    </button>







                                    <button class="btn btn-warning btn-default btn-rounded ">Wraning
                                    </button>







                                    <button class="btn btn-danger btn-default btn-rounded ">Danger
                                    </button>







                                    <button class="btn btn-dark btn-default btn-rounded ">Dark
                                    </button>







                                    <button class="btn btn-light btn-default btn-rounded ">Light
                                    </button>







                                    <button class="btn btn-white btn-default btn-rounded ">White
                                    </button>





                                </div>
                                <!-- ends: .dm-button-list" -->
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Icon</h6>
                            </div>
                            <div class="card-body">
                                <div class="dm-button-list d-flex flex-wrap">


                                    <button class="btn btn-primary btn-default btn-squared "><img
                                            src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                        Default
                                    </button>







                                    <button
                                        class="btn btn-primary btn-default btn-squared btn-transparent-primary "><img
                                            src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                        Default
                                    </button>








                                    <button class="btn btn-default btn-squared color-primary btn-outline-primary "><img
                                            src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                        Default
                                    </button>







                                    <button class="btn btn-default btn-squared color-light btn-outline-light "><img
                                            src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                        Default
                                    </button>






                                    <button class="btn btn-light btn-default btn-squared "><img
                                            src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                        Default
                                    </button>







                                    <button class="btn btn-white btn-default btn-squared btn-shadow-white "><img
                                            src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                        Default
                                    </button>







                                    <button class="btn btn-icon btn-primary btn-squared">
                                        <img src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                    </button>






                                    <button class="btn btn-icon btn-squared color-primary btn-outline-primary ">
                                        <img src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                    </button>




                                    <button class="btn btn-icon btn-light btn-squared">
                                        <img src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                    </button>






                                    <button class="btn btn-icon btn-squared color-light btn-outline-light ">
                                        <img src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                    </button>


                                </div>
                                <!-- ends: .dm-button-list" -->
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Size</h6>
                            </div>
                            <div class="card-body">
                                <div class="dm-button-list d-flex flex-wrap align-items-end">


                                    <button class="btn btn-primary btn-lg btn-squared ">Large Buton
                                    </button>







                                    <button class="btn btn-secondary btn-default btn-squared ">Default
                                    </button>







                                    <button class="btn btn-success btn-sm btn-squared ">Small
                                    </button>







                                    <button class="btn btn-info btn-xs btn-squared ">Extra small
                                    </button>





                                </div>
                                <!-- ends: .dm-button-list" -->
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Multiple Buttons</h6>
                            </div>
                            <div class="card-body">
                                <div class="dm-button-list d-flex flex-wrap align-items-end">


                                    <button class="btn btn-primary btn-default btn-squared ">Primary
                                    </button>







                                    <button class="btn btn-secondary btn-default btn-squared ">Secondary
                                    </button>





                                    <div class="dropdown">
                                        <button type="button"
                                            class="btn btn-light btn-outlined btn-outline-light color-light dropdown-toggle"
                                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Actions
                                            <i class="la la-angle-down"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Btn Action One</a>
                                            <a class="dropdown-item" href="#">Btn Action One</a>
                                            <a class="dropdown-item" href="#">Btn Action One</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- ends: .dm-button-list" -->
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Group Button</h6>
                            </div>
                            <div class="card-body">
                                <div class="dm-button-block">
                                    <h6>Basic</h6>
                                    <div class="button-inline-list my-n2">

                                        <div class="btn-group dm-button-group btn-group-normal my-2" role="group">
                                            <button type="button"
                                                class="btn  btn-xs active btn-outline-light">Today</button>
                                            <button type="button" class="btn  btn-xs btn-outline-light">Week</button>
                                            <button type="button" class="btn  btn-xs btn-outline-light">Month</button>
                                            <button type="button" class="btn  btn-xs btn-outline-light">Year</button>

                                        </div>



                                        <div class="btn-group dm-button-group btn-group-normal my-2" role="group">
                                            <button type="button" class="btn  btn-xs btn-outline-light">Cancel</button>
                                            <button type="button" class="btn  btn-xs btn-outline-light">Ok</button>

                                        </div>



                                        <div class="btn-group dm-button-group btn-group-solid my-2" role="group">
                                            <button type="button" class="btn  btn-xs btn-outline-light">Left</button>
                                            <button type="button" class="btn  btn-xs btn-outline-light">Middle</button>
                                            <button type="button" class="btn  btn-xs btn-outline-light">Right</button>

                                        </div>


                                    </div>
                                    <!-- ends: .button-inline-list" -->
                                </div>
                                <div class="dm-button-block mt-30">
                                    <h6>With Icon</h6>
                                    <div class="button-inline-list">

                                        <div class="btn-group dm-button-group btn-group-withIcon my-2" role="group">
                                            <button type="button" class="btn btn-primary btn-xs active">
                                                <img src="{{ asset('assets/img/svg/chevron-left.svg') }}"
                                                    alt="chevron-left" class="svg">
                                                Go Back
                                            </button>
                                            <button type="button" class="btn btn-primary btn-xs">
                                                Go Forward
                                                <img class="svg" src="{{ asset('assets/img/svg/chevron-right.svg') }}"
                                                    alt="chevron-right.svg') }}">
                                            </button>

                                        </div>


                                    </div>
                                    <!-- ends: .button-inline-list" -->
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Block</h6>
                            </div>
                            <div class="card-body">
                                <div class="dm-button-list">


                                    <button class="btn btn-primary btn-lg btn-squared btn-block ">Large Button
                                    </button>







                                    <button class="btn btn-secondary btn-default btn-squared btn-block ">Default
                                    </button>







                                    <button class="btn btn-success btn-sm btn-squared btn-block ">Samll
                                    </button>







                                    <button class="btn btn-info btn-xs btn-squared btn-block ">Extra Small
                                    </button>





                                </div>
                                <!-- ends: .dm-button-list" -->
                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Outline</h6>
                            </div>
                            <div class="card-body">
                                <div class="dm-button-list d-flex flex-wrap">



                                    <button
                                        class="btn btn-default btn-squared color-primary btn-outline-primary ">Primary
                                    </button>







                                    <button
                                        class="btn btn-default btn-squared color-secondary btn-outline-secondary ">Secondary
                                    </button>







                                    <button
                                        class="btn btn-default btn-squared color-success btn-outline-success ">Success
                                    </button>







                                    <button class="btn btn-default btn-squared color-info btn-outline-info ">Info
                                    </button>







                                    <button
                                        class="btn btn-default btn-squared color-warning btn-outline-warning ">Wraning
                                    </button>







                                    <button class="btn btn-default btn-squared color-danger btn-outline-danger ">Danger
                                    </button>







                                    <button class="btn btn-default btn-squared color-dark btn-outline-dark ">Dark
                                    </button>







                                    <button class="btn btn-default btn-squared color-light btn-outline-light ">Light
                                    </button>







                                    <button class="btn btn-default btn-squared color-dashed btn-outline-dashed ">Dashed
                                    </button>




                                </div>
                                <!-- ends: .dm-button-list" -->
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Raised</h6>
                            </div>
                            <div class="card-body">
                                <div class="dm-button-list d-flex flex-wrap">


                                    <button class="btn btn-primary btn-default btn-squared btn-shadow-primary ">Primary
                                    </button>







                                    <button
                                        class="btn btn-secondary btn-default btn-squared btn-shadow-secondary ">Secondary
                                    </button>







                                    <button class="btn btn-success btn-default btn-squared btn-shadow-success ">Success
                                    </button>







                                    <button class="btn btn-info btn-default btn-squared btn-shadow-info ">Info
                                    </button>







                                    <button class="btn btn-warning btn-default btn-squared btn-shadow-warning ">Wraning
                                    </button>







                                    <button class="btn btn-danger btn-default btn-squared btn-shadow-danger ">Danger
                                    </button>







                                    <button class="btn btn-dark btn-default btn-squared btn-shadow-dark ">Dark
                                    </button>







                                    <button class="btn btn-white btn-default btn-squared btn-shadow-white ">White
                                    </button>





                                </div>
                                <!-- ends: .dm-button-list" -->
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Rounded Outline</h6>
                            </div>
                            <div class="card-body">
                                <div class="dm-button-list d-flex flex-wrap">



                                    <button
                                        class="btn btn-default btn-rounded color-primary btn-outline-primary ">Primary
                                    </button>







                                    <button
                                        class="btn btn-default btn-rounded color-secondary btn-outline-secondary ">Secondary
                                    </button>







                                    <button
                                        class="btn btn-default btn-rounded color-success btn-outline-success ">Success
                                    </button>







                                    <button class="btn btn-default btn-rounded color-info btn-outline-info ">Info
                                    </button>







                                    <button
                                        class="btn btn-default btn-rounded color-warning btn-outline-warning ">Wraning
                                    </button>







                                    <button class="btn btn-default btn-rounded color-danger btn-outline-danger ">Danger
                                    </button>







                                    <button class="btn btn-default btn-rounded color-dark btn-outline-dark ">Dark
                                    </button>







                                    <button class="btn btn-default btn-rounded color-light btn-outline-light ">Light
                                    </button>







                                    <button class="btn btn-default btn-rounded color-dashed btn-outline-dashed ">Dashed
                                    </button>




                                </div>
                                <!-- ends: .dm-button-list" -->
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Rounded with Icon</h6>
                            </div>
                            <div class="card-body">
                                <div class="dm-button-list d-flex flex-wrap">


                                    <button class="btn btn-primary btn-default btn-rounded "><img
                                            src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                        Default
                                    </button>







                                    <button
                                        class="btn btn-primary btn-default btn-rounded btn-transparent-primary "><img
                                            src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                        Default
                                    </button>








                                    <button class="btn btn-default btn-rounded color-primary btn-outline-primary "><img
                                            src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                        Default
                                    </button>







                                    <button class="btn btn-default btn-rounded color-light btn-outline-light "><img
                                            src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                        Default
                                    </button>






                                    <button class="btn btn-light btn-default btn-rounded "><img
                                            src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                        Default
                                    </button>







                                    <button class="btn btn-white btn-default btn-squared btn-shadow-white "><img
                                            src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                        Default
                                    </button>







                                    <button class="btn btn-icon btn-primary btn-circle">
                                        <img src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                    </button>






                                    <button class="btn btn-icon btn-circle color-primary btn-outline-primary ">
                                        <img src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                    </button>




                                    <button class="btn btn-icon btn-light btn-circle">
                                        <img src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                    </button>






                                    <button class="btn btn-icon btn-circle color-light btn-outline-light ">
                                        <img src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                    </button>


                                </div>
                                <!-- ends: .dm-button-list" -->
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Disabled</h6>
                            </div>
                            <div class="card-body">
                                <div class="dm-button-list d-flex flex-wrap align-items-end mb-1">


                                    <button class="btn btn-primary btn-default btn-squared ">Primary
                                    </button>







                                    <button class="btn btn-primary btn-default btn-squared " disabled>Primary(Disabled)
                                    </button>





                                </div>
                                <!-- ends: .dm-button-list" -->
                                <div class="dm-button-list d-flex flex-wrap align-items-end">



                                    <button class="btn btn-default btn-squared color-light btn-outline-light ">Default
                                    </button>







                                    <button class="btn btn-default btn-squared text-dark btn-outline-light "
                                        disabled>Default(Disabled)
                                    </button>




                                </div>
                                <!-- ends: .dm-button-list" -->
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Loading</h6>
                            </div>
                            <div class="card-body">
                                <div class="dm-button-list d-flex flex-wrap">


                                    <button class="btn btn-primary btn-default btn-squared "><img
                                            src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                        Default
                                    </button>







                                    <button
                                        class="btn btn-primary btn-default btn-squared btn-transparent-primary "><img
                                            src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                        Default
                                    </button>








                                    <button class="btn btn-default btn-squared color-primary btn-outline-primary "><img
                                            src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                        Default
                                    </button>







                                    <button class="btn btn-default btn-squared color-light btn-outline-light "><img
                                            src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                        Default
                                    </button>






                                    <button class="btn btn-light btn-default btn-squared "><img
                                            src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                        Default
                                    </button>







                                    <button class="btn btn-white btn-default btn-squared btn-shadow-white "><img
                                            src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                        Default
                                    </button>







                                    <button class="btn btn-icon btn-primary btn-squared">
                                        <img src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                    </button>






                                    <button class="btn btn-icon btn-squared color-primary btn-outline-primary ">
                                        <img src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                    </button>




                                    <button class="btn btn-icon btn-light btn-squared">
                                        <img src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                    </button>






                                    <button class="btn btn-icon btn-squared color-light btn-outline-light ">
                                        <img src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                    </button>


                                </div>
                                <!-- ends: .dm-button-list" -->
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Button Ghost</h6>
                            </div>
                            <div class="card-body gradient1">
                                <div class="dm-button-list d-flex flex-wrap">


                                    <button class="btn btn-ghost btn-default btn-squared ">Primary
                                    </button>







                                    <button class="btn btn-ghost btn-default btn-squared ">Secondary
                                    </button>







                                    <button class="btn btn-ghost btn-default btn-squared "><img
                                            src="{{ asset('assets/img/svg/layers.svg') }}" alt="layers" class="svg">
                                        Default
                                    </button>





                                </div>
                                <!-- ends: .dm-button-list" -->
                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
