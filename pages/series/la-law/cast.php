<?
	$page->title = "L.A. Law - Cast | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_LALaw.png) no-repeat 0 0; left:513px; top:56px; width:291px; height:126px;">
	</div>
EOHERO;


	$seriesBase = "la-law";
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
					<img class="bordered media" src="/assets/images/cast/LA-Law/corbin-bernsen-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Corbin Bernsen</h3>
					</div>
					<p>In addition to playing Arnold Becker on L.A. Law, a role that earned him Emmy and Golden Globe nominations, Bernsen appeared regularly on General Hospital, Cuts, and Psych.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/LA-Law/jill-eikenberry-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Jill Eikenberry</h3>
					</div>
					<p>Best known for her role as lawyer Ann Kelsey on L.A. Law, Eikenberry is an Obie and Golden Globe Award winner, and was nominated five times for an Emmy.</p>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/LA-Law/alan-rachins-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Alan Rachins</h3>
					</div>
					<p>As lawyer Douglas Brackman on L.A. Law, Rachins received both Golden Globe and Emmy nominations. He later played Dharma's hippie father, Larry, on the hit TV series, Dharma & Greg.</p>
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