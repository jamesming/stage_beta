<?php     



if( $_SERVER['HTTP_HOST'] == 'tv.localhost'  ){
	$host = "localhost";
//		$base_url = 'localhost/cms/';
$base_url = 'http://cms.mynuvotv.com/';
}else{
	$host = "192.168.110.211"; 
	$base_url = 'http://cms.mynuvotv.com/';
};




$user = "jamesming";  
$pw = "ourlady";     
$database = "mynuvotv_db";  


$db = mysql_connect($host,$user,$pw)
   or die("Cannot connect to mySQL.");

mysql_select_db($database,$db)
    or die("Cannot connect to database.");
    

    
if( $_GET['date'] ){
	
		$date_array = explode('-', $_GET['date']);
		$year_to_view = $date_array[0];
		$year_to_view_minus_one_year = $year_to_view - 1;
	 
		$day_to_view = date('z',  strtotime($_GET['date']));
		
}else{
		$year_to_view = date('Y');
		$year_to_view_minus_one_year = $year_to_view - 1;
		$day_to_view = date('z',  strtotime( date('Y').'-'.date('m').'-'.date('d') ));	
};


$query = 	"SELECT * 
					 FROM nu_spotlight_videos_calendars
					 WHERE
					 	nu_spotlight_videos_calendars.day_of_year <= ". $day_to_view ."
					 AND
					 	nu_spotlight_videos_calendars.year = ". $year_to_view ."
					 OR
					 	nu_spotlight_videos_calendars.day_of_year <= 365
					 AND
					 	nu_spotlight_videos_calendars.year = ". $year_to_view_minus_one_year ."
					 ORDER BY 
					 	nu_spotlight_videos_calendars.year DESC,
					 	nu_spotlight_videos_calendars.day_of_year DESC
					 LIMIT 0, 1
					 ";

$result = mysql_query($query);
		
while ($row = mysql_fetch_assoc($result)) {
	$video_contents[] = $row;
}


//echo '<pre>';print_r(  $video_contents );echo '</pre>';  exit;

$query = 	"SELECT
						nu_spotlight_sets_calendars.day_of_year,
						nu_spotlight_sets.name AS nu_spotlight_sets_name,
					 	nu_spotlight_items_sets.id  AS nu_spotlight_items_sets_id,
					 	nu_spotlight_items_sets.order,
					 	nu_spotlight_items.name AS 	nu_spotlight_items_name,
					 	nu_spotlight_items.title AS 	nu_spotlight_items_title,
					 	nu_spotlight_items.link AS 	nu_spotlight_items_link,
					 	nu_spotlight_items.launch AS 	nu_spotlight_items_launch,
					 	nu_spotlight_items.blurb AS 	nu_spotlight_items_blurb,
					 	nu_spotlight_items_images.id AS nu_spotlight_items_image_id
					 FROM 
					 	nu_spotlight_sets_calendars,
					 	nu_spotlight_sets,
					 	nu_spotlight_items_sets,
					 	nu_spotlight_items,
					 	nu_spotlight_items_images
					 WHERE
					 	nu_spotlight_sets.id = nu_spotlight_sets_calendars.nu_spotlight_set_id
					 AND
					 	nu_spotlight_sets_calendars.day_of_year <= ". $day_to_view ."
					 AND
					 	nu_spotlight_sets_calendars.year = ". $year_to_view ."
					 AND
					 	nu_spotlight_items_sets.nu_spotlight_set_id = nu_spotlight_sets.id
					 AND
					 	nu_spotlight_items.id = nu_spotlight_items_sets.nu_spotlight_item_id
					 AND
					 	nu_spotlight_items_images.nu_spotlight_item_id = nu_spotlight_items.id
					 OR
					 	nu_spotlight_sets.id = nu_spotlight_sets_calendars.nu_spotlight_set_id
					 AND
					 	nu_spotlight_sets_calendars.day_of_year <= 365
					 AND
					 	nu_spotlight_sets_calendars.year = ". $year_to_view_minus_one_year ."
					 AND
					 	nu_spotlight_items_sets.nu_spotlight_set_id = nu_spotlight_sets.id
					 AND
					 	nu_spotlight_items.id = nu_spotlight_items_sets.nu_spotlight_item_id
					 AND
					 	nu_spotlight_items_images.nu_spotlight_item_id = nu_spotlight_items.id
					 ORDER BY
					 	nu_spotlight_sets_calendars.day_of_year DESC,
					 	nu_spotlight_items_sets.id,
					 	nu_spotlight_items_sets.order,
					 	nu_spotlight_items_images.image_type_id ASC
					 LIMIT 0, 10
					 	";

$result = mysql_query($query);

//echo $query."<br />";exit;
					
while ($row = mysql_fetch_assoc($result)) {
	$sets[] = $row;
}


//echo '<pre>';print_r(  $sets  );echo '</pre>';  exit;

$previous_name = "";
foreach( $sets  as  $set){
	
	if( $previous_name != $set['nu_spotlight_items_sets_id']	){
		
			foreach( $set  as  $field => $value){
				
				$item[$field] = $set[$field];
				
				if( $field == 'nu_spotlight_items_image_id'){

					$image['feature'] = $value;
				};
				
			};	

		
	}else{
		
			foreach( $set  as  $field => $value){
				if( $field == 'nu_spotlight_items_image_id'){

					$image['thumb'] = $value;
				};
			};			
			$item['images'] = $image;
			unset($image);
			$items[]=$item;		
		
	};
	$previous_name = $set['nu_spotlight_items_sets_id'];		
};

//echo '<pre>';print_r(  $items );echo '</pre>';  exit;


//echo 'FIRST SPOT TITLE:' . $items[0]['nu_spotlight_items_title']."<br />";
//echo 'FIRST SPOT BLURB:' . $items[0]['nu_spotlight_items_blurb']."<br />";
//echo 'FIRST SPOT FEATURE:' . $items[0]['images']['feature']."<br />";
//echo 'FIRST SPOT THUMB:' . $items[0]['images']['thumb']."<br />";

?>
