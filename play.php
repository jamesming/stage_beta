<style>
body{
font-family:  Helvetica,Arial,'Liberation Sans',FreeSans,sans-serif 		
}
.float_left{
float:left;
}
.float_right{
float:right;
}
.clearfix{
clear:both;	
}
.youtube_widget{
border:1px dotted red;
width:360px;
height:125px;	
padding:0px 0px 10px 0px;
}
.youtube_widget ul.playlist{
margin:12px 0px 0px 0px;
padding:0px 0px 0px 12px;
list-style-type:none;
}
.youtube_widget .playlist li{
float:left;
margin:0px 5px 0px 0px;	
}	
.youtube_widget .playlist a, #player_div #close_button{
cursor:pointer;
}
#player_div #close_button{
text-align:right;
}
.youtube_widget .playlist img{
width:52px;
}
.youtube_widget #youtube_widget_top{
background-color: #D2D7D6;
background-image: url("/assets/images/youTUBE-logo.png");
background-position: 13px 3px;
background-repeat: no-repeat;
height:40px;
}
.youtube_widget #youtube_widget_bottom{
	font-size:12px;
	text-align:right;
	font-weight:bold;
	padding:9px 9px 0px 0px;
	
}


#player_div{
display:none;
height:245px;
width:360px; 
border:1px dotted red;
}
iframe#youtube_iframe{
width:auto;
height:200px;
margin:0px 0px 0px 25px;
}

</style>
<body>
<div  class='youtube_widget ' >
	<div  id='youtube_widget_top'>
	</div>
	<ul class="playlist">
	</ul>
	<div  id='youtube_widget_bottom'  class='clearfix ' >
		Watch our Youtube Channel
	</div>	
</div>

<div  id='player_div'>
	<div  id='close_button'>
		close[x]
	</div>
	<iframe  
		id='youtube_iframe' 
		src='' 
		frameborder='0' 
		allowfullscreen >
	</iframe>	
</div>
</body>
	
	


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.js"></script>

<script type="text/javascript" language="Javascript">
	$(document).ready(function() { 
			var playListURL = 'http://gdata.youtube.com/feeds/api/playlists/11F9D7E36E4BFD2A?v=2&alt=json&callback=?';
			var videoURL = 'http://www.youtube.com/watch?v=';
			$.getJSON(playListURL, function(data) {
			    var list_data = "";
			    $.each(data.feed.entry, function(i, item) {
			    	if( i < 6 ){
			    		

			        var feedTitle = item.title.$t;
			        var feedURL = item.link[1].href;
			        var fragments = feedURL.split("/");
			        var videoID = fragments[fragments.length - 2];
			        var url = videoURL + videoID;
			        var thumb = "http://img.youtube.com/vi/" + videoID + "/default.jpg";
			        // list_data += '<li><a  class="launch" target="_blank" href="' + url + '" title="' + feedTitle + '"><img alt="' + feedTitle + '" src="' + thumb + '"</a></li>';
			        list_data += '<li><a videoID="'+videoID+'" class="launch" title="' + feedTitle + '"><img alt="' + feedTitle + '" src="' + thumb + '"</a></li>';
			
			    	};
			    });
			    $(list_data).appendTo(".playlist");
			});	

			$('.launch')
			.live('click', function() {
					$('#player_div').show();
					$('#youtube_iframe').attr('src','http://www.youtube.com/embed/'+$(this).attr('videoID')+'?autoplay=1');
			})
			
			
			$('#close_button').click(function(event) {
					$('#player_div').hide();
					$('#youtube_iframe').attr('src','');
			});	

	});

</script>
