<?php

include "dbcon.php";

$a = $_POST['x']; 
$b = $_POST['y']; 
$c = $_POST['z']; 

//echo $a,$b,$c;

$data = "insert into emp1(name,email,city)value('$a','$b','$c')";

 mysqli_query($con,$data);
?>