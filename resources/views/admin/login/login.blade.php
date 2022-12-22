@extends('admin.master')
@section('title')
    SEO Content
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
                            <div class="card-title">Sign In</div>
                            <div class="card-body">
                                <form action="">
                                    <div class="mt-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" id="email" class="form-control u-box-shadow-1"/>
                                    </div>
                                    <div class="mt-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control u-box-shadow-1" name="password" id="password"/>
                                    </div>
                                    <div class="mt-5">
                                        <div class="btn btn-green">Sign In</div>
                                    </div>
                                </form>
                                <div class="links">
                                    <p>
                                        <a href="">Need an account?</a>
                                        <a href=" ">Forgot Password?</a>
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
