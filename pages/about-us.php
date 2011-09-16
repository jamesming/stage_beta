<?
	$page->title = "About Us | nuvoTV Official Site";
	$page->template = "standard";
	$page->bodyClasses[] = "layout-mb";
		
	$page->components["hero"] = <<<EOHERO
	<div class="title">
		<img src="/assets/images/titles/about-us.png" alt="About Us" />
	</div>
EOHERO;

	$page->components["content"] = <<<EOCONTENT
	<div class="main white-box">
		<h2>Vibrant. Bold. Driven.</h2>
		<p>"nuvo" is formed by the fusion of "NUevo" and "VOice", reflecting the dual cultural pillars of today's American Bi-Cultural Latinos. nuvoTV serves the Bi-Cultural Latino audience with culturally-relevant entertainment that speaks to our viewers in their language of choice&ndash; English! With our unique lineup, all shot in HD, nuvoTV is truly a new television network for America's Nu Voice. </p>
		<p>Online, mynuvoTV.com offers an engaging interactive experience for our unique programming. </p>
		<p>nuvoTV also connects with Bi-cultural Latinos across multiple platforms with VOD, mobile and interactive tablet apps.</p>
	</div>
	<div class="sidebar-right">
<!--
		<img class="bordered block" src="http://placehold.it/298x198" />
		<img class="bordered block" src="http://placehold.it/298x198" />
-->		
	</div>
EOCONTENT;

?>