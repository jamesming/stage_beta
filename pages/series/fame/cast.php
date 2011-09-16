<?
	$page->title = "Fame - Cast | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_Fame.png) no-repeat 0 0; left:493px; top:71px; width:291px; height:111px;">
	</div>
EOHERO;


	$seriesBase = "fame";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li class="active"><a href="/series/$seriesBase/cast">Cast</a></li>
			<li class="last"><a href="/series/$seriesBase/features">Features</a></li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="cast white-box block">
			<h2>Meet the Cast</h2>
			<ul class="unstyled">
				<li class="first block">
					<img class="bordered media" src="/assets/images/cast/Fame/albert-hague-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Albert Hague</h3>
					</div>
					<p>This German-born songwriter/composer/ actor played music teacher Benjamin Shorofsky on Fame, a part that originated in the actual film.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Fame/carlo-imperato-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Carlo Imperato</h3>
					</div>
					<p>The Bronx-born actor played student Danny Amatullo on Fame and sang lead on the song "Friday Night," which became a hit single in the UK. Imperato was at also engaged to co-star Nia Peeples.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Fame/debbie-allen-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Debbie Allen</h3>
					</div>
					<p>Best known for her role as dance teacher Lydia Grant on Fame, Allen, whose sister is actress/singer Phylicia Rashad, also served as the series' top choreographer.</p>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/Fame/gene-anthony-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Gene Anthony Ray</h3>
					</div>
					<p>Before he played dancer Leroy Johnson on both the film and TV version of Fame, Ray attended the New York High School of the Performing Arts, but was kicked out after a year.</p>
				</li>
			</ul>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/nuvoTV" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
	</div>
EOCONTENT;

?>



