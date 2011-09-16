<?
	$page->title = "L.A. Law | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-s2mb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_LALaw.png) no-repeat 0 0; left:513px; top:56px; width:291px; height:126px;">
	</div>
EOHERO;


	$seriesBase = "la-law";
	$schedule = getSchedule("la-law");
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
			<p>This critically acclaimed TV series combines humor and drama and centers around top Los Angeles law firm McKenzie, Brackman, Chaney & Kuzak. While things get steamy inside the courtroom, the real battles take place outside&ndash;everywhere from the bedroom to staff meetings. The firm's ambitious, competitive, and oftentimes promiscuous attorneys create conflict when they start mixing business with pleasure.</p>
		</div>
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="featured white-box block">
			<h2>Five Things You Didn't Know About L.A. Law</h2>
			<img class="bordered media" src="/assets/images/featured/thumbs/LALAW_138x138.jpg" />
			<div class="copy">
				<p>The lives and work of the staff of a major Los Angeles law firm were revealed in this hit TV drama, but what you didn't know were these fun facts.</p>
				<p><a href="/series/la-law/features" class="no-break">Read More +</a></p>
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
					<img class="bordered media" src="/assets/images/cast/LA-Law/corbin-bernsen-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Corbin Bernsen</h3>
						</div>
						<p>In addition to playing Arnold Becker on L.A. Law, a role that earned him Emmy and Golden Globe nominations, Bernsen appeared regularly on General Hospital, Cuts, and Psych.</p>
					</div>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/LA-Law/jill-eikenberry-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Jill Eikenberry</h3>
						</div>
						<p>Best known for her role as lawyer Ann Kelsey on L.A. Law, Eikenberry is an Obie and Golden Globe Award winner, and was nominated five times for an Emmy.</p>
					</div>
				</li>
			</ul>
			<a class="sub-page-more" href="/series/la-law/cast">See the entire cast +</a>
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