<?

	include('showpage_include.php');

	$page->title = "LA Ink | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-s2mb";
		
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



$query = 	"SELECT *
					 FROM 
					 	showpage_items
					 WHERE
					 	showpage_items.id = 10
					 	";	

					 	
$result = mysql_query($query);

$showpage_item = mysql_fetch_assoc($result);

$query = 	"SELECT
						title, 
						short_version,  
						showpage_feature_items_images.id as showpage_items_feature_id
					 FROM 
					 	showpage_feature_items,
					 	showpage_feature_items_images
					 WHERE
					 	showpage_feature_items.id = showpage_feature_items_images.showpage_feature_item_id
					 AND
					 	showpage_feature_items.showpage_item_id = 10
					 AND showpage_feature_items_images.image_type_id = 15
					 	";			
					 	
$result = mysql_query($query);

while ($row = mysql_fetch_assoc($result)) {
	$showpage_items_features[] = $row;
}


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
					 AND showpage_cast_items_images.show_on_showpage = 1
					 ORDER BY showpage_cast_items_images.order";				 	


			 	
$result = mysql_query($query);

while ($row = mysql_fetch_assoc($result)) {
	$showpage_items_casts[] = $row;
}

	$list='';
	foreach( $showpage_items_casts  as $showpage_items_cast){

	
		$list=$list."
				<li class='last block'>
				<img class='bordered media' src='http://cms.mynuvotv.com/uploads/showpage_cast_items_images/".$showpage_items_cast['showpage_cast_items_image_id']."/image.png' />
					<div class='copy'>
						<div class='meta'>
							<h3>".$showpage_items_cast['name']."</h3>
						</div>
						<p>".$showpage_items_cast['content']."</p>
					</div>
				</li>";	
   
	}


	$seriesBase = "la-ink";
	$schedule = getSchedule("la-ink");
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="active first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="schedule block">
			<h2>Schedule</h2>
			$schedule
		</div>
		<div class="about white-box block">
			<h2>About</h2>
			<p>{$showpage_item['about']}</p>
		</div>
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="featured white-box block">
			<h2>{$showpage_items_features[0]['title']}</h2>

			<img class='bordered media' src='http://cms.mynuvotv.com/uploads/showpage_feature_items_images/{$showpage_items_features[0]['showpage_items_feature_id']}/image.png' />
			<div class="copy">
				<p>{$showpage_items_features[0]['short_version']}</p>
				<p><a href="/series/la-ink/features" class="no-break">Read More +</a></p>
			</div>
		</div>
		<div class="discussion white-box block">
			<h2>Discussion</h2>
			<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:comments href="{$page->fullURL}" num_posts="4" width="420"></fb:comments>
		</div>
		<div class="cast padded-box block">
			<h2>Meet the Cast</h2>
			<ul class="unstyled">{$list}</ul>
			<a class="sub-page-more" href="/series/la-ink/cast">See the entire cast +</a>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="social block">
			<h2>Find LA Ink on</h2>
			<ul class="inline">
				<li><a target='_blank' class="facebook" href="{$showpage_facebook_url}">facebook</a></li>
				<li><a class="twitter" href="http://twitter.com/#!/MiamiInk_LAInk">twitter</a></li>
				<!--  <li class="last"><a target="_blank" class="hulu" href="http://www.hulu.com/pastport">hulu</a></li>-->
			</ul>			
		</div>		
		<div class="facebook block">
			<fb:like-box href="{$showpage_facebook_url}" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
		<div class="photos block">
			<h2>Photos</h2>
			<div class="col">
				<img class="bordered" src="/assets/images/galleries/_MiamiInk/_thmbs/thmb_1.jpg" />
				<img class="bordered" src="/assets/images/galleries/_MiamiInk/_thmbs/thmb_2.jpg" />
			</div>
			<div class="last col">
				<img class="bordered" src="/assets/images/galleries/_MiamiInk/_thmbs/thmb_3.jpg" />
				<img class="bordered" src="/assets/images/galleries/_MiamiInk/_thmbs/thmb_4.jpg" />
			</div>
			<a class="sub-page-more" href="/series/$seriesBase/photos">See all photos +</a>
		</div>		
	</div>
EOCONTENT;

?>


