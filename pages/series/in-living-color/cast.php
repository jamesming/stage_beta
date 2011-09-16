<?
	$page->title = "In Living Color - Cast | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_inLivingColor.png) no-repeat 0 0; left:395px; top:143px; width:451px; height:109px;">
	</div>
EOHERO;


	$seriesBase = "in-living-color";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li class="active"><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li class="last"><a href="/series/$seriesBase/features">Features</a></li>
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
					<img class="bordered media" src="/assets/images/cast/In Living Color/Keenan-Wayans-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Keenen Ivory Wayans</h3>
					</div>
					<p>The writer and creator of In Living Color ended up leaving the show after disputing with the network over censorship. Keenen, who was synonymous with his Mike Tyson and Arsenio Hall impersonations, had a brief stint with late-night television before making a comeback in White Chicks.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/In Living Color/Damon-Wayans-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Damon Wayans</h3>
					</div>
					<p>Shortly after the Wayans left the show, Damon starred in three films&ndash;Mo' Money, Blankman, and Major Payne&ndash;and struck gold with his successful sitcom, My Wife and Kids.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/In Living Color/JLo-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Jennifer Lopez</h3>
					</div>
					<p>If you don't know what this chica's been up to lately, you've been living under a rock. The fabulous 41-year-old managed to make a killer comeback with her American Idol debut, release her seventh album Love?, and  be crowned "The Most Beautiful Woman in the World" all while juggling hot hubbie Marc Anthony and too-cute-for-words twins.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/In Living Color/Jamie-Foxx-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Jamie Foxx</h3>
					</div>
					<p>The Oscar/Grammy/Golden Globe-winning actor and musician is everywhere. You can't miss him. Really.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/In Living Color/Jim-Carrey-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Jim Carrey</h3>
					</div>
					<p>Post In Living Color, Carrey went on to make Ace Ventura: Pet Detective, The Mask, The Cable Guy, The Grinch, and his most recent, Mr. Popper's Penguins, to name a few.</p>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/In Living Color/Rosie-Perez-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Rosie Perez</h3>
					</div>
					<p>After busting a move on In Living Color, Perez starred opposite Woody Harrelson in White Man Can't Jump, was the lead in The 24 Hour Woman, and was in countless films, including Riding in Cars with Boys and Pineapple Express.</p>
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