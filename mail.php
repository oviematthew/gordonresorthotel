<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'ovieenams@gmail.com'; // Recipient's E-mail
    $subject = 'BOOKINGS FORM'; // Subject of your email

    // Sanitize and escape form data
    $fullname = htmlspecialchars($_POST['fullname'], ENT_QUOTES, 'UTF-8');
    $emailaddress = htmlspecialchars($_POST['emailaddress'], ENT_QUOTES, 'UTF-8');
    $phone = htmlspecialchars($_POST['phone'], ENT_QUOTES, 'UTF-8');
    $street = htmlspecialchars($_POST['street'], ENT_QUOTES, 'UTF-8');
    $city = htmlspecialchars($_POST['city'], ENT_QUOTES, 'UTF-8');
    $postalcode = htmlspecialchars($_POST['postalcode'], ENT_QUOTES, 'UTF-8');
    $country = htmlspecialchars($_POST['country'], ENT_QUOTES, 'UTF-8');
    $arrive = htmlspecialchars($_POST['arrive'], ENT_QUOTES, 'UTF-8');
    $depart = htmlspecialchars($_POST['depart'], ENT_QUOTES, 'UTF-8');
    $amtpple = htmlspecialchars($_POST['amtpple'], ENT_QUOTES, 'UTF-8');
    $amtrms = htmlspecialchars($_POST['amtrms'], ENT_QUOTES, 'UTF-8');
    $rmtype = htmlspecialchars($_POST['rmtype'], ENT_QUOTES, 'UTF-8');
    $comments = htmlspecialchars($_POST['comments'], ENT_QUOTES, 'UTF-8');

    // Construct email message
    $message = "Name : $fullname\n";
    $message .= "Email Address : $emailaddress\n";
    $message .= "Phone Number : $phone\n";
    $message .= "Street: $street\n";
    $message .= "City : $city\n";
    $message .= "Postal Code : $postalcode\n";
    $message .= "Country : $country\n";
    $message .= "Arrival Date: $arrive\n";
    $message .= "Departure Date : $depart\n";
    $message .= "Amount Of Guests : $amtpple\n";
    $message .= "Number Of Rooms : $amtrms\n";
    $message .= "Type Of Room : $rmtype\n";
    $message .= "Custom needs : $comments\n";

    // Additional headers
    $headers = "From: bookings@gordonresorthotel.com\r\n";
    $headers .= "Reply-To: $emailaddress\r\n";

    // Send the email
    if (@mail($to, $subject, $message, $headers)) {
        header("Location: success.html");
    } else {
        header("Location: failed.html");
    }
    exit;
}
?>
