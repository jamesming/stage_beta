<?php     

$page->bodyClasses[] = "layout-ms section-photos page-photos  section-series";
include('top_part.php');
	
$showpage_items_photos = get_photos_items_from_show(
	$showpage_item_id = $showpage_items[0]['showpage_item_id']
);

/* PREPARE $galleries_thumbs_li */
		$galleries_thumbs_li = '';
		
		if( $showpage_items_photos!=''){
					foreach( $showpage_items_photos  as  $showpage_items_photo){
						
							$gallery_thumbs = get_thumb_photos(
								$showpage_item_id,
								$showpage_items_photo['id']
							);
			
						$galleries_thumbs_li =	$galleries_thumbs_li."<div>
																					<a href='#'>
																					<img class='bordered' src='http://cms.mynuvotv.com/uploads/showpage_photos_items_images/".$showpage_items[0]['showpage_item_id']."/".$showpage_items_photo['id']."/thumb/".$gallery_thumbs[0]."' />
																					".$showpage_items_photo['name']." 
																					</a><br />
																					</div>
																					";
					}			
		}else{
					$galleries_thumbs_li = '';
		};



/* PREPARE $set_of_images_li */

		$set_of_images_li = "";
		if( $showpage_items_photos!='' ){
			foreach(  $showpage_items_photos  as   $showpage_items_photo){

					$images = get_fullsize_photos(
						$showpage_item_id = $showpage_items[0]['showpage_item_id'],
						$showpage_photos_item_id = $showpage_items_photo['id']
					);
		
					$images_li = "";
					if( isset($images) && count($images) > 0){
							foreach( $images as  $image){
								$images_li = $images_li . "<img title='' alt=''  src='http://cms.mynuvotv.com/uploads/showpage_photos_items_images/".$showpage_items[0]['showpage_item_id']."/".$showpage_items_photo['id']."/fullsize/".$image."'>";
							}
					};	
					
					$set_of_images_li = $set_of_images_li . "
						<div class='black-box gallery block'>
							<h2>".$showpage_items_photo['name']."</h2>
					        <div class='galleria'>".$images_li."</div>
						</div>
					";
					
			}
		
		};

	$seriesBase = $showpage_items[0]['url_name'];
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/shows/$seriesBase">Show</a></li>
			<li><a href="/shows/$seriesBase/cast">Cast</a></li>
			<li><a href="/shows/$seriesBase/video">Video</a></li>
			<li><a href="/shows/$seriesBase/features">Features</a></li>
			<li class="active last"><a href="/shows/$seriesBase/photos">Photos</a></li>
		</ul>
	</div>
	<div class="main">
		{$set_of_images_li}
		<div class="ad ad-box"></div>
		<div class="facebook white-box block">
			<h2>Discussion</h2>
			<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:comments href="{$page->fullURL}" num_posts="4" width="460"></fb:comments>
		</div>

	</div>
	<div class="sidebar-right">
		<div class="galleries black-box block">
			<h2>Galleries</h2>
				{$galleries_thumbs_li}
		</div>
		<div class="ad ad-tall"></div>
	</div>
EOCONTENT;

?>	