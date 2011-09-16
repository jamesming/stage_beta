http://www.ibm.com/developerworks/xml/library/x-youtubeapi/
http://code.google.com/apis/youtube/2.0/developers_guide_protocol.html#Retrieving_playlists
http://gdata.youtube.com/feeds/api/users/mynuvoTV/playlists?v=2
http://tv.localhost/play.php

-webkit-background-size: 1423px 1040px;
-243px -1px;



http://jsfiddle.net/naveen/tqWxc/1/

var playListURL = 'http://gdata.youtube.com/feeds/api/playlists/11F9D7E36E4BFD2A?v=2&alt=json&callback=?';
var videoURL = 'http://www.youtube.com/watch?v=';
$.getJSON(playListURL, function(data) {
    var list_data = "";
    $.each(data.feed.entry, function(i, item) {
        var feedTitle = item.title.$t;
        var feedURL = item.link[1].href;
        var fragments = feedURL.split("/");
        var videoID = fragments[fragments.length - 2];
        var url = videoURL + videoID;
        var thumb = "http://img.youtube.com/vi/" + videoID + "/default.jpg";
        list_data += '<li><a href="' + url + '" title="' + feedTitle + '"><img alt="' + feedTitle + '" src="' + thumb + '"</a></li>';
    });
    $(list_data).appendTo(".cont");
});