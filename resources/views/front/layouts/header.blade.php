<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Specer Template">
    <meta name="keywords" content="Specer, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fun Olympics | Home</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('front_assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front_assets/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front_assets/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front_assets/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front_assets/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front_assets/css/style.css') }}" type="text/css">
</head>

<body>
<!-- Offcanvas Menu Section Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="canvas-close">
        <i class="fa fa-close"></i>
    </div>
    <div class="search-btn search-switch">
        <i class="fa fa-search"></i>
    </div>
    <div class="header__top--canvas">
        <div class="ht-info">
            <ul>
                <li>
                    <script>
                        // const date = new Date();
                        // document.write(date);
                    </script>
                </li>
                <li><a href="{{ url('user/login') }}">Sign in</a></li>
                <li><a href="profile.php">Profile</a></li>
            </ul>
        </div>
        <div class="ht-links">
            <a href="#">Info@funolympics.com</a>
        </div>
    </div>
    <ul class="main-menu mobile-menu">
         <li><a href="{{ url('/') }}">Home</a></li>
         <li><a href="{{ url('/watch_live') }}">Watch Live</a></li>
         <li><a href="{{ url('/video') }}">Videos</a></li>
         <li><a href="{{ url('/news') }}">News</a></li>
         <li><a href="{{ url('/contact') }} ">Contact Us</a></li>
    </ul>
    <div id="mobile-menu-wrap"></div>
</div>
<!-- Offcanvas Menu Section End -->

<!-- Header Section Begin -->
<header class="header-section">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="ht-info">
                        <ul>
                            <li>
                                <script>
                                    const date = new Date();
                                    document.write(date);
                                </script>
                            </li>
                            @auth
                            <li><a href="{{ url('user/dashboard') }}"> {{ Auth::user()->name }}</a></li>
                            @else 
                            <li><a href="{{ url('user/login') }}">  Sign in </a></li>
                            @endauth
                           @auth
                          <li>
                                   <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                         </li>
                            @else
                             <li><a href="{{ url('user/dashboard') }}">Profile</a></li>@endauth
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ht-links">
                          <a href="#">Info@funolympics.com</a>
                
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('front_assets/img/logo.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="nav-menu">
                        <ul class="main-menu">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/watch_live') }}">Watch Live</a></li>
                            <li><a href="{{ url('/video') }}">Videos</a></li>
                            <li><a href="{{ url('/news') }}">News</a></li>
                            <li><a href="{{ url('/contact') }} ">Contact Us</a></li>
                        </ul>
                        <div class="nm-right search-switch">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas-open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->

  
 