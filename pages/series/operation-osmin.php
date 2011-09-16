<?
	$page->template = "standard";

	$page->bodyClasses[] = "layout-s2mb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO

EOHERO;


	$seriesBase = "operation-osmin";
	$schedule = getSchedule("operation-osmin");
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="active first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/episodes">Episodes</a></li>
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
			<h3>Wednesdays, 10/9c</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Duis aute irure dolor in in voluptate velit eiusmod esse eu labore nul tempor pariatur.</p>
		</div>
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="featured white-box block">
			<h2>Featured Headline</h2>
			<img class="bordered media" src="http://placehold.it/138x138" />
			<div class="copy">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim esse eiusmod tempor veniam.</p>
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse. <a href="/series/operation-osmin/features" class="no-break">Read More +</a></p>
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
					<img class="bordered media" src="http://placehold.it/108x108" />
					<div class="copy">
						<div class="meta">
							<h3>Character Name</h3>
							Played by <a href="#">Actor Name</a>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut mi dolor, in egestas mauris. Morbi orci urna, hendrerit eu rutrum vitae, rhoncus sodales.</p>
					</div>
				</li>
				<li class="block">
					<img class="bordered media" src="http://placehold.it/108x108" />
					<div class="copy">
						<div class="meta">
							<h3>Character Name</h3>
							Played by <a href="#">Actor Name</a>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut mi dolor, in egestas mauris. Morbi orci urna, hendrerit eu rutrum vitae, rhoncus sodales.</p>
					</div>
				</li>
			</ul>
			<a class="sub-page-more" href="/series/operation-osmin/cast">See the entire cast +</a>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="social block">
			<h2>Find operation-osmin on</h2>
			<ul class="unstyled">
				<li><a class="facebook" href="#">facebook</a></li>
				<li><a class="twitter" href="#">twitter</a></li>
				<li><a class="myspace" href="#">myspace</a></li>
				<li><a class="foursquare" href="#">foursquare</a></li>
				<li class="last"><a class="hulu" href="#">hulu</a></li>
			</ul>			
		</div>
		<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/nuvoTV" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
		<div class="photos block">
			<h2>Photos</h2>
			<div class="col">
				<img class="bordered" src="http://placehold.it/143x108" />
				<img class="bordered" src="http://placehold.it/143x108" />
			</div>
			<div class="last col">
				<img class="bordered" src="http://placehold.it/143x108" />
				<img class="bordered" src="http://placehold.it/143x108" />
			</div>
			<a class="sub-page-more" href="/series/operation-osmin/photos">See all photos +</a>
		</div>
	</div>
EOCONTENT;

?>