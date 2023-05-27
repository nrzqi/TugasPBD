<?php
require_once "../database/config.php";
// Fetch all products data from database
global $connect;
$result = mysqli_query($connect, "SELECT * FROM products ORDER BY id");
?>
<html>
<head>
    <title>Homepage</title>
</head>
<body>
<h1>Product List</h1>
<a href="add.php">Add New Skincare Product</a><br/><br/>
<table width='80%' border=1>
    <tr>
        <th>ID</th> <th>Product Name</th> <th>Price</th> <th>Brand</th> <th>Category</th> <th>Stock</th> <th>Action</th>
    </tr>
    <?php
    while($data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $data['id'] . "</td>";
        echo "<td>" . $data['name'] . "</td>";
        echo "<td>" . $data['price'] . "</td>";
        echo "<td>" . $data['brand'] . "</td>";
        echo "<td>" . $data['category'] . "</td>";
        echo "<td>" . $data['stock'] . "</td>";
        echo "<td><a href='edit.php?id=$data[id]'>Edit</a> | <a href='delete.php?id=$data[id]'>Delete</a></td></tr>";
    }
    ?>
</table>
</body>
</html>