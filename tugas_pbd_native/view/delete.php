<?php
// include database connection file
require_once "../database/config.php";
// Get id from URL to delete that product
global $connect;
$id = $_GET['id'];
// Delete product row from table based on given id
$result = mysqli_query($connect,
    "DELETE FROM products WHERE id=$id");
// After delete redirect to Home, so that latest product list will be displayed.
header("Location:index.php");
?>