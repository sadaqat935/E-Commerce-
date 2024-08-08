<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles for the admin dashboard */
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
}

#page-content-wrapper {
    width: 100%;
    padding: 20px;
}

.toggled #sidebar-wrapper {
    margin-left: -250px;
}

.sidebar-heading {
    padding: 1rem;
    font-size: 1.2rem;
    text-align: center;
    background-color: #f8f9fa;
}

.list-group-item-action:hover {
    background-color: #f8f9fa;
}

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.stats {
    margin-top: 20px;
}

.stat-item {
    margin-bottom: 20px;
}
.search-bar{
    width: 750px;
}

    </style>
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Admin Dashboard</div>
            <div class="list-group list-group-flush">
                <a href="#dashboard" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                <a href="#orders" class="list-group-item list-group-item-action bg-light">Orders</a>
                <a href="#products" class="list-group-item list-group-item-action bg-light">Products</a>
                <a href="#categories" class="list-group-item list-group-item-action bg-light">Categories</a>
                <a href="#customers" class="list-group-item list-group-item-action bg-light">Customers</a>
                <a href="#reports" class="list-group-item list-group-item-action bg-light">Reports</a>
                <a href="#settings" class="list-group-item list-group-item-action bg-light">Settings</a>
                <a href="#logout" class="list-group-item list-group-item-action bg-light">Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>
            </nav>

            <div class="container-fluid">
                <h1 class="mt-4">Products</h1>
                <table class="table table-striped mt-4">
                    <thead>
                        <tr>
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
            @foreach($products as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->category }}</td> <!-- Assuming you have a relationship set up for category -->
                    <td>${{ $item->price }}</td>
                    <td>
                        <a href="{{ url('/products/edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ url('/products', $item->id) }}" method="GET" style="display:inline-block;">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
                </table>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

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
