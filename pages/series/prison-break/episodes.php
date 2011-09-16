<?
	$page->title = "Prison Break - Episodes | nuvoTV Official Site";
	$page->template = "standard";
		
	$page->bodyClasses[] = "layout-bms";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_PrisonBreak.png) no-repeat 0 0; left:360px; top:63px; width:527px; height:120px;">
	</div>
EOHERO;


	$seriesBase = "prison-break";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li class="active"><a href="/series/$seriesBase/episodes">Episodes</a></li>
			<li class="last"><a href="/series/$seriesBase/features">Features</a></li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="episodes white-box block">
			<h2>Episode Guide</h2>
			<ul class="episode-list">
				<li><a href="#">Season One</a></li>
				<li><a href="#">Season Two</a></li>
				<li><a href="#">Season Three</a></li>
				<li><a href="#">Season Four</a></li>
			</ul>			
		</div>
		<div class="ad ad-box block"></div>
	</div>
	<div class="main">
		<div class="episode white-box block">
			<ul class="unstyled episode-content">
				<li>
					<h2>Season One</h2>
					<p>Michael Scofield is a man on a mission! Michael, a brilliant engineer, gets intentionally incarcerated to rescue his wrongfully accused brother Lincoln Burrows from Fox River Penitentiary. With the help of unsavory felons, Scofield devises an ingenious plan to breakout. In the end, he finally makes the big break.</p>
				</li>
				<li>
					<h2>Season Two</h2>
					<p>The manhunt begins now! A motley crew of new and old pursuers is chasing the Fox River Eight. Eventually, the escapees go their own ways, leaving the brothers to reunite with Sara. During the season Sara ends up on trial, Lincoln is finally exonerated, and Michael gets incarcerated in Panama.</p>
				</li>
				<li>
					<h2>Season Three</h2>
					<p>Locked up abroad! Michael is tapped by The Company to aid fellow inmate James Whistler in his escape from Panamanian prison, SONA. On the outside, Lincoln deals with The Company's Gretchen Morgan, who is responsible for his son's kidnapping and Sara's death. Once free from SONA, Michael seeks revenge.</p>
				</li>
				<li>
					<h2>Season Four</h2>
					<p>In one of the most suspenseful series finales ever, the main focus is to obtain information on Scylla. Among the many plot twists and turns, Lincoln decides to join the Company, Michael suffers from a hypothalamic hamartoma, and they learn their mother is involved in the conspiracy.</p>
				</li>
			</ul>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-tall block"></div>
	</div>
EOCONTENT;

?>