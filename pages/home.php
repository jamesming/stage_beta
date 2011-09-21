<?
	
//	$page->title = "";
//	$page->description = "";
//	$page->keywords = "";
	
$now = time();

$aug31 = strtotime("August 31, 2011 8:00am");

$sep1 = strtotime("September 1, 2011 8:00am");

$sep2 = strtotime("September 2, 2011 8:00am");

$sep3 = strtotime("September 3, 2011 8:00am");

$sep4 = strtotime("September 4, 2011 8:00am");

$sep5 = strtotime("September 5, 2011 8:00am");

$sep6 = strtotime("September 6, 2011 8:00am");

$sep7 = strtotime("September 7, 2011 8:00am");

$sep8 = strtotime("September 8, 2011 8:00am");

$sep9 = strtotime("September 9, 2011 8:00am");

$sep10 = strtotime("September 10, 2011 8:00am");

$sep11 = strtotime("September 11, 2011 8:00am");

$sep12 = strtotime("September 12, 2011 8:00am");

$sep13 = strtotime("September 13, 2011 8:00am");

$sep14 = strtotime("September 14, 2011 8:00am");

$sep15 = strtotime("September 15, 2011 8:00am");

$sep16 = strtotime("September 16, 2011 8:00am");

$sep17 = strtotime("September 17, 2011 8:00am");

$sep18 = strtotime("September 18, 2011 8:00am");

$sep19 = strtotime("September 19, 2011 8:00am");

$sep20 = strtotime("September 20, 2011 8:00am");

$sep21 = strtotime("September 21, 2011 8:00am");

$sep22 = strtotime("September 22, 2011 8:00am");

$sep23 = strtotime("September 23, 2011 8:00am");

$sep24 = strtotime("September 24, 2011 8:00am");

$sep25 = strtotime("September 25, 2011 8:00am");

$sep26 = strtotime("September 26, 2011 8:00am");

$sep27 = strtotime("September 27, 2011 8:00am");

$sep28 = strtotime("September 28, 2011 8:00am");

$sep29 = strtotime("September 29, 2011 8:00am");

$sep30 = strtotime("September 30, 2011 8:00am");

$oct1 = strtotime("October 1, 2011 8:00am");

$oct2 = strtotime("October 2, 2011 8:00am");

if($_GET[aug31]) {
	$now = strtotime("August 31, 2011 8:01am");
}

if($_GET[sep1]) {
	$now = strtotime("September 1, 2011 8:01am");
}

if($_GET[sep2]) {
	$now = strtotime("September 2, 2011 8:01am");
}

if($_GET[sep3]) {
	$now = strtotime("September 3, 2011 8:01am");
}

if($_GET[sep4]) {
	$now = strtotime("September 4, 2011 8:01am");
}

if($_GET[sep5]) {
	$now = strtotime("September 5, 2011 8:01am");
}

if($_GET[sep6]) {
	$now = strtotime("September 6, 2011 8:01am");
}

if($_GET[sep7]) {
	$now = strtotime("September 7, 2011 8:01am");
}

if($_GET[sep8]) {
	$now = strtotime("September 8, 2011 8:01am");
}

if($_GET[sep9]) {
	$now = strtotime("September 9, 2011 8:01am");
}

if($_GET[sep10]) {
	$now = strtotime("September 10, 2011 8:01am");
}

if($_GET[sep11]) {
	$now = strtotime("September 11, 2011 8:01am");
}

if($_GET[sep12]) {
	$now = strtotime("September 12, 2011 8:01am");
}

if($_GET[sep13]) {
	$now = strtotime("September 13, 2011 8:01am");
}

if($_GET[sep14]) {
	$now = strtotime("September 14, 2011 8:01am");
}

if($_GET[sep15]) {
	$now = strtotime("September 15, 2011 8:01am");
}

if($_GET[sep16]) {
	$now = strtotime("September 16, 2011 8:01am");
}

if($_GET[sep17]) {
	$now = strtotime("September 17, 2011 8:01am");
}

if($_GET[sep18]) {
	$now = strtotime("September 18, 2011 8:01am");
}

if($_GET[sep19]) {
	$now = strtotime("September 19, 2011 8:01am");
}

if($_GET[sep20]) {
	$now = strtotime("September 20, 2011 8:01am");
}

if($_GET[sep21]) {
	$now = strtotime("September 21, 2011 8:01am");
}

if($_GET[sep22]) {
	$now = strtotime("September 22, 2011 8:01am");
}

if($_GET[sep23]) {
	$now = strtotime("September 23, 2011 8:01am");
}

if($_GET[sep24]) {
	$now = strtotime("September 24, 2011 8:01am");
}

if($_GET[sep25]) {
	$now = strtotime("September 25, 2011 8:01am");
}

if($_GET[sep26]) {
	$now = strtotime("September 26, 2011 8:01am");
}

if($_GET[sep27]) {
	$now = strtotime("September 27, 2011 8:01am");
}

if($_GET[sep28]) {
	$now = strtotime("September 28, 2011 8:01am");
}

if($_GET[sep29]) {
	$now = strtotime("September 29, 2011 8:01am");
}

if($_GET[sep30]) {
	$now = strtotime("September 30, 2011 8:01am");
}

if($_GET[oct1]) {
	$now = strtotime("October 1, 2011 8:01am");
}

if($_GET[oct2]) {
	$now = strtotime("October 2, 2011 8:01am");
}


if($now < $aug31) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin9.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MLLV10_HP.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMI-INK_b.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-OSMIN9.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-darkAngel.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-MLLV10.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-MIAMI-INK_b.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin5.png) no-repeat 0 0; left:-4px; top:282px; width:669px; height:161px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-THURSDAYS-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV-2.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk_6pm.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		
				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a href="/series/dark-angel" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_DarkAngel.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Jessica Alba Now on nuvoTV!</h3>
						<p>The sexy actress plays a genetically-enhanced superhuman in James Cameron's sci-fi series Thursdays at 9/8c on nuvoTV. <a href="/series/dark-angel" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV10.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 9/8c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/operation-osmin" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_OSMIN10.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tonight on Operation Osmin: Christian</h3>
						<p>Will Osmin's over-the-top antics (including a visit from "Lil Osmin") get this former athlete back on the field? Find out tonight at 9/8c. <a href="/operation-osmin" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?videos=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4_VCR_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Live Videos of the Models!</h3>
						<p>Want to know what the models do when not impressing the judges? Get behind-the-scenes coverage in Model Latina's Video Control Room. <a href="/model-latina-las-vegas/?videos=1" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/spotlight-DarkAngel-thumb.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-MLLV10-thumb.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-OSMIN10-thumb.png);"><a href="#" title="Operation Osmin">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/ML4_vcr_spotlight-thumb_75x40.png);"><a href="#" title="Model LAtina Videos">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="495" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: 'mynuvotv OR operationosmin OR modellatina',
				  interval: 3000,
				  width: 370,
				  height: 495,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $sep1) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MLLV10_HP.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_Osmin10.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMI-INK_b.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-MLLV10.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-OSMIN10.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-MIAMI-INK_b.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV-2.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-THURSDAYS-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin6.png) no-repeat 0 0; left:-4px; top:190px; width:669px; height:161px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk_6pm.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		
				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a href="/operation-osmin" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_adam_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Osmin Vs. Sir Eats-a-Lot</h3>
						<p>Osmin's next recruit is a personal chef to athletes who believes you should never trust a skinny chef. Is this logic weighing him down? Osmin thinks so. Watch him put the overeater through the ringer Tuesday at 9/8c. <a href="/operation-osmin" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV10.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/dark-angel" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_DarkAngel.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Jessica Alba Now on nuvoTV!</h3>
						<p>The sexy actress plays a genetically-enhanced superhuman in James Cameron's sci-fi series Thursdays at 9/8c on nuvoTV. <a href="/series/dark-angel" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?videos=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4_VCR_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Live Coverage of the Models!</h3>
						<p>Want to know what the models do when not impressing the judges? Get behind-the-scenes coverage in Model Latina's Video Control Room. <a href="/model-latina-las-vegas/?videos=1" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/Osmin_adam_thumb_75x40.png);"><a href="#" title="Operation Osmin">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-MLLV10-thumb.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-DarkAngel-thumb.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/ML4_vcr_spotlight-thumb_75x40.png);"><a href="#" title="Model LAtina Videos">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="495" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: 'mynuvotv OR operationosmin OR modellatina',
				  interval: 3000,
				  width: 370,
				  height: 495,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $sep2) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MLLV10_HP.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMI-INK_b.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_Osmin10.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MLLV10.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-MIAMI-INK_b.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-OSMIN10.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-TONIGHT-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV-2.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk_6pm.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin6.png) no-repeat 0 0; left:-4px; top:190px; width:669px; height:161px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>
		</li>
				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a href="/operation-osmin" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_adam_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Osmin Vs. Sir Eats-a-Lot</h3>
						<p>Osmin's next recruit is a personal chef to athletes who believes you should never trust a skinny chef. Is this logic weighing him down? Osmin thinks so. Watch him put the overeater through the ringer Tuesday at 9/8c. <a href="/operation-osmin" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV10.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/dark-angel" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_DarkAngel.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Jessica Alba Now on nuvoTV!</h3>
						<p>The sexy actress plays a genetically-enhanced superhuman in James Cameron's sci-fi series Thursdays at 9/8c on nuvoTV. <a href="/series/dark-angel" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?videos=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4_VCR_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Live Coverage of the Models!</h3>
						<p>Want to know what the models do when not impressing the judges? Get behind-the-scenes coverage in Model Latina's Video Control Room. <a href="/model-latina-las-vegas/?videos=1" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/Osmin_adam_thumb_75x40.png);"><a href="#" title="Operation Osmin">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-MLLV10-thumb.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-DarkAngel-thumb.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/ML4_vcr_spotlight-thumb_75x40.png);"><a href="#" title="Model LAtina Videos">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="550" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: 'mynuvotv OR operationosmin OR modellatina',
				  interval: 3000,
				  width: 370,
				  height: 495,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $sep3) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MLLV10_HP.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_Osmin10.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMI-INK_b.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-MLLV10.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-OSMIN10.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-MIAMI-INK_b.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV-2.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-THURSDAYS-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin_allNewTues.png) no-repeat 0 0;  width: 669px; height: 161px; left: 10px; top: 270px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk_6pm.png) no-repeat 0 0; width: 637px; height: 182px; left: 206px; top: 274px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="width: 217px; height: 72px; z-index: 2; left: 124px; top: 84px;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a href="/operation-osmin" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_adam_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Osmin Vs. Sir Eats-a-Lot</h3>
						<p>Osmin's next recruit is a personal chef to athletes who believes you should never trust a skinny chef. Is this logic weighing him down? Osmin thinks so. Watch him put the overeater through the ringer Tuesday at 9/8c. <a href="/operation-osmin" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV10.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/dark-angel" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_DarkAngel.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Jessica Alba Now on nuvoTV!</h3>
						<p>The sexy actress plays a genetically-enhanced superhuman in James Cameron's sci-fi series Thursdays at 9/8c on nuvoTV. <a href="/series/dark-angel" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?videos=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4_VCR_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Live Coverage of the Models - NU VIDEOS ADDED!</h3>
						<p>Want to know what the models do when not impressing the judges? Get behind-the-scenes coverage in Model Latina's Video Control Room. <a href="/model-latina-las-vegas/?videos=1" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/Osmin_adam_thumb_75x40.png);"><a href="#" title="Operation Osmin">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-MLLV10-thumb.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-DarkAngel-thumb.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/ML4_vcr_spotlight-thumb_75x40.png);"><a href="#" title="Model LAtina Videos">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="560" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: 'mynuvotv OR operationosmin OR modellatina',
				  interval: 3000,
				  width: 370,
				  height: 505,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $sep4) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg_luminarias.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_Osmin10.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MLLV10_HP.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-Luminarias.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-OSMIN10.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-MLLV10.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Luminarias_Tonight.png) no-repeat 0 0; width: 669px; height: 161px; left: 255px; top: 280px;">
				<a href="" style="left:309px; top:91px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/movies/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/movies/">base link</a>
			</div>
			<a class="full-link" href="/movies/">base link</a>
						
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin_MegaMarathon.png) no-repeat 0 0;  width: 669px; height: 250px; left: 100px; top: 200px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:175px; top:135px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV-2.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-THURSDAYS-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>
		</li>	
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a href="/operation-osmin" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_adam_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Osmin Vs. Sir Eats-a-Lot</h3>
						<p>Osmin's next recruit is a personal chef to athletes who believes you should never trust a skinny chef. Is this logic weighing him down? Osmin thinks so. Watch him put the overeater through the ringer Tuesday at 9/8c. <a href="/operation-osmin" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV10.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/dark-angel" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_DarkAngel.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Jessica Alba Now on nuvoTV!</h3>
						<p>The sexy actress plays a genetically-enhanced superhuman in James Cameron's sci-fi series Thursdays at 9/8c on nuvoTV. <a href="/series/dark-angel" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?videos=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4_VCR_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Live Coverage of the Models - NU VIDEOS ADDED!</h3>
						<p>Want to know what the models do when not impressing the judges? Get behind-the-scenes coverage in Model Latina's Video Control Room. <a href="/model-latina-las-vegas/?videos=1" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/Osmin_adam_thumb_75x40.png);"><a href="#" title="Operation Osmin">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-MLLV10-thumb.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-DarkAngel-thumb.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/ML4_vcr_spotlight-thumb_75x40.png);"><a href="#" title="Model LAtina Videos">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="560" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: 'mynuvotv OR operationosmin OR modellatina',
				  interval: 3000,
				  width: 370,
				  height: 505,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $sep5) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg_TortillaSoup.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_Osmin10.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MLLV10_HP.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-TortillaSoup.jpg);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-OSMIN10.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-MLLV10.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-TortillaSoup.png) no-repeat 0 0; width: 669px; height: 161px; left: 150px; top: 300px;">
				<a href="" style="left:309px; top:91px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/movies/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/movies/">base link</a>
			</div>
			<a class="full-link" href="/movies/">base link</a>
						
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin_MegaMarathon.png) no-repeat 0 0;  width: 669px; height: 250px; left: 100px; top: 200px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:175px; top:135px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV-2.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-THURSDAYS-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>
		</li>	
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a href="/operation-osmin" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_adam_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Osmin Vs. Sir Eats-a-Lot</h3>
						<p>Osmin's next recruit is a personal chef to athletes who believes you should never trust a skinny chef. Is this logic weighing him down? Osmin thinks so. Watch him put the overeater through the ringer Tuesday at 9/8c. <a href="/operation-osmin" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV10.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/dark-angel" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_DarkAngel.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Jessica Alba Now on nuvoTV!</h3>
						<p>The sexy actress plays a genetically-enhanced superhuman in James Cameron's sci-fi series Thursdays at 9/8c on nuvoTV. <a href="/series/dark-angel" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?videos=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4_VCR_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Live Coverage of the Models - NU VIDEOS ADDED!</h3>
						<p>Want to know what the models do when not impressing the judges? Get behind-the-scenes coverage in Model Latina's Video Control Room. <a href="/model-latina-las-vegas/?videos=1" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/Osmin_adam_thumb_75x40.png);"><a href="#" title="Operation Osmin">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-MLLV10-thumb.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-DarkAngel-thumb.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/ML4_vcr_spotlight-thumb_75x40.png);"><a href="#" title="Model LAtina Videos">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="560" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: 'mynuvotv OR operationosmin OR modellatina',
				  interval: 3000,
				  width: 370,
				  height: 505,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $sep6) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_Osmin10.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MLLV10_HP.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMI-INK_b.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-OSMIN10.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MLLV10.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-MIAMI-INK_b.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin_MegaMarathon.png) no-repeat 0 0;  width: 669px; height: 250px; left: 100px; top: 200px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:175px; top:135px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV-3.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-THURSDAYS-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk_6pm.png) no-repeat 0 0; width: 637px; height: 182px; left: 206px; top: 274px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="width: 217px; height: 72px; z-index: 2; left: 124px; top: 84px;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a href="/operation-osmin" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_adam_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Osmin Vs. Sir Eats-a-Lot</h3>
						<p>Osmin's next recruit is a personal chef to athletes who believes you should never trust a skinny chef. Is this logic weighing him down? Osmin thinks so. Watch him put the overeater through the ringer Tuesday at 9/8c. <a href="/operation-osmin" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV10.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_C_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Tonight at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/dark-angel" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_DarkAngel.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Jessica Alba Now on nuvoTV!</h3>
						<p>The sexy actress plays a genetically-enhanced superhuman in James Cameron's sci-fi series Thursdays at 9/8c on nuvoTV. <a href="/series/dark-angel" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?videos=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4_VCR_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Live Coverage of the Models - NU VIDEOS ADDED!</h3>
						<p>Want to know what the models do when not impressing the judges? Get behind-the-scenes coverage in Model Latina's Video Control Room. <a href="/model-latina-las-vegas/?videos=1" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/Osmin_adam_thumb_75x40.png);"><a href="#" title="Operation Osmin">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-MLLV10-thumb.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-DarkAngel-thumb.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/ML4_vcr_spotlight-thumb_75x40.png);"><a href="#" title="Model LAtina Videos">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="560" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: '@nuvoTVPastport OR @nuvoTVLatino101 OR #MLVegas OR #TeamOsmin OR \"-RealMadrid\" OR \"-pope\" OR \"-James_Phelps\" OR \"-AirCanada\" OR \"-rocketboxx\" OR \"-paulocoelho\"',
				  interval: 6000,
				  width: 370,
				  height: 505,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $sep7) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_Osmin10.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MLLV10_HP.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMI-INK_b.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-OSMIN10.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-MLLV10.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-MIAMI-INK_b.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-OSMIN_allNew_Tonight.png) no-repeat 0 0;  width: 669px; height: 161px; left: 75px; top: 270px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:200px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-THURSDAYS-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV_mondays.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk_6pm.png) no-repeat 0 0; width: 637px; height: 182px; left: 206px; top: 274px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="width: 217px; height: 72px; z-index: 2; left: 124px; top: 84px;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a href="/operation-osmin" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_adam_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Osmin Vs. Sir Eats-a-Lot</h3>
						<p>Osmin's next recruit is a personal chef to athletes who believes you should never trust a skinny chef. Is this logic weighing him down? Osmin thinks so. Watch him put the overeater through the ringer Tonight at 9/8c. <a href="/operation-osmin" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV10.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/dark-angel" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_DarkAngel.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Jessica Alba Now on nuvoTV!</h3>
						<p>The sexy actress plays a genetically-enhanced superhuman in James Cameron's sci-fi series Thursdays at 9/8c on nuvoTV. <a href="/series/dark-angel" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?videos=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4_VCR_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Live Coverage of the Models - NU VIDEOS ADDED!</h3>
						<p>Want to know what the models do when not impressing the judges? Get behind-the-scenes coverage in Model Latina's Video Control Room. <a href="/model-latina-las-vegas/?videos=1" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/Osmin_adam_thumb_75x40.png);"><a href="#" title="Operation Osmin">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-MLLV10-thumb.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-DarkAngel-thumb.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/ML4_vcr_spotlight-thumb_75x40.png);"><a href="#" title="Model LAtina Videos">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="560" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: 'mynuvotv OR operationosmin OR modellatina',
				  interval: 3000,
				  width: 370,
				  height: 505,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $sep8) {


$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg_NYPDblue.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_MLLV11.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMI-INK_b.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-NYPDblue.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MLLV11.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-MIAMI-INK_b.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-NYPDBlue1.png) no-repeat 0 0;  width: 669px; height: 161px; left: 325px; top: 325px;">
				<a href="/series/nypd-blue" style="left:300px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/nypd-blue">base link</a>
			</div>
			<a class="full-link" href="/series/nypd-blue">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV_mondays.png) no-repeat 0 0; left:3px; top:275px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>	
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-THURSDAYS-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>		
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk_6pm.png) no-repeat 0 0; width: 637px; height: 182px; left: 206px; top: 274px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="width: 217px; height: 72px; z-index: 2; left: 124px; top: 84px;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a target="_blank" href="http://www.cafepress.com/mynuvotv" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_CafePress.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Your nuvoTV Swag On!</h3>
						<p>Want to rock an Osmin-inspired T-shirt? Check out our nuvoTV online store for funny "Fich, Sala, Wada" tees and other Osminism paraphernalia. <a target="_blank" href="http://www.cafepress.com/mynuvotv" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV11.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/nu-stuff" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_Ringtones.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Download Nu Beats For Your Phone!</h3>
						<p>In desperate need of a new ringtone? Check out all the nuvoTV tunes available for download now. <a href="/nu-stuff" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/dark-angel" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_DarkAngel.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Jessica Alba Now on nuvoTV!</h3>
						<p>The sexy actress plays a genetically-enhanced superhuman in James Cameron's sci-fi series Thursdays at 9/8c on nuvoTV. <a href="/series/dark-angel" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a target="_blank" href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/spotlight-thumb_CafePress.png);"><a href="#" title="Nu Store">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-thumb_MLLV11.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/spotlight-thumb_RINGTONE.png);"><a href="#" title="Nu Stuff">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-DarkAngel-thumb.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="560" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: 'mynuvotv OR operationosmin OR modellatina OR \"-fucking\" OR \"-fuck\" OR \"-RealMadrid\" OR \"-pope\" OR \"-James_Phelps\"',
				  interval: 3000,
				  width: 370,
				  height: 505,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $sep9) {


$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_MLLV11.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMIINK_v3.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_CristinaCourt.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MLLV11.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-MIAMIINKv3.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-CristinaCourt.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-TONIGHT-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV_mondays.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MIAMIINK_tonight6pm.png) no-repeat 0 0; width: 637px; height: 182px; left: 206px; top: 274px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="width: 217px; height: 72px; z-index: 2; left: 124px; top: 84px;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_CristinaCourt2.png) no-repeat 0 0; left:150px; top:275px; width:669px; height:161px;">
				<a href="/series/cristinas-court" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/cristinas-court">base link</a>
			</div>
			<a class="full-link" href="/series/cristinas-court">base link</a>
		</li>
				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a target="_blank" href="http://www.cafepress.com/mynuvotv" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_CafePress.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Your nuvoTV Swag On!</h3>
						<p>Want to rock an Osmin-inspired T-shirt? Check out our nuvoTV online store for funny "Fich, Sala, Wada" tees and other Osminism paraphernalia. <a target="_blank" href="http://www.cafepress.com/mynuvotv" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV11.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/nu-stuff" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_Ringtones.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Download Nu Beats For Your Phone!</h3>
						<p>In desperate need of a new ringtone? Check out all the nuvoTV tunes available for download now. <a href="/nu-stuff" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/misc/referafriend.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV-T-shirts.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to Rock a Super Cool Model Latina T-Shirt?</h3>
						<p>Of course you do! Share this video with your friends and we'll send you a FREE limited edition Model Latina T-shirt.  <a href="/misc/referafriend.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a target="_blank" href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/spotlight-thumb_CafePress.png);"><a href="#" title="Nu Store">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-thumb_MLLV11.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/spotlight-thumb_RINGTONE.png);"><a href="#" title="Nu Stuff">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/t-shirt-thumb_75x40.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="560" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: 'mynuvotv OR operationosmin OR ModelLatina OR \"-fucking\" OR \"-fuck\" OR \"-RealMadrid\" OR \"-pope\" OR \"-James_Phelps\"',
				  interval: 3000,
				  width: 370,
				  height: 505,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $sep10) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg_Latino101.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_MLLV11.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMIINK_v3.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-Latino101.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MLLV11.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-MIAMIINKv3.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-LATINO101-midnight.png) no-repeat 0 0; width: 637px; height: 182px; left: 275px; top: 274px;">
				<a href="http://www.facebook.com/Latino101" style="width: 217px; height: 72px; z-index: 2; left: 124px; top: 84px;">facebook</a>
				<a href="/series/latino-101-s2" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/latino-101-s2">base link</a>			
			</div>
			<a class="full-link" href="/series/latino-101-s2">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV_mondays.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MIAMIINK_tonight6pm.png) no-repeat 0 0; width: 637px; height: 182px; left: 206px; top: 274px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="width: 217px; height: 72px; z-index: 2; left: 124px; top: 84px;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>		
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-THURSDAYS-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>	
		</li>				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a target="_blank" href="http://www.cafepress.com/mynuvotv" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_CafePress.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Your nuvoTV Swag On!</h3>
						<p>Want to rock an Osmin-inspired T-shirt? Check out our nuvoTV online store for funny "Fich, Sala, Wada" tees and other Osminism paraphernalia. <a target="_blank" href="http://www.cafepress.com/mynuvotv" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV11.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/nu-stuff" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_Ringtones.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Download Nu Beats For Your Phone!</h3>
						<p>In desperate need of a new ringtone? Check out all the nuvoTV tunes available for download now. <a href="/nu-stuff" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/misc/referafriend.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV-T-shirts.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to Rock a Super Cool Model Latina T-Shirt?</h3>
						<p>Of course you do! Share this video with your friends and we'll send you a FREE limited edition Model Latina T-shirt.  <a href="/misc/referafriend.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a target="_blank" href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/spotlight-thumb_CafePress.png);"><a href="#" title="Nu Store">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-thumb_MLLV11.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/spotlight-thumb_RINGTONE.png);"><a href="#" title="Nu Stuff">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/t-shirt-thumb_75x40.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="560" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: 'mynuvotv OR operationosmin OR modellatina',
				  interval: 3000,
				  width: 370,
				  height: 505,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $sep11) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg_TortillaSoup.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_MLLV11.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_hp_PP-PuertoRico.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-TortillaSoup.jpg);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MLLV11.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-PP-PuertoRico.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-TortillaSoup.png) no-repeat 0 0; width: 669px; height: 161px; left: 150px; top: 300px;">
				<a href="" style="left:309px; top:91px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/movies/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/movies/">base link</a>
			</div>
			<a class="full-link" href="/movies/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV_mondays.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-PP-Puerto-Rico.png) no-repeat 0 0; left:25px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/Pastport" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/series/pastport-puerto-rico">base link</a>			
			</div>
			<a class="full-link" href="/series/pastport-puerto-rico">base link</a>		
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-THURSDAYS-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>	
		</li>				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a target="_blank" href="http://www.cafepress.com/mynuvotv" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_CafePress.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Your nuvoTV Swag On!</h3>
						<p>Want to rock an Osmin-inspired T-shirt? Check out our nuvoTV online store for funny "Fich, Sala, Wada" tees and other Osminism paraphernalia. <a target="_blank" href="http://www.cafepress.com/mynuvotv" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV11.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/nu-stuff" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_Ringtones.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Download Nu Beats For Your Phone!</h3>
						<p>In desperate need of a new ringtone? Check out all the nuvoTV tunes available for download now. <a href="/nu-stuff" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/misc/referafriend.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV-T-shirts.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to Rock a Super Cool Model Latina T-Shirt?</h3>
						<p>Of course you do! Share this video with your friends and we'll send you a FREE limited edition Model Latina T-shirt.  <a href="/misc/referafriend.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a target="_blank" href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/spotlight-thumb_CafePress.png);"><a href="#" title="Nu Store">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-thumb_MLLV11.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/spotlight-thumb_RINGTONE.png);"><a href="#" title="Nu Stuff">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/t-shirt-thumb_75x40.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="560" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: 'mynuvotv OR operationosmin OR modellatina',
				  interval: 3000,
				  width: 370,
				  height: 505,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $sep12) {


$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg_raising-victor-vargas.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_MLLV11.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_hp_PP-PuertoRico.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-raising-victor-vargas.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MLLV11.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-PP-PuertoRico.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_raising-victor-vargas.png) no-repeat 0 0; width: 669px; height: 161px; left: 50px; top: 300px;">
				<a href="" style="left:309px; top:91px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/movies/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/movies/">base link</a>
			</div>
			<a class="full-link" href="/movies/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV_mondays.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-PP-Puerto-Rico.png) no-repeat 0 0; left:25px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/Pastport" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/series/pastport-puerto-rico">base link</a>			
			</div>
			<a class="full-link" href="/series/pastport-puerto-rico">base link</a>		
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-THURSDAYS-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>	
		</li>				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				
				<li>
					<div   style='
						float:left;
						width:242px;
						height:222px;
						'  >
<object id="flashObj" width="265" height="240" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,47,0"><param name="movie" value="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&isUI=1" /><param name="bgcolor" value="#FFFFFF" /><param name="flashVars" value="playerID=884193777001&playerKey=AQ~~,AAAAADEdZAY~,VHcBVNPqDVsvlyIdQ7G_llmK8TV98S-v&domain=embed&dynamicStreaming=true" /><param name="base" value="http://admin.brightcove.com" /><param name="seamlesstabbing" value="false" /><param name="allowFullScreen" value="true" /><param name="swLiveConnect" value="true" /><param name="allowScriptAccess" value="always" /><embed src="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&isUI=1" bgcolor="#FFFFFF" flashVars="playerID=884193777001&playerKey=AQ~~,AAAAADEdZAY~,VHcBVNPqDVsvlyIdQ7G_llmK8TV98S-v&domain=embed&dynamicStreaming=true" base="http://admin.brightcove.com" name="flashObj" width="242" height="222" seamlesstabbing="false" type="application/x-shockwave-flash" allowFullScreen="true" allowScriptAccess="always" swLiveConnect="true" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed></object>
						
					</div>
					<div class="copy">
						<h2>Video Player</h2>
						<h3>Bright Cove</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
					</div>
				</li>
				
				
				<li>
					<a target="_blank" href="http://www.cafepress.com/mynuvotv" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_CafePress.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Your nuvoTV Swag On!</h3>
						<p>Want to rock an Osmin-inspired T-shirt? Check out our nuvoTV online store for funny "Fich, Sala, Wada" tees and other Osminism paraphernalia. <a target="_blank" href="http://www.cafepress.com/mynuvotv" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV11.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/nu-stuff" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_Ringtones.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Download Nu Beats For Your Phone!</h3>
						<p>In desperate need of a new ringtone? Check out all the nuvoTV tunes available for download now. <a href="/nu-stuff" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/misc/referafriend.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV-T-shirts.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to Rock a Super Cool Model Latina T-Shirt?</h3>
						<p>Of course you do! Share this video with your friends and we'll send you a FREE limited edition Model Latina T-shirt.  <a href="/misc/referafriend.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a target="_blank" href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="
					
					    background-position: 10px 5px;
    background-repeat: no-repeat;
					background-image:url(/assets/images/spotlight/camera.png);"><a href="#" title="Bright Cove">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-thumb_CafePress.png);"><a href="#" title="Nu Store">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-thumb_MLLV11.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/spotlight-thumb_RINGTONE.png);"><a href="#" title="Nu Stuff">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/t-shirt-thumb_75x40.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<a target='_blank' href='http://www.facebook.com/OperationOsmin'>
				<div class="facebook"  >
					
					<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="560" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
					
				</div>
			</a>
			<a target='_blank' href='http://twitter.com/#!/mynuvoTV'>
				<div class="twitter">
					<script src="http://widgets.twimg.com/j/2/widget.js"></script>
					<script>
					new TWTR.Widget({
					  version: 2,
					  type: 'search',
					  search: 'mynuvotv OR operationosmin OR modellatina',
					  interval: 3000,
					  width: 370,
					  height: 505,
					  theme: {
					    shell: {
					      background: '#ffffff',
					      color: '#1f1e1c'
					    },
					    tweets: {
					      background: '#ffffff',
					      color: '#1f1e1c',
					      links: '#c4122f'
					    }
					  },
					  features: {
					    scrollbar: true,
					    loop: true,
					    live: true,
					    hashtags: true,
					    timestamp: false,
					    avatars: true,
						toptweets: false,
					    behavior: 'default'
					  }
					}).render().start();
					</script>
				</div>
			</a>
		</div>
	</div>
EOCONTENT;

} else if($now < $sep13) {



$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MLLV10_HP.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMI-INK_b.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_Osmin10.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MLLV10.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-MIAMI-INK_b.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-OSMIN10.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-TONIGHT-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV-2.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk_6pm.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin6.png) no-repeat 0 0; left:-4px; top:190px; width:669px; height:161px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>
		</li>
				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a href="/operation-osmin" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_adam_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Osmin Vs. Sir Eats-a-Lot</h3>
						<p>Osmin's next recruit is a personal chef to athletes who believes you should never trust a skinny chef. Is this logic weighing him down? Osmin thinks so. Watch him put the overeater through the ringer Tuesday at 9/8c. <a href="/operation-osmin" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV10.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/dark-angel" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_DarkAngel.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Jessica Alba Now on nuvoTV!</h3>
						<p>The sexy actress plays a genetically-enhanced superhuman in James Cameron's sci-fi series Thursdays at 9/8c on nuvoTV. <a href="/series/dark-angel" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?videos=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4_VCR_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Live Coverage of the Models!</h3>
						<p>Want to know what the models do when not impressing the judges? Get behind-the-scenes coverage in Model Latina's Video Control Room. <a href="/model-latina-las-vegas/?videos=1" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/Osmin_adam_thumb_75x40.png);"><a href="#" title="Operation Osmin">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-MLLV10-thumb.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-DarkAngel-thumb.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/ML4_vcr_spotlight-thumb_75x40.png);"><a href="#" title="Model LAtina Videos">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="495" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: '@nuvoTVPastport OR @nuvoTVLatino101 OR #MLVegas OR #TeamOsmin OR \"-RealMadrid\" OR \"-pope\" OR \"-James_Phelps\"',
				  interval: 6000,
				  width: 370,
				  height: 495,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $sep15) {




$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg_raising-victor-vargas.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_MLLV11.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_hp_PP-PuertoRico.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-raising-victor-vargas.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MLLV11.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-PP-PuertoRico.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_raising-victor-vargas.png) no-repeat 0 0; width: 669px; height: 161px; left: 50px; top: 300px;">
				<a href="" style="left:309px; top:91px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/movies/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/movies/">base link</a>
			</div>
			<a class="full-link" href="/movies/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV_mondays.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-PP-Puerto-Rico.png) no-repeat 0 0; left:25px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/Pastport" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/series/pastport-puerto-rico">base link</a>			
			</div>
			<a class="full-link" href="/series/pastport-puerto-rico">base link</a>		
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-THURSDAYS-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>	
		</li>				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				
				<li  id='video_player_li'>
					<div  id='video_player_div'  style='
						float:left;
						width:242px;
						height:222px;
						'  >


								<!-- Start of Brightcove Player -->
								
								<div style="display:none">
								
								</div>
								
								<!--
								By use of this code snippet, I agree to the Brightcove Publisher T and C 
								found at https://accounts.brightcove.com/en/terms-and-conditions/. 
								-->
								
								<script language="JavaScript" type="text/javascript" src="http://admin.brightcove.com/js/BrightcoveExperiences.js"></script>
								
								<object id="myExperience" class="BrightcoveExperience">
								  <param name="wmode" value="transparent" />
								  <param name="width" value="242" />
								  <param name="height" value="422" />
								  <param name="playerID" value="1154506721001" />
								  <param name="playerKey" value="AQ~~,AAAAADEdZAY~,VHcBVNPqDVshrDLVr-FIOiEabfcn5IxW" />
								  <param name="isVid" value="true" />
								  <param name="isUI" value="true" />
								  <param name="dynamicStreaming" value="true" />
								  
								</object>
								
								<!-- 
								This script tag will cause the Brightcove Players defined above it to be created as soon
								as the line is read by the browser. If you wish to have the player instantiated only after
								the rest of the HTML is processed and the page load is complete, remove the line.
								-->
								<script type="text/javascript">
								//	brightcove.createExperiences();
								</script>
								
								<!-- End of Brightcove Player -->



					</div>
					<div class="copy">
						<h2>What's NU This Week</h2>
						<h3>Models! Discovery! Tattoos! @$$ Kicking!</h3>
						<p>From the glitz & glamour of Model Latina Las Vegas to the dark & futuristic world of James Cameron's Dark Angel, we've got the hottest lineup of shows to keep you glued to your set.  It's what's NU this week!</p>
					</div>
				</li>



				
				<li>
					<a target="_blank" href="http://www.cafepress.com/mynuvotv" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_CafePress.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Your nuvoTV Swag On!</h3>
						<p>Want to rock an Osmin-inspired T-shirt? Check out our nuvoTV online store for funny "Fich, Sala, Wada" tees and other Osminism paraphernalia. <a target="_blank" href="http://www.cafepress.com/mynuvotv" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV11.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/nu-stuff" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_Ringtones.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Download Nu Beats For Your Phone!</h3>
						<p>In desperate need of a new ringtone? Check out all the nuvoTV tunes available for download now. <a href="/nu-stuff" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/misc/referafriend.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV-T-shirts.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to Rock a Super Cool Model Latina T-Shirt?</h3>
						<p>Of course you do! Share this video with your friends and we'll send you a FREE limited edition Model Latina T-shirt.  <a href="/misc/referafriend.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a target="_blank" href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li id='video_player_link' style="
					background-position: 0px 0px;
					background-repeat: no-repeat;
					background-image:url(/assets/images/spotlight/spotlight-thumb_video.png);"><a href="#" title="Bright Cove">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-thumb_CafePress.png);"><a href="#" title="Nu Store">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-thumb_MLLV11.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/spotlight-thumb_RINGTONE.png);"><a href="#" title="Nu Stuff">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/t-shirt-thumb_75x40.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<a target='_blank' href='http://www.facebook.com/OperationOsmin'>
				<div class="facebook"  >
					
					<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="560" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
					
				</div>
			</a>
			<a target='_blank' href='http://twitter.com/#!/OperationOsmin'>
				<div class="twitter">
					<script src="http://widgets.twimg.com/j/2/widget.js"></script>
					<script>
					new TWTR.Widget({
					  version: 2,
					  type: 'search',
					  search: 'mynuvotv OR operationosmin OR modellatina',
					  interval: 3000,
					  width: 370,
					  height: 505,
					  theme: {
					    shell: {
					      background: '#ffffff',
					      color: '#1f1e1c'
					    },
					    tweets: {
					      background: '#ffffff',
					      color: '#1f1e1c',
					      links: '#c4122f'
					    }
					  },
					  features: {
					    scrollbar: true,
					    loop: true,
					    live: true,
					    hashtags: true,
					    timestamp: false,
					    avatars: true,
						toptweets: false,
					    behavior: 'default'
					  }
					}).render().start();
					</script>
				</div>
			</a>
		</div>
	</div>

	
EOCONTENT;

} else if($now < $sep14) {


$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MLLV10_HP.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMI-INK_b.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_Osmin10.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MLLV10.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-MIAMI-INK_b.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-OSMIN10.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-TONIGHT-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV-2.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk_6pm.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin6.png) no-repeat 0 0; left:-4px; top:190px; width:669px; height:161px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>
		</li>
				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a href="/operation-osmin" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_adam_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Osmin Vs. Sir Eats-a-Lot</h3>
						<p>Osmin's next recruit is a personal chef to athletes who believes you should never trust a skinny chef. Is this logic weighing him down? Osmin thinks so. Watch him put the overeater through the ringer Tuesday at 9/8c. <a href="/operation-osmin" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV10.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/dark-angel" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_DarkAngel.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Jessica Alba Now on nuvoTV!</h3>
						<p>The sexy actress plays a genetically-enhanced superhuman in James Cameron's sci-fi series Thursdays at 9/8c on nuvoTV. <a href="/series/dark-angel" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?videos=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4_VCR_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Live Coverage of the Models!</h3>
						<p>Want to know what the models do when not impressing the judges? Get behind-the-scenes coverage in Model Latina's Video Control Room. <a href="/model-latina-las-vegas/?videos=1" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/Osmin_adam_thumb_75x40.png);"><a href="#" title="Operation Osmin">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-MLLV10-thumb.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-DarkAngel-thumb.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/ML4_vcr_spotlight-thumb_75x40.png);"><a href="#" title="Model LAtina Videos">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="495" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: '@nuvoTVPastport OR @nuvoTVLatino101 OR #MLVegas OR #TeamOsmin OR \"-RealMadrid\" OR \"-pope\" OR \"-James_Phelps\"',
				  interval: 6000,
				  width: 370,
				  height: 495,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $sep16) {


$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MLLV10_HP.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMI-INK_b.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_Osmin10.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MLLV10.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-MIAMI-INK_b.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-OSMIN10.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-TONIGHT-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV-2.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk_6pm.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin6.png) no-repeat 0 0; left:-4px; top:190px; width:669px; height:161px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>
		</li>
				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a href="/operation-osmin" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_adam_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Osmin Vs. Sir Eats-a-Lot</h3>
						<p>Osmin's next recruit is a personal chef to athletes who believes you should never trust a skinny chef. Is this logic weighing him down? Osmin thinks so. Watch him put the overeater through the ringer Tuesday at 9/8c. <a href="/operation-osmin" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV10.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/dark-angel" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_DarkAngel.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Jessica Alba Now on nuvoTV!</h3>
						<p>The sexy actress plays a genetically-enhanced superhuman in James Cameron's sci-fi series Thursdays at 9/8c on nuvoTV. <a href="/series/dark-angel" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?videos=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4_VCR_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Live Coverage of the Models!</h3>
						<p>Want to know what the models do when not impressing the judges? Get behind-the-scenes coverage in Model Latina's Video Control Room. <a href="/model-latina-las-vegas/?videos=1" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/Osmin_adam_thumb_75x40.png);"><a href="#" title="Operation Osmin">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-MLLV10-thumb.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-DarkAngel-thumb.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/ML4_vcr_spotlight-thumb_75x40.png);"><a href="#" title="Model LAtina Videos">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="495" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: '@nuvoTVPastport OR @nuvoTVLatino101 OR #MLVegas OR #TeamOsmin OR \"-RealMadrid\" OR \"-pope\" OR \"-James_Phelps\"',
				  interval: 6000,
				  width: 370,
				  height: 495,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $sep17) {


$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MLLV10_HP.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMI-INK_b.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_Osmin10.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MLLV10.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-MIAMI-INK_b.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-OSMIN10.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-TONIGHT-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV-2.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk_6pm.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin6.png) no-repeat 0 0; left:-4px; top:190px; width:669px; height:161px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>
		</li>
				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a href="/operation-osmin" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_adam_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Osmin Vs. Sir Eats-a-Lot</h3>
						<p>Osmin's next recruit is a personal chef to athletes who believes you should never trust a skinny chef. Is this logic weighing him down? Osmin thinks so. Watch him put the overeater through the ringer Tuesday at 9/8c. <a href="/operation-osmin" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV10.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/dark-angel" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_DarkAngel.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Jessica Alba Now on nuvoTV!</h3>
						<p>The sexy actress plays a genetically-enhanced superhuman in James Cameron's sci-fi series Thursdays at 9/8c on nuvoTV. <a href="/series/dark-angel" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?videos=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4_VCR_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Live Coverage of the Models!</h3>
						<p>Want to know what the models do when not impressing the judges? Get behind-the-scenes coverage in Model Latina's Video Control Room. <a href="/model-latina-las-vegas/?videos=1" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/Osmin_adam_thumb_75x40.png);"><a href="#" title="Operation Osmin">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-MLLV10-thumb.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-DarkAngel-thumb.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/ML4_vcr_spotlight-thumb_75x40.png);"><a href="#" title="Model LAtina Videos">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="495" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: '@nuvoTVPastport OR @nuvoTVLatino101 OR #MLVegas OR #TeamOsmin OR \"-RealMadrid\" OR \"-pope\" OR \"-James_Phelps\"',
				  interval: 6000,
				  width: 370,
				  height: 495,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $sep18) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MLLV10_HP.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMI-INK_b.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_Osmin10.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MLLV10.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-MIAMI-INK_b.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-OSMIN10.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-TONIGHT-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV-2.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk_6pm.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin6.png) no-repeat 0 0; left:-4px; top:190px; width:669px; height:161px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>
		</li>
				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a href="/operation-osmin" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_adam_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Osmin Vs. Sir Eats-a-Lot</h3>
						<p>Osmin's next recruit is a personal chef to athletes who believes you should never trust a skinny chef. Is this logic weighing him down? Osmin thinks so. Watch him put the overeater through the ringer Tuesday at 9/8c. <a href="/operation-osmin" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV10.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/dark-angel" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_DarkAngel.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Jessica Alba Now on nuvoTV!</h3>
						<p>The sexy actress plays a genetically-enhanced superhuman in James Cameron's sci-fi series Thursdays at 9/8c on nuvoTV. <a href="/series/dark-angel" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?videos=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4_VCR_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Live Coverage of the Models!</h3>
						<p>Want to know what the models do when not impressing the judges? Get behind-the-scenes coverage in Model Latina's Video Control Room. <a href="/model-latina-las-vegas/?videos=1" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/Osmin_adam_thumb_75x40.png);"><a href="#" title="Operation Osmin">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-MLLV10-thumb.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-DarkAngel-thumb.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/ML4_vcr_spotlight-thumb_75x40.png);"><a href="#" title="Model LAtina Videos">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="495" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: '@nuvoTVPastport OR @nuvoTVLatino101 OR #MLVegas OR #TeamOsmin OR \"-RealMadrid\" OR \"-pope\" OR \"-James_Phelps\"',
				  interval: 6000,
				  width: 370,
				  height: 495,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $sep19) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MLLV10_HP.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMI-INK_b.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_Osmin10.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MLLV10.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-MIAMI-INK_b.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-OSMIN10.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-TONIGHT-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV-2.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk_6pm.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin6.png) no-repeat 0 0; left:-4px; top:190px; width:669px; height:161px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>
		</li>
				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a href="/operation-osmin" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_adam_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Osmin Vs. Sir Eats-a-Lot</h3>
						<p>Osmin's next recruit is a personal chef to athletes who believes you should never trust a skinny chef. Is this logic weighing him down? Osmin thinks so. Watch him put the overeater through the ringer Tuesday at 9/8c. <a href="/operation-osmin" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV10.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/dark-angel" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_DarkAngel.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Jessica Alba Now on nuvoTV!</h3>
						<p>The sexy actress plays a genetically-enhanced superhuman in James Cameron's sci-fi series Thursdays at 9/8c on nuvoTV. <a href="/series/dark-angel" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?videos=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4_VCR_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Live Coverage of the Models!</h3>
						<p>Want to know what the models do when not impressing the judges? Get behind-the-scenes coverage in Model Latina's Video Control Room. <a href="/model-latina-las-vegas/?videos=1" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/Osmin_adam_thumb_75x40.png);"><a href="#" title="Operation Osmin">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-MLLV10-thumb.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-DarkAngel-thumb.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/ML4_vcr_spotlight-thumb_75x40.png);"><a href="#" title="Model LAtina Videos">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="495" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: '@nuvoTVPastport OR @nuvoTVLatino101 OR #MLVegas OR #TeamOsmin OR \"-RealMadrid\" OR \"-pope\" OR \"-James_Phelps\"',
				  interval: 6000,
				  width: 370,
				  height: 495,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $sep20) {


$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MLLV10_HP.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMI-INK_b.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_Osmin10.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MLLV10.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-MIAMI-INK_b.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-OSMIN10.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-TONIGHT-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV-2.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk_6pm.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin6.png) no-repeat 0 0; left:-4px; top:190px; width:669px; height:161px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>
		</li>
				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a href="/operation-osmin" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_adam_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Osmin Vs. Sir Eats-a-Lot</h3>
						<p>Osmin's next recruit is a personal chef to athletes who believes you should never trust a skinny chef. Is this logic weighing him down? Osmin thinks so. Watch him put the overeater through the ringer Tuesday at 9/8c. <a href="/operation-osmin" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV10.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/dark-angel" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_DarkAngel.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Jessica Alba Now on nuvoTV!</h3>
						<p>The sexy actress plays a genetically-enhanced superhuman in James Cameron's sci-fi series Thursdays at 9/8c on nuvoTV. <a href="/series/dark-angel" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?videos=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4_VCR_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Live Coverage of the Models!</h3>
						<p>Want to know what the models do when not impressing the judges? Get behind-the-scenes coverage in Model Latina's Video Control Room. <a href="/model-latina-las-vegas/?videos=1" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/Osmin_adam_thumb_75x40.png);"><a href="#" title="Operation Osmin">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-MLLV10-thumb.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-DarkAngel-thumb.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/ML4_vcr_spotlight-thumb_75x40.png);"><a href="#" title="Model LAtina Videos">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="495" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: '@nuvoTVPastport OR @nuvoTVLatino101 OR #MLVegas OR #TeamOsmin OR \"-RealMadrid\" OR \"-pope\" OR \"-James_Phelps\"',
				  interval: 6000,
				  width: 370,
				  height: 495,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $sep21) {


$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MLLV10_HP.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMI-INK_b.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_Osmin10.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MLLV10.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-MIAMI-INK_b.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-OSMIN10.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-TONIGHT-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV-2.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk_6pm.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin6.png) no-repeat 0 0; left:-4px; top:190px; width:669px; height:161px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>
		</li>
				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a href="/operation-osmin" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_adam_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Osmin Vs. Sir Eats-a-Lot</h3>
						<p>Osmin's next recruit is a personal chef to athletes who believes you should never trust a skinny chef. Is this logic weighing him down? Osmin thinks so. Watch him put the overeater through the ringer Tuesday at 9/8c. <a href="/operation-osmin" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV10.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/dark-angel" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_DarkAngel.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Jessica Alba Now on nuvoTV!</h3>
						<p>The sexy actress plays a genetically-enhanced superhuman in James Cameron's sci-fi series Thursdays at 9/8c on nuvoTV. <a href="/series/dark-angel" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?videos=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4_VCR_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Live Coverage of the Models!</h3>
						<p>Want to know what the models do when not impressing the judges? Get behind-the-scenes coverage in Model Latina's Video Control Room. <a href="/model-latina-las-vegas/?videos=1" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/Osmin_adam_thumb_75x40.png);"><a href="#" title="Operation Osmin">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-MLLV10-thumb.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-DarkAngel-thumb.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/ML4_vcr_spotlight-thumb_75x40.png);"><a href="#" title="Model LAtina Videos">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="495" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: '@nuvoTVPastport OR @nuvoTVLatino101 OR #MLVegas OR #TeamOsmin OR \"-RealMadrid\" OR \"-pope\" OR \"-James_Phelps\"',
				  interval: 6000,
				  width: 370,
				  height: 495,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $sep22) {


$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MLLV10_HP.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMI-INK_b.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_Osmin10.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MLLV10.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-MIAMI-INK_b.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-OSMIN10.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-TONIGHT-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV-2.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk_6pm.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin6.png) no-repeat 0 0; left:-4px; top:190px; width:669px; height:161px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>
		</li>
				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a href="/operation-osmin" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_adam_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Osmin Vs. Sir Eats-a-Lot</h3>
						<p>Osmin's next recruit is a personal chef to athletes who believes you should never trust a skinny chef. Is this logic weighing him down? Osmin thinks so. Watch him put the overeater through the ringer Tuesday at 9/8c. <a href="/operation-osmin" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV10.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/dark-angel" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_DarkAngel.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Jessica Alba Now on nuvoTV!</h3>
						<p>The sexy actress plays a genetically-enhanced superhuman in James Cameron's sci-fi series Thursdays at 9/8c on nuvoTV. <a href="/series/dark-angel" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?videos=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4_VCR_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Live Coverage of the Models!</h3>
						<p>Want to know what the models do when not impressing the judges? Get behind-the-scenes coverage in Model Latina's Video Control Room. <a href="/model-latina-las-vegas/?videos=1" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/Osmin_adam_thumb_75x40.png);"><a href="#" title="Operation Osmin">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-MLLV10-thumb.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-DarkAngel-thumb.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/ML4_vcr_spotlight-thumb_75x40.png);"><a href="#" title="Model LAtina Videos">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="495" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: '@nuvoTVPastport OR @nuvoTVLatino101 OR #MLVegas OR #TeamOsmin OR \"-RealMadrid\" OR \"-pope\" OR \"-James_Phelps\"',
				  interval: 6000,
				  width: 370,
				  height: 495,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $sep23) {


$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MLLV10_HP.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMI-INK_b.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_Osmin10.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MLLV10.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-MIAMI-INK_b.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-OSMIN10.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-TONIGHT-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV-2.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk_6pm.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin6.png) no-repeat 0 0; left:-4px; top:190px; width:669px; height:161px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>
		</li>
				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a href="/operation-osmin" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_adam_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Osmin Vs. Sir Eats-a-Lot</h3>
						<p>Osmin's next recruit is a personal chef to athletes who believes you should never trust a skinny chef. Is this logic weighing him down? Osmin thinks so. Watch him put the overeater through the ringer Tuesday at 9/8c. <a href="/operation-osmin" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV10.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/dark-angel" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_DarkAngel.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Jessica Alba Now on nuvoTV!</h3>
						<p>The sexy actress plays a genetically-enhanced superhuman in James Cameron's sci-fi series Thursdays at 9/8c on nuvoTV. <a href="/series/dark-angel" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?videos=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4_VCR_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Live Coverage of the Models!</h3>
						<p>Want to know what the models do when not impressing the judges? Get behind-the-scenes coverage in Model Latina's Video Control Room. <a href="/model-latina-las-vegas/?videos=1" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/Osmin_adam_thumb_75x40.png);"><a href="#" title="Operation Osmin">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-MLLV10-thumb.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-DarkAngel-thumb.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/ML4_vcr_spotlight-thumb_75x40.png);"><a href="#" title="Model LAtina Videos">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="495" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: '@nuvoTVPastport OR @nuvoTVLatino101 OR #MLVegas OR #TeamOsmin OR \"-RealMadrid\" OR \"-pope\" OR \"-James_Phelps\"',
				  interval: 6000,
				  width: 370,
				  height: 495,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $sep24) {


$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MLLV10_HP.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMI-INK_b.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_Osmin10.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MLLV10.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-MIAMI-INK_b.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-OSMIN10.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-TONIGHT-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV-2.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk_6pm.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin6.png) no-repeat 0 0; left:-4px; top:190px; width:669px; height:161px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>
		</li>
				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a href="/operation-osmin" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_adam_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Osmin Vs. Sir Eats-a-Lot</h3>
						<p>Osmin's next recruit is a personal chef to athletes who believes you should never trust a skinny chef. Is this logic weighing him down? Osmin thinks so. Watch him put the overeater through the ringer Tuesday at 9/8c. <a href="/operation-osmin" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV10.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/dark-angel" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_DarkAngel.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Jessica Alba Now on nuvoTV!</h3>
						<p>The sexy actress plays a genetically-enhanced superhuman in James Cameron's sci-fi series Thursdays at 9/8c on nuvoTV. <a href="/series/dark-angel" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?videos=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4_VCR_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Live Coverage of the Models!</h3>
						<p>Want to know what the models do when not impressing the judges? Get behind-the-scenes coverage in Model Latina's Video Control Room. <a href="/model-latina-las-vegas/?videos=1" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/Osmin_adam_thumb_75x40.png);"><a href="#" title="Operation Osmin">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-MLLV10-thumb.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-DarkAngel-thumb.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/ML4_vcr_spotlight-thumb_75x40.png);"><a href="#" title="Model LAtina Videos">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="495" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: '@nuvoTVPastport OR @nuvoTVLatino101 OR #MLVegas OR #TeamOsmin OR \"-RealMadrid\" OR \"-pope\" OR \"-James_Phelps\"',
				  interval: 6000,
				  width: 370,
				  height: 495,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $sep25) {


$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MLLV10_HP.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMI-INK_b.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_Osmin10.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MLLV10.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-MIAMI-INK_b.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-OSMIN10.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-TONIGHT-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV-2.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk_6pm.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin6.png) no-repeat 0 0; left:-4px; top:190px; width:669px; height:161px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>
		</li>
				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a href="/operation-osmin" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_adam_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Osmin Vs. Sir Eats-a-Lot</h3>
						<p>Osmin's next recruit is a personal chef to athletes who believes you should never trust a skinny chef. Is this logic weighing him down? Osmin thinks so. Watch him put the overeater through the ringer Tuesday at 9/8c. <a href="/operation-osmin" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV10.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/dark-angel" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_DarkAngel.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Jessica Alba Now on nuvoTV!</h3>
						<p>The sexy actress plays a genetically-enhanced superhuman in James Cameron's sci-fi series Thursdays at 9/8c on nuvoTV. <a href="/series/dark-angel" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?videos=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4_VCR_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Live Coverage of the Models!</h3>
						<p>Want to know what the models do when not impressing the judges? Get behind-the-scenes coverage in Model Latina's Video Control Room. <a href="/model-latina-las-vegas/?videos=1" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/Osmin_adam_thumb_75x40.png);"><a href="#" title="Operation Osmin">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-MLLV10-thumb.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-DarkAngel-thumb.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/ML4_vcr_spotlight-thumb_75x40.png);"><a href="#" title="Model LAtina Videos">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="495" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: '@nuvoTVPastport OR @nuvoTVLatino101 OR #MLVegas OR #TeamOsmin OR \"-RealMadrid\" OR \"-pope\" OR \"-James_Phelps\"',
				  interval: 6000,
				  width: 370,
				  height: 495,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $sep26) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MLLV10_HP.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMI-INK_b.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_Osmin10.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MLLV10.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-MIAMI-INK_b.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-OSMIN10.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-TONIGHT-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV-2.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk_6pm.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin6.png) no-repeat 0 0; left:-4px; top:190px; width:669px; height:161px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>
		</li>
				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a href="/operation-osmin" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_adam_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Osmin Vs. Sir Eats-a-Lot</h3>
						<p>Osmin's next recruit is a personal chef to athletes who believes you should never trust a skinny chef. Is this logic weighing him down? Osmin thinks so. Watch him put the overeater through the ringer Tuesday at 9/8c. <a href="/operation-osmin" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV10.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/dark-angel" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_DarkAngel.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Jessica Alba Now on nuvoTV!</h3>
						<p>The sexy actress plays a genetically-enhanced superhuman in James Cameron's sci-fi series Thursdays at 9/8c on nuvoTV. <a href="/series/dark-angel" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?videos=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4_VCR_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Live Coverage of the Models!</h3>
						<p>Want to know what the models do when not impressing the judges? Get behind-the-scenes coverage in Model Latina's Video Control Room. <a href="/model-latina-las-vegas/?videos=1" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/Osmin_adam_thumb_75x40.png);"><a href="#" title="Operation Osmin">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-MLLV10-thumb.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-DarkAngel-thumb.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/ML4_vcr_spotlight-thumb_75x40.png);"><a href="#" title="Model LAtina Videos">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="495" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: '@nuvoTVPastport OR @nuvoTVLatino101 OR #MLVegas OR #TeamOsmin OR \"-RealMadrid\" OR \"-pope\" OR \"-James_Phelps\"',
				  interval: 6000,
				  width: 370,
				  height: 495,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $sep27) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MLLV10_HP.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMI-INK_b.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_Osmin10.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MLLV10.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-MIAMI-INK_b.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-OSMIN10.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-TONIGHT-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV-2.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk_6pm.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin6.png) no-repeat 0 0; left:-4px; top:190px; width:669px; height:161px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>
		</li>
				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a href="/operation-osmin" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_adam_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Osmin Vs. Sir Eats-a-Lot</h3>
						<p>Osmin's next recruit is a personal chef to athletes who believes you should never trust a skinny chef. Is this logic weighing him down? Osmin thinks so. Watch him put the overeater through the ringer Tuesday at 9/8c. <a href="/operation-osmin" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV10.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/dark-angel" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_DarkAngel.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Jessica Alba Now on nuvoTV!</h3>
						<p>The sexy actress plays a genetically-enhanced superhuman in James Cameron's sci-fi series Thursdays at 9/8c on nuvoTV. <a href="/series/dark-angel" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?videos=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4_VCR_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Live Coverage of the Models!</h3>
						<p>Want to know what the models do when not impressing the judges? Get behind-the-scenes coverage in Model Latina's Video Control Room. <a href="/model-latina-las-vegas/?videos=1" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/Osmin_adam_thumb_75x40.png);"><a href="#" title="Operation Osmin">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-MLLV10-thumb.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-DarkAngel-thumb.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/ML4_vcr_spotlight-thumb_75x40.png);"><a href="#" title="Model LAtina Videos">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="495" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: '@nuvoTVPastport OR @nuvoTVLatino101 OR #MLVegas OR #TeamOsmin OR \"-RealMadrid\" OR \"-pope\" OR \"-James_Phelps\"',
				  interval: 6000,
				  width: 370,
				  height: 495,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $sep28) {


$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MLLV10_HP.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMI-INK_b.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_Osmin10.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MLLV10.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-MIAMI-INK_b.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-OSMIN10.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-TONIGHT-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV-2.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk_6pm.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin6.png) no-repeat 0 0; left:-4px; top:190px; width:669px; height:161px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>
		</li>
				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a href="/operation-osmin" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_adam_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Osmin Vs. Sir Eats-a-Lot</h3>
						<p>Osmin's next recruit is a personal chef to athletes who believes you should never trust a skinny chef. Is this logic weighing him down? Osmin thinks so. Watch him put the overeater through the ringer Tuesday at 9/8c. <a href="/operation-osmin" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV10.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/dark-angel" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_DarkAngel.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Jessica Alba Now on nuvoTV!</h3>
						<p>The sexy actress plays a genetically-enhanced superhuman in James Cameron's sci-fi series Thursdays at 9/8c on nuvoTV. <a href="/series/dark-angel" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?videos=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4_VCR_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Live Coverage of the Models!</h3>
						<p>Want to know what the models do when not impressing the judges? Get behind-the-scenes coverage in Model Latina's Video Control Room. <a href="/model-latina-las-vegas/?videos=1" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/Osmin_adam_thumb_75x40.png);"><a href="#" title="Operation Osmin">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-MLLV10-thumb.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-DarkAngel-thumb.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/ML4_vcr_spotlight-thumb_75x40.png);"><a href="#" title="Model LAtina Videos">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="495" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: '@nuvoTVPastport OR @nuvoTVLatino101 OR #MLVegas OR #TeamOsmin OR \"-RealMadrid\" OR \"-pope\" OR \"-James_Phelps\"',
				  interval: 6000,
				  width: 370,
				  height: 495,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $sep29) {


$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MLLV10_HP.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMI-INK_b.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_Osmin10.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MLLV10.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-MIAMI-INK_b.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-OSMIN10.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-TONIGHT-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV-2.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk_6pm.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin6.png) no-repeat 0 0; left:-4px; top:190px; width:669px; height:161px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>
		</li>
				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a href="/operation-osmin" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_adam_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Osmin Vs. Sir Eats-a-Lot</h3>
						<p>Osmin's next recruit is a personal chef to athletes who believes you should never trust a skinny chef. Is this logic weighing him down? Osmin thinks so. Watch him put the overeater through the ringer Tuesday at 9/8c. <a href="/operation-osmin" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV10.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/dark-angel" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_DarkAngel.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Jessica Alba Now on nuvoTV!</h3>
						<p>The sexy actress plays a genetically-enhanced superhuman in James Cameron's sci-fi series Thursdays at 9/8c on nuvoTV. <a href="/series/dark-angel" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?videos=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4_VCR_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Live Coverage of the Models!</h3>
						<p>Want to know what the models do when not impressing the judges? Get behind-the-scenes coverage in Model Latina's Video Control Room. <a href="/model-latina-las-vegas/?videos=1" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/Osmin_adam_thumb_75x40.png);"><a href="#" title="Operation Osmin">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-MLLV10-thumb.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-DarkAngel-thumb.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/ML4_vcr_spotlight-thumb_75x40.png);"><a href="#" title="Model LAtina Videos">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="495" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: '@nuvoTVPastport OR @nuvoTVLatino101 OR #MLVegas OR #TeamOsmin OR \"-RealMadrid\" OR \"-pope\" OR \"-James_Phelps\"',
				  interval: 6000,
				  width: 370,
				  height: 495,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $sep30) {


$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MLLV10_HP.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMI-INK_b.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_Osmin10.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MLLV10.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-MIAMI-INK_b.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-OSMIN10.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-TONIGHT-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV-2.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk_6pm.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin6.png) no-repeat 0 0; left:-4px; top:190px; width:669px; height:161px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>
		</li>
				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a href="/operation-osmin" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_adam_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Osmin Vs. Sir Eats-a-Lot</h3>
						<p>Osmin's next recruit is a personal chef to athletes who believes you should never trust a skinny chef. Is this logic weighing him down? Osmin thinks so. Watch him put the overeater through the ringer Tuesday at 9/8c. <a href="/operation-osmin" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV10.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/dark-angel" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_DarkAngel.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Jessica Alba Now on nuvoTV!</h3>
						<p>The sexy actress plays a genetically-enhanced superhuman in James Cameron's sci-fi series Thursdays at 9/8c on nuvoTV. <a href="/series/dark-angel" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?videos=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4_VCR_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Live Coverage of the Models!</h3>
						<p>Want to know what the models do when not impressing the judges? Get behind-the-scenes coverage in Model Latina's Video Control Room. <a href="/model-latina-las-vegas/?videos=1" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/Osmin_adam_thumb_75x40.png);"><a href="#" title="Operation Osmin">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-MLLV10-thumb.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-DarkAngel-thumb.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/ML4_vcr_spotlight-thumb_75x40.png);"><a href="#" title="Model LAtina Videos">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="495" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: '@nuvoTVPastport OR @nuvoTVLatino101 OR #MLVegas OR #TeamOsmin OR \"-RealMadrid\" OR \"-pope\" OR \"-James_Phelps\"',
				  interval: 6000,
				  width: 370,
				  height: 495,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $oct1) {


$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MLLV10_HP.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMI-INK_b.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_Osmin10.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MLLV10.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-MIAMI-INK_b.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-OSMIN10.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-TONIGHT-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV-2.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk_6pm.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin6.png) no-repeat 0 0; left:-4px; top:190px; width:669px; height:161px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>
		</li>
				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a href="/operation-osmin" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_adam_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Osmin Vs. Sir Eats-a-Lot</h3>
						<p>Osmin's next recruit is a personal chef to athletes who believes you should never trust a skinny chef. Is this logic weighing him down? Osmin thinks so. Watch him put the overeater through the ringer Tuesday at 9/8c. <a href="/operation-osmin" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV10.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/dark-angel" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_DarkAngel.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Jessica Alba Now on nuvoTV!</h3>
						<p>The sexy actress plays a genetically-enhanced superhuman in James Cameron's sci-fi series Thursdays at 9/8c on nuvoTV. <a href="/series/dark-angel" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?videos=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4_VCR_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Live Coverage of the Models!</h3>
						<p>Want to know what the models do when not impressing the judges? Get behind-the-scenes coverage in Model Latina's Video Control Room. <a href="/model-latina-las-vegas/?videos=1" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/Osmin_adam_thumb_75x40.png);"><a href="#" title="Operation Osmin">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-MLLV10-thumb.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-DarkAngel-thumb.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/ML4_vcr_spotlight-thumb_75x40.png);"><a href="#" title="Model LAtina Videos">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="495" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: '@nuvoTVPastport OR @nuvoTVLatino101 OR #MLVegas OR #TeamOsmin OR \"-RealMadrid\" OR \"-pope\" OR \"-James_Phelps\"',
				  interval: 6000,
				  width: 370,
				  height: 495,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $oct2) {


$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MLLV10_HP.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMI-INK_b.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_Osmin10.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MLLV10.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-MIAMI-INK_b.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-OSMIN10.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-TONIGHT-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV-2.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk_6pm.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin6.png) no-repeat 0 0; left:-4px; top:190px; width:669px; height:161px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>
		</li>
				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a href="/operation-osmin" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_adam_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Osmin Vs. Sir Eats-a-Lot</h3>
						<p>Osmin's next recruit is a personal chef to athletes who believes you should never trust a skinny chef. Is this logic weighing him down? Osmin thinks so. Watch him put the overeater through the ringer Tuesday at 9/8c. <a href="/operation-osmin" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV10.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/dark-angel" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_DarkAngel.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Jessica Alba Now on nuvoTV!</h3>
						<p>The sexy actress plays a genetically-enhanced superhuman in James Cameron's sci-fi series Thursdays at 9/8c on nuvoTV. <a href="/series/dark-angel" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?videos=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4_VCR_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Live Coverage of the Models!</h3>
						<p>Want to know what the models do when not impressing the judges? Get behind-the-scenes coverage in Model Latina's Video Control Room. <a href="/model-latina-las-vegas/?videos=1" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/Osmin_adam_thumb_75x40.png);"><a href="#" title="Operation Osmin">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-MLLV10-thumb.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-DarkAngel-thumb.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/ML4_vcr_spotlight-thumb_75x40.png);"><a href="#" title="Model LAtina Videos">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="495" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: '@nuvoTVPastport OR @nuvoTVLatino101 OR #MLVegas OR #TeamOsmin OR \"-RealMadrid\" OR \"-pope\" OR \"-James_Phelps\"',
				  interval: 6000,
				  width: 370,
				  height: 495,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: false,
				    avatars: true,
					toptweets: false,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else {


$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg2_HP_darkangel.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MLLV10_HP.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMI-INK_b.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_HP_Osmin10.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DA3.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MLLV10.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-MIAMI-INK_b.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-OSMIN10.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-TONIGHT-DARKANGEL.png) no-repeat 0 0; width: 669px; height: 181px; top: 251px; left: 285px;">
				<a href="http://www.facebook.com/pages/Dark-Angel-on-nuvoTV/227451213972174?sk=wall" style="width: 218px; height: 73px; z-index: 2; left: 171px; top: 104px;">facebook</a>
				<a href="/series/dark-angel/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/dark-angel/">base link</a>
			</div>
			<a class="full-link" href="/series/dark-angel/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV-2.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk_6pm.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin6.png) no-repeat 0 0; left:-4px; top:190px; width:669px; height:161px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>
		</li>
				
	</ul>
	
EOHERO;
	
	$page->components["content"] = <<<EOCONTENT
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block">
		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				<li>
					<a href="/operation-osmin" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_adam_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Osmin Vs. Sir Eats-a-Lot</h3>
						<p>Osmin's next recruit is a personal chef to athletes who believes you should never trust a skinny chef. Is this logic weighing him down? Osmin thinks so. Watch him put the overeater through the ringer Tuesday at 9/8c. <a href="/operation-osmin" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?blog=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_MLLV10.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get the Dish on Model Latina Las Vegas!</h3>
						<p>Find out who rocked the challenge, who fell short, and who got the boot. Read the recap! <a href="/model-latina-las-vegas/?blog=1" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/twitter.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_MON_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Tweet With Us Every Monday!</h3>
						<p>Be part of the "in" crowd. Use hashtag #MLVegas during Model Latina Las Vegas every Monday at 10/9c and your tweets may appear on nuvoTV. <a href="/model-latina-vegas-cast/twitter.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/dark-angel" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Spotlight_DarkAngel.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Watch Jessica Alba Now on nuvoTV!</h3>
						<p>The sexy actress plays a genetically-enhanced superhuman in James Cameron's sci-fi series Thursdays at 9/8c on nuvoTV. <a href="/series/dark-angel" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-las-vegas/?videos=1" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4_VCR_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Live Coverage of the Models!</h3>
						<p>Want to know what the models do when not impressing the judges? Get behind-the-scenes coverage in Model Latina's Video Control Room. <a href="/model-latina-las-vegas/?videos=1" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;">Click tabs below for next spotlight.</div>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/Osmin_adam_thumb_75x40.png);"><a href="#" title="Operation Osmin">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-MLLV10-thumb.png);"><a href="#" title="Model Latina Las Vegas">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/spotlight-DarkAngel-thumb.png);"><a href="#" title="Dark Angel">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/ML4_vcr_spotlight-thumb_75x40.png);"><a href="#" title="Model LAtina Videos">Link1</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/OperationOsmin" width="370" height="495" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
			</div>
			<div class="twitter">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: 'mynuvotv OR operationosmin OR modellatina', 
				  interval: 3000,
				  width: 370,
				  height: 495,
				  theme: {
				    shell: {
				      background: '#ffffff',
				      color: '#1f1e1c'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#1f1e1c',
				      links: '#c4122f'
				    }
				  },
				  features: {
					scrollbar: true,
					loop: true,
					live: true,
					hashtags: true,
					timestamp: false,
					avatars: true,
					toptweets: false,
					behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

}

?>