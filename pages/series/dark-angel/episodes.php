<?
	$page->title = "Dark Angel - Episodes | nuvoTV Official Site";
	$page->template = "standard";
		
	$page->bodyClasses[] = "layout-bms";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt-SP-DARKANGEL.png) no-repeat 0 0; width: 527px; height: 186px; top: 75px; left: 485px;">
		<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174" style="left:158px; top:107px; width:228px; height:74px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "dark-angel";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li class="last active"><a href="/series/$seriesBase/episodes">Episodes</a></li>
			<!-- <li class="last"><a href="/series/$seriesBase/features">Features</a></li> -->
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="episodes white-box block">
			<h2>Episode Guide</h2>
			<ul class="episode-list">
				<li><a href="#">Eps. 1 "PILOT"</a></li>
				<li><a href="#">Eps. 101 "HEAT"</a></li>
				<li><a href="#">Eps. 102 "C.R.E.A.M."</a></li>
				<li><a href="#">Eps. 103 "FLUSHED"</a></li>
				<li><a href="#">Eps. 104 "411 ON THE DL"</a></li>
				<li><a href="#">Eps. 105 "PRODIGY"</a></li>
				<li><a href="#">Eps. 106 "COLD COMFORT"</a></li>
				<li><a href="#">Eps. 107 "BLAH BLAH WOOF WOOF"</a></li>
				<li><a href="#">Eps. 108 "OUT"</a></li>

			</ul>			
		</div>
		<div class="ad ad-box block"></div>
	</div>
	<div class="main">
		<div class="episode white-box block">
			<ul class="unstyled episode-content">
				<li>
					<h2>Eps. 1 "PILOT"</h2>
					<img src='/assets/series/dark_angel/Episodes_0_pilot.jpg' />
					<p>T Max, a young woman possessing incredible powers, searches for others like her in a bleak near-future Seattle.</p>
				</li>
				<li>
					<h2>Eps. 101 "HEAT"</h2>
					<p>Max locates the woman who helped save her life during the escape from Manticore.</p>
				</li>
				<li>
					<h2>Eps. 102 "C.R.E.A.M."</h2>
					<p>Max and Logan aid the daughter of a journalist presumed murdered; Max and Original Cindy help Sketchy when he gets in over his head with unscrupulous gamblers.</p>
				</li>
				<li>
					<h2>Eps. 103 "FLUSHED"</h2>
					<p>When Max is thrown in prison, she attempts to stop the warden from abusing a young woman.</p>
				</li>
				<li>
					<h2>Eps. 104 "411 ON THE DL"</h2>
					<p>Max attempts to raise a large sum of cash when Vogelsang claims he can reunite her with a Manticore escapee.</p>
				</li>
				<li>
					<h2>Eps. 105 "PRODIGY"</h2>
					<p>Terrorists seize hostages inside a hotel where a scientist delivers a paper on genetic research that could spell the end of all disease.</p>
				</li>
				<li>
					<h2>Eps. 106 "COLD COMFORT"</h2>
					<p>Max and Zack enlist Lydecker's help as they set out to rescue one of their own; the Jam Pony gang plays a trick on the company's potential new owner.</p>
				</li>
				<li>
					<h2>Eps. 107 "BLAH BLAH WOOF WOOF"</h2>
					<p>Lydecker attempts to trap Max by distributing wanted posters throughout town and offering a reward for her capture.</p>
				</li>
				<li>
					<h2>Eps. 108 "OUT"</h2>
					<p>A criminal captures Logan and Sung in hopes of ascertaining Eyes Only's identity; Normal's significant other has a secret.</p>
				</li>
			</ul>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-tall block"></div>
	</div>
EOCONTENT;

?>