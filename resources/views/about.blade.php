@extends('master')

@section('content')
<div class="container about-container">
    <!-- About Header -->
    <div class="about-header">
        <h1>About Us</h1>
        <p>Learn more about our company, our values, and our missions</p>
    </div>

    <!-- Company Info -->
    <div class="row">
        <div class="col-md-6">
            <h2>Our Mission</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="col-md-6">
            <h2>Our Vision</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>

    <!-- Values Section -->
    <div class="values text-center">
        <h2>Our Core Values</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="values-icon">
                    <i class="fas fa-thumbs-up"></i>
                </div>
                <h4>Integrity</h4>
                <p>We hold ourselves to the highest standards of honesty and transparency.</p>
            </div>
            <div class="col-md-4">
                <div class="values-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h4>Teamwork</h4>
                <p>We believe in the power of collaboration and supporting each other.</p>
            </div>
            <div class="col-md-4">
                <div class="values-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h4>Innovation</h4>
                <p>We are committed to continuous improvement and creative solutions.</p>
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