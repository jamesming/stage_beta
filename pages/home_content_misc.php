		<div class="featured white-box block">
			<ul class="unstyled featured-list">	
				
				
				<li  id='video_player_li'>
					<div  id='video_player_div'  style='
						float:left;
						width:242px;
						height:222px;
						'  >



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
				<li id='video_player_link' style="display:none;background-image:url(/assets/images/spotlight/spotlight-thumb_video.png);"><a href="#" title="Whats' Nu!">Link2</a></li>
				<li style="background-image:url({$base_url}uploads/nu_spotlight_items_images/{$nu_spotlight_items[0]['images']['thumb']}/image.png);"><a href="#" title="{$nu_spotlight_items[0]['nu_spotlight_items_title']}">Link1</a></li>
				<li style="background-image:url({$base_url}uploads/nu_spotlight_items_images/{$nu_spotlight_items[1]['images']['thumb']}/image.png);"><a href="#" title="{$nu_spotlight_items[1]['nu_spotlight_items_title']}">Link2</a></li>				
				<li style="background-image:url({$base_url}uploads/nu_spotlight_items_images/{$nu_spotlight_items[2]['images']['thumb']}/image.png);"><a href="#" title="{$nu_spotlight_items[2]['nu_spotlight_items_title']}">Link1</a></li>
				<li style="background-image:url({$base_url}uploads/nu_spotlight_items_images/{$nu_spotlight_items[3]['images']['thumb']}/image.png);"><a href="#" title="{$nu_spotlight_items[3]['nu_spotlight_items_title']}">Link1</a></li>
				<li style="background-image:url({$base_url}uploads/nu_spotlight_items_images/{$nu_spotlight_items[4]['images']['thumb']}/image.png);"><a href="#" title="{$nu_spotlight_items[4]['nu_spotlight_items_title']}">Link2</a></li>
			</ul>
			
		</div>