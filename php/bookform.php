<?php

if (isset($_POST['submit'])) {
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

	$mailTo = "graphicdesigner@lagranderesidence.com";
	$subject = "LGR Website | Booking Inquiry"
	$headers = "Booking Inquiry From Ms/Mr".$lname;
	$txt = "A booking inquiry from ".$fname." ".$lname."\n\n Guest's Name: ".$fname." ".$lname."\nBirthdate: ".$birthdate."\nContact Number: ".$contactno."\nCountry Origin: ".$country."\nNationality: ".$nationality."\nEmail Address: ".$email."\nType of Room: ".$roomtype."\nDate of Arrival: ".$arrivaldate."\nDate of Departure: ".$departuredate."\nNo. of Rooms: ".$roomno."\nNo. of Adults: ".$adultno."\nNo. of Kids: ".$childrenno;

	mail($mailTo, $subject, $txt, $headers);

	header("location: BookNow2.html?mailsend");


}


?>