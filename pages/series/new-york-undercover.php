<?
	$page->title = "New York Undercover | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-s2mb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_NYUndercover.png) no-repeat 0 0; left:395px; top:206px; width:643px; height:44px;">
	</div>
EOHERO;


	$seriesBase = "new-york-undercover";
	$schedule = getSchedule("new-york-undercover");
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
			<p>Cops with attitudes! New York Undercover is the police drama that exposes the Empire State's underbelly. Watch close-knit detectives J.C. Williams (Malik Yoba) and Eddie Torres (Michael DeLorenzo) investigate New York City's most violent crimes.</p>
		</div>
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="featured white-box block">
			<h2>Why Everyone Loves New York Undercover</h2>
			<img class="bordered media" src="/assets/images/featured/thumbs/NY-undercover_138x138.jpg" />
			<div class="copy">
				<p>Drugs, robbery, corruption, rape, murder. That's not all New York Undercover was loved for. We asked our Facebook fans why its still one of the favorite shows. Check out their answers below.</p>
				<p><a href="/series/new-york-undercover/features" class="no-break">Read More +</a></p>
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
					<img class="bordered media" src="/assets/images/cast/New York Undercover/Malik-Yoba-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Malik Yoba</h3>
						</div>
						<p>Best know for his role as Det. Julius Clarence "J.C." Williams on New York Undercover, Yoba has also appeared in films Cool Runnings and Criminal, and TV shows Arrested Development, Brock Harris, Girlfriends, and  Raines.</p>
					</div>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/New York Undercover/Michael-DeLorenzo-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Michael DeLorenzo</h3>
						</div>
						<p>The half-Italian, half-Puerto Rican actor, director and musician is best known for his role as NYPD Detective Eddie Torres on New York Undercover.</p>
					</div>
				</li>
			</ul>
			<a class="sub-page-more" href="/series/new-york-undercover/cast">See the entire cast +</a>
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
