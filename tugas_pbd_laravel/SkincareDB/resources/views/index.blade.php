<html>
<head>
    <title>Homepage</title>
</head>
<body>
<h1>Product List</h1>
<a href="{{route('products.create')}}">Add New Product</a><br/><br/>
<table width='80%' border=1>
    <tr>
        <th>ID</th> <th>Product Name</th> <th>Price</th> <th>Brand</th>
        <th>Category</th> <th>Stock</th> <th>Action</th>
    </tr>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }} </td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->brand }} </td>
            <td>{{ $product->category }}</td>
            <td>{{ $product->stock }} </td>
            <td>
                <button>
                <a href="{{route('products.edit', $product->id) }}"
                   class="btn btn-warning btn-sm" style="text-decoration: none;">Edit</a>
                </button>

                <form action="{{route('products.destroy', $product->id)}}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
