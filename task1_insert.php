<?php
 include "dbcon.php";

 $p = $_POST['x'];
 $q = $_POST['y'];
 $r = $_POST['z'];
 $s = $_POST['a'];
 $t = $_POST['b'];
 $u = $_POST['c'];

//echo $p,$q,$r,$s,$t,$u;
  $data = "insert into task1(name,city,phone,email,address,college)value('$p','$q','$r','$s','$t','$u')";
 mysqli_query($con,$data);

?>