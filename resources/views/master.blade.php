<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Project</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.2.0/turbolinks.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .trending-item {
            float: left;
            border: 1px solid black;
            margin-left: 10px;
        }

        .img-fluid {
            max-width: 150px;
        }

        .card-body {
            text-align: center;
        }

        .cart-list-devider {
            border-bottom: 1px solid grey;
            margin-bottom: 15px;
            padding-bottom: 5px;
        }

        .slider {
            width: 500px;
        }

        nav {
            background-color: grey;
        }

        body {
            background-color: #f8f9fa;
        }

        .register-container {
            max-width: 500px;
        }

        .register-card {
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 500px;
            margin: 50px auto;
        }

        .register-card-header {
            background-color: #343a40;
            color: #fff;
            border-radius: 10px 10px 0 0;
            padding: 20px;
            text-align: center;
        }

        .form-control:focus {
            border-color: #343a40;
            box-shadow: none;
        }

        .btn-primary {
            background-color: #343a40;
            border: none;
        }

        .btn-primary:hover {
            background-color: #495057;
        }

        .about-container {
            padding: 50px 0;
        }

        .about-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .about-header h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }

        .about-header p {
            font-size: 1.2rem;
            color: #6c757d;
        }

        .team-member {
            margin-bottom: 30px;
        }

        .team-member img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }

        .team-member h4 {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .team-member p {
            font-size: 1rem;
            color: #6c757d;
        }

        .values {
            background-color: #343a40;
            color: #fff;
            padding: 50px 0;
        }

        .values h2 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .values p {
            font-size: 1.2rem;
            line-height: 1.5;
        }

        .values-icon {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .footer-container {
            width: 100%;
        }

        /* Example of custom CSS */
        .about-container {
            padding: 30px;
        }

        .about-header h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .values {
            margin-top: 40px;
        }

        .values-icon {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        /* Custom CSS for product detail page */
        .product-image img {
            max-width: 100%;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-top: 50px;
        }

        .product-details {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        .product-name {
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        .product-id, .product-price, .product-category, .product-description {
            font-size: 1.2rem;
            margin-bottom: 8px;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        /* Custom CSS for cart products page */
        .container {
            max-width: 1200px;
        }

        .trending-wrapper {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-left: 10px;
        }

        .cart-list-divider {
            border-bottom: 1px solid #ddd;
            padding-bottom: 15px;
            margin-bottom: 15px;
        }

        .product-image img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            border: 1px solid #ddd;
            margin-top: -20px;
        }

        .product-details h5 {
            font-size: 1.5rem;
            margin-bottom: 5px;
        }

        .product-details p {
            font-size: 1rem;
            color: #6c757d;
        }

        .product-link {
            color: #333;
            text-decoration: none;
        }

        .product-link:hover {
            text-decoration: none;
        }

        .btn-success, .btn-warning {
            border-radius: 20px;
            padding: 10px 20px;
            font-size: 1rem;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #d39e00;
        }

        /* Custom CSS for checkout page */
        .checkout-summary {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .table {
            margin-bottom: 20px;
        }

        .table th {
            background-color: #e9ecef;
            font-weight: bold;
        }

        .table td {
            font-size: 1.2rem;
        }

        .form-control {
            border-radius: 8px;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
        }

        .form-check-input {
            margin-top: 0.3rem;
        }

        .form-check-label {
            margin-left: 0.5rem;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 8px;
            padding: 10px;
            font-size: 1.1rem;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        /* Custom CSS for Contact Us page */
        .contact-wrapper {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .contact-details {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .contact-details p {
            font-size: 1.1rem;
            margin-bottom: 15px;
        }

        .contact-details i {
            color: #007bff;
            margin-right: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 8px;
            padding: 10px;
            font-size: 1.1rem;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .form-control {
            border-radius: 8px;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
        }

        .form-group label {
            font-weight: bold;
        }

        .text-center {
            text-align: center;
        }

        .mb-4 {
            margin-bottom: 1.5rem;
        }

        .custom-cart-item:hover {
            background-color: #ff9900; /* Change this hover background color to your preference */
            color: #fff; /* Change this hover text color to your preference */
        }

        .custom-username:hover {
            color: #00ffcc; /* Change this hover color to your preference */
            background-color: #ff9900; /* Change this hover background color to your preference */
        }

        .loader-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: black ;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.5s ease, visibility 0.5s ease; /* Smooth transition */
        }

        .loader-wrapper.show {
            opacity: 1;
            visibility: visible;
        }

        .loader {
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 120px;
            height: 120px;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    {{ View::make('header') }}
    
    <div class="loader-wrapper" id="loader">
        <div class="loader"></div>
    </div>

    <!-- Your content here -->
    @yield('content')

    <!-- Footer -->
    {{ View::make('footer') }}

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.addEventListener('click', function(event) {
                if (event.target.tagName === 'A' && event.target.href) {
                    event.preventDefault(); // Prevent the default action immediately
                    const loader = document.getElementById('loader');
                    loader.classList.add('show'); // Show the loader

                    setTimeout(function() {
                        window.location.href = event.target.href; // Redirect after showing the loader
                    }, 500); // Adjust delay to ensure the loader is visible

                    setTimeout(function() {
                        loader.classList.remove('show'); // Hide the loader after 5 seconds
                    }, 5500); // Total of 5 seconds + transition duration
                }
            });

            window.addEventListener('load', function() {
                document.getElementById('loader').classList.remove('show');
            });
        });
    </script>
</body>