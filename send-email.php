<?php
	 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$to = "daveberning@icloud.com";
		$subject = "LabelFloat.css Question";
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$fullName = $fname . " " . $lname;

		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$comments = $_POST['comments'];

		$message = "Name: " . $fullName . "\r\n";
		$message .= "Email: " . $email . "\r\n";
		$message .= "Phone: " . $phone . "\r\n";
		$message .= "Comments: " . $comments . "\r\n";

		$headers = "From: " . $fullName . "<" . $email . ">\r\n";
		$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
		$headers .= "CC: david.berning.iii@gmail.com\r\n";

		mail($to, $subject, $message, $headers);
		header("Location: thank-you.html");
		exit;

	} else {
		echo("Form failed");
	} 
?>