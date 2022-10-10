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
                <li><a href="login.php">Sign in</a></li>
                <li><a href="profile.php">Profile</a></li>
            </ul>
        </div>
        <div class="ht-links">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <ul class="main-menu mobile-menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="live-video-listing.php">Watch Live</a></li>
        <li><a href="video-listing.php">Videos</a></li>
        <li><a href="contact.php">Contact Us</a></li>
    </ul>
    <div id="mobile-menu-wrap"></div>
</div>
<!-- Offcanvas Menu Section End -->

<!-- Header Section Begin -->
<header class="header-section">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ht-info">
                        <ul>
                            <li>
                                <script>
                                    const date = new Date();
                                    document.write(date);
                                </script>
                            </li>
                            <li><a href="login.php">Sign in</a></li>
                            <li><a href="profile.php">Profile</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ht-links">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
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
                        <a href="index.php"><img src="{{ asset('front_assets/img/logo.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="nav-menu">
                        <ul class="main-menu">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="live-video-listing.php">Watch Live</a></li>
                            <li><a href="video-listing.php">Videos</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
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