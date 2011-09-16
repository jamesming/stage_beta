<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once('custom/functions.php');

if($_GET['live'] == 1) {
	require_once('db_include.php');
} else {
	require_once('db_include_stage.php');
}

        
		mysql_query("UPDATE custom_show_schedule SET archived = 1 WHERE archived = 0 ");

        $fp = fopen("SITVsc_E.csv","r");
        while (($data = fgetcsv($fp, 1000, ",")) !== FALSE) {

			$data = str_replace("‘", "'", $data);
			$data = str_replace("’", "'", $data);
			$data = str_replace("”", '"', $data);
			$data = str_replace("“", '"', $data);
			$data = str_replace("—", "-", $data);
			$data = str_replace("…", "...", $data);
			$data = str_replace("í", "&iacute;", $data);
			$data = str_replace("'", "\'", $data);
			$data = clean_html($data);
			$start_time = date('H:i', strtotime($data[0]));
			$end_time = date('H:i', strtotime($data[1]));
			$date = date('Y-m-d', strtotime($data[2]));
			if(date('H', strtotime($data[0])) < 6) {
				$date = date('Y-m-d', (strtotime($data[2]) + 86400));
			}
			$duration = $data[6];
			if(substr($duration, 0, 3) == '00:' || substr($duration, 0, 3) == '01:' || substr($duration, 0, 3) == '02:' || substr($duration, 0, 3) == '03:') {
				$duration = substr($duration, 1);
			}
			
			if(stristr($data[3], 'Adrenalina')) {
				$show_link = 'adrenalina';
				$genre = 'Sports';
			} else if(stristr($data[3], 'American Latino')) {
				$show_link = '';
				$genre = 'Variety';
			} else if(stristr($data[3], 'Breakfast Lunch and Dinner')) {
				$show_link = '';
				$genre = 'Talk Show';
			} else if(stristr($data[3], "Cristina\'s Court")) {
				$show_link = 'cristinas-court';
				$genre = 'Reality';
			} else if(stristr($data[3], 'Chicago Hope')) {
				$show_link = '';
				$genre = 'Drama';
			} else if(stristr($data[3], 'Dark Angel')) {
				$show_link = 'dark-angel';
				$genre = 'Drama';
			} else if(stristr($data[3], 'Drop Classics')) {
				$show_link = '';
				$genre = 'Music';
			} else if(stristr($data[3], 'Elle and Tito')) {
				$show_link = 'themarriedlife';
				$genre = 'Reality';
			} else if(stristr($data[3], 'Fame')) {
				$show_link = 'fame';
				$genre = 'Variety';
			} else if(stristr($data[3], 'Hill Street Blues')) {
				$show_link = 'hill-street-blues';
				$genre = 'Drama';
			} else if(stristr($data[3], 'In Living Color')) {
				$show_link = 'in-living-color';
				$genre = 'Comedy';
			} else if(stristr($data[3], 'LA Law')) {
				$show_link = 'la-law';
				$genre = 'Drama';
			} else if(stristr($data[3], 'LatiNation')) {
				$show_link = '';
				$genre = 'Variety';
			} else if(stristr($data[3], 'Latino 101')) {
				$show_link = 'latino-101-s2';
				$genre = 'Comedy';
			} else if(stristr($data[3], 'Latino Laugh Festival')) {
				$show_link = '';
				$genre = 'Comedy';
			} else if(stristr($data[3], 'Miami Ink')) {
				$show_link = 'miami-ink';
				$genre = 'Reality';
			} else if(stristr($data[3], 'Model Latina NYC')) {
				$show_link = 'model-latina-nyc';
				$genre = 'Reality';
			} else if(stristr($data[3], 'Model Latina Miami')) {
				$show_link = 'model-latina-miami';
				$genre = 'Reality';
			} else if(stristr($data[3], 'Model Latina')) {
				if(substr($data[11], 0, 3) == 'ML1') {
					$show_link = 'model-latina-la';
				} else if(substr($data[11], 0, 3) == 'ML2') {
					$data[3] = 'Model Latina Miami';
					$show_link = 'model-latina-miami';
				} else if(substr($data[11], 0, 3) == 'ML3') {
					$data[3] = 'Model Latina NYC';
					$show_link = 'model-latina-nyc';
				} else {
					$data[3] = 'Model Latina Las Vegas';
					$show_link = 'model-latina-las-vegas';
				}
				$genre = 'Reality';
			} else if(stristr($data[3], 'New York Undercover')) {
				$show_link = 'new-york-undercover';
				$genre = 'Drama';
			} else if(stristr($data[3], 'NYPD Blue')) {
				$show_link = '';
				$genre = 'Drama';
			} else if(stristr($data[3], 'Operation Osmin')) {
				$show_link = 'operation-osmin';
				$genre = 'Reality';
			} else if(stristr($data[3], 'Pastport')) {
				if(stristr($data[4], 'Venezuela')) {
					$show_link = 'pastport-venezuela';
				} else if(stristr($data[4], 'Argentina')) {
					$show_link = 'pastport-argentina';
				} else if(stristr($data[4], 'Colombia')) {
					$show_link = 'pastport-colombia';
				} else {
					$show_link = 'pastport-cuba';
				}
				$genre = 'Reality';
			} else if(stristr($data[3], 'Prison Break')) {
				$show_link = 'prison-break';
				$genre = 'Drama';
			} else if(stristr($data[3], 'Rub, The')) {
				$show_link = '';
				$genre = 'Talk Show';
			} else if(stristr($data[3], 'TV Cinema')) {
				$show_link = 'movies';
				$genre = 'Movies';
				$data[3] = str_replace(":", "", $data[3]);
			} else if(stristr($data[3], 'Styleyes')) {
				$show_link = '';
				$genre = 'Variety';
			} else if(stristr($data[3], 'SiTV Special')) {
				$show_link = '';
				$genre = 'Movies';
			} else {
				$show_link = '';
				$genre = '';
			}

			echo "INSERT INTO custom_show_schedule VALUES('', '$start_time', '$end_time', '$date', '$data[3]', '$data[4]', '$data[5]', '$duration', '$show_link', '$genre', 0) <br />";
			mysql_query("INSERT INTO custom_show_schedule VALUES('', '$start_time', '$end_time', '$date', '$data[3]', '$data[4]', '$data[5]', '$duration', '$show_link', '$genre', 0) ");
		}
		fclose($fp);
		
function test() {
//Get the upcoming 5 shows
$data = "http://webservices.titantvguide.titantv.com/contentblocks.asmx/NowShowing";
$encoded = "registrationKey=QUJkGZWGXcMKWs3mGg4DSHyViSfBisHn&showcount=4";
	$ch = curl_init($data);
		curl_setopt($ch, CURLOPT_POSTFIELDS,  $encoded);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);      
        curl_close($ch);
		$xml = str_replace("'", "\'", $output);

$tonightXML = simplexml_load_string($xml);
//print_r($tonightXML);

foreach($tonightXML->Channel->Show as $show) {
	$rating = $show->Rating;
	if(stristr($show->Title, 'Adrenalina')) {
		$show_link = 'adrenalina';
	} else if(stristr($show->Title, 'Elle and Tito: The Married Life')) {
		$show_link = 'themarriedlife';
	} else if(stristr($show->Title, 'In Living Color')) {
		$show_link = 'in-living-color';
	} else if(stristr($show->Title, 'Latino 101')) {
		$show_link = 'latino-101-s2';
	} else if(stristr($show->Title, 'Model Latina')) {
		$show_link = 'model-latina-nyc';
	} else if(stristr($show->Title, 'New York Undercover')) {
		$show_link = 'new-york-undercover';
	} else if(stristr($show->Title, 'Passport')) {
		$show_link = 'pastport-cuba';
	} else if(stristr($show->Title, 'Prison Break')) {
		$show_link = 'prison-break';
	} else {
		$show_link = '';
	}
	
	mysql_query("INSERT INTO show_schedule VALUES ('', '$show->Title', '$show->EpisodeTitle', '$show->Description', '$show->ShowType', '$show->DisplayGenre', '$rating[tv]',
	'$show[startDate]', '$show[startTime]', '$show[adjustedStartDate]', '$show[adjustedStartTime]', '$show[duration]', '$show_link', '$show[year]', 0, 0) ");
	
	echo "INSERT INTO show_schedule VALUES ('', '$show->Title', '$show->EpisodeTitle', '$show->Description', '$show->ShowType', '$show->DisplayGenre', '$rating[tv]',
	'$show[startDate]', '$show[startTime]', '$show[adjustedStartDate]', '$show[adjustedStartTime]', '$show[duration]', '$show_link', '$show[year]', 0, 0) ";
	
}

//Get the Prime Time shows
$data = "http://webservices.titantvguide.titantv.com/contentblocks.asmx/TonightOn";
$encoded = "registrationKey=QUJkGZWGXcMKWs3mGg4DSHyViSfBisHn&showcount=4";
	$ch = curl_init($data);
		curl_setopt($ch, CURLOPT_POSTFIELDS,  $encoded);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);      
        curl_close($ch);
		$xml = str_replace("'", "\'", $output);

$tonightXML = simplexml_load_string($xml);
//print_r($tonightXML);

foreach($tonightXML->Channel->Show as $show) {
	$rating = $show->Rating;
	if(stristr($show->Title, 'Adrenalina')) {
		$show_link = 'adrenalina';
	} else if(stristr($show->Title, 'Elle and Tito: The Married Life')) {
		$show_link = 'themarriedlife';
	} else if(stristr($show->Title, 'In Living Color')) {
		$show_link = 'in-living-color';
	} else if(stristr($show->Title, 'Latino 101')) {
		$show_link = 'latino-101-s2';
	} else if(stristr($show->Title, 'Model Latina')) {
		$show_link = 'model-latina-nyc';
	} else if(stristr($show->Title, 'New York Undercover')) {
		$show_link = 'new-york-undercover';
	} else if(stristr($show->Title, 'Passport')) {
		$show_link = 'pastport-cuba';
	} else if(stristr($show->Title, 'Prison Break')) {
		$show_link = 'prison-break';
	} else {
		$show_link = '';
	}
	
	mysql_query("INSERT INTO show_schedule VALUES ('', '$show->Title', '$show->EpisodeTitle', '$show->Description', '$show->ShowType', '$show->DisplayGenre', '$rating[tv]',
	'$show[startDate]', '$show[startTime]', '$show[adjustedStartDate]', '$show[adjustedStartTime]', '$show[duration]', '$show_link', '$show[year]', 1, 0) ");
	
	echo "INSERT INTO show_schedule VALUES ('', '$show->Title', '$show->EpisodeTitle', '$show->Description', '$show->ShowType', '$show->DisplayGenre', '$rating[tv]',
	'$show[startDate]', '$show[startTime]', '$show[adjustedStartDate]', '$show[adjustedStartTime]', '$show[duration]', '$show_link', '$show[year]', 1, 0) ";
	
}

require_once('db_include_stage.php');

//Get the upcoming 5 shows
$data = "http://webservices.titantvguide.titantv.com/contentblocks.asmx/NowShowing";
$encoded = "registrationKey=QUJkGZWGXcMKWs3mGg4DSHyViSfBisHn&showcount=4";
	$ch = curl_init($data);
		curl_setopt($ch, CURLOPT_POSTFIELDS,  $encoded);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);      
        curl_close($ch);
		$xml = str_replace("'", "\'", $output);

$tonightXML = simplexml_load_string($xml);
//print_r($tonightXML);

foreach($tonightXML->Channel->Show as $show) {
	$rating = $show->Rating;
	if(stristr($show->Title, 'Adrenalina')) {
		$show_link = 'adrenalina';
	} else if(stristr($show->Title, 'Elle and Tito: The Married Life')) {
		$show_link = 'themarriedlife';
	} else if(stristr($show->Title, 'In Living Color')) {
		$show_link = 'in-living-color';
	} else if(stristr($show->Title, 'Latino 101')) {
		$show_link = 'latino-101-s2';
	} else if(stristr($show->Title, 'Model Latina')) {
		$show_link = 'model-latina-nyc';
	} else if(stristr($show->Title, 'New York Undercover')) {
		$show_link = 'new-york-undercover';
	} else if(stristr($show->Title, 'Passport')) {
		$show_link = 'pastport-cuba';
	} else if(stristr($show->Title, 'Prison Break')) {
		$show_link = 'prison-break';
	} else {
		$show_link = '';
	}
	
	mysql_query("INSERT INTO show_schedule VALUES ('', '$show->Title', '$show->EpisodeTitle', '$show->Description', '$show->ShowType', '$show->DisplayGenre', '$rating[tv]',
	'$show[startDate]', '$show[startTime]', '$show[adjustedStartDate]', '$show[adjustedStartTime]', '$show[duration]', '$show_link', '$show[year]', 0, 0) ");
	
	echo "INSERT INTO show_schedule VALUES ('', '$show->Title', '$show->EpisodeTitle', '$show->Description', '$show->ShowType', '$show->DisplayGenre', '$rating[tv]',
	'$show[startDate]', '$show[startTime]', '$show[adjustedStartDate]', '$show[adjustedStartTime]', '$show[duration]', '$show_link', '$show[year]', 0, 0) ";
	
}

//Get the Prime Time shows
$data = "http://webservices.titantvguide.titantv.com/contentblocks.asmx/TonightOn";
$encoded = "registrationKey=QUJkGZWGXcMKWs3mGg4DSHyViSfBisHn&showcount=4";
	$ch = curl_init($data);
		curl_setopt($ch, CURLOPT_POSTFIELDS,  $encoded);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);      
        curl_close($ch);
		$xml = str_replace("'", "\'", $output);

$tonightXML = simplexml_load_string($xml);
//print_r($tonightXML);

foreach($tonightXML->Channel->Show as $show) {
	$rating = $show->Rating;
	if(stristr($show->Title, 'Adrenalina')) {
		$show_link = 'adrenalina';
	} else if(stristr($show->Title, 'Elle and Tito: The Married Life')) {
		$show_link = 'themarriedlife';
	} else if(stristr($show->Title, 'In Living Color')) {
		$show_link = 'in-living-color';
	} else if(stristr($show->Title, 'Latino 101')) {
		$show_link = 'latino-101-s2';
	} else if(stristr($show->Title, 'Model Latina')) {
		$show_link = 'model-latina-nyc';
	} else if(stristr($show->Title, 'New York Undercover')) {
		$show_link = 'new-york-undercover';
	} else if(stristr($show->Title, 'Passport')) {
		$show_link = 'pastport-cuba';
	} else if(stristr($show->Title, 'Prison Break')) {
		$show_link = 'prison-break';
	} else {
		$show_link = '';
	}
	
	mysql_query("INSERT INTO show_schedule VALUES ('', '$show->Title', '$show->EpisodeTitle', '$show->Description', '$show->ShowType', '$show->DisplayGenre', '$rating[tv]',
	'$show[startDate]', '$show[startTime]', '$show[adjustedStartDate]', '$show[adjustedStartTime]', '$show[duration]', '$show_link', '$show[year]', 1, 0) ");
	
	echo "INSERT INTO show_schedule VALUES ('', '$show->Title', '$show->EpisodeTitle', '$show->Description', '$show->ShowType', '$show->DisplayGenre', '$rating[tv]',
	'$show[startDate]', '$show[startTime]', '$show[adjustedStartDate]', '$show[adjustedStartTime]', '$show[duration]', '$show_link', '$show[year]', 1, 0) ";
	
}
}
?>