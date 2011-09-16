<?
	$page->title = "Prison Break | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-s2mb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_PrisonBreak.png) no-repeat 0 0; left:360px; top:63px; width:527px; height:120px;">
	</div>
EOHERO;


	$seriesBase = "prison-break";
	$schedule = getSchedule("prison-break");
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="active first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/episodes">Episodes</a></li>
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
			<p>How far will you go to save your family? In Prison Break Michael Scofield (Wentworth Miller) willfully gets incarcerated to save his wrongfully accused brother Lincoln Burrows (Dominic Purcell). Watch as Michael befriends unsavory felons to aid him in his intricate plan to break out and expose a top secret conspiracy.</p>
		</div>
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="featured white-box block">
			<h2>Who's the Hottest Prison Break Character?</h2>
			<img class="bordered media" src="/assets/images/featured/thumbs/prison-break-guys-_138x138.jpg" />
			<div class="copy">
				<p>We asked you to tell us who the hottest Prison Break character is, and here are some of the funniest answers we got.</p>
				<p><a href="/series/prison-break/features" class="no-break">Read More +</a></p>
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
					<img class="bordered media" src="/assets/images/cast/Prison-Break/cast-michael-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Wentworth Miller (Michael Scofield)</h3>
						</div>
						<p>Miller is one of Hollywood's most intriguing young actors. His breakthrough role came in the Anthony Hopkins-led The Human Stain. Miller is best known for his role as engineer-turned-felon Michael Scofield in Prison Break. Since the show's cancellation, he's appeared in Law & Order: Special Victims Unit and is due to star in this year's Resident Evil: Afterlife.</p>
					</div>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/Prison-Break/cast-lincoln-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Dominic Purcell (Lincoln Burrows)</h3>
						</div>
						<p>Born in England and raised in Australia, Purcell was a gardener before he decided to pursue a career in acting. He's appeared in blockbuster films such Mission Impossible II and Blade: Trinity. In Prison Break he portrays Lincoln Burrows, a man wrongly accused of murder.</p>
					</div>
				</li>
			</ul>
			<a class="sub-page-more" href="/series/prison-break/cast">See the entire cast +</a>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="social block">
			<h2>Find Prison Break on</h2>
			<ul class="inline">
				<li><a class="facebook" href="https://www.facebook.com/pages/Prison-Break-on-nuvoTV/173862959343410">facebook</a></li>
				<li class="last"><a class="twitter" href="http://twitter.com/nuvoPrisonBreak">twitter</a></li>
			</ul>			
		</div>
		<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/pages/Prison-Break-on-nuvoTV/173862959343410" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
	</div>
EOCONTENT;

?>