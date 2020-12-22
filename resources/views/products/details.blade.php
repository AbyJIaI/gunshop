@extends('layouts.admin')
@section('content')
<div class="container">
    <h1>Product name: {{ $product->name }}</h1>
    <h2>Price: {{ $product->price }}</h2>
    <h2>Amount: {{ $product->amount }}</h2>
    <img src="{{ asset('storage/'.$product->image) }}" alt="product image">
</div>
@endsection
