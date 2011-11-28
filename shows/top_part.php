<?php     
	$page->title = $showpage_items[0]['title'];
	$page->template = "standard";
	
	$random = rand(5,124314);

		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">
		</div>
EOTHEME;

	$showpage_items_image_id = ( isset( $showpage_items[2]['showpage_items_image_id']) ? $showpage_items[2]['showpage_items_image_id']:'' );
	$facebook_link = ( isset( $showpage_items[2]['facebook_link']) ? $showpage_items[2]['facebook_link']:'' );
	$video_link = ( isset( $showpage_items[2]['video_link']) ? $showpage_items[2]['video_link']:'' );
	
	$facebook_width = ( isset( $showpage_items[2]['facebook_width']) ? $showpage_items[2]['facebook_width']:'' );
	$facebook_height = ( isset( $showpage_items[2]['facebook_height']) ? $showpage_items[2]['facebook_height']:'' );
	$video_width = ( isset( $showpage_items[2]['video_width']) ? $showpage_items[2]['video_width']:'' );
	$video_height = ( isset($showpage_items[2]['video_height'] ) ? $showpage_items[2]['video_height']:'' );
	
	$facebook_top = ( isset( $showpage_items[2]['facebook_top']) ? $showpage_items[2]['facebook_top']:'' );
	$facebook_left = ( isset( $showpage_items[2]['facebook_left']) ? $showpage_items[2]['facebook_left']:'' );
	$video_top = ( isset( $showpage_items[2]['video_top']) ? $showpage_items[2]['video_top']:'' );
	$video_left = ( isset( $showpage_items[2]['video_left']) ? $showpage_items[2]['video_left']:'' );	
	
	
	if( $facebook_link != ''){
		$facebook_hotspot = "<a href='".$facebook_link."' target='_blank'  style='z-index:2;top:".$facebook_top."px;left:".$facebook_left."px;width:".$facebook_width."px;height:".$facebook_height."px;border:0px solid white'  >&nbsp;</a>";
	}else{
		$facebook_hotspot = "";
	};

	if( $video_link !='' ){
			$video_hotspot = "<a  href='".$video_link."'   style='z-index:1;top:".$video_top."px;left:".$video_left."px;width:".$video_width."px;height:".$video_height ."px;border:0px solid white'  >&nbsp;</a>";
	}else{
			$video_hotspot = "";
	};

	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(http://cms.mynuvotv.com/uploads/showpage_items_images/{$showpage_items_image_id}/image.png?random={$random}) no-repeat 0 0; left:{$showpage_items[1]['showpage_title_left_margin']}px; top:96px; width:563px; height:121px;">{$facebook_hotspot}{$video_hotspot}</div>
	
<style>
.section-index .theme div { 
	background: transparent url(http://cms.mynuvotv.com/uploads/showpage_items_images/{$showpage_items[0]['showpage_items_image_id']}/image.png?random={$random}) no-repeat; 
	}
	
</style>
	
EOHERO;
