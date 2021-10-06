<?php

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

if (!empty($fname) || !empty($lname) || !empty($birthdate) || !empty($contactno) || !empty($country) || !empty($nationality) || !empty($email) || !empty($roomtype) || !empty($arrivaldate) || !empty($departuredate) || !empty($roomno) || !empty($adultno) || !empty($childrenno)) {

	$host = "localhost";
	$dbUsername = 'root';
	$dbPassword = 'password';
	$dbName = 'lgr';

	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

	if (mysqli_connect_error()) {
		die('Connect('. mysqli_connect_errno() .')'. mysqli_connect_error());
		# code...
	} else {
		$SELECT = "SELECT fname from reservations where fname = ?";
		$INSERT = "INSERT Into reservations (fname, lname, birthdate, contactno, country, nationality, email, roomtype, arrivaldate, departuredate, roomno, adultno, childrenno) values(? ,? ,? ,?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s", $fname);
		$stmt->execute();
		$stmt->bind_result($fname);
		$stmt->store_result();
		$rnum = $stmt->num_rows;

		if ($rnum==0) {
			$stmt->close();

			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("sssissssiisss", $fname, $lname, $birthdate, $contactno, $country, $nationality, $email, $roomtype, $arrivaldate, $departuredate, $roomno, $adultno, $childrenno);
			$stmt->execute();
			echo "New Record Inserted Successfully";
		} else {
			echo "Someone already register using this name";
		}
		$stmt->close();
		$conn->close();
	}
	# code...
} else {
	echo "All field are required";
	die();
}


?>