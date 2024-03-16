@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-card') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-card') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Basic card</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="cards-wrapper">
                                    <div class="card-single mb-4">
                                        <div class="card card-default card-md bg-transparent card-bordered">
                                            <div class="card-header">
                                                <h6>Default size card</h6>
                                                <div class="card-extra">
                                                    <div class="dropdown dropdown-hover">
                                                        <a class="btn-link" href="">More</a>
                                                        <div class="dropdown-default">
                                                            <a class="dropdown-item" href="#">More One</a>
                                                            <a class="dropdown-item" href="#">More Two</a>
                                                            <a class="dropdown-item" href="#">More Three</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-content">
                                                    <p>Card content</p>
                                                    <p>Card content</p>
                                                    <p>Card content</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-single">
                                        <div class="card card-default card-sm bg-transparent card-bordered">
                                            <div class="card-header">
                                                <h6>Small size card</h6>
                                                <div class="card-extra">
                                                    <div class="dropdown dropdown-hover">
                                                        <a class="btn-link" href="">More</a>
                                                        <div class="dropdown-default">
                                                            <a class="dropdown-item" href="#">More One</a>
                                                            <a class="dropdown-item" href="#">More Two</a>
                                                            <a class="dropdown-item" href="#">More Three</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-content">
                                                    <p>Card content</p>
                                                    <p>Card content</p>
                                                    <p>Card content</p>
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
            <div class="col-12">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Basic card</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="cards-wrapper">
                                    <div class="card-single mb-4">
                                        <div class="card card-default card-md bg-normal card-bordered">
                                            <div class="card-header">
                                                <h6>Default size card</h6>
                                                <div class="card-extra">
                                                    <div class="dropdown dropdown-hover">
                                                        <a class="btn-link" href="">More</a>
                                                        <div class="dropdown-default">
                                                            <a class="dropdown-item" href="#">More One</a>
                                                            <a class="dropdown-item" href="#">More Two</a>
                                                            <a class="dropdown-item" href="#">More Three</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-content">
                                                    <p>Card content</p>
                                                    <p>Card content</p>
                                                    <p>Card content</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-single">
                                        <div class="card card-default card-sm bg-normal card-bordered">
                                            <div class="card-header">
                                                <h6>Small size card</h6>
                                                <div class="card-extra">
                                                    <div class="dropdown dropdown-hover">
                                                        <a class="btn-link" href="">More</a>
                                                        <div class="dropdown-default">
                                                            <a class="dropdown-item" href="#">More One</a>
                                                            <a class="dropdown-item" href="#">More Two</a>
                                                            <a class="dropdown-item" href="#">More Three</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-content">
                                                    <p>Card content</p>
                                                    <p>Card content</p>
                                                    <p>Card content</p>
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
            <div class="col-12">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Simple card</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="cards-wrapper">
                                    <div class="card-single">
                                        <div class="card card-default card-md bg-transparent card-bordered">
                                            <div class="card-body">
                                                <div class="card-content">
                                                    <p>Card content</p>
                                                    <p>Card content</p>
                                                    <p>Card content</p>
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
            <div class="col-12">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Simple card</h6>
                    </div>
                    <div class="card-body">
                        <div class="columnCard-wrapper">
                            <div class="row">
                                <div class="col-lg-4 mb-20">
                                    <div class="card card-default card-md">
                                        <div class="card-header">
                                            <h6>Card title</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-content">
                                                <p>Card content</p>
                                                <p>Card content</p>
                                                <p>Card content</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-20">
                                    <div class="card card-default card-md">
                                        <div class="card-header">
                                            <h6>Card title</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-content">
                                                <p>Card content</p>
                                                <p>Card content</p>
                                                <p>Card content</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-20">
                                    <div class="card card-default card-md">
                                        <div class="card-header">
                                            <h6>Card title</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-content">
                                                <p>Card content</p>
                                                <p>Card content</p>
                                                <p>Card content</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Simple card</h6>
                    </div>
                    <div class="card-body">
                        <div class="columnGrid-wrapper">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card card-default card-md bg-normal card-bordered">
                                        <div class="card-header">
                                            <h6>Card title</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-grid-table table-responsive">
                                                <table class="table">
                                                    <tr>
                                                        <td>
                                                            <p>Content</p>
                                                        </td>
                                                        <td>
                                                            <p>Content</p>
                                                        </td>
                                                        <td>
                                                            <p>Content</p>
                                                        </td>
                                                        <td>
                                                            <p>Content</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Content</p>
                                                        </td>
                                                        <td>
                                                            <p>Content</p>
                                                        </td>
                                                        <td>
                                                            <p>Content</p>
                                                        </td>
                                                        <td>
                                                            <p>Content</p>
                                                        </td>
                                                    </tr>
                                                </table>
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