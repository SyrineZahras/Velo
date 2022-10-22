<!-- index.blade.php -->

@extends('backend.master')
@section('content')       


<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="uper">

    <div class="alert alert-success">
    </div><br />
    <a href="{{ route('bikes.create') }}" class="btn btn-md btn-success mb-3">Ajouter vélo</a>

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
        @foreach($bikes as $bike)
        <tr>
            <td><img src="{{ Storage::url('public/veloImg/').$bike->imageUrl }}" class="rounded" style="width: 60px;border-radius:5%"></td>
            <td>{{$bike->marque}}</td>
            <td>{{$bike->prix}}</td>
            <td><a href="{{ route('bikes.edit', $bike->id) }}" class="btn btn-primary">Modifier</a></td>
            <td>
               
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>

@endsection