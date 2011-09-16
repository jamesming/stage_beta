<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jQuery Countdown</title>
<script type="text/javascript" src="/misc/jquery.js?6"></script>
<script type="text/javascript" src="/js/jquery.countdown.pack.js"></script>
<link rel="stylesheet" type="text/css" href="/css/countdown.css" />

<script type="text/javascript">
$(function () {
$('#countdown').countdown({until:$.countdown.UTCDate(-8, 2012,  1 - 1, 1), format: 'DHMS', layout: 
'<div id="timer">' + '<hr />'+
	'<div id="timer_days" class="timer_numbers">{dnn}</div>'+
	'<div id="timer_hours" class="timer_numbers">{hnn}</div>'+ 
	'<div id="timer_mins" class="timer_numbers">{mnn}</div>'+
	'<div id="timer_seconds" class="timer_numbers">{snn}</div>'+
'<div id="timer_labels">'+
	'<div id="timer_days_label" class="timer_labels">days</div>'+
	'<div id="timer_hours_label" class="timer_labels">hours</div>'+
	'<div id="timer_mins_label" class="timer_labels">mins</div>'+
	'<div id="timer_seconds_label" class="timer_labels">secs</div>'+
'</div>'+							
'</div>'					  
});
});
</script>

</head>
<body>
<p id="demoPage">This is a demo by 1 Plus Design, <a href="add-countdown-timer-website" title="Return to tutorial">CLICK HERE</a> to return to tutorial.</p>

<div id="wrapper">
	<div id="countdown"></div><!--close countdown-->
</div><!--close wrapper-->
</body>
</html>


