<?
	$page->title = "Pastport Cuba | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-s2mb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_PastPort_Cuba.png) no-repeat 0 0; left:331px; top:76px; width:522px; height:137px;">
		<a href="http://www.facebook.com/Pastport" style="left:298px; top:59px; width:217px; height:73px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "pastport-cuba";
	$schedule = getSchedule("pastport-cuba");
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
					<li class="active"><a href="/series/pastport-cuba">1</a></li>
					<li><a href="/series/pastport-colombia">2</a></li>
					<li><a href="/series/pastport-argentina">3</a></li>
					<li><a href="/series/pastport-venezuela">4</a></li>
					<li><a href="/series/pastport-puerto-rico">5</a></li>
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
			<p>nuvoTV&rsquo;s Pastport: Cuba follows swimwear designer Nicole Di Rocco as she embarks on a journey to reconnect with her culture in a home left behind. Watch as this Cuban American trendsetter gets the opportunity of a lifetime&mdash;to travel with her parents to Cuba, a country they left almost 50 years ago. The Search for Nicolita captures her quest to find a model to represent her Cuba-inspired line, but the real discovery comes from a place she&rsquo;s never been. Pastport: Cuba unveils the mystery behind a country often misunderstood, and bridges the gap between family that left and those that stayed. The events that unfold are life changing.</p>
		</div>
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="featured white-box block">
			<h2>Best of Your 'Pastport' Stories</h2>
			<img class="bordered media" src="/assets/images/featured/thumbs/sitv-pastport-nicolita-ss-cubanguide-trinidad_138x138.jpg" />
			<div class="copy">
				<p>We asked you to tell us your story about going back to your roots.  Here&rsquo;s what you said:</p>
				<p><a href="/series/pastport-cuba/features" class="no-break">Read More +</a></p>
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
					<img class="bordered media" src="/assets/images/cast/Pastport-Cuba/nicole-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Nicole Di Rocco</h3>
						</div>
						<p>Like most kids, Nicole, 30, just wanted to fit in. She grew up in Irvine, an affluent neighborhood where it wasn&rsquo;t cool to be different. She begged her mom not to speak Spanish when her friends were around, and it wasn&rsquo;t until college that she started to embrace her roots.&nbsp;<a href="/series/pastport-cuba/cast">[...]</a></p>
					</div>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/Pastport-Cuba/mother-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Nicole&rsquo;s Mother</h3>
						</div>
						<p>Thais Sainz, 64, was pushed at a very young age to succeed. Born in Havana, Cuba to an architect father who moonlighted as a professor, Thais was sent to a boarding school in Texas at 14.&nbsp;<a href="/series/pastport-cuba/cast">[...]</a></p>
					</div>
				</li>
			</ul>
			<a class="sub-page-more" href="/series/pastport-cuba/cast">See the entire cast +</a>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="social block">
			<h2>Find Pastport on</h2>
			<ul class="inline">
				<li><a class="facebook" href="https://www.facebook.com/Pastport">facebook</a></li>
				<li><a class="twitter" href="http://twitter.com/nuvoTVPastport">twitter</a></li>
				<li class="last"><a target="_blank" class="hulu" href="http://www.hulu.com/watch/264625/pastport-cuba">hulu</a></li>
			</ul>			
		</div>
		<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/Pastport" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
		<div class="photos block">
			<h2>Photos</h2>
			<div class="col">
				<img class="bordered" src="/assets/images/galleries/_PastportCuba/_thmbs/thmb_1.jpg" />
				<img class="bordered" src="/assets/images/galleries/_PastportCuba/_thmbs/thmb_2.jpg" />
			</div>
			<div class="last col">
				<img class="bordered" src="/assets/images/galleries/_PastportCuba/_thmbs/thmb_3.jpg" />
				<img class="bordered" src="/assets/images/galleries/_PastportCuba/_thmbs/thmb_4.jpg" />
			</div>
			<a class="sub-page-more" href="/series/$seriesBase/photos">See all photos +</a>
		</div>
	</div>
EOCONTENT;

?>