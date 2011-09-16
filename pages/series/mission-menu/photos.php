<?
	$page->title = "Mission Menu- Photos | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-ms";

	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div  class="controls" style="height: 171px;left: 388px;top: 65px;width: 568px;background:transparent url(/assets/images/heroes/series/txt-SP-MISSIONMENU.png) no-repeat 0 0; ">
		<a href="http://www.facebook.com/pages/Mission-Menu/124750807626746" style="left:235px; top:52px; width:247px; height:73px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "mission-menu";
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
					<li><a href="/series/mission-menu">1</a></li>
					<li><a href="/series/model-latina-miami">2</a></li>
					<li class="active"><a href="/series/mission-menu">3</a></li>
					<li><a href="/model-latina-las-vegas/">4</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="main">
		<div class="black-box gallery block">
			<h2>Model Latina NYC</h2>
	        <div class="galleria">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_ModelLatina_NYC/_full/SITV-MLNYC-Press-Elora-1.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_ModelLatina_NYC/_full/SITV-MLNYC-Press-Elora-2.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_ModelLatina_NYC/_full/SITV-MLNYC-Press-Elora-3.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_ModelLatina_NYC/_full/SITV-MLNYC-Press-JessicaS-1.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_ModelLatina_NYC/_full/SITV-MLNYC-Press-JessicaS-2.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_ModelLatina_NYC/_full/SITV-MLNYC-Press-JessicaS-3.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_ModelLatina_NYC/_full/SITV-MLNYC-Press-Nashlly-1.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_ModelLatina_NYC/_full/SITV-MLNYC-Press-Nashlly-2.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_ModelLatina_NYC/_full/SITV-MLNYC-Press-Nashlly-3.jpg">
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
				<img class="bordered" src="/assets/images/galleries/_ModelLatina_NYC/_thmbs/thmb_1.jpg" />
				Model Latina NYC
			</a>
		</div>
		<div class="ad ad-tall"></div>
	</div>
EOCONTENT;

?>