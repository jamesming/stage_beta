
<style type="text/css">
<!--

.schedule_container {
	float: left;
	width: 900px; 
	font-family: Arial,Helvetica,sans-serif; 
	color: #192135; 
	padding-left: 8px;
}

.schedule_info { float: left; font-size: 14px; font-weight: bold; cursor: pointer; color: #3F3F3F;}
.schedule_info a { float: left; font-size: 18px; font-weight: bold; cursor: pointer; text-decoration: none; color: #0097C2;}
.schedule_info a:hover { text-decoration: underline; }

.schedule_day { float: left; font-size: 16px; color: #3F3F3F; width: 80px; cursor: default; background-color: #F8FAFA; height: 56px; border: 1px solid #939393; padding: 4px 4px 4px 4px;}

.schedule_show_0030 { float: left; width: 92px; background-color: #E9EDEF; height: 56px; border: 1px solid #939393; padding: 4px 4px 4px 10px; }
.schedule_show_0100 { float: left; width: 200px; background-color: #E9EDEF; height: 56px; border: 1px solid #939393; padding: 4px 4px 4px 10px; }
.schedule_show_0130 { float: left; width: 308px; background-color: #E9EDEF; height: 56px; border: 1px solid #939393; padding: 4px 4px 4px 10px; }
.schedule_show_0200 { float: left; width: 416px; background-color: #E9EDEF; height: 56px; border: 1px solid #939393; padding: 4px 4px 4px 10px; }
.schedule_show_0230 { float: left; width: 524px; background-color: #E9EDEF; height: 56px; border: 1px solid #939393; padding: 4px 4px 4px 10px; }
.schedule_time { color: #3F3F3F; float: left; width: 208px; cursor: default; font-size: 18px; text-align: center; background-color: #E9EDEF; height: 26px; border: 1px solid #939393; padding: 10px 3px 3px; }
.schedule_episode { float: left; width: 136px; background-color: #E9EDEF; height: 30px; border: 1px solid #939393; padding: 3px; }

.schedule_show_0030 Sports { float: left; width: 92px; background-color: #ff8048; height: 56px; border: 1px solid #939393; padding: 4px 4px 4px 10px;}
.schedule_show_0100 Sports { float: left; width: 200px; background-color: #ff8048; height: 56px; border: 1px solid #939393; padding: 4px 4px 4px 10px;}
.schedule_show_0130 Sports { float: left; width: 308px; background-color: #ff8048; height: 56px; border: 1px solid #939393; padding: 4px 4px 4px 10px;}
.schedule_show_0200 Sports { float: left; width: 416px; background-color: #ff8048; height: 56px; border: 1px solid #939393; padding: 4px 4px 4px 10px;}

.Sports { background-color: #ff8048; }
.Talk_Show { background-color: #e9d3d7; }
.Variety { background-color: #00ad68; }
.Comedy { background-color: #abe57b; }
.Drama { background-color: #99ccff; }
.Reality { background-color: #fff57e; }
.Movies { background-color: #b0aed0; }
.Music { background-color: #66ccff; }

.schedule_description { float: left; position: absolute; display: none; top: 3px; color: #4C4C4C; width: 887px; height: 50px; font-size: 12px; font-weight: normal; background-color: #F8FAFA; border: 1px solid #939393; padding: 3px; }
	
.schedule_show_0030:hover {background-color: #B0EFFF; text-decoration: underline;}
.schedule_show_0100:hover {background-color: #B0EFFF; text-decoration: underline;}
.schedule_show_0130:hover {background-color: #B0EFFF; text-decoration: underline;}
.schedule_show_0200:hover {background-color: #B0EFFF; text-decoration: underline;}
.schedule_show_0030_even:hover {background-color: #B0EFFF; text-decoration: underline;}
.schedule_show_0100_even:hover {background-color: #B0EFFF; text-decoration: underline;}
.schedule_show_0130_even:hover {background-color: #B0EFFF; text-decoration: underline;}
.schedule_show_0200_even:hover {background-color: #B0EFFF; text-decoration: underline;}

.schedule_show:hover {background-color: #A2A6A7;}
.schedule_episode:hover {background-color: #A2A6A7;}

.schedule_time_even:hover {background-color: #A2A6A7;}
.schedule_show_even:hover {background-color: #A2A6A7;}
.schedule_episode_even:hover {background-color: #A2A6A7;}
.daily_row {float: left; font-size: 12px; display: none; cursor: default; border: 2px solid #939393; height: 115px; padding: 15px 0 15px 30px; text-align: left; width: 705px;}

.color_key {
	float: left;
	width: 850px;
	text-align: center;
	padding-left: 22px;
	padding-bottom: 30px;
	padding-top: 10px;
}

.color_key_category {
	width: 80px;
	height: 25px;
	border: 1px solid black;
	float: left;
	margin-left: 20px;
	padding-top: 5px;
}

.anythingSlider {
    height: 665px;
    position: relative;
    width: 750px;
	float: left;
}
.anythingSlider .wrapper {
    height: 655px;
    left: 70px;
    margin: 0;
    overflow: auto;
    position: absolute;
    top: 0;
    width: 750px;
}
.anythingSlider .wrapper ul {
    left: 0;
    list-style: none outside none;
    margin: 0;
    padding: 0 !important;
    position: absolute;
    top: 0;
    width: 99999px;
}
.anythingSlider ul li {
    display: block;
    float: left;
    margin: 0;
    padding: 0 !important;
    width: 750px;
}
.anythingSlider .arrow {
	cursor: pointer;
    display: block;
    height: 40px;
    position: absolute;
    text-indent: -9999px;
    top: 250px;
    width: 40px;
}
.anythingSlider .forward {
    background: url("/sites/default/files/images/arrow-next_inactive.png") repeat scroll 0 0 transparent;
    right: -127px;
}
#page-schedule .anythingSlider .back {
    background: url("/sites/default/files/images/arrow-last_inactive.png") repeat scroll 0 0 transparent;
    float: left;
	right: 95%;
}
.anythingSlider .forward:hover {
    /*background-position: right bottom; */
}
.anythingSlider .back:hover {
    /*background-position: left bottom; */
}
#thumbNav {
    display: none;
}
#start-stop {
    display: none;
}
.anythingSlider .wrapper ul ul {
    background: none repeat scroll 0 0 transparent;
    border: 0 none;
    margin: 0;
    overflow: visible;
    position: static;
    width: auto;
}
.anythingSlider .wrapper ul ul li {
    background: none repeat scroll 0 0 transparent;
    float: none;
    height: auto;
    width: auto;
}
.movieSlide {
    height: 600px;
}
-->
</style>
  <script type="text/javascript" src="/misc/jquery.js?e"></script>

	<script type="text/javascript" src="/sites/all/themes/sitv/js/jquery.anythingslider.js"></script>

	
<script>
var rightNow = new Date();
var jan1 = new Date(rightNow.getFullYear(), 0, 1, 0, 0, 0, 0);
var temp = jan1.toGMTString();
var jan2 = new Date(temp.substring(0, temp.lastIndexOf(" ")-1));
var std_time_offset = (jan1 - jan2) / (1000 * 60 * 60);
var time_diff = std_time_offset - (-5);
var d = new Date();
var start_time = d.getHours() - time_diff;
var panel = Math.ceil(<?= date('H', time()+10800) ?> / 3);

function formatText(index, panel) {
		  return index + "";
	    }
    
        $(function () {
        
            $('.anythingSlider').anythingSlider({
                easing: "swing",        // Anything other than "linear" or "swing" requires the easing plugin
                autoPlay: false,        // This turns off the entire FUNCTIONALY, not just if it starts running or not.
                delay: 6000,            // How long between slide transitions in AutoPlay mode
                startStopped: false,    // If autoPlay is on, this can force it to start stopped
                animationTime: 600,     // How long the slide transition takes
                hashTags: true,         // Should links change the hashtag in the URL?
                buildNavigation: true,  // If true, builds and list of anchor links to link to each slide
        		pauseOnHover: false,    // If true, and autoPlay is enabled, the show will pause on hover
        		startText: "Go",        // Start text
		        stopText: "Stop",       // Stop text
		        navigationFormatter: formatText       // Details at the top of the file on this use (advanced use)
            });
            
            $("#slide-jump").click(function(){
                
            });
			


            
        });

</script>

<script>
$(document).ready(function() {
	$('.anythingSlider').anythingSlider(panel);
	
	//Updates the times to match the client's time zone
	$('.schedule_time').each(function() {
		var time = $(this).attr('id');
		if(time != 'blank') {
			if(time > 12) {
				var new_time = parseInt(time) + time_diff;
				if(new_time >= 12) {
					if(new_time != 12) {
						new_time = new_time - 12;
					}	
					$(this).html(new_time+':00 p.m.');
				} else {
					$(this).html(new_time+':00 a.m.');
				}
			} else {
				var new_time = parseInt(time) + time_diff;
				if(new_time >= 0) {
					if(new_time == 0) {
						new_time = 12;
					}
					$(this).html(new_time+':00 a.m.');
				} else {
					new_time = new_time + 12;
					$(this).html(new_time+':00 p.m.');
				}
			}
		}
		if(time_diff <= -2) {
			//Show west coast shift for mountain time and west 
			$('#schedule_info_1-4').each(function() {
				$(this).html('');
				$(this).hide();
			});
			
			$('#schedule_info_1-4_west').each(function() {
				$(this).show();
			});
		}

	})
	
	//Change the "cloned" div ids so it doesn't conflict with the real ids
	$('li[class*=cloned]').children().children().children().each(function() {
		//alert($(this).attr('id'));
		$(this).attr('id', 'clone_id');
	});

		
	//Animates the show description divs
	$('div[class*=schedule_show]').mousedown(function() {
		var div_id = $(this).attr('id');
		var day = div_id.substr(0,div_id.indexOf('-'));
		var time = div_id.substr(div_id.indexOf('-')+1, 2);
		var id = div_id.substr(div_id.indexOf('_')+1);
		if ($('#daily_row-'+day+'-'+time).is(":hidden")) {
			$('#daily_row-'+day+'-'+time).html('<span onclick="$($(this).parent().slideUp(\'slow\'));" style="float: right; padding-right: 15px; cursor: pointer;"><img style="height: 25px; width: 25px; border: none;" src="sites/default/files/images/close-button.jpg" /></span>'+$('#desc-'+id).html());
			$('div[id*=daily_row-]').slideUp('slow', function() {
			// Animation complete.
			});
			$('#daily_row-'+day+'-'+time).slideDown('slow', function() {
			// Animation complete.
			});
		} else {
			$('#daily_row-'+day+'-'+time).hide().html('<span onclick="$($(this).parent().slideUp(\'slow\'));" style="float: right; padding-right: 15px; cursor: pointer;"><img style="height: 25px; width: 25px; border: none;" src="sites/default/files/images/close-button.jpg" /></span>'+$('#desc-'+id).html()).fadeIn('slow');
		}	
	});
	
});
</script>

<?
include_once("db_include_stage.php");

$yesterday = date('Y-m-d', time()-86400);
$east_last_day = date('Y-m-d', time()+(86400 * 5));

$today = date('Y-m-d', time());
$last_day = date('Y-m-d', time()+(86400 * 6));

?>		


<div class="schedule_container">
	<div class="color_key">
		<div class="color_key_category Comedy">Comedy</div>
		<div class="color_key_category Drama">Drama</div>
		<div class="color_key_category Movies">Movies</div>
		<div class="color_key_category Music">Music</div>
		<div class="color_key_category Reality">Reality</div>
		<div class="color_key_category Sports">Sports</div>
		<div class="color_key_category Talk_Show">Talk Show</div>
		<div class="color_key_category Variety">Variety</div>
	</div>
	<div align="center" style="font-size: 16px; font-weight: bold; float: left; width: 100%; padding-bottom: 20px;">All Times Local</div>
		
		<div class="anythingSlider">
			<div class="wrapper">
			<ul>
			<li>
				<div class="movieSlide">

					<div id="schedule_info_1-4" class="schedule_info" style="margin-bottom: 200px; float: left;">
<?

//echo "<br>SELECT *, CASE start_time WHEN '00:00' THEN '24:00' WHEN '00:30' THEN '24:30' WHEN '01:00' THEN '25:00' WHEN '01:30' THEN '25:30' WHEN '02:00' THEN '26:00' WHEN '02:30' THEN '26:30' WHEN '03:00' THEN '27:00' WHEN '03:30' THEN '27:30' ELSE start_time END AS mod_time FROM `custom_show_schedule`  WHERE (start_time >= '23:00' OR start_time < '04:00') AND show_date >= '$yesterday' AND show_date <= '$east_last_day' AND archived = 0 GROUP BY show_date, start_time ORDER BY show_date, mod_time ";
$q = mysql_query("SELECT *, CASE start_time WHEN '00:00' THEN '24:00' WHEN '00:30' THEN '24:30' WHEN '01:00' THEN '25:00' WHEN '01:30' THEN '25:30' WHEN '02:00' THEN '26:00' WHEN '02:30' THEN '26:30' WHEN '03:00' THEN '27:00' WHEN '03:30' THEN '27:30' ELSE start_time END AS mod_time FROM `custom_show_schedule`  WHERE (start_time >= '23:00' OR start_time < '04:00') AND show_date >= '$yesterday' AND show_date <= '$east_last_day' AND archived = 0 GROUP BY show_date, start_time ORDER BY show_date, mod_time ");
schedule_block($q, 1, 1);
?>
		<div id="schedule_info_1-4_west" class="schedule_info" style="margin-bottom: 200px; float: left; display: none;">
<?

//echo "<br>SELECT *, CASE start_time WHEN '00:00' THEN '24:00' WHEN '00:30' THEN '24:30' WHEN '01:00' THEN '25:00' WHEN '01:30' THEN '25:30' WHEN '02:00' THEN '26:00' WHEN '02:30' THEN '26:30' WHEN '03:00' THEN '27:00' WHEN '03:30' THEN '27:30' ELSE start_time END AS mod_time FROM `custom_show_schedule`  WHERE (start_time >= '23:00' OR start_time < '04:00') AND show_date >= '$today' AND show_date <= '$last_day' AND archived = 0 GROUP BY show_date, start_time ORDER BY show_date, mod_time ";
$q = mysql_query("SELECT *, CASE start_time WHEN '00:00' THEN '24:00' WHEN '00:30' THEN '24:30' WHEN '01:00' THEN '25:00' WHEN '01:30' THEN '25:30' WHEN '02:00' THEN '26:00' WHEN '02:30' THEN '26:30' WHEN '03:00' THEN '27:00' WHEN '03:30' THEN '27:30' ELSE start_time END AS mod_time FROM `custom_show_schedule`  WHERE (start_time >= '23:00' OR start_time < '04:00') AND show_date >= '$today' AND show_date <= '$last_day' AND archived = 0 GROUP BY show_date, start_time ORDER BY show_date, mod_time ");
schedule_block($q, 1);
?>
				</div>
			</li>
			<li>
				<div class="movieSlide">

					<div id="schedule_info_4-7" class="schedule_info" style="margin-bottom: 200px; float: left;">
		
<?


//echo "<br>SELECT * FROM `custom_show_schedule`  WHERE start_time >= '03:00' AND start_time < '07:00' AND show_date >= '$today' AND show_date <= '$last_day' AND archived = 0 GROUP BY show_date, start_time ORDER BY show_date, start_time ";
$q = mysql_query("SELECT * FROM `custom_show_schedule`  WHERE start_time >= '03:00' AND start_time < '07:00' AND show_date >= '$today' AND show_date <= '$last_day' AND archived = 0 GROUP BY show_date, start_time ORDER BY show_date, start_time ");
schedule_block($q, 4);
?>
				</div>
			</li>
			<li>
				<div class="movieSlide">
			
		<div id="schedule_info_7-10" class="schedule_info" style="margin-bottom: 200px; float: left;">
		
<?

//echo "<br>SELECT * FROM `custom_show_schedule`  WHERE start_time >= '06:00' AND start_time < '10:00' AND show_date >= '$today' AND show_date <= '$last_day' AND archived = 0 GROUP BY show_date, start_time ORDER BY show_date, start_time ";
$q = mysql_query("SELECT * FROM `custom_show_schedule`  WHERE start_time >= '06:00' AND start_time < '10:00' AND show_date >= '$today' AND show_date <= '$last_day' AND archived = 0 GROUP BY show_date, start_time ORDER BY show_date, start_time ");
schedule_block($q, 7);
?>
				</div>
			</li>
			<li>
				<div class="movieSlide">
				
		<div id="schedule_info_10-13" class="schedule_info" style="margin-bottom: 200px; float: left;">
		
<?

//echo "<br>SELECT * FROM `custom_show_schedule`  WHERE start_time >= '09:00' AND start_time < '13:00' AND show_date >= '$today' AND show_date <= '$last_day' AND archived = 0 GROUP BY show_date, start_time ORDER BY show_date, start_time ";
$q = mysql_query("SELECT * FROM `custom_show_schedule`  WHERE start_time >= '09:00' AND start_time < '13:00' AND show_date >= '$today' AND show_date <= '$last_day' AND archived = 0 GROUP BY show_date, start_time ORDER BY show_date, start_time ");
schedule_block($q, 10);
?>
				</div>
			</li>
			<li>
				<div class="movieSlide">
				
		<div id="schedule_info_13-16" class="schedule_info" style="margin-bottom: 200px; float: left;">
		
<?

//echo "<br>SELECT * FROM `custom_show_schedule`  WHERE start_time >= '11:00' AND start_time < '16:00' AND show_date >= '$today' AND show_date <= '$last_day' AND archived = 0 GROUP BY show_date, start_time ORDER BY show_date, start_time ";
$q = mysql_query("SELECT * FROM `custom_show_schedule`  WHERE start_time >= '11:00' AND start_time < '16:00' AND show_date >= '$today' AND show_date <= '$last_day' AND archived = 0 GROUP BY show_date, start_time ORDER BY show_date, start_time ");
schedule_block($q, 13);
?>
				</div>
			</li>
			<li>
				<div class="movieSlide">
				
		<div id="schedule_info_16-19" class="schedule_info" style="margin-bottom: 200px; float: left;">
		
<?

//echo "<br>SELECT * FROM `custom_show_schedule`  WHERE start_time >= '15:00' AND start_time < '19:00' AND show_date >= '$today' AND show_date <= '$last_day' AND archived = 0 GROUP BY show_date, start_time ORDER BY show_date, start_time ";
$q = mysql_query("SELECT * FROM `custom_show_schedule`  WHERE start_time >= '15:00' AND start_time < '19:00' AND show_date >= '$today' AND show_date <= '$last_day' AND archived = 0 GROUP BY show_date, start_time ORDER BY show_date, start_time ");
schedule_block($q, 16);
?>
				</div>
			</li>
			<li>
				<div class="movieSlide">
				
		<div id="schedule_info_19-22" class="schedule_info" style="margin-bottom: 200px; float: left;">
		
<?

//echo "<br>SELECT * FROM `custom_show_schedule`  WHERE start_time >= '17:00' AND start_time < '22:00' AND show_date >= '$today' AND show_date <= '$last_day' AND archived = 0 GROUP BY show_date, start_time ORDER BY show_date, start_time ";
$q = mysql_query("SELECT * FROM `custom_show_schedule`  WHERE start_time >= '17:00' AND start_time < '22:00' AND show_date >= '$today' AND show_date <= '$last_day' AND archived = 0 GROUP BY show_date, start_time ORDER BY show_date, start_time ");
schedule_block($q, 19);
?>
				</div>
			</li>
			<li>
				<div class="movieSlide">
				
		<div id="schedule_info_22-1" class="schedule_info" style="margin-bottom: 200px; float: left;">
		
<?

//echo "<br>SELECT *, CASE start_time WHEN '00:00' THEN '24:00' WHEN '00:30' THEN '24:30' ELSE start_time END AS mod_time FROM `custom_show_schedule`  WHERE (start_time >= '21:00' OR start_time < '01:00') AND show_date >= '$today' AND show_date <= '$last_day' AND archived = 0 GROUP BY show_date, start_time ORDER BY show_date, mod_time ";
$q = mysql_query("SELECT *, CASE start_time WHEN '00:00' THEN '24:00' WHEN '00:30' THEN '24:30' ELSE start_time END AS mod_time FROM `custom_show_schedule`  WHERE (start_time >= '21:00' OR start_time < '01:00') AND show_date >= '$today' AND show_date <= '$last_day' AND archived = 0 GROUP BY show_date, start_time ORDER BY show_date, mod_time ");
schedule_block($q, 22);
?>
		</div>
		</li>
	</ul>
		
		
		
		
		
		
		
		</div>
		
	</div>

<?
function schedule_block($q, $start, $east = 0) {
	
	echo '<div class="schedule_time" id="blank" style="width: 82px;">
				&nbsp;
			  </div>
			  <div class="schedule_time" id="'.$start.'">
				'.format_time($start).'
			  </div>
			  <div class="schedule_time" id="'.($start+1).'">
				'.format_time($start+1).'
			  </div>
			  <div class="schedule_time" id="'.($start+2).'">
				'.format_time($start+2).'
			  </div>';		  
	$c = 1;
	if($start < 10) {
		$start = "0$start";
	}
	$slot = array();
	while($show = mysql_fetch_assoc($q)) {
		if($east) {
			$show[show_date] = date('Y-m-d', strtotime($show[show_date])+86400);
			$zone = '_east';
		}
		$show[show_date] = str_replace("-", "", $show[show_date]);
		if($day != $show[show_date]) {
			if($day) {
				$slot[] = '<div id="daily_row-'.$day.'-'.$start.'" class="daily_row"></div><div class="schedule_day">'.date("m-d", strtotime($show[show_date])).'<br />'.date("D", strtotime($show[show_date])).'</div>';
			} else {
				$slot[] = '<div class="schedule_day">'.date("m-d", strtotime($show[show_date])).'<br />'.date("D", strtotime($show[show_date])).'</div>';
			}
			$day = $show[show_date];
			$previousHour = 1;
			$totaltime = 0;
			if($c % 2) {
				$even = '';
			} else {
				$even = '_even';
			}
			$c++;
		}
		
		$showtime = str_replace(":", "", "0$show[duration]");

		if($start != 1 && $show[start_time] < "$start:00" && $show[mod_time] < "24:00") {
			if($showtime == '0030' || $showtime == '0100') {
				continue;
			} else if($showtime == '0130') {
				$showtime = '0030';
			} else if($showtime == '0200') {
				$showtime = '0100';
			} else if($showtime == '0230') {
				if(("$start:00" - $show[start_time]) == 1) {
					if(strstr($show[start_time], ":30")) {
						$showtime = '0200';
					} else {
						$showtime = '0130';
					}
				} else if(("$start:00" - $show[start_time]) == "1:30") {
					$showtime = '0100';
				} else if(("$start:00" - $show[start_time]) == 2) {
					if(strstr($show[start_time], ":30")) {
						$showtime = '0100';
					} else {
						$showtime = '0030';
					}
				} else {
					$showtime = '0030';
				}
				//echo "$show[start_time] - ".("$start:00" - $show[start_time]); 
			} else {
				$showtime = '0200';
			}
		}
		
		
		if($start == 1 && ($show[start_time] >= "23:00" || $show[start_time] < "01:00")) {
			if($showtime == '0030' || $showtime == '0100') {
				continue;
			} else if($showtime == '0130' && $show[start_time] == '23:00') {
				continue;
			} else if($showtime == '0130' && $show[start_time] == '23:30') {
				continue;
			} else if($showtime == '0130' && $show[start_time] == '00:00') {
				$showtime = '0030';
			} else if($showtime == '0130' && $show[start_time] == '00:30') {
				$showtime = '0100';
			} else if($showtime == '0200' && $show[start_time] == '23:00') {
				continue;
			} else if($showtime == '0200' && $show[start_time] == '23:30') {
				$showtime = '0030';
			} else if($showtime == '0200' && $show[start_time] == '00:00') {
				$showtime = '0100';
			} else if($showtime == '0200' && $show[start_time] == '00:30') {
				$showtime = '0130';
			} else if($showtime == '0230' && $show[start_time] == '23:00') {
				$showtime = '0030';
			} else if($showtime == '0230' && $show[start_time] == '23:30') {
				$showtime = '0100';
			} else if($showtime == '0230' && $show[start_time] == '00:00') {
				$showtime = '0130';
			} else if($showtime == '0230' && $show[start_time] == '00:30') {
				$showtime = '0200';
			} else {
				$showtime = '0200';
			}
		}
		
		if($showtime == '0100') {
			$totaltime += 60;
		} else if($showtime == '0130') {
			$totaltime += 90;
		} else if($showtime == '0200') {
			$totaltime += 120;
		} else if($showtime == '0230') {
			$totaltime += 150;
		} else {
			$totaltime += 30;
		}
		
		
		if($totaltime == 210) {
			$showtime = '0100';
		} else if($totaltime == 240 && $showtime == '0230') {
			$showtime = '0130';
		} else if($totaltime == 240) {
			$showtime = '0100';
		} else if($totaltime == 270 && $showtime == '0230') {
			$showtime = '0100';
		} else if($totaltime == 300 && $showtime == '0230') {
			$showtime = '0030';
		}
		
		if(stristr($show[title], 'TV Cinema')) {
			$showEpisode = 1;
		} else if(stristr($show[title], 'Model Latina')) {
			$showEpisode = 1;
		} else if(stristr($show[title], 'New York Undercover')) {
			$showEpisode = 1;
		} else if(stristr($show[title], 'Prison Break')) {
			$showEpisode = 1;
		} else {
			$showEpisode = 0;
		}
		
		$slot[] = '<div id="'.$day.'-'.$start.'_'.$show[id].'" class="schedule_show_'.$showtime.' '.str_replace(" ", "_", $show[genre]).'">
						'.$show[title].($showEpisode ? '<div style="padding-top: 3px; font-size: 12px">"'.$show[episode_title].'"</div>' : '').'					
					</div>';
		$slot[] = '<div id="desc-'.$show[id].'" class="schedule_description"><b><div style="font-size: 18px;">'.($show[show_link] ? '<a style="color: #0097C2;" href="/'.$show[show_link].'">' : '').$show[title].($show[show_link] ? '</a>' : '').'</div></b>'.($show[episode_title] ? '<div style="padding-top: 25px;">"'.$show[episode_title].'"</div><div style="padding-top: 10px;">' : '<div style="padding-top: 15px;">').''.$show[description].'</div></div>';

	}
	
	$slot[] = '<div id="daily_row-'.$day.'-'.$start.'" class="daily_row"></div></div>';
	
	//$slot = array_reverse($slot);
	foreach($slot as $row) {
		echo $row;
	}

	
}	

function format_time($time) {
	$suffix = 'a.m.';
	if($time >= 12) {
		if($time != 24) {
			$suffix = 'p.m.';
		}
		if($time != 12) {
			$time -= 12;
		}
	}
	return "$time:00 $suffix";
}