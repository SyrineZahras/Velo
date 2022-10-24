@extends('backend.master')
@section('content')   

<a href="{{ route('locationvelo.create', ['user'=>$user->id ,'bike'=> $bike->id]) }}"  class="btn btn-md btn-success mb-3">Ajouter Location</a>

@if($message = Session::get('success'))
<div class="alert alert-success">
	{{ $message }}
</div>
@endif  
<table class="table table-striped">

    <thead>
        <tr>
          <td>#</td>
          <td>Rent date</td>
          <td>User Name</td>
          <td>User Mail</td>
          <td>Rent Duration</td>

          <td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
       @if(count($locationvelos) > 0) 
        @foreach($locationvelos as $locationvelo)
        <tr>
            <td>{{$locationvelo->bike_id}}</td>
            <td>{{$locationvelo->startDate}}</td>
            <td>{{$locationvelo->username}}</td>
            <td>{{$locationvelo->usermail}}</td>
            <td>{{$locationvelo->duration}} hours</td>
            <td><a href="{{ route('locations.edit', $locationvelo->id) }}" class="btn btn-primary" >Edit</a></td>
            <td>
                <a href="#" class="btn btn-danger" onclick="if(confirm('Are you sure you want to delete it ?')){document.getElementById('form-{{$locationvelo->id}}').submit() }">Delete</a>
                <form id="form-{{$locationvelo->id}}" action="{{ route('locationvelo.destroy', ['locationvelo'=>$locationvelo->id]) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="delete">
                </form>
            </td>
            <td>
               
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
  @endsection