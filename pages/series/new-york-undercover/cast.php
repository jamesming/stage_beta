<?
	$page->title = "New York Undercover - Cast | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_NYUndercover.png) no-repeat 0 0; left:395px; top:206px; width:643px; height:44px;">
	</div>
EOHERO;


	$seriesBase = "new-york-undercover";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li class="active"><a href="/series/$seriesBase/cast">Cast</a></li>
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
					<img class="bordered media" src="/assets/images/cast/New York Undercover/Malik-Yoba-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Malik Yoba</h3>
					</div>
					<p>Best know for his role as Det. Julius Clarence "J.C." Williams on New York Undercover, Yoba has also appeared in films Cool Runnings and Criminal, and TV shows Arrested Development, Brock Harris, Girlfriends, and  Raines.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/New York Undercover/Michael-DeLorenzo-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Michael DeLorenzo</h3>
					</div>
					<p>The half-Italian, half-Puerto Rican actor, director and musician is best known for his role as NYPD Detective Eddie Torres on New York Undercover.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/New York Undercover/Lauren-Velez-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Lauren Velez</h3>
					</div>
					<p>She played 20-something Puerto Rican Det. Nina Moreno, who gave up her daughter up for adoption and was abandoned by her husband.</p>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/New York Undercover/Thomas-Ford-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Thomas Ford</h3>
					</div>
					<p>As commanding officer of NYPD's Special Investigations Division, Lt. Malcolm Barker frequently instructed his officers to lie, cheat, and do whatever it took to close a case.</p>
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