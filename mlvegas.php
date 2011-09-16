<?php

//ini_set('display_errors', 1);
//error_reporting(E_ALL);
	
require_once('custom/functions.php');

if($_GET[login] == 1) {
	if(!(($_POST[email] == 'sauspitz' && $_POST[password] == 'auspitzs') OR ($_POST[email] == 'mbraga' && $_POST[password] == 'bragam') OR ($_POST[email] == 'mperez-brown' && $_POST[password] == 'perez-brownm') OR ($_POST[email] == 'sjones' && $_POST[password] == 'joness') OR ($_POST[email] == 'sjimenez' && $_POST[password] == 'jimenezs'))) {
		$error = 'Password Invalid. Please Try Again.';
	} else {
		setcookie("user[email]", $_POST[email], time()+360000);
		setcookie("user[pass]", $_POST[password], time()+360000);
		header('Location: /mlvegas.php');
	}
}

//Passwords
//sauspitz - auspitzs
//mbraga - bragam
//mperez-brown - perez-brownm
//sjones - joness
//sjimenez - jimenezs

$email = $_COOKIE['user']['email']; //gets the user from the cookies
$pass = $_COOKIE['user']['pass']; //gets the pass from cookies

if(!(($email == 'sauspitz' && $pass == 'auspitzs') OR ($email == 'mbraga' && $pass == 'bragam') OR ($email == 'mperez-brown' && $pass == 'perez-brownm') OR ($email == 'sjones' && $pass == 'joness') OR ($email == 'sjimenez' && $pass == 'jimenezs'))) {
?>
	<body style="background-color: #FFF9C9;">
	<div align="center" style="float: left; text-align: center; margin-left: 5%;">
		<div style="height: 275px; overflow: hidden; float: left;">
			<img src="http://www.sitv.com/sites/all/themes/sitv/images/casting2011/bg.jpg" style="padding-top: 20px;" />
		</div>
		<div class="model_submissions_container" align="center" style="width: 1000px; padding-bottom: 200px; float: left;">
			<div style="height: 300px; width: 500px; background-color: #FFF9C9; margin-top: 50px; padding-top: 50px; height: 200px; font-size: 20px;">
				<form name="registration" method="post" action="mlvegas.php?login=1">
					<div class="login_box">
					<label for="email">Username:</label><br />
					<input type="text" name="email" id="email" />
					</div>
					<div class="login_box">
					<label for="lname">Password:</label><br />
					<input type="password" name="password" id="password" />
					</div>
					
					<div align="center" class="login_button">
					<input type="submit" name="submit" value="Submit" />
					</div>
					
					<input type="hidden" name="action" value="login" />
				</form>
				<div style="float: left; text-align: center; width: 500px; padding-top: 20px;">
					<?= $error?>
				</div>	
			</div>
			
<?		
} else {

	require_once('db_include.php');
	require_once('simpleImage.php');

	?>

		<script type="text/javascript" src="/misc/jquery.js?e"></script>
		<link rel="stylesheet" href="misc/prettyphoto/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
		<script src="misc/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
				$("a[rel^='prettyPhoto']").prettyPhoto();
			});
		</script>
		<style>
		img {
			border: none;
		}

		a {
			color: #4C4C4C;
			text-decoration: none;
		}

		a:hover {
			text-decoration: underline;
		}

		.model_pic {
			margin-left: 8px;
		}

		.model_pic:hover
		{

		}
		</style>
		<body style="background-color: #FFF9C9;">
		<div align="center" style="float: left; text-align: center; margin-left: 5%;">
<?
		if(!$_GET[doc]) {
?>
			<div style="height: 275px; overflow: hidden; float: left;">
				<img src="http://www.sitv.com/sites/all/themes/sitv/images/casting2011/bg.jpg" style="padding-top: 20px;" />
			</div>
<?				
		}
?>				
			<div class="model_submissions_container" align="center" style="width: 1000px; padding-bottom: 200px; float: left;">
<?
		if(!$_GET[doc]) {
?>
				<div id="quickSearch" style="float: right; margin-top: 20px;">
					<form method="post" name="modelSearch" action="mlvegas.php">
						<input type="hidden" name="search" value="1" />
						Search: <input type="text" name="searchBox" id="searchBox" /><input type="submit" value="Search" />
					</form>
<?
					if($_GET[action] == 'browseFull') {
						echo '<a style="margin-top: 10px; float: right; text-decoration: underline;" href="?action=browse">Browse Thumbnails</a><br /><br />';
						if($_GET[deactivated]) {
							echo '<a style="margin-top: 10px; float: right; text-decoration: underline;" href="?action=browseFull">Active Profiles</a>';
						} else {
							echo '<a style="margin-top: 10px; float: right; text-decoration: underline;" href="?action=browseFull&deactivated=1">Deactivated Profiles</a>';
						}
						echo '<br /><br /><span style="margin-top: 10px; float: right;">&nbsp;(Word Doc)</span><a style="margin-top: 10px; float: right; text-decoration: underline;" href="?doc=1">Download All Profiles</a>';
					} else {
						echo '<a style="margin-top: 10px; float: right; text-decoration: underline;" href="?action=browseFull">Browse Full Profiles</a><br /><br />';
						if($_GET[deactivated]) {
							echo '<a style="margin-top: 10px; float: right; text-decoration: underline;" href="?action=browseFull">Active Profiles</a>';
						} else {
							echo '<a style="margin-top: 10px; float: right; text-decoration: underline;" href="?action=browseFull&deactivated=1">Deactivated Profiles</a>';
						}
						echo '<br /><br /><span style="margin-top: 10px; float: right;">&nbsp;(Word Doc)</span><a style="margin-top: 10px; float: right; text-decoration: underline;" href="?doc=1">Download All Profiles</a>';
					}
?>				
				</div>
<?	
		}
	
	if($_GET[decline]) {
		mysql_query("UPDATE `webform_submitted_data` SET data = 'declined' WHERE nid = 33236 AND sid = $_GET[decline] AND cid = 24 ");
		echo '<div style="padding-top: 20px; font-size: 20px; color: red;">This entry has been deactivated.</div>';
		$_GET[id] = $_GET[decline];
	}
	
	if($_GET[undecline]) {
		mysql_query("UPDATE `webform_submitted_data` SET data = '' WHERE nid = 33236 AND sid = $_GET[undecline] AND cid = 24 ");
		echo '<div style="padding-top: 20px; font-size: 20px; color: red;">This entry has been reactivated.</div>';
		$_GET[id] = $_GET[undecline];
	}
	
	if($_GET[id]) {
		
		if($_POST[comments]) {
			$q = mysql_query("SELECT * FROM `webform_submitted_data` WHERE `nid` = 33236 AND sid = $_GET[id] AND cid = 25 ");
			if($old = mysql_fetch_assoc($q)) {
				mysql_query("UPDATE `webform_submitted_data` SET data = CONCAT('$old[data]', '$_POST[comments]') WHERE nid = 33236 AND sid = $_GET[id] AND cid = 25 ");
				//echo "UPDATE `webform_submitted_data` SET data = CONCAT('$old[data]', '$_POST[comments]') WHERE nid = 33236 AND sid = $_GET[id] AND cid = 25 ";
			} else {
				mysql_query("INSERT INTO `webform_submitted_data` VALUES(33236, $_GET[id], 25, 0, '$_POST[comments]') ");
			}
		}
		$q = mysql_query("SELECT * FROM `webform_submitted_data` WHERE `nid` = 33236 AND sid = $_GET[id] ORDER by cid ");
			
		while ($data = mysql_fetch_assoc($q)) {
			if($data[cid] >= 1 AND $data[cid] <= 14) {
				if($data[cid] == 1) {
					//$info .= 'Name: '.$data[data]." ";
					$name .= $data[data]." ";
					$title .= $data[data]." ";
				} else if($data[cid] == 2) {
					//$info .= $data[data].'<br />';
					if($data[sid] > 1713) {
						$name .= $data[data].' (Official Contestant)<br />';
					} else if($data[sid] > 1542) {
						$name .= $data[data].' (2nd Casting Batch)<br />';
					} else {
						$name .= $data[data].'<br />';
					}
					$title .= $data[data].'<br />';
				} else if($data[cid] == 3) {
					$info .= 'Email: <a href="mailto:'.$data[data].'">'.$data[data].'</a><br />';
				} else if($data[cid] == 4) {
					$info .= 'Birthdate: '.date('m/d/Y', strtotime($data[data]))." Age: ".floor((time() - strtotime($data[data])) / 31556926)."<br />";
				} else if($data[cid] == 5) {
					if(strstr($data[data], "-")) {
						$info .= 'Phone: '.$data[data]."<br />";
						} else if(strlen(trim($data[data])) == 10) {
						$info .= 'Phone: '.substr($data[data], 0, 3)."-".substr($data[data], 3, 3)."-".substr($data[data], 6)."<br />";
						} else if(strlen(trim($data[data])) == 7) {
						$info .= 'Phone: '.substr($data[data], 0, 3)."-".substr($data[data], 3)."<br />";
					} else {
						$info .= 'Phone: '.$data[data]."<br />";
					}
				} else if($data[cid] == 6) {
					if(strstr($data[data], "-")) {
						$info .= 'Cell: '.$data[data]."<br />";
						} else if(strlen(trim($data[data])) == 10) {
						$info .= 'Cell: '.substr($data[data], 0, 3)."-".substr($data[data], 3, 3)."-".substr($data[data], 6)."<br />";
						} else if(strlen(trim($data[data])) == 7) {
						$info .= 'Cell: '.substr($data[data], 0, 3)."-".substr($data[data], 3)."<br />";
					} else {
						$info .= 'Cell: '.$data[data]."<br />";
					}
				} else if($data[cid] == 7) {
					$info .= 'Address: '.$data[data]."<br />";
				} elseif($data[cid] == 8) {
					$city = explode(" ", trim($data[data]));
					foreach($city as $word) {
						$info .= strtoupper(substr($word, 0, 1)).strtolower(substr($word, 1))." ";
						$title .= strtoupper(substr($word, 0, 1)).strtolower(substr($word, 1))." ";
					}
					$info = substr_replace($info, ", ", -1);
					$title = substr_replace($title, ", ", -1);
				} else if($data[cid] == 9) {
					$info .= strtoupper($data[data])." ";
					$title .= strtoupper($data[data]);
				} else if($data[cid] == 10) {
					$info .= strtoupper($data[data])."<br />";
				} else if($data[cid] == 11) {
					$info .= "Height: ".$data[data]."<br />";
				} else if($data[cid] == 12) {
					$info .= "Weight: ".$data[data]."<br />";
				} else if($data[cid] == 13) {
					$info .= "Measurements: ".$data[data]."<br />";
				} else if($data[cid] == 14) {
					$about .= $data[data]."<br />";
				} else {
					//$info .= strtoupper(substr($data[data], 0, 1)).strtolower(substr($data[data], 1))." ";
				}
			}
			
			if($data[cid] == 15 OR $data[cid] == 16) {
				$pq = mysql_query("SELECT * FROM `files` WHERE fid = $data[data] ");
				$pic = mysql_fetch_assoc($pq);
				$ext = substr($pic[filepath], -4);
				$thumb = str_replace($ext, "_tn_large$ext", str_replace("casting2011/", "casting2011/thumbs/", $pic[filepath]));
				if(!file_exists($thumb)) {	   
				   $image = new SimpleImage();
				   $image->load($pic[filepath]);
				   $image->resize(240,400);
				   $image->save($thumb);
				}
				$pics .= '<a href="http://www.sitv.com/'.$pic[filepath].'" title="'.str_replace("<br />", " - ", $title).'" rel="prettyPhoto[gallery'.$data['sid'].']">
							<img class="model_pic" src="http://www.sitv.com/'.$thumb.'" height="400" /></a>';
				if($data[cid] == 16) {
					//$pics .= '<br /><br />';
				}
			}
			
			if($data[cid] == 18 && $data[data] != '') {
				if(strstr($data[data], 'http')) {
					$info .= 'Video: <a target="_blank" style="" href="'.$data[data].'">'.$data[data].'</a><br />';
				} else {
					$info .= 'Video: <a target="_blank" style="" href="http://www.google.com/search?q='.$data[data].'">'.$data[data].'</a><br />';
				}
				
			}

			if($data[cid] == 17 && $data[data] != '') {
				$mq = mysql_query("SELECT * FROM `files` WHERE fid = $data[data] ");
				$vid = mysql_fetch_assoc($mq);
				$info .= 'Video: <a target="_blank" style="" href="http://www.sitv.com/'.$vid[filepath].'">'.$vid[filename].'</a><br />';
				
			}  
			
			if($data[cid] == 24) {
				if(!$_GET[doc]) {
					if($data[data] == 'declined') {
						$info .= '<br /><br /><a href="?undecline='.$_GET[id].'">Reactivate This Entry</a>';
					} else {
						$info .= '<br /><br /><a href="?decline='.$_GET[id].'">Deactivate This Entry</a>';
					}
					$info .= '<br /><br /><a href="?id='.$_GET[id].'&doc=1">Download as Word Document</a>';
				}
				
				$html .= '<div style="width: 1000px; padding: 10px; float: left;"><div style="width: 900px; padding: 10px; float: left;"><div style="float: left; padding-bottom: 20px; padding-right: 300px; width: 525px;font-size: 22px; font-weight: bold;">'.$name.'</div></div>';
				$html .= '<div style="float: left; height: 400px;">'.$pics.'<div style="">Click Picture to see Full Screen</div></div>';
				$html .= '<div style="float: left; font-size: 16px; text-align: left; padding-left: 30px; padding-top: 40px; width: 450px;">'.$info.'</div></div>';
				$html .= '<div style="width: 1000px; padding-top: 10px; font-size: 16px; text-align: left; float: left; padding-bottom: 50px;">About:<br /><br />'.$about.'</div>';
				$html .= '<div style="float: left; text-align: left; font-size: 16px;"><b>Comments:</b> <br /><br />
				<form method="post" name="commentSave" action="mlvegas.php?id='.$_GET[id].'">
				<textarea name="comments" cols="65" rows="10"></textarea>
					<input type="submit" value="Save" />
				</form></div>';
			}
			
			if($data[cid] == 25) {
				$html = str_replace("Comments:", "Comments:</b> $data[data]", $html);
			}
			
		}

		if($_GET[doc] == 1) {
			$name = str_replace("<br />", "", $name);
			header("Content-type: application/vnd.ms-word");
			header("Content-Disposition: attachment;Filename=".str_replace(" ", "-", $name).".doc");
			echo '<body>';
			echo clean_html(substr($html, 0, strpos($html, "<form")));
			die();
		} else {
			echo clean_html($html);
		}


	} else if($_POST[search] == 1) {


		$page = $_GET[page];
		if(!$page) {
			$page = 1;
		}
		$start = ($page - 1) * 30;
			
		//$mq = mysql_query("SELECT MAX(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 ");
		//$max_id = mysql_result($mq, 0);
		
		$sq = mysql_query("SELECT sid  FROM `webform_submitted_data` WHERE (cid = 1 OR cid = 2 OR cid = 8 or cid = 9) AND `data` LIKE '%$_POST[searchBox]%' AND sid NOT IN (SELECT distinct(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 AND (data = 'deleted' OR data = 'declined')) GROUP BY sid ");
		$c = 1;
		while ($sub = mysql_fetch_assoc($sq)) {
			$q = mysql_query("SELECT * FROM `webform_submitted_data` WHERE `nid` = 33236 AND sid = $sub[sid] ORDER by cid ");
			
			while ($data = mysql_fetch_assoc($q)) {
				if($data[cid] == 1 OR $data[cid] == 2 OR $data[cid] == 4 OR $data[cid] == 8 OR $data[cid] == 9) {
					if($data[cid] == 4) {
						$name .= "- Age: ".floor((time() - strtotime($data[data])) / 31556926)." - ";
					} elseif($data[cid] == 8) {
						$city = explode(" ", trim($data[data]));
						foreach($city as $word) {
							$name .= strtoupper(substr($word, 0, 1)).strtolower(substr($word, 1))." ";
						}
						$name = substr_replace($name, ", ", -1);
					} else if($data[cid] == 9) {
						if($data[sid] > 1713) {
							$name .= $data[data].' (Official Contestant)<br />';
						} else if($data[sid] > 1542) {
							$name .= strtoupper($data[data])." (2nd Casting Batch) ";
						} else {
							$name .= strtoupper($data[data])." ";
						}
					} else {
						$name .= strtoupper(substr($data[data], 0, 1)).strtolower(substr($data[data], 1))." ";
					}
				}
				
				if($data[cid] == 15 OR $data[cid] == 16) {
					$pq = mysql_query("SELECT * FROM `files` WHERE fid = $data[data] ");
					$pic = mysql_fetch_assoc($pq);
					$ext = substr($pic[filepath], -4);
					$thumb = str_replace($ext, "_tn_tiny$ext", str_replace("casting2011/", "casting2011/thumbs/", $pic[filepath]));
					if(!file_exists($thumb)) {	   
					   $image = new SimpleImage();
					   $image->load($pic[filepath]);
					   $image->resize(60,100);
					   $image->save($thumb);
					}
					$pics .= '<a href="http://www.sitv.com/'.$pic[filepath].'" title="'.str_replace("<br />", " - ", $name).'" rel="prettyPhoto[gallery'.$data['sid'].']">
								<img class="model_pic" src="http://www.sitv.com/'.$thumb.'" height="100" /></a>';
					if($data[cid] == 16) {
						//$pics .= '<br /><br />';
					}
				}
				
				if($data[cid] == 24) {
					//$name2 = '<span style="float: left; width: 315px; padding-top: 5px; padding-bottom: 20px;">'.$name.'</span>';
					$html .= '<div style="width: 1000px; padding: 10px; float: left; border-bottom: 1px dotted grey;"><div style="float: left; height: 100px;">'.$pics.'</div>';
					$html .= '<div style="float: left; font-size: 24px; font-weight: bold; padding-left: 30px; padding-top: 40px;">
					<a href="?id='.$data[sid].'">'.str_ireplace("$_POST[searchBox]", "<span style=\"color: red;\">$_POST[searchBox]</span>", $name).'</a></div></div>';
					$name = '';
					$pics = '';
				}
				
			}
			$c++;
			$last_id = $sub['sid'];
		}
		
		//$html .= '<div style="padding: 10px; float: left; text-align: center; width: 630px;">';
		
		if($page != 1) {
			$prev = '<a style="float: left; font-size: 19px; font-weight: bold;" href="?action=browse&page='.($page-1).'">&lt; Prev</a>';
		}

		if($max_id != $last_id) {
			$next = '<a style="float: right; font-size: 19px; font-weight: bold;" href="?action=browse&page='.($page+1).'">Next &gt;</a>';
		}
		//$html .= $prev.$next.'</div>';
		//echo '<div style="padding: 10px; float: left; text-align: center; width: 630px;">'.$prev.$next.'</div>';
		if($html == '') {
			$html = "<div style=\"padding-top: 150px; font-size: 20px;\">No Results Found for '$_POST[searchBox]'.</div>";
		}
		echo clean_html($html);

		
	} else if($_GET[action] == 'browse') {
		
		$page = $_GET[page];
		if(!$page) {
			$page = 1;
		}
		$start = ($page - 1) * 30;
			
		$mq = mysql_query("SELECT MIN(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 AND sid NOT IN (SELECT distinct(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 AND (data = 'deleted' OR data = 'declined')) ");
		$max_id = mysql_result($mq, 0);
		
		$sq = mysql_query("SELECT distinct(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 AND sid NOT IN (SELECT distinct(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 AND (data = 'deleted' OR data = 'declined')) ORDER BY sid DESC LIMIT $start, 30 ");
		$c = 1;
		while ($sub = mysql_fetch_assoc($sq)) {
			$q = mysql_query("SELECT * FROM `webform_submitted_data` WHERE `nid` = 33236 AND sid = $sub[sid] ORDER by cid ");
			
			while ($data = mysql_fetch_assoc($q)) {
				if($data[cid] == 1 OR $data[cid] == 2 OR $data[cid] == 4 OR $data[cid] == 8 OR $data[cid] == 9) {
					if($data[cid] == 4) {
						$name .= "- Age: ".floor((time() - strtotime($data[data])) / 31556926)." - ";
					} elseif($data[cid] == 8) {
						$city = explode(" ", trim($data[data]));
						foreach($city as $word) {
							$name .= strtoupper(substr($word, 0, 1)).strtolower(substr($word, 1))." ";
						}
						$name = substr_replace($name, ", ", -1);
					} else if($data[cid] == 9) {
						if($data[sid] > 1713) {
							$name .= $data[data].' (Official Contestant)<br />';
						} else if($data[sid] > 1542) {
							$name .= strtoupper($data[data])." (2nd Casting Batch) ";
						} else {
							$name .= strtoupper($data[data])." ";
						}
					} else {
						$name .= strtoupper(substr($data[data], 0, 1)).strtolower(substr($data[data], 1))." ";
					}
				}
				
				if($data[cid] == 15 OR $data[cid] == 16) {
					$pq = mysql_query("SELECT * FROM `files` WHERE fid = $data[data] ");
					$pic = mysql_fetch_assoc($pq);
					$ext = substr($pic[filepath], -4);
					$thumb = str_replace($ext, "_tn_tiny$ext", str_replace("casting2011/", "casting2011/thumbs/", $pic[filepath]));
					if(!file_exists($thumb)) {	   
					   $image = new SimpleImage();
					   $image->load($pic[filepath]);
					   $image->resize(60,100);
					   $image->save($thumb);
					}
					$pics .= '<a href="http://www.sitv.com/'.$pic[filepath].'" title="'.str_replace("<br />", " - ", $name).'" rel="prettyPhoto[gallery'.$data['sid'].']">
								<img class="model_pic" src="http://www.sitv.com/'.$thumb.'" height="100" /></a>';
					if($data[cid] == 16) {
						//$pics .= '<br /><br />';
					}
				}
				
				if($data[cid] == 24) {
					//$name2 = '<span style="float: left; width: 315px; padding-top: 5px; padding-bottom: 20px;">'.$name.'</span>';
					$html .= '<div style="width: 1000px; padding: 10px; float: left; border-bottom: 1px dotted grey;"><div style="float: left; height: 100px;">'.$pics.'</div>';
					$html .= '<div style="float: left; font-size: 24px; font-weight: bold; padding-left: 30px; padding-top: 40px;">
					<a href="?id='.$data[sid].'">'.$name.'</a></div></div>';
					$name = '';
					$pics = '';
				}
				
			}
			$c++;
			$last_id = $sub['sid'];
		}
		
		$html .= '<div style="padding: 10px; float: left; text-align: center; width: 630px;">';
		
		if($page != 1) {
			$prev = '<a style="float: left; font-size: 19px; font-weight: bold;" href="?action=browse&page='.($page-1).'">&lt; Prev</a>';
		}

		if($max_id != $last_id) {
			$next = '<a style="float: right; font-size: 19px; font-weight: bold;" href="?action=browse&page='.($page+1).'">Next &gt;</a>';
		}
		$html .= $prev.$next.'</div>';
		echo '<div style="padding: 10px; float: left; text-align: center; width: 630px;">'.$prev.$next.'</div>';
		echo clean_html($html);
		
	} else if($_GET[action] == 'browseFull') {
				
		$page = $_GET[page];
		if(!$page) {
			$page = 1;
		}
		$start = ($page - 1) * 20;
			
		if($_GET[deactivated]) {
			$mq = mysql_query("SELECT MIN(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 AND sid IN (SELECT distinct(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 AND data = 'declined') ");
			$max_id = mysql_result($mq, 0);
		
			$sq = mysql_query("SELECT distinct(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 AND sid IN (SELECT distinct(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 AND data = 'declined') ORDER BY sid DESC LIMIT $start, 20 ");
		} else {
			$mq = mysql_query("SELECT MIN(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 AND sid NOT IN (SELECT distinct(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 AND (data = 'deleted' OR data = 'declined')) ");
			$max_id = mysql_result($mq, 0);
			if($_GET[doc]) {
				$sq = mysql_query("SELECT distinct(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 AND sid NOT IN (SELECT distinct(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 AND (data = 'deleted' OR data = 'declined')) ORDER BY sid DESC LIMIT $start, 50 ");
			} else {
				$sq = mysql_query("SELECT distinct(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 AND sid NOT IN (SELECT distinct(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 AND (data = 'deleted' OR data = 'declined')) ORDER BY sid DESC LIMIT $start, 20 ");
			}
		}
		
		$c = 1;
		while ($sub = mysql_fetch_assoc($sq)) {
			$q = mysql_query("SELECT * FROM `webform_submitted_data` WHERE `nid` = 33236 AND sid = $sub[sid] ORDER by cid ");
			
			while ($data = mysql_fetch_assoc($q)) {
				if($data[cid] >= 1 AND $data[cid] <= 14) {
					if($data[cid] == 1) {
						//$info .= 'Name: '.$data[data]." ";
						$name .= $data[data]." ";
						$title .= $data[data]." ";
					} else if($data[cid] == 2) {
						//$info .= $data[data].'<br />';
						if($data[sid] > 1713) {
							$name .= $data[data].' (Official Contestant)<br />';
						} else if($data[sid] > 1542) {
							$name .= $data[data].' (2nd Casting Batch)<br />';
						} else {
							$name .= $data[data].'<br />';
						}
						$title .= $data[data].'<br />';
					} else if($data[cid] == 3) {
						$info .= 'Email: <a href="mailto:'.$data[data].'">'.$data[data].'</a><br />';
					} else if($data[cid] == 4) {
						$info .= 'Birthdate: '.date('m/d/Y', strtotime($data[data]))." Age: ".floor((time() - strtotime($data[data])) / 31556926)."<br />";
					} else if($data[cid] == 5) {
						if(strstr($data[data], "-")) {
							$info .= 'Phone: '.$data[data]."<br />";
						} else if(strlen(trim($data[data])) == 10) {
							$info .= 'Phone: '.substr($data[data], 0, 3)."-".substr($data[data], 3, 3)."-".substr($data[data], 6)."<br />";
						} else if(strlen(trim($data[data])) == 7) {
							$info .= 'Phone: '.substr($data[data], 0, 3)."-".substr($data[data], 3)."<br />";
						} else {
							$info .= 'Phone: '.$data[data]."<br />";
						}
					} else if($data[cid] == 6) {
						if(strstr($data[data], "-")) {
							$info .= 'Cell: '.$data[data]."<br />";
						} else if(strlen(trim($data[data])) == 10) {
							$info .= 'Cell: '.substr($data[data], 0, 3)."-".substr($data[data], 3, 3)."-".substr($data[data], 6)."<br />";
						} else if(strlen(trim($data[data])) == 7) {
							$info .= 'Cell: '.substr($data[data], 0, 3)."-".substr($data[data], 3)."<br />";
						} else {
							$info .= 'Cell: '.$data[data]."<br />";
						}
					} else if($data[cid] == 7) {
						$info .= 'Address: '.$data[data]."<br />";
					} elseif($data[cid] == 8) {
						$city = explode(" ", trim($data[data]));
						foreach($city as $word) {
							$info .= strtoupper(substr($word, 0, 1)).strtolower(substr($word, 1))." ";
							$title .= strtoupper(substr($word, 0, 1)).strtolower(substr($word, 1))." ";
						}
						$info = substr_replace($info, ", ", -1);
						$title = substr_replace($title, ", ", -1);
					} else if($data[cid] == 9) {
						$info .= strtoupper($data[data])." ";
						$title .= strtoupper($data[data]);
					} else if($data[cid] == 10) {
						$info .= strtoupper($data[data])."<br />";
					} else if($data[cid] == 11) {
						$info .= "Height: ".$data[data]."<br />";
					} else if($data[cid] == 12) {
						$info .= "Weight: ".$data[data]."<br />";
					} else if($data[cid] == 13) {
						$info .= "Measurements: ".$data[data]."<br />";
					} else if($data[cid] == 14) {
						$about .= $data[data]."<br />";
					} else {
						//$info .= strtoupper(substr($data[data], 0, 1)).strtolower(substr($data[data], 1))." ";
					}
				}
			
				if($data[cid] == 15 OR $data[cid] == 16) {
					$pq = mysql_query("SELECT * FROM `files` WHERE fid = $data[data] ");
					$pic = mysql_fetch_assoc($pq);
					$ext = substr($pic[filepath], -4);
					$thumb = str_replace($ext, "_tn_large$ext", str_replace("casting2011/", "casting2011/thumbs/", $pic[filepath]));
					if(!file_exists($thumb)) {	   
					   $image = new SimpleImage();
					   $image->load($pic[filepath]);
					   $image->resize(240,400);
					   $image->save($thumb);
					}
					$pics .= '<a href="http://www.sitv.com/'.$pic[filepath].'" title="'.str_replace("<br />", " - ", $title).'" rel="prettyPhoto[gallery'.$data['sid'].']">
								<img class="model_pic" src="http://www.sitv.com/'.$thumb.'" height="400" /></a>';
					if($data[cid] == 16) {
						//$pics .= '<br /><br />';
					}
				}
				
				if($data[cid] == 18 && $data[data] != '') {
					if(strstr($data[data], 'http')) {
						$info .= 'Video: <a target="_blank" style="" href="'.$data[data].'">'.$data[data].'</a><br />';
					} else {
						$info .= 'Video: <a target="_blank" style="" href="http://www.google.com/search?q='.$data[data].'">'.$data[data].'</a><br />';
					}
				} 
				
				if($data[cid] == 24) {
					if($data[data] == 'declined') {
						$info .= '<br /><br /><a href="?undecline='.$data[sid].'">Reactivate This Entry</a>';
					} else {
						$info .= '<br /><br /><a href="?decline='.$data[sid].'">Deactivate This Entry</a>';
					}
					
					$html .= '<div style="width: 1000px; padding: 10px; float: left;"><div style="width: 900px; padding: 10px; float: left;"><div style="float: left; padding-bottom: 20px; padding-right: 300px; width: 525px;font-size: 22px; font-weight: bold;"><a style="width: 525px;" href="?id='.$data[sid].'">'.$name.'</a></div></div>';
					$html .= '<div style="float: left; height: 400px;">'.$pics.'<div style="">Click Picture to see Full Screen</div></div>';
					$html .= '<div style="float: left; font-size: 16px; text-align: left; padding-left: 30px; padding-top: 40px; width: 450px;">'.$info.'</div></div>';
					$html .= '<div style="width: 1000px; padding-top: 10px; font-size: 16px; text-align: left; float: left; padding-bottom: 20px;">About:<br /><br />'.$about.'</div>';
					//$html .= '<div style="float: left; text-align: left; font-size: 16px; padding-bottom: 150px;"><b>Comments:</b> <br /><br /></div>';
					$about = '';
					$name = '';
					$pics = '';
					$info = '';
					$title = '';
				}
				
				if($data[cid] == 25) {
					$html .= '<div style="float: left; text-align: left; font-size: 16px;"><b>Comments:</b> '.$data[data].'<br /></div>';
				}
			}
			$last_id = $sub['sid'];
			$html .= '<div style="padding-bottom: 50px; border-bottom: 1px dotted grey; float: left; width: 1000px;"></div>';
		}
			
			
		
		$html .= '<div style="padding: 10px; float: left; text-align: center; width: 630px;">';
		
		if($page != 1) {
			$prev = '<a style="float: left; font-size: 19px; font-weight: bold;" href="?action=browseFull&page='.($page-1).'">&lt; Prev</a>';
		}

		if($max_id != $last_id) {
			$next = '<a style="float: right; font-size: 19px; font-weight: bold;" href="?action=browseFull&page='.($page+1).'">Next &gt;</a>';
		}
		$html .= $prev.$next.'</div>';
		echo '<div style="padding: 10px; float: left; text-align: center; width: 630px;">'.$prev.$next.'</div>';
		
		echo clean_html($html);
			
	} else if($_GET[doc] == 1) {
	
		$page = $_GET[page];
		if(!$page) {
			$page = 1;
		}
		$start = ($page - 1) * 10;
			
		if($_GET[deactivated]) {
			$mq = mysql_query("SELECT MIN(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 AND sid IN (SELECT distinct(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 AND data = 'declined') ");
			$max_id = mysql_result($mq, 0);
		
			$sq = mysql_query("SELECT distinct(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 AND sid IN (SELECT distinct(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 AND data = 'declined') ORDER BY sid DESC ");
		} else {	
			$sq = mysql_query("SELECT distinct(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 AND sid NOT IN (SELECT distinct(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 AND (data = 'deleted' OR data = 'declined')) ORDER BY sid DESC ");
		}
		
		$c = 1;
		while ($sub = mysql_fetch_assoc($sq)) {
			$q = mysql_query("SELECT * FROM `webform_submitted_data` WHERE `nid` = 33236 AND sid = $sub[sid] ORDER by cid ");
			
			while ($data = mysql_fetch_assoc($q)) {
				if($data[cid] >= 1 AND $data[cid] <= 14) {
					if($data[cid] == 1) {
						//$info .= 'Name: '.$data[data]." ";
						$name .= $data[data]." ";
						$title .= $data[data]." ";
					} else if($data[cid] == 2) {
						//$info .= $data[data].'<br />';
						if($data[sid] > 1713) {
							$name .= $data[data].' (Official Contestant)<br />';
						} else if($data[sid] > 1542) {
							$name .= $data[data].' (2nd Casting Batch)<br />';
						} else {
							$name .= $data[data].'<br />';
						}
						$title .= $data[data].'<br />';
					} else if($data[cid] == 3) {
						$info .= 'Email: <a href="mailto:'.$data[data].'">'.$data[data].'</a><br />';
					} else if($data[cid] == 4) {
						$info .= 'Birthdate: '.date('m/d/Y', strtotime($data[data]))." Age: ".floor((time() - strtotime($data[data])) / 31556926)."<br />";
					} else if($data[cid] == 5) {
						if(strstr($data[data], "-")) {
							$info .= 'Phone: '.$data[data]."<br />";
						} else if(strlen(trim($data[data])) == 10) {
							$info .= 'Phone: '.substr($data[data], 0, 3)."-".substr($data[data], 3, 3)."-".substr($data[data], 6)."<br />";
						} else if(strlen(trim($data[data])) == 7) {
							$info .= 'Phone: '.substr($data[data], 0, 3)."-".substr($data[data], 3)."<br />";
						} else {
							$info .= 'Phone: '.$data[data]."<br />";
						}
					} else if($data[cid] == 6) {
						if(strstr($data[data], "-")) {
							$info .= 'Cell: '.$data[data]."<br />";
						} else if(strlen(trim($data[data])) == 10) {
							$info .= 'Cell: '.substr($data[data], 0, 3)."-".substr($data[data], 3, 3)."-".substr($data[data], 6)."<br />";
						} else if(strlen(trim($data[data])) == 7) {
							$info .= 'Cell: '.substr($data[data], 0, 3)."-".substr($data[data], 3)."<br />";
						} else {
							$info .= 'Cell: '.$data[data]."<br />";
						}
					} else if($data[cid] == 7) {
						$info .= 'Address: '.$data[data]."<br />";
					} elseif($data[cid] == 8) {
						$city = explode(" ", trim($data[data]));
						foreach($city as $word) {
							$info .= strtoupper(substr($word, 0, 1)).strtolower(substr($word, 1))." ";
							$title .= strtoupper(substr($word, 0, 1)).strtolower(substr($word, 1))." ";
						}
						$info = substr_replace($info, ", ", -1);
						$title = substr_replace($title, ", ", -1);
					} else if($data[cid] == 9) {
						$info .= strtoupper($data[data])." ";
						$title .= strtoupper($data[data]);
					} else if($data[cid] == 10) {
						$info .= strtoupper($data[data])."<br />";
					} else if($data[cid] == 11) {
						$info .= "Height: ".$data[data]."<br />";
					} else if($data[cid] == 12) {
						$info .= "Weight: ".$data[data]."<br />";
					} else if($data[cid] == 13) {
						$info .= "Measurements: ".$data[data]."<br />";
					} else if($data[cid] == 14) {
						$about .= htmlentities($data[data])."<br />";
					} else {
						//$info .= strtoupper(substr($data[data], 0, 1)).strtolower(substr($data[data], 1))." ";
					}
				}
			
				if($data[cid] == 15 OR $data[cid] == 16) {
					$pq = mysql_query("SELECT * FROM `files` WHERE fid = $data[data] ");
					$pic = mysql_fetch_assoc($pq);
					$ext = substr($pic[filepath], -4);
					$thumb = str_replace($ext, "_tn_large$ext", str_replace("casting2011/", "casting2011/thumbs/", $pic[filepath]));
					if(!file_exists($thumb)) {	   
					   $image = new SimpleImage();
					   $image->load($pic[filepath]);
					   $image->resize(240,400);
					   $image->save($thumb);
					}
					$pics .= '<a href="http://www.sitv.com/'.$pic[filepath].'" title="'.str_replace("<br />", " - ", $title).'" rel="prettyPhoto[gallery'.$data['sid'].']">
								<img class="model_pic" src="http://www.sitv.com/'.$thumb.'" height="400" /></a>';
					if($data[cid] == 15) {
						$pics .= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
					}
				}
				
				if($data[cid] == 18 && $data[data] != '') {
					if(strstr($data[data], 'http')) {
						$info .= 'Video: <a target="_blank" style="" href="'.$data[data].'">'.$data[data].'</a><br />';
					} else {
						$info .= 'Video: <a target="_blank" style="" href="http://www.google.com/search?q='.$data[data].'">'.$data[data].'</a><br />';
					}
				} 
				
				if($data[cid] == 24) {
					//$name2 = '<span style="float: left; width: 315px; padding-top: 5px; padding-bottom: 20px;">'.$name.'</span>';
					
					$html .= '<div style="width: 1000px; padding: 10px; float: left;"><div style="width: 900px; padding: 10px; float: left;"><div style="float: left; padding-bottom: 20px; padding-right: 300px; width: 525px;font-size: 22px; font-weight: bold;"><a href="?id='.$data[sid].'">'.$name.'</a></div></div>';
					$html .= '<div style="float: left; height: 400px;">'.$pics.'</div>';
					$html .= '<div style="float: left; font-size: 16px; text-align: left; padding-left: 30px; padding-top: 40px; width: 450px;">'.$info.'</div></div><br />';
					$html .= '<div style="width: 1000px; padding-top: 10px; font-size: 16px; text-align: left; float: left; padding-bottom: 150px;">About:<br />'.$about.'</div>';
					$html .= '<div style="float: left; text-align: left; font-size: 16px;">Comment-Spot </div><br clear="all" style="page-break-before:always" />';
					$about = '';
					$name = '';
					$pics = '';
					$info = '';
					$title = '';
				}
			
				if($data[cid] == 25) {
					$html = str_replace("Comment-Spot", "<br /><b>Comments:</b> $data[data]", $html);
				}
			
			}
			
			$html = str_replace("Comment-Spot", "", $html);
			
		}
		
	
		header("Content-type: application/vnd.ms-word");
		header("Content-Disposition: attachment;Filename=MLVegas_Submissions_Batch_1.doc");
		echo '<body>';
		echo clean_html($html);
		die();	
	
	} else {

	?>
		<script>
			document.getElementById('quickSearch').style.display = 'none';
		</script>
		<div style="height: 300px; width: 500px; background-color: #FFF9C9; margin-top: 50px; padding-top: 50px; height: 200px; font-size: 20px;">
			<form method="post" name="modelSearch" action="mlvegas.php">
				<input type="hidden" name="search" value="1" />
				Search Model Applicants: <input type="text" name="searchBox" id="searchBox" /><input type="submit" value="Search" />
			</form>
				
			<br />or<br /><br /><input type="button" value="Browse" onClick="window.location.href='?action=browse'" />
		</div>

	<?

	}
}	
?>
	</div>
</div>
</body>