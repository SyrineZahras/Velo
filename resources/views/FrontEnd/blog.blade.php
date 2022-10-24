@extends('frontend.master')
@section('front_content')
<section class="parallax-container" data-parallax-img="img/typography-title-bg.jpg">
    <div class="material-parallax parallax"><img src="img/typography-title-bg.jpg" alt="" style="display: block; transform: translate3d(-50%, 286px, 0px);"></div>
        <div class="parallax-content breadcrumbs-custom context-dark"> 
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-9">
                <h2 class="breadcrumbs-custom-title">Blogs </h2>
              </div>
            </div>
          </div>
        </div>
      </section>
      <br/>


<section class="section-lg bg-default position-relative">
        <div class="container wow-outer container-relative">
          <!-- Owl Carousel-->
       
          <div class="owl-carousel owl-dots-dark wow fadeInUp" data-items="1" data-md-items="2" data-lg-items="3" data-dots="true" data-nav="false" data-stage-padding="15" data-loop="false" data-margin="15" data-mouse-drag="false">
          @if(count($data) > 0) 
       @foreach($data as $row)
          <div class="post-corporate post-corporate-img-bg">
              <div class="post-corporate-bg" style="background-image: url({{ asset('images/' . $row->image) }}); background-size: cover;"></div><a class="badge post-corporate-badge" href="#">{{ $row->date }}</a>
              <h4 class="post-corporate-title"><a href="blog-post.html">{{$row -> title}}</a></h4>
              <div class="post-corporate-text">
                <p>{{ $row->description }}</p>
              </div><a class="post-corporate-link" href="blog-post.html">Read more<span class="icon linearicons-arrow-right"></span></a>
            </div>
            @endforeach

          </div>
        @else
        <div class="col-lg-6 wow-outer">
              <div class="wow slideInRight" style="visibility: visible; animation-name: slideInRight">
                <strong><small>No Data Found</small></strong>
              </div>
        </div>
        @endif
        </div>
      </section>
@endsection