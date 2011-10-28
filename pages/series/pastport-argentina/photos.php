<?
	$page->title = "Pastport Argentina - Photos | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-ms";

	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_PastPort_Arg.png) no-repeat 0 0; left:331px; top:76px; width:645px; height:136px;">
		<a href="http://www.facebook.com/Pastport" style="left:297px; top:56px; width:218px; height:74px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "pastport-argentina";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/features">Features</a></li>
			<li class="active last"><a href="/series/$seriesBase/photos">Photos</a></li>
			<li class="season-nav">
				<span>Episode:</span>
				<ul class="inline">
					<li><a href="/series/pastport-cuba">1</a></li>
					<li><a href="/series/pastport-colombia">2</a></li>
					<li class="active"><a href="/series/pastport-argentina">3</a></li>
					<li><a href="/series/pastport-venezuela">4</a></li><li><a href="/series/pastport-puerto-rico">5</a></li>
					<li><a href="/series/pastport-panama">6</a></li>		
				</ul>
			</li>
		</ul>
	</div>
	<div class="main">
		<div class="black-box gallery block">
			<h2>Pastport Argentina</h2>
	        <div class="galleria">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportArgentina/_full/IMG_5726RTK.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportArgentina/_full/IMG_5811RTK.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportArgentina/_full/IMG_5815RTK.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportArgentina/_full/IMG_5825RTK.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportArgentina/_full/IMG_5857RTK.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportArgentina/_full/IMG_5858RTK.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportArgentina/_full/IMG_5865RTK.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportArgentina/_full/IMG_5873RTK.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportArgentina/_full/IMG_5878RTK.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportArgentina/_full/IMG_5879RTK.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportArgentina/_full/IMG_5908RTK.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportArgentina/_full/IMG_5911RTK.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportArgentina/_full/IMG_5918RTK.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportArgentina/_full/IMG_6117RTK.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportArgentina/_full/IMG_6130RTK.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportArgentina/_full/IMG_6270RTK.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportArgentina/_full/IMG_6328RTK.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportArgentina/_full/IMG_6330RTK.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportArgentina/_full/IMG_6334RTK.jpg">
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
				<img class="bordered" src="/assets/images/galleries/_PastportArgentina/_thmbs/thmb_1.jpg" />
				Pastport Argentina
			</a>
		</div>
		<div class="ad ad-tall"></div>
	</div>
EOCONTENT;

?>