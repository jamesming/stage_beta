<?
	$page->title = "Pastport Panama | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-s2mb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">
		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_pastport_Panama.png) no-repeat 0 0; left:369px; top:132px; width:684px; height:138px;">
		<a href="http://www.facebook.com/Pastport" style="left:285px; top:59px; width:217px; height:73px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "pastport-panama";
	$schedule = '';
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="active first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li class=""><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
			<li class="season-nav">
				<span>Episode:</span>
				<ul class="inline">
					<li><a href="/series/pastport-cuba">1</a></li>
					<li><a href="/series/pastport-colombia">2</a></li>
					<li><a href="/series/pastport-argentina">3</a></li>
					<li><a href="/series/pastport-venezuela">4</a></li>
					<li><a href="/series/pastport-puerto-rico">5</a></li>
					<li class="active"><a href="/series/pastport-panama">6</a></li>
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
			<p>
			
On <i>Pastport: Panama</i>, multi-talented actress-musician Tatyana Ali, best known for her role as Will Smith's little cousin on <i>The Fresh Prince of Bel-Air</i>, explores her fascinating family history with a life-affirming trip to Panama. Add in a jam session with Latin Grammy winners Los Rabanes, a big family surprise and plenty of emotional self-discovery and you get one of <i>Pastport's</i> most inspired episodes.			
			</p>
		</div>
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="featured white-box block">
			<h2>Travel Tunes: 10 Timeless Serenades to Latin America</h2>
			<img class="bordered media" src="/assets/images/featured/thumbs/PP_panama_138x138.jpg" />
			<div class="copy">
				<p>On Pastport: Panama, Tatyana Ali, The Fresh Prince of Bel-Air alum who moonlights as a gold-selling R&B singer, adds an exciting soundtrack to her trip to her mom's homeland when she performs a self-penned bilingual duet with Los Rabanes. We can't hook you up with the Latin Grammy winning band, but our list of 10 Timeless Serenades to Latin America can help you plan the perfect soundtrack for your next trip -- or family reunion. </p>
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
					<img class="bordered media" src="/assets/images/cast/Pastport-panama/tatyana_148x148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Tatyana Ali</h3>
						</div>
						
						
						
Panamanian-American actress Tatyana Ali grew up in a predominantly Jewish neighborhood on Long Island and later relocated to Los Angeles, where she found fame as the loveable Ashley Banks on <i>The Fresh Prince of Bel-Air</i>. But her parents' family history and move to America, where they encountered racial barriers and financial hardships, comprised a lifestyle that was the polar opposite of her privileged TV family.<a href="/series/pastport-panama/cast">[...]</a>					
						
						
						
						
						
					</div>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/Pastport-panama/anastasia_148x148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Anastasia Ali</h3>
						</div>
						<p>"I definitely think that this experience brought us closer... this trip made not only myself but also Tatyana wanna come back to Panama," says Anastasia, Tatyana's sibling and business partner in Hazrah Entertainment. She is one of Tatyana's two younger sisters, along with Kimberly, and accompanies her older sister/BFF on the trip to Panama. </p>
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
		<!--<div class="photos block">
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
		</div>-->
	</div>
EOCONTENT;

?>