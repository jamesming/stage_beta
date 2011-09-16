<?
	$page->title = "Prison Break - Photos | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-ms";

	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_PrisonBreak.png) no-repeat 0 0; left:360px; top:63px; width:527px; height:120px;">
	</div>
EOHERO;


	$seriesBase = "prison-break";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/episodes">Episodes</a></li>
			<li><a href="/series/$seriesBase/features">Features</a></li>
			<li class="active last"><a href="/series/$seriesBase/photos">Photos</a></li>
		</ul>
	</div>
	<div class="main">
		<div class="black-box gallery block">
			<h2>Get a Glimpse of Caracas</h2>
	        <div class="galleria">
	        	<img title=""
	                 alt="Caption goes here"
	        	     src="http://placehold.it/100">
	        	<img title=""
	                 alt="Wilmer Valderrama's in good company in Venezuela with his bodyguard/bff, Tadao (left), and bff #2, Joe (right)."
	        	     src="/assets/images/gallery/series/pastport-venezuela/caracas/wv-253.jpg">
	        	<img title=""
	                 alt="A street performer in Caracas plays traditional tunes."
	        	     src="/assets/images/gallery/series/pastport-venezuela/caracas/img_1931.jpg">
	        	<img title=""
	                 alt="A view from the rooftop."
	        	     src="/assets/images/gallery/series/pastport-venezuela/caracas/img_1958.jpg">
	        	<img title=""
	                 alt="Caracas aka Santiago de Le&oacute;n de Caracas is the capital and largest city of Venezuela."
	        	     src="/assets/images/gallery/series/pastport-venezuela/caracas/img_1960.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/gallery/series/pastport-venezuela/caracas/p1010006.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/gallery/series/pastport-venezuela/caracas/p1010173.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/gallery/series/pastport-venezuela/caracas/p1010189.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/gallery/series/pastport-venezuela/caracas/p1010234.jpg">
	        	<img title=""
	                 alt="The street out outside Wilmer's tia's house."
	        	     src="/assets/images/gallery/series/pastport-venezuela/caracas/wv-26.jpg">
	        	<img title=""
	                 alt="Wilmer's on top of the world."
	        	     src="/assets/images/gallery/series/pastport-venezuela/caracas/wv-237.jpg">
	        </div>
		</div>
		<div class="black-box gallery block">
			<h2>Behind the Scenes</h2>
	        <div class="galleria">
	        	<img title=""
	                 alt="Caption goes here"
	        	     src="http://placehold.it/200">
	        	<img title=""
	                 alt="A street performer in Caracas plays traditional tunes."
	        	     src="/assets/images/gallery/series/pastport-venezuela/caracas/img_1931.jpg">
	        	<img title=""
	                 alt="A view from the rooftop."
	        	     src="/assets/images/gallery/series/pastport-venezuela/caracas/img_1958.jpg">
	        	<img title=""
	                 alt="Caracas aka Santiago de Le&oacute;n de Caracas is the capital and largest city of Venezuela."
	        	     src="/assets/images/gallery/series/pastport-venezuela/caracas/img_1960.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/gallery/series/pastport-venezuela/caracas/p1010006.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/gallery/series/pastport-venezuela/caracas/p1010173.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/gallery/series/pastport-venezuela/caracas/p1010189.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/gallery/series/pastport-venezuela/caracas/p1010234.jpg">
	        	<img title=""
	                 alt="The street out outside Wilmer's tia's house."
	        	     src="/assets/images/gallery/series/pastport-venezuela/caracas/wv-26.jpg">
	        	<img title=""
	                 alt="Wilmer's on top of the world."
	        	     src="/assets/images/gallery/series/pastport-venezuela/caracas/wv-237.jpg">
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
				<img class="bordered media" src="http://placehold.it/88x58" />
				Get a Glimpse of Caracas
			</a>
			<a href="#">
				<img class="bordered media" src="http://placehold.it/88x58" />
				Behind the Scenes
			</a>
		</div>
		<div class="ad ad-tall"></div>
	</div>
EOCONTENT;

?>