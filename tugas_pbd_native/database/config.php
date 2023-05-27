<?php

$connect = mysqli_connect("localhost","root","","skincare");

// Check connection
if (mysqli_connect_errno()){
    echo "connection error :( " . mysqli_connect_error();
}else{
//    echo "connection succes :D";
}
?>