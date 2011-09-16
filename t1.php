
<iframe id='framed_player' src='t2.html'   
style='width:500px;height:500px;border:1px dotted red'  >
</iframe><br />
<button id='start'>Start</button> <br />
<button id='stop'>Stop</button> 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.js"></script>
<script type="text/javascript" language="Javascript">

$(document).ready(function() { 

	
	$('button#start').click(function(event) {
				$('#framed_player').attr('src','t2.html');
	});	
	$('button#stop').click(function(event) {
				$('#framed_player').attr('src','');
	});	
	
	var isiPad = navigator.userAgent.match(/iPad/i) != null;
	alert(isiPad);
	
});









</script>