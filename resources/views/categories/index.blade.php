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

        <h4 class="mt-4 offset-5">CATEGORIES</h4>
        <div class="mt-4 offset-3">
            <form method="post" action="{{route('category.store')}}">
                @csrf
                <div class="form-group row">
                    <label for="control-label" class="col-sm-2 col-form-label">Category name</label>
                    <div class="col-sm-4">
                        <input type="text" name="name" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="control-label" class="col-sm-2 col-form-label" >Base category:</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="category_id">
                            {{-- @if($categories!=null){
                            @foreach ($categories as $category) {
                            <option value="{{$category->id}}">{{ $category->name }}</option>
                            @endforeach
                            @endif --}}
                            <option value="">Select</option>
                            <option value="">Base class1</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-secondary" style="margin-left: 150px">ADD CATEGORY</button>
            </form>
        </div>
        <table class="table mt-4">
            <thead>
            <tr>
                <td scope="col">#</td>
                <td scope="col">Category name</td>
                <td scope="col">Parent category id</td>
                <td scope="col">Functions</td>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $g)
                <tr>
                    <td>{{$g->id}}</td>
                    <td>{{$g->name}}</td>
                    <td>{{$g->category_id != null ? $g->category_id : "Nothing"}}</td>
                    <td class="row"><a href="{{route('category.edit', $g)}}" class="btn btn-secondary">Edit</a>
                        <form action="{{route('category.destroy', $g)}}" method="post">
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
