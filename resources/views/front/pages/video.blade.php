@extends('front.layouts.master')
@section('content')
@php
$Videos=App\Models\Video::all();
@endphp

    <!-- Banner Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="https://www.thestreamingcompany.com/secure/contentPORT/uploads/images/feature-images/sports-and-gaming.jpg" style="background-image: url(&quot;front-assets/img/breadcrumb-bg.jpg&quot;);">
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

    <!-- Video Section Begin -->
    <section class="video-section mt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>Streamed <span>Videos</span></h3>
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
@endsection