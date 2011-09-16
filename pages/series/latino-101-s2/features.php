<?
	$page->title = "Latino 101 Season 2 - Features | nuvoTV Official Site";
	
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_Latino101_S2.png) no-repeat 0 0; left:381px; top:39px; width:502px; height:222px;">
		<a href="http://www.facebook.com/Latino101" style="left:268px; top:143px; width:227px; height:73px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "latino-101-s2";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/episodes">Episodes</a></li>
			<li class="active"><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
			<li class="season-nav">
				<span>Season:</span>
				<ul class="inline">
					<li><a href="/series/latino-101-s1">1</a></li>
					<li class="active"><a href="/series/latino-101-s2">2</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="white-box block">
			<h2>Exclusive Interview with Latino 101's Erik Rivera!</h2>
			<img class="bordered media" src="/assets/images/featured/erik_rivera_jay_leno-Features_458x248.jpg" />
			<p><em>Latino 101</em> comedian Erik Rivera recently made his stand up comedy debut on <em>The Tonight Show with Jay Leno</em>.   He's also currently working on a sitcom with THE Eva Longoria.  This hot &mdash; yes, we mean <em>HOT</em> &mdash; comedian is a rising star, and we had a chance to catch up with him on his booming fame:</p>
			<p>nuvoTV: Congrats on Leno! How did you land such a cool gig?</p>
			<p><strong>ERIC:  I did an audition showcase for the producers two weeks beforehand and BAM! I'm on the show.</strong>
			<p>nuvoTV: So how does one prep for something of this caliber? I mean, Jay Leno helped launch Jerry Seinfeld's career.</p>
			<p><strong>Well, it's my material, so prepping is simple. You just get up on stage, work out any kinks, and get comfortable with it. I was born to do this. This is what I do. It's my opportunity to shine!</strong>
			<p>nuvoTV: Great threads, by the way!</p>
			<p><strong>Can't look sloppy. I had to make my momma proud. She watched with all her friends back home. The future wife watched too. Couldn't let her down either, or give her second thoughts. :)</strong>
			<p>nuvoTV: Double congrats on getting married. Who's the lucky lady?</p>
			<p><strong>ERIC:  Her name's Katie and she's not in the industry, thank God. That's why it's going to work. She's the normal to my crazy.</strong>
			<p>Be sure to catch Erik on <em>Latino 101</em> only on nuvoTV.</p>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/Latino101" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
	</div>
EOCONTENT;

?>