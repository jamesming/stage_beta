<?
	$page->title = "Pastport Argentina - Cast | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_PastPort_Arg.png) no-repeat 0 0; left:331px; top:76px; width:645px; height:136px;">
		<a href="http://www.facebook.com/Pastport" style="left:297px; top:56px; width:218px; height:74px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "pastport-argentina";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li class="active"><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
			<li class="season-nav">
				<span>Season:</span>
				<ul class="inline">
					<li><a href="/series/pastport-cuba">1</a></li>
					<li><a href="/series/pastport-colombia">2</a></li>
					<li class="active"><a href="/series/pastport-argentina">3</a></li>
					<li><a href="/series/pastport-venezuela">4</a></li>
				</ul>
			</li>
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
					<img class="bordered media" src="/assets/images/cast/Pastport-Argentina/carlos-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Carlos Alazraqui</h3>
						<strong>"Yo Quiero Taco Bell."</strong>
					</div>
					<p><a target="_blank" href="http://www.carlosalazraqui.com/">Carlos</a>, 48, was born in Yonkers, New York and grew up in the blue-collar suburb of Concord, CA. He started doing standup in college, and after winning four years in a row at the <a href="http://www.sanfranciscocomedycompetition.com/">San Francisco International Comedy Competition</a>, took his prize money and moved to Los Angeles. It was here that his career launched. Carlos, 48, would soon be known as Deputy James Garcia in the wacky and hugely popular TV show Reno 911! And, of course, as the voice of the Taco Bell Chihuahua.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Pastport-Argentina/laura-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Laura</h3>
					</div>
					<p>Carlos' wife Laura, 28, works as an editor, producer, and camera operator in post production. The former basketball player is 20 years younger than Carlos, but ironically nicknamed him "Peter Pan" because he never wants to grow up.</p>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/Pastport-Argentina/mina-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Mina</h3>
					</div>
					<p>At 83, Carlos' mom, Mina, still plays tennis every week and has a master's degree in Theology from Cal Berkeley. She became the first Latina ordained minister in the U.S. in 1978, and has never forgotten her Argentinean roots. Funny and full of life, Carlos jokes that she's like having Charo for a mom. "Cuchi, Cuchi!"</p>
				</li>
			</ul>
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