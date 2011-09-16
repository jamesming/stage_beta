<?
	$page->title = "Dark Angel | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-s2mb";
		
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
	$schedule = getSchedule("dark-angel");
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="active first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li class="last"><a href="/series/$seriesBase/episodes">Episodes</a></li>
			<!-- <li class="last"><a href="/series/$seriesBase/features">Features</a></li> -->
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="schedule block">
			<h2>Schedule</h2>
			$schedule
		</div>
		<div class="about white-box block">
			<h2>About</h2>
			<p>James Cameron's sci-fi TV series follows a group of genetically-engineered children as they escape from a lab project in post-apocalyptic Seattle. The show centers around Max Guevara, a super soldier played by Jessica Alba as an adult and Geneva Locke as a child, who escapes from a covert government biotech/military facility and tries to lead a normal life. Max is half fox, half cat&mdash;lithe, agile, unnaturally fast and strong. Living in a bohemian squalor in an economically ravaged society, she eludes her relentless foe by keeping a low profile&mdash;until she meets a crusading cyberjournalist who enlists her in the fight against the powers that be. Watch as Max searches for her brothers and sisters scattered in the aftermath of their escape.</p>
		</div>
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="featured white-box block">
			<h2>Watch Jessica Alba on nuvoTV!</h2>
			<img class="bordered media" src="/assets/images/featured/thumbs/darkAngel_138x138-2.jpg" />
			<div class="copy">
				<p>The world's sexiest actress plays a genetically-engineered superhuman in James Cameron's sci-fi series only on nuvoTV.</p>
				<p><a href="http://bcove.me/j1whxlfn" class="no-break">See More +</a></p>
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
					<img class="bordered media" src="/assets/images/cast/Dark-Angel/cast_Jessica-Alba.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Jessica Alba</h3>
						</div>
						<p>Born in Pomona, California to a Mexican American father who was in the air force and a Danish/French Canadian mother, Jessica's family moved around a lot. They finally settled in Southern California when Jessica was nine. At 11, Alba persuaded her mom to take her to an acting competition in Beverly Hills, where she won the grand prize&mdash;free acting classes! An agent signed Alba nine months later. She has since become the biggest sex symbol in Hollywood and has appeared in such TV shows as <i>The Secret World of Alex Mack</i>, <i>Flipper</i>, and <i>MADtv</i>, and starring roles in films <i>Sin City</i>, <i>Machete</i>, and the upcoming <i>Spy Kids 4</i>.</p>
					</div>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/Dark-Angel/cast_Michael-Weatherly.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Michael Weatherly</h3>
						</div>
					<p>This NY-born actor/musician got his first big break in 1984 as Theo Huxtable's roommate on <i>The Cosby Show</i>. He later landed roles in indie film, <i>Trigger Happy</i>, opposite Rosario Dawson, and <i>The Last Days of Disco</i> opposite Chlo&euml; Sevigny. He plays Logan Cale in <i>Dark Angel</i>.</p>
					</div>
				</li>
			</ul>
			<a class="sub-page-more" href="/series/dark-angel/cast">See the entire cast +</a>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="social block">
			<h2>Find Dark Angel on</h2>
			<ul class="inline">
				<li><a class="facebook" href="https://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174">facebook</a></li>
				<li class="last"><a class="twitter" href="http://twitter.com/#!/nuvoTVDarkAngel">twitter</a></li>
			</ul>			
		</div>
		<div class="facebook block">
			<fb:like-box href="https://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
	</div>
EOCONTENT;

?>