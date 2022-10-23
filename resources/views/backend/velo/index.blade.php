<!-- index.blade.php -->

@extends('backend.master')
@section('content')       


<style>
  .uper {
    margin-top: 40px;
  }
.img:hover{
-ms-transform: scale(6.5); /* IE 9 */
-webkit-transform: scale(6.5); /* Safari 3-8 */
transform: scale(6.5);
}
.img{
width: 200px;
transition: transform .1s;
}
</style>

<div class="uper">

    <div class="alert alert-success">
    </div><br />
    <a href="#"data-toggle="modal" data-target="#ModalCreate" class="btn btn-md btn-success mb-3">Ajouter vélo</a>

  <table class="table table-striped">

    <thead>
        <tr>
          <td>Marque</td>
          <td>Prix</td>
          <td>Image</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($bikes as $bike)
        <tr>
            <td>{{$bike->marque}}</td>
            <td>{{$bike->prix}}</td>
            <td><img src="{{ Storage::url('public/veloImg/').$bike->imageUrl }}" class="rounded img" style="width: 60px;border-radius:5%" ></td>

            <td>
              <a href="#" data-toggle="modal" data-target="#ModalUpdate{{$bike->id}}" class="btn btn-primary">Modifier</a>
            <a href="#" class="btn btn-danger"  data-toggle="modal" data-target="#ModalDelete{{$bike->id}}">Supprimer</a>
</td>
            <td>

            <!-- <form onsubmit="return confirm('Are you sure you want to delete {{$bike->marque}} ?');" action="{{ route('bikes.destroy', $bike->id) }}" method="POST">
                                             @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
</form> -->
            </td>
        </tr>
        @include('backend.velo.delete')

        @include('backend.velo.update')

        @endforeach
    </tbody>
  </table>
<div>
@include('backend.velo.create')

@endsection