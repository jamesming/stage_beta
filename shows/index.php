<?php


include('db_connect.php');
include('query.php');


$uri_array = explode('/',$_SERVER['REQUEST_URI']);

$showpage_item = get_showpage_item_id_from_show($uri_array[2]);
$showpage_item_id = $showpage_item['id'];

ini_set('display_errors', '1');
error_reporting(E_ALL ^ E_STRICT);

require_once("../includes/page.php");
require_once("../includes/components.php"); // GETTING FAVORITE VIDEOS
$page->init('index');


$showpage_items = get_showpage_items(
	$showpage_item_id
);   


if( !isset($uri_array[3])){
	$uri_array[3] ='show';
};


switch ( $uri_array[3] ) { //IE SHOW, VIDEO, FEATURES, CASTS
  case 'show':
		include('show.php');
  break;

  case 'cast':
		include('cast.php');
  break;

  case 'video':
		include('video.php');
  break;

  case 'features':
		include('features.php');
  break;
  
  case 'photos':
		include('photos.php');
  break;  
}


include("../templates/standard.php");
$template->render();

?>
