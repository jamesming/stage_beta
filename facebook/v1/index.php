<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$app = getvar("app");

if ( $app == "model-latina" ) {
	appModelLatina();
} else if ( $app == "model-latina-social" ) {
	appModelLatinaSocial();
} else if ( $app == "model-latina-social-model-00" ) {
	appModelLatinaSocial("model-00");
} else if ( $app == "model-latina-social-model-01" ) {
	appModelLatinaSocial("model-01");
} else if ( $app == "model-latina-social-model-02" ) {
	appModelLatinaSocial("model-02");
} else if ( $app == "model-latina-social-model-03" ) {
	appModelLatinaSocial("model-03");
} else if ( $app == "model-latina-social-model-04" ) {
	appModelLatinaSocial("model-04");
} else if ( $app == "model-latina-social-model-05" ) {
	appModelLatinaSocial("model-05");
} else if ( $app == "model-latina-social-model-06" ) {
	appModelLatinaSocial("model-06");
} else if ( $app == "model-latina-social-model-07" ) {
	appModelLatinaSocial("model-07");
} else if ( $app == "model-latina-social-model-08" ) {
	appModelLatinaSocial("model-08");
} else if ( $app == "model-latina-social-model-09" ) {
	appModelLatinaSocial("model-09");
} else if ( $app == "model-latina-social-model-10" ) {
	appModelLatinaSocial("model-10");
} else if ( $app == "model-latina-social-model-11" ) {
	appModelLatinaSocial("model-11");
} else if ( $app == "model-latina-social-model-12" ) {
	appModelLatinaSocial("model-12");
} else if ( $app == "model-latina-social-model-13" ) {
	appModelLatinaSocial("model-13");
} else if ( $app == "model-latina-social-model-14" ) {
	appModelLatinaSocial("model-14");
} else if ( $app == "model-latina-social-model-15" ) {
	appModelLatinaSocial("model-15");
} else if ( $app == "model-latina-social-model-16" ) {
	appModelLatinaSocial("model-16");
} else if ( $app == "operation-osmin" ) {
	appOperationOsmin();
} else if ( $app == "operation-osmin-social" ) {
	appOperationOsminSocial();
} else if ( $app == "operation-osmin-social-video-10" ) {
	appOperationOsminSocial("video-1");
} else if ( $app == "operation-osmin-social-video-2" ) {
	appOperationOsminSocial("video-2");
} else if ( $app == "operation-osmin-social-video-3" ) {
	appOperationOsminSocial("video-3");
} else if ( $app == "pastport" ) {
	appPastport();
} else if ( $app == "pastport-social" ) {
	appPastportSocial();
} else {
	// error, unknown app requested
	echo "Error - App not found: " . $app;
	die();
}

die();


function appModelLatina() {
	include("pages/model-latina.php");
}

function appModelLatinaSocial($ogtags="") {
	include("pages/model-latina-social.php");
}

function appOperationOsmin() {
	include("pages/operation-osmin.php");
}

function appOperationOsminSocial($ogtags="") {
	include("pages/operation-osmin-social.php");
}

function appPastport() {
	include("pages/pastport.php");
}

function appPastportSocial() {
	include("pages/pastport-social.php");
}

// utility functions
function getvar($name, $default = false) {
	return (isset($_GET[$name]) && !empty($_GET[$name])) ? cleanvar($_GET[$name]) : $default;
}

function postvar($name, $default = false) {
	return (isset($_POST[$name]) && !empty($_POST[$name])) ? cleanvar($_POST[$name]) : $default;
}

function cleanvar($var) {
	return htmlentities(trim($var), ENT_QUOTES, 'UTF-8');
}

?>