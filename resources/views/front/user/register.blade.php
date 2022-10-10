@extends('front.layouts.master')
@section('content')
<link rel="stylesheet" href="{{ asset('front_assets/assets/css/countrySelect.css') }}">
<link rel="stylesheet" href="{{ asset('front_assets/assets/css/intTelInput.css') }}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" />
<!-- JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.min.js"></script>

<!-- Banner Begin -->
<section class="breadcrumb-section set-bg" data-setbg="{{ asset('front_assets/img/breadcrumb-bg.jpg') }}" style="background-image: url(&quot;front-assets/img/breadcrumb-bg.jpg&quot;);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bs-text">
                    <h2>Sign Up</h2>
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
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="login__form">
                    <h3>Sign Up</h3>
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="input__item">
                            <input type="text" placeholder="Full Name" name="name" required>
                            <span class="fa fa-user"></span>
                        </div>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <div class="input__item">
                            <input type="text" placeholder="Email address" name="email" required>
                            <span class="fa fa-envelope"></span>
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="form-group">
                            <!-- <label for="name">Country:</label> -->
                            <div class="input__item">
                                <input id="country_selector" type="text" class="form-control" name="country">
                            </div>
                        </div>

                        <div class="form-group">
                            <!-- <label for="name">Country code:</label><br> -->
                            <div class="input__item">
                                <input type="tel" id="telephone" name="phone_code" class="form-control">
                            </div>
                        </div>
                        <!-- <div class="input__item">
                                <input id="country_selector" type="text" name="country" required>
                            </div>
                            <div class="input__item">
                                <input type="tel" id="telephone" name="phone_code" required>
                            </div> -->
                        <div class="input__item">
                            <input type="password" placeholder="Password" name="password">
                            <span class="fa fa-lock"></span>
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <div class="input__item">
                            <input type="password" placeholder=" Confirm Password" name="password_confirmation">
                            <span class="fa fa-lock"></span>
                        </div>
                        <input type="hidden" value="c" name="is_admin">
                        <input type="hidden" value="1" name="status">
                        <button type="submit" class="site-btn">Register</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login__register">
                    <h3>Already Have An Account?</h3>
                    <a href="{{ url('user/login') }}" class="primary-btn">Login</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Login End -->

<!-- /.content -->
<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('front_assets/assets/js/countrySelect.js') }}"></script>
<script src="{{ asset('front_assets/assets/js/intlTelInput.js') }}"></script>
<script>
    $("#country_selector").countrySelect({
        defaultCountry: "us"
    });
</script>
<script>
    var input = document.querySelector("#telephone");
    intlTelInput(input, {
        initialCountry: "auto",
        geoIpLookup: function(success, failure) {
            $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "us";
                success(countryCode);
            });
        },
    });
</script>

@endsection