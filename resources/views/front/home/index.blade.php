@extends('front.layouts.master')
@section('content')
@php

$liveVideos=App\Models\Video::where('status',1)->get();
$Videos=App\Models\Video::all();
@endphp

<!-- Hero Section Begin -->
<!-- <section class="hero-section"> -->
<!-- <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hs-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="hs-text">
                                        <h4>30 september 2019 / 9:00 GMT+0000</h4>
                                        <h2>Airrosten VS Lerenort in London</h2>
                                        <a href="#" class="primary-btn">More Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="height: 80vh;">
    <div class="carousel-inner">
        <div class="carousel-item active" style="height: 80vh;">
            <div class="carousel-overlay"></div>
            <img class="d-block w-100" src="https://images.pexels.com/photos/1080882/pexels-photo-1080882.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="First slide" style="object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
                <h6>30 November 2022 / 9:00 GMT+0000</h6>
                <h5>Airrosten VS Lerenort </h5>
                <a href="#" class="primary-btn">More Details</a>
            </div>
        </div>
        <div class="carousel-item" style="height: 80vh;">
            <div class="carousel-overlay"></div>
            <img class="d-block w-100" src="http://www.globaltimes.cn/Portals/0/attachment/2011/4e9c45da-032d-404a-aee4-1575ea82a9ac.jpeg" alt="Second slide" style="object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
                <h6>5 December 2022 / 9:00 GMT+0000</h6>
                <h5>China vs japan</h5>
                <a href="#" class="primary-btn">More Details</a>
            </div>
        </div>
        <div class="carousel-item" style="height: 80vh;">
            <div class="carousel-overlay"></div>
            <img class="d-block w-100" src="https://cdn-wp.thesportsrush.com/2019/06/GettyImages-1146221254.jpg" alt="Third slide" style="object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
                <h6> 7 December 2022 / 9:00 GMT+0000</h6>
                <h5>England vs Australia</h5>
                <a href="#" class="primary-btn">More Details</a>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- </section> -->
<!-- Hero Section End -->


<!-- Match Section -->
<section class="match-section set-bg " data-setbg="{{ asset('front_assets/img/match-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="ms-content">
                    <h4>Next Match</h4>
                    <div class="mc-table">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="left-team">
                                        <img src="{{ asset('front_assets/img/match/tf-1.jpg') }}" alt="">
                                        <h6>Usa</h6>
                                    </td>
                                    <td class="mt-content">
                                        <div class="mc-op">Usa vs Austrilia</div>
                                        <h4>VS</h4>
                                        <div class="mc-op">15 November 2022</div>
                                    </td>
                                    <td class="right-team">
                                        <img src="{{ asset('front_assets/img/match/tf-2.jpg') }}" alt="">
                                        <h6>Austrilia</h6>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mc-table">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="left-team">
                                        <img src="{{ asset('front_assets/img/match/tf-3.jpg') }}" alt="">
                                        <h6>philippines</h6>
                                    </td>
                                    <td class="mt-content">
                                        <div class="mc-op">Philipiens vs China</div>
                                        <h4>VS</h4>
                                        <div class="mc-op">20 November 2022</div>
                                    </td>
                                    <td class="right-team">
                                        <img src="{{ asset('front_assets/img/match/tf-4.jpg') }}" alt="">
                                        <h6>China</h6>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mc-table">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="left-team">
                                        <img src="{{ asset('front_assets/img/match/tf-5.jpg') }}" alt="">
                                        <h6>Iran</h6>
                                    </td>
                                    <td class="mt-content">
                                        <div class="mc-op">Iran vs Germany</div>
                                        <h4>VS</h4>
                                        <div class="mc-op">25 November 2022</div>
                                    </td>
                                    <td class="right-team">
                                        <img src="{{ asset('front_assets/img/match/tf-6.jpg') }}" alt="">
                                        <h6>Germany</h6>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ms-content">
                    <h4>Recent Results</h4>
                    <div class="mc-table">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="left-team">
                                        <img src="{{ asset('front_assets/img/match/tf-4.jpg') }}" alt="">
                                        <h6>China</h6>
                                    </td>
                                    <td class="mt-content">
                                        <div class="mc-op">China vs Iran</div>
                                        <h4>1 : 2</h4>
                                        <div class="mc-op">15 September 2022</div>
                                    </td>
                                    <td class="right-team">
                                        <img src="{{ asset('front_assets/img/match/tf-5.jpg') }}" alt="">
                                        <h6>Iran</h6>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mc-table">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="left-team">
                                        <img src="{{ asset('front_assets/img/match/tf-1.jpg') }}" alt="">
                                        <h6>Usa</h6>
                                    </td>
                                    <td class="mt-content">
                                        <div class="mc-op">Usa vs Philippiness</div>
                                        <h4>1 : 2</h4>
                                        <div class="mc-op">16 September 2022</div>
                                    </td>
                                    <td class="right-team">
                                        <img src="{{ asset('front_assets/img/match/tf-3.jpg') }}" alt="">
                                        <h6>Philippines</h6>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mc-table">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="left-team">
                                        <img src="{{ asset('front_assets/img/match/tf-2.jpg') }}" alt="">
                                        <h6>England</h6>
                                    </td>
                                    <td class="mt-content">
                                        <div class="mc-op">England vs Germany</div>
                                        <h4>1 : 2</h4>
                                        <div class="mc-op">22 September 2022</div>
                                    </td>
                                    <td class="right-team">
                                        <img src="{{ asset('front_assets/img/match/tf-6.jpg') }}" alt="">
                                        <h6 class="mi-right">Germany</h6>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Match Section End -->
<!-- Soccer Section Begin -->
<section class="soccer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="section-title">
                    <h3>Streaming <span>Now</span></h3>
                    <a href="{{ url('/watch_live') }}" class="view-more">View All →</a>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach($liveVideos as $liveVideo)
            <div class="col-lg-3 col-sm-6 p-0">
                <div class="soccer-item set-bg" data-setbg="{{ url('/') }}/public/storage/posts/{{  $liveVideo->thumbnail  }}">
                    <div class="si-tag">{{ $liveVideo->category }}</div>
                    <div class="si-text">
                        <h5><a href="{{ route('videoDetail',$liveVideo->id) }}">{{ $liveVideo->title }}</a></h5>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- Soccer Section End -->

<!-- Video Section Begin -->
<section class="video-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3> <span>Videos</span></h3>
                    <a href="{{ url('/video') }}" class="view-more">View All →</a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($Videos as $Video)
            <div class="col-lg-3 mb-4">
                <div class="video-item set-bg" data-setbg="{{ url('/') }}/public/storage/posts/{{  $Video->thumbnail  }}">
                    <div class="vi-title">
                        <h5>{{ $Video->title }}</h5>
                    </div>
                    <a href="{{ route('videoDetail',$Video->id) }}" class="play-btn"><img src="{{ asset('front_assets/img/play.png') }}" alt=""></a>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
<!-- Video Section End -->

<!-- Latest Section Begin -->
<section class="latest-section">
    <div class="container">
        <div class="section-title latest-title">
            <h3>Latest <span>News</span></h3>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="news-item left-news">
                    <div class="ni-pic set-bg" data-setbg="{{ asset('front_assets/img//news/ln-1.jpg') }}">
                        <div class="ni-tag">Soccer</div>
                    </div>
                    <div class="ni-text">
                        <h4><a href="#">Beijing 2022 news - Canada win football gold with shootout win over Sweden</a></h4>
                        <ul>
                            <li><i class="fa fa-calendar"></i> Oct 10 2022</li>
                            <li><i class="fa fa-edit"></i> 3 Comment</li>
                        </ul>
                        <p>Julia Grosso netted the winning penalty as Canada claimed their first-ever gold medal in football to break Sweden hearts after a dramatic shootout at Yokohama Stadium.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-item left-news">
                    <div class="ni-pic set-bg" data-setbg="{{ asset('front_assets/img//news/ln-2.jpg') }}">
                        <div class="ni-tag">Soccer</div>
                    </div>
                    <div class="ni-text">
                        <h4><a href="#">Medal Moment | Beijing 2022: Swimming Women's 200m Freestyle - A Titmus (AUS)</a></h4>
                        <ul>
                            <li><i class="fa fa-calendar"></i> Oct 17, 2022</li>
                            <li><i class="fa fa-edit"></i> 3 Comment</li>
                        </ul>
                        <p>A truly medal-worthy performance from A Titmus. Take a look at one of their greatest moments! Silver medallists at Tokyo 2020, Sweden looked on course to go one better</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-item left-news">
                    <div class="ni-pic set-bg" data-setbg="{{ asset('front_assets/img//news/ln-3.jpg') }}">
                        <div class="ni-tag">Soccer</div>
                    </div>
                    <div class="ni-text">
                        <h4><a href="#">2022 W: Brazil gets scared, but beats Czechs; USA and Dominican Republic earn convincing wins</a></h4>
                        <ul>
                            <li><i class="fa fa-calendar"></i> Oct 19, 2022</li>
                            <li><i class="fa fa-edit"></i> 3 Comment</li>
                        </ul>
                        <p>Brazil beat the Czech Republic in their first match of the Women’s World Championship 2022. Yes, the team commanded by Zé Roberto dropped a set in the Pool</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Section End -->



@endsection