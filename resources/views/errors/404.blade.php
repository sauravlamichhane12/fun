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


    <!-- breadcrumbs area end -->
    <!-- Begin Error 404 Area -->
    <div class="error-404-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="error-404-content">
                        <h1 class="title mb-4">404</h1>
                        <h2 class="sub-title mb-4">Page Cannot Be Found!</h2>
                        <p class="short-desc mb-7">Seems like nothing was found at this location. Try something else or
                            you
                            can go back to the homepage following the button below!</p>
                        <div class="button-wrap">
                            <a class="btn btn-danger btn-lg rounded-0" href="{{ url('/') }}">Back to home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <!-- Error 404 Area End Here -->


@endsection