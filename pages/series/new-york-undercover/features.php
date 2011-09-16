<?
	$page->title = "New York Undercover - Features | nuvoTV Official Site";
	
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_NYUndercover.png) no-repeat 0 0; left:395px; top:206px; width:643px; height:44px;">
	</div>
EOHERO;


	$seriesBase = "new-york-undercover";
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
			<h2>Why Everyone Loves New York Undercover</h2>
			<img class="bordered media" src="/assets/images/featured/NY-undercover_Features_458x248.jpg" />
			<p>Drugs, robbery, corruption, rape, murder. That's not all New York Undercover was loved for. We asked our Facebook fans why its still one of the favorite shows. Check out their answers below.</p>
			<p>"The music was ahead of its time." &mdash;Erika </p>
			<p>Fun Fact: New York Undercover was infamous for its montage opening that introduced the crime being investigated, and featured the best in hip-hop and R&B. It's no surprise James Mtume was New York Undercover's music director. His group, Mtume, is behind the super sampled jam "Juicy Fruit." The show featured appearances by Aaliyah, Erykah Badu, The Temptations, Gladys Knight, Boyz II Men, Mary J. Blige, The Notorious B.I.G., Bone Thugs-N-Harmony, Tito Puente, Celia Cruz, and many more. Wow!</p>
			<p>"I watch this show every day. It's really good. The characters are so iconic and original!" &mdash;Warren</p>
			<p>"It has such a diverse cast. It was nice to see people who looked like me on TV." &mdash; Nati </p>
			<p>Fun Fact: The show was the first American police drama on television to feature two people of color in starring roles. New York Undercover was one of the highest rated shows among African-American and Latino viewers. </p>
			<p>"I watch this show twice a day. I grew up on it. My sis was in love with Michael DeLorenzo and I had a thing for Malik Yoba. This show brings back a lot of good memories!" &mdash;treniceobie</p>
			<p>"That was the %^$#! I remember watchin' it an seein' the same strip club in Times Square, where me and my dad spent all our cash. Couldn't even get on the E train to South Queens. LOL." &mdash;Charles</p>
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




