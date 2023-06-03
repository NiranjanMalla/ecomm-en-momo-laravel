@extends('master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{ $product['gallery'] }}" alt="" class="detail-img">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h3>{{ $product['name'] }}</h3>
            <h4 class="text-secondary">Price : {{ $product['price'] }}</h4>
            <p class="text-secondary">Details : {{ $product['description'] }}</p>
            <button class="btn btn-primary">Add to Cart </button>
            <button class="btn btn-success">Buy </button>

        </div>
    </div>
</div>

@endsection
