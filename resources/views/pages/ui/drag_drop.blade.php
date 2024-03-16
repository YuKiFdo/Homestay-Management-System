@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-drag-drop') }}</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>{{ trans('menu.ui-menu-title') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-drag-drop') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card mb-25">
                <div class="card-header">
                    <h6>Drag & Drop</h6>
                </div>
                <div class="card-body pt-0 pb-0">
                    <div class="drag-drop-wrap">
                        <div class="drag-drop table-responsive-lg bg-white w-100 mb-30">
                            <table class="table mb-0 table-basic">
                                <tbody>
                                    <tr class="draggable" draggable="true">
                                        <td>
                                            <div class="item d-flex align-items-center">
                                                <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                <div class="item-info d-flex align-items-center">
                                                    <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url({{ asset('assets/img/tm6.png') }}); background-size: cover;"></a>
                                                    <div class="item_title">
                                                        <h6>
                                                            <a href="#">Kellie Marquot</a>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Marquot Store
                                        </td>
                                        <td>
                                            347
                                        </td>
                                        <td>
                                            $84,248.66
                                        </td>
                                        <td>
                                            <span class="date">January 20, 2020</span>
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#">
                                                    <i class="uil uil-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="draggable" draggable="true">
                                        <td>
                                            <div class="item d-flex align-items-center">
                                                <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                <div class="item-info d-flex align-items-center">
                                                    <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url({{ asset('assets/img/tm1.png') }}); background-size: cover;"></a>
                                                    <div class="item_title">
                                                        <h6>
                                                            <a href="#">Kellie Marquot</a>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Marquot Store
                                        </td>
                                        <td>
                                            347
                                        </td>
                                        <td>
                                            $84,248.66
                                        </td>
                                        <td>
                                            <span class="date">January 20, 2020</span>
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#">
                                                    <i class="uil uil-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="draggable" draggable="true">
                                        <td>
                                            <div class="item d-flex align-items-center">
                                                <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                <div class="item-info d-flex align-items-center">
                                                    <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url({{ asset('assets/img/tm2.png') }}); background-size: cover;"></a>
                                                    <div class="item_title">
                                                        <h6>
                                                            <a href="#">Kellie Marquot</a>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Marquot Store
                                        </td>
                                        <td>
                                            347
                                        </td>
                                        <td>
                                            $84,248.66
                                        </td>
                                        <td>
                                            <span class="date">January 20, 2020</span>
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#">
                                                    <i class="uil uil-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="draggable" draggable="true">
                                        <td>
                                            <div class="item d-flex align-items-center">
                                                <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                <div class="item-info d-flex align-items-center">
                                                    <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url({{ asset('assets/img/tm3.png') }}); background-size: cover;"></a>
                                                    <div class="item_title">
                                                        <h6>
                                                            <a href="#">Kellie Marquot</a>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Marquot Store
                                        </td>
                                        <td>
                                            347
                                        </td>
                                        <td>
                                            $84,248.66
                                        </td>
                                        <td>
                                            <span class="date">January 20, 2020</span>
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#">
                                                    <i class="uil uil-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="draggable" draggable="true">
                                        <td>
                                            <div class="item d-flex align-items-center">
                                                <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                <div class="item-info d-flex align-items-center">
                                                    <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url({{ asset('assets/img/tm4.png') }}); background-size: cover;"></a>
                                                    <div class="item_title">
                                                        <h6>
                                                            <a href="#">Kellie Marquot</a>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Marquot Store
                                        </td>
                                        <td>
                                            347
                                        </td>
                                        <td>
                                            $84,248.66
                                        </td>
                                        <td>
                                            <span class="date">January 20, 2020</span>
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#">
                                                    <i class="uil uil-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="draggable" draggable="true">
                                        <td>
                                            <div class="item d-flex align-items-center">
                                                <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                <div class="item-info d-flex align-items-center">
                                                    <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url({{ asset('assets/img/tm5.png') }}); background-size: cover;"></a>
                                                    <div class="item_title">
                                                        <h6>
                                                            <a href="#">Kellie Marquot</a>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Marquot Store
                                        </td>
                                        <td>
                                            347
                                        </td>
                                        <td>
                                            $84,248.66
                                        </td>
                                        <td>
                                            <span class="date">January 20, 2020</span>
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#">
                                                    <i class="uil uil-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="draggable" draggable="true">
                                        <td>
                                            <div class="item d-flex align-items-center">
                                                <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                <div class="item-info d-flex align-items-center">
                                                    <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url({{ asset('assets/img/tm6.png') }}); background-size: cover;"></a>
                                                    <div class="item_title">
                                                        <h6>
                                                            <a href="#">Kellie Marquot</a>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Marquot Store
                                        </td>
                                        <td>
                                            347
                                        </td>
                                        <td>
                                            $84,248.66
                                        </td>
                                        <td>
                                            <span class="date">January 20, 2020</span>
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#">
                                                    <i class="uil uil-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="draggable" draggable="true">
                                        <td>
                                            <div class="item d-flex align-items-center">
                                                <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                <div class="item-info d-flex align-items-center">
                                                    <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url({{ asset('assets/img/tm7.png') }}); background-size: cover;"></a>
                                                    <div class="item_title">
                                                        <h6>
                                                            <a href="#">Kellie Marquot</a>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Marquot Store
                                        </td>
                                        <td>
                                            347
                                        </td>
                                        <td>
                                            $84,248.66
                                        </td>
                                        <td>
                                            <span class="date">January 20, 2020</span>
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#">
                                                    <i class="uil uil-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="draggable" draggable="true">
                                        <td>
                                            <div class="item d-flex align-items-center">
                                                <img src="{{ asset('assets/img/svg/move.svg') }}" alt="move" class="svg">
                                                <div class="item-info d-flex align-items-center">
                                                    <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url({{ asset('assets/img/tm3.png') }}); background-size: cover;"></a>
                                                    <div class="item_title">
                                                        <h6>
                                                            <a href="#">Kellie Marquot</a>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Marquot Store
                                        </td>
                                        <td>
                                            347
                                        </td>
                                        <td>
                                            $84,248.66
                                        </td>
                                        <td>
                                            <span class="date">January 20, 2020</span>
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#">
                                                    <i class="uil uil-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <img src="{{ asset('assets/img/svg/trash-2.svg') }}" alt="trash-2" class="svg">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection