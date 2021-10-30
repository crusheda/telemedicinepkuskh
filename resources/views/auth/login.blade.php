@extends('layouts.auth_layout')
@section('title')
    Masuk
@endsection
@section('meta_content')
    - {{ __('messages.login') }} {{ __('messages.to') }} {{getAppName()}}
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-group">
                <div class="card p-4">
                    <div class="card-body">
                        @if(Session::has('error'))
                            <div class="alert alert-danger">{{Session::get('error')}}</div>
                        @endif
                        @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        <form method="post" action="{{ url('/login') }}" id="loginForm">
                            {{ csrf_field() }}
                            <img src="{{asset('img/landing-logotext.png')}}" alt=""><hr>
                            <p class="text-muted">Masuk untuk memulai Percakapan</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="fa fa-envelope"></i>
                                    </span>
                                    </div>
                                    <input type="email" class="form-control {{ $errors->has('email')?'is-invalid':'' }}"
                                           name="email" value="{{ old('email') }}"
                                           placeholder="{{ __('messages.email') }}"
                                           id="email">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="fa fa-lock lock-icon-size"></i>
                                    </span>
                                    </div>
                                    <input type="password"
                                           class="form-control {{ $errors->has('password')?'is-invalid':'' }}"
                                           placeholder="{{ __('messages.password') }}" name="password" id="password"
                                           onkeypress="return avoidSpace(event)">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                       <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="input-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Ingat Saya
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-primary px-4" type="button"
                                                id="loginBtn">Masuk</button>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a class="btn btn-link px-0" href="{{ url('/password/reset') }}">
                                            Lupa Password?
                                        </a>
                                    </div>
                                </div>
                        </form>
                            {{-- <div class="row mt-2">
                                <div class="col-12">
                                    <button class="form-control loginBtn loginBtn--google align-items-center">
                                        <a href="{{ url('/login/google') }}"
                                           style="color: white; text-decoration: none">Login with Google</a>
                                    </button>
                                    <button class="form-control loginBtn loginBtn--facebook mt-2">
                                        <a href="{{ url('/login/facebook') }}"
                                           style="color: white; text-decoration: none">Login with Facebook</a>
                                    </button>
                                </div>
                            </div> --}}
                        </div>
                    </div>

                    <div class="card text-white bg-primary py-5 d-md-down-none text-center" style="width:44%">
                        <div class="row card-body text-center  h-100">
                            <div class="col-12 sign-up-div">
                                <h2>Belum Daftar?</h2>
                                <p>Lakukan pendaftaran terlebih dahulu untuk Masuk ke halaman Percakapan</p>
                                <a class="btn btn-primary active mt-3"
                                   href="{{ url('/register') }}">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
