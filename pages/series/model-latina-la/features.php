<?
	$page->title = "Model Latina L.A. - Features | nuvoTV Official Site";
	
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
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
			<li class="active"><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
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
	<div class="sidebar-left">
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="white-box block">
			<h2>Big Year for Model Latina's Mishell Livio</h2>
			<img class="bordered media" src="/assets/images/featured/sitv_model_latina_mishell_0-Features_458x248.jpg" />
			<p>2011 has been good to Model Latina season 1 contestant Mishell Livio, and it (kinda) just started. You can catch her in two new Hanes Playtex Secrets bra commercials (one of which has already been released nationally), she'll play Bianca in AlloyTV's new webseries,<span style="font-style: italic;"> </span><em>Talent</em> (premiered April 7), and she shot a 4-page spread in <em>17 Magazine</em>, which hit newsstands April 1! Check out clips of the budding actress below:</p>
			<p><iframe title="YouTube video player" src="http://www.youtube.com/embed/8xgkw67o0Gc" allowfullscreen="" frameborder="0" height="292" width="460"></iframe></p>
			<p><iframe title="YouTube video player" src="http://www.youtube.com/embed/yD8kmdFckTY" allowfullscreen="" frameborder="0" height="292" width="460"></iframe></p>
			<p>More <a target="_blank" href="http://www.imdb.com/name/nm3112631/">Mishell Livio</a></p>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/ModelLatina" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
	</div>
EOCONTENT;

?>