<?
	$page->title = "Hill Street Blues | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-s2mb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_HillStBlues.png) no-repeat 0 0; left:259px; top:114px; width:588px; height:118px;">
	</div>
EOHERO;


	$seriesBase = "hill-street-blues";
	$schedule = getSchedule("hill-street-blues");
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
			<p>Before NYPD Blue and The Shield, there was Hill Street Blues. This classic 80s police drama revolutionized TV by giving viewers a realistic glimpse into the daily lives of the officers and detectives at an urban police station&ndash;for the very first time! Hill Street Blues received eight Emmy Awards when it debuted in 1981, and was nominated 98 times over its seven-year run. Now, you can watch it from the beginning.</p>
		</div>
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="featured white-box block">
			<h2>Did You Know? Hill Street Blues</h2>
			<img class="bordered media" src="/assets/images/featured/thumbs/HillStreetBlues_138x138.jpg" />
			<div class="copy">
				<p>Quiz fellow fans with these five facts about the critically-acclaimed police drama.</p>
				<p><a href="/series/hill-street-blues/features" class="no-break">Read More +</a></p>
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
					<img class="bordered media" src="/assets/images/cast/Hill-Street-Blues/daniel-travanti-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Daniel J. Travanti</h3>
						</div>
						<p>There's no denying Capt. Frances Xavier Furillo, the boss of Hill Street, made Travanti a star. He went on to appear in numerous films and even on stage.</p>
					</div>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/Hill-Street-Blues/taurean-blacque-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Taurean Blacque</h3>
						</div>
						<p>He played the part of Det. Neal Washington and partner/friend of J.D. LaRue brilliantly&ndash;a cool, joker-type who could chew on a sliver of wood for hours. Blacque was a national spokesman for adoptive services and is one of the first single black men in the United States to adopt a child.</p>
					</div>
				</li>
			</ul>
			<a class="sub-page-more" href="/series/hill-street-blues/cast">See the entire cast +</a>
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
