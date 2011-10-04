
<?php     
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
?>