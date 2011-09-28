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
		

#query to get all admin info		
    $DeleteOrderString = "Update tblhomepage set HomePageOrder = 0 where HomePageOrder = 4;";
    $DeleteOrder = mysql_query($DeleteOrderString);	
	
	$DeleteOrderString = "Update tblhomepage set HomePageOrder = $_GET[OrderID] where HomePageID = $_GET[CarouselID];";
    $DeleteOrder = mysql_query($DeleteOrderString);	
    		

    mysql_close($db);
	
	$url = "ViewCarouselItems.php";
    header("Location: ".$url); 
}

# if the session adminid variable doesn't exist
# redirect the user to the login page
else {
    $url = "index.php";
    header("Location: ".$url); 
}

?>

