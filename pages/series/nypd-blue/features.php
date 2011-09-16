<?
	$page->title = "NYPD Blue - Features | nuvoTV Official Site";
	
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_NYPDBlue.png) no-repeat 0 0; left:495px; top:183px; width:328px; height:49px;">
	</div>
EOHERO;


	$seriesBase = "nypd-blue";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li class="last active"><a href="/series/$seriesBase/features">Features</a></li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="white-box block">
			<h2>NYPD Blue: Five Best Moments</h2>
			<img class="bordered media" src="/assets/images/featured/nypdblue-Features_458x248.jpg" />
			<p>We break down five great moments in the history of one of the most intense police dramas ever.</p>
			<ol>
				<li><strong>4-B Gets Killed:</strong> Before he was Ross on Friends, David Schwimmer played Josh "4-B" Goldstein, a nerdy lawyer, on NYPD Blue. 4-B lived in Laura Kelly's apartment building, where he was mugged in the laundry room. This led to a string of bad luck, including his eventual death after attempting to break up a mugging on the subway and consequently being shot.</li>
				<li><strong>These Boots Are Made For Dying:</strong> Jill Kirkendall rarely got her own storylines&ndash;and when she did they were usually awful&ndash;but there was this one scene that showed off her quirky side. She and Diane arrived at a crime scene where a man in S&M bondage had been hung to death. As they walked off the scene, Jill turned to Diane and said, "Slap me for saying those boots look kind of cool." Genius.</li>
				<li><strong>Duke of Earl:</strong> Simone, who is on cloud nine after having sex for the first time since his wife died, blasts the car radio on a stakeout and starts singing along to "Duke of Earl." At first, his partner Andy got annoyed, but eventually joined in on the chorus. He clammed up when two night shift cops pulled up to relieve them. Priceless. </li>
				<li><strong>Voodoo Child:</strong> Baldwin, Andy and Danny were working on a case involving two missing Russian children and the chief suspect was their father, a raving lunatic. Andy convinced Baldwin to play into the guy's deranged fantasies by making himself look even bigger than usual. When the man boasted about protecting his children from these devils, Baldwin leaned in and said, "Give them to me." The suspect caved in and admitted to killing his kids.</li>
				<li><strong>Detective Martinez:</strong> James Martinez's shining moment was at the close of his first solo case as a detective. The perpetrator was a condescending jerk that insisted on calling him Pedro, and finally James explained that they'd get a conviction and tougher sentence without a statement. "When you get a chance, write me a letter. Tell me what your cellmate's like. Tell me what it feels like to have a subway right up your ass. And my name's James, you little pisspot." </li>
			</ol>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/nuvoTV" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
	</div>
EOCONTENT;

?>