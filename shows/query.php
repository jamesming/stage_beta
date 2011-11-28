<?php


function get_showpage_item_id_from_show($show){
	
	$query = 	"SELECT id
						 FROM
						 	showpage_items
						 WHERE
						 	url_name = '".$show."'";
						 	
	$result = mysql_query($query);
	
	return mysql_fetch_assoc($result);

}

function get_showpage_items(
	$showpage_item_id
){
	$query = 	"SELECT 
							showpage_items.id as showpage_item_id,
							showpage_items.url_name,
							showpage_items.name,
							showpage_items.title,
							showpage_items.about,
							showpage_items.video_embed,
							showpage_items.getglue_url,
							showpage_items_images.id as showpage_items_image_id,
							showpage_items_images.image_type_id,
							showpage_items_images.image_type,
							showpage_items.hulu_url,
							facebook_url,
							twitter_url,
							showpage_title_left_margin,
							showpage_items_images.width,
							showpage_items_images.height,
							showpage_items_images.facebook_top,
							showpage_items_images.facebook_left,
							showpage_items_images.facebook_width,
							showpage_items_images.facebook_height,
							showpage_items_images.video_top,
							showpage_items_images.video_left,
							showpage_items_images.video_width,
							showpage_items_images.video_height,
							showpage_items_images.facebook_link,
							showpage_items_images.video_link
						 FROM
						 	showpage_items,
						 	showpage_items_images
						 WHERE
						 	showpage_items_images.showpage_item_id = $showpage_item_id
						 AND
						 	showpage_items.id = showpage_items_images.showpage_item_id
						 ORDER BY
						  showpage_items_images.image_type_id
						 	";	
	
						 	
	$result = mysql_query($query);
	
	while ($row = mysql_fetch_assoc($result)) {
		$showpage_items[] = $row;
	}

	return $showpage_items;
};   
     
function get_showpage_front_feature($showpage_item_id){

	$query = 	"SELECT
							title, 
							short_version,  
							showpage_feature_items_images.id as showpage_items_feature_id
						 FROM 
						 	showpage_feature_items,
						 	showpage_feature_items_images
						 WHERE
						 	showpage_feature_items.id = showpage_feature_items_images.showpage_feature_item_id
						 AND
						 	showpage_feature_items.showpage_item_id = $showpage_item_id
						 AND showpage_feature_items_images.image_type_id = 15
						 	";	
						 	
	$result = mysql_query($query);
	
	while ($row = mysql_fetch_assoc($result)) {
		$showpage_items_features[] = $row;
	}
	
	
	
	return ( isset( $showpage_items_features) ? $showpage_items_features :'' );

}

function get_showpage_front_casts($showpage_item_id){
	
	$query = 	"SELECT 
							name,
							short_content, 
							showpage_cast_items_images.id as  showpage_cast_items_image_id
						 FROM 
						 	showpage_cast_items,
						 	showpage_cast_items_images
						 WHERE
						 	showpage_cast_items.id = showpage_cast_items_images.showpage_cast_item_id
						 AND
						 	showpage_cast_items.showpage_item_id = $showpage_item_id
						 AND showpage_cast_items_images.show_on_showpage = 1
						 ORDER BY showpage_cast_items_images.order";				 	
	
	
				 	
	$result = mysql_query($query);
	
	while ($row = mysql_fetch_assoc($result)) {
		$showpage_items_casts[] = $row;
	}



	return ( isset( $showpage_items_casts) ? $showpage_items_casts: array() );
}


function get_casts($showpage_item_id){
	$query = 	"SELECT 
							name,
							content, 
							showpage_cast_items_images.id as  showpage_cast_items_image_id
						 FROM 
						 	showpage_cast_items,
						 	showpage_cast_items_images
						 WHERE
						 	showpage_cast_items.id = showpage_cast_items_images.showpage_cast_item_id
						 AND
						 	showpage_cast_items.showpage_item_id = $showpage_item_id
						 AND showpage_cast_items_images.image_type_id = 13
						 ORDER BY showpage_cast_items_images.order";				 	
	
	
				 	
	$result = mysql_query($query);

	while ($row = mysql_fetch_assoc($result)) {
		$showpage_items_casts[] = $row;
	}
	
	return $showpage_items_casts;
}


function get_features(
$showpage_item_id
){
	$query = 	"SELECT 
							title,
							content, 
							showpage_feature_items_images.id as  showpage_feature_items_image_id
						 FROM 
						 	showpage_feature_items,
						 	showpage_feature_items_images
						 WHERE
						 	showpage_feature_items.id = showpage_feature_items_images.showpage_feature_item_id
						 AND
						 	showpage_feature_items.showpage_item_id = $showpage_item_id
						 AND 
						 	showpage_feature_items_images.image_type_id = 16
						 	";					 	
	
	
				 	
	
						 	
	$result = mysql_query($query);
	
	while ($row = mysql_fetch_assoc($result)) {
		$showpage_items_features[] = $row;
	}
	return 	( isset( $showpage_items_features) ? $showpage_items_features:'');
}


function get_photos_items_from_show(
$showpage_item_id
){
	$query = 	"SELECT 
							name, id
						 FROM 
						 	showpage_photos_items
						 WHERE
						 	showpage_item_id = ".$showpage_item_id."
						 ORDER BY showpage_photos_items.order ASC
						 	";			 	

	$result = mysql_query($query);

	while ($row = mysql_fetch_assoc($result)) {
		$showpage_items_photos[] = $row;
	}
	return 	( isset($showpage_items_photos ) ? $showpage_items_photos:'' );
}


function get_fullsize_photos(
	$showpage_item_id,
	$showpage_photos_item_id
){
		$images_raw  = scandir("showpage_photos_items_images/".$showpage_item_id."/".$showpage_photos_item_id."/fullsize");
		
		for($i=2;$i<count($images_raw);$i++){
			
			$images[] = $images_raw[$i];
		}
		
		return $images;
}



function get_thumb_photos(
	$showpage_item_id,
	$showpage_photos_item_id
){
	
		/* showpage_photos_items_images in an alias in the shows directory.  It points to /uploads/showpage_photos_items_images
		*/
	
	
		if($showpage_photos_item_id != 0 ){
			
			$images_raw  = scandir("showpage_photos_items_images/".$showpage_item_id."/".$showpage_photos_item_id."/thumb");
			for($i=2;$i<count($images_raw);$i++){
				
				$image_information = getimagesize("showpage_photos_items_images/".$showpage_item_id."/".$showpage_photos_item_id."/thumb/".$images_raw[$i]);
				
				$width_of_file = $image_information[0];
				$height_of_file = $image_information[1];
				if( $width_of_file > $height_of_file){
					$images[] = $images_raw[$i];
				};
				
			}	
			
		};
	

		

		return ( isset( $images) ? $images:array());
}


?>
