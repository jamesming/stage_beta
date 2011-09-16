<?
	$page->title = "Model Latina NYC | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-s2mb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_ML_NYC.png) no-repeat 0 0; left:411px; top:84px; width:568px; height:171px;">
		<a href="http://www.facebook.com/ModelLatina" style="left:235px; top:52px; width:247px; height:73px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "model-latina-nyc";
	$schedule = getSchedule("model-latina-nyc");
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
					<li><a href="/series/model-latina-miami">2</a></li>
					<li class="active"><a href="/series/model-latina-nyc">3</a></li>
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
			<p>Watch as 15 beautiful and ambitious Latinas move into an NYC apartment, get coaching from industry pros, and compete for a modeling contract, $25,000, and star status! Join host Ellie Rodriguez and judges Jorge Ram&oacute;n, Franco Lacosta and Annette Rosario as they see who has what it takes to be the next Model Latina.</p>
		</div>
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="featured white-box block">
			<h2>BeChicMag: 3 Latinas Rising in Fashion</h2>
			<img class="bordered media" src="/assets/images/featured/thumbs/screen_shot_2011-05-24_at_10.50.01_am_138x138.jpg" />
			<div class="copy">
				<p>Our fashion-obsessed friend, Mercedes Sanchez of BeChicMag.com, recently profiled three Latinas making a name for themselves in fashion. Representing Peru, Puerto Rico, and Cuba, these up-and-coming designers have seen their creations on everyone from Chloe Sevigny to Beyonce, and our very own Model Latinas!</p>
				<p><a href="/series/model-latina-nyc/features" class="no-break">Read More +</a></p>
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
					<img class="bordered media" src="/assets/images/cast/Model Latina s3/Carla-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Carla</h3>
						</div>
						<p>
							Age: 23<br />
							Hometown: Perrysburg, OH<br />
							Ethnicity: Mexican<br />
							Occupation: Flight attendant/freelance writer
						</p>
						<p>&ldquo;Me and my mom go out dancing at clubs together. She&rsquo;s hot!&rdquo;</p>
					</div>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Model Latina s3/JessicaS-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Jessica S.</h3>
						</div>
						<p>
							Age: 20<br />
							Hometown: Tampa, FL.<br />
							Ethnicity: Puerto Rican<br />
							Occupation: Model
						</p>
						<p>&ldquo;I like to hang out at the Hard Rock Caf&eacute; with my uncle and my dad. My dad&rsquo;s 40 and 6&rsquo;7&rdquo; and my uncle&rsquo;s 28 and 6&rsquo;4&rdquo; so people just stare at us.&rdquo;</p>
					</div>
				</li>
			</ul>
			<a class="sub-page-more" href="/series/model-latina-nyc/cast">See the entire cast +</a>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="social block">
			<h2>Find Model Latina on</h2>
			<ul class="inline">
				<li><a class="facebook" href="http://www.facebook.com/ModelLatina">facebook</a></li>
				<li><a class="twitter" href="http://twitter.com/modellatina">twitter</a></li>
				<li class="last"><a target="_blank" class="hulu" href="http://www.hulu.com/watch/266049/model-latina-model-mayhem#x-0,vepisode,1,0">hulu</a></li>
			</ul>			
		</div>
		<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/ModelLatina" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
		<div class="photos block">
			<h2>Photos</h2>
			<div class="col">
				<img class="bordered" src="/assets/images/galleries/_ModelLatina_NYC/_thmbs/thmb_1.jpg" />
				<img class="bordered" src="/assets/images/galleries/_ModelLatina_NYC/_thmbs/thmb_2.jpg" />
			</div>
			<div class="last col">
				<img class="bordered" src="/assets/images/galleries/_ModelLatina_NYC/_thmbs/thmb_3.jpg" />
				<img class="bordered" src="/assets/images/galleries/_ModelLatina_NYC/_thmbs/thmb_4.jpg" />
			</div>
			<a class="sub-page-more" href="/series/$seriesBase/photos">See all photos +</a>
		</div>
	</div>
EOCONTENT;

?>
