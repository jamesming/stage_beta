<?
	$page->title = "Mission Menu | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-s2mb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div  class="controls" style="height: 171px;left: 388px;top: 65px;width: 568px;background:transparent url(/assets/images/heroes/series/txt-SP-MISSIONMENU.png) no-repeat 0 0; ">
		<a href="http://www.facebook.com/pages/Mission-Menu/124750807626746" style="left:235px; top:52px; width:247px; height:73px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "mission-menu";
	$schedule = getSchedule("model-latina-nyc");
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="active first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			 <li><a href="/series/$seriesBase/video">Video</a></li>
			<li class="last"><a href="/series/$seriesBase/episodes">Episodes</a></li>
			<!--<li><a href="/series/$seriesBase/features">Features</a></li>  -->
			<!--<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>  -->
			<li class="season-nav">
				<span>Season:</span>
				<ul class="inline">
					<li class="active"><a href="/series/mission-menu">1</a></li>

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
			<p>The greatest executive chefs in the world are not masters of just one cuisine - they are ambassadors of food.   Whether the fare is French, Thai or a fusion of the two, master chefs employ their experience, tastes and talents to combine flavors and ingredients to create culinary artistry.   Because of this rare expertise, restaurant owners of all varieties turn to these superstar chefs to overhaul their menus and save their failing restaurants.</p>
		</div>
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
	<div class="featured white-box block">
	 <!--
			<h2>BeChicMag: 3 Latinas Rising in Fashion</h2>
			<img class="bordered media" src="/assets/images/featured/thumbs/screen_shot_2011-05-24_at_10.50.01_am_138x138.jpg" />
			<div class="copy">
				<p>Our fashion-obsessed friend, Mercedes Sanchez of BeChicMag.com, recently profiled three Latinas making a name for themselves in fashion. Representing Peru, Puerto Rico, and Cuba, these up-and-coming designers have seen their creations on everyone from Chloe Sevigny to Beyonce, and our very own Model Latinas!</p>
				<p><a href="/series/mission-menu/features" class="no-break">Read More +</a></p>
			</div>
		  -->	

		
		<!--
		<div class="discussion white-box block">
			<h2>Discussion</h2>
			<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:comments href="{$page->fullURL}" num_posts="4" width="420"></fb:comments>
		</div> 
	  -->	
		<div class="cast padded-box block">
			<h2>Meet the Cast</h2>
			<ul class="unstyled">
				<li class="first block">
					<img class="bordered media" src="/assets/images/cast/Mission-Menu/Guiseppe_148x148.jpg" />
					<div class="copy">
						<h3>Giuseppe "G" </h3>
						<p>Every day the Brooklyn-born chef known as "G" meets with frustrated restaurateurs who are in dire need of a new menu.  However, G is more than a businessman:  a graduate of the Culinary Institute of America, G is an expert chef who excels in putting new spins on any cuisine.</p>
					</div>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Mission-Menu/Ricardo_148x148.jpg" />
					<div class="copy">
						<h3>Ricardo</h3>
						
						<p>With a larger-than-life personality and penchant for doing things his own way, Ricardo often causes friction with other team members.  No one can argue with his unbelievable cooking skills though!  An award-winning chef, Ricardo is an expert at creating dishes as bold as his fiery temper.</p>
					</div>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Mission-Menu/Diane_148x148.jpg" />
					<div class="copy">
						<h3>Diane</h3>
						
						<p>Her motto is: "I can out-cook most, and fear nothing."  From raising livestock on her family's ranch, to owning her own condiment company, Diane has built a culinary career that includes opening her own espresso bar and bakery while in college to working at many top restaurants as one of the few female Executive Chefs.  Sparks fly when this fearless Korean-Persian female chef gets in front of the stove.</p>
					</div>
				</li>				
				

			</ul>
			<a class="sub-page-more" href="/series/mission-menu/cast">See the entire cast +</a>
		</div>
			</div>
	</div>
	<div class="sidebar-right" >
		<div class="ad ad-box block"></div>
		<div class="social block">
			<h2>Find Mission Menu on</h2>
			<ul class="inline">
				<li><a class="facebook" href="http://www.facebook.com/pages/Mission-Menu/124750807626746">facebook</a></li>
				<li><a class="twitter" href="http://twitter.com/MissionMenu">twitter</a></li>
				<!-- <li class="last"><a target="_blank" class="hulu" href="http://www.hulu.com/watch/266049/model-latina-model-mayhem#x-0,vepisode,1,0">hulu</a></li> -->
			</ul>			
		</div>
		<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/pages/Mission-Menu/124750807626746" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
		<!--
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
		</div>  -->
	</div>
EOCONTENT;

?>
