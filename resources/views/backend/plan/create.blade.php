@extends('backend.master')

@section('content')


<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Rides</h1>
</div>

<div class="card shadow mb-4">
  <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Add Plan</h6>
   </div>
  <div class="card-body">
   <form class="user" method="post" action="{{ route('plans.store') }}" enctype="multipart/form-data">
	@csrf
	 <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
		 <label ><b>Plan Time</b></label>
         <input type="time" name="time" class="form-control form-control-user" />
		 @error('time')
         <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
		</div>
				
		<div class="col-sm-6">
		 <label><b>Plan Description</b></label>
		 <input type="input" name="description" class="form-control form-control-user" />
		 @error('description')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
         @enderror
		</div>
	 </div>

	 <div class="form-group row">
		<div class="col-sm-6 mb-3 mb-sm-0">
		 <label ><b>Ride</b></label>
	     <input type="input" name="ride_id" class="form-control form-control-user" />
		 @error('ride_id')
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
