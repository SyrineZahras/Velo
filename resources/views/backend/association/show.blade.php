@extends('backend.master')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Association Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('associations.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Association Name</b></label>
			<div class="col-sm-10">
				{{ $association->name }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Association Localisation</b></label>
			<div class="col-sm-10">
				{{ $association->localisation }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Association Description</b></label>
			<div class="col-sm-10">
				{{ $association->description }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Association Responsable</b></label>
			<div class="col-sm-10">
				{{ $association->responsable }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Association Image</b></label>
			<div class="col-sm-10">
				<img src="{{ asset('images/' .  $association->image) }}" width="200" class="img-thumbnail" />
			</div>
		</div>
	</div>
</div>








@endsection('content')
