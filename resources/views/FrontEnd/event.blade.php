@extends('frontend.master')
@section('front_content')
<section class="parallax-container" data-parallax-img="img/typography-title-bg.jpg">
    <div class="material-parallax parallax"><img src="img/typography-title-bg.jpg" alt="" style="display: block; transform: translate3d(-50%, 286px, 0px);"></div>
        <div class="parallax-content breadcrumbs-custom context-dark"> 
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-9">
                <h2 class="breadcrumbs-custom-title">Events </h2>
              </div>
            </div>
          </div>
        </div>
      </section>
<section
        class="section section-lg bg-default text-center position-relative"
      >
        <div class="container container-relative">
          <h3>Featured Events</h3>
          <div class="row row-50 row-offset-big">
          @foreach ($evenements as $evenement)

            <div class="col-12">
              <div
                class="event-item-classic wow slideInleft"
                style="visibility: hidden; animation-name: none"
              >
                <div class="event-item-classic-figure">
                    <img
                      src="img/user-1-109x109.jpg"
                      alt=""
                      width="109"
                      height="109"
                  />
                </div>
                <div class="event-item-classic-caption">
                  <p class="events-time">{{$evenement -> date->format('d/m/Y')}}</p>
                  <h4 class="event-item-classic-title">
                    <a href="events.html">{{ $evenement -> nameevent}}</a>
                  </h4>
                  <h5>
                    Address:
                    <a href="#"
                      >{{ $evenement -> lieuevent}}</a
                    > <span></span>
                  </h5>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <div
          class="cross-wrap cross-11"
          data-parallax-scroll='{"y": -150, "x": 0,  "smoothness": 60 }'
          style="
            transform: translate3d(0px, -133.696px, 0px) rotateX(0deg)
              rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1);
            -webkit-transform: translate3d(0px, -133.696px, 0px) rotateX(0deg)
              rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1);
          "
        >
          <div class="cross">
            <span></span><span></span><span></span><span></span>
          </div>
        </div>
        <div
          class="cross-wrap cross-12"
          data-parallax-scroll='{"y": 100, "x": 0,  "smoothness": 70 }'
          style="
            transform: translate3d(0px, 89.171px, 0px) rotateX(0deg)
              rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1);
            -webkit-transform: translate3d(0px, 89.171px, 0px) rotateX(0deg)
              rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1);
          "
        >
          <div class="cross">
            <span></span><span></span><span></span><span></span>
          </div>
        </div>
      </section>
@endsection