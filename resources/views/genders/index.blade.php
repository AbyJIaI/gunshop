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

        <h4 class="mt-4 offset-5">GENDERS</h4>
        <div class="mt-4 offset-3">
            <form method="post" action="{{route('genders.store')}}">
                @csrf
                <div class="form-group row">
                    <label for="control-label" class="col-sm-2 col-form-label">Gender name</label>
                    <div class="col-sm-4">
                        <input type="text" name="name" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-secondary">ADD GENDER</button>
                </div>
            </form>
        </div>
        <table class="table mt-4">
            <thead>
            <tr>
                <td scope="col">#</td>
                <td scope="col">Gender name</td>
                <td scope="col">Functions</td>
            </tr>
            </thead>
            <tbody>
            @foreach($genders as $gender)
                <tr>
                    <td>{{$gender->id}}</td>
                    <td>{{$gender->name}}</td>
                    <td class="row"><a href="{{route('genders.edit', $gender)}}" class="btn btn-secondary">Edit</a>
                        <form action="{{route('genders.destroy', $gender)}}" method="post">
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
