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
	$episode_title = getvar("episode_title"); // optional.. for now applies only to the Pastport Series

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

?>