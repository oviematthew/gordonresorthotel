<?php
$subject = 'BOOKINGS FORM'; // Subject of your email
$to = 'ovieenams@gmail.com';  //Recipient's E-mail



$name = $_REQUEST['name'];
$emailaddress = $_REQUEST['emailaddress'];
$phone = $_REQUEST['phone'];
$street = $_REQUEST['street'];
$city = $_REQUEST['city'];
$postalcode = $_REQUEST['postalcode'];
$country = $_REQUEST['country'];


$arrive= $_REQUEST['arrive'];
$depart = $_REQUEST['depart'];
$amtpple = $_REQUEST['amtpple'];
$amtrms = $_REQUEST['amtrms'];
$comments = $_REQUEST['comments'];


$email_from = $emailaddress;


$message .= 'Name : ' . $name . "\n";
$message .= 'Email Address : ' . $emailaddress . "\n";
$message .= 'Phone Number : ' . $phone . "\n";
$message .= 'Street: ' . $street  . "\n";
$message .= 'City : ' . $city . "\n";
$message .= 'Postal Code : ' . $postalcode . "\n";
$message .= 'Country : ' . $country . "\n";


$message .= 'Arrival Date: ' . $arrive . "\n";
$message .= 'Departure Date : ' . $depart . "\n";
$message .= 'Amount Of Guests : ' . $amtpple . "\n";
$message .= 'Number Of Rooms : ' . $amtrms . "\n";
$message .= 'Custom needs : ' . $comments . "\n";



if (@mail($to, $subject, $message, $email_from))
{
	// Transfer the value 'sent' to ajax function for showing success message.
	header("Location: index.html");
    
    
}
else
{
	// Transfer the value 'failed' to ajax function for showing error message.
	header("Location: bookings.html");
}
?>