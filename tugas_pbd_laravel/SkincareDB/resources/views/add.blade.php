<html>
<head>
    <title>Add Product</title>
</head>
<body>
<h1>Add Product Data</h1>
<a href="/">Go to Home</a>
<br/><br/>
<form action="{{ route('products.store')}}" method="post" name="form1">
    @csrf
    <table width="25%" border="0">
        <tr>
            <td>Product Name</td>
            <td>: <input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Price</td>
            <td>: <input type="numeric" name="price"></td>
        </tr>
        <tr>
            <td>Brand</td>
            <td>: <input type="text" name="brand"></td>
        </tr>
        <tr>
            <td>Category</td>
            <td>: <input type="text" name="category"></td>
        </tr>
        <tr>
            <td>Stock</td>
            <td>: <input type="numeric" name="stock"></td>
        </tr>
        <tr>
            <td></td>
            <td>&nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp<input type="submit" name="Submit" value="Add"></td>
        </tr>
    </table>
</form>
</body>
</html>
