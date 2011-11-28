<?php     

if( $_SERVER['HTTP_HOST'] == 'tv.localhost'  ){
	$host = "localhost";
}else{
	$host = "192.168.110.211";
};


$user = "jamesming";  
$pw = "ourlady";     
$database = "mynuvotv_db";  

$db = mysql_connect($host,$user,$pw)
   or die("Cannot connect to mySQL.");

mysql_select_db($database,$db)
    or die("Cannot connect to database.");



$query = 	"SELECT *
					 FROM
					 	showpage_items,
					 	showpage_items_images
					 WHERE
					 	showpage_items_images.showpage_item_id = 10
					 AND
					 	showpage_items.id = showpage_items_images.showpage_item_id
					 	";	

					 	
$result = mysql_query($query);

while ($row = mysql_fetch_assoc($result)) {
	$showpage_items_images[] = $row;
}

foreach( $showpage_items_images  as $showpage_items_image){
	$showpage_title_left_margin = $showpage_items_image['showpage_title_left_margin'];
	$showpage_facebook_url = $showpage_items_image['facebook_url'];
	if( $showpage_items_image['image_type'] == 'showpage_dropdown'){
		$showpage_dropdown = $showpage_items_image['id'];
	};
	if( $showpage_items_image['image_type'] == 'showpage_title'){
		$showpage_title = $showpage_items_image['id'];
	};
	if( $showpage_items_image['image_type'] == 'showpage_hero'){
		$showpage_hero = $showpage_items_image['id'];
	};
}




?>

<?
	$page->title = "LA Ink - Features | nuvoTV Official Site";
	
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(http://cms.mynuvotv.com/uploads/showpage_items_images/{$showpage_title}/image.png) no-repeat 0 0; left:{$showpage_title_left_margin}px; top:96px; width:463px; height:111px;">
	</div>
	
<style>
.section-la-ink .theme div { 
	background: transparent url(http://cms.mynuvotv.com/uploads/showpage_items_images/{$showpage_hero}/image.png) no-repeat; }

</style>
EOHERO;



$query = 	"SELECT 
						title,
						content, 
						showpage_feature_items_images.id as  showpage_feature_items_image_id
					 FROM 
					 	showpage_feature_items,
					 	showpage_feature_items_images
					 WHERE
					 	showpage_feature_items.id = showpage_feature_items_images.showpage_feature_item_id
					 AND
					 	showpage_feature_items.showpage_item_id = 10
					 	";					 	


			 	

					 	
$result = mysql_query($query);

while ($row = mysql_fetch_assoc($result)) {
	$showpage_items_features[] = $row;
}


	$seriesBase = "la-ink";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li class="active"><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="white-box block">
			<h2>{$showpage_items_features[0]['title']}</h2>
			<img class="bordered media" src="http://cms.mynuvotv.com/uploads/showpage_feature_items_images/{$showpage_items_features[0]['showpage_feature_items_image_id']}/image.png" />
			{$showpage_items_features[0]['content']}
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="facebook block">
			<fb:like-box href="{$showpage_facebook_url}" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
	</div>
EOCONTENT;

?>