<style>
#my-global-wrap {
	background: url('images/OO_BACKGROUND-v2.jpg') no-repeat scroll 50% 0 transparent;
	height: 1650px;
}

a:link, a:visited, a:active {
    color: #0097C2;
    font-size: 15px;
    outline: medium none;
    text-decoration: none;
}

.black_link:hover {
	text-decoration: underline;
}

.star_image {
	margin-bottom: 3px;
	padding-right: 5px;
}

.next_showing {
	float: left;
	width: 350px;
	height: 175px;
}

.twtr-ft {
	display: none;
}

.sn_icon {
	margin-left: 13px;
	border: none;
	text-decoration: none;
}

img {
    border: 0 none;
}

br { clear: both; }
      .cntSeparator {
        font-size: 30px;
        margin: 0px 7px;
        color: #000;
      }

</style>
<link rel="stylesheet" type="text/css" href="css/fcs_style.css" />
<?
if(strstr($_SERVER[REQUEST_URI], 'blog')) {
	if(strpos($_SERVER['HTTP_USER_AGENT'],'iPhone')) {
		echo '<link rel="stylesheet" href="css/ipad_blog.css" type="text/css" />
	';
	}
	echo '	<link rel="stylesheet" media="only screen and (device-width: 768px)" href="css/ipad_blog.css" type="text/css" />
';
} else {
	if(strpos($_SERVER['HTTP_USER_AGENT'],'iPhone')) {
		echo '<link rel="stylesheet" href="css/ipad.css" type="text/css" />
	';
	}
	echo '	<link rel="stylesheet" media="only screen and (device-width: 768px)" href="css/ipad.css" type="text/css" />
';
}
?>

<link rel="stylesheet" href="/misc/prettyphoto/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />

<link rel="image_src" href="http://www.mynuvotv.com/operation-osmin/images/OO-logo.png" />

<script src="http://admin.brightcove.com/js/APIModules_all.js">
</script>
<script language="JavaScript" type="text/javascript" src="http://admin.brightcove.com/js/BrightcoveExperiences.js"></script>
<script type="text/javascript" src="/sites/all/themes/sitv/js/operative.js?6"></script>
<script src="/js/jquery-1.6.1.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/jquery.bgpos.js"></script>
<script type="text/javascript" src="js/jquery-easing-1.3.pack.js"></script>
<script type="text/javascript" src="js/jquery-easing-compatibility.1.2.pack.js"></script>
<script type="text/javascript" src="js/coda-slider.1.1.1.pack.js"></script>
<script type="text/javascript" src="js/jquery.countdown_new.js"></script>
<script src="/misc/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
		$("a[rel^='prettyPhoto']").prettyPhoto();
	});
</script>		
<script type="text/javascript" src="/js/jquery-ui-1.8.13.custom.min.js"></script>
<script type="text/javascript" src="/js/jquery.beforeafter-1.3.js"></script>

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
var dayArray = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
</script>

<script>
$(document).ready(function() {
	//Updates the times to match the client's time zone
	$('span[class*=schedule_time]').each(function() {
		var time = $(this).attr('id').substr(0, 2);
		var slot = $(this).attr('id').substr(-1);
		var og_time = $(this).html();
		var mins = og_time.substr(og_time.indexOf(':'), 3);
		var local_time = parseInt(time) + parseInt(time_diff);
		if(local_time < 0) {
			var day = $('#slot-'+slot).html().substr(0, $('#slot-'+slot).html().indexOf(' '));
			var month = parseInt($('#slot-'+slot).html().substr($('#slot-'+slot).html().indexOf(' '), $('#slot-'+slot).html().indexOf('/')));
			var date = parseInt($('#slot-'+slot).html().substr($('#slot-'+slot).html().indexOf('/')+1));
			
			//day = 'Monday';
			//month = 3;
			//date = 1;
			
			var daySlot = dayArray.indexOf(day);
			if(daySlot == 0) {
				daySlot = 7;
			}
					
			date = parseInt(date) - 1;
			if(date == 0) {
				nDate = new Date(d.getFullYear(), month, date).getMonth()+'/'+new Date(d.getFullYear(), month-1, date).getDate();
			} else {
				nDate = new Date(d.getFullYear(), month, date).getMonth()+'/'+new Date(d.getFullYear(), month, date).getDate();
			}
			$('#slot-'+slot).html(dayArray[daySlot-1]+' '+nDate);
		}
		$('#slot-'+slot).show();
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
		$(this).show();
	});
});
</script>	

<?

include_once('../db_include.php');

$july4 = strtotime("July 4, 2011 6:00 PM");

$time_left = $july4 - time();

$days_left = floor($time_left / 86400); 

if($days_left < 10) {
	$days_left = "0$days_left";
}

$time_left -= ($days_left * 86400);

$hours_left = floor($time_left / 3600);

if($hours_left < 10) {
	$hours_left = "0$hours_left";
}

$time_left -= ($hours_left * 3600);

$mins_left = floor($time_left / 60);

if($mins_left < 10) {
	$mins_left = "0$mins_left";
}

$secs_left = $time_left - floor($mins_left * 60);

if($secs_left < 10) {
	$secs_left = "0$secs_left";
}

?>

	<script type="text/javascript">
	
		var theInt = null;
		var $crosslink, $navthumb;
		var curclicked = 0;
		
		var thumb_1_first = true;
		var thumb_2_first = true;
		var thumb_3_first = true;
		var thumb_4_first = true;
		var thumb_5_first = true;
		var thumb_6_first = true;
		var thumb_7_first = true;
		var thumb_8_first = true;
		var thumb_9_first = true;
		var thumb_10_first = true;
		
		theInterval = function(cur){
			clearInterval(theInt);
			
			if( typeof cur != 'undefined' )
				curclicked = cur;
			
			$crosslink.removeClass("active-thumb");
			$navthumb.eq(curclicked).parent().addClass("active-thumb");
				$(".stripNav ul li a").eq(curclicked).trigger('click');
			
			theInt = setInterval(function(){
				$crosslink.removeClass("active-thumb");
				$navthumb.eq(curclicked).parent().addClass("active-thumb");
				$(".stripNav ul li a").eq(curclicked).trigger('click');
				curclicked++;
				if( 5 == curclicked )
					curclicked = 0;
				
			}, 25000);
		};
		
		$(function(){
			
			$("#main-photo-slider").codaSlider();
			
			$navthumb = $(".nav-thumb");
			$crosslink = $(".cross-link");
			
			$navthumb
			.click(function() {
				var $this = $(this);
				theInterval($this.parent().attr('href').slice(1) - 1);
				return false;
			});
			
			theInterval();
		});
		
		 $(function(){
			$('#counter').countdown({
				stepTime: 60,
				format: 'dd:hh:mm:ss',
				startTime: "<?= "$days_left:$hours_left:$mins_left:$secs_left" ?>",
				digitImages: 6,
				digitWidth: 27,
				digitHeight: 40,
				timerEnd: function() { alert('end!!'); },
				image: "images/digits.png"
			 });
		});
		
		$(function(){
			$('#thumb_1').click(function() {
				$('#recruit_info').hide();
				$('#biankha_info').hide();
				$('#willy_info').hide(); 
				$('#khalia_info').hide();
				$('#adriana_info').hide();
				$('#drew_info').hide();
				$('#domina_info').hide();
				$('#louisa_info').hide();
				$('#christian_info').hide();
				$('#adam_info').hide();
				$('#joe_info').show();
				if(thumb_1_first) {
					$(function(){
						$('#joe-bna').beforeAfter({
							showFullLinks : false
						});
					});
					thumb_1_first = false;					
				}
			});
			$('#thumb_2').click(function() {
				$('#recruit_info').hide();
				$('#joe_info').hide();
				$('#willy_info').hide(); 
				$('#khalia_info').hide();
				$('#adriana_info').hide();
				$('#drew_info').hide();
				$('#domina_info').hide();
				$('#louisa_info').hide();
				$('#christian_info').hide();
				$('#adam_info').hide();
				$('#biankha_info').show();
				if(thumb_2_first) {
					$(function(){
						$('#biankha-bna').beforeAfter({
							showFullLinks : false
						});
					});
					thumb_2_first = false;					
				}
			});
			$('#thumb_3').click(function() {
				$('#recruit_info').hide();
				$('#joe_info').hide(); 
				$('#biankha_info').hide();
				$('#khalia_info').hide();
				$('#adriana_info').hide();
				$('#drew_info').hide();
				$('#domina_info').hide();
				$('#louisa_info').hide();
				$('#christian_info').hide();
				$('#adam_info').hide();
				$('#willy_info').show();
				if(thumb_3_first) {
					$(function(){
						$('#willy-bna').beforeAfter({
							showFullLinks : false
						});
					});
					thumb_3_first = false;					
				}
			});
			$('#thumb_4').click(function() {
				$('#recruit_info').hide();
				$('#joe_info').hide(); 
				$('#biankha_info').hide();
				$('#willy_info').hide();
				$('#adriana_info').hide();
				$('#drew_info').hide();
				$('#domina_info').hide();
				$('#louisa_info').hide();
				$('#christian_info').hide();
				$('#adam_info').hide();
				$('#khalia_info').show();
				if(thumb_4_first) {
					$(function(){
						$('#khalia-bna').beforeAfter({
						showFullLinks : false
						});
					});
					thumb_4_first = false;
				}
			});
			$('#thumb_5').click(function() {
				$('#recruit_info').hide();
				$('#joe_info').hide(); 
				$('#biankha_info').hide();
				$('#willy_info').hide();
				$('#khalia_info').hide();
				$('#drew_info').hide();
				$('#domina_info').hide();
				$('#louisa_info').hide();
				$('#christian_info').hide();
				$('#adam_info').hide();
				$('#adriana_info').show();
				if(thumb_5_first) {
					$(function(){
						$('#adriana-bna').beforeAfter({
						showFullLinks : false
						});
					});
					thumb_5_first = false;
				}
			});
			$('#thumb_6').click(function() {
				$('#recruit_info').hide();
				$('#joe_info').hide(); 
				$('#biankha_info').hide();
				$('#willy_info').hide();
				$('#khalia_info').hide();
				$('#adriana_info').hide();
				$('#domina_info').hide();
				$('#louisa_info').hide();
				$('#christian_info').hide();
				$('#adam_info').hide();
				$('#drew_info').show();
				if(thumb_6_first) {
					$(function(){
						$('#drew-bna').beforeAfter({
						showFullLinks : false
						});
					});
					thumb_6_first = false;
				}
			});
			$('#thumb_7').click(function() {
				$('#recruit_info').hide();
				$('#joe_info').hide(); 
				$('#biankha_info').hide();
				$('#willy_info').hide();
				$('#khalia_info').hide();
				$('#adriana_info').hide();
				$('#drew_info').hide();
				$('#louisa_info').hide();				
				$('#christian_info').hide();
				$('#adam_info').hide();
				$('#domina_info').show();
				if(thumb_7_first) {
					$(function(){
						$('#domina-bna').beforeAfter({
						showFullLinks : false
						});
					});
					thumb_7_first = false;
				}
			});
			$('#thumb_8').click(function() {
				$('#recruit_info').hide();
				$('#joe_info').hide(); 
				$('#biankha_info').hide();
				$('#willy_info').hide();
				$('#khalia_info').hide();
				$('#adriana_info').hide();
				$('#drew_info').hide();
				$('#domina_info').hide();
				$('#christian_info').hide();
				$('#adam_info').hide();
				$('#louisa_info').show();
				if(thumb_8_first) {
					$(function(){
						$('#louisa-bna').beforeAfter({
						showFullLinks : false
						});
					});
					thumb_8_first = false;
				}
			});
			$('#thumb_9').click(function() {
				$('#recruit_info').hide();
				$('#joe_info').hide(); 
				$('#biankha_info').hide();
				$('#willy_info').hide();
				$('#khalia_info').hide();
				$('#adriana_info').hide();
				$('#drew_info').hide();
				$('#domina_info').hide();
				$('#louisa_info').hide();
				$('#adam_info').hide();
				$('#christian_info').show();
				if(thumb_9_first) {
					$(function(){
						$('#christian-bna').beforeAfter({
						showFullLinks : false
						});
					});
					thumb_9_first = false;
				}
			});			
			$('#thumb_10').click(function() {
				$('#recruit_info').hide();
				$('#joe_info').hide(); 
				$('#biankha_info').hide();
				$('#willy_info').hide();
				$('#khalia_info').hide();
				$('#adriana_info').hide();
				$('#drew_info').hide();
				$('#domina_info').hide();
				$('#louisa_info').hide();
				$('#christian_info').hide();
				$('#adam_info').show();
				thumb_10_first = false;
				if(thumb_10_first) {
					$(function(){
						$('#adam-bna').beforeAfter({
						showFullLinks : false
						});
					});
					thumb_10_first = false;
				}
			});
			
			$('#text_1').click(function() {
				$('#thumb_1').click();
			});
			$('#text_2').click(function() {
				$('#thumb_2').click();
			});
			$('#text_3').click(function() {
				$('#thumb_3').click();
			});
			$('#text_4').click(function() {
				$('#thumb_4').click();
			});
			$('#text_5').click(function() {
				$('#thumb_5').click();
			});
			$('#text_6').click(function() {
				$('#thumb_6').click();
			});
			$('#text_7').click(function() {
				$('#thumb_7').click();
			});
			$('#text_8').click(function() {
				$('#thumb_8').click();
			});
			$('#text_9').click(function() {
				$('#thumb_9').click();
			});
			$('#text_10').click(function() {
				$('#thumb_10').click();
			});
			
<?	if($_GET[recruit] == 5) {
?>
		$('#recruit_info').hide();
		$('#adriana_info').show();
		$('#thumb_5').click();
<?
	}
	if($_GET[recruit] == 6) {
?>
		$('#recruit_info').hide();
		$('#drew_info').show();
		$('#thumb_6').click();
<?
	}
		if($_GET[recruit] == 7) {
?>
		$('#recruit_info').hide();
		$('#domina_info').show();
		$('#thumb_7').click();
<?
	}
	if($_GET[recruit] == 8) {
?>
		$('#recruit_info').hide();
		$('#louisa_info').show();
		$('#thumb_8').click();
<?
	}
	if($_GET[recruit] == 9) {
?>
		$('#recruit_info').hide();
		$('#christian_info').show();
		$('#thumb_9').click();
<?
	}
	if($_GET[recruit] == 10) {
?>
		$('#recruit_info').hide();
		$('#adam_info').show();
		$('#thumb_10').click();
<?
	}	
?>
		});
	</script>

<script type="text/javascript">

/*
$(function(){
	$('#a a')
		.css( {backgroundPosition: "-40px 70px"} )
		.mouseover(function(){
			$(this).stop().animate({backgroundPosition:"(-40px 188px)"}, {duration:500})
		})
		.mouseout(function(){
			$(this).stop().animate({backgroundPosition:"(80px 70px)"}, {duration:200, complete:function(){
				$(this).css({backgroundPosition: "-40px 70px"})
			}})
		})
});
*/
</script>
</head>

<body id="page-operation-osmin" class="section-operation-osmin" style="background-color: #9EC9F6; background-image: none;" >

<? include_once($_SERVER["DOCUMENT_ROOT"] ."/misc/analyticstracking.php"); ?>

<?

$now = time();

$wed = strtotime("August 31, 2011 8:00am");

if($_GET[wed]) {
	$now = strtotime("August 31, 2011 8:01am");
}

?>

<div class="not-front logged-in page-node node-type-page one-sidebar sidebar-right">
<div id="my-global-wrap"  style="">
<div id="my-container" style="width: 1000px;">
<!--header -->

<div id="top_block" style="width: 100%; height: 280px;">
	<div id="my-header" style="float: left; width: 740px; margin-top: 10px;">

		<div class="my-top-ad" style="position: relative; top: 0px; left: 0px; float: left; background: url('images/horizontal-banner-ad.png') no-repeat scroll 0% 0 transparent;">
			<div class="content" style="padding-left: 15px;" >
				<script language="javascript">
					printAd(1,1)
				</script>
			</div>
		</div>

		<!--end of header -->

		<div style="width: 370px; float: left;">
			<a href="/operation-osmin/" ><img src="images/OO-logo.png" /></a>
		</div>
		<div class="next_showing">
			<div style="float: left; padding-left: 31px; width: 350px; padding-top: 27px;">
				<div style="float: left; font-size: 19px; font-weight: bold; height: 25px; padding-top: 0px; color: #FFFFFF;">
					CHECK SCHEDULE FOR SHOWTIMES
				</div>
			</div>
			<div style="font-size: 18px; font-family: Arial; float: left; font-weight: bold; height: 30px; color: black; margin-top: 22px; padding-left: 45px; width: 350px;">
<?
//echo "SELECT * FROM custom_show_schedule WHERE title = 'Operation Osmin' AND archived = 0 AND (show_date > '".date('Y-m-d')."' OR (show_date >= '".date('Y-m-d')."' AND SUBSTR(start_time,1,2) >= ".(date('G')+3).")) ORDER BY id ASC LIMIT 0, 4";

$q = mysql_query("SELECT * FROM custom_show_schedule WHERE title = 'Operation Osmin' AND archived = 0 AND (show_date > '".date('Y-m-d')."' OR (show_date >= '".date('Y-m-d')."' AND SUBSTR(start_time,1,2) >= ".(date('G')+3).")) ORDER BY id ASC LIMIT 0, 4");
$c = 1;
while($r = mysql_fetch_assoc($q)) {
	echo '<span id="slot-'.$c.'" style="display: none;">'.date('l n/j', strtotime($r[show_date])).'</span>';
	echo '<span id="'.substr($r[start_time], 0, 2).'-'.$c.'" class="schedule_time" style="float: right; margin-right: 120px; font-weight: normal; height: 26px; display: none;">'.$r[start_time].'</span><br />';
	$c++;
}

?>
			
			</div>
			<div style="float: left; padding-top: 10px; padding-left: 20px;">
				<!-- <div id="counter"></div>
				<div class="desc" style="font-weight: bold; color: #000000; pading-top: 2px;">
					<div style="float: left; text-align: center; width: 60px;">Days</div>
					<div style="float: left; text-align: center; width: 86px;">Hours</div>
					<div style="float: left; text-align: center; width: 70px;">Mins</div>
					<div style="float: left; text-align: center; width: 75px;">Secs</div>
				 </div> -->
			</div>	
		</div>
	</div>
	<div id="menu_links" style="float: left; width: 250px; height: 285px;">
		<div style="float: left; padding-left: 100px; height: 13px;">
			<a href="http://www.sitv.com/newsletter" target="_blank"><img src="images/newsletter-button.png" style="border: medium none;" /></a>
		</div>
		<div style="float: left; padding-left: 90px; margin-top: 25px; height: 40px;">
			<img src="images/star.png" class="star_image"  /><a href="index.php"><img src="images/nav-main.png" style="border: medium none;" /></a>
		</div>
		<div style="float: left; padding-left: 72px; height: 40px;">
			<img src="images/star.png" class="star_image"  /><a href="about.php"><img src="images/nav-about.png" style="border: medium none;" /></a>
		</div>
		<div style="float: left; padding-left: 54px; height: 40px;">
			<img src="images/star.png" class="star_image" /><a href="osmin.php"><img src="images/nav-osmin.png" style="border: medium none;" /></a>
		</div>
		<div style="float: left; padding-left: 36px; height: 40px;">
			<img src="images/star.png" class="star_image" /><a href="therecruits.php"><img src="images/nav-therecruits.png" style="border: medium none;" /></a>
		</div>
		<div style="float: left; padding-left: 18px; height: 40px;">
<?
if($now > $wed) {
?>
			<img src="images/star.png" class="star_image" /><a href="episodes-adam.php"><img src="images/nav-webisodes.png" style="border: medium none;" /></a>
<?
	} else {
?>
			<img src="images/star.png" class="star_image" /><a href="episodes-louisa.php"><img src="images/nav-webisodes.png" style="border: medium none;" /></a>
<?
	}
?>	
		</div>
		<div style="float: left; padding-left: 0px; height: 40px;">
			<img src="images/star.png" class="star_image" /><a href="mobile.php"><img src="images/nav-mobile.png" style="border: medium none;" /></a>
		</div>

	<!-- <div id="menu_links" style="float: right;">
		<ul id="a">
			<li><a href="#"><img src="images/oo_about.jpg" /></a></li>
			<li><a href="#"><img src="images/oo_osmin.jpg" /></a></li>
			<li><a href="#"><img src="images/oo_recruits.jpg" /></a></li>
		</ul>
	</div> -->
	</div>
</div>