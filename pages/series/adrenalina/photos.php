<?
	$page->title = "Adrenalina - Photos | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-ms";

	$page->components["theme"]  = <<<EOTHEME
<style>
	.section-adrenalina .theme div { background: transparent url(/assets/images/heroes/series/_bg_Adrenalina.jpg) no-repeat; }
	.stripe { background: transparent url(/assets/images/stripe_army2.png) no-repeat center top; position: relative; z-index: 2; -webkit-background-size: 2000px 1354px; }
</style>
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_Adrenalina.png) no-repeat 0 0; left:407px; top:70px; width:419px; height:112px;">
	</div>
EOHERO;


	$seriesBase = "adrenalina";
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
			<h2>Adrenalina</h2>
	        <div class="galleria">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_Adrenalina/_full/_MG_2141.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_Adrenalina/_full/_MG_2179.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_Adrenalina/_full/_MG_2949.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_Adrenalina/_full/Adrenalina_GroupPosed_01.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_Adrenalina/_full/Adrenalina_Pablo_ATV_01.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_Adrenalina/_full/Adrenalina_Pablo_Surf_Main01.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_Adrenalina/_full/Adrenalina_Z_ATVjump_01.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_Adrenalina/_full/Adrenalina_Z_Skydive_01.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_Adrenalina/_full/IMG_0282.jpg">

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
				<img class="bordered" src="/assets/images/galleries/_Adrenalina/_thmbs/thmb_1.jpg" />
				Adrenalina
			</a>
		</div>
		<div class="ad ad-tall"></div>
	</div>
EOCONTENT;

?>