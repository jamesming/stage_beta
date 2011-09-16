<?
	$page->title = "Model Latina L.A. | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-s2mb";
		
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
	$schedule = getSchedule("model-latina-la");
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="active first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/episodes">Episodes</a></li>
			<li><a href="/series/$seriesBase/features">Features</a></li>
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
		<div class="schedule block">
			<h2>Schedule</h2>
			$schedule
		</div>
		<div class="about white-box block">
			<h2>About</h2>
			<p>Beauty is only the beginning on nuvoTV's Model Latina, the first modeling competition of its kind to feature Latinas from all over the U.S. Watch as 10 contestants prove they have it all&mdash;style, sophistication, and smarts. Only one will win a Q Management modeling contract, cash, prizes, and a feature in Latina magazine!</p>
		</div>
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="featured white-box block">
			<h2>Big Year for Model Latina's Mishell Livio</h2>
			<img class="bordered media" src="/assets/images/featured/thumbs/sitv_model_latina_mishell_0_138x138.jpg" />
			<div class="copy">
				<p>2011 has been good to Model Latina season 1 contestant Mishell Livio, and it (kinda) just started.</p>
				<p><a href="/series/model-latina-la/features" class="no-break">Read More +</a></p>
			</div>
		</div>
		<div class="discussion white-box block">
			<h2>Discussion</h2>
			<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:comments href="{$page->fullURL}" num_posts="4" width="420"></fb:comments>
		</div>
		<div class="cast padded-box block">
			<h2>Meet the Cast</h2>
			<ul class="unstyled">
				<li class="first block">
					<img class="bordered media" src="/assets/images/cast/Model Latina s1/Belsky-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Belkys Galvez</h3>
						</div>
						<p>The hot Honduran hails from Miami and considers herself a tomboy. She lives with all boys&mdash;two older brothers and two nephews!</p>
					</div>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Model Latina s1/ML1-Dariany-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Dariany Santana</h3>
						</div>
						<p>The youngest contestant in the competition was also high school class president.</p>
					</div>
				</li>
			</ul>
			<a class="sub-page-more" href="/series/model-latina-la/cast">See the entire cast +</a>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="social block">
			<h2>Find Model Latina on</h2>
			<ul class="inline">
				<li><a class="facebook" href="http://www.facebook.com/ModelLatina">facebook</a></li>
				<li><a class="twitter" href="http://twitter.com/modellatina">twitter</a></li>
				<li class="last"><a target="_blank" class="hulu" href="http://www.hulu.com/watch/92675/model-latina-ugly-beauty#x-0,vepisode,1,0">hulu</a></li>
			</ul>			
		</div>
		<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/ModelLatina" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
		<div class="photos block">
			<h2>Photos</h2>
			<div class="col">
				<img class="bordered" src="/assets/images/galleries/_ModelLatina_LA/_thmbs/thmb_1.jpg" />
				<img class="bordered" src="/assets/images/galleries/_ModelLatina_LA/_thmbs/thmb_2.jpg" />
			</div>
			<div class="last col">
				<img class="bordered" src="/assets/images/galleries/_ModelLatina_LA/_thmbs/thmb_3.jpg" />
				<img class="bordered" src="/assets/images/galleries/_ModelLatina_LA/_thmbs/thmb_4.jpg" />
			</div>
			<a class="sub-page-more" href="/series/$seriesBase/photos">See all photos +</a>
		</div>
	</div>
EOCONTENT;

?>