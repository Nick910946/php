<?php

$courses = array ("name"=>"ram","city"=>"gwalior","php"=>"12000");

foreach ($courses as $key => $value) {
	echo $key." " .$value ."<br/>";
	# code...
}
foreach ($courses as $a) {
	echo $a;
	# code...
}
?>