@extends('backend.master')
@section('content')   

<a href="{{ route('locationvelo.create', ['user'=>$user->id ,'bike'=> $bike->id]) }}"  class="btn btn-md btn-success mb-3">Ajouter Location</a>

<table class="table table-striped">

    <thead>
        <tr>
          <td>Image</td>
          <td>Marque</td>
          <td>Prix</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($locationvelos as $locationvelo)
        <tr>
            <td>{{$locationvelo->bike_id}}</td>
            <td>{{$locationvelo->startDate}}</td>
            <td>{{$locationvelo->duration}} hours</td>
            <td><a href="#" class="btn btn-primary" >Edit</a></td>
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
    </tbody>
  </table>
  @endsection