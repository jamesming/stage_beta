<?
	$page->title = "Miami Ink - Photos | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-ms";

	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_MiamiInk.png) no-repeat 0 0; left:409px; top:96px; width:463px; height:111px;">
	</div>
EOHERO;


	$seriesBase = "miami-ink";
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
			<h2>Miami Ink</h2>
	        <div class="galleria">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_MiamiInk/_full/MIAMI INK PORTRAITS.012.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_MiamiInk/_full/MIAMI INK.121.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_MiamiInk/_full/MIAMI INK.123.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_MiamiInk/_full/MIAMI INK.125.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_MiamiInk/_full/MIAMI INK.128.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_MiamiInk/_full/MIAMI INK.132.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_MiamiInk/_full/MIAMI INK.133.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_MiamiInk/_full/MIAMI INK.134.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_MiamiInk/_full/MIAMI INK.148.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_MiamiInk/_full/MIAMI INK.255.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_MiamiInk/_full/MIAMI INK.287.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_MiamiInk/_full/miami-ink-poster1.jpg">
	        </div>
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
				Miami Ink
			</a>
		</div>
		<div class="ad ad-tall"></div>
	</div>
EOCONTENT;

?>