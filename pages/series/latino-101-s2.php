<?
	$page->title = "Latino 101 Season 2 | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-s2mb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">
		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_Latino101_S2.png) no-repeat 0 0; left:381px; top:39px; width:502px; height:222px;">
		<a href="http://www.facebook.com/Latino101" style="left:235px; top:65px; width:227px; height:73px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "latino-101-s2";
	$schedule = getSchedule("latino-101-s2");
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="active first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/episodes">Episodes</a></li>
			<li><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
			<li class="season-nav">
				<span>Season:</span>
				<ul class="inline">
					<li><a href="/series/latino-101-s1">1</a></li>
					<li class="active"><a href="/series/latino-101-s2">2</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="schedule block">
			<h2>Schedule</h2>
			$schedule
		</div>
		<div class="about white-box block">
			<h2>About</h2>
			<p>NuvoTV's original comedy series, Latino 101, covers all the things you didn't learn in school. Brush up on everything from 'How to Sell Out' to 'Non-Latino Things Latinos Love' with our hilarious group of comics and celebrities, including Felipe Esparza (Last Comic Standing), the legendary Charo, and Luenell (Borat).</p>
		</div>
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="featured white-box block">
			<h2>Exclusive Interview with Latino 101's Erik Rivera!</h2>
			<img class="bordered media" src="/assets/images/featured/thumbs/erik_rivera_jay_leno_138x138.jpg" />
			<div class="copy">
				<p><em>Latino 101</em> comedian Erik Rivera recently made his stand up comedy debut on <strong></em>The Tonight Show with Jay Leno</em></strong>, and we had a chance to catch up with him!</p>
				<p><a href="/series/latino-101-s2/features" class="no-break">Read More +</a></p>
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
					<img class="bordered media" src="/assets/images/cast/Latino-101/s2/charo-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Charo</h3>
						</div>
						<p>Mar&iacute;a Rosario Pilar Mart&iacute;nez Molina Guti&eacute;rrez de los Perales Santa Ana Romanguera y de la Hinojosa Rasten aka Charo is a Spanish-American actress, comedienne, and flamenco guitarist best known for her flamboyant stage presence, provocative outfits, and signature phrase "cuchi-cuchi."</p>
					</div>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/Latino-101/s2/edwardJamesOlmos-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Edward James Olmos</h3>
						</div>
						<p>The Los Angeles bred actor has moved many audiences with his roles as William Adama in the re-imagined Battlestar Galactica, Lt. Martin Castillo in Miami Vice, motivational teacher Jaime Escalante in Stand and Deliver, patriarch Abraham Quintanilla in Selena, Detective Gaff in Blade Runner, and narrator El Pachuco in both the stage and film versions of Zoot Suit.</p>
					</div>
				</li>
			</ul>
			<a class="sub-page-more" href="/series/latino-101-s2/cast">See the entire cast +</a>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="social block">
			<h2>Find Latino 101 on</h2>
			<ul class="inline">
				<li><a class="facebook" href="http://www.facebook.com/Latino101">facebook</a></li>
				<li class="last"><a class="twitter" href="http://twitter.com/nuvoTVLatino101">twitter</a></li>
			</ul>			
		</div>
		<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/Latino101" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
		<div class="photos block">
			<h2>Photos</h2>
			<div class="col">
				<img class="bordered" src="/assets/images/galleries/_Latino101_S2/_thmbs/thmb_1.jpg" />
				<img class="bordered" src="/assets/images/galleries/_Latino101_S2/_thmbs/thmb_2.jpg" />
			</div>
			<div class="last col">
				<img class="bordered" src="/assets/images/galleries/_Latino101_S2/_thmbs/thmb_3.jpg" />
				<img class="bordered" src="/assets/images/galleries/_Latino101_S2/_thmbs/thmb_4.jpg" />
			</div>
			<a class="sub-page-more" href="/series/latino-101-s2/photos">See all photos +</a>
		</div>
	</div>
EOCONTENT;

?>