<!-- index.blade.php -->

@extends('backend.master')
@section('content')       


<style>
#cercle {
    width: 40px;
    height: 40px;
    border-radius: 20px;
}
table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
tr:hover {background-color: #C2C5CE;}
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

  
    <a href="#"data-toggle="modal" data-target="#ModalCreate" class="btn btn-md mb-3"style="background-color:#4e73df;color:white">Ajouter vélo</a>

  <table class="table ">

    <thead>
        <tr>
          <td>Marque</td>
          <td>Couleur</td>

          <td>Type</td>
          <td>Prix</td>
          <td>Image</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($bikes as $bike)
        <tr>
            <td>{{$bike->marque}}</td>
            <td><div id="cercle" style="background:{{ $bike->couleur}}"></div></td>

            <td>{{$bike->type}}</td>

            <td>{{$bike->prix}}</td>
            <td><img src="{{ Storage::url('public/veloImg/').$bike->imageUrl }}" class="rounded img" style="width: 60px;border-radius:5%" ></td>

            <td>
              <a href="#" data-toggle="modal" data-target="#ModalUpdate{{$bike->id}}" class="btn"><i class='fas fa-edit'></i>
</a>
            <a href="#" class="btn"  data-toggle="modal" data-target="#ModalDelete{{$bike->id}}"><i class='fas fa-trash-alt'style='color:red'></i>
</a>
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
<div style="margin-left:30%">
{!! $bikes->withQueryString()->links('pagination::bootstrap-5') !!}
</div>

@include('backend.velo.create')

@endsection