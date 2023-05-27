<html>
<head>
    <title>Add Skincare Product</title>
</head>
<body>
<h1>Add Skincare Data</h1>
<a href="index.php">Go to Home</a>
<br/><br/>
<form action="add.php" method="post" name="form1">
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
<?php
// Check If form submitted, insert form data into products table.
if(isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $brand = $_POST['brand'];
    $category = $_POST['category'];
    $stock = $_POST['stock'];
// include database connection file
    require_once "../database/config.php";
    global $connect;
// Insert product data into table
    $result = mysqli_query($connect, "INSERT INTO products(name, price, brand, category, stock) 
              VALUES('$name','$price', '$brand', '$category', '$stock')");
// Show message when product added
    echo "Product added successfully. <a href='index.php'>View Products</a>";
}
?>
</body>
</html>