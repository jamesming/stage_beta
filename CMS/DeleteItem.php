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

    $getadmin = mysql_query($query);		

#query to get all admin info		
    $DeleteItemString = "Update tblhomepage set HomePageDeleted = 1 where HomePageID = $_GET[CarouselID];";

    $DeleteItem = mysql_query($DeleteItemString);	
    		

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

