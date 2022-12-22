@extends('admin.master')
@section('title')
SignUp
@endsection
@section('body')
@section('body')
    <main class="section-forgot-password">
        <section class="section-forgot-password--logo">
            <a href=" {{ route('login.index') }}">
                <img src="{{ asset('/') }}front/assets/images/logo.png" alt="logo" class="img-fluid" />
            </a>
        </section>

        <section class="section-forgot-password--form">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-title">Forgot Password</div>
                            <div class="card-body">
                                <form action="">
                                    <div class="mt-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control u-box-shadow-1" name="email" id="email"/>
                                    </div>
                                    <div class="my-5">
                                        <div class="btn btn-green">Request Password</div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
