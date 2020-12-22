@extends('layouts.master')
@section('content')
    <div class="container offset-2">
        <div class="mt-4 offset-3">
            <form method="post" action="{{route('services.update', $service)}}">
                @method('PATCH')
                @csrf
                <div class="form-group row">
                    <label for="control-label" class="col-sm-2 col-form-label">Service name</label>
                    <div class="col-sm-4">
                        <input type="text" name="name" class="form-control" value="{{old('name') ? old('name') : $service->name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="control-label" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-4">
                        <input type="text" name="price" class="form-control" value="{{old('price') ? old('price') : $service->price }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-secondary">EDIT Service</button>
            </form>
        </div>
    </div>
@endsection
