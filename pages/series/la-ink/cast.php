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
					 	showpage_items_images
					 WHERE
					 	showpage_items_images.showpage_item_id = 10
					 	";	

					 	
$result = mysql_query($query);

while ($row = mysql_fetch_assoc($result)) {
	$showpage_items_images[] = $row;
}

foreach( $showpage_items_images  as $showpage_items_image){
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



	$page->title = "Miami Ink - Cast | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(http://cms.mynuvotv.com/uploads/showpage_items_images/{$showpage_title}/image.png) no-repeat 0 0; left:409px; top:96px; width:463px; height:111px;">
	</div>
	
<style>
.section-la-ink .theme div { 
	background: transparent url(http://cms.mynuvotv.com/uploads/showpage_items_images/{$showpage_hero}/image.png) no-repeat; }

</style>
EOHERO;




$query = 	"SELECT 
						name,
						content, 
						showpage_cast_items_images.id as  showpage_cast_items_image_id
					 FROM 
					 	showpage_cast_items,
					 	showpage_cast_items_images
					 WHERE
					 	showpage_cast_items.id = showpage_cast_items_images.showpage_cast_item_id
					 AND
					 	showpage_cast_items.showpage_item_id = 10
					 	";				 	


			 	
$result = mysql_query($query);

while ($row = mysql_fetch_assoc($result)) {
	$showpage_items_casts[] = $row;
}
	$list='';
	foreach( $showpage_items_casts  as $showpage_items_cast){

	
		$list=$list."
		<li class='first block'>
			<img class='bordered media' src='http://cms.mynuvotv.com/uploads/showpage_cast_items_images/".$showpage_items_cast['showpage_cast_items_image_id']."/image.png' />
			<div class='meta'>
				<h3>".$showpage_items_cast['name']."</h3>
			</div>
			<p>".$showpage_items_cast['content']."</p>
		</li>";	
   
	}


	$seriesBase = "la-ink";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li class="active"><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="cast white-box block">
			<h2>Meet the Cast</h2>
			<ul class="unstyled">
{$list}
			</ul>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/nuvoTV" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
	</div>
EOCONTENT;

?>