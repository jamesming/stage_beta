<?
	$page->title = "Curvy Girls - Features | nuvoTV Official Site";
	
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">
		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/CURVYgirls_SP.png) no-repeat 0 0; left:464px; top:150px; width:684px; height:138px;">
	</div>
EOHERO;


	$seriesBase = "curvygirls";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li class="active last" ><a href="/series/$seriesBase/features">Features</a></li>
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
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="white-box block">
			<h2>10

Life Lessons We Learned From <i>Curvy Girls</i></h2>
			<img class="bordered media" src="/assets/images/featured/curvygirls_features_458x248.jpg" />




<p><span>Beneath all the delicious drama, glam photo shoots and hot

Hollywood scenarios that make <i>Curvy Girls</i>

so much fun to watch are quite a few invaluable life lessons. Check out what we

uncovered after checking out nuvoTV's special preview...</span></p>



<ol >

 <li><span>In the

     competitive world of modeling, the common congratulatory phrase "Good, I'm

     happy for her" really means, "I hope she breaks a %$#@ heel on the

     runway!"</span></li>

 <li><span>Finally!<i> Curvy Girls</i> answers an age-old

     question: Is "skinny bitch" a compliment or an insult?</span></li>

 <li><span>Fergie had it

     right, big girls don't cry. They claw! And often after getting

     name-dropped in a frenemy's juicy gossip. Watch what you say and who you

     say it too -- especially when gossip the most popular form of communication

     in the modeling world! </span></li>

 <li><span>Being

     inspired by strong, single, young Latina women who barely break a sweat

     while juggling successful careers and raising families never gets old.</span></li>

 <li><span>The old adage

     that "thin is in" should be retired. The full-figured <i>Curvy Girls</i> get all the perks expected of any supermodel: racy

     romances with sexy guys, lunches at L.A.'s best hot spots, and stopping

     traffic in the middle of Manhattan.</span></li>

 <li><span>If you run

     into a frenemy at an audition and she tells you that "You look great!"

     she's really thinking, "Please! Like you stand a chance."<span>  </span></span></li>

 <li><span>A lot more

     hard work than we expected goes into maintaining a campaign-winning body

     in the world of plus-size modeling. Boxing?! Who knew?</span></li>

 <li><span>Even

     beautiful working models struggle with insecurity. Sure, the billboards

     and magazine covers help, but as the ladies of <i>Curvy Girls</i> reveal, determination sparks confidence.</span></li>

 <li><span>It is

     possible to find Prince Charming through Internet dating, but you may have

     to kiss a few funky frogs in the cyber swamp first.</span></li>

 <li><span>Self-confidence,

     a sexy sense of humor, Latin pride and putting family first are enviable

     attributes that always trump physical beauty.</span></li>

</ol>



<p>

		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<!--<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/Pastport" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>-->
	</div>
EOCONTENT;

?>