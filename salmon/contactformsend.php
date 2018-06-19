<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];
	$msg = "Name: " . $name . "\n"
	. "Email: " . $email . "\n"
	."Comment: " . $comment;
	mail("ccbsamatt@gmail.com","SRA Contact Form",$msg);
	header ("location: contactformthankyou.php");
?>