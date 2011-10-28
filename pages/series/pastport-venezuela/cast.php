<?
	$page->title = "Pastport Venezuela - Cast | nuvoTV Official Site";
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
			<li class="active"><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/features">Features</a></li>
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
		<div class="cast white-box block">
			<h2>Meet the Cast</h2>
			<ul class="unstyled">
				<li class="first block">
					<img class="bordered media" src="/assets/images/cast/Pastport-Venezuela/wilmer-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Wilmer Valderrama</h3>
						<strong>"The bigger you dream, the more you achieve."</strong>
					</div>
					<p>Wilmer was born in Miami, Florida to a Venezuelan father and Colombian mother, who always supported his dreams. From age 3 to 14, he lived in a small town in Venezuela, where his father owned a farm and sold farming equipment for a living. In 1994, Wilmer's family moved back to the U.S. in search of a better life. Wilmer, 31, started acting in 1998 without an agent and no formal training. His strength and determination allowed him to book commercials on his own, and eventually score a well-known acting coach who took him on for free! He auditioned four times for That '70s Show before finally getting the gig. "We all cried tears of joy. I was on that show for eight seasons. Pretty much my entire high school and college years were spent on that set."</p>
					<p>
						Follow Wilmer on <a target="_blank" href="http://twitter.com/#%21/WillyVille">Twitter</a>.<br />
						Join his fan page on <a target="_blank" href="https://www.facebook.com/WilmerValderrama">Facebook</a>.<br />
						See his career highlights on <a target="_blank" href="http://www.imdb.com/name/nm0005519/">IMDb</a>.
					</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Pastport-Venezuela/joe-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Joe</h3>
					</div>
					<p>Wilmer's best friend, Joe, is like the older brother he never had. Joe's hesitant to go on this trip at first. He thinks Venezuela is dangerous, but eventually agrees to go when he realizes how much it means to Wilmer. The blonde hair, blue-eyed BFF speaks fluent Spanish and makes Wilmer laugh 24/7.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Pastport-Venezuela/tadao-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Tadao</h3>
					</div>
					<p>Wilmer's bodyguard, Tadao, is also his best friend. "Wilmer and I have traveled to many places together, and I've never seen him this excited."</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Pastport-Venezuela/yolanda-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Aunt Yolanda</h3>
					</div>
					<p>Wilmer's tia Yolanda is ecstatic to see him! She gathers all his other tias and cousins together at her house in Caracas to host his arrival. She busts out the old family photos, grills Wilmer for taking so long to visit, and shows him how to make arepas. Mmmm!</p>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/Pastport-Venezuela/miguel-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Miguel</h3>
					</div>
					<p>Wilmer spent much of his childhood in Acarigua with his best friend Miguel, who greets them with a Venezuelan flag in hand and lots of old stories to tell. The first is about a beautiful girl named Maria de Los Angeles who Wilmer starred in a school play with. "She's the reason I became an actor," Wilmer said. "That's the day I knew I wanted to entertain."</p>
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