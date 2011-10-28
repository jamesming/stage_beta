<?
	$page->title = "Curvy Girls - Photos | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-ms";

	$page->components["theme"]  = <<<EOTHEME
		<div class="">
		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/CURVYgirls_SP.png) no-repeat 0 0; left:464px; top:150px; width:684px; height:138px;">
	</div>
EOHERO;


	$seriesBase = "curvygirls";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li class="last"><a href="/series/$seriesBase/features">Features</a></li>
			<li class="active last"><a href="/series/$seriesBase/photos">Photos</a></li>
			<li class="season-nav"   style='display:none'  >
				<span>Season:</span>
				<ul class="inline">
					<li><a href="/series/pastport-cuba">1</a></li>
					<li><a href="/series/pastport-colombia">2</a></li>
					<li><a href="/series/pastport-argentina">3</a></li>
					<li><a href="/series/pastport-venezuela">4</a></li><li><a href="/series/pastport-puerto-rico">5</a></li>
					<li class="active"><a href="/series/curvygirls">6</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="main">
		<div class="black-box gallery block">
			<h2>Curvy Girls</h2>
	        <div class="galleria">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportPuertoRico/_full/7834.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportPuertoRico/_full/7866.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportPuertoRico/_full/7868.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportPuertoRico/_full/7877.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportPuertoRico/_full/7882.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportPuertoRico/_full/7906.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportPuertoRico/_full/7923.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportPuertoRico/_full/7927.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportPuertoRico/_full/7946.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportPuertoRico/_full/7960.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportPuertoRico/_full/7972.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportPuertoRico/_full/8000.jpg">
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
				<img class="bordered" src="/assets/images/galleries/_PastportPuertoRico/_thmbs/thmb_4.jpg" />
				Curvy Girls
			</a>
		</div>
		<div class="ad ad-tall"></div>
	</div>
EOCONTENT;

?>