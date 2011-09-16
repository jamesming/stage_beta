<?
	$page->title = "Cristina's Court | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-s2mb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">
		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background: transparent url(/assets/images/heroes/series/txt_CristinasCourt2.png) no-repeat 0 0; left:325px; top:72px; width:495px; height:110px;">
	</div>
EOHERO;


	$seriesBase = "cristinas-court";
	$schedule = getSchedule("cristinas-court");
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
			<p>Court is now in session! This courtroom reality show features plaintiffs and defendants who air all their dirty laundry before Judge Cristina P&eacute;rez in hopes of resolving their disputes. When Cristina's Court premiered in 2006 it became an instant success and made the Colombian American TV personality the first ever television judge to crossover from Spanish to English-language programming. This three-time Emmy Award-winning show catapulted the career of the successful lawyer, radio host, entrepreneur, author, columnist, and devoted mother and wife. </p>
		</div>
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="featured white-box block">
			<h2>Featured Headline</h2>
			<img class="bordered media" src="/assets/images/featured/thumbs/cristinascourt_138x138.jpg" />
			<div class="copy">
				<p>Find out what the queen of courtroom TV crossover is venturing into now.</p>
				<p><a href="/series/cristinas-court/features" class="no-break">Read More +</a></p>
			</div>
		</div>
		<div class="discussion white-box block">
			<h2>Discussion</h2>
			<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:comments href="{$page->fullURL}" num_posts="4" width="420"></fb:comments>
		</div>
		<div class="cast padded-box block">
			<h2>Meet the Cast</h2>
			<ul class="unstyled">
				<li class="first last block">
					<img class="bordered media" src="/assets/images/cast/Cristinas-Court/Cristina-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Cristina P&eacute;rez</h3>
						</div>
						<p>The daughter of hard-working Colombian immigrants, Cristina was born in NYC, and has lived all over the world, including Mexico, Connecticut, and Los Angeles, California, which she now calls home. She's a three-time Emmy Award winner and published author.</p>
					</div>
				</li>
			</ul>
			<a class="sub-page-more" href="/series/cristinas-court/cast">See the entire cast +</a>
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
