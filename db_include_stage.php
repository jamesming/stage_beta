<?php

if($_GET['debug']) {
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
}

$db_host = "192.168.110.211";
$db_user = "transuser";
$db_pass = "SiTV!!tr4nsus3r2009";
$db_name = "sitv_stage_new";

    $connection = mysql_connect($db_host,$db_user,$db_pass);

    if (!(mysql_select_db($db_name,$connection))) {

        echo "Could not connect to the database";

    }



?>