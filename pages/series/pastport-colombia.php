<?
	$page->title = "Pastport Colombia | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-s2mb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_PastPort_Colombia.png) no-repeat 0 0; left:348px; top:81px; width:574px; height:134px;">
		<a href="http://www.facebook.com/Pastport" style="left:282px; top:54px; width:217px; height:74px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "pastport-colombia";
	$schedule = getSchedule("pastport-colombia");
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
					<li class="active"><a href="/series/pastport-colombia">2</a></li>
					<li><a href="/series/pastport-argentina">3</a></li>
					<li><a href="/series/pastport-venezuela">4</a></li>
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
			<p>Colombian American actress Paula Garces (Harold & Kumar, Clockstoppers) is not your everyday Latina. Born in Manhattan to a free-loving mom, who moved her and her sister back and forth from the mean streets of New York to the countryside of Colombia, it wasn&rsquo;t until later that she met her real dad. Getting pregnant at 18 with her daughter Skye motivated Paula not to end up another statistic. She pursued a career in acting and succeeded in landing roles in major films and TV shows. When she books an audition in Bogota for a role in a hit novela, Paula&rsquo;s life drastically changes. The time has come to see the father she only met once, meet the older brother she always wanted, and introduce her daughter and husband to the family she never really knew. What unfolds is a story about the unconditional love and the power of forgiveness. </p>
		</div>
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="featured white-box block">
			<h2>Actress Paula Garces Reunites With Her Dad</h2>
			<img class="bordered media" src="/assets/images/featured/thumbs/hpfb_pastport_tunein_138x138.jpg" />
			<div class="copy">
				<p>Colombian American actress Paula Garces (Harold & Kumar, Clockstoppers) is not your everyday Latina.</p>
				<p><a href="/series/pastport-colombia/features" class="no-break">Read More +</a></p>
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
					<img class="bordered media" src="/assets/images/cast/Pastport-Colombia/paula-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Paula Garces</h3>
						</div>
						<p>The super sexy starlet was born in New York, but feels &ldquo;completely Colombian.&rdquo; Her acting debut came in 1999 when she landed a role on Emmy Award-winning soap Guiding Light. Paula, 36, later appeared in shows The Shield, Law & Order SVU, CSI Miami, and films Harold & Kumar, and Clockstoppers to name a few. <a href="/series/pastport-colombia/cast">[...]</a></p>
					</div>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/Pastport-Colombia/skye-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Skye</h3>
						</div>
						<p>Paula&rsquo;s 18-year-old daughter lives in Queens, New York and is a psychology major at St. John&rsquo;s University. She&rsquo;s anxious to meet her family in Colombia.</p>
					</div>
				</li>
			</ul>
			<a class="sub-page-more" href="/series/pastport-colombia/cast">See the entire cast +</a>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="social block">
			<h2>Find Pastport on</h2>
			<ul class="inline">
				<li><a class="facebook" href="https://www.facebook.com/Pastport">facebook</a></li>
				<li><a class="twitter" href="http://twitter.com/nuvoTVPastport">twitter</a></li>
				<li class="last"><a target="_blank" class="hulu" href="http://www.hulu.com/watch/264626/pastport-colombia">hulu</a></li>
			</ul>			
		</div>
		<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/Pastport" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
		<div class="photos block">
			<h2>Photos</h2>
			<div class="col">
				<img class="bordered" src="/assets/images/galleries/_PastportColumbia/_thmbs/thmb_1.jpg" />
				<img class="bordered" src="/assets/images/galleries/_PastportColumbia/_thmbs/thmb_2.jpg" />
			</div>
			<div class="last col">
				<img class="bordered" src="/assets/images/galleries/_PastportColumbia/_thmbs/thmb_3.jpg" />
				<img class="bordered" src="/assets/images/galleries/_PastportColumbia/_thmbs/thmb_4.jpg" />
			</div>
			<a class="sub-page-more" href="/series/$seriesBase/photos">See all photos +</a>
		</div>
	</div>
EOCONTENT;

?>