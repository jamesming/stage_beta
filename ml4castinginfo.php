<?php

if($_GET['debug']) {
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
}
?>

<link rel="stylesheet" href="misc/prettyphoto/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<script src="misc/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
	/*$(document).ready(function(){
		$("a[rel^='prettyPhoto']").prettyPhoto();
	
	$('.shimmer').mouseover(
    function(){
        $(this).animate({backgroundPosition:'0px -100px'},500,function(){
                    $(this).removeAttr('style');
                });
    });
	});*/
</script>
<style>
.model_pic {
	margin-left: 8px;
}

.model_pic:hover
{
border: none;

}
.shimmer_box{
    display:inline-block;
    width:150px;
    height:100px;
    text-align:center;
    border:1px solid #ccc;
    -moz-border-radius:15px;
    border-radius:15px;
    color:white;
    line-height:30px;
    height:30px;
    padding:35px 0;
    text-shadow:0px 1px 0px #222;
    background-color:#558;
}
.shimmer{
    background-position:0 100px;
    background-repeat:no-repeat;
    background-image:url("data:image/png,%89PNG%0D%0A%1A%0A%00%00%00%0DIHDR%00%00%00%C8%00%00%00d%08%06%00%00%00%C3%86%7F%0B%00%00%00%19tEXtSoftware%00Adobe%20ImageReadyq%C9e%3C%00%00%06%E8IDATx%DA%EC%9D%EBn%E56%0C%06)o~%F7%FD%1F%B6%B5%8B-%92%E2%D4%B5ER%A2.%96%87%40%90%93%00Y%ECb5!%C7%D4%87%93%8E%E3%F8CD%0E%C7%87%5C%BC%A6%A8%25%EB%EB%FB%E3%F7!%DF%9D%A0%FC%7C%A4%130%14%B5%14%20%BF%BE%0F%F7v%03%CAn%EC%26W%DD%85%A2%96%EB%20%9B%F2%F5Q%00%0CE-5b%ED%DF%60%7C~o%2B%18%C3%F0%15j9%40%F6%8B%AEQ%D2M%F0%15jY%40%EE%40%C9%7D_s%16%7C%85Z%0E%90%2B%206%05%14%EB(%86%AFP%CB%00r8%A0)%1D%C5%F0%15jZ%40r%DEq%07%88%15%14%7C%85Z%02%90%A3%10%10ow%B18%0B%BEBM%03%C8%2F%E5%40%5B%00%B9%FB9%0B(%96.%83%AFPS8%C8%E68%F0QcX%C9(%86%AFP%5D%3B%C8%F9%90j%07%BAd%0Ck!%F6g_%01%16%AA%19%20%DA5%93%881L%F3%15%AD%9B%EC%CA%E8%85%DCSM%01%89%00e%13%7C%85Z%08%90-s%B8R%06%9C%11c%18%BEB%0D%01DD%DFExAi%3D%86%95%F8%0A%B0P%C5%1D%24)%B3%FD%1D(-%C60%EBh%C6%E5I%AA9%20%E9%E3%A0%24%D1%17uQ%BER%E2)w%3FG%D8%8Bj%0A%C8g%25CG%11%A5%9B%DC%81%D2%AA%93%10%F6%A2%9A%01%F2%09%C6Ui%DDEs%16%ED%D0Fn%EF%09%7BQ%CD%00%91%0C%2CgHJ%7DE%FB%ED%DEB%E8%F1%15%AA%0A%90%23%D3ARAG%11%B1%8B%BD%B6%B5%8F%1C%C3%08%7BQU%80X%C0%D0%60%F1%F8%CA%E1%00%A5%C5%5E%85%B0%17e%02d%3F%1D%F4RX%BC%BE%92s%16%CB%9D%B0%A81%8C%B0%17e%02%E4%E7%80%D7%C2%D2%DAWz%DD2%26%ECE%FD%03%C8_%1F%60%24%23%2C%11%BE%22%C1%A0%10%F6%A2%9A%01%B2%5D%80%91%0C%1D%A5%D6W%92Q%F0%ADbO%D8%8Bj%02%C8q%03%C6%1D4%B5%BEb%ED(%22%F6%1D%0Ba%2F%AA%19%20%3F%1E%B2e%40%F1%8C%60%1A%2C%E7%9F%B1%F8J%92%BA%3Ba%84%BD%A8%22%40%FE%FC%00cw%40R%03%CBH_!%ECEUu%10o7%D1%C6%AF%CF%03%DFc%19I%D8%8B%0A%EF%20Wp%E4%40%D9%8C%BE%22%A7%D7Qr%2F%86%C3E%D8%8B%0A%07%C4%0A%8Au%14%93%00%B9%D7%7CE%84%B0%17%D5%19%10%0B(%25%A3X%2B_!%ECE%0D%01%24)%D0%94%8A%7D%BA9%E4%11%23X%0F_!%EC%05%20Y(Z%F8J%ABe%A4%05%18%C2%5ETX%07)%F1%15%CB(%16%E1%2B%DE%EEB%D8%8Bj%0E%88e%0C%2B%19%C5D%9Eqy%92%B0%D7%0B%00%B9%1B%A3%AC%80X%C6%B0R%B1%9F%C5W%08%7B%BD%14%10%CB%A2p%93%B81L%EB%26%9B%94%DF%05%EB%E5%2B%84%BD%5E%3Ab%EDF%B7h5%86YG%B1%D1%BEB%D8%EBe%1D%24%DD%00a%85%20r%0C%5B%D9W%08%7B%3D%18%90%BB%C3i%E9%24V%40%92s%0C%2B%F1%15%0D%16%C2%5E%84%BD%5C%80%EC%17%23%CB%AE%8C%3E%BB%B1%3Bxa%BA%FA%9E%06%0Aa%2F.Ov%ED%20%E7%83%952%3B%8D%5D%FA%8Ca9P%08%7Bqy%B2Y%A5%E38%AEn%DDZ%C7%99-%F3u%F4%18%96%7B%5D%1A%F6%92%8B%CF9%91%3F%1F%8A%E3%E2%B3%C7W%EE%C6%9D%5Dy%5D%2B%FB%DE%AB-%1A0%CB%C2%F2%1B%90%AB%DF%98%C9%01%8Cv%BD%24%E2%89%97%15%94%1A_%99%01%96RPJ%9E%86Y%A0%F1%84%BD%96%F4%953%20%1A%2Cw%DF%B3%EC4%22%C7%B0hP4%604P%AC%B0X%81%99%11%94W%FAJ%0E%903%2C%DE%F1%AB%04%94%D6cXM%D8%2B%02%16k%D8%CB%F2%9B%7C%F61l%09_%B1%02r%D7U%A2%7D%25%E2qq%94%AF%DC%01%139%82y%5D%A5%06%94%A8%EE%F2%AA%B0%97%17%90%08X%A2%40%A9%1D%C3j%C2%5E%AB%FA%8A%A7%BB%D4%5C%9E%7C%8C%AF%D4%00R%23%F7V%B1%1F5%86y%80%11%05%9A%D9%7C%25%A2%93%EC%8E%BF%C3%A3%97%91Q%80%E0%2B%7D%7CE%C4%BE%15%BF%3B%B4%D1%DB%FB%A3%B2%C3L-%F7-%00%89%82e%939%C6%B0%92%B0%97T%C2%D2%CAWj%BA%C5.%FEQ%EE%F1%BE%D2%1A%90%D1%BE%12%D5%5D%9E%EE%2B%D6Q%AC%E7%18%F6%08_%E9%05H%F42r%D4%18V%EA%2C%B3%FAJ%2F%A1%2F%DD%B1%0C%F7%95%11%80XG0%09XD%F6%1C%C3%ACa%AF%D1%BE%E2%01%A5%E5%5E%E5%11%BE2%1A%90%19%7C%25%B2%BB%AC%EA%2B%3D%B7%F6S-%23g%02%A4%D72r%B61le_%89%1C%C3%86%F8%CA%8C%80D%FBJkO%89%F4%15%0D%96%08_%E9%B1%8C%ACy%5C%5Cry%B2%99%AF%CC%0E%88e%04%93%02HZ%DF2%B6%82%A2%85%BD%9E%EE%2B%8F%BF%3C%F9%25%CF%A9%CF%7F%A8%D6M%08%7B%11%F6%0A%F1%95'u%90%91%BEB%D8%EB%A5a%AF%A7%032%A3%AF%10%F6Z(%EC%B5%12%20%1A%2C%84%BD%C6%2C%23%1F%ED%2B%AB%02%12%B5_%E1%F2%A4%CFW%96%0B%7B%BD%01%90%5E%BEB%D8k%C1%B0%D7%9B%00%89%80%85%B0%D7%CB%C2%5Eo%05%A4F%EE%09%7B%8D%F3%95%EEa%2F%00%C1WF%2F%23%A7%0E%7B%01H%1BX%08%7B-%12%F6%02%90y%7D%85%CB%93%13%84%BD%00%A4%FF2%92%B0W%8C%AFt%11%FA%2F%CE%BC%AB%3E%FF3%AD%A1%A8%F3%7D%2B%EB%9B%14%F1%CE%5E%13%BC%B3%17%80%D4%C1b%B9%3Cyw!%D1%02%0A%EF%EC5%F8%9D%BD%18%B1%E6%F0%15%C2%5E%93%86%BD%E8%20mG0%8F%AF%F0%CE%5EzG%B1%C0%12%FA%CE%5Et%90%B1%8F%8CE%08%7B%B5%DA%AF%84%84%BD%E8%20s%F9%0Aa%2F%BD%B3h%1DE%240%ECE%07Y%DFW%08%7BU%F8%0A%80%CC%09%0Ba%AFI.O%02%C83%60!%ECU%07K%F1%E5I%1Cd%FE'a%5E_%F1%2C%23%23%C60m%D9Y%7By2%E2I%985%ECuv%96%0D%40%9E!%F7%C9%08L%EE%D1q%ED%D6%DE%F3%B8%F8%EA%CF%B7%2C%22%A3%96%91%C7E%17%B2%2C%23%FF'%F5%00%F2%CC%AE%E2%91%FB%DC%130%CF%D6%BE%E4zK%C4%8EE%0A%60%B1t%15%AD%BB%00%C8%82%B0%E4%80%B1.%22%5B%8Fa%9En%92%1B%2B%5B-%23%FF%F35%80%BC%C7W%2C%3B%16%0D%94%5D%EA%F6*%D1%BE%D2%FC%F2%24%80%AC%E7%2B%9E%F1k%86%5B%C6w%BER%12%F6%0A%BF%3C%09%20%C8%7D%89%D8%F7%BAe%EC%1D%C5%24%08%96%7F%7F%1E%40%F0%95%16b%1F5%86%D5%5C%9E%0C%F1%15%00%C1W%08%7Be%60%01%10%7C%85%B0W%06%16%00%A1j%7D%E5%7Cx%7B%DC2%EE%E6%2B%00B%D5%FA%CA%D2a%2F%00%A1J%7DE%0Cc%CE%9E9%BCQ%DB%7BO%86%C5%1A%F6%3Ap%10*%DAW%96%0C%7B%01%085%C2Wz%8Da%D5%A3%18%80P%B3%FBJ%ED%18%A6%5D%9E%CCB%F2%B7%00%03%00w%BE%F5%EB%0C%DC%3Ds%00%00%00%00IEND%AEB%60%82");
    
}
#my-global-wrap {
	background: url("/sites/all/themes/sitv/images/backgrounds/castingmockbckgrnd.jpg") no-repeat scroll 50% top #000000;
}
</style>
<!-- <a class="box shimmer" href="#">
    I am a button !
</a> -->

<?

$start = strtotime('April 25, 2011 1:00 am');
$end = strtotime('April 30, 2012 11:58 pm');
$now = time();
if($_GET[test]) {
   $now = strtotime('April 30, 2011 11:59 pm');
}
if(!$_GET[pg] && $now < $end) {

?>

<style>
	#tablewrap {
<? if($now > $start) {
		echo 'background-image: url("/sites/all/themes/sitv/images/model-latina/ml4fav_natural.jpg");';
	} else {	
		echo 'background-image: url("/sites/all/themes/sitv/images/model-latina/ml4fav_self2.jpg");';
	}
?>
	background-repeat: no-repeat;
	}
	table#template-A #my-main {
		margin: 15px 0;
		overflow: hidden;
		width: 980px;
	}
	#my-right {
		display: none;
	}
</style>

<div style="height: 1100px;">&nbsp;
	<div style="float: right; padding-top: 80px;">
		<iframe scrolling="no" height="680px" frameborder="0" width="320px" border="0" allowtransparency="true" src="<?= ($now > $start) ? 'http://www.vibescm.com/w/v/en_US/irgsq62v' : 'http://www.vibescm.com/w/v/en_US/irgsq62v'; ?>">Sorry your browser does not support iframes.</iframe>
	</div>
</div>
<div style="text-align: center; padding-top: 60px; padding-bottom: 20px;"><a style="font-size: 18px;" href="?pg=1">Click here to see the full list of Model Latina Hopefuls</a></div>
<?

} else {

?>

<div class="model_submissions_container" align="center" style="width: 670px;">

<?
if(!$_GET[id]) {
?>
	<div style="padding-top: 10px; font-size: 14px; float: left; text-align: left;">
	<div style="float; left; text-align: center;">
		<a href="http://www.sitv.com/model-latina-submissions"><img src="/sites/all/themes/sitv/images/model-latina/ml4_header3.png" alt="Model Latina Season 4 Hopefuls" /></a>
	</div>
	<p style="padding-top: 10px; width: 650px;">Here are the young women in the running to be cast as a contestant on the next Model Latina. <br />Please leave your comments below and let us know what you think!</p>
	</div>
<?
}

require_once('simpleImage.php');
	
if($_GET[img]) {
	$pq = mysql_query("SELECT * FROM `files` WHERE fid = $_GET[img] ");
	$pic = mysql_fetch_assoc($pq);	
	$image = new SimpleImage();
	$image->load("$pic[filepath]");
	$width = $image->getWidth();
	if($width > 630) {
		echo '<img width="630" src="/'.$pic[filepath].'" />';
	} else {
		echo '<img src="/'.$pic[filepath].'" />';
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
				$name .= strtoupper(substr($data[data], 0, 1)).strtolower(substr($data[data], 1))."<br />";
			}
		}
	}	
	echo '<div style="font-size: 16px; padding-top: 10px;">'.$name.'</div>';
	echo '<div style="padding-top: 10px;"><a style="font-size: 14px;" href="?pg='.$_GET[pg].'">Go Back</a></div>';
?>
<script>
$(document).ready(function(){
	$('#edit-comment').html('Comment on <?= trim(str_replace("<br />", " - ", $name)).":"; ?> \r\n\r\n');
});
</script>
<?	
} else {
	
	$pg = $_GET[pg];
	if(!$pg) {
		$pg = 1;
	}
	$start = ($pg - 1) * 9;
	
	$hidden_ids = '1714, 1700, 1698, 1692, 1686, 1684, 1675, 1674, 1672, 1669, 1668, 1666, 1663, 1661, 1659, 1656, 1651, 1643, 1642, 1641, 1640, 1638, 1630, 1629, 1623, 1620, 1619, 1617, 1613, 1612, 1611, 1610, 1609, 1606, 1600, 1595, 1594, 1593, 1583, 1580, 1573, 1570, 1569, 1566, 1596, 1590, 1588, 1581, 1578, 1572, 1566, 1542, 1541, 1522, 1521, 1512, 1486, 1460, 1448, 1438, 1413, 1409, 1407, 1404, 1393, 1387, 1385, 1348, 1347, 1345, 1344, 1336, 1324, 1321, 1316, 1313, 1311, 1307, 1302, 1299, 1298, 1282, 1224, 1199, 1195, 1192, 1185, 1183, 1169, 1166, 1165, 1164, 1160, 1159';
        
	$mq = mysql_query("SELECT MIN(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 ");
	$max_id = mysql_result($mq, 0);
	
	$pq = mysql_query("SELECT count(distinct(sid)) FROM `webform_submitted_data` WHERE `nid` = 33236 AND sid < 1715 AND (sid NOT IN (SELECT distinct(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 AND data = 'deleted') AND sid NOT IN ($hidden_ids)) ");
	$pg_count = ceil(mysql_result($pq, 0) / 9);
	
	if($_GET[sean]) {
		echo $pg_count;
	}
	$sq = mysql_query("SELECT distinct(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 AND sid < 1715 AND (sid NOT IN (SELECT distinct(sid) FROM `webform_submitted_data` WHERE `nid` = 33236 AND data = 'deleted') AND sid NOT IN ($hidden_ids)) ORDER BY sid DESC LIMIT $start, 9 ");
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
			
			if($data[cid] == 15 OR $data[cid] == 16) {
				$pq = mysql_query("SELECT * FROM `files` WHERE fid = $data[data] ");
				$pic = mysql_fetch_assoc($pq);
				$ext = substr($pic[filepath], -4);
				$thumb = str_replace($ext, "_tn$ext", str_replace("casting2011/", "casting2011/thumbs/", $pic[filepath]));
				if(!file_exists($thumb)) {	   
				   $image = new SimpleImage();
				   $image->load($pic[filepath]);
				   $image->resize(100,150);
				   $image->save($thumb);
				}
				$pic_name = explode("/", $pic[filepath]);
				$pic_name = array_reverse($pic_name);
				$pics .= '<a href="?img='.$data[data].'&id='.$data["sid"].'&pg='.$pg.'" title="'.str_replace("<br />", " - ", $name).'">
							<img class="model_pic" src="http://www.sitv.com/'.$thumb.'" height="150" /></a>';
				if($data[cid] == 16) {
					//$pics .= '<br /><br />';
				}
			}
			
			if($data[cid] == 24 AND $c % 3 == 0) {
				$name3 = '<span style="float: left; width: 213px; padding-top: 5px; padding-bottom: 20px; padding-left: 7px; text-align: left; color: #78257D; font-weight: bold;">'.$name.'</span>'; //' - '.$data["sid"].'</span>';
				$html .= '<div style="float: left; height: 150px;">'.$pics.'</div>';
				$html .= '<div style="float: left; font-size: 14px;">'.$name1.$name2.$name3.'</div>';
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
	
	$html .= '<div style="padding: 10px; float: left; text-align: center; width: 630px;">';
	
	if($pg != 1) {
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
	}
	
	$html .= $prev.$next.'</div>';
	echo '<div style="padding: 10px; float: left; text-align: center; width: 630px;">'.$prev.$next.'</div>';
	echo $html;
}

if(!$_GET[id]) {
?>

	<div style="width: 650px; float: left; text-align: left;">
	<p><b>Q: I applied online, but don't see my name or photos on here. Do I need to submit them again?</b></p>
	<p>A: No. Photos that included visible logos, branding, other people/children, website/email addresses, etc. were removed from the online gallery. Please don't resubmit. You are still being considered for the competition.</p>
	</div>
<?
}

?>
</div>

<?

}