<?php
include "dbcon.php";

$id = $_GET['nik'];

$x = "select * from student where id =$id";
$y = mysqli_query($con,$x);
$z = mysqli_fetch_array($y);
echo "<pre>";
print_r($z);



?>