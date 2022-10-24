@extends('backend.master')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Blog Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('blogs.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Blog Title</b></label>
			<div class="col-sm-10">
				{{ $blog->title }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Blog Description</b></label>
			<div class="col-sm-10">
				{{ $blog->description }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Blog Date</b></label>
			<div class="col-sm-10">
				{{ $blog->date }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Blog Writer</b></label>
			<div class="col-sm-10">
				{{ $blog->writer }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Blog Image</b></label>
			<div class="col-sm-10">
				<img src="{{ asset('images/' .  $blog->image) }}" width="200" class="img-thumbnail" />
			</div>
		</div>
	</div>
</div>








@endsection('content')