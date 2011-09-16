<link type="text/css" rel="stylesheet" media="all" href="style.css" />
<style type="text/css">

label {display:block;margin:2px;font-weight:bold;}
.form {padding:0px;margin:0px; color: #FFFFFF;}
.form li {width:300px;height:25px;margin:3px;padding:5px 5px 5px 30px;list-style:none;position:relative;}
*html .form li {left:-15px;}
.form li img {position:absolute;left:5px;}
.form .error {border:1px solid #A90000;background-color:#F8E5E5;}
.form .success {border:1px solid #74F019;background-color:#DEF8CA;}
.form .selected {border:1px solid #1AA8E1;background-color:#8DD8F7;}
#login_table .pad {padding:15px;}
.form input {width:180px; border-radius: 0 10px 0 10px;}

</style>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="val.js"></script>
<script>
var passed = 0;
</script>

<?
if($_POST['action'] == 'Submit') {
	//print_r($_POST);
	//echo "INSERT INTO custom_refer_friend VALUES ('', '$_POST[fname]', '$_POST[lname]', '$_POST[addr]', '$_POST[addr2]', '$_POST[city]', '$_POST[state]', '$_POST[zip]', '$_POST[email]', '$_POST[email1]', '$_POST[email2]', '$_POST[email3]', '$_POST[email4]', '$_POST[email5]', '$_POST[shirt_size]', '$_POST[shirt_style]', '$_POST[newsletter]') ";
	
	$success = mysql_query("INSERT INTO custom_refer_friend VALUES ('', '$_POST[fname]', '$_POST[lname]', '$_POST[addr]', '$_POST[addr2]', '$_POST[city]', '$_POST[state]', '$_POST[zip]', '$_POST[email]', '$_POST[email1]', '$_POST[email2]', '$_POST[email3]', '$_POST[email4]', '$_POST[email5]', '$_POST[shirt_size]', '$_POST[shirt_style]', '$_POST[newsletter]') ");
	//$id = mysql_insert_id();

	if($success) {

		$to      = $_POST[email];
		$subject = 'Model Latina T-Shirt Giveaway';
		$message = '
	+++++++++++++++++++++++++++++++++
	<br />
	<br />
	Thank you for sharing the video.  Once we\'ve validated the email addresses you\'ve provided, your T-Shirt will be sent.
	<br />
	<br />
	Best regards,
	<br />
	<br />
	The nuvoTV Digital Team
	<br />
	<br />
	+++++++++++++++++++++++++++++++++++ 
	';
		$headers  = 'MIME-Version: 1.0' . "\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\n";
		$headers .= 'From: nuvoTV <no-reply@mynuvotv.com>';

		mail($to, $subject, $message, $headers);
	}

?>
	<div class="page_middle_login" style="padding-left: 0px; border: 1px solid white; width: 490px; padding-bottom: 80px;">
		<img src="images/form-title.jpg" width="490" />
		<div class="page_middle_register" style="padding: 10px; color: white; height: 100px;" >
			<div style="float: left; margin-bottom: 10px; padding: 5px;" >
				+++++++++++++++++++++++++++++++++
				<br />
				<br />
				Thank you for sharing the video.  Once we've validated the email addresses you've provided, your T-Shirt will be sent.
				<br />
				<br />
				Best regards,
				<br />
				<br />
				The nuvoTV Digital Team
				<br />
				<br />
				+++++++++++++++++++++++++++++++++++ 
			</div>
		</div>	
			
	
<?
} else {

?>
	
	<div class="page_middle_login" style="padding-left: 0px; border: 1px solid white; width: 490px; padding-bottom: 80px;">
		<img src="images/form-title.jpg" width="490" />
		<div class="page_middle_register" style="padding: 10px; color: white;" >
			<div style="float: left; margin-bottom: 10px; padding: 5px;" >
				The first 200 people to share our video with five of their friends get this free super sexy Model Latina T-shirt.*
			</div>
			<img src="images/step1.jpg" width="480" />
			<form name="registration" id="registration" method="post" action="referafriend.php">

			<ul class="form">
			<li class="validated" id="fname_li" style="float: left; width: 400px;">
				<label for="fname" style="float: left;">First Name: <span style="font-weight: normal; color: white; font-size: 13px; margin-left: 5px;">(*required)</span></label>
				<input class="validated" type="text" name="fname" id="fname" style="float: right;" />
				<div id="fname_msg"></div>
			</li>
			<li class="validated" id="lname_li" style="float: left; width: 400px;">		
				<label for="lname" style="float: left;">Last Name: <span style="font-weight: normal; color: white; font-size: 13px; margin-left: 5px;">(*required)</span></label>
				<input type="text" name="lname" id="lname" style="float: right;" />
				<div id="lname_msg"></div>
			</li>
			<li class="validated" id="addr_li" style="float: left; width: 400px;">		
				<label for="addr" style="float: left;">Address: <span style="font-weight: normal; color: white; font-size: 13px; margin-left: 5px;">(*required)</span></label>
				<input type="text" name="addr" id="addr" style="float: right;" />
				<div id="addr_msg"></div>
			</li>
			<li class="validated" id="addr2_li" style="float: left; width: 400px;">			
				<label for="addr2" style="float: left;">Address 2:</label>
				<input type="text" name="addr2" id="addr2" style="float: right;" />
				<div id="addr2_msg"></div>
			</li>
			<li class="validated" id="city_li" style="float: left; width: 400px;">			
				<label for="city" style="float: left;">City: <span style="font-weight: normal; color: white; font-size: 13px; margin-left: 5px;">(*required)</span></label>
				<input type="text" name="city" id="city" style="float: right;" />
				<div id="city_msg"></div>
			</li>
			<li class="validated" id="state_li" style="float: left; width: 400px;">			
				<label for="state" style="float: left;">State: <span style="font-weight: normal; color: white; font-size: 13px; margin-left: 5px;">(*required)</span></label>
				<input type="text" name="state" id="state" style="float: right;" />
				<div id="state_msg"></div>
			</li>
			<li class="validated" id="zip_li" style="float: left; width: 400px;">			
				<label for="zip" style="float: left;">Zip Code: <span style="font-weight: normal; color: white; font-size: 13px; margin-left: 5px;">(*required)</span></label>
				<input type="text" name="zip" id="zip" style="float: right;" />
				<div id="zip_msg"></div>
			</li>		
			<li class="validated" id="email_li" style="float: left; width: 400px;">	
				<label for="email" style="float: left;">Email: <span style="font-weight: normal; color: white; font-size: 13px; margin-left: 5px;">(*required)</span></label>
				<input type="email" name="email" id="email" size="26" style="float: right;" />
				<div id="email_msg"></div>
			</li>
			<img src="images/step2.jpg" width="480" style="margin-top: 10px;" />
			<li class="validated" id="email1_li" style="float: left; width: 400px;">			
				<label for="email1" style="float: left;">Email 1: <span style="font-weight: normal; color: white; font-size: 13px; margin-left: 5px;">(*required)</span></label>
				<input type="text" name="email1" id="email1" style="float: right;" />
				<div id="email1_msg"></div>
			</li>
			<li class="validated" id="email2_li" style="float: left; width: 400px;">			
				<label for="email2" style="float: left;">Email 2: <span style="font-weight: normal; color: white; font-size: 13px; margin-left: 5px;">(*required)</span></label>
				<input type="text" name="email2" id="email2" style="float: right;" />
				<div id="email2_msg"></div>
			</li>
			<li class="validated" id="email3_li" style="float: left; width: 400px;">			
				<label for="email3" style="float: left;">Email 3: <span style="font-weight: normal; color: white; font-size: 13px; margin-left: 5px;">(*required)</span></label>
				<input type="text" name="email3" id="email3" style="float: right;" />
				<div id="email3_msg"></div>
			</li>
			<li class="validated" id="email4_li" style="float: left; width: 400px;">			
				<label for="email4" style="float: left;">Email 4: <span style="font-weight: normal; color: white; font-size: 13px; margin-left: 5px;">(*required)</span></label>
				<input type="text" name="email4" id="email4" style="float: right;" />
				<div id="email4_msg"></div>
			</li>
			<li class="validated" id="email5_li" style="float: left; width: 400px;">			
				<label for="email5" style="float: left;">Email 5: <span style="font-weight: normal; color: white; font-size: 13px; margin-left: 5px;">(*required)</span></label>
				<input type="text" name="email5" id="email5" style="float: right;" />
				<div id="email5_msg"></div>
			</li>
			<img src="images/step3.jpg" width="480" style="margin-top: 10px;" />				
			<li class="validated" id="shirt_size_li" style="height: 40px; margin-bottom: 20px;">
					<label for="shirt_size">Select your T-shirt size: <span style="font-weight: normal; color: white; font-size: 13px; float: right; margin-right: 65px;">(*required)</span></label> 
					<div id="shirt_size_img"></div>
					<select name="shirt_size" id="shirt_size">
						<option value="0" selected="selected">Select One...</option>
						<option value="s">Small</option>
						<option value="m">Medium</option>
						<option value="l">Large</option>
						<option value="xl">X-Large</option>
						<option value="2xl">2X-Large</option>
						<option value="3xl">3X-Large</option>
					</select>
					<div id="shirt_size_msg"></div>
			</li>
			<!-- <li class="validated" id="shirt_style_li">
				<label for="shirt_style">Choose your Shirt Style: <span style="font-weight: normal; color: white; font-size: 13px; float: right; margin-right: 65px;">(*required)</span></label>
				<div id="shirt_style_img"></div>
				<select name="shirt_style" id="shirt_style">
					<option value="0" selected="selected">Select One...</option>
					<option value="mllv">Model Latina Las Vegas</option>
					<option value="osmin">Operation Osmin</option>
					<option value="nuvo">nuvoTV: America's Nu Voice</option>
				</select>
				<div id="shirt_style_msg"></div>
			</li> -->
			<li class="validated" id="terms_li" style="height: 40px; margin-bottom: 20px;">
					<input type="checkbox" name="terms" id="terms" value="1" style="float: left; width: 10px; margin-right: 5px;" />
					<label for="terms"> &mdash; I agree to the terms. <br /><a href="/terms-of-use" style="color: white; font-size: 12px; text-decoration: underline;">Click here</a> for term details <span style="font-weight: normal; color: white; font-size: 13px; float: right; margin-right: 65px;">(*required)</span></label>
					<div id="terms_msg"></div>
			</li>
			<li class="validated" id="newsletter_li" style="height: 40px; margin-bottom: 20px;">
					<input type="checkbox" name="newsletter" id="newsletter" value="1" style="float: left; width: 10px; margin-right: 5px;" /> <span style="font-weight: normal; color: white; font-size: 13px; float: right; margin-right: 65px;">(*optional)</span>
					<label for="newsletter"> &mdash; Please add me to your Newsletter list.</label>
					<div id="newsletter_msg"></div>
			</li>
			
				
				<div style="padding-top: 10px;">
					<img class="login" style="width: auto; cursor: pointer;" src="images/submit.png" type="button" name="submit_but" onmousedown="var result = validateForm(); if(result == true) { document.forms['registration'].submit();}" />
				</div>
				
				<input type="hidden" name="action" value="Submit" />
				<div style="float: left; padding-top: 50px;">
					*Terms &amp; Conditions apply
				</div>
				<img src="images/ML_t-shirtv3.jpg" style="float: right; margin-top: -207px;" />
			</ul>
			</form>
		</div>
<?

}		

?>
	</div>
	
<script>
function validateForm()
{
	var fields = new Array("fname", "lname", "addr", "city", "state", "zip", "email", "email1", "email2", "email3", "email4", "email5", "shirt_size", "terms");
	var pass = true;
	var first = true;
 
	for(var i in fields) {
		if(fields[i] == 'fname' || fields[i] == 'lname' || fields[i] == 'addr' || fields[i] == 'city' || fields[i] == 'state' || fields[i] == 'zip' || fields[i] == 'shirt_size' || fields[i] == 'terms') {
			if(fields[i] == 'terms') {
				var x = document.getElementById(fields[i]).checked;
			} else {
				var x = document.getElementById(fields[i]).value;
			}
			var msg_id = fields[i]+"_msg";
			var li_id = fields[i].replace(/Field/i, "fo1li");
			document.getElementById(li_id).setAttribute("class", "");	
			document.getElementById(msg_id).innerHTML = '';
			if (x==null || x=="" || x == 0) {
				var label = fields[i].replace(/Field/i, "title");	
				var curr_class = document.getElementById(li_id).getAttribute("class");
				if(curr_class != "    error ") {
					document.getElementById(li_id).setAttribute("class", "    error ");
					if(fields[i] == 'terms') {
						document.getElementById(msg_id).innerHTML += '<p style="display: block; color: red;">You must agree to the terms and conditions.<br /></p>';
					} else if(fields[i] == 'shirt_size') { 
						document.getElementById(msg_id).innerHTML += '<p style="display: block; color: red;">This field is required.<br /></p>';
					} else {
						document.getElementById(msg_id).innerHTML += '<p style="display: block; color: red;"><br />This field is required.<br /></p>';
					}
				}
				pass = false;
			}  else {
				var li_id = fields[i].replace(/Field/i, "fo1li");
				document.getElementById(li_id).setAttribute("class", "");
			}
		} else if(fields[i] == 'email' || fields[i] == 'email1' || fields[i] == 'email2' || fields[i] == 'email3' || fields[i] == 'email4' || fields[i] == 'email5') {
			var x = document.getElementById(fields[i]).value;
			var atpos=x.indexOf("@");
			var dotpos=x.lastIndexOf(".");
			var li_id = fields[i].replace(/Field/i, "fo1li");
			var msg_id = fields[i]+"_msg";
			document.getElementById(li_id).setAttribute("class", "");	
			document.getElementById(msg_id).innerHTML = '';
			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
				var label = fields[i].replace(/Field/i, "title");	
				var curr_class = document.getElementById(li_id).getAttribute("class");
				if(curr_class != "    error ") {
					document.getElementById(li_id).setAttribute("class", "    error ");
					document.getElementById(msg_id).innerHTML += '<p style="display: block; color: red;"><br />Please enter a valid e-mail address.<br /></p>';
				}
				pass = false;
			}  else {
				var li_id = fields[i].replace(/Field/i, "fo1li");
				document.getElementById(li_id).setAttribute("class", "");
			}
		}
	}
	if(pass == false) {
		//document.getElementById('errorLi').style.display = 'block';
		//self.scrollTo(0,0);
		return false;
	} else {
		return true;
	}
}
</script>	

</body>
