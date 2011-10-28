<?
	$page->title = "Pastport Venezuela - Features | nuvoTV Official Site";
	
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">
		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_PastPort_Venez.png) no-repeat 0 0; left:303px; top:70px; width:684px; height:138px;">
		<a href="http://www.facebook.com/Pastport" style="left:324px; top:59px; width:217px; height:73px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "pastport-venezuela";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li class="active"><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
			<li class="season-nav">
				<span>Episode:</span>
				<ul class="inline">
					<li><a href="/series/pastport-cuba">1</a></li>
					<li><a href="/series/pastport-colombia">2</a></li>
					<li><a href="/series/pastport-argentina">3</a></li>
					<li class="active"><a href="/series/pastport-venezuela">4</a></li>
					<li><a href="/series/pastport-puerto-rico">5</a></li>
					<li><a href="/series/pastport-panama">6</a></li>					
				</ul>
			</li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="white-box block">
			<h2>Five Things You Didn't Know About Wilmer Valderrama</h2>
			<img class="bordered media" src="/assets/images/featured/pastport-venezuela-hp-490x340-v1-Features_458x248.jpg" />
			<p>You know and love him as Fez from <em>That 70s Show</em>, but I bet you didn't know these cool tidbits about sexy Venezuelan star <strong>Wilmer Valderrama</strong>. Watch as the actor travels back to his homeland and discovers just how much his past shapes his future only on nuvoTV.</p>
			<ol>
				<li><strong>He's a farm boy at heart.</strong> His fondest memories are of growing corn, chopping wood, riding horses, and the pigs and chickens he raised as a kid. "It was a far cry from the craziness of Caracas.</li>
				<li><strong>He's passionate about mentoring youth.</strong> The Congressional Hispanic Caucus recently presented Wilmer with an award for his work helping Latino high school students pursue a higher education. "This has been some of the most rewarding work I have ever done."</li>
				<li><strong>He didn't become fluent in English until he started acting.</strong> "Acting forced me to talk to people and learn the language. I really didn't speak English. I couldn't form full sentences. At 18, I was fluent."</li>
				<li><strong>He's aggressive.</strong> "I would go to these cattle call auditions without an agent. I would just show up and sign my name even though I wasn't called in. If they asked about my agency, I gave them my pager number, and booked the gig myself."</li>
				<li><strong>He has an alter ego.</strong> Yes, ladies and gentleman, he's also known as <a href="http://twitter.com/#!/Eduardo_Fresco" target="_blank">Eduardo Fresco</a>.</li>
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