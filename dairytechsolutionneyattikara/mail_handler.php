<?php
    error_reporting(E_ERROR | E_PARSE);
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
	
		$msg=$_POST['msg'];

		$to='dairytechsolutions@gmail.com'; 
		$to='info@dairytechsolutions.com'; // Receiver Email ID, Replace with your email ID
		$subject='Dairytech solutions';
		$message="Name :".$name."\n"."Phone :".$phone."\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
    require_once "contact.html";
?>