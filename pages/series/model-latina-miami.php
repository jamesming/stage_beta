<?
	$page->title = "Model Latina Miami | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-s2mb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">
		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_ML_Miami.png) no-repeat 0 0; left:439px; top:90px; width:537px; height:132px;">
		<a href="http://www.facebook.com/ModelLatina" style="left:194px; top:53px; width:247px; height:73px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "model-latina-miami";
	$schedule = getSchedule("model-latina-miami");
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="active first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/episodes">Episodes</a></li>
			<li><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
			<li class="season-nav">
				<span>Season:</span>
				<ul class="inline">
					<li><a href="/series/model-latina-la">1</a></li>
					<li class="active"><a href="/series/model-latina-miami">2</a></li>
					<li><a href="/series/model-latina-nyc">3</a></li>
					<li><a href="/model-latina-las-vegas/">4</a></li>
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
			<p>Watch as 12 beautiful, sophisticated and diverse Latinas take over a Miami mansion and compete for a modeling contract, $10,000, and star status. Join host Ellie Rodriguez (Fox News Miami) and judges Jai Rodriguez (Queer Eye), Jorge Ram&oacute;n (Cover Shot) and former supermodel Jennifer Gimenez (Sober House) as they search for the next Model Latina.</p>
		</div>
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="featured white-box block">
			<h2>Codie Talks South Africa & O Magazine!</h2>
			<img class="bordered media" src="/assets/images/featured/thumbs/codie_0_138x138.jpg" />
			<div class="copy">
				<p>Just when we thought Codie couldn't make us any more proud, she announces her next big spread for O Magazine. Yes, that's Oprah's magazine. I spoke to the rising model to find out how this all happened.</p>
				<p><a href="/series/model-latina-miami/features" class="no-break">Read More +</a></p>
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
					<img class="bordered media" src="/assets/images/cast/Model Latina s2/emeraude-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Emeraude</h3>
						</div>
						<p>She has Salma's curves, but can this half-Mexican, half-Lebanese looker work the runway?</p>
					</div>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Model Latina s2/lisa-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Lisa</h3>
						</div>
						<p>It's chicas like Lisa who give Miami its rep for being hot, happening, and seductive.</p>
					</div>
				</li>
			</ul>
			<a class="sub-page-more" href="/series/model-latina-miami/cast">See the entire cast +</a>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="social block">
			<h2>Find Model Latina on</h2>
			<ul class="inline">
				<li><a class="facebook" href="http://www.facebook.com/ModelLatina">facebook</a></li>
				<li><a class="twitter" href="http://twitter.com/modellatina">twitter</a></li>
				<li class="last"><a target="_blank" class="hulu" href="http://www.hulu.com/watch/169587/model-latina-making-the-cut#x-0,vepisode,1,0">hulu</a></li>
			</ul>			
		</div>
		<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/ModelLatina" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
		<div class="photos block">
			<h2>Photos</h2>
			<div class="col">
				<img class="bordered" src="/assets/images/galleries/_ModelLatina_Miami/_thmbs/thmb_1.jpg" />
				<img class="bordered" src="/assets/images/galleries/_ModelLatina_Miami/_thmbs/thmb_2.jpg" />
			</div>
			<div class="last col">
				<img class="bordered" src="/assets/images/galleries/_ModelLatina_Miami/_thmbs/thmb_3.jpg" />
				<img class="bordered" src="/assets/images/galleries/_ModelLatina_Miami/_thmbs/thmb_4.jpg" />
			</div>
			<a class="sub-page-more" href="/series/$seriesBase/photos">See all photos +</a>
		</div>
	</div>
EOCONTENT;

?>


