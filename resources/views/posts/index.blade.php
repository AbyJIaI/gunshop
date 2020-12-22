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

        <h4 class="mt-4 offset-5">POSTS</h4>
        <div class="mt-4 offset-2">
            <form method="post" action="{{route('posts.store')}}">
                @csrf
                <div class="form-group row">
                    <label for="control-label" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-6">
                        <input type="text" name="title" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="control-label" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-6">
                        <textarea type="text" name="description" class="form-control" style="height: 150px;"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-secondary" style="margin-left: 250px">ADD POST</button>
            </form>
        </div>
        <table class="table mt-4">
            <thead>
            <tr>
                <td scope="col">#</td>
                <td scope="col">Post title</td>
                <td scope="col">Description</td>
                <td scope="col">Functions</td>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td class="row"><a href="{{route('posts.edit', $post)}}" class="btn btn-secondary">Edit</a>
                        <form action="{{route('posts.destroy', $post)}}" method="post">
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
