<?
	$page->title = "Pastport Puerto Rico | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-s2mb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">
		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_pastport-PR.png) no-repeat 0 0; left:344px; top:70px; width:684px; height:138px;">
		<a href="http://www.facebook.com/Pastport" style="left:285px; top:59px; width:217px; height:73px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "pastport-panama";
	$schedule = getSchedule("pastport-puerto rico");
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="active first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
			<li class="season-nav">
				<span>Season:</span>
				<ul class="inline">
					<li><a href="/series/pastport-cuba">1</a></li>
					<li><a href="/series/pastport-colombia">2</a></li>
					<li><a href="/series/pastport-argentina">3</a></li>
					<li><a href="/series/pastport-venezuela">4</a></li>
					<li class="active"><a href="/series/pastport-panama">5</a></li>
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
			<p>Actress Alanna Ubach (HBO's <i>Hung</i>, <i>Meet the Fockers</i>, <i>Legally Blonde</i>) has everything going for her &mdash;a successful acting career and a budding relationship with her Swedish boyfriend, Pelle. Now, a return to Puerto Rico will pay homage to her father, Rodolfo, who passed away 17 years ago. The time has come to make peace with her father's memory and connect with the Latino roots she lost.  But when Pelle joins her on this intimate journey, will it prove to be too much for the two of them to handle?</p>
		</div>
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="featured white-box block">
			<h2>Five Reasons Why Alanna Ubach Rocks</h2>
			<img class="bordered media" src="/assets/images/featured/thumbs/pastport-puertorico_138x138.jpg" />
			<div class="copy">
				<p>Find out why this half-Mexican, half-Puerto Rican actress, who's known for her killer bod, kicks major booty. </p>
				<p><a href="/series/pastport-panama/features" class="no-break">Read More +</a></p>
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
					<img class="bordered media" src="/assets/images/cast/Pastport-panama/cast_PP-PR-Alanna-Ubach.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Alanna Ubach</h3>
						</div>
						<p><a href="http://www.alannaubach.net/" target="_blank">Alanna</a>, 36, was born and raised in Downey, California to a Puerto Rican father and Mexican mother. The Latina actress is best known for her roles in <i>Legally Blonde</i> and <i>Meet the Fockers</i>. She's also a voice-over star who's lent her chops to the main character, Manny, in Nickelodeon's first ever flash animation series, <i>El Tigre: The Adventures of Manny Rivera</i>, cheerleader <a href="/series/pastport-panama/cast">[...]</a></p>
					</div>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/Pastport-panama/cast_PP-PR-Pelle.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Pelle</h3>
						</div>
						<p> Alanna's boyfriend, Pelle, was born in Sweden and has lived in the U.S. for 16 years. He runs an import/export business in L.A., has never been to Puerto Rico, and doesn't speak a lick of Spanish. According to Alanna, Pelle's a workaholic just like her dad was. Let's see if he can work in some time to help Alanna cope with the death of her father.</p>
					</div>
				</li>
			</ul>
			<a class="sub-page-more" href="/series/pastport-panama/cast">See the entire cast +</a>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="social block">
			<h2>Find Pastport on</h2>
			<ul class="inline">
				<li><a class="facebook" href="http://www.facebook.com/Pastport">facebook</a></li>
				<li><a class="twitter" href="http://twitter.com/nuvoTVPastport">twitter</a></li>
				<li class="last"><a target="_blank" class="hulu" href="http://www.hulu.com/pastport">hulu</a></li>
			</ul>			
		</div>
		<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/Pastport" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
		<div class="photos block">
			<h2>Photos</h2>
			<div class="col">
				<img class="bordered" src="/assets/images/galleries/_PastportPuertoRico/_thmbs/7866.jpg" />
				<img class="bordered" src="/assets/images/galleries/_PastportPuertoRico/_thmbs/7834.jpg" />
			</div>
			<div class="last col">
				<img class="bordered" src="/assets/images/galleries/_PastportPuertoRico/_thmbs/7960.jpg" />
				<img class="bordered" src="/assets/images/galleries/_PastportPuertoRico/_thmbs/7906.jpg" />
			</div>
			<a class="sub-page-more" href="/series/$seriesBase/photos">See all photos +</a>
		</div>
	</div>
EOCONTENT;

?>