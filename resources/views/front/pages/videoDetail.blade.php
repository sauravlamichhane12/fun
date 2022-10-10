@extends('front.layouts.master')
@section('content')
   <!-- Banner Begin -->
   <section class="breadcrumb-section set-bg" data-setbg="{{ asset('front_assets/img/breadcrumb-bg.jpg') }}" style="background-image: url(&quot;front-assets/img/breadcrumb-bg.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bs-text">
                        <h2>{{ $video->title }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <section class="watch-live">
        <div class="container">
            <div class="row">
                @auth
                <div class="col-md-12">
                    <div class="video-wrapper">
                        <video id="streamedVideo" width="100%" height="500" controls>
                            <source src="{{ url('/') }}/public/storage/posts/{{  $video->video  }}" type="video/mp4">
                        </video>
                    </div>

                    <div class="video-info-wrapper">
                   <h3 class="title">{{ $video->title }}</h3>
                        <span class="category badge badge-info">{{ $video->category }}</span>
                        <h6 class="date">{{ $video->created_at }}</h6>
                    </div>

                </div>
 
                <div class="col-lg-8 col-md-10 col-12">
                <div id="disqus_thread"></div>
                @else
               

                @endauth

                    <!-- chat -->
                   <!-- <div class="comment-wrapper">
                        <h3 class="heading">Comment</h3>

                        <form>
                            <div class="form-group">
                                <textarea class="form-control status-box" rows="3" placeholder="Enter your comment here..."></textarea>
                            </div>
                        </form>
                        <div class="button-group pull-right">
                            <p class="counter">250</p>
                            <a href="#" class="btn btn-comment">Post</a>
                        </div>
                        <ul class="posts">
                        </ul>
                    </div>-->
                    <!-- chat end -->
                </div>
            </div>
        </div>
    </section>

    <!-- Soccer Section Begin -->
    <section class="soccer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="section-title">
                        <h3>More <span>Videos</span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @php
                $videos =App\Models\Video::all();
                @endphp
                @foreach($videos as $video)
                <div class="col-lg-3 mb-4">
                    <div class="video-item set-bg" data-setbg="{{ url('/') }}/public/storage/posts/{{ $video->thumbnail }}">
                        <div class="vi-title">
                            <h5>{{ $video->title }}</h5>
                        </div>
                        <a href="{{ route('videoDetail',$video->id) }}" class="play-btn"><img src="{{ asset('front_assets/img/play.png') }}" alt=""></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Soccer Section End -->

    <script src=
        "https://code.jquery.com/jquery-3.3.1.min.js">
    </script>
       @auth @else
    <script type="text/javascript">
  $(document).ready(function () {
    toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
        toastr.success("Please Login At First");
              
        });
</script>
@endauth
<script>
        var main = function() {
            $('.btn-comment').click(function() {
                var post = $('.status-box').val();
                $('<li>').text(post).prependTo('.posts');
                $('<span>').text('Username comes here').prependTo('.posts li')
                $('.status-box').val('');
                $('.counter').text('250');
                $('.btn').addClass('disabled');
            });
            $('.status-box').keyup(function() {
                var postLength = $(this).val().length;
                var charactersLeft = 250 - postLength;
                $('.counter').text(charactersLeft);
                if (charactersLeft < 0) {
                    $('.btn').addClass('disabled');
                } else if (charactersLeft === 250) {
                    $('.btn').addClass('disabled');
                } else {
                    $('.btn').removeClass('disabled');
                }
            });
        }
        $('.btn').addClass('disabled');
        $(document).ready(main)
    </script>
    <script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://localhost-0r8lfhr2ky.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>s
@endsection