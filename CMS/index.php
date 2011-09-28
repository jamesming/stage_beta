<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
if (isset($_POST['Login'])) { 

$host = "192.168.110.211";  //This is the server where your database resides
$user = "transuser";           //This should be your Sandbox login
$pw = "SiTV!!tr4nsus3r2009";              //This should be your  password
$database = "ArkCMS";       //Your database is the same as your Sandbox login

$db = mysql_connect($host,$user,$pw)
       or die("Cannot connect to mySQL.");

mysql_select_db($database,$db)
        or die("Cannot connect to database.");
		
	
		
$query = "Select * From tbladmin Where AdminUserName = '$_POST[AdminUserName]' and AdminPassword = '$_POST[AdminPassword]' ;";

$result = mysql_query($query);		

$count = mysql_num_rows($result);
		
mysql_close($db);



If ($count == "1") 
{
 // this sets variables in the session 
session_start(); 
 
while ($data = mysql_fetch_object($result)) {
$_SESSION['AdminID']=$data->AdminID;

header("Location: AdminLoggedIn.php"); 
} 
}

else {
?>

<head>
<title>MYNUVOTV.COM - Login</title>
<!--Authored by - ARK INTERACTIVE SOLUTIONS exclusively for MYNUVOTV.COM-->
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="css/style.css" title="style" media="screen" />

<script type="text/javascript">
/* <![CDATA[ */
	$(document).ready(function(){
			$(".block").fadeIn(1000);				   
			$(".idea").fadeIn(1000);
			$('.idea').supersleight();
			$('#username').example('Username');	
			$('#password').example('Password');
	});
/* ]]> */
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
body {
	background-color: #000000;
	background-image: url(images/black_hcomb_background.jpg);
}
a:link {
	color: #6FF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #6FF;
}
a:hover {
	text-decoration: underline;
	color: #999;
}
a:active {
	text-decoration: none;
	color: #999;
}
</style>
</head>

<body>
    <div id="wrap">
      <div align="center"><img src="images/nuvotv-logo.png" alt="" width="211" height="92" />
      </div>
      <div class="idea">
        <img src="images/message.png" width="22" height="22" title="Please enter your username and password to login below."/>
        <p>Please enter a valid Username and Password!</p>
        </div>
        
<div class="block">
            <form action="index.php" method="post">
            <div class="left"></div>
            <div class="right">
                <div class="div-row">
                	<input type="text" name="AdminUserName"   value="<?php echo $_POST['AdminUserName'];?>" />
                                    </div>
                <div class="div-row">
                     <input type="password"  name="AdminPassword" onfocus="this.value='';" onblur="if (this.value=='') {this.value='************';}" value="************" />
                 <input type="hidden" name="Login" value="yes" />    
                </div>
                <div class="rm-row">
                &#8594; <a href="index.php" title="Forget your password?">Forget your password?</a></div>
                <div class="send-row">
                    <button id="login" value="" type="submit" name="send"></button>
                </div>
            </div>
            </form>

        </div>
    </div>
</body>

<?php
}
}

else {
?>





<head>
<title>MYNUVOTV.COM - Login</title>
<!--Authored by - ARK INTERACTIVE SOLUTIONS exclusively for MYNUVOTV.COM-->
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="css/style.css" title="style" media="screen" />

<script type="text/javascript">
/* <![CDATA[ */
	$(document).ready(function(){
			$(".block").fadeIn(1000);				   
			$(".idea").fadeIn(1000);
			$('.idea').supersleight();
			$('#username').example('Username');	
			$('#password').example('Password');
	});
/* ]]> */
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
body {
	background-color: #000000;
	background-image: url(images/black_hcomb_background.jpg);
}
a:link {
	color: #6FF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #6FF;
}
a:hover {
	text-decoration: underline;
	color: #999;
}
a:active {
	text-decoration: none;
	color: #999;
}
</style>
</head>

<body>
    <div id="wrap">
      <div align="center"><img src="images/nuvotv-logo.png" alt="" width="211" height="92" />
      </div>
      <div class="idea">
        <img src="images/message.png" width="22" height="22" title="Please enter your username and password to login below."/>
        <p>Please enter your details below to Login!</p>
        </div>
        
<div class="block">
            <form action="index.php" method="post">
            <div class="left"></div>
            <div class="right">
                <div class="div-row">
                	<input type="text"  name="AdminUserName" onfocus="this.value='';" onblur="if (this.value=='') {this.value='Username';}" value="Username"/>
                                    </div>
                <div class="div-row">
                     <input type="password"  name="AdminPassword" onfocus="this.value='';" onblur="if (this.value=='') {this.value='************';}" value="************"/>
                </div>
                <div class="rm-row">
                &#8594; <a href="index.php" title="Forget your password?">Forget your password?</a></div>
                <div class="send-row">
                     <input type="hidden" name="Login" value="yes" /> 
                    <button id="login"  type="submit" ></button>
                </div>
            </div>
            </form>
        </div>
    </div>
</body>

<?php
} ?>
</html>