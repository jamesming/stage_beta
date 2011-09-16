<?
	$page->title = "Chicago Hope - Cast | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_ChicagoHope.png) no-repeat 0 0; left:417px; top:194px; width:404px; height:45px;">
	</div>
EOHERO;


	$seriesBase = "chicago-hope";
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
					<img class="bordered media" src="/assets/images/cast/Chicago Hope/adam-arkin-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Adam Arkin</h3>
					</div>
					<p>The Emmy Award winning actor played Aaron Shutt on Chicago Hope, where his father, Alan Arkin, and daughter, Molly, guest starred.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Chicago Hope/hector-elizondo-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Hector Elizondo</h3>
					</div>
					<p>The Puerto Rican actor's first major role was that of God in the play Steambath, which won him an Obie Award. He went on to win an Emmy Award for his role as Dr. Phillip Watters on Chicago Hope, and has been in over 80 films and countless TV shows.</p>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/Chicago Hope/mandy-patinkin_CAST_148X148.jpg" />
					<div class="meta">
						<h3>Mandy Patinkin</h3>
					</div>
					<p>Although he won an Emmy Award for his role as Dr. Jeffrey Geiger on Chicago Hope, Patinkin left the show during the second season after spending too much time away from his wife. He later appeared in Alien Nation, Men With Guns, and Dick Tracy.</p>
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
