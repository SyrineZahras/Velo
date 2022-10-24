@extends('frontend.master')
@section('front_content')
<section class="parallax-container" data-parallax-img="img/typography-title-bg.jpg">
    <div class="material-parallax parallax"><img src="img/typography-title-bg.jpg" alt="" style="display: block; transform: translate3d(-50%, 286px, 0px);"></div>
        <div class="parallax-content breadcrumbs-custom context-dark"> 
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-9">
                <h2 class="breadcrumbs-custom-title">Associations </h2>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section
        class="section section-lg bg-default"
      >
        <div class="container">
          <div class="row row-50 row-offset-big">
          @if(count($data) > 0)

@foreach($data as $row)

  <div class="card">
    <div class="card-header">
      <img src="{{ asset('images/' . $row->image) }}" alt="rover" />
    </div>
    <div class="card-body">
    <span class="tag tag-pink">📍 {{ $row->localisation }}</span>
      <h4>
      {{ $row->name }}
      </h4>
      <p>
      {{ $row->description }}
      </p>
      <div class="user">
        <div class="user-info">
          <h5>{{ $row->responsable}}</h5>
          <small>Responsable(s)</small>
          <a href="/user-association-details">
          <button class="btn btn-primary"> View Details </button>
          </a>
        </div>
      </div>
    </div>
  </div>
@endforeach
@else	
<span class="text-center">No Data Found</span>			
@endif

<div class="float-right">
{!! $data->links() !!}
</div>	 
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

        </div>
      </section>
<section class="section section-lg bg-default text-center position-relative">
<div class="a-container">

</div>
</section>



@endsection