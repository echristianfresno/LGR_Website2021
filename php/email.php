<?php

$host = 'localhost';
$use = 'root';
$pass = 'password';
$db = 'lgr';

$con=mysqli_connect($host,$user,$pass,$db);
if($con)
	echo 'connected successfully to my db database';

$sql="insert into reservations (fname, lname) values"
$query=mysqli_query($con,$sql);
if ($query) 
	echo 'data inserted successfully';
	# code...

?>