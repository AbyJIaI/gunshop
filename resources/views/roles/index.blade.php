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

        <h4 class="mt-4 offset-5">BRANDS</h4>
        <div class="mt-4 offset-3">
            <form method="post" action="{{route('roles.store')}}">
                @csrf
                <div class="form-group row">
                    <label for="control-label" class="col-sm-2 col-form-label">Role name</label>
                    <div class="col-sm-4">
                        <input type="text" name="name" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-secondary">ADD ROLE</button>
                </div>
            </form>
        </div>
        <table class="table mt-4">
            <thead>
            <tr>
                <td scope="col">#</td>
                <td scope="col">Role name</td>
                <td scope="col">Functions</td>
            </tr>
            </thead>
            <tbody>
            @foreach($roles as $r)
                <tr>
                    <td>{{$r->id}}</td>
                    <td>{{$r->name}}</td>
                    <td class="row"><a href="{{route('roles.edit', $r)}}" class="btn btn-secondary">Edit</a>
                        <form action="{{route('roles.destroy', $r)}}" method="post">
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
