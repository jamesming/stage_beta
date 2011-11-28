<?php     
	$page->bodyClasses[] = "layout-smb  section-series";
	include('top_part.php');
	

	$showpage_items_features = get_features(
		$showpage_item_id
	);

	$showpage_title = ( $showpage_items_features!='' ? $showpage_items_features[0]['title']:'' );
	$showpage_content = ( $showpage_items_features!='' ? $showpage_items_features[0]['content']:'' );
	$showpage_items_feature_id = ( is_array ($showpage_items_features)? $showpage_items_features[0]['showpage_feature_items_image_id']:'' );



	$seriesBase = $showpage_items[0]['url_name'];
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/shows/$seriesBase">Show</a></li>
			<li><a href="/shows/$seriesBase/cast">Cast</a></li>
			<li><a href="/shows/$seriesBase/video">Video</a></li>
			<li class="active"><a href="/shows/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/shows/$seriesBase/photos">Photos</a></li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="white-box block">
			<h2>{$showpage_title}</h2>
			<img class="bordered media" src="http://cms.mynuvotv.com/uploads/showpage_feature_items_images/{$showpage_items_feature_id}/image.png" />
			{$showpage_content}
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