<?
	$page->title = "Dark Angel - Cast | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
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
			<li class="active"><a href="/series/$seriesBase/cast">Cast</a></li>
			<li class="last"><a href="/series/$seriesBase/episodes">Episodes</a></li>
			<!-- <li class="last"><a href="/series/$seriesBase/features">Features</a></li> -->
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
					<img class="bordered media" src="/assets/images/cast/Dark-Angel/cast_Jessica-Alba.jpg" />
					<div class="meta">
						<h3>Jessica Alba</h3>
					</div>
					<p>Born in Pomona, California to a Mexican American father who was in the air force and a Danish/French Canadian mother, Jessica's family moved around a lot. They finally settled in Southern California when Jessica was nine. At 11, Alba persuaded her mom to take her to an acting competition in Beverly Hills, where she won the grand prize&mdash;free acting classes! An agent signed Alba nine months later. She has since become the biggest sex symbol in Hollywood and has appeared in such TV shows as <i>The Secret World of Alex Mack</i>, <i>Flipper</i>, and <i>MADtv</i>, and starring roles in films <i>Sin City</i>, <i>Machete</i>, and the upcoming <i>Spy Kids 4</i>.</p>
				</li>
				<!-- <li class="block">
					<img class="bordered media" src="/assets/images/cast/Dark-Angel/cast-lincoln-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Geneva Locke</h3>
					</div>
					<p>This Canadian actress, who's a student at Sauder School of Business at the University of British Columbia, is also a rising ultimate Frisbee star.</p>
				</li> -->
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Dark-Angel/cast_Michael-Weatherly.jpg" />
					<div class="meta">
						<h3>Michael Weatherly</h3>
					</div>
					<p>This NY-born actor/musician got his first big break in 1984 as Theo Huxtable's roommate on <i>The Cosby Show</i>. He later landed roles in indie film, <i>Trigger Happy</i>, opposite Rosario Dawson, and <i>The Last Days of Disco</i> opposite Chlo&euml; Sevigny. He plays Logan Cale in <i>Dark Angel</i>.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Dark-Angel/cast_JohnSavage.jpg" />
					<div class="meta">
						<h3>John Savage</h3>
					</div>
					<p>Best known for his role opposite Robert De Niro and Meryl Streep in 1978's Academy Award-winning film <i>The Deer Hunter</i>, John Savage has appeared in <i>Hair</i>, Oliver Stone's <i>Salvador</i>, Francis Ford Coppola's <i>The Godfather III</i> and Spike Lee's <i>Do the Right Thing</i>.</p>
				</li>
				<!-- <li class="block">
					<img class="bordered media" src="/assets/images/cast/Dark-Angel/cast-veronica-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Richard Gunn</h3>
					</div>
					<p>This theatre buff got his start playing Calvin "Sketchy" Theodore in <i>Dark Angel</i>. He later landed a lead role in <i>Lost Voyage</i> and a series regular in <i>The Partners</i>. He's got a thing for vintage motorcycles, classical guitar, astrophysics, and spending time on his ranch in California.</p>
				</li> -->				
			</ul>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="facebook block">
			<fb:like-box href="https://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
	</div>
EOCONTENT;

?>