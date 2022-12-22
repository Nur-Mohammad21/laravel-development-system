@extends('admin.master')
@section('title')
    Login
@endsection
@section('body')
    <main class="section-login">
        <section class="section-login--logo">
            <a href="{{ route('home.index') }}">
                <img src="{{ asset('/') }}front/assets/images/logo.png" alt="logo" class="img-fluid" />
            </a>
        </section>

        <section class="section-login--form">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card">
                            @if(Session::has('error')) <span class="text-danger"> {{ Session::get('error') }}</span>@endif
                            <div class="card-title">Sign In</div>
                            <div class="card-body">
                                <form action="{{ route('front.login') }}" method="post">@csrf
                                    <div class="mt-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" id="email" class="form-control u-box-shadow-1"/>
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mt-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control u-box-shadow-1" name="password" id="password"/>
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mt-5">
                                        <button type="submit" class="btn btn-green">Sign In</button>
                                    </div>
                                </form>
                                <div class="links">
                                    <p>
                                        <a href="{{ route('login.SignUp') }}">Need an account?</a>
                                        <a href="{{ route('password.forget') }} ">Forgot Password?</a>
                                    </p>
                                </div>
                                <div class="back-button">
                                    <a href="index.html">
                                        <i class="bi bi-arrow-left-circle"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
