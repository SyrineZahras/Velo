@extends('backend.master')

@section('content')

<div class="card">
	<div class="card-header">Edit Association</div>
	<div class="card-body">
		<form method="post" action="{{ route('associations.update', $association->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Association Name</label>
				<div class="col-sm-10">
					<input type="text" name="name" class="form-control" value="{{ $association->name }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Association Localisation</label>
				<div class="col-sm-10">
					<input type="text" name="localisation" class="form-control" value="{{ $association->localisation }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Association Description</label>
				<div class="col-sm-10">
					<input type="text" name="description" class="form-control" value="{{ $association->description }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Association Responsable</label>
				<div class="col-sm-10">
					<input type="text" name="responsable" class="form-control" value="{{ $association->responsable }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Association Image</label>
				<div class="col-sm-10">
					<input type="file" name="image" />
					<br />
					<img src="{{ asset('images/' . $association->image) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_image" value="{{ $association->image }}" />
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $association->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')