

<?php     



$query = 	"SELECT
						carousel_sets_calendars.day_of_year,
						carousel_sets.name AS carousel_sets_name,
					 	carousel_items_sets.id  AS carousel_items_sets_id,
					 	carousel_items_sets.order,
					 	carousel_items.name AS 	carousel_items_name,
					 	carousel_items.page_link AS 	carousel_items_page_link,
					 	carousel_items.video_link AS 	carousel_items_video_link,
					 	carousel_items.facebook_link AS 	carousel_items_facebook_link,
					 	carousel_items.id AS carousel_items_id,
					 	carousel_items_images.id AS carousel_items_image_id
					 FROM 
					 	carousel_sets_calendars,
					 	carousel_sets,
					 	carousel_items_sets,
					 	carousel_items,
					 	carousel_items_images
					 WHERE
					 	carousel_sets.id = carousel_sets_calendars.carousel_set_id
					 AND
					 	carousel_sets_calendars.day_of_year <= ". $day_to_view ."
					 AND
					 	carousel_sets_calendars.year = ". $year_to_view ."
					 AND
					 	carousel_items_sets.carousel_set_id = carousel_sets.id
					 AND
					 	carousel_items.id = carousel_items_sets.carousel_item_id
					 AND
					 	carousel_items_images.carousel_item_id = carousel_items.id
					 OR
					 	carousel_sets.id = carousel_sets_calendars.carousel_set_id
					 AND
					 	carousel_sets_calendars.day_of_year <= 365
					 AND
					 	carousel_sets_calendars.year = ". $year_to_view_minus_one_year ."
					 AND
					 	carousel_items_sets.carousel_set_id = carousel_sets.id
					 AND
					 	carousel_items.id = carousel_items_sets.carousel_item_id
					 AND
					 	carousel_items_images.carousel_item_id = carousel_items.id
					 ORDER BY
					 	carousel_sets_calendars.day_of_year DESC,
					 	carousel_items_sets.id,
					 	carousel_items_sets.order,
					 	carousel_items_images.image_type_id ASC
					 LIMIT 0, 12
					 	";

$result = mysql_query($query);

//echo $query."<br />";exit;
					
while ($row = mysql_fetch_assoc($result)) {
	$sets[] = $row;
}


//echo '<pre>';print_r(  $sets  );echo '</pre>';  exit;

$previous_id = "";

//echo count($sets)."<br />";exit;
$count=0;
foreach( $sets  as  $set){
	$count++;
	if( $previous_id == $set['carousel_items_sets_id']	||
			$previous_id == ""
			){
		
			foreach( $set  as  $field => $value){
				
				$carousel_item[$field] = $set[$field];
				
				if( $field == 'carousel_items_image_id'){

					$image[] = $value;
				};
				
			};	
		$carousel_item['images'] = $image;			
		
	}else{
		

		$carousel_items[]=$carousel_item;			
		unset($image);


			foreach( $set  as  $field => $value){
				
				$carousel_item[$field] = $set[$field];
				
				if( $field == 'carousel_items_image_id'){

					$image[] = $value;
				};
				
			};					
		
	};
	
	
	
	if( $count ==  count($sets) ){
		
		$carousel_items[]=$carousel_item;

	};
	
	$previous_id = $set['carousel_items_sets_id'];		
};

//echo '<pre>';print_r(  $carousel_items );echo '</pre>';  exit;

echo $carousel_items[0]['carousel_items_id']."<br />";
echo $carousel_items[0]['carousel_items_page_link']."<br />";
echo $carousel_items[0]['carousel_items_video_link']."<br />";
echo $carousel_items[0]['carousel_items_facebook_link']."<br />";
echo $carousel_items[0]['images'][0]."<br />";
echo $carousel_items[0]['images'][1]."<br />";
echo $carousel_items[0]['images'][2]."<br />";




?>