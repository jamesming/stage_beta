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
 
if( isset($_GET['date']) && $_GET['date'] ){
	
		$date_array = explode('-', $_GET['date']);
		$year_to_view = $date_array[0];
		$year_to_view_minus_one_year = $year_to_view - 1;
	 
		$day_to_view = date('z',  strtotime($_GET['date']));
		
}else{
		$year_to_view = date('Y');
		$year_to_view_minus_one_year = $year_to_view - 1;
		$day_to_view = date('z',  strtotime( date('Y').'-'.date('m').'-'.date('d') ));	
};

include('cms_prep_whats_nu_video.php');
include('cms_prep_nu_spotlight.php');
include('cms_prep_nu_carousel.php');

?>
