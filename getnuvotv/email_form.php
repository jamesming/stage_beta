<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>
<style>
label, li, p, span, .Notice {
    color: #333333;
    font-family: arial,sans-serif;
    font-size: 12px;
}

label {
    display: block;
    font-weight: bold;
    margin: 0 0 4px;
    padding: 0;
}
</style>
</head>
<?php
	
	include_once('../db_include.php');
	
	if($_POST) {
	
		echo '<p style="padding-top: 50px; padding-left: 0px; color: black; font-size: 19px; font-family: Arial;">Thanks for your feedback! We\'ll get back to you as soon as possible.</p>';
		
		$message = $_POST[message];
		$email = $_POST[email];
		//$subject = $_POST[subject];
	
		$to      = 'nuvoinfo@sitv.com';
		$subject = 'Question or Comment from mynuvotv.com';
		$message = $message.'<br /><br />';
		$headers  = 'MIME-Version: 1.0' . "\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\n";
		$headers .= 'From: '.$email;

		mail($to, $subject, $message, $headers);
		
	} else {
 

?> 

		<form action="email_form.php" method="post">

			<div style="height: 300px; float: left; text-align: left; padding-left: 0px; padding-top: 0px; color: black; font-family: Arial; font-size: 19px; width: 470px; border: 1px solid black;">
				<img src="/images/nuvotv_contact.jpg" width="470" />
				<div style=" padding-left: 15px; padding-right: 10px;">
					<div style="padding-top: 5px; float: left;">
						Email us at <a href="mailto:nuvoinfo@sitv.com">nuvoinfo@sitv.com</a> or send us a message by filling out the form below:<br />
					</div>
					<div style="padding-top: 10px; float: left; width: 420px;">
						Your E-Mail Address: <span style="color:red;">*</span><br />
						<input type="text" name="email" size="40" /><br />
					</div>
					<!-- <div style="padding-top: 10px; float: left; margin-left: 22px;">
						Subject: <span style="color:red;">*</span><br />
						<input type="text" name="subject" size="29" /><br />
					</div> -->
					<div style="padding-top: 5px; float: left; width: 440px;">
						Message: <span style="color:red;">*</span><br />
						<textarea cols="50" rows="5" name="message"></textarea><br />
					</div>
					<div style="padding-top: 3px; float: left;">
						<input type="submit" value="Send" />
					</div>
				</div>
			</div>

      </form>
	  
<?
}
?>	  
</html>