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

    
    <a href="#"data-toggle="modal" data-target="#ModalCreate" class="btn btn-md mb-3"style="background-color:#4e73df;color:white">Ajouter option</a>

  <table class="table ">

    <thead>
        <tr>
          <td>Option</td>
          <td>couleur</td>
          <td>Prix</td>
          <td>Image</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($options as $option)
        <tr>
            <td>{{$option->option}}</td>
            <td><div id="cercle" style="background:{{ $option->couleur}}"></div></td>

            <td>{{$option->prix}}</td>
            <td><img src="{{ Storage::url('public/veloImg/').$option->imageUrl }}" class="rounded img" style="width: 60px;border-radius:5%" ></td>

            <td>
              <a href="#" data-toggle="modal" data-target="#ModalUpdate{{$option->id}}" class="btn"><i class='fas fa-edit'></i>
</a>
            <a href="#" class="btn"  data-toggle="modal" data-target="#ModalDelete{{$option->id}}"><i class='fas fa-trash-alt'style='color:red'></i>
</a>
</td>
            <td>

         
            </td>
        </tr>
        @include('backend.optionVelo.delete')

        @include('backend.optionVelo.update')

        @endforeach
    </tbody>
  </table>
<div>
<div style="margin-left:30%">
{!! $options->withQueryString()->links('pagination::bootstrap-5') !!}
</div>

@include('backend.optionVelo.create')

@endsection