<?
	
//	$page->title = "";
//	$page->description = "";
//	$page->keywords = "";
	
$now = time();

$aug10 = strtotime("August 10, 2011 8:00am");

$aug11 = strtotime("August 11, 2011 8:00am");

$aug12 = strtotime("August 12, 2011 8:00am");
	
$aug13 = strtotime("August 13, 2011 8:00am");

$aug14 = strtotime("August 14, 2011 8:00am");

$aug15 = strtotime("August 15, 2011 8:00am");

$aug16 = strtotime("August 16, 2011 8:00am");

$aug17 = strtotime("August 17, 2011 8:00am");

$aug18 = strtotime("August 18, 2011 8:00am");

$aug19 = strtotime("August 19, 2011 8:00am");

$aug20 = strtotime("August 20, 2011 8:00am");

$aug21 = strtotime("August 21, 2011 8:00am");

$aug22 = strtotime("August 22, 2011 8:00am");

$aug23 = strtotime("August 23, 2011 8:00am");


if($_GET[aug10]) {
	$now = strtotime("August 10, 2011 8:01am");
}

if($_GET[aug11]) {
	$now = strtotime("August 11, 2011 8:01am");
}

if($_GET[aug12]) {
	$now = strtotime("August 12, 2011 8:01am");
}

if($_GET[aug13]) {
	$now = strtotime("August 13, 2011 8:01am");
}

if($_GET[aug14]) {
	$now = strtotime("August 14, 2011 8:01am");
}

if($_GET[aug15]) {
	$now = strtotime("August 15, 2011 8:01am");
}

if($_GET[aug16]) {
	$now = strtotime("August 16, 2011 8:01am");
}

if($_GET[aug17]) {
	$now = strtotime("August 17, 2011 8:01am");
}

if($_GET[aug18]) {
	$now = strtotime("August 18, 2011 8:01am");
}

if($_GET[aug19]) {
	$now = strtotime("August 19, 2011 8:01am");
}

if($_GET[aug20]) {
	$now = strtotime("August 20, 2011 8:01am");
}

if($_GET[aug21]) {
	$now = strtotime("August 21, 2011 8:01am");
}

if($_GET[aug22]) {
	$now = strtotime("August 22, 2011 8:01am");
}

if($_GET[aug23]) {
	$now = strtotime("August 23, 2011 8:01am");
}

if($now < $aug12) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<!-- <div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin.jpg) no-repeat 0 0;"></div> 
		<div style="background:transparent url(/assets/images/heroes/home/_bg_CristinaCourt.jpg) no-repeat 0 0;"></div> -->
		<div style="background:transparent url(/assets/images/heroes/home/DOMINA_home_bg.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MiamiInk.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_ML_Vegas2.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_LAlaw.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<!-- <li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-Osmin.png);"></li> 
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-CristinaCourt.png);"></li> -->
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DOMINA.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MiamiInk.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-ML_Vegas-v3.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-LA-Law.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin8.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/OperationOsmin" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/operation-osmin/">base link</a>			
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk2.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="http://www.facebook.com/nuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV.png) no-repeat 0 0; left:-4px; top:282px; width:669px; height:161px;">
				<a href="http://www.facebook.com/ModelLatina" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/model-latina-las-vegas/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-LA-Law1.jpg) no-repeat 0 0; width: 669px; height: 161px; left: 300px; top: 305px;">
				<a href="http://www.facebook.com/nuvoTV" style="left:200px; top:91px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/series/la-law" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/la-law">base link</a>
			</div>
			<a class="full-link" href="/series/la-law">base link</a>
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
					<a href="/model-latina-twitter-party" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_240x220_2.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>You're Invited to the Hottest Party of the Year!</h3>
						<p>We're hosting a Model Latina Las Vegas Twitter party during the special 2-hr. season premiere on Monday, August 15 at 9PM, and you're invited! <a href="/model-latina-twitter-party" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/misc/referafriend.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/t-shirt-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to rock a super cool Model Latina T-shirt?</h3>
						<p>Of course you do! Share this video with your friends and we'll send you a FREE limited edition Model Latina T-shirt. <a href="/misc/referafriend.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/operation-osmin/blog.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Osmin6-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Five Extreme Health Food Crazes</h3>
						<p>You've heard of the cayenne pepper cleanse, the South Beach Diet, and Osmin's favorite&mdash;fish, salad, water&mdash;but I bet you've never heard of these whacky health foods. <a href="/operation-osmin/blog.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4-Spotlight_w5_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Meet the Final Model Latina Cast Members!</h3>
						<p>It's the moment you've all been waiting for. Meet the cast of the sexiest show ever, and don't forget to watch the 2-hour season premiere on Monday, Aug. 15th at 9/8c. <a href="/model-latina-vegas-cast/" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/operation-osmin/casting.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/OSMIN.CASTING-Spotlight_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to Be on the Next Operation Osmin?</h3>
						<p>We're looking for charismatic, outgoing individuals in the Miami area who can handle TV's most psychotic trainer. Think you can hang? Enter now! <a href="/operation-osmin/casting.php" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/t-shirt-thumb_75x40.png);"><a href="#" title="T-shirt Giveaway">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/Osmin5-thumb_75x40.png);"><a href="#" title="ML4 Week 4 Reveal">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/MLLV_w5_thmb.png);"><a href="#" title="Model Latina">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/nowcasting_thmb.png);"><a href="#" title="Osmin">Link1</a></li>
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
				  type: 'profile',
				  rpp: 20,
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
				    loop: false,
				    live: false,
				    hashtags: true,
				    timestamp: true,
				    avatars: false,
				    behavior: 'all'
				  }
				}).render().setUser('ModelLatina').start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $aug13) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<!-- <div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin.jpg) no-repeat 0 0;"></div> 
		<div style="background:transparent url(/assets/images/heroes/home/_bg_CristinaCourt.jpg) no-repeat 0 0;"></div> -->
		<div style="background:transparent url(/assets/images/heroes/home/DOMINA_home_bg.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MiamiInk.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_ML_Vegas2.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_InLivingColor.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<!-- <li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-Osmin.png);"></li> 
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-CristinaCourt.png);"></li> -->
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DOMINA.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MiamiInk.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-ML_Vegas-v3.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-InLivingColor.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin8.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/OperationOsmin" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/operation-osmin/">base link</a>			
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk2.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="http://www.facebook.com/nuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV.png) no-repeat 0 0; left:-4px; top:282px; width:669px; height:161px;">
				<a href="http://www.facebook.com/ModelLatina" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/model-latina-las-vegas/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_InLivingColor.png) no-repeat 0 0; width: 669px; height: 161px; left: 120px; top: 287px;">
				<a href="http://www.facebook.com/nuvoTV" style="left:200px; top:91px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/series/in-living-color/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/in-living-color/">base link</a>
			</div>
			<a class="full-link" href="/series/in-living-color/">base link</a>
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
					<a href="/model-latina-twitter-party" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_240x220_2.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>You're Invited to the Hottest Party of the Year!</h3>
						<p>We're hosting a Model Latina Las Vegas Twitter party during the special 2-hr. season premiere on Monday, August 15 at 9PM, and you're invited! <a href="/model-latina-twitter-party" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/misc/referafriend.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/t-shirt-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to rock a super cool Model Latina T-shirt?</h3>
						<p>Of course you do! Share this video with your friends and we'll send you a FREE limited edition Model Latina T-shirt. <a href="/misc/referafriend.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/operation-osmin/blog.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Osmin6-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Five Extreme Health Food Crazes</h3>
						<p>You've heard of the cayenne pepper cleanse, the South Beach Diet, and Osmin's favorite&mdash;fish, salad, water&mdash;but I bet you've never heard of these whacky health foods. <a href="/operation-osmin/blog.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4-Spotlight_w5_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Meet the Final Model Latina Cast Members!</h3>
						<p>It's the moment you've all been waiting for. Meet the cast of the sexiest show ever, and don't forget to watch the 2-hour season premiere on Monday, Aug. 15th at 9/8c. <a href="/model-latina-vegas-cast/" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/operation-osmin/casting.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/OSMIN.CASTING-Spotlight_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to Be on the Next Operation Osmin?</h3>
						<p>We're looking for charismatic, outgoing individuals in the Miami area who can handle TV's most psychotic trainer. Think you can hang? Enter now! <a href="/operation-osmin/casting.php" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/t-shirt-thumb_75x40.png);"><a href="#" title="T-shirt Giveaway">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/Osmin5-thumb_75x40.png);"><a href="#" title="ML4 Week 4 Reveal">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/MLLV_w5_thmb.png);"><a href="#" title="Model Latina">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/nowcasting_thmb.png);"><a href="#" title="Osmin">Link1</a></li>
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
				  type: 'profile',
				  rpp: 20,
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
				    loop: false,
				    live: false,
				    hashtags: true,
				    timestamp: true,
				    avatars: false,
				    behavior: 'all'
				  }
				}).render().setUser('ModelLatina').start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $aug14) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<!-- <div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin.jpg) no-repeat 0 0;"></div> 
		<div style="background:transparent url(/assets/images/heroes/home/_bg_CristinaCourt.jpg) no-repeat 0 0;"></div> -->
		<div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MiamiInk.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_ML_Vegas2.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_LAlaw.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<!-- <li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-Osmin.png);"></li> 
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-CristinaCourt.png);"></li> -->
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-Osmin.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MiamiInk.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-ML_Vegas-v3.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-LA-Law.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin8.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/OperationOsmin" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/operation-osmin/">base link</a>			
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk2.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="http://www.facebook.com/nuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV.png) no-repeat 0 0; left:-4px; top:282px; width:669px; height:161px;">
				<a href="http://www.facebook.com/ModelLatina" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/model-latina-las-vegas/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-LA-Law1.jpg) no-repeat 0 0; width: 669px; height: 161px; left: 300px; top: 305px;">
				<a href="http://www.facebook.com/nuvoTV" style="left:200px; top:91px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/series/la-law" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/la-law">base link</a>
			</div>
			<a class="full-link" href="/series/la-law">base link</a>
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
					<a href="/model-latina-twitter-party" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_240x220_2.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>You're Invited to the Hottest Party of the Year!</h3>
						<p>We're hosting a Model Latina Las Vegas Twitter party during the special 2-hr. season premiere on Monday, August 15 at 9PM, and you're invited! <a href="/model-latina-twitter-party" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/misc/referafriend.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/t-shirt-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to rock a super cool Model Latina T-shirt?</h3>
						<p>Of course you do! Share this video with your friends and we'll send you a FREE limited edition Model Latina T-shirt. <a href="/misc/referafriend.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/operation-osmin/blog.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Osmin6-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Five Extreme Health Food Crazes</h3>
						<p>You've heard of the cayenne pepper cleanse, the South Beach Diet, and Osmin's favorite&mdash;fish, salad, water&mdash;but I bet you've never heard of these whacky health foods. <a href="/operation-osmin/blog.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4-Spotlight_w5_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Meet the Final Model Latina Cast Members!</h3>
						<p>It's the moment you've all been waiting for. Meet the cast of the sexiest show ever, and don't forget to watch the 2-hour season premiere on Monday, Aug. 15th at 9/8c. <a href="/model-latina-vegas-cast/" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/operation-osmin/casting.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/OSMIN.CASTING-Spotlight_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to Be on the Next Operation Osmin?</h3>
						<p>We're looking for charismatic, outgoing individuals in the Miami area who can handle TV's most psychotic trainer. Think you can hang? Enter now! <a href="/operation-osmin/casting.php" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/t-shirt-thumb_75x40.png);"><a href="#" title="T-shirt Giveaway">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/Osmin5-thumb_75x40.png);"><a href="#" title="ML4 Week 4 Reveal">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/MLLV_w5_thmb.png);"><a href="#" title="Model Latina">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/nowcasting_thmb.png);"><a href="#" title="Osmin">Link1</a></li>
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
				  type: 'profile',
				  rpp: 20,
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
				    loop: false,
				    live: false,
				    hashtags: true,
				    timestamp: true,
				    avatars: false,
				    behavior: 'all'
				  }
				}).render().setUser('ModelLatina').start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $aug15) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<!-- <div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin.jpg) no-repeat 0 0;"></div> 
		<div style="background:transparent url(/assets/images/heroes/home/_bg_CristinaCourt.jpg) no-repeat 0 0;"></div> -->
		<div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MiamiInk.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_ML_Vegas2.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_LAlaw.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<!-- <li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-Osmin.png);"></li> 
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-CristinaCourt.png);"></li> -->
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-Osmin.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MiamiInk.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-ML_Vegas-v3.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-LA-Law.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin8.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/OperationOsmin" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/operation-osmin/">base link</a>			
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk2.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="http://www.facebook.com/nuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV.png) no-repeat 0 0; left:-4px; top:282px; width:669px; height:161px;">
				<a href="http://www.facebook.com/ModelLatina" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/model-latina-las-vegas/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-LA-Law1.jpg) no-repeat 0 0; width: 669px; height: 161px; left: 300px; top: 305px;">
				<a href="http://www.facebook.com/nuvoTV" style="left:200px; top:91px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/series/la-law" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/la-law">base link</a>
			</div>
			<a class="full-link" href="/series/la-law">base link</a>
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
					<a href="/model-latina-twitter-party" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_240x220_2.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>You're Invited to the Hottest Party of the Year!</h3>
						<p>We're hosting a Model Latina Las Vegas Twitter party during the special 2-hr. season premiere on Monday, August 15 at 9PM, and you're invited! <a href="/model-latina-twitter-party" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/misc/referafriend.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/t-shirt-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to rock a super cool Model Latina T-shirt?</h3>
						<p>Of course you do! Share this video with your friends and we'll send you a FREE limited edition Model Latina T-shirt. <a href="/misc/referafriend.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/operation-osmin/blog.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Osmin6-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Five Extreme Health Food Crazes</h3>
						<p>You've heard of the cayenne pepper cleanse, the South Beach Diet, and Osmin's favorite&mdash;fish, salad, water&mdash;but I bet you've never heard of these whacky health foods. <a href="/operation-osmin/blog.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4-Spotlight_w5_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Meet the Final Model Latina Cast Members!</h3>
						<p>It's the moment you've all been waiting for. Meet the cast of the sexiest show ever, and don't forget to watch the 2-hour season premiere on Monday, Aug. 15th at 9/8c. <a href="/model-latina-vegas-cast/" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/operation-osmin/casting.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/OSMIN.CASTING-Spotlight_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to Be on the Next Operation Osmin?</h3>
						<p>We're looking for charismatic, outgoing individuals in the Miami area who can handle TV's most psychotic trainer. Think you can hang? Enter now! <a href="/operation-osmin/casting.php" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/t-shirt-thumb_75x40.png);"><a href="#" title="T-shirt Giveaway">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/Osmin5-thumb_75x40.png);"><a href="#" title="ML4 Week 4 Reveal">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/MLLV_w5_thmb.png);"><a href="#" title="Model Latina">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/nowcasting_thmb.png);"><a href="#" title="Osmin">Link1</a></li>
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
				  type: 'profile',
				  rpp: 20,
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
				    loop: false,
				    live: false,
				    hashtags: true,
				    timestamp: true,
				    avatars: false,
				    behavior: 'all'
				  }
				}).render().setUser('ModelLatina').start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $aug16) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<!-- <div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin.jpg) no-repeat 0 0;"></div> 
		<div style="background:transparent url(/assets/images/heroes/home/_bg_CristinaCourt.jpg) no-repeat 0 0;"></div> -->
		<div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MiamiInk.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_ML_Vegas2.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_LAlaw.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<!-- <li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-Osmin.png);"></li> 
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-CristinaCourt.png);"></li> -->
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-Osmin.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MiamiInk.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-ML_Vegas-v3.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-LA-Law.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin8.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/OperationOsmin" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/operation-osmin/">base link</a>			
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk2.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="http://www.facebook.com/nuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV.png) no-repeat 0 0; left:-4px; top:282px; width:669px; height:161px;">
				<a href="http://www.facebook.com/ModelLatina" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/model-latina-las-vegas/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-LA-Law1.jpg) no-repeat 0 0; width: 669px; height: 161px; left: 300px; top: 305px;">
				<a href="http://www.facebook.com/nuvoTV" style="left:200px; top:91px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/series/la-law" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/la-law">base link</a>
			</div>
			<a class="full-link" href="/series/la-law">base link</a>
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
					<a href="/model-latina-twitter-party" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_240x220_2.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>You're Invited to the Hottest Party of the Year!</h3>
						<p>We're hosting a Model Latina Las Vegas Twitter party during the special 2-hr. season premiere on Monday, August 15 at 9PM, and you're invited! <a href="/model-latina-twitter-party" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/misc/referafriend.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/t-shirt-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to rock a super cool Model Latina T-shirt?</h3>
						<p>Of course you do! Share this video with your friends and we'll send you a FREE limited edition Model Latina T-shirt. <a href="/misc/referafriend.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/operation-osmin/blog.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Osmin6-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Five Extreme Health Food Crazes</h3>
						<p>You've heard of the cayenne pepper cleanse, the South Beach Diet, and Osmin's favorite&mdash;fish, salad, water&mdash;but I bet you've never heard of these whacky health foods. <a href="/operation-osmin/blog.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4-Spotlight_w5_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Meet the Final Model Latina Cast Members!</h3>
						<p>It's the moment you've all been waiting for. Meet the cast of the sexiest show ever, and don't forget to watch the 2-hour season premiere on Monday, Aug. 15th at 9/8c. <a href="/model-latina-vegas-cast/" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/operation-osmin/casting.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/OSMIN.CASTING-Spotlight_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to Be on the Next Operation Osmin?</h3>
						<p>We're looking for charismatic, outgoing individuals in the Miami area who can handle TV's most psychotic trainer. Think you can hang? Enter now! <a href="/operation-osmin/casting.php" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/t-shirt-thumb_75x40.png);"><a href="#" title="T-shirt Giveaway">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/Osmin5-thumb_75x40.png);"><a href="#" title="ML4 Week 4 Reveal">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/MLLV_w5_thmb.png);"><a href="#" title="Model Latina">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/nowcasting_thmb.png);"><a href="#" title="Osmin">Link1</a></li>
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
				  type: 'profile',
				  rpp: 20,
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
				    loop: false,
				    live: false,
				    hashtags: true,
				    timestamp: true,
				    avatars: false,
				    behavior: 'all'
				  }
				}).render().setUser('ModelLatina').start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $aug17) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<!-- <div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin.jpg) no-repeat 0 0;"></div> 
		<div style="background:transparent url(/assets/images/heroes/home/_bg_CristinaCourt.jpg) no-repeat 0 0;"></div> -->
		<div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MiamiInk.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_ML_Vegas2.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_LAlaw.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<!-- <li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-Osmin.png);"></li> 
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-CristinaCourt.png);"></li> -->
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-Osmin.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MiamiInk.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-ML_Vegas-v3.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-LA-Law.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin8.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/OperationOsmin" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/operation-osmin/">base link</a>			
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk2.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="http://www.facebook.com/nuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV.png) no-repeat 0 0; left:-4px; top:282px; width:669px; height:161px;">
				<a href="http://www.facebook.com/ModelLatina" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/model-latina-las-vegas/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-LA-Law1.jpg) no-repeat 0 0; width: 669px; height: 161px; left: 300px; top: 305px;">
				<a href="http://www.facebook.com/nuvoTV" style="left:200px; top:91px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/series/la-law" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/la-law">base link</a>
			</div>
			<a class="full-link" href="/series/la-law">base link</a>
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
					<a href="/model-latina-twitter-party" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_240x220_2.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>You're Invited to the Hottest Party of the Year!</h3>
						<p>We're hosting a Model Latina Las Vegas Twitter party during the special 2-hr. season premiere on Monday, August 15 at 9PM, and you're invited! <a href="/model-latina-twitter-party" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/misc/referafriend.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/t-shirt-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to rock a super cool Model Latina T-shirt?</h3>
						<p>Of course you do! Share this video with your friends and we'll send you a FREE limited edition Model Latina T-shirt. <a href="/misc/referafriend.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/operation-osmin/blog.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Osmin6-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Five Extreme Health Food Crazes</h3>
						<p>You've heard of the cayenne pepper cleanse, the South Beach Diet, and Osmin's favorite&mdash;fish, salad, water&mdash;but I bet you've never heard of these whacky health foods. <a href="/operation-osmin/blog.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4-Spotlight_w5_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Meet the Final Model Latina Cast Members!</h3>
						<p>It's the moment you've all been waiting for. Meet the cast of the sexiest show ever, and don't forget to watch the 2-hour season premiere on Monday, Aug. 15th at 9/8c. <a href="/model-latina-vegas-cast/" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/operation-osmin/casting.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/OSMIN.CASTING-Spotlight_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to Be on the Next Operation Osmin?</h3>
						<p>We're looking for charismatic, outgoing individuals in the Miami area who can handle TV's most psychotic trainer. Think you can hang? Enter now! <a href="/operation-osmin/casting.php" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/t-shirt-thumb_75x40.png);"><a href="#" title="T-shirt Giveaway">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/Osmin5-thumb_75x40.png);"><a href="#" title="ML4 Week 4 Reveal">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/MLLV_w5_thmb.png);"><a href="#" title="Model Latina">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/nowcasting_thmb.png);"><a href="#" title="Osmin">Link1</a></li>
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
				  type: 'profile',
				  rpp: 20,
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
				    loop: false,
				    live: false,
				    hashtags: true,
				    timestamp: true,
				    avatars: false,
				    behavior: 'all'
				  }
				}).render().setUser('ModelLatina').start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $aug18) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<!-- <div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin.jpg) no-repeat 0 0;"></div> 
		<div style="background:transparent url(/assets/images/heroes/home/_bg_CristinaCourt.jpg) no-repeat 0 0;"></div> -->
		<div style="background:transparent url(/assets/images/heroes/home/DOMINA_home_bg.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MiamiInk.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_ML_Vegas2.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_LAlaw.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<!-- <li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-Osmin.png);"></li> 
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-CristinaCourt.png);"></li> -->
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DOMINA.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MiamiInk.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-ML_Vegas-v3.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-LA-Law.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin8.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/OperationOsmin" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/operation-osmin/">base link</a>			
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk2.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="http://www.facebook.com/nuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV.png) no-repeat 0 0; left:-4px; top:282px; width:669px; height:161px;">
				<a href="http://www.facebook.com/ModelLatina" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/model-latina-las-vegas/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-LA-Law1.jpg) no-repeat 0 0; width: 669px; height: 161px; left: 300px; top: 305px;">
				<a href="http://www.facebook.com/nuvoTV" style="left:200px; top:91px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/series/la-law" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/la-law">base link</a>
			</div>
			<a class="full-link" href="/series/la-law">base link</a>
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
					<a href="/model-latina-twitter-party" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_240x220_2.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>You're Invited to the Hottest Party of the Year!</h3>
						<p>We're hosting a Model Latina Las Vegas Twitter party during the special 2-hr. season premiere on Monday, August 15 at 9PM, and you're invited! <a href="/model-latina-twitter-party" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/misc/referafriend.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/t-shirt-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to rock a super cool Model Latina T-shirt?</h3>
						<p>Of course you do! Share this video with your friends and we'll send you a FREE limited edition Model Latina T-shirt. <a href="/misc/referafriend.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/operation-osmin/blog.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Osmin6-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Five Extreme Health Food Crazes</h3>
						<p>You've heard of the cayenne pepper cleanse, the South Beach Diet, and Osmin's favorite&mdash;fish, salad, water&mdash;but I bet you've never heard of these whacky health foods. <a href="/operation-osmin/blog.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4-Spotlight_w5_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Meet the Final Model Latina Cast Members!</h3>
						<p>It's the moment you've all been waiting for. Meet the cast of the sexiest show ever, and don't forget to watch the 2-hour season premiere on Monday, Aug. 15th at 9/8c. <a href="/model-latina-vegas-cast/" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/operation-osmin/casting.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/OSMIN.CASTING-Spotlight_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to Be on the Next Operation Osmin?</h3>
						<p>We're looking for charismatic, outgoing individuals in the Miami area who can handle TV's most psychotic trainer. Think you can hang? Enter now! <a href="/operation-osmin/casting.php" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/t-shirt-thumb_75x40.png);"><a href="#" title="T-shirt Giveaway">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/Osmin5-thumb_75x40.png);"><a href="#" title="ML4 Week 4 Reveal">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/MLLV_w5_thmb.png);"><a href="#" title="Model Latina">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/nowcasting_thmb.png);"><a href="#" title="Osmin">Link1</a></li>
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
				  type: 'profile',
				  rpp: 20,
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
				    loop: false,
				    live: false,
				    hashtags: true,
				    timestamp: true,
				    avatars: false,
				    behavior: 'all'
				  }
				}).render().setUser('ModelLatina').start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $aug19) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<!-- <div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin.jpg) no-repeat 0 0;"></div> 
		<div style="background:transparent url(/assets/images/heroes/home/_bg_CristinaCourt.jpg) no-repeat 0 0;"></div> -->
		<div style="background:transparent url(/assets/images/heroes/home/DOMINA_home_bg.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MiamiInk.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_ML_Vegas2.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_LAlaw.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<!-- <li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-Osmin.png);"></li> 
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-CristinaCourt.png);"></li> -->
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DOMINA.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MiamiInk.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-ML_Vegas-v3.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-LA-Law.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin8.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/OperationOsmin" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/operation-osmin/">base link</a>			
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk2.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="http://www.facebook.com/nuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV.png) no-repeat 0 0; left:-4px; top:282px; width:669px; height:161px;">
				<a href="http://www.facebook.com/ModelLatina" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/model-latina-las-vegas/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-LA-Law1.jpg) no-repeat 0 0; width: 669px; height: 161px; left: 300px; top: 305px;">
				<a href="http://www.facebook.com/nuvoTV" style="left:200px; top:91px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/series/la-law" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/la-law">base link</a>
			</div>
			<a class="full-link" href="/series/la-law">base link</a>
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
					<a href="/model-latina-twitter-party" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_240x220_2.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>You're Invited to the Hottest Party of the Year!</h3>
						<p>We're hosting a Model Latina Las Vegas Twitter party during the special 2-hr. season premiere on Monday, August 15 at 9PM, and you're invited! <a href="/model-latina-twitter-party" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/misc/referafriend.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/t-shirt-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to rock a super cool Model Latina T-shirt?</h3>
						<p>Of course you do! Share this video with your friends and we'll send you a FREE limited edition Model Latina T-shirt. <a href="/misc/referafriend.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/operation-osmin/blog.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Osmin6-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Five Extreme Health Food Crazes</h3>
						<p>You've heard of the cayenne pepper cleanse, the South Beach Diet, and Osmin's favorite&mdash;fish, salad, water&mdash;but I bet you've never heard of these whacky health foods. <a href="/operation-osmin/blog.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4-Spotlight_w5_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Meet the Final Model Latina Cast Members!</h3>
						<p>It's the moment you've all been waiting for. Meet the cast of the sexiest show ever, and don't forget to watch the 2-hour season premiere on Monday, Aug. 15th at 9/8c. <a href="/model-latina-vegas-cast/" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/operation-osmin/casting.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/OSMIN.CASTING-Spotlight_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to Be on the Next Operation Osmin?</h3>
						<p>We're looking for charismatic, outgoing individuals in the Miami area who can handle TV's most psychotic trainer. Think you can hang? Enter now! <a href="/operation-osmin/casting.php" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/t-shirt-thumb_75x40.png);"><a href="#" title="T-shirt Giveaway">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/Osmin5-thumb_75x40.png);"><a href="#" title="ML4 Week 4 Reveal">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/MLLV_w5_thmb.png);"><a href="#" title="Model Latina">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/nowcasting_thmb.png);"><a href="#" title="Osmin">Link1</a></li>
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
				  type: 'profile',
				  rpp: 20,
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
				    loop: false,
				    live: false,
				    hashtags: true,
				    timestamp: true,
				    avatars: false,
				    behavior: 'all'
				  }
				}).render().setUser('ModelLatina').start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $aug20) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<!-- <div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin.jpg) no-repeat 0 0;"></div> 
		<div style="background:transparent url(/assets/images/heroes/home/_bg_CristinaCourt.jpg) no-repeat 0 0;"></div> -->
		<div style="background:transparent url(/assets/images/heroes/home/DOMINA_home_bg.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MiamiInk.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_ML_Vegas2.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_LAlaw.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<!-- <li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-Osmin.png);"></li> 
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-CristinaCourt.png);"></li> -->
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DOMINA.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MiamiInk.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-ML_Vegas-v3.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-LA-Law.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin8.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/OperationOsmin" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/operation-osmin/">base link</a>			
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk2.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="http://www.facebook.com/nuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV.png) no-repeat 0 0; left:-4px; top:282px; width:669px; height:161px;">
				<a href="http://www.facebook.com/ModelLatina" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/model-latina-las-vegas/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-LA-Law1.jpg) no-repeat 0 0; width: 669px; height: 161px; left: 300px; top: 305px;">
				<a href="http://www.facebook.com/nuvoTV" style="left:200px; top:91px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/series/la-law" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/la-law">base link</a>
			</div>
			<a class="full-link" href="/series/la-law">base link</a>
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
					<a href="/model-latina-twitter-party" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_240x220_2.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>You're Invited to the Hottest Party of the Year!</h3>
						<p>We're hosting a Model Latina Las Vegas Twitter party during the special 2-hr. season premiere on Monday, August 15 at 9PM, and you're invited! <a href="/model-latina-twitter-party" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/misc/referafriend.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/t-shirt-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to rock a super cool Model Latina T-shirt?</h3>
						<p>Of course you do! Share this video with your friends and we'll send you a FREE limited edition Model Latina T-shirt. <a href="/misc/referafriend.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/operation-osmin/blog.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Osmin6-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Five Extreme Health Food Crazes</h3>
						<p>You've heard of the cayenne pepper cleanse, the South Beach Diet, and Osmin's favorite&mdash;fish, salad, water&mdash;but I bet you've never heard of these whacky health foods. <a href="/operation-osmin/blog.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4-Spotlight_w5_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Meet the Final Model Latina Cast Members!</h3>
						<p>It's the moment you've all been waiting for. Meet the cast of the sexiest show ever, and don't forget to watch the 2-hour season premiere on Monday, Aug. 15th at 9/8c. <a href="/model-latina-vegas-cast/" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/operation-osmin/casting.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/OSMIN.CASTING-Spotlight_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to Be on the Next Operation Osmin?</h3>
						<p>We're looking for charismatic, outgoing individuals in the Miami area who can handle TV's most psychotic trainer. Think you can hang? Enter now! <a href="/operation-osmin/casting.php" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/t-shirt-thumb_75x40.png);"><a href="#" title="T-shirt Giveaway">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/Osmin5-thumb_75x40.png);"><a href="#" title="ML4 Week 4 Reveal">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/MLLV_w5_thmb.png);"><a href="#" title="Model Latina">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/nowcasting_thmb.png);"><a href="#" title="Osmin">Link1</a></li>
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
				  type: 'profile',
				  rpp: 20,
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
				    loop: false,
				    live: false,
				    hashtags: true,
				    timestamp: true,
				    avatars: false,
				    behavior: 'all'
				  }
				}).render().setUser('ModelLatina').start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $aug21) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<!-- <div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin.jpg) no-repeat 0 0;"></div> 
		<div style="background:transparent url(/assets/images/heroes/home/_bg_CristinaCourt.jpg) no-repeat 0 0;"></div> -->
		<div style="background:transparent url(/assets/images/heroes/home/DOMINA_home_bg.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MiamiInk.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_ML_Vegas2.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_LAlaw.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<!-- <li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-Osmin.png);"></li> 
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-CristinaCourt.png);"></li> -->
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DOMINA.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MiamiInk.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-ML_Vegas-v3.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-LA-Law.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin8.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/OperationOsmin" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/operation-osmin/">base link</a>			
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk2.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="http://www.facebook.com/nuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV.png) no-repeat 0 0; left:-4px; top:282px; width:669px; height:161px;">
				<a href="http://www.facebook.com/ModelLatina" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/model-latina-las-vegas/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-LA-Law1.jpg) no-repeat 0 0; width: 669px; height: 161px; left: 300px; top: 305px;">
				<a href="http://www.facebook.com/nuvoTV" style="left:200px; top:91px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/series/la-law" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/la-law">base link</a>
			</div>
			<a class="full-link" href="/series/la-law">base link</a>
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
					<a href="/model-latina-twitter-party" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_240x220_2.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>You're Invited to the Hottest Party of the Year!</h3>
						<p>We're hosting a Model Latina Las Vegas Twitter party during the special 2-hr. season premiere on Monday, August 15 at 9PM, and you're invited! <a href="/model-latina-twitter-party" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/misc/referafriend.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/t-shirt-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to rock a super cool Model Latina T-shirt?</h3>
						<p>Of course you do! Share this video with your friends and we'll send you a FREE limited edition Model Latina T-shirt. <a href="/misc/referafriend.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/operation-osmin/blog.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Osmin6-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Five Extreme Health Food Crazes</h3>
						<p>You've heard of the cayenne pepper cleanse, the South Beach Diet, and Osmin's favorite&mdash;fish, salad, water&mdash;but I bet you've never heard of these whacky health foods. <a href="/operation-osmin/blog.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4-Spotlight_w5_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Meet the Final Model Latina Cast Members!</h3>
						<p>It's the moment you've all been waiting for. Meet the cast of the sexiest show ever, and don't forget to watch the 2-hour season premiere on Monday, Aug. 15th at 9/8c. <a href="/model-latina-vegas-cast/" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/operation-osmin/casting.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/OSMIN.CASTING-Spotlight_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to Be on the Next Operation Osmin?</h3>
						<p>We're looking for charismatic, outgoing individuals in the Miami area who can handle TV's most psychotic trainer. Think you can hang? Enter now! <a href="/operation-osmin/casting.php" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/t-shirt-thumb_75x40.png);"><a href="#" title="T-shirt Giveaway">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/Osmin5-thumb_75x40.png);"><a href="#" title="ML4 Week 4 Reveal">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/MLLV_w5_thmb.png);"><a href="#" title="Model Latina">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/nowcasting_thmb.png);"><a href="#" title="Osmin">Link1</a></li>
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
				  type: 'profile',
				  rpp: 20,
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
				    loop: false,
				    live: false,
				    hashtags: true,
				    timestamp: true,
				    avatars: false,
				    behavior: 'all'
				  }
				}).render().setUser('ModelLatina').start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $aug22) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<!-- <div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin.jpg) no-repeat 0 0;"></div> 
		<div style="background:transparent url(/assets/images/heroes/home/_bg_CristinaCourt.jpg) no-repeat 0 0;"></div> -->
		<div style="background:transparent url(/assets/images/heroes/home/DOMINA_home_bg.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MiamiInk.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_ML_Vegas2.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_LAlaw.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<!-- <li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-Osmin.png);"></li> 
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-CristinaCourt.png);"></li> -->
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DOMINA.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MiamiInk.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-ML_Vegas-v3.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-LA-Law.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin8.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/OperationOsmin" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/operation-osmin/">base link</a>			
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk2.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="http://www.facebook.com/nuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV.png) no-repeat 0 0; left:-4px; top:282px; width:669px; height:161px;">
				<a href="http://www.facebook.com/ModelLatina" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/model-latina-las-vegas/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-LA-Law1.jpg) no-repeat 0 0; width: 669px; height: 161px; left: 300px; top: 305px;">
				<a href="http://www.facebook.com/nuvoTV" style="left:200px; top:91px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/series/la-law" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/la-law">base link</a>
			</div>
			<a class="full-link" href="/series/la-law">base link</a>
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
					<a href="/model-latina-twitter-party" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_240x220_2.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>You're Invited to the Hottest Party of the Year!</h3>
						<p>We're hosting a Model Latina Las Vegas Twitter party during the special 2-hr. season premiere on Monday, August 15 at 9PM, and you're invited! <a href="/model-latina-twitter-party" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/misc/referafriend.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/t-shirt-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to rock a super cool Model Latina T-shirt?</h3>
						<p>Of course you do! Share this video with your friends and we'll send you a FREE limited edition Model Latina T-shirt. <a href="/misc/referafriend.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/operation-osmin/blog.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Osmin6-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Five Extreme Health Food Crazes</h3>
						<p>You've heard of the cayenne pepper cleanse, the South Beach Diet, and Osmin's favorite&mdash;fish, salad, water&mdash;but I bet you've never heard of these whacky health foods. <a href="/operation-osmin/blog.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4-Spotlight_w5_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Meet the Final Model Latina Cast Members!</h3>
						<p>It's the moment you've all been waiting for. Meet the cast of the sexiest show ever, and don't forget to watch the 2-hour season premiere on Monday, Aug. 15th at 9/8c. <a href="/model-latina-vegas-cast/" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/operation-osmin/casting.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/OSMIN.CASTING-Spotlight_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to Be on the Next Operation Osmin?</h3>
						<p>We're looking for charismatic, outgoing individuals in the Miami area who can handle TV's most psychotic trainer. Think you can hang? Enter now! <a href="/operation-osmin/casting.php" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/t-shirt-thumb_75x40.png);"><a href="#" title="T-shirt Giveaway">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/Osmin5-thumb_75x40.png);"><a href="#" title="ML4 Week 4 Reveal">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/MLLV_w5_thmb.png);"><a href="#" title="Model Latina">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/nowcasting_thmb.png);"><a href="#" title="Osmin">Link1</a></li>
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
				  type: 'profile',
				  rpp: 20,
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
				    loop: false,
				    live: false,
				    hashtags: true,
				    timestamp: true,
				    avatars: false,
				    behavior: 'all'
				  }
				}).render().setUser('ModelLatina').start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $aug23) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<!-- <div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin.jpg) no-repeat 0 0;"></div> 
		<div style="background:transparent url(/assets/images/heroes/home/_bg_CristinaCourt.jpg) no-repeat 0 0;"></div> -->
		<div style="background:transparent url(/assets/images/heroes/home/DOMINA_home_bg.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MiamiInk.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_ML_Vegas2.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_LAlaw.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<!-- <li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-Osmin.png);"></li> 
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-CristinaCourt.png);"></li> -->
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-DOMINA.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MiamiInk.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-ML_Vegas-v3.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-LA-Law.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin8.png) no-repeat 0 0; left:3px; top:268px; width:670px; height:168px;">
				<a href="http://www.facebook.com/OperationOsmin" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/operation-osmin/">base link</a>			
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk2.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="http://www.facebook.com/nuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV.png) no-repeat 0 0; left:-4px; top:282px; width:669px; height:161px;">
				<a href="http://www.facebook.com/ModelLatina" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/model-latina-las-vegas/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-LA-Law1.jpg) no-repeat 0 0; width: 669px; height: 161px; left: 300px; top: 305px;">
				<a href="http://www.facebook.com/nuvoTV" style="left:200px; top:91px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/series/la-law" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/la-law">base link</a>
			</div>
			<a class="full-link" href="/series/la-law">base link</a>
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
					<a href="/model-latina-twitter-party" class="no-break"><img class="bordered media" src="/assets/images/spotlight/twitter_Spotlight_240x220_2.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>You're Invited to the Hottest Party of the Year!</h3>
						<p>We're hosting a Model Latina Las Vegas Twitter party during the special 2-hr. season premiere on Monday, August 15 at 9PM, and you're invited! <a href="/model-latina-twitter-party" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/misc/referafriend.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/t-shirt-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to rock a super cool Model Latina T-shirt?</h3>
						<p>Of course you do! Share this video with your friends and we'll send you a FREE limited edition Model Latina T-shirt. <a href="/misc/referafriend.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/operation-osmin/blog.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/Osmin6-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Five Extreme Health Food Crazes</h3>
						<p>You've heard of the cayenne pepper cleanse, the South Beach Diet, and Osmin's favorite&mdash;fish, salad, water&mdash;but I bet you've never heard of these whacky health foods. <a href="/operation-osmin/blog.php" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4-Spotlight_w5_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Meet the Final Model Latina Cast Members!</h3>
						<p>It's the moment you've all been waiting for. Meet the cast of the sexiest show ever, and don't forget to watch the 2-hour season premiere on Monday, Aug. 15th at 9/8c. <a href="/model-latina-vegas-cast/" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/operation-osmin/casting.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/OSMIN.CASTING-Spotlight_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to Be on the Next Operation Osmin?</h3>
						<p>We're looking for charismatic, outgoing individuals in the Miami area who can handle TV's most psychotic trainer. Think you can hang? Enter now! <a href="/operation-osmin/casting.php" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/twitter_spotlight-thumb_75x40.png);"><a href="#" title="Twitter Party">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/t-shirt-thumb_75x40.png);"><a href="#" title="T-shirt Giveaway">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/Osmin5-thumb_75x40.png);"><a href="#" title="ML4 Week 4 Reveal">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/MLLV_w5_thmb.png);"><a href="#" title="Model Latina">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/nowcasting_thmb.png);"><a href="#" title="Osmin">Link1</a></li>
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
				  type: 'profile',
				  rpp: 20,
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
				    loop: false,
				    live: false,
				    hashtags: true,
				    timestamp: true,
				    avatars: false,
				    behavior: 'all'
				  }
				}).render().setUser('ModelLatina').start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

}
?>