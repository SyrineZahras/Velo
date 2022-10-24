@extends('backend.master')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Plan Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('plans.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Plan Time</b></label>
			<div class="col-sm-10">
				{{ $plan->time->format('H:i') }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Association Description</b></label>
			<div class="col-sm-10">
				{{ $plan->description }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Ride</b></label>
			<div class="col-sm-10">
				{{ $plan->ride_id }}
			</div>
		</div>
	</div>
</div>



@endsection('content')
