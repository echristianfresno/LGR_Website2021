<?php

$server = "localhost";
$dbUsername = 'root';
$dbPassword = 'password';
$dbName = 'lgr';

$conn = mysqli_connect($server, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
	echo "Connection Failed";
	exit();
}

		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$birthdate = $_POST['birthdate'];
		$contactno = $_POST['contactno'];
		$country = $_POST['country'];
		$nationality = $_POST['nationality'];
		$email = $_POST['email'];
		$roomtype = $_POST['roomtype'];
		$arrivaldate = $_POST['arrivaldate'];
		$departuredate = $_POST['departuredate'];
		$roomno = $_POST['roomno'];
		$adultno = $_POST['adultno'];
		$childrenno = $_POST['childrenno'];

		$conn = mysql_connect("localhost", "root", "password")

		if (!$conn) 
		{
			die('Could not connect:' .mysql_error());
		}

		mysql_select_db("lgr", $con);

		$query = "INSERT INTO reservations(fname, lname, birthdate, contactno, country, nationality, email, roomtype, arrivaldate, departuredate, roomno, adultno, childrenno) VALUES('$fname' , '$lname' , '$birthdate' , '$contactno' , '$country', '$nationality', '$email' , '$roomtype' , '$arrivaldate' , '$departuredate' , ' $roomno' , '$adultno' , '$childrenno')";
		if(!mysql_query($query.$con))
		{
			die('Error in inserting records'.mysql_error);
		}
		else {
			echo "Data Inserted";
		}



?>