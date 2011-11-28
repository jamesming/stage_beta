<?php     

$showpage_items_casts = get_casts(
	$showpage_item_id
);


	$page->bodyClasses[] = "layout-smb page-cast  section-series";
	include('top_part.php');



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

	$seriesBase = $showpage_items[0]['url_name'];
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/shows/$seriesBase">Show</a></li>
			<li class="active"><a href="/shows/$seriesBase/cast">Cast</a></li>
			<li><a href="/shows/$seriesBase/video">Video</a></li>
			<li><a href="/shows/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/shows/$seriesBase/photos">Photos</a></li>
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