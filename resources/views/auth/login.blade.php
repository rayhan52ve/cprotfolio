@extends('frontend.layout')
@section('content')
    <section class="block-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Login & Registration</h1>
                    <div class="breadcrumbs">
                        <ul>
                            <li><i class="pe-7s-home"></i> <a href="{{ url('/') }}" title="">Home</a></li>
                            <li><a href="#" title="">Login & Registration</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="login-reg-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="login-form-inner">
                        <h3 class="category-headding ">LOGIN TO YOUR ACCOUNT</h3>
                        <div class="headding-border bg-color-1"></div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <label>Username Or Email <sup>*</sup></label>
                            <input type="email" class="form-control" id="name" name="email"
                                placeholder="Username or Email">
                            <label>Password <sup>*</sup></label>
                            <input type="password" class="form-control" id="pass" name="password"
                                placeholder="*******">
                            <label class="checkbox-inline">
                                <input type="checkbox" value="">Remember me</label>
                            <button type="submit" class="btn btn-style">Login</button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="register-form-inner">
                        <h3 class="category-headding ">REGISTER NOW!</h3>
                        <div class="headding-border bg-color-1"></div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <label>Name <sup>*</sup></label>
                            <input type="text" class="form-control" id="name_email_2" name="name" placeholder="Name ">
                            <label> Email <sup>*</sup></label>
                            <input type="email" class="form-control" id="name_email_2" name="email" placeholder="Email">
                            <label>Password <sup>*</sup></label>
                            <input type="password" class="form-control" id="pass_2" name="password"
                                placeholder="Write Your Password Here ...">
                            <label>Repeat Password <sup>*</sup></label>
                            <input type="password" class="form-control" id="pass_3" name="password_confirmation"
                                placeholder="Rewrite Your Password Here ...">
                            <button type="submit" class="btn btn-style">Register Now!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
