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
	$page->title = "LA Ink - Photos | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-ms";

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




$images_raw = scandir("assets/images/galleries/_LAInk");


for($i=2;$i<=16;$i++){
	
	$images[] = $images_raw[$i];
}

$images_li = "";

foreach( $images  as  $image){
	
	
	$images_li = $images_li . "<img title='' alt=''  src='/assets/images/galleries/_LAInk/".$image."'>";
	
}


	$seriesBase = "la-ink";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/features">Features</a></li>
			<li class="active last"><a href="/series/$seriesBase/photos">Photos</a></li>
		</ul>
	</div>
	<div class="main">
		<div class="black-box gallery block">
			<h2>LA Ink</h2>
	        <div class="galleria">{$images_li}</div>
		</div>
		<div class="ad ad-box"></div>
		<div class="facebook white-box block">
			<h2>Discussion</h2>
			<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:comments href="{$page->fullURL}" num_posts="4" width="460"></fb:comments>
		</div>

	</div>
	<div class="sidebar-right">
		<div class="galleries black-box block">
			<h2>Galleries</h2>
			<a href="#">
				<img class="bordered" src="/assets/images/galleries/_MiamiInk/_thmbs/thmb_1.jpg" />
				LA Ink
			</a>
		</div>
		<div class="ad ad-tall"></div>
	</div>
EOCONTENT;

?>