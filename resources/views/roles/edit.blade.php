@extends('layouts.master')
@section('content')
    <div class="container offset-2">
        <div class="mt-4 offset-3">
            <form method="post" action="{{route('roles.update', $role)}}">
                @method('PATCH')
                @csrf
                <div class="form-group row">
                    <label for="control-label" class="col-sm-2 col-form-label">Role name</label>
                    <div class="col-sm-4">
                        <input type="text" name="name" class="form-control" value="{{old('name') ? old('name') : $role->name }}">
                    </div>
                    <button type="submit" class="btn btn-secondary">EDIT Role</button>
                </div>
            </form>
        </div>
    </div>
@endsection
