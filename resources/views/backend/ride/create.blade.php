@extends('backend.master')

@section('content')


<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Rides</h1>
</div>

<div class="card shadow mb-4">
  <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Add Ride</h6>
   </div>
  <div class="card-body">
   <form class="user" method="post" action="{{ route('rides.store') }}" enctype="multipart/form-data">
	@csrf
	 <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
		 <label ><b>Ride Date</b></label>
         <input type="date" name="date" class="form-control form-control-user" />
		 @error('date')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
		</div>
				
		<div class="col-sm-6">
		 <label><b>Ride Location</b></label>
		 <input type="input" name="location" class="form-control form-control-user" />
		 @error('location')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
         @enderror
		</div>
	 </div>

	 <div class="form-group row">
		<div class="col-sm-6 mb-3 mb-sm-0">
		 <label ><b>Ride Time</b></label>
	     <input type="time" name="time" class="form-control form-control-user" />
		 @error('time')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
         @enderror
		</div>
		<div class="col-sm-6">
		 <label><b>Ride Duration</b></label>
		 <input type="time" name="duration" class="form-control form-control-user" />
		 @error('duration')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
         @enderror
		</div>
	 </div>

	 <div class="form-group row">
		<div class="col-sm-6 mb-3 mb-sm-0">
		 <label ><b>Ride Longtitude</b></label>
	     <input type="text" name="lng" class="form-control form-control-user" />
		 @error('lng')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
         @enderror
		</div>
		<div class="col-sm-6 mb-3 mb-sm-0">
		 <label ><b>Ride Latitude</b></label>
	     <input type="text" name="lat" class="form-control form-control-user" />
		 @error('lat')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
         @enderror
		</div>
	 </div>

	 <div class="form-group row">
		<div class="col-sm-6 mb-3 mb-sm-0">
		 <label ><b>Ride Distance</b></label>
	     <input type="text" name="distance" class="form-control form-control-user" />
		 @error('distance')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
         @enderror
		</div>

		<div class="col-sm-6 mb-3 mb-sm-0">
		 <label ><b>Ride Association</b></label>
	     <input type="text" name="association_id" class="form-control form-control-user" />
		 @error('association_id')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
         @enderror
		</div>
	 </div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>
</div>
@endsection('content')
