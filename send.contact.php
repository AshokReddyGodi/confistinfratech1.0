<?php

$name = $_POST["firstname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$subject = $_POST["subject"];
$message = $_POST["message"];
//Sending Email
$to = "confistinfratech@gmail.com";
$subject = "Confist Enquiry";
$emailBody = "<html><body>
<center><h3>You have new Email from Website</h3></center>
<br/>
Name: ".$name."
<br/>Email: ".$email."
<br/>Phone: ".$phone."
<br/>Subject: ".$subject."
<br/>Message: ".$message."
</body></html>";
$headers = "From: confistinfratech@gmail.com";
mail($to,$subject,$txt,$headers);
?>