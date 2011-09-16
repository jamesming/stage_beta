<?
	$page->title = "NYPD Blue | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-s2mb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_NYPDBlue.png) no-repeat 0 0; left:495px; top:183px; width:328px; height:49px;">
	</div>
EOHERO;


	$seriesBase = "nypd-blue";
	$schedule = getSchedule("nypd-blue");
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="active first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li class="last"><a href="/series/$seriesBase/features">Features</a></li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="schedule block">
			<h2>Schedule</h2>
			$schedule
		</div>
		<div class="about white-box block">
			<h2>About</h2>
			<p>The gritty reality of life in a New York City police unit is captured in NYPD Blue, ABC's longest-running drama series to date. Watch as detectives Andy Sipowicz and John Kelley (later replaced by Bobby Simone) clash while taking on very different approaches to a very difficult job.</p>
		</div>
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="featured white-box block">
			<h2>NYPD Blue: Five Best Moments</h2>
			<img class="bordered media" src="/assets/images/featured/thumbs/nypd-blue_138x138.jpg" />
			<div class="copy">
				<p>We break down five great moments in the history of one of the most intense police dramas ever.</p>
				<p><a href="/series/nypd-blue/features" class="no-break">Read More +</a></p>
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
					<img class="bordered media" src="/assets/images/cast/NYPD Blue/dennisfranz_nypdblue1-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Dennis Franz</h3>
						</div>
						<p>He played hard boiled police detective, Andy Sipowicz, on NYPD Blue, and previously appeared as Lt. Norman Buntz on Hill Street Blues, and earlier played Detective Benedetto on the same show.</p>
					</div>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/NYPD Blue/gordonclapp_nypdblue1-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Gordon Clapp</h3>
						</div>
						<p>Best known for playing Det. Greg Medavoy on all 12 seasons of NYPD Blue, Clapp is an Emmy Award winner and&ndash;random fact&ndash;distant relative of Ethan Allen.</p>
					</div>
				</li>
			</ul>
			<a class="sub-page-more" href="/series/nypd-blue/cast">See the entire cast +</a>
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