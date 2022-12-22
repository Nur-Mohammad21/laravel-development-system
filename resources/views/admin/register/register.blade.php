@extends('admin.master')
@section('title')
    SignUp
@endsection
@section('body')
    <main class="section-register ">
        <section class="section-register--left">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Benefits of joining:</h1>
                    <ul class="card-text">
                        <li>Over 6,000 Proven Writers</li>
                        <li>Powerful Content Creation Tools</li>
                        <li>Easy-to-Use Platform</li>
                        <li>Fast Turnaround</li>
                        <li>Pay as You Go</li>
                        <li>Quality Guaranteed!</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="section-register--right">
            @if(Session::get('message'))<p class="text-success text-center">{{ Session::get('message') }}</p> @endif
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li class="text-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <h2 class="heading mb-5">Create Your Free Account</h2>
            <p class="heading--sub mb-4 d-inline">
                High-quality content written on demand by the
                <span class="green"> web's best writers. </span>
            </p>
            <p>
                Sign up is easy and free. You don't pay anything until you're ready to order content.
            </p>
            <form action=" " method="post">
                <div class="mt-3">
                    <label for="name" class="form-label">First Name</label>
                    <input type="text" class="form-control u-box-shadow-1" name="name" id="name" />
                </div>
                <div class="mt-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control u-box-shadow-1" name="email" id="email" />
                </div>
                <div class="mt-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control u-box-shadow-1" name="password" id="password"/>
                </div>
                <div class="mt-5">
                    <div  class="btn btn-blue" type="submit">Sign Up</div>

                </div>
            </form>
            <p class="privacy-links mt-5">
                I agree to the
                <a href=""> Terms & Conditions </a>
                and
                <a href=""> Privacy Policy. </a>
            </p>
            <p class="login-link mt-5">
                Already have an account?
                <a href=" {{ route('login.index') }}"> Sign in </a>
            </p>
        </section>
    </main>
@endsection
