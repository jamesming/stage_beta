<?
	$page->title = "Dark Angel - Features | nuvoTV Official Site";
	
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt-SP-DARKANGEL.png) no-repeat 0 0; width: 527px; height: 186px; top: 75px; left: 485px;">
		<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174" style="left:158px; top:107px; width:228px; height:74px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "dark-angel";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/episodes">Episodes</a></li>
			<li class="last active"><a href="/series/$seriesBase/features">Features</a></li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="white-box block">
			<h2>Who's the Hottest Prison Break Character?</h2>
			<img class="bordered media" src="/assets/images/featured/prison-break-guys--Features_458x248.jpg" />
			<p>You all know the story&mdash;an innocent man is sentenced to death, and his only hope is his brother, who deliberately gets himself sent to the same prison in order to break them both out&mdash;but did you know<em> Prison Break</em> was initially turned down by FOX, then ended up being so successful it ran for an extra nine episodes its first season? The award-winning show, which inspired mobile spin-off series, video games, magazines, and novels, also created sex symbols for its gazillion fans. We asked you to tell us who the hottest <em>Prison Break</em> character is, and here are some of the funniest answers we got.</p>
			<p>&quot;Lincoln Burrows is a close tie with Michael Scofield's mysterious sexiness. But Lincoln with the suit and shades waa....wooww!&quot;&nbsp;&mdash;ButterflyEffect2011</p>
			<p>&quot;Sucre then Micheal. His intellegence is amazing. Love him.&quot; &mdash;Stacy</p>
			<p>&quot;T-Bag is the best! =D&quot;&nbsp;&mdash;Anonymous</p>
			<p>&quot;Eww! Someone actually said T-Bag?! MICHAEL all day long. Mmm..he is sexy!&quot; &mdash;Chrissy</p>
			<p>&quot;Wentworth Miller is by far the hottest man I have ever seen in my life. I could get lost in his eyes. I have to say he is the sexiest man alive and I totally love him. Wentworth is also a very good actor. I think he is very talented. With that being said, I think the whole cast of <em>Prison Break</em> is very talented and they are all very good actors. I love the show, but I want to rewrite the ending becasue it made me cry.&quot; &mdash;Stephanie</p>
			<p>&quot;Amaury Nolasco. He could be my Sucre any time!&quot; &mdash;Farias</p>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
	</div>
EOCONTENT;

?>