@extends('backend.master')
@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Associations</h1>
    <a href="{{ route('associations.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Add Association</a>
</div>
@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="card shadow mb-4">
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Image</th>
				<th>Name</th>
				<th>Localisation</th>
				<th>Description</th>
				<th>Responsable</th>
				<th>Action</th>
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						<td><img src="{{ asset('images/' . $row->image) }}" width="75" /></td>
						<td>{{ $row->name }}</td>
						<td>{{ $row->localisation }}</td>
						<td>{{ $row->description }}</td>
						<td>{{ $row->responsable }}</td>
						<td>
							<form method="post" action="{{ route('associations.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('associations.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
								<a href="{{ route('associations.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
							</form>
							
						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif
		</table>
		{!! $data->links() !!}
	</div>
</div>
</div>
@endsection