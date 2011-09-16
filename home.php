<?
	
//	$page->title = "";
//	$page->description = "";
//	$page->keywords = "";
	
$now = time();

$sat = strtotime("July 16, 2011 8:00am");
	
$sun = strtotime("July 17, 2011 8:00am");

if($_GET[sat]) {
	$now = strtotime("July 16, 8:01am");
}

if($_GET[sun]) {
	$now = strtotime("July 17, 8:01am");
}

if($now < $sat) {

	$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<!-- <div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin.jpg) no-repeat 0 0;"></div> 
		<div style="background:transparent url(/assets/images/heroes/home/_bg_CristinaCourt.jpg) no-repeat 0 0;"></div> -->
		<div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin-v6.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_ML_Vegas.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_Latino101.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_GirlFight-v5.jpg) no-repeat 0 0;"></div>
		<!-- <div style="background:transparent url(/assets/images/heroes/home/_bg_GirlFight.jpg) no-repeat 0 0;"></div> -->
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<!-- <li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-Osmin.png);"></li> 
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-CristinaCourt.png);"></li> -->
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-OSMIN-v2.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-ML_Vegas.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-Latino101.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-GirlFight2.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<!-- <li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin_2.png) no-repeat 0 0; left:-8px; top:275px; width:663px; height:168px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:440px; top:90px; width:219px; height:74px; z-index:2;">facebook</a>
				<a class="full-link" href="/operation-osmin/">base link</a>			
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>			
		</li>		
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="http://www.facebook.com/nuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>  -->
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin3.png) no-repeat 0 0; left:-8px; top:275px; width:670px; height:168px;">
				<a href="http://www.facebook.com/OperationOsmin" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/operation-osmin/">base link</a>			
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_ML_1.png) no-repeat 0 0; left:-4px; top:282px; width:669px; height:161px;">
				<a href="http://www.facebook.com/ModelLatina" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/model-latina-las-vegas/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Latino101.png) no-repeat 0 0; left:75px; top:275px; width:663px; height:168px;">
				<a href="http://www.facebook.com/Latino101" style="left:200px; top:93px; width:219px; height:74px; z-index:2;">facebook</a>
				<a class="full-link" href="/series/latino-101-s2">base link</a>			
			</div>
			<a class="full-link" href="/series/latino-101-s2">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-GirlFight-v2.png) no-repeat 0 0; height: 161px; width: 335px; top: 345px; left: 362px;">
				<a href="http://www.facebook.com/nuvotv" style="left:93px; top:88px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/movies/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/movies/">base link</a>
			</div>
			<a class="full-link" href="/movies/">base link</a>
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
					<a href="/operation-osmin/episodes.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get a Sneak Peek of Operation Osmin</h3>
						<p>Joe has it all: a loving wife and kids, a successful health food business, and, unfortunately, 30 extra pounds. Osmin recruits him for the hardest 30 days of  his life. <a href="/operation-osmin/episodes.php" class="no-break">Watch a sneak peek now!</a></p>
					</div>
				</li>
				<li>
					<a href="/series/la-law/features/" class="no-break"><img class="bordered media" src="/assets/images/spotlight/LAlaw-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Five Things You Didn't Know About L.A. Law</h3>
						<p>The lives and work of the staff of a major Los Angeles law firm were revealed in this hit TV drama, but what you didn't know were these fun facts. <a href="/series/la-law/features/" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/miami-ink/features" class="no-break"><img class="bordered media" src="/assets/images/spotlight/miamiInk-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Five Things to Consider Before You Get a Tattoo</h3>
						<p>Body art is a beautiful thing, but no one wants to end up with regrets. <a href="/series/miami-ink/features" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/find-nuvotv" class="no-break"><img class="bordered media" src="/assets/images/spotlight/findnuvoTV-Spotlight_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Do You Get nuvoTV? Find Out Now!</h3>
						<p>Find out if you get America's Nu Voice on your cable lineup. <a href="/find-nuvotv" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4-Spotlight_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Meet the Cast of Model Latina Las Vegas</h3>
						<p>We'll be revealing new cast members every Monday, so check back weekly to see who made the cut. Plus, don't forget to watch the 2-hour season premiere on Monday, Aug. 15th at 9/8c. <a href="/model-latina-vegas-cast/" class="no-break">Read More +</a></p>
					</div>
				</li>
			</ul>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/osmin_spotlight-thumb_75x40.png);"><a href="#" title="Operation Osmin">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/LAlaw-spotlight-thumb_75x40.png);"><a href="#" title="LA Law">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/miamiINK-thumb_75x40.png);"><a href="#" title="Miami Ink">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/thumb-find-nuvo.png);"><a href="#" title="Find nuvoTV">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/thumb-model-latina.png);"><a href="#" title="ML4 Week 2 Reveal">Link2</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/nuvoTV" width="370" height="495" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
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
				}).render().setUser('mynuvoTV').start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else if($now < $sun) {


	$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<!-- <div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin.jpg) no-repeat 0 0;"></div> 
		<div style="background:transparent url(/assets/images/heroes/home/_bg_CristinaCourt.jpg) no-repeat 0 0;"></div> -->
		<div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin-v6.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_ML_Vegas.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_GirlFight-v5.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_El-Mariachi.jpg) no-repeat 0 0;"></div>
		<!-- <div style="background:transparent url(/assets/images/heroes/home/_bg_GirlFight.jpg) no-repeat 0 0;"></div> -->
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<!-- <li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-Osmin.png);"></li> 
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-CristinaCourt.png);"></li> -->
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-OSMIN-v2.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-ML_Vegas.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-GirlFight2.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-El_Mariachi.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<!-- <li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin_2.png) no-repeat 0 0; left:-8px; top:275px; width:663px; height:168px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:440px; top:90px; width:219px; height:74px; z-index:2;">facebook</a>
				<a class="full-link" href="/operation-osmin/">base link</a>			
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>			
		</li>		
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="http://www.facebook.com/nuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>  -->
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin3.png) no-repeat 0 0; left:-8px; top:275px; width:670px; height:168px;">
				<a href="http://www.facebook.com/OperationOsmin" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/operation-osmin/">base link</a>			
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_ML_1.png) no-repeat 0 0; left:-4px; top:282px; width:669px; height:161px;">
				<a href="http://www.facebook.com/ModelLatina" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/model-latina-las-vegas/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-GirlFight-v1.png) no-repeat 0 0; height: 161px; width: 335px; top: 345px; left: 362px;">
				<a href="http://www.facebook.com/nuvotv" style="left:93px; top:88px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/movies/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/movies/">base link</a>
			</div>
			<a class="full-link" href="/movies/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-ElMariachi2.png) no-repeat 0 0; height: 161px; left: 286px; width: 440px; top: 345px;">
				<a href="http://www.facebook.com/nuvotv" style="left:200px; top:93px; width:219px; height:74px; z-index:2;">facebook</a>
				<a class="full-link" href="/movies">base link</a>			
			</div>
			<a class="full-link" href="/movies">base link</a>			
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
					<a href="/operation-osmin/episodes.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get a Sneak Peek of Operation Osmin</h3>
						<p>Joe has it all: a loving wife and kids, a successful health food business, and, unfortunately, 30 extra pounds. Osmin recruits him for the hardest 30 days of  his life. <a href="/operation-osmin/episodes.php" class="no-break">Watch a sneak peek now!</a></p>
					</div>
				</li>
				<li>
					<a href="/series/la-law/features/" class="no-break"><img class="bordered media" src="/assets/images/spotlight/LAlaw-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Five Things You Didn't Know About L.A. Law</h3>
						<p>The lives and work of the staff of a major Los Angeles law firm were revealed in this hit TV drama, but what you didn't know were these fun facts. <a href="/series/la-law/features/" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/miami-ink/features" class="no-break"><img class="bordered media" src="/assets/images/spotlight/miamiInk-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Five Things to Consider Before You Get a Tattoo</h3>
						<p>Body art is a beautiful thing, but no one wants to end up with regrets. <a href="/series/miami-ink/features" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/find-nuvotv" class="no-break"><img class="bordered media" src="/assets/images/spotlight/findnuvoTV-Spotlight_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Do You Get nuvoTV? Find Out Now!</h3>
						<p>Find out if you get America's Nu Voice on your cable lineup. <a href="/find-nuvotv" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4-Spotlight_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Meet the Cast of Model Latina Las Vegas</h3>
						<p>We'll be revealing new cast members every Monday, so check back weekly to see who made the cut. Plus, don't forget to watch the 2-hour season premiere on Monday, Aug. 15th at 9/8c. <a href="/model-latina-vegas-cast/" class="no-break">Read More +</a></p>
					</div>
				</li>
			</ul>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/osmin_spotlight-thumb_75x40.png);"><a href="#" title="Operation Osmin">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/LAlaw-spotlight-thumb_75x40.png);"><a href="#" title="LA Law">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/miamiINK-thumb_75x40.png);"><a href="#" title="Miami Ink">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/thumb-find-nuvo.png);"><a href="#" title="Find nuvoTV">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/thumb-model-latina.png);"><a href="#" title="ML4 Week 2 Reveal">Link2</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/nuvoTV" width="370" height="495" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
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
				}).render().setUser('mynuvoTV').start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

} else {

	$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<!-- <div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin.jpg) no-repeat 0 0;"></div> 
		<div style="background:transparent url(/assets/images/heroes/home/_bg_CristinaCourt.jpg) no-repeat 0 0;"></div> -->
		<div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin-v6.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_ML_Vegas.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_El-Mariachi.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_ML_NYC.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<!-- <li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-Osmin.png);"></li> 
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-CristinaCourt.png);"></li> -->
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-OSMIN-v2.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-ML_Vegas.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-El_Mariachi.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-ML_NYC.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<!-- <li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin_2.png) no-repeat 0 0; left:-8px; top:275px; width:663px; height:168px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:440px; top:90px; width:219px; height:74px; z-index:2;">facebook</a>
				<a class="full-link" href="/operation-osmin/">base link</a>			
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>			
		</li>		
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MiamiInk.png) no-repeat 0 0; left:53px; top:263px; width:637px; height:182px;">
				<a href="http://www.facebook.com/nuvoTV" style="left:247px; top:104px; width:217px; height:72px; z-index:2;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>			
		</li>  -->
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin3.png) no-repeat 0 0; left:-8px; top:275px; width:670px; height:168px;">
				<a href="http://www.facebook.com/OperationOsmin" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/operation-osmin/">base link</a>			
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_ML_1.png) no-repeat 0 0; left:-4px; top:282px; width:669px; height:161px;">
				<a href="http://www.facebook.com/ModelLatina" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/model-latina-las-vegas/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-ElMariachi1.png) no-repeat 0 0; height: 161px; left: 286px; width: 440px; top: 345px;">
				<a href="http://www.facebook.com/nuvotv" style="left:200px; top:93px; width:219px; height:74px; z-index:2;">facebook</a>
				<a class="full-link" href="/movies">base link</a>			
			</div>
			<a class="full-link" href="/movies">base link</a>			
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-ML_NYC.png) no-repeat 0 0; left:-4px; top:282px; width:669px; height:161px;">
				<a href="http://www.facebook.com/ModelLatina" style="left:317px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/model-latina-nyc/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/model-latina-nyc/">base link</a>
			</div>
			<a class="full-link" href="/model-latina-nyc/">base link</a>
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
					<a href="/operation-osmin/episodes.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/osmin_Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get a Sneak Peek of Operation Osmin</h3>
						<p>Joe has it all: a loving wife and kids, a successful health food business, and, unfortunately, 30 extra pounds. Osmin recruits him for the hardest 30 days of  his life. <a href="/operation-osmin/episodes.php" class="no-break">Watch a sneak peek now!</a></p>
					</div>
				</li>
				<li>
					<a href="/series/la-law/features/" class="no-break"><img class="bordered media" src="/assets/images/spotlight/LAlaw-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Five Things You Didn't Know About L.A. Law</h3>
						<p>The lives and work of the staff of a major Los Angeles law firm were revealed in this hit TV drama, but what you didn't know were these fun facts. <a href="/series/la-law/features/" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/series/miami-ink/features" class="no-break"><img class="bordered media" src="/assets/images/spotlight/miamiInk-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Five Things to Consider Before You Get a Tattoo</h3>
						<p>Body art is a beautiful thing, but no one wants to end up with regrets. <a href="/series/miami-ink/features" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/find-nuvotv" class="no-break"><img class="bordered media" src="/assets/images/spotlight/findnuvoTV-Spotlight_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Do You Get nuvoTV? Find Out Now!</h3>
						<p>Find out if you get America's Nu Voice on your cable lineup. <a href="/find-nuvotv" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/model-latina-vegas-cast/" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4-Spotlight_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Meet the Cast of Model Latina Las Vegas</h3>
						<p>We'll be revealing new cast members every Monday, so check back weekly to see who made the cut. Plus, don't forget to watch the 2-hour season premiere on Monday, Aug. 15th at 9/8c. <a href="/model-latina-vegas-cast/" class="no-break">Read More +</a></p>
					</div>
				</li>
			</ul>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/osmin_spotlight-thumb_75x40.png);"><a href="#" title="Operation Osmin">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/LAlaw-spotlight-thumb_75x40.png);"><a href="#" title="LA Law">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/miamiINK-thumb_75x40.png);"><a href="#" title="Miami Ink">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/thumb-find-nuvo.png);"><a href="#" title="Find nuvoTV">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/thumb-model-latina.png);"><a href="#" title="ML4 Week 2 Reveal">Link2</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			<div class="facebook">
				<fb:like-box href="http://www.facebook.com/nuvoTV" width="370" height="495" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
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
				}).render().setUser('mynuvoTV').start();
				</script>
			</div>
		</div>
	</div>
EOCONTENT;

}
?>