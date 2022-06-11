@extends('layouts.app')

@section('content')
    <h1>Product</h1>
    <img width="400" src="{{ $product['imageUrl'] }}" alt="">
@endsection