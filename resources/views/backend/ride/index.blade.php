@extends('backend.master')
@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Rides Management</h1>
    <a href="{{ route('rides.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Add Ride</a>
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
                        <th>Location</th>
                        <th>Date</th>						
                        <th>Status</th>		
                        <th>Time</th>						
                        <th>Distance</th>
                        <th>Duration</th>						
                        <th>Longtitude</th>						
                        <th>Latitude</th>						
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @if(count($data) > 0) 
                    @foreach($data as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->location }}</td>
                        <td>{{ $row->date->format('d/m/Y') }}</td>
                      <td>
                          @if($row->status == \App\Enums\RideStatus::Waiting) 
                             <span class="status text-success">•</span>
                          @elseif($row->status == \App\Enums\RideStatus::Cancelled)
                             <span class="status text-danger">•</span>
                          @elseif($row->status == \App\Enums\RideStatus::Finished)
                             <span class="status text-warning">•</span>
                          @elseif($row->status === \App\Enums\RideStatus::Started)
                             <span class="status text-info">•</span>
                          @endif   
                        {{ $row->status }}
                        </td>                 
                        <td> {{ $row->time->format('H:i') }} </td>
                        <td>{{ $row->distance  }}</td>
                        <td>{{ $row->duration->format('H:i') }}</td>
                        <td>{{ $row->lng }}</td>
                        <td>{{ $row->lat }}</td>
                        <td>	

                        <form method="post" action="{{ route('rides.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('rides.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
								<a href="{{ route('rides.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
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