<?
	$page->title = "L.A. Law - Features | nuvoTV Official Site";
	
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_LALaw.png) no-repeat 0 0; left:513px; top:56px; width:291px; height:126px;">
	</div>
EOHERO;


	$seriesBase = "la-law";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li class="last active"><a href="/series/$seriesBase/features">Features</a></li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="white-box block">
			<h2>Five Things You Didn't Know About L.A. Law</h2>
			<img class="bordered media" src="/assets/images/featured/LA-Law-Features_458x248.jpg" />
			<p>The lives and work of the staff of a major Los Angeles law firm were revealed in this hit TV drama, but what you didn't know were these fun facts.</p>
			<ol>
				<li><strong>It was always consistent.</strong> In the opening title sequence, the car's L.A. Law license plate expiration sticker always showed the ending year for the given season. </li>
				<li><strong>It broke barriers.</strong> Two female characters&ndash;Abby (Michele Greene) and C.J. (Amanda Donohoe)&ndash;kissed each other in a season 5 episode. The scene was recognized as the first kiss between two women in the history of prime time American TV series, and subsequently stirred quite a bit of controversy. Today, it's known as the <a href="http://en.wikipedia.org/wiki/Lesbian_kiss_episode" target="_blank">"Lesbian Kiss Episode."</a </li>
				<li><strong>It really liked Mad Magazine.</strong> Series creator Steven Bochco was so taken with the show being parodied on the cover of Mad Magazine, that he staged a photo shoot with the show's actors in the exact same positions as their caricatures. Mad Magazine actually ran the photo in a subsequent issue.</li>
				<li><strong>It had a car fetish.</strong> The license plate in the beginning of the opening credits for the first seven seasons was mounted on the rear of a Jaguar, but for the final season it was on a Bentley Continental R, a car Arnie Becker was shopping for. He eventually received one as a gift in episode 3 of the same season.</li>
				<li><strong>It ended with a bang.</strong> The series shot their final episode the same morning actor Corbin Bernsen called into the Howard Stern Show for the very last time.</li>
			</ol>
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