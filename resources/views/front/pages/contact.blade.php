@extends('front.layouts.master')
@section('content')
  <!-- Banner Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="https://www.axisbank.com/images/default-source/revamp_new/contact-us/contactus.jpg" style="background-image: url(&quot;front-assets/img/breadcrumb-bg.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bs-text">
                      
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
                        <h3>Your Message</h3>
                        <form  action="{{ url('/create') }}" method="post">
                        @csrf

                            <div class="input__item">
                                <input type="text" placeholder="Full Name" name="name">
                                <span class="fa fa-user"></span>
                            </div>
                            <div class="input__item">
                                <input type="email" placeholder="Email Address" name="email">
                                <span class="fa fa-envelope"></span>
                            </div>
                            <div class="input__item">
                                <input type="text"  name="subject" placeholder="Subject*">
                           
                            </div>
                            <div class="input__item textarea-item">
                                <textarea name="message" id="" rows="5" placeholder="Message..." class="form-control"></textarea>
                            </div>
                            <button type="submit" class="site-btn">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact__info">
                        <h3>Contact Info</h3>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page. Good contact information makes you look accessible. And that in turn makes people trust you
                        </p>
                        <ul>
                            <li><i class="fa fa-envelope mr-3"></i> info@funolympics.com </li>
                            <li><i class="fa fa-phone mr-3"></i> +(12) 345 6789 </li>
                            <li><i class="fa fa-map-marker mr-3"></i> 01 Tinkune Kathmandu City, Nepal</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login End -->


@endsection