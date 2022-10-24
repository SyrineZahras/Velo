@extends('backend.master')

@section('content')


    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Reclamation</h2>
                </div>
                <div class="pull-right mb-2">
                    <a href="{{ route('reclamations.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Add Reclamation</a>

                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                 
                    <th>Title Reclamation</th>
                    <th>Event Reclamation</th>
                    <th>Description</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reclamations as $reclamation)
                    <tr>
                        
                        <td>{{ $reclamation->titrereclamation }}</td>
                        <td>{{ $reclamation->nomevent }}</td>
                        <td>{!! html_entity_decode($reclamation->description) !!}</td>                        <td>
                            <form action="{{ route('reclamations.destroy',$reclamation->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('reclamations.edit',$reclamation->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $reclamations->links() !!}
    </div>
    @endsection('content')