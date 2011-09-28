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

    $EditAdminString= "Select * From tbladmin Where AdminID = $_GET[AdminID];";
    $EditAdmin = mysql_query($EditAdminString);   		
    
	
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
    <br />
<?php    
if (isset($_POST["AddAdmin"])){
	
if ($_POST['AdminUserName'] && $_POST['AdminPassword'] && $_POST['AdminEmail']){

    $db = mysql_connect($host,$user,$pw)
       or die("Cannot connect to mySQL.");

    mysql_select_db($database,$db)
        or die("Cannot connect to database.");
		
 $addadminquery = "Update tbladmin set AdminUserName = '$_POST[AdminUserName]', AdminPassword = '$_POST[AdminPassword]', AdminEmail = '$_POST[AdminEmail]', AdminSuperUser = $_POST[AdminSuperUser], AdminDeleted = 0 where AdminID = $_GET[AdminID];";

 $addadmin = mysql_query($addadminquery );

    mysql_close($db);
?>	
	<table border="0" cellpadding="0" cellspacing="0">
    <tr bgcolor="#CC0000">
    <td align="center"><font color="white" size="2"><strong>Edit Admin</strong></font></td>
    </tr>
    <tr bgcolor="#999999">
    <td align="center"><font color="green" size="2"><strong>Your administrator information has been updated.</strong></font></td>
    </tr> 
    </table>  
<?php
}


else {
?>	
<table border="0" cellpadding="0" cellspacing="0">
    <tr bgcolor="#CC0000">
    <td align="center"><font color="white" size="2"><strong>Edit Admin</strong></font></td>
    </tr>
    <tr bgcolor="#999999">
    <td align="center"><font color="#CC0000" size="1"><strong>Please fill out the following fields.</strong></font></td>
    </tr>        
    <tr>
    <td>
     <form action="EditAdmin.php?AdminID=<?php echo $_GET['AdminID'];?>" method="post">    
    <table bgcolor="#999999" border="0" cellpadding="1" cellspacing="0">
    
    
    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Admin User Name&nbsp;&nbsp;</strong></font></td>
    <td align="left"><input name="AdminUserName" type="text" value="<?php echo $_POST['AdminUserName'];?>"/>
            <?php 
if (! ($_POST['AdminUserName']))  { 
echo "<font color=\"red\">*</font>";}
?>
    </td>
    </tr>

    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Admin Password&nbsp;&nbsp;</strong></font></td>
    <td align="left"><input name="AdminPassword" type="text" value="<?php echo $_POST['AdminPassword'];?>" />
            <?php 
if (! ($_POST['AdminPassword']))  { 
echo "<font color=\"red\">*</font>";}
?>
    </td>
    </tr>

    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Admin Email&nbsp;&nbsp;</strong></font></td>
    <td align="left"><input name="AdminEmail" type="text"  value="<?php echo $_POST['AdminEmail'];?>"/>
            <?php 
if (! ($_POST['AdminEmail']))  { 
echo "<font color=\"red\">*</font>";}
?>
    </td>
    </tr>

    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Admin Super User?&nbsp;&nbsp;</strong></font></td>
    <td align="left"><Select name="AdminSuperUser">
<?php 
if ($_POST['AdminSuperUser'] == 0){       
  echo  "<option value=\"0\" selected>No</option>";
  echo  "<option value=\"1\" >Yes</option>";
}

else {       
  echo  "<option value=\"0\" selected>No</option>";
  echo  "<option value=\"1\" selected>Yes</option>";
}
?>	
	</Select>
    </td>
    </tr>
    

      
        <input name="AddAdmin" type="hidden" value"YES"/>         
        <tr>
    <td></td>
    <td align="right"><input  type="submit" value="Update Admin" /></td>
    </tr>
    
    </table>
    </form>
    </td>
    </tr>
    </table>

<?php
}
	
}
else{
?>		    
    <table border="0" cellpadding="0" cellspacing="0">
    <tr bgcolor="#CC0000">
    <td align="center"><font color="white" size="2"><strong>Edit Admin</strong></font></td>
    </tr>
    <tr>
    <td>
     <form action="EditAdmin.php?AdminID=<?php echo $_GET['AdminID'];?>" method="post">   
    <table bgcolor="#999999" border="0" cellpadding="1" cellspacing="0">
<?php    
while ($row = mysql_fetch_assoc($EditAdmin)) {  
?>  
    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Admin User Name&nbsp;&nbsp;</strong></font></td>
    <td align="left"><input name="AdminUserName" type="text" value="<?php echo $row['AdminUserName'];?>" /></td>
    </tr>
    
    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Admin Password&nbsp;&nbsp;</strong></font></td>
    <td align="left"><input name="AdminPassword" type="text"  value="<?php echo $row['AdminPassword'];?>" /></td>
    </tr>
    
    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Admin Email&nbsp;&nbsp;</strong></font></td>
    <td align="left"><input name="AdminEmail" type="text" value="<?php echo $row['AdminEmail'];?>"/></td>
    </tr>
    
    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Admin Super User?&nbsp;&nbsp;</strong></font></td>
    <td align="left"><Select name="AdminSuperUser">
<?php 
if ($row['AdminSuperUser'] == 0){       
  echo  "<option value=\"0\" selected>No</option>";
  echo  "<option value=\"1\" >Yes</option>";
}

else {       
  echo  "<option value=\"0\" selected>No</option>";
  echo  "<option value=\"1\" selected>Yes</option>";
}
?>	
	</Select>
    </td>
    </tr>
 <?php
}
?>
        <input name="AdminID" type="hidden" value="<?php echo $_GET['AdminID'];?>"/> 
        <input name="AddAdmin" type="hidden" value"YES"/>         
        <tr>
    <td></td>
    <td align="right"><input  type="submit" value="Update Admin" /></td>
    </tr>
    
    </table>
    </form>
    </td>
    </tr>
    </table>
<?php
}
?>

    </td>
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