@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="bg-white my-30 content-center">
                <div class="coming-soon text-center">
                    <img class="dark" src="{{ asset('assets/img/logo-dark.svg') }}" alt="dark">
                    <img class="light" src="{{ asset('assets/img/logo-white.svg') }}" alt="light">
                    <div class="coming-soon__body">
                        <h1>We are coming soon</h1>
                        <p class="subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry's standard dummy
                            text
                            ever since the 1500s,</p>
                        <div class="counting">
                            <div id="clock" class="counting-area"></div>
                        </div>
                        <form class="form-inline d-flex justify-content-center my-n10 subscribe-bar">
                            <div class="form-group m-10">
                                <label for="inputPassword2" class="sr-only">name@example.com</label>
                                <input type="email" class="form-control" id="inputPassword2" placeholder="name@example.com">
                            </div>
                            <button type="submit" class="btn btn-primary m-10 text-uppercase btn-lg px-20">Subscribe</button>
                        </form>
                    </div>
                    <div class="coming-social">
                        <ul class="d-flex justify-content-center">
                            <li>
                                <a href="#" class="bg-facebook rounded-circle"><i class="lab la-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#" class="bg-twitter rounded-circle"><i class="lab la-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="bg-instagram rounded-circle"><i class="lab la-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#" class="bg-dark rounded-circle"><i class="lab la-github"></i></a>
                            </li>
                        </ul>
                        <p>2023 © SovWare</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection