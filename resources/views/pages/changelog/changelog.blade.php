@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">{{ trans('page_title.changelog') }}</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i
                                        class="las la-home"></i>{{ trans('page_title.dashboard') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ trans('page_title.changelog') }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-12 changelog-19 d-block">
            <div class="changelog mb-30">
                <div class="card">
                    <div class="card-header">
                        <div class="changelog__title">
                            <span class="v-num">Version 1.0.1</span>
                            <span class="sign">-</span>
                            <span class="rl-date">April 16, 2023</span>
                        </div>
                    </div>
                    <div class="card-body p-30">
                        <div class="version-list">
                            <div class="version-list__single">
                                <div class="version-list__top">
                                    <span class="badge badge-round badge-info badge-lg">Fixed</span>
                                </div>
                                <ul class="version-info">
                                    <li>CSS Issues</li>
                                </ul>
                            </div>
                        </div>
                        <div class="changelog__according">
                            <div class="changelog__accordingWrapper">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header w-100 px-sm-30 px-15" id="heading1">
                                            <div role="button" class="w-100 changelog__accordingCollapsed collapsed"
                                                data-bs-toggle="collapse" data-bs-target="#collapse1"
                                                aria-expanded="true" aria-controls="collapse1">
                                                <div
                                                    class="changelog__accordingTitle d-flex justify-content-between w-100">
                                                    <div class="v-num">1.0.0<span class="v-arrow">-</span> <span
                                                            class="rl-date">January 12, 2023</span></div>
                                                    <div class="changelog__accordingArrow">
                                                        <span data-feather="chevron-right"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse1" class="collapse" aria-labelledby="heading1"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="version-list">
                                                    <div class="version-list__single">
                                                        <div class="version-list__top">
                                                            <span
                                                                class="badge badge-round badge-success badge-lg">New</span>
                                                        </div>
                                                        <ul class="version-success">
                                                            <li>Initial Release</li>
                                                        </ul>
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
        <div class="col-12 changelog-5 d-block">
            <div class="changeLog-history mb-30">
                <div class="card">
                    <div class="card-header py-20 px-20">
                        <div class="changelog-history__title text-uppercase">
                            CHANGELOG
                        </div>
                        <div class="changelog-history__titleExtra">

                        </div>
                    </div>
                    <div class="card-body p-25">
                        <h4 class="history-title">VERSION HISTORY</h4>
                        <ul class="v-history-list">
                            <li>
                                <span class="version-name">Version 1.0.1</span><span class="version-date">April 16,
                                    2023</span>
                                <span class="version-name">Version 1.0.0</span><span class="version-date">January 12,
                                    2023</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
