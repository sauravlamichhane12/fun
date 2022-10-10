@extends('front.layouts.master')
@section('content')


    <!-- Banner Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('front_assets/img/breadcrumb-bg.jpg') }}" style="background-image: url(&quot;front-assets/img/breadcrumb-bg.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bs-text">
                        <h2>Login</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- Login Begin -->
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Login</h3>  
                   <form action="{{ route('login') }}" method="post">
                      @csrf

                            <div class="input__item">
                                <input type="text" placeholder="Email address" name="email" require>
                                <span class="fa fa-envelope"></span>
                            </div>
                       
                            <div class="input__item">
                                <input type="password" placeholder="Password" name="password" require>
                                <span class="fa fa-lock"></span>
                            </div>
                   
                            <button type="submit" class="site-btn">Login</button>
                        </form>
                        <a href="{{ route('password.request') }}" class="forget_pass">Forgot Your Password?</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>Dont’t Have An Account?</h3>
                        <a href="{{ url('user/register') }}" class="primary-btn">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login End -->
@endsection