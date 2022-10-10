@extends('front.layouts.master')
@section('content')
  <!-- Banner Begin -->
  <section class="breadcrumb-section set-bg" data-setbg="{{ asset('front_assets/img/breadcrumb-bg.jpg') }}" style="background-image: url(&quot;front-assets/img/breadcrumb-bg.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bs-text">
                        <h2>Change Password</h2>
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
                    <div class="col-md-3 col-sm-3"></div>
                    <div class="col-md-9 col-sm-9">
                    @if ($errors->any())
                  <div class="alert alert-danger">
                 <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                 </ul>
                 </div>
                 @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <img src="{{ asset('front_assets/img/chat.png') }}" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <div class="profile-content login__form">
                            <h2>Change Password</h2>    
                            <form   method="post" action="{{ route('changeUser.password') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="input__item">
                                    <input type="password" placeholder="Old Password" name="current_password" >
                                    <span class="fa fa-lock"></span>
                                </div>
                                <div class="input__item">
                                    <input type="password" placeholder="New Password" name="new_password">
                                    <span class="fa fa-lock"></span>
                                </div>
                                <div class="input__item">
                                    <input type="password" placeholder="Confirm New Password" name="new_confirm_password">
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