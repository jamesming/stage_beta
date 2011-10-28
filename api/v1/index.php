<?php

//	enable error reporting for staging environment
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	// define the schedule table
	define('TABLE_SCHEDULE','custom_show_schedule');

	/**********************************************************************
	*  ezSQL initialisation for mySQL
	*/

	// Include ezSQL core
	include_once "lib/ez_sql_core.php";

	// Include ezSQL database specific component
	include_once "lib/ez_sql_mysql.php";

	// Initialise database object and establish a connection
	// at the same time - db_user / db_password / db_name / db_host
	$db_user = "transuser";
	$db_pass = "SiTV!!tr4nsus3r2009";
	$db_name = "sitv_tn_mynuvotv";
	$db_host = "192.168.110.211";

	$db = new ezSQL_mysql($db_user, $db_pass, $db_name, $db_host, true);


	$method = getvar("method");		// required for every api method
	$callback = getvar("callback");		// optional callback method, called by client-side javascript when the JSON is returned
	$page = getvar("page");			// optional page number for paging of schedule, if page is sent page_size becomes required
	$page_size = getvar("page_size");	// optional for use with paging or to limit number of records returned for a single call

	if ( $method == "getScheduleByDate" ) {
		$query = getScheduleByDate();
	} else if ( $method == "getScheduleByDateRange" ) {
		$query = getScheduleByDateRange();
	} else if ( $method == "getScheduleByTimeRange" ) {
		$query = getScheduleByTimeRange();
	} else if ( $method == "getScheduleByTitle" ) {
		$query = getScheduleByTitle();
	} else if ( $method == "getScheduleByGenre" ) {
		$query = getScheduleByGenre();
	} else {
		// error, unknown method provided
		$query = false;
	}

	if ( !$page && $page_size ) {
		// limit results to page_size records
		$query = $query . " LIMIT " . $page_size;
	} else if ( $page && $page_size ) {
		// limit results to page_size records starting with page
		$page = $page * $page_size;	// ex. client is retrieving 30 records per page and is on page 2 (zero based pages)  page 0: (0 - 29), page 1: (30 - 59), page 2: (60 - 89) 
		$query = $query . " LIMIT " . $page . ", " . $page_size;
	} else if ( $page && !$page_size ) {
		// error, page given without page_size
		$query = false;
	}

	if ( !$query ) {
		// there's been an error, return an empty array for now
		$schedule = array();
	} else {
		// query built successfully, get results
		$schedule = $db->get_results($query);

		if ( !$schedule ) {
			// query produced an empty results set, return an empty array
			$schedule = array();
		}
	}


	if( getvar("timezone") ){

		$skip_show = FALSE;		
		$schedule = object_to_array($schedule);
		
		switch (getvar("timezone")) {
			
	    case 'E':  // eastern time
	    
	    	$revised_schedule = $schedule;
	    
	    break;
			
	    case 'C':  // central time
	    
	    		$hours_different_from_eastern_timezone = 1;
	    		
					$skip_time_Array = array(
						'00:00',
						'00:30'
					);

					foreach( $schedule  as  $key => $show){
						
						if( $show['show_date'] == getvar("start_date")
						){

								$show_container = skip_shows_earlier_than_zones_west_of_eastern_USA(
									$number_of_hours_behind = $hours_different_from_eastern_timezone,
									$show,
									$skip_time_Array
								);
								
								
								if( !$show_container['skip_show'] ){
									$revised_schedule[] = $show_container['revised_show'];
								};
		
						}
						else{

								$revised_show =  add_shows_for_timezones_earlier_than__zones_west_of_eastern_USA(
									$number_of_hours_ahead  = 24 - $hours_different_from_eastern_timezone ,
									$show,
									$skip_time_Array
								);
								
								if( $revised_show ) $revised_schedule[] = $revised_show;


						}
						
					}
				 
	    break;
	    
	    case 'M':  // mountain time
	    
	    		$hours_different_from_eastern_timezone = 2;

					foreach( $schedule  as  $key => $show){
						
						$skip_time_Array = array(
							'00:00',
							'00:30',
							'01:00',
							'01:30'
						);
												
						
						
						if( $show['show_date'] == getvar("start_date")
						){

								
								$show_container = skip_shows_earlier_than_zones_west_of_eastern_USA(
									$number_of_hours_behind = $hours_different_from_eastern_timezone,
									$show,
									$skip_time_Array
								);
								
								
								if( !$show_container['skip_show'] ){
									$revised_schedule[] = $show_container['revised_show'];
								};
		
						}
						else{

								$revised_show =  add_shows_for_timezones_earlier_than__zones_west_of_eastern_USA(
									$number_of_hours_ahead  = 24 - $hours_different_from_eastern_timezone ,
									$show,
									$skip_time_Array
								);
								
								if( $revised_show ) $revised_schedule[] = $revised_show;


						}
						
					}
				 
	    break;
	    
	    case 'P':  // pacific time
	
					$hours_different_from_eastern_timezone = 3;
											    
					foreach( $schedule  as  $key => $show){
						
						$skip_time_Array = array(
							'00:00',
							'00:30',
							'01:30',
							'02:00',
							'02:30'
						);						
						
						
						if( $show['show_date'] == getvar("start_date")
						){

								$show_container = skip_shows_earlier_than_zones_west_of_eastern_USA(
									$number_of_hours_behind = $hours_different_from_eastern_timezone,
									$show,
									$skip_time_Array
								);
								
								
								if( !$show_container['skip_show'] ){
									$revised_schedule[] = $show_container['revised_show'];
								};
		
						}
						else{

								$revised_show =  add_shows_for_timezones_earlier_than__zones_west_of_eastern_USA(
									$number_of_hours_ahead  = 24 - $hours_different_from_eastern_timezone ,
									$show,
									$skip_time_Array
								);
								
								if( $revised_show ) $revised_schedule[] = $revised_show;


						}
						
					};

	    
	    break;	   
	     
	  };

		$schedule = $revised_schedule;
		
	
	};
	
	
//	echo '<pre>';print_r(  $schedule );echo '</pre>';  exit;

	if ( !$callback ) {
		// no callback given, return in JSON format
		header('Cache-Control: no-cache, must-revalidate');
		header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
		header('Content-type: application/json');
		echo json_encode($schedule);
	} else {
		// client sent a callback name so wrap our JSON in the function and return as x-javascript
		$javascript = $callback . "(" . json_encode($schedule) . ")";
		header('Cache-Control: no-cache, must-revalidate');
		header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
		header('Content-type: application/x-javascript');
		echo $javascript;
	}

	die();


function add_shows_for_timezones_earlier_than__zones_west_of_eastern_USA(
	$number_of_hours_ahead ,
	$show,
	$skip_time_Array
){
	
			if (  in_array( $show['start_time'], $skip_time_Array)  ) {		
								
					foreach( $show as  $key => $value){
					
							if( $key == 'start_time' ||  $key == 'end_time'){

								$revised_show[$key] = revise_show_time(
																				$direction = 'ahead',
																				$time = $value,
																				$number_of_hours_ahead
																			);
							
							}else{
								$revised_show[$key] = $value;
							};
							
						
					};
			
				return $revised_show;
				
			};		
								
		
	
}

function skip_shows_earlier_than_zones_west_of_eastern_USA(
	$number_of_hours_behind,
	$show,
	$skip_time_Array
){
	
								$skip_show = FALSE;
								
								foreach( $show as  $key => $value){
									
										if( $key == 'start_time' ||  $key == 'end_time'){

												foreach( $skip_time_Array  as $skip_time){
													if($key   == 'start_time' && 
														 $value == $skip_time 
													) {
														$skip_show = TRUE;
													};
												}
								
												$revised_show[$key] = revise_show_time(
																								$direction = 'behind',
																								$time = $value,
																								$number_of_hours_behind
																							);
										
										}else{
											$revised_show[$key] = $value;
										};
			
								}
								
								$show_container['revised_show'] = $revised_show;
								$show_container['skip_show'] = $skip_show;

								return $show_container;

}


function revise_show_time(
	$direction = 'ahead',
	$time,
	$number_of_hours = 1
){
							$time_array   = explode(':', $time); // $time_array[0] is the hour eg: '06' in 06:30
																									 // $time_array[1] is the minute eg: '30' in 06:30						
							if( $direction == 'ahead'){
								$new_hour  = $time_array[0] + $number_of_hours;	
							}elseif( $direction == 'behind'){
								$new_hour  = $time_array[0] - $number_of_hours;	
							};

							if( strlen($new_hour) < 2  ){ // if the hour consist of one characters just prepend a '0'
								$new_hour  = '0' . $new_hour;
							};
							
							return $new_hour . ':' . $time_array[1];
}



function object_to_array($data){
if(is_array($data) || is_object($data)){
  $result = array(); 
  foreach($data as $key => $value)
  { 
    $result[$key] = object_to_array($value); 
  }
  return $result;
}
return $data;
}

// api functions
function getScheduleByDate() {
	global $db;
	$date = getvar("date");	// optional, if not provided defaults to today's date

	if ( $date  ) {
		// date given, return schedule for show_date
		$query = "SELECT * FROM " . TABLE_SCHEDULE . " WHERE show_date = '" . $date .  "' AND archived = 0 ORDER BY start_time ASC";
	} else if ( !$date ) {
		// no date given, default to today's date
		$query = "SELECT * FROM " . TABLE_SCHEDULE . " WHERE show_date = CURDATE() AND archived = 0 ORDER BY start_time ASC";
	} else {
		// error, invalid date format
		$query = false;
	}
	return $query;
}

function getScheduleByDateRange() {
	global $db;
	$start_date = getvar("start_date");	// required
	$end_date = getvar("end_date");		// required

	if ( $start_date && $end_date ) {
		// date range given, return schedule from start_date to end_date, order by show_date first, then start_time
		$query = "SELECT * FROM " . TABLE_SCHEDULE . " WHERE show_date >= '" . $start_date .  "' AND show_date <= '" . $end_date . "' AND archived = 0 ORDER BY show_date, start_time ASC";
	} else if ( !$start_date || !$end_date ) {
		// error, missing start_date and/or end_date
		$query = false;

	} else {
		// error, invalid date format
		$query = false;
	}
	return $query;
}

function getScheduleByTimeRange() {
	global $db;
	$start_time = getvar("start_time");	// required
	$end_time = getvar("end_time");		// required
	$date = getvar("date");			// optional, if not provided defaults to today's date

	if ( $start_time && $end_time && !$date ) {
		// start and end times given without date, return schedule from start_time to end_time, default to today's date, order by start_time
		$query = "SELECT * FROM " . TABLE_SCHEDULE . " WHERE start_time >= '" . $start_time .  "' AND start_time < '" . $end_time . "' AND show_date = CURDATE() AND archived = 0 ORDER BY start_time ASC";
	} else if ( $start_time && $end_time && $date ) {
		// start and end times given with date, return schedule from start_time to end_time on the date given, order by start_time
		$query = "SELECT * FROM " . TABLE_SCHEDULE . " WHERE start_time >= '" . $start_time .  "' AND start_time < '" . $end_time . "' AND show_date = '" . $date .  "' AND archived = 0 ORDER BY start_time ASC";
	} else if ( !$start_date || !$end_date ) {
		// error, missing start_time and/or end_time
		$query = false;

	} else {
		// error, invalid date format
		$query = false;
	}
	return $query;
}

function getScheduleByTitle() {
	global $db;
	$title = getvar("title");	// required
	$episode_title = getvar("episode_title");	// required
	
	if( $episode_title ){
		$add_where_episode_title = " AND episode_title = '".$episode_title."'";
	}else{
		$add_where_episode_title = "";
	};
	
	if ( $title ) {
		// no dates given, default to listing all scheduled airings of this show
		$query = "SELECT * FROM " . TABLE_SCHEDULE . " WHERE title = '" . $title . "' ".$add_where_episode_title." AND archived = 0 AND show_date >= CURDATE() ORDER BY show_date, start_time ASC";
	} else {
		// error, missing title
		$query = false;
	}
	
	

	return $query;
}

function getScheduleByGenre() {
	global $db;
	$genre = getvar("genre");	// required

	if ( $genre ) {
		// no dates given, default to listing all scheduled airings of this show
		$query = "SELECT * FROM " . TABLE_SCHEDULE . " WHERE genre = '" . $genre . "' AND archived = 0 ORDER BY show_date, start_time ASC";
	} else {
		// error, missing genre
		$query = false;
	}
	return $query;
}


// utility functions
function getvar($name, $default = false) {
	global $db;
	return (isset($_GET[$name]) && !empty($_GET[$name])) ? $db->escape($_GET[$name]) : $default;
}

