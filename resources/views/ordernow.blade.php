@extends('master')

@section('content')

<div class="container">
    <div class="checkout-summary">
        <h2 class="my-4 text-center">Order Summary</h2>
        
        <!-- Order Summary Table -->
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>Amount</th>
                    <td>${{ number_format($products, 2) }}</td>
                </tr>
                <tr>
                    <th>Tax</th>
                    <td>$0.00</td>
                </tr>
                <tr>
                    <th>Delivery Charges</th>
                    <td>$10.00</td>
                </tr>
                <tr>
                    <th>Total Amount</th>
                    <td>${{$products + 10}}</td>
                </tr>
               
            </tbody>
        </table>
        
        <!-- Order Form -->
        <form action="{{ url('aorderplace') }}" method="POST">
            @csrf
            <div class="form-group">
                <textarea name="address" class="form-control" rows="4" placeholder="Enter Address" required></textarea>
            </div>
            <div class="form-group">
                <label for="payment-method" class="form-label">Payment Method</label><br>
                <div class="form-check">
                    <input type="radio" value="online" id="payment-online" name="payment" class="form-check-input" required>
                    <label for="payment-online" class="form-check-label">Online</label>
                </div>
                <div class="form-check">
                    <input type="radio" value="emi" id="payment-emi" name="payment" class="form-check-input">
                    <label for="payment-emi" class="form-check-label">EMI Payment</label>
                </div>
                <div class="form-check">
                    <input type="radio" value="cash" id="payment-cash" name="payment" class="form-check-input">
                    <label for="payment-cash" class="form-check-label">Payment on Cash</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Order Now</button>
        </form>
    </div>
</div>

@endsection


<style>
    .custom-cart-item {
 
 margin-right:0px;
}

.custom-cart-item:hover {
 background-color: #ff9900; /* Change this hover background color to your preference */
 color: #fff; /* Change this hover text color to your preference */
}

/* Custom styles for username link */
.custom-username {
 font-weight: bold;

 color: #00cc99; /* Change this color to your preference */
 text-shadow: 1px 1px 2px #000; /* Optional text shadow */
 margin-right:50px;
}

.custom-username:hover {
 color: #00ffcc; /* Change this hover color to your preference */
 background-color: #ff9900; /* Change this hover background color to your preference */

}

.search-bar {
    margin-left:-850px;
}




</style>