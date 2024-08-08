@extends('master')
@section('content')
<section id="products" class="mt-4">
        <div class="container">
            <h2 class="text-center mb-4">WOMAN's</h2>
            <div class="row">
                <!-- Product Item -->
                @foreach($items as $key => $item)

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('uploads/' . $item->gallery) }}" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $item->name }}</h5>
                            <p class="card-text">${{ $item->price }}</p>
                            <a href="prooducts/{{$item->id}}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    @endsection


<style>
.card-img-top {
    max-width: 400px; 
    max-height:220px;/* Adjust to the desired maximum width */
    height: auto; /* Keeps the aspect ratio of the image */
}
</style>