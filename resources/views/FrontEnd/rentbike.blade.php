@extends('frontend.master')
@section('front_content')
<section class="parallax-container" data-parallax-img="img/typography-title-bg.jpg">
    <div class="material-parallax parallax"><img src="img/typography-title-bg.jpg" alt="" style="display: block; transform: translate3d(-50%, 286px, 0px);"></div>
        <div class="parallax-content breadcrumbs-custom context-dark"> 
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-9">
                <h2 class="breadcrumbs-custom-title">Rent Bike </h2>
              </div>
            </div>
          </div>
        </div>
      </section>
<section
        class="section section-lg bg-default position-relative"
      >
        <div class="container container-relative">
        @if ($errors -> any())
					<div class="alert alert-danger">
						<ul>
							@foreach($errors->all() as $error)
							<li>
								{{$error}}
							</li>
							@endforeach
						</ul>
					</div>
		@endif
        <form class=""  method="post" action="{{route('locations.store')}}">
                @csrf
					<h3>Set The Location</h3>
                    <div class="form-input form-price">
						<label >Hourly Price </label>
						<span>{{$bike->prix}} DT</span>
					</div>
                    <div class="form-wrap">
						<label class="label-input">Full Name</label>
						<input name="username"  type="text" class="form-input ">
					</div>
                    <div class="form-wrap">
						<labels class="label-input">Mail</label>
						<input name="usermail"  type="mail" class="form-input">
					</div>					
					<div class="form-wrap">
						<label  class="label-input">Phone</label>
						<input name="userphone"  type="tel" class="form-input" pattern="[0-9]{8}">
					</div>
                    <div class="form-wrap">
						<label  class="label-input">Start Date</label>
						<input  name="startDate" type="datetime-local" class="form-input">
					</div>
					<div class="form-wrap">
						<label  class="label-input">Duration</label>
						<input  name="duration" type="number" class="form-input">
					</div>
					<input type="hidden" name="bikeid" value="{{$bike->id}}">
					<input type="hidden" name="userid" value="{{$user->id}}">
					
                <div class="row justify-content-center">
                  <div class="col-12 col-sm-7 col-lg-5">
                    <button type="submit" class="button button-block button-lg button-primary">Get bill</button>
                  </div>
                </div>
              </form>
        </div>
      </section>
@endsection