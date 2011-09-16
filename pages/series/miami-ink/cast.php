<?
	$page->title = "Miami Ink - Cast | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_MiamiInk.png) no-repeat 0 0; left:409px; top:96px; width:463px; height:111px;">
	</div>
EOHERO;


	$seriesBase = "miami-ink";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li class="active"><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="cast white-box block">
			<h2>Meet the Cast</h2>
			<ul class="unstyled">
				<li class="first block">
					<img class="bordered media" src="/assets/images/cast/Miami-Ink/kat-von-d-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Kat Von D</h3>
					</div>
					<p>After beefing with the crew of Miami Ink at the end of season 2, Kat opened her own tattoo shop in LA called LA Ink, which was also the name of her show.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Miami-Ink/ami-james-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Ami James</h3>
					</div>
					<p>This tattoo artist is at it again in NY Ink, the latest Miami Ink spin-off set in SoHo. His mission: To become the Tattoo King of New York.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Miami-Ink/darren-brass-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Darren Brass</h3>
					</div>
					<p>This tattoo artist considers Chris Garver, Joe Vegas, Bob Roberts, and Ed Hardy his influences. </p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Miami-Ink/chris-nunez-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Chris Nu&ntilde;ez</h3>
					</div>
					<p>This Cuban tattoo artist received his first tattoo at 16. Now, it's  buried under a sea of new ones. </p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Miami-Ink/yojiro-harada-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Yojiro Harada</h3>
					</div>
					<p>This Japanese tat artist began as the shop's apprentice, and is now tattooing full time. He sings in a punk rock band and is covered in ink. </p>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/Miami-Ink/chris-garver-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Chris Garver</h3>
					</div>
					<p>Considered one of the best tattoo artists in the world, Garver is said to have a two-year waiting list of clients.</p>
				</li>
			</ul>
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