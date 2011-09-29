<?
	
//	$page->title = "";
//	$page->description = "";
//	$page->keywords = "";
	
$page->template = "standard";

	$page->components["theme"]  = <<<EOTHEME
		<div style="background:transparent url(/assets/images/heroes/home/_bg_Osmin.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MLLV_ep409.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_MIAMIINK_v3.jpg) no-repeat 0 0;"></div>
		<div style="background:transparent url(/assets/images/heroes/home/_bg_FACTinos.jpg) no-repeat 0 0;"></div>
EOTHEME;

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-Osmin_white.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab_MLLV_ep409.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-MIAMIINKv3.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-FACTinos.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_Osmin_Tonight.png) no-repeat 0 0;  width: 669px; height: 161px; left: 75px; top: 270px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:200px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>		
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV_mondays.png) no-repeat 0 0; left:3px; top:270px; width:670px; height:170px;">
				<a target="_blank" href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-MIAMIINK-weeknights-6p.png) no-repeat 0 0; width: 637px; height: 182px; left: 250px; top: 274px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="width: 217px; height: 72px; z-index: 2; left: 124px; top: 84px;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>	
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/) no-repeat 0 0;  width: 669px; height: 161px; left: 75px; top: 270px;">
			<!--<a target="_blank" href="http://www.facebook.com/OperationOsmin" style="left:200px; top:84px; width:218px; height:73px; z-index:2;">facebook</a> -->
				<a href="http://bcove.me/muc1hw6u" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="http://bcove.me/muc1hw6u">base link</a>
			</div>
			<a class="full-link" href="http://bcove.me/muc1hw6u">base link</a>		
		</li>	
	</ul>
	
EOHERO;




include('includes/cms_prep.php'); 

//echo 'FIRST SPOT TITLE:' . $items[0]['nu_spotlight_items_title']."<br />";
//echo 'FIRST SPOT LINK:' . $items[0]['nu_spotlight_items_link']."<br />";
//echo 'FIRST SPOT BLURB:' . $items[0]['nu_spotlight_items_blurb']."<br />";
//echo 'FIRST SPOT FEATURE:' . $items[0]['images']['feature']."<br />";
//echo 'FIRST SPOT THUMB:' . $items[0]['images']['thumb']."<br />";


$nu_spotlight_li = "";
for($i=0; $i<=4; $i++){
	
		if( $items[$i]['nu_spotlight_items_launch'] == 1){
			$target = ' target=\"_blank\" ';
		}else{
			$target = ' ';
		};
	
		$nu_spotlight_li .= "
						<li>
							<a ". $target ." href=\"{$items[$i]['nu_spotlight_items_link']}\" class=\"no-break\"><img class=\"bordered media\" src=\"http://cms.mynuvotv.com/uploads/nu_spotlight_items_images/{$items[$i]['images']['feature']}/image.png\" /></a>
							<div class=\"copy\">
								<h2>Nu Spotlight</h2>
								<h3>{$items[$i]['nu_spotlight_items_title']}</h3>
								<p>{$items[$i]['nu_spotlight_items_blurb']}&nbsp;&nbsp;<a ". $target ." href=\"{$items[$i]['nu_spotlight_items_link']}\" class=\"no-break\">Read More +</a></p>
							</div>
						</li>
		";
};

	
	$page->components["content"] = <<<EOCONTENT
		
		
	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	<div class="b-spot block"   >
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
						<h3>Sins! Blues! Dreams! ...and Genes!</h3>
						<p>This week on nuvoTV the ladies of <i>Model Latina</i> explore the seven deadly sins --- hot!   If action-packed police drama is your thing, witness the Battle of the Blues!  Of course, the tattoos of <i>Miami Ink</i> are always in style, especially on the genetically-enhanced beauty of <i>Dark Angel</i>!</p>
					</div>
				</li>
				{$nu_spotlight_li}		
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;"><b>Click tabs for more spotlights.</b></div>
			<ul class="inline thumbs">
				<li id='video_player_link' style="background-image:url(/assets/images/spotlight/spotlight-thumb_video.png);"><a href="#" title="Whats' Nu!">Link2</a></li>
				<li style="background-image:url(/assets/uploads/nu_spotlight_items_images/{$items[0]['images']['thumb']}/image.png);"><a href="#" title="Exclusive Behind-the-Scenes footage">Link1</a></li>
				<li style="background-image:url(/assets/uploads/nu_spotlight_items_images/{$items[1]['images']['thumb']}/image.png);"><a href="#" title="Our Nu Store">Link2</a></li>				
				<li style="background-image:url(/assets/uploads/nu_spotlight_items_images/{$items[2]['images']['thumb']}/image.png);"><a href="#" title="Model Latina on Hulu">Link1</a></li>
				<li style="background-image:url(/assets/uploads/nu_spotlight_items_images/{$items[3]['images']['thumb']}/image.png);"><a href="#" title="Tweet with Us">Link1</a></li>
				<li style="background-image:url(/assets/uploads/nu_spotlight_items_images/{$items[4]['images']['thumb']}/image.png);"><a href="#" title="FREE T-Shirt">Link2</a></li>
			</ul>
			
		</div>
		<div class="ad ad-box"></div>
	</div>
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			
			
			<div   style='float:left;margin:-2px 0px 0px 0px;'  >

				
				
				<a target='_blank' href='http://www.facebook.com/OperationOsmin'>
					<div class="facebook"    style='height:562px' >
						
						<fb:like-box 
							href="http://www.facebook.com/OperationOsmin" 
							width="370" 
							height="550" 
							show_faces="true" 
							border_color="#fff" 
							stream="true" 
							header="false">
						</fb:like-box>
						
					</div>
				</a>				
			</div>


			<div   style='float:left;'  >
				
				<div  class='youtube_widget ' >
					<a target='_blank' href='http://www.youtube.com/user/mynuvoTV?feature=mhee'>
						<div  id='youtube_widget_top'   >
						</div>
					</a>
					<ul class="playlist">
					</ul>
					<div  id='youtube_widget_bottom'  class='clearfix ' >
						<a target='_blank' href='http://www.youtube.com/user/mynuvoTV?feature=mhee'>Watch our YouTube Channel</a>
					</div>	
				</div>
				
				<!--  
				<div  id='player_div'>
					<div  id='close_button'>
						close[x]
					</div>
					<iframe  
						id='youtube_iframe' 
						src='' 
						frameborder='0' 
						allowfullscreen >
					</iframe>	
				</div>
				-->
				
				
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
					  height: 370,
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
	</div>
EOCONTENT;


?>