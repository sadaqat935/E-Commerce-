@extends('master')

@section('content')

<div class="custom_product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h1>MY ORDERS</h1>
            <a  class="btn btn-success" href="ordernow"> Order Now </a><br><br>
            @foreach($products as $item)
            <div class="row searched-item cart-list-devider">
                <div class="col-sm-3">
                    <a href="product/{{$item->id}}" class="product-link">
                        <div class="product-image">
                            <img src="{{ $item->gallery }}" alt="Product Image">
                        </div>
                      
                    </a>
                </div>

                <div class="col-sm-3">
                    <!-- <a href="product/{{$item->id}}" class="product-link"> -->
                     
                        <div class="product-details">
                            <h2>PName : {{ $item->name }}</h2>
                            @if(Session::has('user'))
                            <h5>{{ Session::get('user')['name'] }}</h5>
                            @else
                            <h5>no</h5>
                            @endif
                            <p>Status : {{ $item->status }}</p>
                            <p>Address : {{ $item->address }}</p>
                            <p>Method : {{ $item-> payment_method}}</p>
                            <p>Payment-status : {{ $item-> payment_status}}</p>
                            <p>Payment-status : ${{ $item-> price}}</p>
                            <p>Payment-status : ${{ $item-> id}}</p>


                            <!-- You can place other details here -->
                        </div>
                       
                    </a>
                </div>

                <div class="col-sm-3">
                    <a href="product/{{$item->id}}" class="product-link">
                     
                     
                        <div class="product-button">
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
