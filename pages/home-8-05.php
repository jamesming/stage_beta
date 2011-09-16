<?
	
//	$page->title = "";
//	$page->description = "";
//	$page->keywords = "";
	
$now = time();

$tue = strtotime("August 2, 2011 8:00am");
	
$wed = strtotime("August 3, 2011 8:00am");

$thu = strtotime("August 4, 2011 8:00am");

$fri = strtotime("August 5, 2011 8:00am");

if($_GET[tue]) {
	$now = strtotime("August 2, 2011 8:01am");
}

if($_GET[wed]) {
	$now = strtotime("August 3, 2011 8:01am");
}

if($_GET[thu]) {
	$now = strtotime("August 4, 2011 8:01am");
}

if($_GET[fri]) {
	$now = strtotime("August 5, 2011 8:01am");
}

if($now < $tue) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<!-- <div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin.jpg) no-repeat 0 0;"></div> 
		<div style="background:transparent url(/assets/images/heroes/home/_bg_CristinaCourt.jpg) no-repeat 0 0;"></div> -->
		<div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MiamiInk.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_ML_Vegas2.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_ML_NYC3.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<!-- <li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-Osmin.png);"></li> 
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-CristinaCourt.png);"></li> -->
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-Osmin.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MiamiInk.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-ML_Vegas-v3.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-ML_NYC.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin7.png) no-repeat 0 0; left:-8px; top:275px; width:670px; height:168px;">
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
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-ML_NYC2.png) no-repeat 0 0; width: 669px; height: 161px; left: 0px; top: 280px;">
				<a href="http://www.facebook.com/ModelLatina" style="left:200px; top:91px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/series/model-latina-nyc/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/series/model-latina-nyc/">base link</a>
			</div>
			<a class="full-link" href="/series/model-latina-nyc/">base link</a>
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
					<a href="/model-latina-vegas-cast/" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4-Spotlight_w4_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Meet the Final Model Latina Cast Members!</h3>
						<p>It's the moment you've all been waiting for. Meet the cast of the sexiest show ever, and don't forget to watch the 2-hour season premiere on Monday, Aug. 15th at 9/8c. <a href="/model-latina-vegas-cast/" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/nu-stuff" class="no-break"><img class="bordered media" src="/assets/images/spotlight/downloads-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Download Your Very Own nuvoTV Wallpaper!</h3>
						<p>Be the cool kid in town with these nuvoTV-inspired desktop designs. <a href="/nu-stuff" class="no-break">Read More +</a></p>
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
				<li>
					<a href="/model-latina-las-vegas/" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4-Spotlight_w5_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Up Close and Personal With the Nu Models</h3>
						<p>Meet the final 17 contestants of Model Latina Las Vegas. <a href="/model-latina-las-vegas/" class="no-break">Watch their profile videos now!</a></p>
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
			</ul>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/MLLV_w4_thmb.png);"><a href="#" title="ML4 Week 4 Reveal">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/downloads_thmb.png);"><a href="#" title="Download Wallpaper">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/nowcasting_thmb.png);"><a href="#" title="Osmin">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/MLLV_w5_thmb.png);"><a href="#" title="Model Latina">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/thumb-find-nuvo.png);"><a href="#" title="Find nuvoTV">Link1</a></li>
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

} else if($now < $wed) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<!-- <div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin.jpg) no-repeat 0 0;"></div> 
		<div style="background:transparent url(/assets/images/heroes/home/_bg_CristinaCourt.jpg) no-repeat 0 0;"></div> -->
		<div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MiamiInk.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_ML_Vegas2.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_CristinaCourt.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<!-- <li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-Osmin.png);"></li> 
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-CristinaCourt.png);"></li> -->
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-Osmin.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MiamiInk.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-ML_Vegas-v3.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-CristinaCourt.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin5.png) no-repeat 0 0; left:-8px; top:275px; width:670px; height:168px;">
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
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_CristinaCourt2.png) no-repeat 0 0; left:190px; top:290px; width:663px; height:168px;">
				<a class="full-link" href="/series/cristinas-court/">base link</a>			
			</div>
			<a class="full-link" href="/series/cristinas-court/">base link</a>			
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
					<a href="/model-latina-vegas-cast/" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4-Spotlight_w4_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Meet the Final Model Latina Cast Members!</h3>
						<p>It's the moment you've all been waiting for. Meet the cast of the sexiest show ever, and don't forget to watch the 2-hour season premiere on Monday, Aug. 15th at 9/8c. <a href="/model-latina-vegas-cast/" class="no-break">Read More +</a></p>
					</div>
				</li>
				<li>
					<a href="/nu-stuff" class="no-break"><img class="bordered media" src="/assets/images/spotlight/downloads-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Download Your Very Own nuvoTV Wallpaper!</h3>
						<p>Be the cool kid in town with these nuvoTV-inspired desktop designs. <a href="/nu-stuff" class="no-break">Read More +</a></p>
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
				<li>
					<a href="/model-latina-las-vegas/" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4-Spotlight_w5_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Get Up Close and Personal With the Nu Models</h3>
						<p>Meet the final 17 contestants of Model Latina Las Vegas. <a href="/model-latina-las-vegas/" class="no-break">Watch their profile videos now!</a></p>
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
			</ul>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/MLLV_w4_thmb.png);"><a href="#" title="ML4 Week 4 Reveal">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/downloads_thmb.png);"><a href="#" title="Download Wallpaper">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/nowcasting_thmb.png);"><a href="#" title="Osmin">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/MLLV_w5_thmb.png);"><a href="#" title="Model Latina">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/thumb-find-nuvo.png);"><a href="#" title="Find nuvoTV">Link1</a></li>
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

} else if($now < $thu) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<!-- <div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin.jpg) no-repeat 0 0;"></div> 
		<div style="background:transparent url(/assets/images/heroes/home/_bg_CristinaCourt.jpg) no-repeat 0 0;"></div> -->
		<div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin5.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MiamiInk.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_ML_Vegas2.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_NYPDblue.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<!-- <li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-Osmin.png);"></li> 
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-CristinaCourt.png);"></li> -->
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/DREW-home-tabs.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MiamiInk.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-ML_Vegas-v3.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-NYPDblue.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin6.png) no-repeat 0 0; left:3px; top:306px; width:670px; height:168px;">
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
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-NYPDBlue1.png) no-repeat 0 0; width: 669px; height: 161px; left: 300px; top: 305px;">
				<a href="http://www.facebook.com/nuvoTV" style="left:200px; top:91px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/movies" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
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
					<a href="/series/latino-101-s2" class="no-break"><img class="bordered media" src="/assets/images/spotlight/LATINO101-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Laugh Your Class Off With Latino 101</h3>
						<p>Get schooled on everything Latino by our hilarious panel of experts, including Last Comic Standing winner Felipe Esparza, the "Most Latina Man in the World" Edward James Olmos, and Charo (yes, the Charo!) <a href="/series/latino-101-s2" class="no-break">Read More +</a></p>
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
				<li>
					<a href="/model-latina-vegas-cast/" class="no-break"><img class="bordered media" src="/assets/images/spotlight/ML4-Spotlight_w4_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Meet the Final Model Latina Cast Members!</h3>
						<p>It's the moment you've all been waiting for. Meet the cast of the sexiest show ever, and don't forget to watch the 2-hour season premiere on Monday, Aug. 15th at 9/8c. <a href="/model-latina-vegas-cast/" class="no-break">Read More +</a></p>
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
			</ul>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/osmin_spotlight-thumb_75x40.png);"><a href="#" title="Operation Osmin">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/latino101_s2_thmb_.png);"><a href="#" title="Latino 101">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/nowcasting_thmb.png);"><a href="#" title="Osmin">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/MLLV_w4_thmb.png);"><a href="#" title="ML4 Week 4 Reveal">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/thumb-find-nuvo.png);"><a href="#" title="Find nuvoTV">Link1</a></li>
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

} else if($now < $fri) {

$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<!-- <div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin.jpg) no-repeat 0 0;"></div> 
		<div style="background:transparent url(/assets/images/heroes/home/_bg_CristinaCourt.jpg) no-repeat 0 0;"></div> -->
		<div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin5.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MiamiInk.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_ML_Vegas2.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_LAlaw.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<!-- <li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-Osmin.png);"></li> 
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-CristinaCourt.png);"></li> -->
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/DREW-home-tabs.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MiamiInk.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-ML_Vegas-v3.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-LA-Law.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin6.png) no-repeat 0 0; left:3px; top:306px; width:670px; height:168px;">
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
					<a href="/misc/referafriend.php" class="no-break"><img class="bordered media" src="/assets/images/spotlight/t-shirt-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Want to rock a super cool limited edition T-shirt?</h3>
						<p>Of course you do! Share these videos with your friends and we'll send you one. <a href="/misc/referafriend.php" class="no-break">Read More +</a></p>
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
					<a href="/nu-stuff" class="no-break"><img class="bordered media" src="/assets/images/spotlight/downloads-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Download Your Very Own nuvoTV Wallpaper!</h3>
						<p>Be the cool kid in town with these nuvoTV-inspired desktop designs. <a href="/nu-stuff" class="no-break">Read More +</a></p>
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
				<li>
					<a href="/find-nuvotv" class="no-break"><img class="bordered media" src="/assets/images/spotlight/findnuvoTV-Spotlight_238x218.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Do You Get nuvoTV? Find Out Now!</h3>
						<p>Find out if you get America's Nu Voice on your cable lineup. <a href="/find-nuvotv" class="no-break">Read More +</a></p>
					</div>
				</li>				
			</ul>
			<ul class="inline thumbs">	
				<li style="background-image:url(/assets/images/spotlight/Osmin5-thumb_75x40.png);"><a href="#" title="ML4 Week 4 Reveal">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/downloads_thmb.png);"><a href="#" title="Download Wallpaper">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/MLLV_w5_thmb.png);"><a href="#" title="Model Latina">Link1</a></li>				
				<li style="background-image:url(/assets/images/spotlight/nowcasting_thmb.png);"><a href="#" title="Osmin">Link1</a></li>
				<li style="background-image:url(/assets/images/spotlight/thumb-find-nuvo.png);"><a href="#" title="Find nuvoTV">Link1</a></li>
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
		<div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin5.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MiamiInk.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_ML_Vegas2.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_InLivingColor.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<!-- <li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-Osmin.png);"></li> 
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-CristinaCourt.png);"></li> -->
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/DREW-home-tabs.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-MiamiInk.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-ML_Vegas-v3.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-InLivingColor.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin6.png) no-repeat 0 0; left:3px; top:306px; width:670px; height:168px;">
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
					<a href="/nu-stuff" class="no-break"><img class="bordered media" src="/assets/images/spotlight/downloads-Spotlight_240x220.jpg" /></a>
					<div class="copy">
						<h2>Nu Spotlight</h2>
						<h3>Download Your Very Own nuvoTV Wallpaper!</h3>
						<p>Be the cool kid in town with these nuvoTV-inspired desktop designs. <a href="/nu-stuff" class="no-break">Read More +</a></p>
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
				<li style="background-image:url(/assets/images/spotlight/t-shirt-thumb_75x40.png);"><a href="#" title="T-shirt Giveaway">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/Osmin5-thumb_75x40.png);"><a href="#" title="ML4 Week 4 Reveal">Link2</a></li>
				<li style="background-image:url(/assets/images/spotlight/downloads_thmb.png);"><a href="#" title="Download Wallpaper">Link1</a></li>
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