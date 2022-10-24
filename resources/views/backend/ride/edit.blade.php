@extends('backend.master')

@section('content')

<div class="card">
	<div class="card-header">Edit Ride</div>
	<div class="card-body">
	<form class="user" method="post" action="{{ route('rides.update', $ride->id) }}" enctype="multipart/form-data">
	@csrf
	@method('PUT')
	 <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
		 <label ><b>Ride Date</b></label>
         <input type="date" name="date" class="form-control form-control-user" value="{{ $ride->date->format('Y-m-d') }}" />
		 @error('date')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
		</div>
				
		<div class="col-sm-6">
		 <label><b>Ride Location</b></label>
		 <input type="input" name="location" class="form-control form-control-user" value="{{ $ride->location }}"/>
		 @error('location')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
         @enderror
		</div>
	 </div>

	 <div class="form-group row">
		<div class="col-sm-6 mb-3 mb-sm-0">
		 <label ><b>Ride Time</b></label>
	     <input type="time" name="time" class="form-control form-control-user" value="{{ $ride->time->format('H:i') }}"/>
		 @error('time')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
         @enderror
		</div>
		<div class="col-sm-6">
		 <label><b>Ride Duration</b></label>
		 <input type="time" name="duration" class="form-control form-control-user" value="{{ $ride->duration->format('H:i') }}" />
		 @error('duration')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
         @enderror
		</div>
	 </div>

	 <div class="form-group row">
		<div class="col-sm-6 mb-3 mb-sm-0">
		 <label ><b>Ride Longtitude</b></label>
	     <input type="text" name="lng" class="form-control form-control-user" value="{{ $ride->lng }}"/>
		 @error('lng')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
         @enderror
		</div>
		<div class="col-sm-6 mb-3 mb-sm-0">
		 <label ><b>Ride Latitude</b></label>
	     <input type="text" name="lat" class="form-control form-control-user" value="{{ $ride->lat }}" />
		 @error('lat')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
         @enderror
		</div>
	 </div>

	 <div class="form-group row">
		<div class="col-sm-6 mb-3 mb-sm-0">
		 <label ><b>Ride Distance</b></label>
	     <input type="text" name="distance" class="form-control form-control-user" value="{{ $ride->distance }}" />
		 @error('distance')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
         @enderror
		</div>
		<div class="col-sm-6 mb-3 mb-sm-0">
		 <label ><b>Ride Status</b></label>
		 <select class="form-control" name="status">
          <option value="Waiting" selected="selected">Waiting</option>
          <option value="Finished">Finished</option>
          <option value="Cancelled">Cancelled</option>
		  <option value="Started">Started</option>                
        </select> 
		 @error('status')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
         @enderror
		</div>


	
	 </div>
			<div class="text-center">
			<input type="hidden" name="hidden_id" value="{{ $ride->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')