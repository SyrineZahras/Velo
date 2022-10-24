@extends('backend.master')
@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Plan Management</h1>
    <a href="{{ route('plans.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Add Plan</a>
</div>
@if($message = Session::get('success'))
<div class="alert alert-success">
	{{ $message }}
</div>
@endif  

<div class="card shadow mb-4">
	<div class="card-body">
    <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Ride</th>						
                        <th>Time</th>
                        <th>Description</th>		
                        <th>Actions</th>						
                    </tr>
                </thead>
                <tbody>
                @if(count($data) > 0) 
                    @foreach($data as $row)
                    <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->ride_id }}</td>

                        <td>{{ $row->time->format('H:i') }}</td>
                        <td>{{ $row->description }}</td>               
                        <td>	
                        <form method="post" action="{{ route('plans.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('plans.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
								<a href="{{ route('plans.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                            </form>
						</td>
                    </tr>
                    @endforeach

                    @else
                    <tr>
					<td colspan="10" class="text-center">No Data Found</td>
                    @endif
				</tr>
                </tbody>
            </table>
            <div  class="float-right">
            {!! $data->links() !!}
            </div>

	</div>
</div>
</div>
@endsection