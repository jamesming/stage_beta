<?php     


$nu_spotlight_li = "";
for($i=0; $i<=4; $i++){
	
		if( $nu_spotlight_items[$i]['nu_spotlight_items_launch'] == 1){
			$target = ' target=\"_blank\" ';
		}else{
			$target = ' ';
		};
	
		$nu_spotlight_li .= "
						<li>
							<a ". $target ." href=\"{$nu_spotlight_items[$i]['nu_spotlight_items_link']}\" class=\"no-break\"><img class=\"bordered media\" src=\"{$base_url}uploads/nu_spotlight_items_images/{$nu_spotlight_items[$i]['images']['feature']}/image.png\" /></a>
							<div class=\"copy\">
								<h2>Nu Spotlight</h2>
								<h3>{$nu_spotlight_items[$i]['nu_spotlight_items_title']}</h3>
								<p>{$nu_spotlight_items[$i]['nu_spotlight_items_blurb']}&nbsp;&nbsp;<a ". $target ." href=\"{$nu_spotlight_items[$i]['nu_spotlight_items_link']}\" class=\"no-break\">Read More +</a></p>
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
<!--
By use of this code snippet, I agree to the Brightcove Publisher T and C
found at http://corp.brightcove.com/legal/terms_publisher.cfm.
-->

<script language="JavaScript" type="text/javascript" src="http://admin.brightcove.com/js/BrightcoveExperiences.js"></script>
<script type="text/javascript" src="http://admin.brightcove.com/js/APIModules_all.js"></script>

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

<!-- End of Brightcove Player -->


					</div>
					<div class="copy">
						<h2>What's NU...</h2>
						<h3>{$video_contents[0]['title']}</h3>
						<p>{$video_contents[0]['blurb']}</p>
					</div>
				</li>
				{$nu_spotlight_li}		
			</ul>
			<div style="bottom: 60px; position: absolute; left: 268px;"><b>Click tabs for more spotlights.</b></div>
			<ul class="inline thumbs">
				<li id='video_player_link' style="background-image:url(/assets/images/spotlight/spotlight-thumb_video.png);"><a href="#" title="Whats' Nu!">Link2</a></li>
				<li style="background-image:url({$base_url}uploads/nu_spotlight_items_images/{$nu_spotlight_items[0]['images']['thumb']}/image.png);"><a href="#" title="Exclusive Behind-the-Scenes footage">Link1</a></li>
				<li style="background-image:url({$base_url}uploads/nu_spotlight_items_images/{$nu_spotlight_items[1]['images']['thumb']}/image.png);"><a href="#" title="Our Nu Store">Link2</a></li>				
				<li style="background-image:url({$base_url}uploads/nu_spotlight_items_images/{$nu_spotlight_items[2]['images']['thumb']}/image.png);"><a href="#" title="Model Latina on Hulu">Link1</a></li>
				<li style="background-image:url({$base_url}uploads/nu_spotlight_items_images/{$nu_spotlight_items[3]['images']['thumb']}/image.png);"><a href="#" title="Tweet with Us">Link1</a></li>
				<li style="background-image:url({$base_url}uploads/nu_spotlight_items_images/{$nu_spotlight_items[4]['images']['thumb']}/image.png);"><a href="#" title="FREE T-Shirt">Link2</a></li>
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