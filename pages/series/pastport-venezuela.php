<?
	$page->title = "Pastport Venezuela | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-s2mb";
		
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
	$schedule = getSchedule("adrenalina");
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="active first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
			<li class="season-nav">
				<span>Season:</span>
				<ul class="inline">
					<li><a href="/series/pastport-cuba">1</a></li>
					<li><a href="/series/pastport-colombia">2</a></li>
					<li><a href="/series/pastport-argentina">3</a></li>
					<li class="active"><a href="/series/pastport-venezuela">4</a></li>
					<li><a href="/series/pastport-puerto-rico">5</a></li>
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
			<p>Pastport: Venezuela takes actor Wilmer Valderrama back to his roots, where all his big dreams and aspirations were born. The emotional journey follows him as he returns to Venezuela after 16 years! Watch as he visits the house he grew up in, the school that cultivated his acting career, and the country he'll always call home. The life-changing experience reveals just how much his past shapes his future.</p>
		</div>
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="featured white-box block">
			<h2>Five Things You Didn't Know About Wilmer Valderrama</h2>
			<img class="bordered media" src="/assets/images/featured/thumbs/pastport-venezuela-hp-490x340-v1_138x138.jpg" />
			<div class="copy">
				<p>You know and love him as Fez from <em>That 70s Show</em>, but I bet you didn't know these cool tidbits about sexy Venezuelan star <strong>Wilmer Valderrama</strong>. Watch as the actor travels back to his homeland and discovers just how much his past shapes his future only on nuvoTV.</p>
				<p><a href="/series/pastport-venezuela/features" class="no-break">Read More +</a></p>
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
					<img class="bordered media" src="/assets/images/cast/Pastport-Venezuela/wilmer-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Wilmer Valderrama</h3>
						</div>
						<p>Wilmer was born in Miami, Florida to a Venezuelan father and Colombian mother, who always supported his dreams. From age 3 to 14, he lived in a small town in Venezuela, where his father owned a farm and sold farming equipment for a living. <a href="/series/pastport-venezuela/cast">[...]</a></p>
					</div>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/Pastport-Venezuela/joe-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Joe</h3>
						</div>
						<p>Wilmer's best friend, Joe, is like the older brother he never had. Joe's hesitant to go on this trip at first. He thinks Venezuela is dangerous, but eventually agrees to go when he realizes how much it means to Wilmer. The blonde hair, blue-eyed BFF speaks fluent Spanish and makes Wilmer laugh 24/7.</p>
					</div>
				</li>
			</ul>
			<a class="sub-page-more" href="/series/pastport-venezuela/cast">See the entire cast +</a>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="social block">
			<h2>Find Pastport on</h2>
			<ul class="inline">
				<li><a class="facebook" href="http://www.facebook.com/Pastport">facebook</a></li>
				<li><a class="twitter" href="http://twitter.com/nuvoTVPastport">twitter</a></li>
				<li class="last"><a target="_blank" class="hulu" href="http://www.hulu.com/watch/266281/pastport-venezuela">hulu</a></li>
			</ul>			
		</div>
		<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/Pastport" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
		<div class="photos block">
			<h2>Photos</h2>
			<div class="col">
				<img class="bordered" src="/assets/images/galleries/_PastportVenezuela/_thmbs/thmb_1.jpg" />
				<img class="bordered" src="/assets/images/galleries/_PastportVenezuela/_thmbs/thmb_2.jpg" />
			</div>
			<div class="last col">
				<img class="bordered" src="/assets/images/galleries/_PastportVenezuela/_thmbs/thmb_3.jpg" />
				<img class="bordered" src="/assets/images/galleries/_PastportVenezuela/_thmbs/thmb_4.jpg" />
			</div>
			<a class="sub-page-more" href="/series/$seriesBase/photos">See all photos +</a>
		</div>
	</div>
EOCONTENT;

?>