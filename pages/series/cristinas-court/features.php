<?
	$page->title = "Cristina's Court - Features | nuvoTV Official Site";
	
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background: transparent url(/assets/images/heroes/series/txt_ChristinaCourt.png) no-repeat 0 0; left:325px; top:72px; width:495px; height:110px;">
	</div>
EOHERO;


	$seriesBase = "cristinas-court";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li class="active last"><a href="/series/$seriesBase/features">Features</a></li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="white-box block">
			<h2>Cristina's Court: From the Courtroom to Publishing</h2>
			<img class="bordered media" src="/assets/images/featured/CristinasCourt-Features_458x248.jpg" />
			<p>Find out what the queen of courtroom TV crossover is venturing into now.</p>
			<p>When <a href="http://www.cristinaperez.tv/" target="_blank">Cristina P&eacute;rez</a> first stepped onto the scene, it was the first time a TV judge ever crossed over from Spanish- to English-language television. P&eacute;rez started out doing courtroom shows on Telemundo, which was the first time Spanish television ever saw such a thing, and eventually went on to win three Emmy Awards for her well-received courtroom drama, Cristina's Court. The show made a name for the Colombian American judge, who's just as passionate about family as she is fairness, and plaintiffs and defendants felt comfortable airing their dirty laundry in front of her. </p>
			<p>Riding the wave of fame that Cristina's Court brought, P&eacute;rez just published her second book, It's All About the Woman Who Wears It: 10 Laws for Being Smart, Successful, and Sexy Too. In it, she shares 10 secrets to being true to number one while always looking fly. P&eacute;rez, whose resume includes successful lawyer, radio host, entrepreneur, columnist, and mother and wife, uses the same recipe in her books as she does on her show: humor and compassion. Like her debut book, Living By Los Dichos: Advice from a Mother to a Daughter, 10 Laws is an intimate account of the women in her life who've helped her become the fierce and sexy lady she is today. "Be smart and speak up" are words P&eacute;rez lives by. </p>			
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


