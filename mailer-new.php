<?php

	require("connect.php");
   // $conn = mysqli_connect(
   //'weddinglotjl.nazwa.pl:3306',
   //'weddinglotjl_Kontakty',
   //'Ag@tka25'
    //);


    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
	

	$sql ="INSERT INTO Forma(nazwa, email, zapytanie) VALUES ('$name', '$email', '$message')";
	$result = $conn->query($sql);
    //$result = mysqli_query($conn, $sql);
    //mysqli_close($conn);
	//$result = $conn->query($sql);

    // Check the data.
    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: http://wedding-lotus.com.pl/contact.php?success=-1#form");
        exit;
    }



    // Set the recipient email address. Update this to YOUR desired email address.
    $recipient = "wedding.lotus.events@gmail.com";

    // Set the email subject.
    $subject = "New contact from $name";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Build the email headers.
    $email_headers = "From: $name <$email>";

    // Send the email.
    //mail($recipient, $subject, $email_content, $email_headers);



    // Redirect to the index.html page with success code
    header("Location: http://wedding-lotus.com.pl/contact.php?success=1#form");

?>