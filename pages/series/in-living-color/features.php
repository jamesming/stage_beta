<?
	$page->title = "In Living Color - Features | nuvoTV Official Site";
	
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_inLivingColor.png) no-repeat 0 0; left:395px; top:143px; width:451px; height:109px;">
	</div>
EOHERO;


	$seriesBase = "in-living-color";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li class="last active"><a href="/series/$seriesBase/features">Features</a></li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="white-box block">
			<h2>Top 5 In Living Color Skits</h2>
			<img class="bordered media" src="/assets/images/featured/InLivingColor-Features_458x248.jpg" />
			<p>No other show impacted popular culture quite like In Living Color. I mean, come on, at one point everyone and their mama was saying "Homey don't play dat" and "Hated it!" Keenen Ivory and Damon Wayans' award-winning comedy series also launched the careers of Jennifer Lopez, Rosie Perez, Jamie Foxx, Jim Carrey, David Alan Grier and Tommy Davidson. We hand-selected some of our favorite skits below. </p>
			<ol>
				<li><strong>Wanda:</strong> Jamie Foxx was brilliant at playing Wanda, the pouty lipped, curly blonde wig-wearing character whose catch phrase was "I'm gonna rock your world." </li>
				<li><strong>Men on Film:</strong> Damon Wayans and David Alan Grier were almost too convincing when they took on stereotypical gay men. Their crazy sexual innuendos, the ridiculous hat, and, of course, "hated it" went down in history. </li>
				<li><strong>Kim Wayans as Oprah:</strong> Everyone loves Oprah, but that doesn't make her exempt from ridicule. And even though the queen of daytime TV later told Kim Wayans that these skits actually hurt her feelings, they were clearly an exaggerated Oprah. </li>
				<li><strong>Mr. Ugly Man:</strong> Marlon Wayans mocking reggae legend Shabba Ranks? Classic, cold-blooded comedy.</li>
				<li><strong>Tommy Davidson as MC Hammer:</strong> Tommy commits to his characters like no other and has you visualizing an entirely different person than the real one. Case in point: MC Hammer. Side note: I'd kill to know what the legendary rapper thinks about the fact that harem pants are back in style.</li>
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