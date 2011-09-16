<?
	$page->title = "Latino 101 Season 2 - Photos | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-ms";

	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_Latino101_S2.png) no-repeat 0 0; left:381px; top:39px; width:502px; height:222px;">
		<a href="http://www.facebook.com/Latino101" style="left:268px; top:143px; width:227px; height:73px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "latino-101-s2";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/episodes">Episodes</a></li>
			<li><a href="/series/$seriesBase/features">Features</a></li>
			<li class="active last"><a href="/series/$seriesBase/photos">Photos</a></li>
			<li class="season-nav">
				<span>Season:</span>
				<ul class="inline">
					<li><a href="/series/latino-101-s1">1</a></li>
					<li class="active"><a href="/series/latino-101-s2">2</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="main">
		<div class="black-box gallery block">
			<h2>Latino 101</h2>
	        <div class="galleria">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_Latino101_S2/_full/Charo_ret,V1.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_Latino101_S2/_full/F_Esparza_1.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_Latino101_S2/_full/F_Esparza_2.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_Latino101_S2/_full/F_Esparza_3.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_Latino101_S2/_full/F_Esparza_4.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_Latino101_S2/_full/F_Esparza_5(2).jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_Latino101_S2/_full/F_Esparza_5.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_Latino101_S2/_full/Godfrey_044.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_Latino101_S2/_full/Godfrey_116.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_Latino101_S2/_full/Jill_Michele_Melean_003.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_Latino101_S2/_full/Jill_Michele_Melean_006.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_Latino101_S2/_full/Luenell_011.jpg">
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
				<img class="bordered" src="/assets/images/galleries/_Latino101_S2/_thmbs/thmb_1.jpg" />
				Latino 101
			</a>
		</div>
		<div class="ad ad-tall"></div>
	</div>
EOCONTENT;

?>