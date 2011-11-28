<?php     

$showpage_items_features = get_showpage_front_feature(
	$showpage_item_id 
);

$showpage_title = ( $showpage_items_features!=''? $showpage_items_features[0]['title']:'' );
$showpage_items_feature_id = ( $showpage_items_features!=''? $showpage_items_features[0]['showpage_items_feature_id']:'' );
$short_version= ( $showpage_items_features!=''? $showpage_items_features[0]['short_version']:'' );


if( isset( $showpage_items[1]['hulu_url']) && $showpage_items[1]['hulu_url'] !=''){
	$hulu = $showpage_items[1]['hulu_url'];
	$hulu_li ="<li><a target='_blank'  class='hulu' href=".$hulu.">hulu</a></li>";
}else{
	$hulu_li = '';
};

if( isset( $showpage_items[1]['getglue_url']) && $showpage_items[1]['getglue_url'] !=''){
	$getglue = $showpage_items[1]['getglue_url'];
	$getglue_li ="<li><a target='_blank'  class='getglue' href=".$getglue.">getglue</a></li>";
}else{
	$getglue_li = '';
};

$showpage_items_casts = get_showpage_front_casts(
	$showpage_item_id
);

$showpage_items_photos = get_photos_items_from_show(
	$showpage_item_id = $showpage_items[0]['showpage_item_id']
);



$images = get_thumb_photos(	
	$showpage_item_id = $showpage_items[0]['showpage_item_id'],
	$showpage_photos_item_id = ( !empty($showpage_items_photos) ? $showpage_items_photos[0]['id']:0 )
);





if(!empty($showpage_items_photos) ){
			$images_div = "
					<style>
						.photos img{
							width:146px;
							float:left;
						}
					</style>
					<div class='col photos'>
						<img class='bordered' src='http://cms.mynuvotv.com/uploads/showpage_photos_items_images/".$showpage_items[0]['showpage_item_id']."/".$showpage_items_photos[0]['id']."/thumb/".$images[0]."' />
						<img class='bordered' src='http://cms.mynuvotv.com/uploads/showpage_photos_items_images/".$showpage_items[0]['showpage_item_id']."/".$showpage_items_photos[0]['id']."/thumb/".$images[1]."' />
					</div>
					<div class='last col photos'>
						<img class='bordered' src='http://cms.mynuvotv.com/uploads/showpage_photos_items_images/".$showpage_items[0]['showpage_item_id']."/".$showpage_items_photos[0]['id']."/thumb/".$images[2]."' />
						<img class='bordered' src='http://cms.mynuvotv.com/uploads/showpage_photos_items_images/".$showpage_items[0]['showpage_item_id']."/".$showpage_items_photos[0]['id']."/thumb/".$images[3]."' />
					</div>			
			";	
}else{
			$images_div = "";
};




	$page->bodyClasses[] = "layout-s2mb  section-series";
	include('top_part.php');

	$list='';
	foreach( $showpage_items_casts  as $showpage_items_cast){

	
		$list=$list."
				<li class='last block'>
				<img class='bordered media' src='http://cms.mynuvotv.com/uploads/showpage_cast_items_images/".$showpage_items_cast['showpage_cast_items_image_id']."/image.png' />
					<div class='copy'>
						<div class='meta'>
							<h3>".$showpage_items_cast['name']."</h3>
						</div>
						<p>".$showpage_items_cast['short_content']."</p>
					</div>
				</li>";	
   
	}
	
	


	$seriesBase = $showpage_items[0]['url_name'];
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="active first"><a href="/shows/$seriesBase">Show</a></li>
			<li><a href="/shows/$seriesBase/cast">Cast</a></li>
			<li><a href="/shows/$seriesBase/video">Video</a></li>
			<li><a href="/shows/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/shows/$seriesBase/photos">Photos</a></li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="schedule block">
			<h2>Schedule</h2>
		</div>
		<div class="about white-box block">
			<h2>About</h2>
			<p>{$showpage_items[0]['about']}</p>
		</div>
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="featured white-box block">
			<h2>{$showpage_title}</h2>

			<img class='bordered media' src='http://cms.mynuvotv.com/uploads/showpage_feature_items_images/{$showpage_items_feature_id}/image.png' />
			<div class="copy">
				<p>{$short_version}</p>
				<p><a href="/shows/{$seriesBase}/features" class="no-break">Read More +</a></p>
			</div>
		</div>
		<div class="discussion white-box block">
			<h2>Discussion</h2>
			<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:comments href="{$page->fullURL}" num_posts="4" width="420"></fb:comments>
		</div>
		<div class="cast padded-box block">
			<h2>Meet the Cast</h2>
			<ul class="unstyled">{$list}</ul>
			<a class="sub-page-more" href="/shows/$seriesBase/cast">See the entire cast +</a>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="social block">
			<h2>Find {$showpage_items[0]['name']} on</h2>
			<ul class="inline">
				<li><a target='_blank' class="facebook" href="{$showpage_items[1]['facebook_url']}">facebook</a></li>
				<li><a target='_blank'  class="twitter" href="{$showpage_items[1]['twitter_url']}">twitter</a></li>
				{$hulu_li}
				{$getglue_li}
				<!--  <li class="last"><a target="_blank" class="hulu" href="http://www.hulu.com/pastport">hulu</a></li>-->
			</ul>			
		</div>		
		<div class="facebook block">
			<fb:like-box href="{$showpage_items[1]['facebook_url']}" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
		<div class="photos block">
			<h2>Photos</h2>{$images_div}
			<a   style='clear:both'  class="sub-page-more" href="/shows/$seriesBase/photos">See all photos +</a>
		</div>		
	</div>
EOCONTENT;


