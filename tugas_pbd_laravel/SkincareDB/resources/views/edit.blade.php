<html>
<head>
    <title>Edit Product</title>
</head>
<body>
<h1>Edit Product Data</h1>
<a href="/">Home</a>
<br/><br/>
<form name="update_products" method="post" action="{{ route('products.update', $products->id)}}">
    @csrf
    @method('PUT')
    <table border="0">
        <tr>
            <td>Product Name</td>
            <td>&nbsp : <input type="text" name="name" value="{{$products->name}}"></td>
        </tr>
        <tr>
            <td>Price</td>
            <td>&nbsp : <input type="numeric" name="price" value="{{$products->price}}"></td>
        </tr>
        <tr>
            <td>Brand</td>
            <td>&nbsp : <input type="text" name="brand" value="{{$products->brand}}"></td>
        </tr>
        <tr>
            <td>Category</td>
            <td>&nbsp : <input type="text" name="category" value="{{$products->category}}"></td>
        </tr>
        <tr>
            <td>Stock</td>
            <td>&nbsp : <input type="numeric" name="stock" value="{{$products->stock}}"></td>
        </tr>
        <tr>
            <td></td>
            <td>&nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp
                &nbsp <input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>
