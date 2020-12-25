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


        <h4 class="mt-4 offset-5">PRODUCTS</h4>
        <table class="table mt-4">
            <thead>
            <tr>
                <td scope="col">#</td>
                <td scope="col">User</td>
                <td scope="col">Comment</td>
                <td scope="col">Create date</td>
                <td scope="col">Functions</td>
            </tr>
            </thead>
            <tbody>
            @foreach($comments as $c)
                <tr>
                    <td>{{$c->id}}</td>
                    <td>{{$c->user->name. ' '. $c->user->username}}</td>
                    <td>{{$c->text}}</td>
                    <td>{{$c->created_at->format('d M Y H:i:s')}}</td>
                    <td class="row">
                        @if($c->accepted)
                            <form action="{{ route('comment.destroy', $c) }} " method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-secondary ml-2" onclick="return confirm('Are you sure?')" type="submit">
                                    Delete
                                </button>
                            </form>
                        @else
                            <a href="{{route('comment.edit', $c)}}" class="btn btn-secondary ml-2">Accept</a>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
