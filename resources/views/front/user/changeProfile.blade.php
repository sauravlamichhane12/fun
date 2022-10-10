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
                        <div class="profile-content login__form">
                            <h2 class="mb-3">Edit Profile</h2>    
                            <form   method="post" action="{{ route('changeUserProfile') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="input__item">
                                    <input type="text" placeholder="Full Name" value="{{ Auth::user()->name }}" name="name">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="input__item">
                                    <input type="email" placeholder="Email Address" value="{{ Auth::user()->email }}" name="email">
                                    <span class="fa fa-lock"></span>
                                </div>
                                <div class="input__item">
                                    <input type="text" placeholder="" value="{{ Auth::user()->country }}" name="country">
                                    <span class="fa fa-globe"></span>
                                </div>
                                <div class="input__item">
                                    <input type="tel" placeholder="" value="{{ Auth::user()->phone_code }}" name="phone_code">
                                    <span class="fa fa-mobile"></span>
                                </div>
                                <input type="hidden" value="{{ $id }}" name="id">

                                <div class="input__item">
                                    <input type="tel" placeholder="" value="User" readonly>
                                    <span class="fa fa-lock"></span>
                                </div>
                                <button type="submit" class="btn btn-success">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Profile End -->
@endsection