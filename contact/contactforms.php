<?php
$name=$_Post['name'];
$visitor_email=$_Post['email'];
$message=$_Post['message'];
$email_form='amanika@yahoo.com';
$email_subject="New Form Submission";
$email_body="User Name:"$name.\n"
			 "User Email: $visitor_email.\n"
			  "User Message: $message.\n";
			  
$to = "amanika@yahoo.com";
$headers = "From" $email_from \r\n";
$headers .= "Reply-to: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location:index.htm");


?>