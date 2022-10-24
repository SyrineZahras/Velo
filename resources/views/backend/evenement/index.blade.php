@extends('backend.master')

@section('content')


    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Our Events</h2>
                </div>
                <div class="pull-right mb-2">
                    <a href="{{ route('evenements.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Add Event</a>

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
                 
                    <th>Event Name</th>
                    <th>creator Email</th>
                    <th>Event Place</th>
                    <th>Event Date</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($evenements as $evenement)
                    <tr>
                        
                        <td>{{ $evenement->nameevent }}</td>
                        <td>{{ $evenement->themeevent }}</td>
                        <td>{{ $evenement->lieuevent }}</td>
                        <td>{{ $evenement->date->format('d/m/Y') }}</td>

                        <td>
                            <form action="{{ route('evenements.destroy',$evenement->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('evenements.edit',$evenement->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $evenements->links() !!}
    </div>
    @endsection('content')