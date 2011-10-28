<?
	$page->title = "Pastport Argentina | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-s2mb";
		
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
	$schedule = getSchedule("pastport-argentina");
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="active first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
			<li class="season-nav">
				<span>Episode:</span>
				<ul class="inline">
					<li><a href="/series/pastport-cuba">1</a></li>
					<li><a href="/series/pastport-colombia">2</a></li>
					<li class="active"><a href="/series/pastport-argentina">3</a></li>
					<li><a href="/series/pastport-venezuela">4</a></li>
					<li><a href="/series/pastport-puerto-rico">5</a></li>
					<li><a href="/series/pastport-panama">6</a></li>					
				</ul>
			</li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="schedule block">
			<h2>Schedule</h2>
			$schedule
		</div>
		<div class="about white-box block">
			<h2>About</h2>
			<p>Argentine American actor/voice-over star/all-around funnyman Carlos Alazraqui (Reno 911!, "Yo Quiero Taco Bell" voice) returns to his parents' homeland with his wife, mom... and one BIG secret. What unfolds is a quirky tale about an American Latino, who struggles with Spanish, but desperately wants to be proud of his roots. He tangos, becomes a gaucho and gets his butt kicked in soccer. Maybe he should have stuck to acting.</p>
		</div>
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="featured white-box block">
			<h2>Watch the Exclusive Pastport Argentina Webisode</h2>
			<img class="bordered media" src="/assets/images/featured/thumbs/fb-490x340-pa_3_138x138.jpg" />
			<div class="copy">
				<p>Argentine American actor/voice-over star/all-around funnyman Carlos Alazraqui (Reno 911!, "Yo Quiero Taco Bell" voice) returned to his parents' homeland with his wife, mom, and one big secret: he's going to be a dad for the first time&mdash;at 48!</p>
				<p><a href="/series/pastport-argentina/features" class="no-break">Read More +</a></p>
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
					<img class="bordered media" src="/assets/images/cast/Pastport-Argentina/carlos-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Carlos Alazraqui</h3>
							<strong>"Yo Quiero Taco Bell."</strong>
						</div>
						<p><a target="_blank" href="http://www.carlosalazraqui.com/">Carlos</a>, 48, was born in Yonkers, New York and grew up in the blue-collar suburb of Concord, CA. He started doing standup in college, and after winning four years in a row at the <a href="http://www.sanfranciscocomedycompetition.com/">San Francisco International Comedy Competition</a>, took his prize money and moved to Los Angeles.&nbsp;<a href="/series/pastport-argentina/cast">[...]</a></p>
					</div>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/Pastport-Argentina/laura-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Laura</h3>
						</div>
						<p>Carlos' wife Laura, 28, works as an editor, producer, and camera operator in post production. The former basketball player is 20 years younger than Carlos, but ironically nicknamed him "Peter Pan" because he never wants to grow up.</p>
					</div>
				</li>
			</ul>
			<a class="sub-page-more" href="/series/pastport-argentina/cast">See the entire cast +</a>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="social block">
			<h2>Find Pastport on</h2>
			<ul class="inline">
				<li><a class="facebook" href="https://www.facebook.com/Pastport">facebook</a></li>
				<li><a class="twitter" href="http://twitter.com/nuvoTVPastport">twitter</a></li>
				<li class="last"><a target="_blank" class="hulu" href="http://www.hulu.com/watch/264627/pastport-argentina">hulu</a></li>
			</ul>			
		</div>
		<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/Pastport" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
		<div class="photos block">
			<h2>Photos</h2>
			<div class="col">
				<img class="bordered" src="/assets/images/galleries/_PastportArgentina/_thmbs/thmb_1.jpg" />
				<img class="bordered" src="/assets/images/galleries/_PastportArgentina/_thmbs/thmb_2.jpg" />
			</div>
			<div class="last col">
				<img class="bordered" src="/assets/images/galleries/_PastportArgentina/_thmbs/thmb_3.jpg" />
				<img class="bordered" src="/assets/images/galleries/_PastportArgentina/_thmbs/thmb_4.jpg" />
			</div>
			<a class="sub-page-more" href="/series/$seriesBase/photos">See all photos +</a>
		</div>
	</div>
EOCONTENT;
?>