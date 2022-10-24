@extends('backend.master')

@section('content')

<div class="card">
	<div class="card-header">Edit Blog</div>
	<div class="card-body">
		<form method="post" action="{{ route('blogs.update', $blog->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Blog title</label>
				<div class="col-sm-10">
					<input type="text" name="title" class="form-control" value="{{ $blog->title }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Blog Description</label>
				<div class="col-sm-10">
					<input type="text" name="description" class="form-control" value="{{ $blog->description }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Blog Date</label>
				<div class="col-sm-10">
					<input type="text" name="date" class="form-control" value="{{ $blog->date }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Blog Writer</label>
				<div class="col-sm-10">
					<input type="text" name="writer" class="form-control" value="{{ $blog->writer }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Blog Image</label>
				<div class="col-sm-10">
					<input type="file" name="image" />
					<br />
					<img src="{{ asset('images/' . $blog->image) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_image" value="{{ $blog->image }}" />
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $blog->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')