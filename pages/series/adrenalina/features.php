<?
	$page->title = "Adrenalina - Features | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
<style>
	.section-adrenalina .theme div { background: transparent url(/assets/images/heroes/series/_bg_Adrenalina.jpg) no-repeat; }
	.stripe { background: transparent url(/assets/images/stripe_army2.png) no-repeat center top; position: relative; z-index: 2; -webkit-background-size: 2000px 1354px; }
</style>
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_Adrenalina.png) no-repeat 0 0; left:407px; top:70px; width:419px; height:112px;">
	</div>
EOHERO;


	$seriesBase = "adrenalina";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/episodes">Episodes</a></li>
			<li class="active"><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="white-box block">
			<h2>Pablo & Zalman Ring in the Money</h2>
			<img class="bordered media" src="/assets/images/featured/adrenalina_nasdaq.jpg" />
			<p>Pablo and Zalman were invited to ring the closing bell at the world's largest exchange company, <a target="_blank" href="http://www.nasdaq.com/marketsite/marketsite-events-detail.aspx?fn=201107-close07292011.txt">NASDAQ</a>, in honor of Adrenalina's <a target="_blank" href="http://www.facebook.com/pages/USA-Distance-Skateboard-Association/177796802238234#!/adrenalinashow">NYC Skateboard Marathon</a>. Not bad for two dudes who live for life's biggest thrills.</p>
			<p>The 26.2-mile race is the first of its kind to promote health and fitness and brought together the city's most hardcore longboard skaters. Governor's Island was the first stop on its four-city tour, which includes stops in San Juan, Puerto Rico; Plano, Texas; and Hallandale Beach, Fla.</p>
			<p>But it wasn't just a race for fitness, endurance, and action sports around Governors Island's waterfront promenade. The winner, <a target="_blank" href="http://espn.go.com/espn/page2/story/_/id/6823582/jeff-vyain-wins-new-york-skateboard-marathon">Jeff Vyain</a> aka "The Wiggler," scored $15,000! The 27-year-old speedster from Indianapolis, who now lives in Brooklyn, finished first in 1:31:40. Paul Kent followed 29 seconds later and won $5,000. Fellow Brooklynite Camille "The Beast" Best, 22, took home $3,000 for being the first woman to finish.</p>
			<p>"I got two and a half hours of sleep last night," Vyain told ESPN. "I was fired up, yeah, but my roommate was moving out. It was horrible."</p>
			<p>Vyain said he's going to shop around for sensory deprivation chambers with his prize money. Now if only we knew what that means.</p>
			<img class="bordered media" src="/assets/images/featured/adrenalina_timessquare.jpg" />
		</div>
		
		<!-- OLD BLOG
		
		<div class="white-box block">
			<h2>New Book Sheds Light on Latinos in Sports</h2>
			<img class="bordered media" src="/assets/images/featured/latinosinsports.jpg" style="margin-left: 125px;" />
			<p>I caught up with Cuban-born Texas Tech University professor <a href="http://www.ttu.edu/profiles/profile.php?id=13">Jorge Iber, PhD</a>, who cowrote <em>Latinos in <a href="http:// http://www.humankinetics.com/products/all-products/Latinos-in-US-Sport">US Sport: A History of Isolation, Cultural Identity, and Acceptance</a> </em>with fellow academics Dr. Arnoldo De Leon, Dr. Samuel O. Regalado, and Dr. Jose Alamillo, to talk about the huge role Latinos from  barrios across the country played in sports.</p>
			<p><strong>What inspired you to write a book about Latinos and sports? </strong>I've always been a sports lover&mdash;my dad turned me into a baseball junkie and fanatic from an early age. A colleague in the history department told me about a man named Bobby Cavazos, who was an All-American at TTU back in 1954. When I started doing research, I realized there were more success stories like his that needed to be included in history books about American sports and Latino studies.<br />
			&nbsp;<br />
			<strong>Who was the first Latino to break into professional sports?</strong>&nbsp; First, is a Cuban named Esteban Bellan who, while a student at Rose Hill College in New York in the late 1860s, played briefly for the Troy Haymakers (a team that played in the American Association, which at that time identified as major league). The second is Vincent Nava, a Mexican American born in San Francisco in 1850 who played &ldquo;professionally&rdquo; (for pay) in California between 1876 and 1881. He then went on to play for the Providence Grays of the National League until 1887.<br />
			&nbsp;<strong><br />
			How were Latino athletes discriminated against in the past?</strong> The key issue was the color of their skin. Many of the early <em>jugadores</em> came from Cuba and teams in professional baseball always tried to reassure fans that these individuals were &ldquo;of Castillian blood,&rdquo; and not mulatto. As a result, not all of the Latinos who came to the US to play ball in the early 1900s played in the Majors or &ldquo;organized baseball,&rdquo; and many wound up in the Negro Leagues.&nbsp; By the 1920s, some academicians argued that Latinos did not possess the intelligence or disposition to be able to compete in team sports at a very high level.&nbsp; <br />
			<strong>&nbsp;<br />
			How have things changed since then? </strong>Obviously, it's gotten better. Latinos/as now occupy important positions on the field and as coaches, GMs and even owners of teams in American sports. There are still many issues to deal with. For example, many sons and daughters of recent immigrants can't participate in athletics due to their families&rsquo; economic circumstances.<br />
			&nbsp;<br />
			<strong>What are 5 things people probably didn't know before reading your book?</strong>&nbsp;</p>
			<p>1. Latinos have participated and done well in high school athletics since the very early 1900s in places such as Florida, Texas and California.</p>
			<p>2. Latinos established soccer leagues in New York City as early as the 1920s.</p>
			<p>3. A Puerto Rican named Juan &ldquo;Pachin&rdquo; Vincens was named one of the top five players at the Pan American Games in Chicago in 1959, along with legends Jerry West and Oscar Robertson.</p>
			<p>4. Mexican American Joe Salas became the first US-born Latino to earn a medal for boxing at the 1924 Olympics.</p>
			<p>5. Cuban American Carlos Alvarez aka  &ldquo;Cuban Comet&rdquo; was an All-SEC wide receiver for the Florida Gators in 1969 and still holds the record for most receiving yards by a Gator wideout.<br />
			&nbsp;</p>

		</div> -->
		
		<!-- OLD BLOG
		
		<div class="white-box block">
			<h2>Got Skateboard Art Skills?</h2>
			<img class="bordered media" src="/assets/images/featured/am-Features_458x248.jpg" />
			<p><em>Adrenalina</em> is awarding a whopping <strong>$10,000</strong> to the first prize winner of the <a href="http://www.adrenalinaskateboardmarathon.com/news/adrenalina-to-award-10000-for-art-contest/">Adrenalina Skateboard Marathon Art Contest</a><span style="font-weight: bold;">.</span></p>
			<p>Here's how to enter:</p>
			<p>1. Email <strong>skate@board-up.net </strong>for submission instructions</p>
			<p>2. Design a skateboard with the template provided when you email.</p>
			<p>3. Submit* your original artwork by <strong>July 15, 2011</strong>.</p>
			<p>Runner-ups get:</p>
			<p>2nd place: <strong>$2,000</strong></p>
			<p>3rd place: <strong>$1,000 </strong></p>
			<p>*One submission per participant. The top 3 will be flown to NYC and awarded their prize on Governor&rsquo;s Island.</p>
			<p><img class="bordered" height="250" width="300" alt="" src="/assets/images/featured/AdrenalinaArtContest.jpg" /></p>

		</div> -->
		
		
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/adrenalinashow" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
	</div>
EOCONTENT;

?>