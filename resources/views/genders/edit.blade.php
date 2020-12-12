@extends('layouts.master')
@section('content')
    {{ dd($genders) }}
    <div class="container offset-2">
        <div class="mt-4 offset-3">
            <form method="post" action="{{route('genders.update', $genders)}}">
                @method('PATCH')
                @csrf
                <div class="form-group row">
                    <label for="control-label" class="col-sm-2 col-form-label">Brand name</label>
                    <div class="col-sm-4">
                        <input type="text" name="name" class="form-control" value="{{old('name') ? old('name') : $genders->name }}">
                    </div>
                    <button type="submit" class="btn btn-secondary">EDIT BRAND</button>
                </div>
            </form>
        </div>
    </div>
@endsection
