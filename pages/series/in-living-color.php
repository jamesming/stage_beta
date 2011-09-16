<?
	$page->title = "In Living Color | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-s2mb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_inLivingColor2.png) no-repeat 0 0; left:395px; top:143px; width:451px; height:109px;">
	</div>
EOHERO;


	$seriesBase = "in-living-color";
	$schedule = getSchedule("in-living-color");
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="active first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
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
			<p>Cue the Fly Girls! In Living Color is as renowned for its original groundbreaking sketch comedy show to introducing the world to future comedic superstars, like the Wayans brothers, Jamie Foxx and Jim Carrey, to name a few. Of course, some of the Fly girls- their deft, hip-hop dancers haven't done so badly. Ever heard of J. Lo? Yeah. Created by Keenan Ivory Wayans, In Living Color proves why Jennifer Lopez, Jamie Foxx, and Jim Carrey are famous in hilarious sketch and after sketch. Somehow off-the-wall characters like Homey D. Clown, Fire Marshall Bill and Wanda remain timeless.</p>
		</div>
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="featured white-box block">
			<h2>Top 5 In Living Color Skits</h2>
			<img class="bordered media" src="/assets/images/featured/thumbs/InLivingColor_138x138.jpg" />
			<div class="copy">
				<p>No other show impacted popular culture quite like In Living Color. I mean, come on, at one point everyone and their mama was saying "Homey don't play dat" and "Hated it!" Keenen Ivory and Damon Wayans' award-winning comedy series also launched the careers of Jennifer Lopez, Rosie Perez, Jamie Foxx, Jim Carrey, David Alan Grier and Tommy Davidson. We hand-selected some of our favorite skits below. </p>
				<p><a href="/series/in-living-color/features" class="no-break">Read More +</a></p>
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
					<img class="bordered media" src="/assets/images/cast/In Living Color/Keenan-Wayans-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Keenen Ivory Wayans</h3>
						</div>
						<p>The writer and creator of In Living Color ended up leaving the show after disputing with the network over censorship. Keenen, who was synonymous with his Mike Tyson and Arsenio Hall impersonations, had a brief stint with late-night television before making a comeback in White Chicks.</p>
					</div>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/In Living Color/Damon-Wayans-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Damon Wayans</h3>
						</div>
						<p>Shortly after the Wayans left the show, Damon starred in three films&ndash;Mo' Money, Blankman, and Major Payne&ndash;and struck gold with his successful sitcom, My Wife and Kids.</p>
					</div>
				</li>
			</ul>
			<a class="sub-page-more" href="/series/in-living-color/cast">See the entire cast +</a>
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