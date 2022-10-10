@extends('front.layouts.master')
@section('content')


   <!-- Banner Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('front_assets/img/breadcrumb-bg.jpg') }}" style="background-image: url(&quot;front-assets/img/breadcrumb-bg.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bs-text">
                        <h2>Profile</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- Profile Begin -->
    <section class="profile">
        <div class="container">
            <div class="basic-information">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <img src="{{ asset('front_assets/img/chat.png') }}" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <div class="profile-content">
                            <h2>{{ Auth::user()->name }}</h2>
                            <ul class="information">
                                <li><span>Name:</span>{{ Auth::user()->name }}</li>
                                <li><span>Email:</span>{{ Auth::user()->email }}</li>
                                <li><span>Country:</span>{{ Auth::user()->country }}</li>
                                <li><span>Phone No:</span>{{ Auth::user()->phone_code }}</li>
                                <li><span>User Type:</span>User</li>
                            </ul>
                        @php
                        $userId=Auth::user()->id;
                        @endphp
                            <div class="mt-4">
                                <a href="{{ route('userProfile',$userId) }}" class="btn btn-danger">Edit</a>
                                <a href="{{ route('change.passwordPage') }}" class="btn btn-success">Change Password</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Profile End -->



@endsection