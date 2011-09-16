<?
	$page->title = "Miami Ink | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-s2mb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">
		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_MiamiInk2.png) no-repeat 0 0; left:409px; top:96px; width:463px; height:111px;">
	</div>
EOHERO;


	$seriesBase = "miami-ink";
	$schedule = getSchedule("miami-ink");
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="active first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="schedule block">
			<h2>Schedule</h2>
			$schedule
		</div>
		<div class="about white-box block">
			<h2>About</h2>
			<p>Every tattoo has a story, and Miami Ink is the first TV series to highlight the inspiring tales that lead people to get inked. Watch as old friends and tattoo artists Ami James, Chris Garver, Darren Brass, and Chris Nu&ntilde;ez reunite to open their dream tattoo shop in Miami Beach with apprentice Yojiro Harada following their lead. Kat Von D was featured in the first two seasons before she left to open her own shop in L.A. The bustling business attracts everyone from the hardcore punk rocker to the A-List celebrity, who all share a unique vision for their own body art.</p>
		</div>
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="featured white-box block">
			<h2>Five Things to Consider Before You Get a Tattoo</h2>
			<img class="bordered media" src="/assets/images/featured/thumbs/miamiink_138x138.jpg" />
			<div class="copy">
				<p>When Miami Ink premiered it revolutionized TV by bringing tattoo art to the mainstream and giving audiences the story behind the tat. But before you go out and get your own work of body art, consider these five things.</p>
				<p><a href="/series/miami-ink/features" class="no-break">Read More +</a></p>
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
					<img class="bordered media" src="/assets/images/cast/Miami-Ink/kat-von-d-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Kat Von D</h3>
						</div>
						<p>After beefing with the crew of Miami Ink at the end of season 2, Kat opened her own tattoo shop in LA called LA Ink, which was also the name of her show.</p>
					</div>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/Miami-Ink/ami-james-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Ami James</h3>
						</div>
						<p>This tattoo artist is at it again in NY Ink, the latest Miami Ink spin-off set in SoHo. His mission: To become the Tattoo King of New York.</p>
					</div>
				</li>
			</ul>
			<a class="sub-page-more" href="/series/miami-ink/cast">See the entire cast +</a>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="facebook block">
			<fb:like-box href="https://www.facebook.com/MiamiInknuvoTV" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
		<div class="photos block">
			<h2>Photos</h2>
			<div class="col">
				<img class="bordered" src="/assets/images/galleries/_MiamiInk/_thmbs/thmb_1.jpg" />
				<img class="bordered" src="/assets/images/galleries/_MiamiInk/_thmbs/thmb_2.jpg" />
			</div>
			<div class="last col">
				<img class="bordered" src="/assets/images/galleries/_MiamiInk/_thmbs/thmb_3.jpg" />
				<img class="bordered" src="/assets/images/galleries/_MiamiInk/_thmbs/thmb_4.jpg" />
			</div>
			<a class="sub-page-more" href="/series/$seriesBase/photos">See all photos +</a>
		</div>		
	</div>
EOCONTENT;

?>


