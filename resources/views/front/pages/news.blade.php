@extends('front.layouts.master')
@section('content')
  <!-- Banner Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('front_assets/img/news-bg.jpg') }}" style="background-image: url(&quot;front-assets/img/breadcrumb-bg.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bs-text">
                        <!-- <h2>News</h2> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- Match Section -->
<section class="match-section set-bg mt-2" data-setbg="{{ asset('front_assets/img/match-bg.jpg') }}">
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
    <!-- Latest Section Begin -->
<section class="latest-section mt-5">
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
                            <li><i class="fa fa-calendar"></i> Oct 10, 2022</li>
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