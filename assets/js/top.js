function printAd(tile, size) {
return;
//	var adSize = "";
	var width = "";
	var height = "";
	switch(size) {
		case 1:
			width = 728;
			height = 90;
//			adSize = "728x90";
			break;
		case 2:
			width = 160;
			height = 600;
//			adSize = "160x600";
			break;
		case 3:
			width = 300;
			height = 250;
//			adSize = "300x250";
			break;			
	}

	var urlzones = self.location.pathname.toLowerCase().split("/");	
	var sitvAd = urlzones[1];
	
	if( urlzones[1] == "" ) {
		sitvAd = "homepage";
	}

	if (typeof ord=='undefined') {
		ord=Math.random()*10000000000000000;
	}

	// based off http://www.google.com/support/dfa/partner/bin/answer.py?answer=134572	
	document.write ('<iframe src="http://ad.doubleclick.net/adi/sitv.site177.tmus/' + sitvAd + ';tile=' + tile + ';dcopt=ist;sz=' + width+'x'+height + ';ord=' + ord + '?" WIDTH=' + width + ' HEIGHT=' + height + ' MARGINWIDTH=0 MARGINHEIGHT=0 HSPACE=0 VSPACE=0 FRAMEBORDER=0 SCROLLING=no BORDERCOLOR="transparent"></iframe>');

//	old code
//	document.write ('<sc'+'ript language="JavaScript" src="http://ad.doubleclick.net/adj/sitv.site177.tmus/'+sitvAd+';tile='+tile+';dcopt=ist;sz='+width+'x'+height+';ord=' + ord + '?" type="text/javascript"></scr'+'ipt>');
	
}