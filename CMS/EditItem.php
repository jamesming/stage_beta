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

    $GetDaysString= "Select * From tblday  Order By DayID ASC;";
    $GetDays = mysql_query($GetDaysString);	

    $GetTime1String= "Select * From tbltime;";
    $GetTime1 = mysql_query($GetTime1String);		
		
    $GetTime2String= "Select * From tbltime;";
    $GetTime2 = mysql_query($GetTime2String);	   		
    
    $GetItemString = "Select * From tblhomepage Where HomePageID = $_GET[CarouselID];";
    $GetItem = mysql_query($GetItemString);
?>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MY NUVO TV - CMS</title>
<link href="cms_css/cms_css.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
<script type="text/javascript" src="jsDatePick.min.1.3.js"></script>
<!-- 
	After you copied those 2 lines of code , make sure you take also the files into the same folder :-)
    Next step will be to set the appropriate statement to "start-up" the calendar on the needed HTML element.
    
    The first example of Javascript snippet is for the most basic use , as a popup calendar
    for a text field input.
-->
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"CarouselPremierDate",
			dateFormat:"%Y-%m-%d"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
		
		
	
	};
</script>
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
if (isset($_POST["AddCarouselItem"])){
	
if ($_POST['CarouselName'] && $_POST['CarouselHeroImage'] && $_POST['CarouselSideImage'] && $_POST['CarouselPremierImage'] && $_POST['CarouselDayDateImage'] 
&& $_POST['CarouselTonightImage'] && $_POST['CarouselShowPageLink'] && $_POST['CarouselVideoLink'] && $_POST['CarouselPremierDate'] && $_POST['CarouselPremierTime'] 
&& $_POST['CarouselWeeklyDay'] && $_POST['CarouselWeeklyTime'] ){

$hero_path = $_POST['CarouselHeroImage'];
$Hero = basename($hero_path);

$side_path = $_POST['CarouselSideImage'];
$Side = basename($side_path);

$premier_path = $_POST['CarouselPremierImage'];
$Premier = basename($premier_path);

$day_path = $_POST['CarouselDayDateImage'];
$Day = basename($day_path);

$tonight_path = $_POST['CarouselTonightImage'];
$Tonight = basename($tonight_path);

if ($_POST['CarouselFacebookLink'] == ''){
$UpdateItemString = "Update tblhomepage Set  
HomePageName = '$_POST[CarouselName]', 
HomePageHeroImage = '$Hero', 
HomePageSideImage = '$Side', 
HomePagePremierImage = '$Premier',
HomePageDayDateImage = '$Day', 
HomePageTonightImage ='$Tonight', 
HomePageShowPageLink ='$_POST[CarouselShowPageLink]', 
HomePageFacebookLink = '',
HomePageVideoLink = '$_POST[CarouselVideoLink]',
HomePagePremierDate = '$_POST[CarouselPremierDate]', 
HomePagePremierTime = '$_POST[CarouselPremierTime]',
HomePageWeeklyDay = '$_POST[CarouselWeeklyDay]',
HomePageWeeklyTime = '$_POST[CarouselWeeklyTime]' 
where HomePageID = $_GET[CarouselID];";
$UpdateItem = mysql_query($UpdateItemString);	
}
else {
$UpdateItemString = "Update tblhomepage Set  HomePageName = '$_POST[CarouselName]', HomePageHeroImage = '$Hero', HomePageSideImage = '$Side', HomePagePremierImage = '$Premier', HomePageDayDateImage = '$Day', HomePageTonightImage ='$Tonight', HomePageShowPageLink ='$_POST[CarouselShowPageLink]', HomePageFacebookLink = '$_POST[CarouselFacebookLink]',
HomePageVideoLink = '$_POST[CarouselVideoLink]', HomePagePremierDate = '$_POST[CarouselPremierDate]', HomePagePremierTime = '$_POST[CarouselPremierTime]',
HomePageWeeklyDay = '$_POST[CarouselWeeklyDay]', HomePageWeeklyTime = '$_POST[CarouselWeeklyTime]' Where HomePageID = $_GET[CarouselID];";
$UpdateItem = mysql_query($UpdateItemString);	
}
?>

<table border="0" cellpadding="0" cellspacing="0">
    <tr bgcolor="#CC0000">
    <td align="center"><font color="white" size="2"><strong>Add Carousel Item </strong></font></td>
    </tr>
    <tr bgcolor="#999999">
    <td align="center"><font color="green" size="1"><strong><font size="2">Your Homepage Carousel Item has been updated!</font> </strong></font></td>
    </tr>    
    </table>
<?php
}


else {
?>	
<table border="0" cellpadding="0" cellspacing="0">
    <tr bgcolor="#CC0000">
    <td align="center"><font color="white" size="2"><strong>Edit Carousel Item</strong></font></td>
    </tr>
    <tr bgcolor="#999999">
    <td align="center"><font color="#CC0000" size="1"><strong>Please fill out the following fields.</strong></font></td>
    </tr>    
    <tr>
    <td>
    <form action="EditItem.php?CarouselID=<?php echo $_GET['CarouselID'];?>" method="post">    
    <table bgcolor="#999999" border="0" cellpadding="1" cellspacing="0">
    
    
    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Item Name&nbsp;&nbsp;</strong></font></td>
    <td align="left"><input name="CarouselName" type="text" value="<?php echo $_POST['CarouselName']; ?>" />
    <?php 
if (! ($_POST['CarouselName']))  { 
echo "<font color=\"red\">*</font>";}
?>
    </td>
    </tr>
    
    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Hero Image&nbsp;&nbsp;</strong></font></td>
    <td align="left"><input name="CarouselHeroImage" type="file" />
    <?php 
if (! ($_POST['CarouselHeroImage']))  { 
echo "<font color=\"red\">*</font>";}
?>
    </td>
    </tr>
    
    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Side Tab Image&nbsp;&nbsp;</strong></font></td>
    <td align="left"><input name="CarouselSideImage" type="file" />
    <?php 
if (! ($_POST['CarouselSideImage']))  { 
echo "<font color=\"red\">*</font>";}
?>
    </td>
    </tr>
    
    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Premier Image&nbsp;&nbsp;</strong></font></td>
    <td align="left"><input name="CarouselPremierImage" id="CarouselPremierImage" type="file" />
    <?php 
if (! ($_POST['CarouselPremierImage']))  { 
echo "<font color=\"red\">*</font>";}
?>
    </td>
    </tr>
    
    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Day Image&nbsp;&nbsp;</strong></font></td>
    <td align="left"><input name="CarouselDayDateImage" type="file" />
<?php 
if (! ($_POST['CarouselDayDateImage']))  { 
echo "<font color=\"red\">*</font>";}
?>    
    </td>
    </tr>
        <tr>
    <td align="left"><font color="black"><strong>&nbsp;Tonight Image&nbsp;&nbsp;</strong></font></td>
    <td align="left"><input name="CarouselTonightImage" type="file" />
<?php 
if (! ($_POST['CarouselTonightImage']))  { 
echo "<font color=\"red\">*</font>";}
?>    
    </td>
    </tr>
    
    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Show Page Link&nbsp;&nbsp;</strong></font></td>
    <td align="left"><input name="CarouselShowPageLink" type="text" value="<?php echo $_POST['CarouselShowPageLink']; ?>" />
    <?php 
if (! ($_POST['CarouselShowPageLink']))  { 
echo "<font color=\"red\">*</font>";}
?>
    </td>
    </tr>
    
    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Facebook Link&nbsp;&nbsp;</strong></font></td>
    <td align="left"><input name="CarouselFacebookLink" type="text"value="<?php echo $_POST['CarouselFacebookLink']; ?>" />

    </td>
    </tr>
    
    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Video Link&nbsp;&nbsp;</strong></font></td>
    <td align="left"><input name="CarouselVideoLink" type="text"value="<?php echo $_POST['CarouselVideoLink']; ?>" />
    <?php 
if (! ($_POST['CarouselVideoLink']))  { 
echo "<font color=\"red\">*</font>";}
?>
    </td>
    </tr>    

    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Premier Date&nbsp;&nbsp;</strong></font></td>
    <td align="left"><input name="CarouselPremierDate" id="CarouselPremierDate"  type="text" value="<?php echo $_POST['CarouselPremierDate']; ?>"/>
   <?php 
if (! ($_POST['CarouselPremierDate']))  { 
echo "<font color=\"red\">*</font>";}
?> 
    </td>
    </tr>
    
    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Premier Time&nbsp;&nbsp;</strong></font></td>
    <td align="left">
<select name="CarouselPremierTime">
<option>Choose...</option> 
<?php  
  while ($row = mysql_fetch_assoc($GetTime1)) {   
  if ($row['Time'] == $_POST['CarouselPremierTime']){ 
  echo  "<option value=\"".$row['Time']."\" SELECTED>".$row['Time']."</option> ";
  }
  else{
 
    echo  "<option value=\"".$row['Time']."\">".$row['Time']."</option>";
  }
  }
?>  
</select>
<?php 
if (! ($_POST['CarouselPremierTime']))  { 
echo "<font color=\"red\">*</font>";}
?>    
    </td>
    </tr>
    
    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Weekly Day&nbsp;&nbsp;</strong></font></td>
    <td align="left">
<select name="CarouselWeeklyDay">
echo  "<option>Choose...</option>"; 
<?php  
  while ($row = mysql_fetch_assoc($GetDays)) {   
  if ($row['Day'] == $_POST['CarouselWeeklyDay']){ 
  echo  "<option value=\"".$row['Day']."\" SELECTED>".$row['Day']."</option> ";
  }
  else{
	
    echo  "<option value=\"".$row['Day']."\">".$row['Day']."</option>";
  }
  }
?>  
</select>     
<?php 
if (! ($_POST['CarouselWeeklyDay']))  { 
echo "<font color=\"red\">*</font>";}
?>    
    </td>
    </tr>   
    
    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Weekly Time&nbsp;&nbsp;</strong></font></td>
    <td align="left">
<select name="CarouselWeeklyTime">
echo  "<option>Choose...</option>"; 
<?php  
  while ($row = mysql_fetch_assoc($GetTime2)) {   
  if ($row['Time'] == $_POST['CarouselWeeklyTime']){ 
  echo  "<option value=\"".$row['Time']."\" SELECTED>".$row['Time']."</option> ";
  }
  else{

    echo  "<option value=\"".$row['Time']."\">".$row['Time']."</option>";
  }
  }
?>  
</select>    
<?php 
if (! ($_POST['CarouselWeeklyTime']))  { 
echo "<font color=\"red\">*</font>";}
?>    
    </td>
    </tr>   
        <input name="AddCarouselItem" type="hidden" value"YES"/>         
        <tr>
    <td></td>
    <td align="right"><input  type="submit" value="Update Carousel Item" /></td>
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
    <td align="center"><font color="white" size="2"><strong>Edit Carousel Item</strong></font></td>
    </tr>
    <tr>
    <td>
    <form action="EditItem.php?CarouselID=<?php echo $_GET['CarouselID'];?>" method="post">      
    <table bgcolor="#999999" border="0" cellpadding="1" cellspacing="0">
    
 <?php   while ($row = mysql_fetch_assoc($GetItem)) {   ?> 
    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Item Name&nbsp;&nbsp;</strong></font></td>
    <td align="left"><input name="CarouselName" type="text" value="<?php echo $row['HomePageName'];?>" /></td>
    </tr>
    
    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Hero Image&nbsp;&nbsp;</strong></font></td>
    <td align="left"><input name="CarouselHeroImage" type="file" /></td>
    </tr>
    
    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Side Tab Image&nbsp;&nbsp;</strong></font></td>
    <td align="left"><input name="CarouselSideImage" type="file" /></td>
    </tr>
    
    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Premier Image&nbsp;&nbsp;</strong></font></td>
    <td align="left"><input name="CarouselPremierImage" type="file" /></td>
    </tr>
    
    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Day Image&nbsp;&nbsp;</strong></font></td>
    <td align="left"><input name="CarouselDayDateImage" type="file" /></td>
    </tr>
        <tr>
    <td align="left"><font color="black"><strong>&nbsp;Tonight Image&nbsp;&nbsp;</strong></font></td>
    <td align="left"><input name="CarouselTonightImage" type="file" /></td>
    </tr>
    
    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Show Page Link&nbsp;&nbsp;</strong></font></td>
    <td align="left"><input name="CarouselShowPageLink" type="text" value="<?php echo $row['HomePageShowPageLink'];?>" /></td>
    </tr>
    
    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Facebook Link&nbsp;&nbsp;</strong></font></td>
    <td align="left"><input name="CarouselFacebookLink" type="text" value="<?php echo $row['HomePageFacebookLink'];?>"/></td>
    </tr>
    
    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Video Link&nbsp;&nbsp;</strong></font></td>
    <td align="left"><input name="CarouselVideoLink" type="text" value="<?php echo $row['HomePageVideoLink'];?>" /></td>
    </tr>    

    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Premier Date&nbsp;&nbsp;</strong></font></td>
    <td align="left"><input name="CarouselPremierDate" id="CarouselPremierDate" type="text" value="<?php echo $row['HomePagePremierDate'];?>" /></td>
    </tr>
    
    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Premier Time&nbsp;&nbsp;</strong></font></td>
    <td align="left">
<select name="CarouselPremierTime">
<option>Choose...</option> 
<?php  
  while ($time= mysql_fetch_assoc($GetTime1)) {   
  if ($time['Time'] == $row['HomePagePremierTime']){ 
  echo  "<option value=\"".$time['Time']."\" SELECTED>".$time['Time']."</option> ";
  }
  else{
 
    echo  "<option value=\"".$time['Time']."\">".$time['Time']."</option>";
  }
  }
?>  
</select>    </td>
    </tr>
    
    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Weekly Day&nbsp;&nbsp;</strong></font></td>
    <td align="left">
<select name="CarouselWeeklyDay">
<option>Choose...</option> 
<?php  
  while ($time= mysql_fetch_assoc($GetDays)) {   
  if ($time['Day'] == $row['HomePageWeeklyDay']){ 
  echo  "<option value=\"".$time['Day']."\" SELECTED>".$time['Day']."</option> ";
  }
  else{
 
    echo  "<option value=\"".$time['Day']."\">".$time['Day']."</option>";
  }
  }
?>  
</select>    
</td>
    </tr>   
    
    <tr>
    <td align="left"><font color="black"><strong>&nbsp;Weekly Time&nbsp;&nbsp;</strong></font></td>
    <td align="left">
<select name="CarouselWeeklyTime">
<option>Choose...</option> 
<?php  
  while ($time= mysql_fetch_assoc($GetTime2)) {   
  if ($time['Time'] == $row['HomePageWeeklyTime']){ 
  echo  "<option value=\"".$time['Time']."\" SELECTED>".$time['Time']."</option> ";
  }
  else{
 
    echo  "<option value=\"".$time['Time']."\">".$time['Time']."</option>";
  }
  }
?>  
</select> 
</td>
    </tr>
<?php } ?>   
        <input name="AddCarouselItem" type="hidden" value"YES"/>         
        <tr>
    <td></td>
    <td align="right"><input  type="submit" value="Update Carousel Item" /></td>
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
	mysql_close($db);
}

# if the session adminid variable doesn't exist
# redirect the user to the login page
else {
    $url = "index.php";
    header("Location: ".$url); 
}

?>