<?
	$page->title = "Curvy Girls | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-s2mb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">
		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/CURVYgirls_SP.png) no-repeat 0 0; left:464px; top:150px; width:684px; height:138px;">
	</div>
EOHERO;


	$seriesBase = "curvygirls";
	$schedule = getSchedule("curvygirls");
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="active first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li class="last"><a href="/series/$seriesBase/features">Features</a></li>
			<!-- <li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>  -->
			<li class="season-nav"   style='display:none'  >
				<span>Season:</span>
				<ul class="inline">
					<li><a href="/series/pastport-cuba">1</a></li>
					<li><a href="/series/pastport-colombia">2</a></li>
					<li><a href="/series/pastport-argentina">3</a></li>
					<li><a href="/series/pastport-venezuela">4</a></li><li><a href="/series/pastport-puerto-rico">5</a></li>
					<li class="active"><a href="/series/curvygirls">6</a></li>
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
			<p>
			
<i><span style="font-size:11.0pt">Curvy Girls</span></i><span style="font-size:11.0pt">
 provides an all-access pass inside the glamorous world of professional 
modeling by shining the spotlight on four working plus-size Latina 
models whose passion and pride fuel their drive to achieve fame, fortune
 and fabulousness. But secret battles with insecurity, eating disorders,
 family fiascos and rocky romantic relationships threaten to singe their
 competitive spirit as they navigate through L.A.'s fast lane of 
auditions, photo shoots and fierce competition. </span>

			</p>
		</div>
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="featured white-box block">
			<h2>Redefining Sexy One Shoot at a Time</h2>
			<img class="bordered media" src="/assets/images/featured/thumbs/curvygirls_138x138.jpg" />
			<div class="copy">
				<p>Four curvy chicas are going to add some plus-size personality to L.A.'s modeling world whether Tinseltown is ready for it or not. <br /></span></b></p>
				<p><a href="/series/curvygirls/features" class="no-break">Read More +</a></p>
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
					<img class="bordered media" 
					src="/assets/images/cast/curvygirls/Denise_148x148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Denise</h3>
						</div>
						<p>You've seen this sexy single mom hyping major campaigns for fashion giants like Forever 21 and Torrid. But that's only the beginning for this gorgeous go-getter who is set on becoming the plus-size world's first supermodel. A prospective move from L.A. to NYC and custody issues with her overbearing ex, however, threaten to shake up her life like a salt shaker.  
						</p>
					</div>
				</li>
				<li class="last block">
					<img class="bordered media" 
					src="/assets/images/cast/curvygirls/Lorna_148x148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Lorna</h3>
						</div>
						<p>A contestant on nuvoTV's Model Latina Las Vegas, this New York-based beauty knows how to handle fierce competition. The ambitious model battled bulimia that sidelined her professional career in the mainstream only to later land her near the top in the world of plus-size modeling. But when a career move to L.A. threatens to tear apart her relationship with her New Yorker BF, she is forced to choose between true love and a shot at the good life.
						</p>
					</div>
				</li>
			</ul>
			<a class="sub-page-more" href="/series/curvygirls/cast">See the entire cast +</a>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<!--<div class="social block">
			<h2>Find Pastport on</h2>
			<ul class="inline">
				<li><a class="facebook" href="http://www.facebook.com/Pastport">facebook</a></li>
				<li><a class="twitter" href="http://twitter.com/nuvoTVPastport">twitter</a></li>
				<li class="last"><a target="_blank" class="hulu" href="http://www.hulu.com/pastport">hulu</a></li>
			</ul>			
		</div>-->
		<!--<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/Pastport" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>-->
		<!--<div class="photos block">
			<h2>Photos</h2>
			<div class="col">
				<img class="bordered" src="/assets/images/galleries/_PastportPuertoRico/_thmbs/7866.jpg" />
				<img class="bordered" src="/assets/images/galleries/_PastportPuertoRico/_thmbs/7834.jpg" />
			</div>
			<div class="last col">
				<img class="bordered" src="/assets/images/galleries/_PastportPuertoRico/_thmbs/7960.jpg" />
				<img class="bordered" src="/assets/images/galleries/_PastportPuertoRico/_thmbs/7906.jpg" />
			</div>
			<a class="sub-page-more" href="/series/$seriesBase/photos">See all photos +</a>
		</div>-->
	</div>
EOCONTENT;

?>