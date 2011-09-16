<?php

if($_GET['debug']) {
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
}

include_once('../db_include.php');

$q = mysql_query("INSERT INTO custom_page_views VALUES('', '$_SERVER[REQUEST_URI]', NOW(), '$_SERVER[HTTP_USER_AGENT]', '$_SERVER[HTTP_REFERER]', '$_SERVER[REMOTE_ADDR]', '', '') ");

//echo "INSERT INTO custom_page_views VALUES('', '$_SERVER[REQUEST_URI]', NOW(), '$_SERVER[HTTP_USER_AGENT]', '$_SERVER[HTTP_REFERER]') ";


if($_GET[ring]) {
	$file = 'ringtones/osmin_ringtone_'.$_GET[ring].'.mp3';

	header('Content-disposition: attachment; filename='.$file);
	//header('Content-type: application/pdf');
	readfile($file);
} else if($_GET[ml_ring]) {
	$file = 'ringtones/ml4_ringtone_'.$_GET[ml_ring].'.mp3';

	header('Content-disposition: attachment; filename='.$file);
	//header('Content-type: application/pdf');
	readfile($file);
}

?> 