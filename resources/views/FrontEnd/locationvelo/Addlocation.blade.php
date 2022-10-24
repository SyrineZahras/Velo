@extends('backend.master')
@section('content')   	
        <div class="wrapper">
			<div class="inner">
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
				<form method="post" action="{{route('locationvelo.store')}}">
					@csrf
					<h3>Set The Location</h3>
					<div class="form-wrapper form-price">
						<label >Hourly Price </label>
						<span>{{$bike->prix}} DT</span>
					</div>
                    <div class="form-wrapper">
						<label  class="label-input">Full Name</label>
						<input name="username"  type="text" class="form-control">
					</div>
                    <div class="form-wrapper">
						<labels class="label-input">Mail</label>
						<input name="usermail"  type="mail" class="form-control">
					</div>					
					<div class="form-wrapper">
						<label  class="label-input">Phone</label>
						<input name="userphone"  type="tel" class="form-control" pattern="[0-9]{8}">
					</div>
                    <div class="form-wrapper">
						<label  class="label-input">Start Date</label>
						<input  name="startDate" type="datetime-local" class="form-control">
					</div>
					<div class="form-wrapper">
						<label  class="label-input">Duration</label>
						<input  name="duration" type="number" class="form-control">
					</div>
					<input type="hidden" name="bikeid" value="{{$bike->id}}">
					<input type="hidden" name="userid" value="{{$user->id}}">
					
					<button type="submit" class="btn btn-primary">Get bill</button>
					
				</form>
			</div>
		</div>
        @endsection