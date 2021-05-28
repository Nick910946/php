<?php
 
 include "dbcon.php";

$a = $_POST['x']; 
$b = $_POST['y']; 
$c = $_POST['z']; 
$d = $_POST['m'];

//echo $a,$b,$c,$d;
 $data = "insert into school(name,password,email,city)value('$a','$b','$c','$d')";
 mysqli_query($con,$data);

 


?>