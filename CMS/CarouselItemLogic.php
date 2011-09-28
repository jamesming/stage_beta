
<?php

$host = "192.168.110.211";  //This is the server where your database resides
$user = "transuser";           //This should be your Sandbox login
$pw = "SiTV!!tr4nsus3r2009";              //This should be your  password
$database = "ArkCMS";       //Your database is the same as your Sandbox login	
	# connect to the database
    $db = mysql_connect($host,$user,$pw)
       or die("Cannot connect to mySQL.");

    mysql_select_db($database,$db)
        or die("Cannot connect to database.");

	
$GetHomePageItemsString = "Select * From tblhomepage Where HomePageDeleted = 0 And HomePageOrder > 0 ORDER BY HomePageOrder ASC;";
$GetHomePageItems = mysql_query($GetHomePageItemsString);	
			
    		
    mysql_close($db);

while ($row = mysql_fetch_assoc($GetHomePageItems)) {
echo $row['HomePageName']." premiers on ".date("l F d, Y",strtotime($row['HomePagePremierDate']))." at ".$row['HomePagePremierTime']." then airs weekly on 
".$row['HomePageWeeklyDay']." at ".$row['HomePageWeeklyTime'];
echo "<br>";
if ($row['HomePagePremierDate'] == date('Y-m-d')){
echo "<img src=\"images/Tonight.jpg\" width=\"100\" height=\"50\">";
}

if ($row['HomePagePremierDate'] > date('Y-m-d')){
echo "<img src=\"images/Premier.jpg\" width=\"100\" height=\"50\">";
}

if ($row['HomePagePremierDate'] < date('Y-m-d')){
echo "<img src=\"images/Day.jpg\" width=\"100\" height=\"50\">";
}

echo "<br>";	
}


?>	

