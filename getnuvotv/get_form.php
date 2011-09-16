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
	
		echo '<p style="padding-top: 10px; padding-left: 10px; font-size: 16px; font-family: Arial;">Thank you for your interest in nuvoTV.<br />We\'ll keep you informed with the latest events surrounding the July 4th launch of nuvoTV!</p>';
		
		$phone = $_POST[user][mobile_phone];
		$email = $_POST[user_attributes][email_address];
	
		$q = mysql_query("INSERT INTO custom_page_views VALUES('', '$_SERVER[REQUEST_URI]', NOW(), '$_SERVER[HTTP_USER_AGENT]', '$_SERVER[HTTP_REFERER]', '$_SERVER[REMOTE_ADDR]', '$phone', '$email') ");
		
	} else {
 

?> 

		<form action="get_form.php" method="post">

			<p>
              <label for="user_mobile_phone">Mobile Phone
              </label>
              <input id="user_mobile_phone" name="user[mobile_phone]" placeholder="Enter your mobile number" size="40" type="text" />
            </p>
              
            <p><b>or</b></p>
            
              <p>
                <input type="hidden" name="e" value=""/>

                <label for="user_attributes_email_address">Email Address
                  
                </label>
                <input id="user_attributes_email_address" name="user_attributes[email_address]" placeholder="Enter your e-mail address" size="40" type="text" />
              </p>
            

			<input class="button" type="submit" value="Save" id="submit" name="submit" />


      </form>
	  
<?
}
?>	  
</html>