<?php     
	$page->bodyClasses[] = "layout-video  section-series";
	include('top_part.php');
	
	$seriesBase = $showpage_items[0]['url_name'];
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/shows/$seriesBase">Show</a></li>
			<li><a href="/shows/$seriesBase/cast">Cast</a></li>
			<li class="active"><a href="/shows/$seriesBase/video">Video</a></li>
			<li><a href="/shows/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/shows/$seriesBase/photos">Photos</a></li>
		</ul>
	</div>
	<div class="player">{$showpage_items[0]['video_embed']}</div>
	
	<div class="ad ad-tall"></div>
	
	<div class="ad ad-box"></div>
	
	$featuredVideos
EOCONTENT;

