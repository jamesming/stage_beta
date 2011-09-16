<?
	$page->title = "Model Latina NYC - Features | nuvoTV Official Site";
	
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt-SP-MISSIONMENU.png) no-repeat 0 0; left:411px; top:84px; width:568px; height:171px;">
		<a href="http://www.facebook.com/ModelLatina" style="left:235px; top:92px; width:247px; height:73px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "model-latina-nyc";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			 <li><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/episodes">Episodes</a></li>
			<li class="active"><a href="/series/$seriesBase/features">Features</a></li>
			<!--<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>  -->
			<li class="season-nav">
				<span>Season:</span>
				<ul class="inline">
					<li class='active'><a href="/series/model-latina-la">1</a></li>
					<li><a href="/series/model-latina-miami">2</a></li>
					<li class="active"><a href="/series/model-latina-nyc">3</a></li>
					<li><a href="/model-latina-las-vegas/">4</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="white-box block">
			<h2>BeChicMag: 3 Latinas Rising in Fashion</h2>
			<img class="bordered media" src="/assets/images/featured/screen_shot_2011-05-24_at_10.50.01_amFeatures_458x248.jpg" />
			<p>Our fashion-obsessed friend, <a href="http://bechicmag.com/magazine/who-we-are/">Mercedes Sanchez</a> of <a href="http://bechicmag.com">BeChicMag.com</a>, recently profiled three Latinas making a name for themselves in fashion. Representing Peru, Puerto Rico, and Cuba, these up-and-coming designers have seen their creations on everyone from Chloe Sevigny to Beyonce, and our very own Model Latinas!</p>
			<p><strong>Shumaq:</strong> Peruvian sisters Vanessa and Jacqueline Barrantes started <a href="http://www.shumaq.com">Shumaq</a> (which means beautiful in Quechua, the indigenous language of Peru) four years ago. The eco-friendly and socially responsible line employs women artisans in Peru to make everything by hand. Shumaq designs have graced numerous runways, and have been featured in <a href="http://couturecandy.com/images/shumaq/lucky-june.jpg"><em>Lucky</em></a>,&nbsp;<a href="http://fashion.teenvogue.com/2011/04/its-kayla"><em>Teen Vogue</em></a> and <em>Elle</em>, and adorned boutiques across the globe. Their <a href="http://shumaq.com/Products-Ivory_Chloe_Lace_Dress.html">ivory lace dress</a> made fashion blog fame when Chloe Sevigny was spotted wearing it.&nbsp;</p>
			<p><img height="301" width="299" src="/sites/default/files/editor-uploads/Screen shot 2011-05-24 at 12_07_14 PM.png" alt="" /></p>
			<p><strong>Erika Pena:</strong> Born in San Juan, Puerto Rico and raised in Fort Myers, Florida, Dominicana <a href="http://erikapena.com/">Erika Pena</a> is a self-taught jewelry designer who creates edgy and timeless pieces. &ldquo;A chic woman is a person who owns her style with sophistication,&quot; Pena told <a href="http://bechicmag.com/magazine/category/fashion-blogger/">BeChicMag</a>. &quot;Either you&rsquo;re born with it or you&rsquo;re not.&quot;</p>
			<p><img src="/sites/default/files/editor-uploads/erika-pena.jpg" alt="" style="width: 295px; height: 274px;" /></p>
			<p><strong>Fabiola Arias:</strong> Havana-born designer Fabiola Arias launched her cocktail and evening wear line, <a href="http://www.fabiolaarias.com/">Fabiola Arias Collection</a>, in 2008 while still a senior at NYC's Parsons School of Design. &ldquo;Being a smart Latina means that you are confident with yourself and follow and create your own journey,&rdquo; Arias told <a href="http://bechicmag.com/magazine/category/fashion-blogger/">BeChicMag</a>.</p>
			<p><img src="/sites/default/files/editor-uploads/Screen shot 2011-05-24 at 12_10_17 PM.png" style="width: 360px; height: 256px;" alt="" /></p>
			<p>Follow BeChicMag on <a href="http://www.facebook.com/BeChicMagazine">Facebook</a> and <a href="http://www.twitter.com/BeChicMag">Twitter</a>.</p>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/ModelLatina" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
	</div>
EOCONTENT;

?>