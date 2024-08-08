@extends('layouts.admin-master')
@section('content')
<section id="products" class="mt-4">
        <div class="container">
            <h2 class="text-center mb-4">Featured Products</h2>
            <div class="row">
                <!-- Product Item -->
                @foreach($products as $key => $item)

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('uploads/' . $item->gallery) }}" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $item->name }}</h5>
                            <p class="card-text">{{ $item->price }}</p>
                            <a href="product/{{$item->id}}" class="btn btn-primary">View Details</a>
                            <a href="product/{{$item->id}}" class="btn btn-danger">Delete</a>

                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    @endsection

    <style>
        .hello{
    margin-right: 30px;
    display: flex;
}
    </style>