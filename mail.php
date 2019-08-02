<?php

$name = $_POST['first_name']." ".$_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$select = $_POST["select"];
$message = $_POST['message'];
$formcontent="From: $name,
			\nEmail: $email,
			\nPhone: $phone,
			\nCategory: $select,
			\nMessage: $message";
$recipient = "yourmail@demo.com";
$subject = "Support Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, implode("\r\n", $mailheader)) or die("Error!");
echo '<div class="form-group">
<div style="background: #fff;padding-top:200px;color:#fff;">
	<div class="container" style="position: static;max-width: 1200px;margin: 0 auto;background: #00bdfd;padding: 100px 15px;text-align: center;">
	    <h1 style="text-shadow: 10px 10px 10px rgb(0, 0, 0);">Congratulations! Your Mail has been sent Successfully  from '.$email.'  </h1>
	    <a href="index.html" style="background: #ffffff;text-decoration: none;color: #00bdfd;font-weight: 700;padding: 15px 30px;margin-top: 10px;display: inline-block;">Back To Home</a>
	</div>
</div>
</div>'


;?>
