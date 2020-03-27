<?php

if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['mail'];
		$phone=$_POST['phone'];
		$business=$_POST['business'];
		
		
		$msg=$_POST['msg'];

		$to='thinksurfmedia@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Customer Query';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Business Type:".$business."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}






?>