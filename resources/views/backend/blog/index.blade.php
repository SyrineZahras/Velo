@extends('backend.master')
@section('content')
<div class="container-fluid">


<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Blogs</h1>
    <a href="{{ route('blogs.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Add Blog</a>
</div>
@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<br>

@if(count($data) > 0)

				@foreach($data as $row)
				<div class="container">
<div class="card">
    <div class="card-header">
      <img src="{{ asset('images/' . $row->image) }}" alt="rover" />
    </div>
    <div class="card-body">
    <span class="tag tag-pink">{{ $row->writer }}</span>
      <h4>
      {{ $row->title }}
      </h4>
      <p>
      {{ $row->description }}
      </p>
      <div class="user">
        <div class="user-info">
          <h5>{{ $row->date }} </h5>
        </div>
      </div>
    </div>
	<form method="post" action="{{ route('blogs.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('blogs.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
								<a href="{{ route('blogs.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
							</form>
  </div>
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

@endsection