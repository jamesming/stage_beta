<?
	$page->template = "standard";

	$page->bodyClasses[] = "layout-s2mb";

	$page->components["theme"]  = <<<EOTHEME
		<div class="">
			<img src="/assets/images/bg-cinema.jpg" style="margin-left:-700px" style="height:1202px; width:1400px;" />
		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO

EOHERO;


	$schedule = getSchedule("el-mariachi");
	$page->components["content"] = <<<EOCONTENT
	<div class="sidebar-left">
		<div class="schedule block">
			<h2>Schedule</h2>
			$schedule
		</div>
		<div class="trailer block">
			<h2>Trailer</h2>
			<a class="iframe fancyVideo" data-width="480" data-height="270" href="http://video.sitv.com/services/player/bcpid979373775001?bckey=AQ~~,AAAAADEdZAY~,VHcBVNPqDVss26Xw7zNq1Tx2cdvttt5d&bctid=852899505001"><img class="bordered media" src="http://placehold.it/198x138" /></a>
		</div>
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="cast white-box block">
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
				<li class="last block">
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
		</div>
		<div class="discussion white-box block">
			<h2>Discussion</h2>
			<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:comments href="{$page->fullURL}" num_posts="4" width="420"></fb:comments>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="about white-box block">
			<h2>Summary</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Duis aute irure dolor in in voluptate velit eiusmod esse eu labore nul tempor pariatur.</p>
		</div>
		<div class="ad ad-box block"></div>
		<div class="photos block">
			<h2>Photos</h2>
			<div class="col">
				<a class="fancyLink" href="http://placehold.it/600x400.jpg"><img class="bordered" src="http://placehold.it/141x108" /></a>
				<a class="fancyLink" href="http://placehold.it/600x400.jpg"><img class="bordered" src="http://placehold.it/141x108" /></a>
			</div>
			<div class="last col">
				<a class="fancyLink" href="http://placehold.it/600x400.jpg"><img class="bordered" src="http://placehold.it/141x108" /></a>
				<a class="fancyLink" href="http://placehold.it/600x400.jpg"><img class="bordered" src="http://placehold.it/141x108" /></a>
			</div>
		</div>
	</div>
EOCONTENT;

?>