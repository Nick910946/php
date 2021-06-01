<?php
include "dbcon.php";

$id = $_GET['n'];


$a = "select * from infosys where id =$id";

$b = mysqli_query($con,$a);
$c = mysqli_fetch_array($b);
echo "<pre>";
print_r($c);


?>
<!-- <h1><?php echo $fetch['student_name']?></h1> -->