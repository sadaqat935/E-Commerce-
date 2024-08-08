@extends('master')

@section('content')

<div class="container">
    <div class="contact-wrapper">
        <h1 class="text-center my-4">Contact Us</h1>
        
        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-6">
                <div class="contact-form">
                    <h3 class="mb-4">Get in Touch</h3>
                    <form action="{{ url('sendmessage') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                    </form>
                </div>
            </div>

            <!-- Contact Details -->
            <div class="col-md-6">
                <div class="contact-details">
                    <h3 class="mb-4">Contact Details</h3>
                    <p><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> 123 Main Street, City, Country</p>
                    <p><i class="fas fa-phone"></i> <strong>Phone:</strong> +123 456 7890</p>
                    <p><i class="fas fa-envelope"></i> <strong>Email:</strong> contact@yourdomain.com</p>
                </div>
            </div>
        </div>
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