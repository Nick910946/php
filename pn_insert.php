<?php
 include "dbcon.php";

 $p = $_POST['x'];
 $q = $_POST['y'];
 $r = $_POST['z'];
 $s = $_POST['a'];
 $j = $_POST['Gender'];
 $t = $_POST['b'];
 $u = $_POST['c'];
 $v = $_POST['d'];
 $w = $_POST['e'];
 $n = $_POST['f'];


//echo $p,$q,$r,$s,$j,$t,$u,$v,$w,$n;
 $data = "insert into infosys(student_name,email,mobile_number,address,gender,college,qualifications,branch,semester,intrenship_cours)value('$p','$q','$r','$s','$j','$t','$u','$v','$w','$n')";

 mysqli_query($con,$data);

?> 