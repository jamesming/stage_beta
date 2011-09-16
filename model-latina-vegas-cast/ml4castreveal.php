<?php

if($_GET['debug']) {
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
}
?>

<style>
.model_pic {
	margin-left: 3px;
}

.model_pic:hover
{
border: none;

}

</style>

<div class="model_submissions_container" align="center" style="width: 670px;">

<?

require_once('simpleImage.php');
	
if($_GET[img]) {
	$pq = mysql_query("SELECT * FROM `files` WHERE fid = $_GET[img] ");
	$pic = mysql_fetch_assoc($pq);	
	$image = new SimpleImage();
	$file_path = str_replace("sitv.com", "mynuvotv.com", $pic[filepath]);
	//$file_path = $pic[filepath];
	$image->load($file_path);
	$width = $image->getWidth();
	if($width > 630) {
		echo '<img width="630" src="/'.$file_path.'" />';
	} else {
		echo '<img src="/'.$file_path.'" />';
	}
	$q = mysql_query("SELECT * FROM `webform_submitted_data` WHERE `nid` = 33236 AND sid = $_GET[id] ORDER by cid ");
		
	while ($data = mysql_fetch_assoc($q)) {
		if($data[cid] == 1 OR $data[cid] == 8 OR $data[cid] == 9) {
			if($data[cid] == 8) {
				$city = explode(" ", trim($data[data]));
				foreach($city as $word) {
					$name .= strtoupper(substr($word, 0, 1)).strtolower(substr($word, 1))." ";
				}
				$name = substr_replace($name, ", ", -1);
			} else if($data[cid] == 9) {
				$name .= strtoupper($data[data])." ";
			} else {
				$fullname = explode(" ", trim($data[data]));
				foreach($fullname as $word) {
					$name .= strtoupper(substr($word, 0, 1)).strtolower(substr($word, 1));
				}
				$name .= "<br />";
			}
		}
	}	
	echo '<div style="font-size: 16px; padding-top: 10px;">'.$name.'</div>';
	echo '<div style="padding-top: 10px;"><a style="font-size: 14px;" href="?pg='.$_GET[pg].'">Go Back</a></div>';

} else {
	
	$pg = $_GET[pg];
	if(!$pg) {
		$pg = 1;
	}
	$start = ($pg - 1) * 9;
	
	$hidden_ids = '1714, 1700, 1698, 1692, 1686, 1684, 1675, 1674, 1672, 1669, 1668, 1666, 1663, 1661, 1659, 1656, 1651, 1643, 1642, 1641, 1640, 1638, 1630, 1629, 1623, 1617, 1613, 1612, 1611, 1610, 1609, 1606, 1600, 1595, 1594, 1593, 1583, 1580, 1573, 1570, 1569, 1566, 1596, 1590, 1588, 1581, 1578, 1572, 1566, 1542, 1541, 1522, 1521, 1512, 1486, 1460, 1448, 1438, 1413, 1409, 1407, 1404, 1393, 1387, 1385, 1348, 1347, 1345, 1344, 1336, 1324, 1321, 1316, 1313, 1311, 1307, 1302, 1299, 1298, 1282, 1224, 1199, 1195, 1192, 1185, 1183, 1169, 1166, 1165, 1164, 1160, 1159';
        
	$mq = mysql_query("SELECT MIN(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 ");
	$max_id = mysql_result($mq, 0);
	
	$pq = mysql_query("SELECT count(distinct(sid)) FROM `webform_submitted_data` WHERE `nid` = 33236 AND (sid NOT IN (SELECT distinct(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 AND data = 'deleted') AND sid NOT IN ($hidden_ids)) ");
	$pg_count = ceil(mysql_result($pq, 0) / 9);
	
	if($_GET[sean]) {
		echo $pg_count;
	}
	$sq = mysql_query("SELECT distinct(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 AND (sid NOT IN (SELECT distinct(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 AND data = 'deleted') AND sid NOT IN ($hidden_ids)) ORDER BY sid DESC LIMIT $start, 9 ");
	//echo "SELECT distinct(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 AND sid < 1566 AND (sid NOT IN (SELECT distinct(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 AND data = 'deleted') AND sid NOT IN ($hidden_ids)) ORDER BY sid DESC LIMIT $start, 9 ";
	
	$c = 1;
	while ($sub = mysql_fetch_assoc($sq)) {
		$q = mysql_query("SELECT * FROM `webform_submitted_data` WHERE `nid` = 33236 AND sid = $sub[sid] ORDER by cid ");
		
		while ($data = mysql_fetch_assoc($q)) {
			if($data[cid] == 1 OR $data[cid] == 8 OR $data[cid] == 9) {
				if($data[cid] == 8) {
					$city = explode(" ", trim($data[data]));
					foreach($city as $word) {
						$name .= strtoupper(substr($word, 0, 1)).strtolower(substr($word, 1))." ";
					}
					$name = substr_replace($name, ", ", -1);
				} else if($data[cid] == 9) {
					$name .= strtoupper($data[data])." ";
				} else {
					$name .= strtoupper(substr($data[data], 0, 1)).strtolower(substr($data[data], 1))."<br />";
				}
			}
			
			if($data[cid] == 15) {
				$pq = mysql_query("SELECT * FROM `files` WHERE fid = $data[data] ");
				$pic = mysql_fetch_assoc($pq);
				$file_path = "../".str_replace("sitv.com", "mynuvotv.com", $pic[filepath]);
				//$file_path = "../".$pic[filepath];
				$ext = substr($file_path, -4);
				$thumb = str_replace($ext, "_tn_med$ext", str_replace("casting2011/", "casting2011/thumbs/", $file_path));
				if(!file_exists($thumb)) {	   
				   $image = new SimpleImage();
				   $image->load($file_path);
				   $image->resize(150,250);
				   $image->save($thumb);
				}
				$thumb = str_replace("../", "", $thumb);
				$pic_name = explode("/", $file_path);
				$pic_name = array_reverse($pic_name);
				$qc = mysql_query("SELECT * FROM `webform_submitted_data` WHERE `nid` = 33236 AND sid = $sub[sid] AND cid = 24 ");
				$status = mysql_fetch_assoc($qc);
				if($status[data] == -1) {
					$eliminated  = '<div style="background-image: url(images/busted-X.png); margin-left: 40px; margin-top: 90px; position: absolute; z-index: 100; width: 76px; height: 79px;"></div>';
					$jackpot = '';
				} else if($status[data] == 9) {
					$eliminated  = '<div style="background-image: url(images/jackpot-check.png); margin-left: 40px; margin-top: 90px; position: absolute; z-index: 100; width: 76px; height: 79px;"></div>';
					$jackpot = 'jackpot-';
				} else {
					$eliminated  = '<div style="background-image: url(images/question.png); margin-left: 40px; margin-top: 90px; position: absolute; z-index: 100; width: 69px; height: 88px;"></div>';
					$jackpot = '';
				}
				$pics .= '<div style="background-image: url(images/'.$jackpot.'polariod.png); height: 304px; width: 157px; float: left; margin-right: 10px;">
							<a rel="prettyPhoto[gallery'.$data[sid].']" href="http://www.mynuvotv.com/'.$file_path.'" title="'.str_replace("<br />", " - ", $name).'">'.$eliminated.'<div style="padding-top: 7px; float: left;">
							<img class="model_pic" src="http://www.mynuvotv.com/'.$thumb.'" height="250" style="position: relative; z-index: 10;" /></div></a><div style="text-align: left; font-weight: bold; padding-left: 5px; color: black; float: left; padding-top: 5px;">'.$name.'</div></div>';
			}
			
			if($data[cid] == 24 AND $c % 3 == 0) {
				$name3 = '<span style="float: left; width: 213px; padding-top: 5px; padding-bottom: 20px; padding-left: 7px; text-align: left; color: #78257D; font-weight: bold;">'.$name.'</span>'; //' - '.$data["sid"].'</span>';
				$html .= '<div style="float: left; height: 314px;">'.$pics.'</div>';
				//$html .= '<div style="float: left; font-size: 14px;">'.$name1.$name2.$name3.'</div>';
				$name = '';
				$pics = '';
			} elseif($data[cid] == 24 AND $c % 3 == 1) { 
				$name1 = '<span style="float: left; width: 213px; padding-top: 5px; padding-bottom: 20px; padding-left: 7px; text-align: left; color: #78257D; font-weight: bold;">'.$name.'</span>'; //' - '.$data["sid"].'</span>';
				$name = '';
			} elseif($data[cid] == 24) { 
				$name2 = '<span style="float: left; width: 213px; padding-top: 5px; padding-bottom: 20px; padding-left: 7px; text-align: left; color: #78257D; font-weight: bold;">'.$name.'</span>'; //' - '.$data["sid"].'</span>';
				$name = '';
			}
			
		}
		$c++;
		$last_id = $sub['sid'];
	}
	
	$html .= '<div style="padding-bottom: 0px; padding-left: 5px; float: left; text-align: center; width: 500px;">';
	
	if($pg < 15) {
		$c = 1;
		while($c < 15) {
			if($c == $pg) {
				if($c < 10) {
					$prev .= '<span style="float: left; background-image: url(images/nac-circle.png); padding-top: 5px; padding-left: 10px; width: 17px; height: 22px;'.($c > 1 ? 'margin-left: 18px;' : '').'"><a style="color: #FFFF33; font-weight: bold; float: left; font-size: 15px; font-weight: bold;" href="?pg='.$c.'">'.$c.'</a></span>';
				} else {
					$prev .= '<span style="float: left; background-image: url(images/nac-circle.png); padding-top: 5px; height: 22px; width: 22px; padding-left: 5px;'.($c > 1 ? 'margin-left: 18px;' : '').'"><a style="color: #FFFF33; font-weight: bold; float: left; font-size: 15px; font-weight: bold;" href="?pg='.$c.'">'.$c.'</a></span>';				
				}
			} else {
				$prev .= '<span style="float: left; padding-top: 4px;'.($c > 1 ? ($c == ($pg + 1) ? 'margin-left: 18px;' : 'margin-left: 22px;') : '').'"><a style="color: #FFFF33; font-weight: bold; float: left; font-size: 15px; font-weight: bold;" href="?pg='.$c.'">'.$c.'</a></span>';
			}
			$c++;
		}
		$prev .= '<span style="float: left; padding-top: 4px;'.($c > 1 ? 'margin-left: 23px;' : '').'"><a style="color: #FFFF33; font-weight: bold; float: left; font-size: 15px; font-weight: bold;" href="?pg='.$c.'">&gt;</a></span>';
	} else {
		$c = 15;
		$prev .= '<span style="float: left; padding-top: 4px;"><a style="color: #FFFF33; font-weight: bold; float: left; font-size: 15px; font-weight: bold;" href="?pg=14">&lt;</a></span>';
		while($c < 27) {
			if($c == $pg) {
				if($c < 20) {
					$prev .= '<span style="float: left; background-image: url(images/nac-circle.png); padding-top: 5px; height: 22px; width: 22px; padding-left: 5px;'.($c > 1 ? 'margin-left: 18px;' : '').'"><a style="color: #FFFF33; font-weight: bold; float: left; font-size: 15px; font-weight: bold;" href="?pg='.$c.'">'.$c.'</a></span>';				
				} else {
					$prev .= '<span style="float: left; background-image: url(images/nac-circle.png); padding-top: 5px; height: 22px; width: 21px; padding-left: 6px;'.($c > 1 ? 'margin-left: 18px;' : '').'"><a style="color: #FFFF33; font-weight: bold; float: left; font-size: 15px; font-weight: bold;" href="?pg='.$c.'">'.$c.'</a></span>';				
				}
			} else {
				$prev .= '<span style="float: left; padding-top: 4px;'.($c > 12 ? 'margin-left: 22px;' : '').'"><a style="color: #FFFF33; font-weight: bold; float: left; font-size: 15px; font-weight: bold;" href="?pg='.$c.'">'.$c.'</a></span>';
			}
			$c++;
		}
	}
	
	/*if($pg != 1) {
		$prev = '<span style="float: left;"><a style="color: #78257D; font-weight: bold; float: left; font-size: 14px; font-weight: bold;" href="?pg='.($pg-1).'">&lt; </a>&nbsp;&nbsp;&nbsp;&nbsp;</span>';
		$c = 1;
		$last = $pg - 3;
		if($pg == 3) {
			$prev .= '<span style="float: left;">&nbsp;&nbsp;&nbsp;&nbsp;<a style="color: #78257D; font-weight: bold; float: left; font-size: 15px; font-weight: bold;" href="?pg=1">1,</a></span>';
			$prev .= '<span style="float: left;">&nbsp;&nbsp;&nbsp;&nbsp;<a style="color: #78257D; font-weight: bold; float: left; font-size: 15px; font-weight: bold;" href="?pg=2">2,</a></span>';	
		} else if($pg == 2) {
			$prev .= '<span style="float: left;">&nbsp;&nbsp;&nbsp;&nbsp;<a style="color: #78257D; font-weight: bold; float: left; font-size: 15px; font-weight: bold;" href="?pg=1">1,</a></span>';
		} else {
			while($c < 4 AND $last != $pg) {
				$prev .= '<span style="float: left;">&nbsp;&nbsp;&nbsp;&nbsp;<a style="color: #78257D; font-weight: bold; float: left; font-size: 15px; font-weight: bold;" href="?pg='.$last.'">'.$last.',</a></span>';
				$last++;
				$c++;
			}
		}
	}
	
	$prev = substr($prev, 0, -12)."</a></span>";

	if($max_id != $last_id) {
		if($pg < $pg_count) {
			$next = '<span style="float: right;"><a style="color: #78257D; font-weight: bold; float: right; font-size: 14px; font-weight: bold;" href="?pg='.($pg+1).'"> &gt;</a></span>';
			if($pg < ($pg_count-1)) { 
				if($pg < ($pg_count-2)) {
					$next .= '<span style="float: right;">&nbsp;&nbsp;&nbsp;&nbsp;<a style="color: #78257D; font-weight: bold; float: left; font-size: 15px; font-weight: bold;" href="?pg='.($pg+3).'">'.($pg+3).'</a></span>';
				}
				$next .= '<span style="float: right;">&nbsp;&nbsp;&nbsp;&nbsp;<a style="color: #78257D; font-weight: bold; float: left; font-size: 15px; font-weight: bold;" href="?pg='.($pg+2).'">'.($pg+2).',</a></span>';
				if($pg > ($pg_count-3)) {
					$next = substr($next, 0, -12)."</a></span>";
				}
			}
			$next .= '<span style="float: right;">&nbsp;&nbsp;&nbsp;&nbsp;<a style="color: #78257D; font-weight: bold; float: left; font-size: 15px; font-weight: bold;" href="?pg='.($pg+1).'">'.($pg+1).',</a></span>';
		}
		if($pg > ($pg_count-2)) {
			$next = substr($next, 0, -12)."</a></span>";
		}
	}*/
	
	$html .= $prev.$next.'</div>';
	echo '<div style="padding-bottom: 10px; padding-left: 5px; float: left; text-align: center; width: 500px;">'.$prev.$next.'</div>';
	echo clean_html($html);
}

?>
</div>
