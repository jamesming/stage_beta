<?
	$page->title = "Hill Street Blues - Features | nuvoTV Official Site";
	
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
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li class="last active"><a href="/series/$seriesBase/features">Features</a></li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="white-box block">
			<h2>Did You Know? Hill Street Blues</h2>
			<img class="bordered media" src="/assets/images/featured/Hill-Street-Blues-Features_458x248.jpg" />
			<p>Quiz fellow fans with these five facts about the critically-acclaimed police drama.</p>
			<ol>
				<li><strong>It was a first.</strong> Hill Street Blues was the first dramatic series to incorporate long, handheld shots and continuous storylines. It was also nominated 21 times for an Emmy for its first season, which was a record.</li>
				<li><strong>It wasn't palm tree friendly.</strong> The opening credit sequence was shot in Chicago, but the actual episodes were shot in Los Angeles. Location scouts struggled to find locations in L.A. that didn't have visible palm trees. Only about three episodes were shot on location in Chicago. </li>
				<li><strong>It was written to the beat of its own drum.</strong> The show's theme music, written by Mike Post, became a hit and even won a Grammy. Post said he went for something opposite of the gritty visuals you saw in the opening sequence, creating a theme that was beautiful and took you away from the show's reality.</li>
				<li><strong>It was tragic.</strong> Dominique Dunne appeared in an episode as a battered woman, and the marks on her neck were real. Dunne was abused and eventually killed by her boyfriend, John Sweeney. The episode aired two weeks after her death, and was dedicated to her.</li>
				<li><strong>It's a classic.</strong> Hill Street Blues was voted #14 on TV Guide's "50 Greatest TV Shows of All Time."</li>
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