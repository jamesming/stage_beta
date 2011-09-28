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

    $GetHomePageItemsString = "Select * From tblhomepage Where HomePageDeleted = 0;";
    $GetHomePageItems = mysql_query($GetHomePageItemsString);	
			
    		
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
<table width="1200" border="1" cellspacing="2" cellpadding="2" align="center">

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
    <td width="997" align="center">
     <table width="950" border="1" cellpadding="2" cellspacing="1" bordercolor="black" >
     <tr bgcolor="#CC0000">
     <td align="center" width="150"><font color="white" size="2"><strong>Name</strong></font></td>
     <td align="center" width="150"><font color="white" size="2"><strong>Images</strong></font></td>
     <td align="center" width="150"><font color="white" size="2"><strong>Links</strong></font></td>
     <td align="center" width="150"><font color="white" size="2"><strong>Premier</strong></font></td>
     <td align="center"width="150"><font color="white" size="2"><strong>Weekly</strong></font></td>
     <td align="center" width="16"><font color="white" size="2"><strong>1</strong></font></td>
     <td align="center" width="16"><font color="white" size="2"><strong>2</strong></font></td>
     <td align="center" width="16"><font color="white" size="2"><strong>3</strong></font></td>
     <td align="center" width="16"><font color="white" size="2"><strong>4</strong></font></td>
     <td align="center"><font color="white" size="2"><strong>Edit</strong></font></td>
     <td align="center"><font color="white" size="2"><strong>Delete</strong></font></td>
     </tr>
     </table>
     
     <table border="1" cellpadding="2" cellspacing="0" bordercolor="black" width="950" >
<?php       while ($row = mysql_fetch_assoc($GetHomePageItems)) {  ?>
     <tr bgcolor="#999999" valign="top">
     <td align="left" width="150"><font color="black" size="1"><strong><?php echo $row['HomePageName'];?></strong></font></td>    
     <td align="left" width="150"><font color="black" size="1">
      <strong>Hero Image:</strong><br />
      <?php echo $row['HomePageHeroImage'];?><br />
      <strong>Side Image:</strong><br />
      <?php echo $row['HomePageSideImage'];?><br />      
      <strong>Premier Image:</strong><br />
      <?php echo $row['HomePagePremierImage'];?><br />
      <strong>Day/Date Image:</strong><br />
      <?php echo $row['HomePageDayDateImage'];?><br />
      <strong>Tonight Image:</strong><br />
      <?php echo $row['HomePageTonightImage'];?><br />                  
      </font></td>
     <td align="left"  width="150"><font color="black" size="1">
      <strong>Show Page Link :</strong><br />
      <?php echo $row['HomePageShowPageLink'];?><br />
      <strong>Facebook Link:</strong><br />
      <?php echo $row['HomePageFacebookLink'];?><br />      
      <strong>Video Link:</strong><br />
      <?php echo $row['HomePageVideoLink'];?><br />     
     </font></td>      
     <td align="left"  width="150"><font color="black" size="1">
      <strong>Premier Date:</strong><br />
      <?php echo date("l F d, Y",strtotime($row['HomePagePremierDate']));?><br />
      <strong>Premier Time:</strong><br />
      <?php echo $row['HomePagePremierTime'];?><br />  
     </font></td>
     <td align="left"  width="150"><font color="black" size="1">
      <strong>Weekly Day:</strong><br />
      <?php echo $row['HomePageWeeklyDay'];?><br />
      <strong>Weekly Time:</strong><br />
      <?php echo $row['HomePageWeeklyTime'];?><br />  
     </font></td>

     <td align="center" width="16">
     <?php if ($row['HomePageOrder'] == 1){?>
     <a href="UpdateItemOrder1.php?CarouselID=<?php echo $row['HomePageID'];?>&OrderID=1"><img src="images/green-checkmark.png" width="16" height="16" border="0" /></a>
     <?php 
	 }
	 else {
	 ?>
     <a href="UpdateItemOrder1.php?CarouselID=<?php echo $row['HomePageID'];?>&OrderID=1"><img src="images/delete.png" width="16" height="16" border="0" /></a>
     <?php 
     }
	 ?>
     </td>
     <td align="center"width="16">
     <?php if ($row['HomePageOrder'] == 2){?>
     <a href="UpdateItemOrder2.php?CarouselID=<?php echo $row['HomePageID'];?>&OrderID=2"><img src="images/green-checkmark.png" width="16" height="16" border="0" /></a>
     <?php 
	 }
	 else {
	 ?>
     <a href="UpdateItemOrder2.php?CarouselID=<?php echo $row['HomePageID'];?>&OrderID=2"><img src="images/delete.png" width="16" height="16" border="0" /></a>
     <?php 
     }
	 ?>     
     </td>
     <td align="center"width="16">
     <?php if ($row['HomePageOrder'] == 3){?>
     <a href="UpdateItemOrder3.php?CarouselID=<?php echo $row['HomePageID'];?>&OrderID=3"><img src="images/green-checkmark.png" width="16" height="16"border="0" /></a>
     <?php 
	 }
	 else {
	 ?>
     <a href="UpdateItemOrder3.php?CarouselID=<?php echo $row['HomePageID'];?>&OrderID=3"><img src="images/delete.png" width="16" height="16" border="0" /></a>
     <?php 
     }
	 ?>   
     </td>
     <td align="center" width="16">
     <?php if ($row['HomePageOrder'] == 4){?>
     <a href="UpdateItemOrder4.php?CarouselID=<?php echo $row['HomePageID'];?>&OrderID=4"><img src="images/green-checkmark.png" width="16" height="16"border="0" /></a>
     <?php 
	 }
	 else {
	 ?>
     <a href="UpdateItemOrder4.php?CarouselID=<?php echo $row['HomePageID'];?>&OrderID=4"><img src="images/delete.png" width="16" height="16" border="0" /></a>
     <?php 
     }
	 ?>   
     </td>
     <td align="center"><a href="EditItem.php?CarouselID=<?php echo $row['HomePageID'];?>"><img src="images/edit.png" width="16" height="16" border="0" /></a></td>
     <td align="center"><a href="DeleteItem.php?CarouselID=<?php echo $row['HomePageID'];?>"><img src="images/no.png" width="16" height="16" border="0" /></a></td>
     </tr>
<?php 
} ?>     
     </table>    
    
 <?php ?>    
    </td>
  </tr>
</table>
<div class="spacer_horizontal"></div>

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