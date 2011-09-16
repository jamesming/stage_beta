<?
	$page->title = "Miami Ink - Features | nuvoTV Official Site";
	
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_MiamiInk.png) no-repeat 0 0; left:409px; top:96px; width:463px; height:111px;">
	</div>
EOHERO;


	$seriesBase = "miami-ink";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li class="active"><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="white-box block">
			<h2>Five Things to Consider Before You Get a Tattoo</h2>
			<img class="bordered media" src="/assets/images/featured/Miami-Ink-Features_458x248.jpg" />
			<p>When Miami Ink premiered it revolutionized TV by bringing tattoo art to the mainstream and giving audiences the story behind the tat. But before you go out and get your own work of body art, consider these five things. </p>
			<ol>
				<li><strong>Don't be impulsive like I was.</strong> You've heard it a bazillion times. Tattoos are forever, so really think about what you want, and if you're still going to like it when you're old and wrinkled. My Chinese character for "Woman" was cute for about a year. Now, I'm scheming on ways to cover it up. </li>
				<li><strong>Go to a professional.</strong> I learned this the hard way when I went to some random tattoo shop in Sydney, Australia and the tattoo artist inked my fish a little too deep. The result? Scar tissue.  Lesson learned: Do your research!</li>
				<li><strong>Get something meaningful.</strong> I'm not talking about the person you're dating (see #5), but something that's been a constant source of inspiration for the majority of your life. The tribal armband, for example, was a trend that faded fast. Not that inspiring. </li>
				<li><strong>Take care of it.</strong> Choosing a reputable tattoo artist is only part of the process. Even the best tattoo can be ruined by poor aftercare. Guidelines vary from artist to artist, but these are essential: 1. Leave the bandage on until your skin has healed. 2. Soak the bandage with warm water when removing it, so it doesn't stick to the tattoo. 3. Apply just enough ointment so your tattoo can still breathe, then switch to a lotion. 4. Don't scratch or peel off the flakes of skin! 5. Keep the tattoo away from as much water as possible and avoid sun exposure for the first few months. </li>
				<li><strong>No names!</strong> Yes, it's tempting to get the love of your life engraved in your flesh, but there are plenty of other ways to express your devotion. Henna is one of them. </li>
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