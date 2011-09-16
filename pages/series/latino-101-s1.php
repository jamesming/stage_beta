<?
	$page->title = "Latino 101 Season 1 | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-s2mb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">
		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background: transparent url(/assets/images/heroes/series/txt_Latino101_S1.png) no-repeat 0 0; height: 140px; left: 304px; top: 69px; width:616px;">
		<a href="http://www.facebook.com/Latino101" style="left:323px; top:60px; width:228px; height:74px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "latino-101-s1";
	$schedule = getSchedule("latino-101-s1");
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
					<li class="active"><a href="/series/latino-101-s1">1</a></li>
					<li><a href="/series/latino-101-s2">2</a></li>
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
			<p>Class is in session! Latino 101 is nuvoTV's brand new comedy series covering everything you wanted to know about Latinos. Learn about the many uses of a chancleta, why Quincea&ntilde;eras cost more than college, and the real reason behind Don Francisco's success. Our hilarious group of comics, celebrities, and experts deliver lessons on Latin pop culture, family, religion, and more. Latino 101 features Judy Reyes (Scrubs), David Zayas (Dexter), Joey Medina (The Original Latin Kings of Comedy), Godfrey (Best Week Ever), and many more. This is one class you'll never cut.</p>
		</div>
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="featured white-box block">
			<h2>Watch: Dr. Vicks VapoRub Cures All</h2>
			<img class="bordered media" src="/assets/images/featured/thumbs/vicks-vapor-rub_138x138.jpg" />
			<div class="copy">
				<p>Momma knows best! You have a zit? Put Vicks VapoRub on it. You have a bad rash? Put Vicks VapoRub on it.</p>
				<p><a href="/series/latino-101-s1/features" class="no-break">Read More +</a></p>
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
					<img class="bordered media" src="/assets/images/cast/Latino-101/s1/Joey-Medina-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Joey Medina</h3>
						</div>
						<p>This comic holds more jobs than a headhunter service. Along with being one of the "Original Latin Kings of Comedy," the former boxer also finds time to write, produce, and star in TV specials and films.</p>
					</div>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/Latino-101/s1/Godfrey-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Godfrey</h3>
						</div>
						<p>Godfrey is a sought-after pop culture commentator. He's loaned his expertise to VH1, BET, E!, and CNN. His film credits include Zoolander, Soul Plane, Johnson Family Vacation, and more.</p>
					</div>
				</li>
			</ul>
			<a class="sub-page-more" href="/series/latino-101-s1/cast">See the entire cast +</a>
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
				<img class="bordered" src="/assets/images/galleries/_Latino101_S1/_thmbs/thmb_1.jpg" />
				<img class="bordered" src="/assets/images/galleries/_Latino101_S1/_thmbs/thmb_2.jpg" />
			</div>
			<div class="last col">
				<img class="bordered" src="/assets/images/galleries/_Latino101_S1/_thmbs/thmb_3.jpg" />
				<img class="bordered" src="/assets/images/galleries/_Latino101_S1/_thmbs/thmb_4.jpg" />
			</div>
			<a class="sub-page-more" href="/series/latino-101-s1/photos">See all photos +</a>
		</div>		
	</div>
EOCONTENT;

?>


