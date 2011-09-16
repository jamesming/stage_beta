<?
	$page->title = "Pastport Puerto Rico - Features | nuvoTV Official Site";
	
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">
		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_pastport-PR.png) no-repeat 0 0; left:344px; top:70px; width:684px; height:138px;">
		<a href="http://www.facebook.com/Pastport" style="left:285px; top:59px; width:217px; height:73px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "pastport-puerto-rico";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li class="active"><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
			<li class="season-nav">
				<span>Season:</span>
				<ul class="inline">
					<li><a href="/series/pastport-cuba">1</a></li>
					<li><a href="/series/pastport-colombia">2</a></li>
					<li><a href="/series/pastport-argentina">3</a></li>
					<li><a href="/series/pastport-venezuela">4</a></li>
					<li class="active"><a href="/series/pastport-puerto-rico">5</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="white-box block">
			<h2>Five Reasons Why Alanna Ubach Rocks</h2>
			<img class="bordered media" src="/assets/images/featured/pastport-puerto-rico_Features_458x248.jpg" />
			<!-- <p>You know and love him as Fez from <em>That 70s Show</em>, but I bet you didn't know these cool tidbits about sexy Venezuelan star <strong>Wilmer Valderrama</strong>. Watch as the actor travels back to his homeland and discovers just how much his past shapes his future only on nuvoTV.</p> -->
			<ol>
				<li>She plays Yael Koontz, a tough Israeli soldier-turned-desperate-housewife who cheats on her hotshot attorney husband and spends most of her time nude, on HBO's Hung. Hot!</li>
				<li>She's the voice of Manny Rivera on El Tigre: The Adventures of Manny Rivera, Nickelodeon's first-ever flash animation series. Best of all? Manny's a 13-year-old boy with superpowers that's torn between being good or evil. Fun!</li>
				<li>She was inspired by a bathroom attendant in a gay club in West Hollywood to write and star in her own one-woman show, <a href="http://www.alannaubach.net/pb/" target="_blank">Patriotic Bitch</a>. She depicts several different women from various countries who can't get a break in life.  </li>
				<li>You can find her in two of the funniest comedies ever made: Meet the Fockers, which she plays Ben Stiller's first love Isabel, and Reese Witherspoon's best friend and sorority sister, Serena, in Legally Blonde II.</li>
				<li>She's not afraid to take a risk! Hence her reason for taking her boyfriend of one year to Puerto Rico with her to make peace with her dad, who passed away, and give him an ultimatum: either commit or quit!</li>
			</ol>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/Pastport" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
	</div>
EOCONTENT;

?>