<?
	$page->title = "Cristina's Court - Cast | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background: transparent url(/assets/images/heroes/series/txt_ChristinaCourt.png) no-repeat 0 0; left:325px; top:72px; width:495px; height:110px;">
	</div>
EOHERO;


	$seriesBase = "cristinas-court";
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
					<img class="bordered media" src="/assets/images/cast/Cristinas-Court/Cristina-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Cristina P&eacute;rez</h3>
					</div>
					<p>The daughter of hard-working Colombian immigrants, Cristina was born in NYC, and has lived all over the world, including Mexico, Connecticut, and Los Angeles, California, which she now calls home. She's a three-time Emmy Award winner and published author.</p>
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