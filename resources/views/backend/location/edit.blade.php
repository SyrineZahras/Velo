@extends('backend.master')

@section('content')

<div class="card">
	<div class="card-header">Edit Velo</div>
	<div class="card-body">
	<form class="user" method="post" action="{{ route('locations.update', $location->id) }}" enctype="multipart/form-data">
	@csrf
	@method('PUT')
	 <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
		 <label ><b>Username</b></label>
         <input type="text" name="username" class="form-control form-control-user" value="{{ $location -> username }}" />
		 @error('username')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
		</div>
				
		<div class="col-sm-6">
		 <label><b>User Email</b></label>
		 <input type="text" name="usermail" class="form-control form-control-user" value="{{ $location -> usermail }}"/>
		 @error('usermail')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
         @enderror
		</div>
	 </div>

	 <div class="form-group row">
		<div class="col-sm-6 mb-3 mb-sm-0">
		 <label ><b>User Phone</b></label>
	     <input type="text" name="userphone" class="form-control form-control-user" value="{{ $location ->userphone }}"/>
		 @error('userphone')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
         @enderror
		</div>
		<div class="col-sm-6">
		 <label><b>Bike Rent Date</b></label>
		 <input type="text" name="duration" class="form-control form-control-user" value="{{ $location ->duration }}" />
		 @error('duration')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
         @enderror
		</div>
	 </div>
	
	 </div>
			<div class="text-center">
			<input type="hidden" name="hidden_id" value="{{ $location ->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')