<?php

if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['birthdate']) && isset($_POST['contactno']) && isset($_POST['country']) && isset($_POST['nationality']) && isset($_POST['email']) && isset($_POST['roomtype']) && isset($_POST['arrivaldate']) && isset($_POST['departuredate']) && isset($_POST['roomno']) && isset($_POST['adultno']) && isset($_POST['childrenno'])) {
	include 'db_conn.php';

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$fname = validate($_POST['fname']);
	$lname = validate($_POST['lname']);
	$birthdate = validate($_POST['birthdate']);
	$contactno = validate($_POST['contactno']);
	$country = validate($_POST['country']);
	$nationality = validate($_POST['nationality']);
	$email = validate($_POST['email']);
	$roomtype = validate($_POST['roomtype']);
	$arrivaldate = validate($_POST['arrivaldate']);
	$departuredate = validate($_POST['departuredate']);
	$roomno = validate($_POST['roomno']);
	$adultno = validate($_POST['adultno']);
	$childrenno = validate($_POST['childrenno']);

	if (empty($fname) || empty($lname) || empty($birthdate) || empty($contactno) || empty($country) || empty($nationality) || empty($email) || empty($roomtype) || empty($arrivaldate) || empty($departuredate) || empty($roomno) || empty($adultno) || empty($childrenno)) {
		header("Location: index.html");
	} else {

		$sql = "INSERT INTO reservations(fname, lname, birthdate, contactno, country, nationality, email, roomtype, arrivaldate, departuredate, roomno, adultno, childrenno) VALUES('$fname' , '$lname' , '$birthdate' , '$contactno' , '$country', '$nationality', '$email' , '$roomtype' , '$arrivaldate' , '$departuredate' , ' $roomno' , '$adultno' , '$childrenno')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo "Your Booking was successful";
		} else {
			echo "Your Booking is not sent";
		}
	}

} else {
	header("Location: index.html");
}



?>