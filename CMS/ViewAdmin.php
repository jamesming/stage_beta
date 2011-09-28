<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
# start the session
session_start(); 

# if the session admin id variable exists
if ($_SESSION['AdminID']) {

$host = "192.168.110.211";  //This is the server where your database resides
$user = "transuser";           //This should be your Sandbox login
$pw = "SiTV!!tr4nsus3r2009";              //This should be your  password
$database = "ArkCMS";       //Your database is the same as your Sandbox login

# connect to the database
    $db = mysql_connect($host,$user,$pw)
       or die("Cannot connect to mySQL.");

    mysql_select_db($database,$db)
        or die("Cannot connect to database.");

#query to get admin info		
    $query = "Select * From tbladmin Where AdminID = $_SESSION[AdminID];";
    $getadmin = mysql_query($query);
	$GetAllAdminsString = "Select * From tbladmin Where AdminDeleted = 0;";
    $GetAllAdmins = mysql_query($GetAllAdminsString);			
    		
    mysql_close($db);
?>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MY NUVO TV - CMS</title>
<link href="cms_css/cms_css.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #C90;
}
a:link {
	color: #F00;
	text-decoration: none;
}
a:visited {
	color: #F00;
	text-decoration: none;
}
a:hover {
	color: #CCC;
	text-decoration: underline;
}
a:active {
	color: #F00;
	text-decoration: none;
}
a {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
</style>
</head>

<body background="cms_images/black_hcomb_background.jpg">
<div class="wrapper">
<div class="header"></div>

<div class="main_content_box">
<table width="900" border="1" cellspacing="2" cellpadding="2">

  <tr valign="top">
    <td width="207" >
<table border="0" cellpadding="2" cellspacing="2" width="207">
<?php
while ($row = mysql_fetch_assoc($getadmin)) {
	if ($row['AdminSuperUser'] == 1){
?>		
<tr bgcolor="#999999">
<td>&nbsp;<strong><font color="#FFFFFF" size="2">Admin</font></strong></td>
</tr>
<tr>
<td><a href="AddAdmin.php">Add Administrator</a></td>
</tr>
<tr>
<td><a href="ViewAdmin.php">View Administrators</a></td>
</tr>
<?php
}
}
?>
<tr bgcolor="#999999">
<td>&nbsp;<strong><font color="#FFFFFF" size="2">Homepage Carousel</font></strong></td>
</tr>
<tr>
<td><a href="AddCarouselItem.php">Add Carousel Item</a></td>
</tr>
<tr>
<td><a href="ViewCarouselItems.php">View Carousel Items</a></td>
</tr>


</table>

     
      </td>
    <td width="673" align="center">
     <table width="600" border="1" cellpadding="2" cellspacing="0" bordercolor="black" >
     <tr bgcolor="#CC0000">
     <td align="center" width="150"><font color="white" size="2"><strong>UserName</strong></font></td>
     <td align="center" width="150"><font color="white" size="2"><strong>Password</strong></font></td>
     <td align="center" width="150"><font color="white" size="2"><strong>Email</strong></font></td>
     <td align="center" width="100"><font color="white" size="2"><strong>Super User</strong></font></td>
     <td align="center" width="30"><font color="white" size="2"><strong>Edit</strong></font></td>
     <td align="center" width="30"><font color="white" size="2"><strong>Delete</strong></font></td>
     </tr>
     </table>
    
    <table width="600" border="1" cellpadding="2" cellspacing="0" bordercolor="black"  >
<?php       while ($row = mysql_fetch_assoc($GetAllAdmins)) {  ?>
<tr bgcolor="#999999" valign="top">
     <td align="left" width="150"><font color="black" size="1"><strong><?php echo $row['AdminUserName'];?></strong></font></td>    
     <td align="left" width="150"><font color="black" size="1"><?php echo $row['AdminPassword'];?></font></td>
      <td align="left" width="150"><font color="black" size="1"><?php echo $row['AdminEmail'];?></font></td>
      <td align="left" width="100"><font color="black" size="1">
<?php if ($row['AdminSuperUser'] ==1){
	echo "Yes";
}
else {
    echo "No";	
}
?>     
      </font></td>
     <td align="center" width="30"><a href="EditAdmin.php?AdminID=<?php echo $row['AdminID'];?>"><img src="images/edit.png" width="16" height="16" border="0" /></a></td>
     <td align="center" width="30"><a href="DeleteAdmin.php?AdminID=<?php echo $row['AdminID'];?>"><img src="images/no.png" width="16" height="16" border="0" /></a></td>
  </tr>
<?php 
} ?> 
</table>     
     
  </tr>
</table>

</div>
</div>
<div class="footer">
</div>
</body>
</html>
<?php
}

# if the session adminid variable doesn't exist
# redirect the user to the login page
else {
    $url = "index.php";
    header("Location: ".$url);  
}

?>