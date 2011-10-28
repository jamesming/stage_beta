<?php     

if( $_SERVER['HTTP_HOST'] == 'tv.localhost'  ){
	$host = "localhost";
}else{
	$host = "192.168.110.211";
};


$user = "jamesming";  
$pw = "ourlady";     
$database = "mynuvotv_db";  

$db = mysql_connect($host,$user,$pw)
   or die("Cannot connect to mySQL.");

mysql_select_db($database,$db)
    or die("Cannot connect to database.");



$query = 	"SELECT *
					 FROM 
					 	showpage_items_images
					 WHERE
					 	showpage_items_images.showpage_item_id = 10
					 	";	

					 	
$result = mysql_query($query);

while ($row = mysql_fetch_assoc($result)) {
	$showpage_items_images[] = $row;
}

foreach( $showpage_items_images  as $showpage_items_image){
	if( $showpage_items_image['image_type'] == showpage_dropdown){
		$showpage_dropdown = $showpage_items_image['id'];
	};
	if( $showpage_items_image['image_type'] == showpage_title){
		$showpage_title = $showpage_items_image['id'];
	};
	if( $showpage_items_image['image_type'] == showpage_hero){
		$showpage_hero = $showpage_items_image['id'];
	};
}




?>

