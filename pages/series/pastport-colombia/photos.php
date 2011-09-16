<?
	$page->title = "Pastport Colombia - Photos | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-ms";

	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_PastPort_Colombia.png) no-repeat 0 0; left:348px; top:81px; width:574px; height:134px;">
		<a href="http://www.facebook.com/Pastport" style="left:282px; top:54px; width:217px; height:74px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "pastport-colombia";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/features">Features</a></li>
			<li class="active last"><a href="/series/$seriesBase/photos">Photos</a></li>
			<li class="season-nav">
				<span>Season:</span>
				<ul class="inline">
					<li><a href="/series/pastport-cuba">1</a></li>
					<li class="active"><a href="/series/pastport-colombia">2</a></li>
					<li><a href="/series/pastport-argentina">3</a></li>
					<li><a href="/series/pastport-venezuela">4</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="main">
		<div class="black-box gallery block">
			<h2>Pastport Colombia</h2>
	        <div class="galleria">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportColumbia/_full/paula-dad-2.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportColumbia/_full/paula-dad.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportColumbia/_full/paula.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_PastportColumbia/_full/paula_family.jpg">
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
				<img class="bordered" src="/assets/images/galleries/_PastportColumbia/_thmbs/thmb_1.jpg" />
				Pastport Colombia
			</a>
		</div>
		<div class="ad ad-tall"></div>
	</div>
EOCONTENT;

?>