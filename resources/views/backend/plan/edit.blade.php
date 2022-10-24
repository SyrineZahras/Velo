@extends('backend.master')

@section('content')

<div class="card">
	<div class="card-header">Edit Plan</div>
	<div class="card-body">
	<form class="user" method="post" action="{{ route('plans.update', $plan->id) }}" enctype="multipart/form-data">
	@csrf
	@method('PUT')
	 <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
		 <label ><b>Plan Time</b></label>
         <input type="time" name="time" class="form-control form-control-user" value="{{ $plan->time->format('H:i') }}" />
		 @error('time')
         <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
		</div>
				
		<div class="col-sm-6">
		 <label><b>Plan Description</b></label>
		 <input type="input" name="description" class="form-control form-control-user" value="{{ $plan->description }}"/>
		 @error('description')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
         @enderror
		</div>
	 </div>

	 <div class="form-group row">
		<div class="col-sm-6 mb-3 mb-sm-0">
		 <label ><b>Ride</b></label>
	     <input type="input" name="ride_id" class="form-control form-control-user" value="{{ $plan->ride_id }}"/>
		 @error('ride_id')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
         @enderror
		</div>
	 </div>

				<div class="text-center">
			<input type="hidden" name="hidden_id" value="{{ $plan->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')