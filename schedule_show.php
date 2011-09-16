
<style type="text/css">
<!--
#primetime_link_now {color: #3f3f3f; cursor: pointer;}
#primetime_link_prime {color: #939393; float: right; cursor: pointer;}
#primetime_link_prime_west {color: #939393; float: right; cursor: pointer;}
.schedule_info { float: left; font-size: 12px; font-weight: bold;}
.schedule_info_primetime { float: left; font-size: 12px; font-weight: bold; display: none;}
.schedule_info_primetime_west { float: left; font-size: 12px; font-weight: bold; display: none;}
.schedule_show { float: left; width: 110px; background-color: #E9EDEF; height: 23px; border: 1px solid #939393; padding: 10px 3px 3px; }
.schedule_time { float: left; width: 54px; background-color: #E9EDEF; height: 23px; border: 1px solid #939393; padding: 10px 3px 3px; }
.schedule_episode { float: left; width: 136px; background-color: #E9EDEF; height: 30px; border: 1px solid #939393; padding: 3px; }

.schedule_show_even { float: left; width: 110px; background-color: #F8FAFA; height: 23px; border: 1px solid #939393; padding: 10px 3px 3px; }
.schedule_time_even { float: left; width: 54px; background-color: #F8FAFA; height: 23px; border: 1px solid #939393; padding: 10px 3px 3px; }
.schedule_episode_even { float: left; width: 136px; background-color: #F8FAFA; height: 30px; border: 1px solid #939393; padding: 3px; }	

.schedule_description { display: none; float: left; width: 292px;  font-size: 11px; font-weight: normal; background-color: #F8FAFA; border: 1px solid #939393; padding: 3px; }

#block-block-51 h2.title {
    background: url("/sites/all/themes/sitv/images/backgrounds/title-bgrd-big.gif") no-repeat scroll 0 0 transparent;
    border-bottom: 1px solid #C7C7C6;
    clear: both;
    height: 21px;
    line-height: 21px;
    text-indent: 5px;
}
	
/*.schedule_time:hover {background-color: #A2A6A7;}
.schedule_show:hover {background-color: #A2A6A7;}
.schedule_episode:hover {background-color: #A2A6A7;}

.schedule_time_even:hover {background-color: #A2A6A7;}
.schedule_show_even:hover {background-color: #A2A6A7;}
.schedule_episode_even:hover {background-color: #A2A6A7;}
*/
-->
</style>

<script>
var rightNow = new Date();
var jan1 = new Date(rightNow.getFullYear(), 0, 1, 0, 0, 0, 0);
var temp = jan1.toGMTString();
var jan2 = new Date(temp.substring(0, temp.lastIndexOf(" ")-1));
var std_time_offset = (jan1 - jan2) / (1000 * 60 * 60);
var time_diff = std_time_offset - (-5);
var d = new Date();
var start_time = d.getHours() - time_diff;
var westCoast = '';
if(time_diff <= -2) {
	westCoast = '_west';
}
</script>

<script>
$(document).ready(function() {
	//Updates the times to match the client's time zone
	$('div[class*=schedule_time]').each(function() {
		var time = $(this).attr('id');
		var og_time = $(this).html();
		var mins = og_time.substr(og_time.indexOf(':'), 3);
		if(time != 'blank') {
			if(time > 12) {
				var new_time = parseInt(time) + time_diff;
				if(new_time >= 12) {
					if(new_time != 12) {
						new_time = new_time - 12;
					}	
					$(this).html(new_time+mins+' PM');
				} else {
					$(this).html(new_time+mins+' AM');
				}
			} else {
				var new_time = parseInt(time) + time_diff;
				if(new_time >= 0) {
					if(new_time == 0) {
						new_time = 12;
					}
					$(this).html(new_time+mins+' AM');
				} else {
					new_time = new_time + 12;
					$(this).html(new_time+mins+' PM');
				}
			}
		}
	});
	
	$('div[class*=schedule_episode]').mousedown(function() {
		var id = $(this).attr('id');
		if ($('#desc-'+id).is(":hidden")) {
			$('img[class*=description_button]').each(function() {
				$(this).attr('src', 'sites/default/files/images/arrow_state_blue_right.png');
			});
			$('div[id*=desc-]').slideUp('slow', function() {
			// Animation complete.
			});
			$('#desc-'+id).slideDown('slow', function() {
			// Animation complete.
			});
		} else {
			$('#desc-'+id).slideUp('slow', function() {
			// Animation complete.
			});
		}	
	});
	$('img[class*=description_button]').mousedown(function() {
		var id = $(this).attr('id');
		if ($('#desc-'+id).is(":hidden")) {
			$('img[class*=description_button]').each(function() {
				$(this).attr('src', 'sites/default/files/images/arrow_state_blue_right.png');
			});
			$(this).attr('src', 'sites/default/files/images/arrow_state_blue_expanded.png');
			$('div[id*=desc-]').slideUp('slow', function() {
			// Animation complete.
			});
			$('#desc-'+id).slideDown('slow', function() {
			// Animation complete.
			});
		} else {
			$(this).attr('src', 'sites/default/files/images/arrow_state_blue_right.png');
			$('#desc-'+id).slideUp('slow', function() {
			// Animation complete.
			});
		}	
	});
	$('span[id*=primetime_link]').mousedown(function() {
		$('span[id*=primetime_link]').css('color', '#939393');
		$(this).css('color', '#3f3f3f');
		var id = $(this).attr('id');
		if(id == 'primetime_link_prime'+westCoast) {
			$('.schedule_info').fadeOut('slow', function() {
			// Animation complete.
			});
			setTimeout(function() { 
				$('.schedule_info_primetime'+westCoast).fadeIn('slow', function() {
				// Animation complete.
				});
				}, 1000);
		} else {
			$('.schedule_info_primetime'+westCoast).fadeOut('slow', function() {
			// Animation complete.
			});
			setTimeout(function() { 
				$('.schedule_info').fadeIn('slow', function() {
				// Animation complete.
				});
				}, 1000);
		}
	});
});
</script>

<div class="container" style="float: left; width: 305px; font-family: Arial,Helvetica,sans-serif; color: #192135; min-height: 178px;">
		<div class="schedule_title_bar" style="width: 288px;  font-size: 12px; font-weight: bold; background-color: #C7D1D7; color: #131720; border-color: #939393; border-style: solid; border-width: 1px; padding: 5px;">
		<span id="primetime_link_now">Now Showing <span style="font-size: 10px;">(Local Times)</span></span>
		<script>
			document.write('<span id="primetime_link_prime'+westCoast+'">Prime Time</span>');	
		</script>		
		</div>
		<div class="schedule_info">
		
<?
$today = date('Y-m-d', time());
//Add 3 hours for East Coast time
$now = date('H', time()+10800);

$end = date('H', time()+21600);
if($_GET[time]) {
	$now = date('H', time()+10800+(3600 * $_GET[time]));
}
$c = 1;
if($now > 20) {
	//echo "SELECT *, CASE start_time WHEN '00:00' THEN '24:00' WHEN '00:30' THEN '24:30' WHEN '01:00' THEN '25:00' WHEN '01:30' THEN '25:30' WHEN '02:00' THEN '26:00' WHEN '02:30' THEN '26:30' WHEN '03:00' THEN '27:00' WHEN '03:30' THEN '27:30' ELSE start_time END AS mod_time FROM `custom_show_schedule`  WHERE (start_time >= '$now:00' OR start_time < '03:00') AND show_date >= '$today' AND archived = 0 GROUP BY start_time ORDER BY mod_time LIMIT 0, 4  ";
	$q = mysql_query("SELECT *, CASE start_time WHEN '00:00' THEN '24:00' WHEN '00:30' THEN '24:30' WHEN '01:00' THEN '25:00' WHEN '01:30' THEN '25:30' WHEN '02:00' THEN '26:00' WHEN '02:30' THEN '26:30' WHEN '03:00' THEN '27:00' WHEN '03:30' THEN '27:30' ELSE start_time END AS mod_time FROM `custom_show_schedule`  WHERE (start_time >= '$now:00' OR start_time < '03:00') AND show_date = '$today' AND archived = 0 AND title = 'Adrenalina' GROUP BY start_time ORDER BY mod_time LIMIT 0, 4  ");
} else {
	echo "SELECT * FROM `custom_show_schedule`  WHERE start_time >= '$now:00' AND show_date >= '$today' AND archived = 0 AND title = 'Adrenalina' GROUP BY start_time ORDER BY start_time LIMIT 0, 4  ";
	$q = mysql_query("SELECT * FROM `custom_show_schedule`  WHERE start_time >= '$now:00' AND show_date >= '$today' AND archived = 0 AND title = 'Adrenalina' GROUP BY start_time ORDER BY start_time LIMIT 0, 4  ");
}
while($show = mysql_fetch_assoc($q)) {
	if($c % 2) {
		$even = '';
	} else {
		$even = '_even';
	}
	$c++;

	$slot[] ='
		<div id="'.(date('H', strtotime($show[start_time]))).'" class="schedule_time'.$even.'" '.($c == 5 ? 'style="border-bottom: none;" ': '').'>
			'.date("g:i A", strtotime($show[start_time])).'
		</div>
		<div class="schedule_show'.$even.'" style="width: 230px; '.($c == 5 ? 'border-bottom: none;': '').'">'.($show[show_link] ? '<a style="float: left;" href="/'.$show[show_link].'">' : '').'
			<span style="float: left;">'.$show[title].'</span> '.($show[show_link] ? '</a>' : '').($show[description] ? '<div style="padding-left: 5px; cursor: pointer;"><img id="'.$show[id].'" class="description_button" src="sites/default/files/images/arrow_state_blue_right.png" /></div>' : '').'
		</div>
		<div class="schedule_description" id="desc-'.$show[id].'" '.($c == 5 ? 'style="border-bottom: none;" ': '').'>
			'.($show[episode_title] ? '<p>"'.$show[episode_title].'"</p>' : '').$show[description].'
		</div>
		
		';
}
//$slot = array_reverse($slot);
foreach($slot as $row) {
	echo $row;
}
?>
		</div>
	<div class="schedule_info_primetime">
		
<?

$c = 1;
$start = 20;
//echo "SELECT * FROM `custom_show_schedule`  WHERE start_time >= '20:00' AND start_time < '24:00' AND show_date = '$today' AND archived = 0 GROUP BY start_time ORDER BY start_time LIMIT 0, 4 ";
$q = mysql_query("SELECT * FROM `custom_show_schedule`  WHERE start_time >= '20:00' AND start_time < '24:00' AND show_date = '$today' AND archived = 0 AND title = 'Adrenalina' GROUP BY start_time ORDER BY start_time LIMIT 0, 4 ");
while($show = mysql_fetch_assoc($q)) {
	if($c % 2) {
		$even = '';
	} else {
		$even = '_even';
	}
	$c++;

	$slotPrime[] ='
		<div id="'.(date('H', strtotime($show[start_time]))).'" class="schedule_time'.$even.'" '.($c == 5 ? 'style="border-bottom: none;" ': '').'>
			'.date("g:i A", strtotime($show[start_time])).'
		</div>
		<div class="schedule_show'.$even.'" style="width: 230px; '.($c == 5 ? 'border-bottom: none;': '').'">'.($show[show_link] ? '<a style="float: left;" href="/'.$show[show_link].'">' : '').'
			<span style="float: left;">'.$show[title].'</span> '.($show[show_link] ? '</a>' : '').($show[description] ? '<div style="padding-left: 5px; cursor: pointer;"><img id="'.$show[id].'-prime" class="description_button" src="sites/default/files/images/arrow_state_blue_right.png" /></div>' : '').'
		</div>
		<div class="schedule_description" id="desc-'.$show[id].'-prime" '.($c == 5 ? 'style="border-bottom: none;" ': '').'>
			'.($show[episode_title] ? '<p>"'.$show[episode_title].'"</p>' : '').$show[description].'
		</div>
		
		';
}
//$slotPrime = array_reverse($slotPrime);
foreach($slotPrime as $row) {
	echo $row;
}
?>
		</div>
<div class="schedule_info_primetime_west">
		
<?

$c = 1;
$start = 20;
//echo "SELECT * FROM `custom_show_schedule`  WHERE start_time >= '20:00' AND start_time < '24:00' AND show_date = '$today' AND archived = 0 GROUP BY start_time ORDER BY start_time LIMIT 0, 4 ";
$q = mysql_query("SELECT *, CASE start_time WHEN '00:00' THEN '24:00' WHEN '00:30' THEN '24:30' WHEN '01:00' THEN '25:00' WHEN '01:30' THEN '25:30' WHEN '02:00' THEN '26:00' WHEN '02:30' THEN '26:30' WHEN '03:00' THEN '27:00' WHEN '03:30' THEN '27:30' ELSE start_time END AS mod_time FROM `custom_show_schedule`  WHERE (start_time >= '23:00' OR start_time < '04:00') AND show_date = '$today' AND archived = 0 AND title = 'Adrenalina' GROUP BY start_time ORDER BY mod_time LIMIT 0, 4 ");
while($show = mysql_fetch_assoc($q)) {
	if($c % 2) {
		$even = '';
	} else {
		$even = '_even';
	}
	$c++;

	$slotPrimeWest[] ='
		<div id="'.(date('H', strtotime($show[start_time]))).'" class="schedule_time'.$even.'" '.($c == 5 ? 'style="border-bottom: none;" ': '').'>
			'.date("g:i A", strtotime($show[start_time])).'
		</div>
		<div class="schedule_show'.$even.'" style="width: 230px; '.($c == 5 ? 'border-bottom: none;': '').'">'.($show[show_link] ? '<a style="float: left;" href="/'.$show[show_link].'">' : '').'
			<span style="float: left;">'.$show[title].'</span> '.($show[show_link] ? '</a>' : '').($show[description] ? '<div style="padding-left: 5px; cursor: pointer;"><img id="'.$show[id].'-prime" class="description_button" src="sites/default/files/images/arrow_state_blue_right.png" /></div>' : '').'
		</div>
		<div class="schedule_description" id="desc-'.$show[id].'-prime" '.($c == 5 ? 'style="border-bottom: none;" ': '').'>
			'.($show[episode_title] ? '<p>"'.$show[episode_title].'"</p>' : '').$show[description].'
		</div>
		
		';
}
//$slotPrime = array_reverse($slotPrime);
foreach($slotPrimeWest as $row) {
	echo $row;
}
?>
		</div>			
	</div>
		<div class="schedule_title_bar" style="width: 288px; float: left; text-align: center; margin-bottom: 20px; font-size: 12px; font-weight: bold; background-color: #C7D1D7; color: #131720; border-color: #939393; border-style: solid; border-width: 1px; padding: 5px;">
			<a href="/schedule">VIEW FULL SCHEDULE</a>
		</div>
