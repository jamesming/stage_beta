<?
	$page->title = "Model Latina L.A. - Photos | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-ms";

	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_ML_LA.png) no-repeat 0 0; left:413px; top:84px; width:519px; height:140px;">
		<a href="http://www.facebook.com/ModelLatina" style="left:219px; top:61px; width:249px; height:73px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "model-latina-la";
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
					<li class="active"><a href="/series/model-latina-la">1</a></li>
					<li><a href="/series/model-latina-miami">2</a></li>
					<li><a href="/series/model-latina-nyc">3</a></li>
					<li><a href="/model-latina-las-vegas/">4</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="main">
		<div class="black-box gallery block">
			<h2>Model Latina LA</h2>
	        <div class="galleria">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_ModelLatina_LA/_full/Jessica.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_ModelLatina_LA/_full/Jessica1.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_ModelLatina_LA/_full/Latina_Magazine_Jessica_Caban_Layout_March_Issue_02.24.09.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_ModelLatina_LA/_full/ML_contestanthuddle_01.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_ModelLatina_LA/_full/ML_winner_JessicaCaban copy.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_ModelLatina_LA/_full/SITV-Model-Latina-Jessica-Caban-DuoMag-01.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_ModelLatina_LA/_full/SITV-Model-Latina-Jessica-Caban-DuoMag-02.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_ModelLatina_LA/_full/SITV-Model-Latina-Jessica-Caban-DuoMag-03.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_ModelLatina_LA/_full/SITV-Model-Latina-Jessica-Caban-DuoMag-04.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_ModelLatina_LA/_full/SITV-Model-Latina-Jessica-Caban-DuoMag-05.jpg">
	        	<img title=""
	                 alt=""
	        	     src="/assets/images/galleries/_ModelLatina_LA/_full/SiTV_Model_Latina.jpg">
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
				<img class="bordered" src="/assets/images/galleries/_ModelLatina_LA/_thmbs/thmb_1.jpg" />
				Model Latina LA
			</a>
		</div>
		<div class="ad ad-tall"></div>
	</div>
EOCONTENT;

?>