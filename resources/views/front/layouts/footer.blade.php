   <!-- Header Begin -->
    <!-- Footer Section Begin -->
<footer class="footer-section set-bg" data-setbg="{{ asset('front_assets/img/footer-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="fs-logo">
                    <div class="logo">
                        <a href="./index.html"><img src="{{ asset('front_assets/img/logo.png') }}" alt=""></a>
                    </div>
                    <p class="text-white">
                        The City of Bayjing wons the bid to host FunOlympic Games 2022. This platform is the project to broadcast the games and reach all its audience all over the world.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 ">
                <div class="fs-widget">
                    <h4>Useful Links</h4>
                    <ul class="fw-links">
                        <li><a href="{{ url('/user/dashboard') }}">Account</a></li>
                        @Auth
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
                        <li><a href="{{ url('/user/login') }}">Login</a></li>
                        @EndAuth
                        <li><a href="{{ url('/watch_live') }}">Watch Live</a></li>
                        <li><a href="{{ url('/video') }}">Videos</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="fs-widget">
                    <div class="fs-logo">
                        <h4>Contact</h4>
                        <ul>
                            <li><i class="fa fa-envelope"></i> info@funolympics.com</li>
                            <li><i class="fa fa-phone"></i> +(12) 345 6789</li>
                            <li><i class="fa fa-map-marker"></i> 01 Tinkune Kathmandu City, Nepal</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="copyright-option">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="co-text">
                        <p class="text-center">Copyright &copy;2022</script> All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search model Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="fa fa-close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->
    <!-- Header End -->

    <!-- Js Plugins -->
    <script src="{{ asset('front_assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('front_assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front_assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('front_assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('front_assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front_assets/js/main.js') }}"></script>
    <link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
 @if(Session::has('success'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
        toastr.success("{{ session('success') }}");
  @endif

  @if ($errors->any())
  @foreach ($errors->all() as $error)
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
        toastr.success("These credentials do not match our records");
        @endforeach
        @endif
</script>

</body>

</html>