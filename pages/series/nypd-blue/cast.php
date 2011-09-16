<?
	$page->title = "NYPD Blue - Cast | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_NYPDBlue.png) no-repeat 0 0; left:495px; top:183px; width:328px; height:49px;">
	</div>
EOHERO;


	$seriesBase = "nypd-blue";
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
					<img class="bordered media" src="/assets/images/cast/NYPD Blue/dennisfranz_nypdblue1-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Dennis Franz</h3>
					</div>
					<p>He played hard boiled police detective, Andy Sipowicz, on NYPD Blue, and previously appeared as Lt. Norman Buntz on Hill Street Blues, and earlier played Detective Benedetto on the same show.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/NYPD Blue/gordonclapp_nypdblue1-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Gordon Clapp</h3>
					</div>
					<p>Best known for playing Det. Greg Medavoy on all 12 seasons of NYPD Blue, Clapp is an Emmy Award winner and&ndash;random fact&ndash;distant relative of Ethan Allen.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/NYPD Blue/billbrochtrup_nypdblue1-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Bill Brochtrup</h3>
					</div>
					<p>Born in Inglewood, California and raised in Tacoma, Washington, Brochtrup played gay administrative aide, PAA John Irvin, on NYPD Blue, and is active in the LGBT community.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/NYPD Blue/davidcaruso_nypdblue_cast_148X148.jpg" />
					<div class="meta">
						<h3>David Caruso</h3>
					</div>
					<p>He won a Golden Globe Award for his role as Detective John Kelly, a brilliant and often smoldering cop, whose father was murdered in the line of duty.</p>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/NYPD Blue/jimmysmits_nypdblue1-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Jimmy Smits</h3>
					</div>
					<p>The hunky Puerto Rican/Dutch actor is perhaps best known for his role as Detective Bobby, who eventually dies of heart failure and returns to the series as a spirit, on NYPD Blue.</p>
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






