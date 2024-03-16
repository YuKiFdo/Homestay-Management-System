@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="social-dash-wrap">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.knowledge-all-article') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.knowledge-all-article') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>

        <div class="knowledgebase py-50">
            <div class="row justify-content-center">
                <div class="cus-6 col-md-10">
                    <div class="kb text-center">
                        <div class="kb__header-search" tabindex="0">
                            <form class="kb__header-search-form">
                                <div class="input-group">
                                    <div class="kb__select-wrapper">
                                        <select class="kb__select">
                                            <option value=" ">All products</option>
                                            <option value="kb">Articles</option>
                                            <option value="post">Posts</option>
                                            <option value="dvfaq">FAQ</option>
                                            <option value="page">Pages</option>
                                        </select>
                                    </div>
                                    <input type="text" class="form-control ui-autocomplete-input" placeholder="Search anything" name="s" autocomplete="off">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn">Search
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="knowledgebase-details">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="knowledgebase-breadcrumb">
                                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="knowledgebase__plugin-wrapper">
                        <div class="row">
                            <div class="col-xl-4 col-lg-12">
                                <div class="knowledgebase__list-plugin">
                                    <h3>Introduction to Plugin</h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-5 mt-xl-0 mt-20">
                                <div class="knowledgebase__list">
                                    <ul>
                                        <li>
                                            <a href="knowledgebase-3.html">Log in and out of plugins view your success and other stats</a>
                                        </li>
                                        <li>
                                            <a href="knowledgebase-3.html">Switch between accounts</a>
                                        </li>
                                        <li>
                                            <a href="knowledgebase-3.html">Change your email</a>
                                        </li>
                                        <li>
                                            <a href="knowledgebase-3.html">Reactivate your account</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-5 offset-sm-1 mt-xl-0 mt-20">
                                <div class="knowledgebase__list">
                                    <ul>
                                        <li>
                                            <div class="accordion" id="accordionExample5">
                                                <div>
                                                    <div id="headingOne">
                                                        <div role="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" class="collapsed knowledgebase__list-collapsed">
                                                            <div class="changelog__accordingArrow">
                                                                <img class="svg" src="{{ asset('assets/img/svg/chevron-right.svg') }}" alt="chevron-right.svg">
                                                            </div>
                                                            Log in and out of Plugins
                                                        </div>
                                                    </div>

                                                    <div id="collapseOne" class="collapse collapse-area" aria-labelledby="headingOne" data-parent="#accordionExample5">
                                                        <div class="knowledgebase__list">
                                                            <ul>
                                                                <li>
                                                                    <a href="knowledgebase-3.html">Log in and out of Plugins</a>
                                                                </li>
                                                                <li>
                                                                    <a href="knowledgebase-3.html">Switch between accounts</a>
                                                                </li>
                                                                <li>
                                                                    <a href="knowledgebase-3.html">Change your email</a>
                                                                </li>
                                                                <li>
                                                                    <a href="knowledgebase-3.html">Reactivate your account</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="knowledgebase-3.html">Switch between accounts</a>
                                        </li>
                                        <li>
                                            <a href="knowledgebase-3.html">Change your email</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="knowledgebase__plugin-wrapper">
                        <div class="row">
                            <div class="col-xl-4 col-lg-12">
                                <div class="knowledgebase__list-plugin">
                                    <h3>Productivity tools for your Plugin admin</h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-5 mt-xl-0 mt-20">
                                <div class="knowledgebase__list">
                                    <ul>
                                        <li>
                                            <div class="accordion" id="accordionExample6">
                                                <div>
                                                    <div id="headingtwo">
                                                        <div role="button" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="false" class="collapsed knowledgebase__list-collapsed">
                                                            <div class="changelog__accordingArrow">
                                                                <img class="svg" src="{{ asset('assets/img/svg/chevron-right.svg') }}" alt="chevron-right.svg">
                                                            </div>
                                                            Log in and out of Plugins
                                                        </div>
                                                    </div>

                                                    <div id="collapsetwo" class="collapse collapse-area" aria-labelledby="headingtwo" data-parent="#accordionExample6">
                                                        <div class="knowledgebase__list">
                                                            <ul>
                                                                <li>
                                                                    <a href="knowledgebase-3.html">Log in and out of Plugins</a>
                                                                </li>
                                                                <li>
                                                                    <a href="knowledgebase-3.html">Switch between accounts</a>
                                                                </li>
                                                                <li>
                                                                    <a href="knowledgebase-3.html">Change your email</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="knowledgebase-3.html">Switch between accounts</a>
                                        </li>
                                        <li>
                                            <a href="knowledgebase-3.html">Change your email</a>
                                        </li>
                                        <li>
                                            <a href="knowledgebase-3.html">Reactivate your account</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-5 offset-sm-1 mt-xl-0 mt-20">
                                <div class="knowledgebase__list">
                                    <ul>
                                        <li>
                                            <a href="knowledgebase-3.html">Log in and out of Plugins</a>
                                        </li>
                                        <li>
                                            <div class="accordion" id="accordionExample7">
                                                <div>
                                                    <div id="headingthree">
                                                        <div role="button" data-bs-toggle="collapse" data-bs-target="#collapsethree" aria-expanded="false" class="collapsed knowledgebase__list-collapsed">
                                                            <div class="changelog__accordingArrow">
                                                                <img class="svg" src="{{ asset('assets/img/svg/chevron-right.svg') }}" alt="chevron-right.svg">
                                                            </div>
                                                            Switch between accounts
                                                        </div>
                                                    </div>

                                                    <div id="collapsethree" class="collapse collapse-area" aria-labelledby="headingthree" data-parent="#accordionExample7">
                                                        <div class="knowledgebase__list">
                                                            <ul>
                                                                <li>
                                                                    <a href="knowledgebase-3.html">Log in and out of Plugins</a>
                                                                </li>
                                                                <li>
                                                                    <a href="knowledgebase-3.html">Switch between accounts</a>
                                                                </li>
                                                                <li>
                                                                    <a href="knowledgebase-3.html">Change your email</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="knowledgebase__plugin-wrapper">
                        <div class="row">
                            <div class="col-xl-4 col-lg-12">
                                <div class="knowledgebase__list-plugin">
                                    <h3>Manage your account</h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-5 mt-xl-0 mt-20">
                                <div class="knowledgebase__list">
                                    <ul>
                                        <li>
                                            <a href="knowledgebase-3.html">Log in and out of Plugins</a>
                                        </li>
                                        <li>
                                            <a href="knowledgebase-3.html">Switch between accounts</a>
                                        </li>
                                        <li>
                                            <a href="knowledgebase-3.html">Change your email</a>
                                        </li>
                                        <li>
                                            <a href="knowledgebase-3.html">Reactivate your account</a>
                                        </li>
                                        <li>
                                            <a href="knowledgebase-3.html">Log in and out of Plugins</a>
                                        </li>
                                        <li>
                                            <a href="knowledgebase-3.html">Switch between accounts</a>
                                        </li>
                                        <li>
                                            <a href="knowledgebase-3.html">Change your email</a>
                                        </li>
                                        <li>
                                            <a href="knowledgebase-3.html">Reactivate your account</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-5 offset-sm-1 mt-xl-0 mt-20">
                                <div class="knowledgebase__list">
                                    <ul>
                                        <li>
                                            <a href="knowledgebase-3.html">Switch between accounts</a>
                                        </li>
                                        <li>
                                            <a href="knowledgebase-3.html">Change your email</a>
                                        </li>
                                        <li>
                                            <a href="knowledgebase-3.html">Reactivate your account</a>
                                        </li>
                                        <li>
                                            <a href="knowledgebase-3.html">Switch between accounts</a>
                                        </li>
                                        <li>
                                            <a href="knowledgebase-3.html">Change your email</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="knowledgebase__plugin-wrapper">
                        <div class="row">
                            <div class="col-xl-4 col-lg-12">
                                <div class="knowledgebase__list-plugin">
                                    <h3>Manage your account</h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-5 mt-xl-0 mt-20">
                                <div class="knowledgebase__list">
                                    <ul>
                                        <li>
                                            <a href="knowledgebase-3.html">Log in and out of Plugins</a>
                                        </li>
                                        <li>
                                            <a href="knowledgebase-3.html">Switch between accounts</a>
                                        </li>
                                        <li>
                                            <a href="knowledgebase-3.html">Change your email</a>
                                        </li>
                                        <li>
                                            <a href="knowledgebase-3.html">Reactivate your account</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-5 offset-sm-1 mt-xl-0 mt-20">
                                <div class="knowledgebase__list">
                                    <ul>
                                        <li>
                                            <a href="knowledgebase-3.html">Log in and out of Plugins</a>
                                        </li>
                                        <li>
                                            <a href="knowledgebase-3.html">Switch between accounts</a>
                                        </li>
                                        <li>
                                            <a href="knowledgebase-3.html">Change your email</a>
                                        </li>
                                        <li>
                                            <a href="knowledgebase-3.html">Reactivate your account</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="knowledgebase__hr"></div>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-12">
                            <div class="knowledgebase__cta">
                                <h3>Still no luck? We can help!</h3>
                                <p>Contact us and we’ll get back to you as soon as possible.</p>
                                <div class="content-center">
                                    <button type="button" class="btn btn-primary btn-default btn-squared btn-shadow-primary">Submit a Request</button>
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