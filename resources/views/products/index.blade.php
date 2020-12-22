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
        <div class="mt-4 offset-3">
            <form method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
                @csrf
                @include('errors')
                <div class="form-group row">
                    <label for="control-label" class="col-sm-2 col-form-label">Product name</label>
                    <div class="col-sm-4">
                        <input type="text" name="name" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="control-label" class="col-sm-2 col-form-label">Product price</label>
                    <div class="col-sm-4">
                        <input type="text" name="price" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="control-label" class="col-sm-2 col-form-label" >Amount:</label>
                    <div class="col-sm-4">
                        <input type="text" name="amount" class="form-control">
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
                <div class="form-group row">
                    <label for="control-label" class="col-sm-2 col-form-label" >Sub category:</label>
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
                <div class="form-group row">
                    <label for="control-label" class="col-sm-2 col-form-label" >Brand:</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="brand_id">
                            <option value="">Select</option>
                            @if($brands!=null){
                                @foreach ($brands as $brand) {
                                    <option value="{{$brand->id}}">{{ $brand->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="control-label" class="col-sm-2 col-form-label" >Caliber type:</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="caliber_id">
                            {{-- @if($types!=null){
                            @foreach ($types as $type) {
                            <option value="{{$type->id}}">{{ $type->name }}</option>
                            @endforeach
                            @endif --}}
                            <option value="">Select</option>
                            <option value="">243 rem</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="control-label" class="col-sm-2 col-form-label" >Select a file:
                        <i class="fa fa-download"></i>
                    </label>
                    <div class="col-sm-4">
                        <input id="image" type="file" name="image" accept="image/*" onchange="readURL(this);">
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                    </div>
                </div>
                <button type="submit" class="btn btn-secondary" style="margin-left: 150px">ADD PRODUCT</button>
            </form>
        </div>
        <table class="table mt-4">
            <thead>
            <tr>
                <td scope="col">#</td>
                <td scope="col">Product name</td>
                <td scope="col">Functions</td>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $g)
                <tr>
                    <td>{{$g->id}}</td>
                    <td>{{$g->name}}</td>
                    <td class="row">
                        <a href="{{route('products.edit', $g)}}" class="btn btn-secondary">Edit</a>
                        <a href="{{route('products.show', $g)}}" class="btn btn-secondary ml-2">Show</a>
                        <form action="{{route('products.destroy', $g)}}" method="post">
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
