<?
	$page->title = "Mission Menu- Cast | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
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
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li class="active"><a href="/series/$seriesBase/cast">Cast</a></li>
			 <li><a href="/series/$seriesBase/video">Video</a></li>
			<li ><a href="/series/$seriesBase/episodes">Episodes
			<li  class="last"><a href="/series/$seriesBase/features">Features</a></li> 
			<!--<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>  -->
			<li class="season-nav">
				<span>Season:</span>
				<ul class="inline">
					<li class='active'><a href="/series/mission-menu">1</a></li>

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
					<img class="bordered media" src="/assets/images/cast/Mission-Menu/Guiseppe_148x148.jpg" />
					<div class="meta">
						<h3>Giuseppe "G" </h3>
					</div>
					<p>Every day the Brooklyn-born chef known as "G" meets with frustrated restaurateurs who are in dire need of a new menu.  However, G is more than a businessman:  a graduate of the Culinary Institute of America, G is an expert chef who excels in putting new spins on any cuisine.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Mission-Menu/Ricardo_148x148.jpg" />
					<div class="meta">
						<h3>Ricardo</h3>
					</div>
					<p>With a larger-than-life personality and penchant for doing things his own way, Ricardo often causes friction with other team members.  No one can argue with his unbelievable cooking skills though!  An award-winning chef, Ricardo is an expert at creating dishes as bold as his fiery temper.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Mission-Menu/Diane_148x148.jpg" />
					<div class="meta">
						<h3>Diane</h3>
					</div>
					<p>Her motto is: "I can out-cook most, and fear nothing."  From raising livestock on her family's ranch, to owning her own condiment company, Diane has built a culinary career that includes opening her own espresso bar and bakery while in college to working at many top restaurants as one of the few female Executive Chefs.  Sparks fly when this fearless Korean-Persian female chef gets in front of the stove.</p>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/Mission-Menu/Meat_148x148.jpg" />
					<div class="meta">
						<h3>Meat</h3>
					</div>
					<p>Growing up in New Haven, CT, 'Meat' developed a keen sense of "taste" and a "hunger" for success.  Though new to cooking, Meat aspires to become a chef and does his best to help out in every way.   Unfortunately, Meat's pea-sized brain and inability to stop tasting the dishes leaves doubt as to his ever becoming an executive chef.</p>
				</li>
				
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/Mission-Menu/Yenny_148x148.jpg" />
					<div class="meta">
						<h3>Yenny Love</h3>
					</div>
					<p>Yenny relates cooking to her childhood and culture. She remembers being eight years old and being with her grandmother in the kitchen where "magic happens" she says. "I remember all the cuentos (stories) that my abuelita (grandmother) would tell me while she was cooking and at the same time she would teach me the ingredients and flavors that go with each dish."  Cooking is major part of her life and she seeks to share it with the world!</p>
				</li>				
			</ul>

		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/pages/Mission-Menu/124750807626746" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
	</div>
EOCONTENT;

?>