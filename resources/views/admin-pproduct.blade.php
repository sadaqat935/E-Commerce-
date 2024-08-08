<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Products</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        #wrapper {
            display: flex;
            align-items: stretch;
        }

        #sidebar-wrapper {
            min-width: 250px;
            max-width: 250px;
            height: 100vh;
            background-color: #343a40;
        }

        #page-content-wrapper {
            flex: 1; /* Allow page-content-wrapper to take up remaining space */
            padding: 20px;
        }

        .toggled #sidebar-wrapper {
            margin-left: -250px;
        }

        .sidebar-heading {
            padding: 1rem;
            font-size: 1.2rem;
            text-align: center;
            background-color: #6c757d;
            color: white;
        }

        .list-group-item-action:hover {
            background-color: #495057;
            color: white;
        }

        .list-group-item {
            background-color: #343a40;
            color: white;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .search-bar {
            width: 500px; /* Adjusted width for better visibility */
        }

        .table-wrapper {
            margin-top: 20px;
        }

        .btn-add {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    @if(Session::has('person'))
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <div class="sidebar-heading">Admin Dashboard</div>
            <div class="list-group list-group-flush">
                <a href="name" class="list-group-item list-group-item-action">Dashboard</a>
                <a href="adminorder" class="list-group-item list-group-item-action">Orders</a>
                <a href="admin-pproduct" class="list-group-item list-group-item-action">Products</a>
                <a href="customers" class="list-group-item list-group-item-action">Customers</a>
                <a href="#settings" class="list-group-item list-group-item-action">Settings</a>
                <a href="admin-logout" class="list-group-item list-group-item-action">Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="name">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Admin
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="admin-logout">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid">
                <div class="header mt-4 mr-5 mb-4">
                    <h2>Products</h2>
                    <form method="GET" action="prosearch">
                        <input type="search" name="query" placeholder="Search products..." class="form-control search-bar" value="{{ request()->input('query') }}">
                        <button type="submit" class="btn btn-primary mt-2">Search</button>
                    </form>
                </div>
                
                <div class="btn-add">
                    <a href="{{ url('adminaddpro') }}" class="btn btn-success">Add New Product</a>
                </div>
                
                <div class="table-wrapper">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Product ID</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>SUB Category</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->category}}</td>
                                <td>{{ $item->subcategory}}</td>

                                <td>{{ $item->price }}</td>
                                <td>
                                    <form action="{{ url('admin-product/' . $item->id) }}" method="GET" style="display:inline;">
                                        @csrf
                                         <!-- Use DELETE method for deletion -->
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
    @else
    <div class="login-message">
        <h2>PLEASE LOGIN</h2>
        <p class="lead">You need to be logged in to access this page. Please <a href="adminlogin" class="btn btn-primary mt-3">Login</a></p>
    </div>    @endif
    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>
