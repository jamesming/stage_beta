<?
	$page->title = "Chicago Hope - Features | nuvoTV Official Site";
	
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_ChicagoHope.png) no-repeat 0 0; left:417px; top:194px; width:404px; height:45px;">
	</div>
EOHERO;


	$seriesBase = "chicago-hope";
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
			<h2>Betcha Didn't Know: Chicago Hope</h2>
			<img class="bordered media" src="/assets/images/featured/Chicago-Hope-Features_458x248.jpg" />
			<p>There are a lot of things we bet you didn't know about the seven-time Emmy Award-winning medical drama. Here are five: </p>
			<ol>
				<li><strong>Way Before Its Time.</strong> Chicago Hope's "The Other Cheek" episode was the first regular series to be broadcast in HDTV.</li>
				<li><strong>Potty Mouth.</strong> The series was the first to use the "S" Word (rhymes with hit) on network television. ER used the expletive several years later.</li>
				<li><strong>Pop Culture Vulture.</strong> Chicago Hope was referenced 17 times on other TV shows and films, including South Park and Ally McBeal.</li>
				<li><strong>Risky Business.</strong> Chicago Hope was the first TV series to show the breasts of a female teenager during primetime. It was done in good taste, highlighting a successful reconstruction surgery, and received very little controversy.</li>
				<li><strong>Cutting Edge.</strong> Chicago Hope Hospital used the latest medical procedures; some of which were at the stage where it still might be dangerous for the patient.</li>
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