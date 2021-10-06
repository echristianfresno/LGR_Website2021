<?php

$server = "localhost";
$dbUsername = 'root';
$dbPassword = 'password';
$dbName = 'lgr';


$conn = mysqli_connect($server, $dbUsername, $dbPassword, $dbName);

if (isset($POST['submit'])) {
	
	if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['fname']) && !empty($_POST['birthdate']) && !empty($_POST['contactno']) && !empty($_POST['country']) && !empty($_POST['nationality']) && !empty($_POST['email']) && !empty($_POST['roomtype']) && !empty($_POST['arrivaldate']) && !empty($_POST['departuredate']) && !empty($_POST['roomno']) && !empty($_POST['adultno']) && !empty($_POST['childrenno'])){
		
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

		$query = "INSERT into reservations(fname,lname,birthdate,contactno,country, nationality,email,roomtype,arrivaldate,departuredate,roomno,adultno,childrenno) values('$fname' , '$lname' , '$birthdate' , '$contactno' , '$country', '$nationality', '$email' , '$roomtype' , '$arrivaldate' , '$departuredate' , ' $roomno' , '$adultno' , '$childrenno')";


		$run = mysqli_query($conn,$query) or die(mysqli_error());

		if($run) {
			echo "Form Submitted Successfully";
		}
		else {
			echo "Form Not Submitted";
		}
	}

	else{
		echo "all fields required";
	}

}


?>