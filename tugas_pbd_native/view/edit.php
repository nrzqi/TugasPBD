<?php
// include database connection file
require_once "../database/config.php";
global $connect;
// Check if form is submitted for product update, then redirect to homepage after update
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $brand = $_POST['brand'];
    $category = $_POST['category'];
    $stock = $_POST['stock'];
// update product data
    $result = mysqli_query($connect, "UPDATE products SET name='$name', price='$price', brand='$brand', 
              category='$category', stock='$stock' WHERE id=$id");
// Redirect to homepage to display updated product in list
    header("Location: index.php");
}
?>

<?php
// Display selected product data based on id
// Getting id from url
require_once "../database/config.php";
global $connect;
// Fetch product data based on id
$id = $_GET['id'];
$result = mysqli_query($connect, "SELECT * FROM products WHERE id=$id");
while($data = mysqli_fetch_array($result))
{
    $name= $data['name'];
    $price = $data['price'];
    $brand = $data['brand'];
    $category = $data['category'];
    $stock = $data['stock'];
}
?>

<html>
<head>
    <name>Edit Product</name>
</head>
<body>
<h1>Edit Product</h1>
<a href="index.php">Home</a>
<br/><br/>
<form name="update_product" method="post" action="edit.php">
    <table border="0">
        <tr>
            <td>Product Name</td>
            <td>&nbsp : <input type="text" name="name" value=<?php
                echo "\"$name\"";
                ?>></td>
        </tr>
        <tr>
            <td>Price</td>
            <td>&nbsp : <input type="numeric" name="price" value=<?php
                echo "\"$price\"";
                ?>></td>
        </tr>
        <tr>
            <td>Brand</td>
            <td>&nbsp : <input type="text" name="brand" value=<?php
                echo "\"$brand\"";
                ?>></td>
        </tr>
        <tr>
            <td>Category</td>
            <td>&nbsp : <input type="text" name="category" value=<?php
                echo "\"$category\"";
                ?>></td>
        </tr>
        <tr>
            <td>stock</td>
            <td>&nbsp : <input type="numeric" name="stock" value=<?php
                echo "\"$stock\"";
                ?>></td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
            <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                <input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>