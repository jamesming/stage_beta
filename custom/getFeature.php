<?php

if($_GET['debug']) {
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
}
//require_once('db_include.php');

?>

	
	<div id="slider">
		<ul id="sliderContent">


<?
//Get the upcoming 5 shows
$data = "http://cms.sitv.com/featureXML/4/XML.xml";
$encoded = "?".time();
	$ch = curl_init($data);
		curl_setopt($ch, CURLOPT_POSTFIELDS,  $encoded);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);      
        curl_close($ch);
		$xml = '<?xml version="1.0" encoding="utf-8"?>
'.str_replace("'", "\'", $output);

$xml = str_replace("&", "&amp;", $xml);

$featureXML = simplexml_load_string($xml);
//print_r($featureXML);


foreach($featureXML->features->feature as $show) {

	echo '<li class="sliderImage"><a href="'.$show->url.'"><img width="490" src="http://cms.sitv.com/images/uploads/'.$show->background.'" style="float: left;" />
	<span class="right"><div style="float: left; background-color: black;"><div style="color: #FFF312; font-size: 18px; padding: 10px;">'.str_replace("\'", "'", $show->title).'</div><div style="color: white; padding: 10px; font-size: 12px;">'.str_replace("\'", "'", $show->description).'</div><hr /></div></span></a></li>';
}
?>
		<div class="clear sliderImage"></div>
		</ul>
	</div>

<?