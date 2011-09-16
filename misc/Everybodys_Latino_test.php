<?php

if($_GET['debug']) {
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
}

include_once('../db_include.php');

$q = mysql_query("INSERT INTO custom_page_views VALUES('', '$_SERVER[REQUEST_URI]', NOW(), '$_SERVER[HTTP_USER_AGENT]', '$_SERVER[HTTP_REFERER]') ");

//echo "INSERT INTO custom_page_views VALUES('', '$_SERVER[REQUEST_URI]', NOW(), '$_SERVER[HTTP_USER_AGENT]', '$_SERVER[HTTP_REFERER]') ";


if($_GET[ring]) {
	$file = 'Betcha.M4R';

	header('Content-disposition: attachment; filename='.$file);
	//header('Content-type: application/pdf');
	readfile('Betcha.M4R');
} else {

	$file = 'Everybodys_Latino.mp3';

	header('Content-disposition: attachment; filename='.$file);
	//header('Content-type: application/pdf');
	readfile('Everybodys_Latino.mp3');
}

?> 