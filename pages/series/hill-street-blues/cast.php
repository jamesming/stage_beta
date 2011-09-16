<?
	$page->title = "Hill Street Blues - Cast | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_HillStBlues.png) no-repeat 0 0; left:259px; top:114px; width:588px; height:118px;">
	</div>
EOHERO;


	$seriesBase = "hill-street-blues";
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
					<img class="bordered media" src="/assets/images/cast/Hill-Street-Blues/daniel-travanti-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Daniel J. Travanti</h3>
					</div>
					<p>There's no denying Capt. Frances Xavier Furillo, the boss of Hill Street, made Travanti a star. He went on to appear in numerous films and even on stage.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Hill-Street-Blues/taurean-blacque-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Taurean Blacque</h3>
					</div>
					<p>He played the part of Det. Neal Washington and partner/friend of J.D. LaRue brilliantly&ndash;a cool, joker-type who could chew on a sliver of wood for hours. Blacque was a national spokesman for adoptive services and is one of the first single black men in the United States to adopt a child.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Hill-Street-Blues/bruce-weitz-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Bruce Weitz</h3>
					</div>
					<p>His outstanding role as Sgt. Michael "Mick" Belker earned Weitz an Emmy Award for Outstanding Supporting Actor in a Drama Series.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Hill-Street-Blues/veronica-hamel-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Veronica Hamel</h3>
					</div>
					<p>The five-time Emmy Award nominee played Joyce Davenport, a hard-driving public defender and love interest of Capt. Frank Furillo.</p>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/Hill-Street-Blues/michael-warren-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Michael Warren</h3>
					</div>
					<p>A former college basketball player, Warren is best known for playing Officer Bobby Hill on Hill Street Blues.</p>
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