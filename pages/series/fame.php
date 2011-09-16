<?
	$page->title = "Fame | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-s2mb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">
		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_Fame.png) no-repeat 0 0; left:493px; top:71px; width:291px; height:111px;">
	</div>
EOHERO;


	$seriesBase = "fame";
	$schedule = getSchedule("fame");
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
			<p>Bust out the spandex and leg warmers. We're bringing back the 80s! Fame is the TV series based on the 1980 hit flick of the same name that follows the lives of the students and faculty of the New York City High School for the Performing Arts. Part drama, part musical, Fame inspired a whole generation to chase their dreams of making a name for themselves as a singer, dancer, comedian, or composer. But fame doesn't come easy as these budding artists soon discover, and only time will tell who's committed enough to get fame. </p>
		</div>
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="featured white-box block">
			<h2>Before Glee, There Was Fame</h2>
			<img class="bordered media" src="/assets/images/featured/thumbs/fame_138x138.jpg" />
			<div class="copy">
				<p>Impress the heck out of your friends with these random facts about Fame, the first ever artsy fartsy series inspired by the ever-popular flick of the same name. </p>
				<p><a href="/series/fame/features" class="no-break">Read More +</a></p>
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
					<img class="bordered media" src="/assets/images/cast/Fame/albert-hague-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Albert Hague</h3>
						</div>
						<p>This German-born songwriter/composer/ actor played music teacher Benjamin Shorofsky on Fame, a part that originated in the actual film.</p>
					</div>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/Fame/carlo-imperato-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Carlo Imperato</h3>
						</div>
						<p>The Bronx-born actor played student Danny Amatullo on Fame and sang lead on the song "Friday Night," which became a hit single in the UK. Imperato was at also engaged to co-star Nia Peeples.</p>
					</div>
				</li>
			</ul>
			<a class="sub-page-more" href="/series/fame/cast">See the entire cast +</a>
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