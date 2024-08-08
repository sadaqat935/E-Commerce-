<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Search</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        #page-content-wrapper {
            width: 100%;
            padding: 20px;
        }

        .search-bar {
            width: 500px;
            margin-bottom: 20px;
        }

        .table-wrapper {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div id="page-content-wrapper">
        <h2>Product Search</h2>
        
        <form action="prosearch" method="GET">
            <input type="search" name="query" placeholder="Search products..." class="form-control search-bar" value="{{ request()->input('query') }}">
            <button type="submit" class="btn btn-primary mt-2">Search</button>
        </form>
        
        <div class="table-wrapper">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <!-- Add more columns as needed -->
                    </tr>
                </thead>
                <tbody>
                    @forelse($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->description }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No products found</td>
                        </tr>
                    @endforelse
                </tbody>
                <a href="admin-pproduct" class="btn btn-primary">Back</a>
            </table>
        </div>
    </div>
</body>
</html>
