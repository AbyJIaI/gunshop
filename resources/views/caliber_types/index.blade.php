@extends('layouts.admin')
@section('content')
    <div class="container offset-2">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success</strong> {{session('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <h4 class="mt-4 offset-4">CALIBER TYPES</h4>
        <div class="mt-4 offset-2">
            <form method="post" action="{{ route('calibertype.store') }}">
                @csrf
                <div class="form-group row">
                    <label for="control-label" class="col-sm-3 col-form-label">Caliber type name</label>
                    <div class="col-sm-4">
                        <input type="text" name="name" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-secondary">ADD TYPE</button>
                </div>
            </form>
        </div>
        <table class="table mt-4">
            <thead>
            <tr>
                <td scope="col">#</td>
                <td scope="col">Caliber type name</td>
                <td scope="col">Functions</td>
            </tr>
            </thead>
            <tbody>
            @foreach($types as $g)
                <tr>
                    <td>{{$g->id}}</td>
                    <td>{{$g->name}}</td>
                    <td class="row"><a href="{{route('calibertype.edit', $g->id)}}" class="btn btn-secondary">Edit</a>
                        <form action="{{route('calibertype.destroy', $g->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-secondary ml-2" onclick="return confirm('Are you sure?')" type="submit">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
