@extends('backend.master')

@section('content')

@if($errors->any())



<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Associations</h1>
</div>

<div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Add Association</h6>
                                </div>
	<div class="card-body">
		<form class="user" method="post" action="{{ route('associations.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="form-group row">
                     <div class="col-sm-6 mb-3 mb-sm-0">
					 <label > <b>Association Name</b></label>

					<input type="text" name="name"  class="form-control form-control-user" />
				</div>
				
			<div class="col-sm-6">
				<label><b>Association Localisation</b></label>
					<input type="text" name="localisation" class="form-control form-control-user" />
			</div>

			</div>

			<div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
					 <label ><b>Association Description</b></label>
					<input type="text" name="description" class="form-control form-control-user" />
				</div>
				<div class="col-sm-6">
				<label><b>Association Creator</b></label>
				<input type="text" name="responsable" class="form-control form-control-user" />
			</div>
			</div>
			<div class="form-group row">
			<div class="col-sm-6">

			  <label><b>Association Image</b></label>
				<div class="col-sm-10">
					<input type="file" name="image"  />
				</div>
			</div>
			</div>
			{!! NoCaptcha::renderJs() !!}
			{!! NoCaptcha::display() !!}
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>
</div>
@endsection('content')
