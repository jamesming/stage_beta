<?
	$page->title = "Chicago Hope | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-s2mb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_ChicagoHope.png) no-repeat 0 0; left:417px; top:194px; width:404px; height:45px;">
	</div>
EOHERO;


	$seriesBase = "chicago-hope";
	$schedule = getSchedule("chicago-hope");
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="active first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li class="last"><a href="/series/$seriesBase/features">Features</a></li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="schedule block">
			<h2>Schedule</h2>
			$schedule
		</div>
		<div class="about white-box block">
			<h2>About</h2>
			<p>The lives and trials of staff at a major hospital in Chicago are highlighted in this medical drama series that follows Dr. Jeffrey Geiger, a hot-shot surgeon with emotional issues after his wife drowned their infant son, and the hospital's in-house attorney and director of medicine.</p>
		</div>
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="featured white-box block">
			<h2>Betcha Didn't Know: Chicago Hope</h2>
			<img class="bordered media" src="/assets/images/featured/thumbs/Chicago_Hope_138x138.jpg" />
			<div class="copy">
				<p>There are a lot of things we bet you didn't know about the seven-time Emmy Award-winning medical drama. Here are five.</p>
				<p><a href="/series/chicago-hope/features" class="no-break">Read More +</a></p>
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
					<img class="bordered media" src="/assets/images/cast/Chicago Hope/adam-arkin-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Adam Arkin</h3>
						</div>
						<p>The Emmy Award winning actor played Aaron Shutt on Chicago Hope, where his father, Alan Arkin, and daughter, Molly, guest starred.</p>
					</div>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Chicago Hope/hector-elizondo-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Hector Elizondo</h3>
						</div>
						<p>The Puerto Rican actor's first major role was that of God in the play Steambath, which won him an Obie Award. He went on to win an Emmy Award for his role as Dr. Phillip Watters on Chicago Hope, and has been in over 80 films and countless TV shows.</p>
					</div>
				</li>
			</ul>
			<a class="sub-page-more" href="/series/chicago-hope/cast">See the entire cast +</a>
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