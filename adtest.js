	var printAd=function(tile)
	{
		var urlzones = self.location.pathname.toLowerCase().split("/");
		var sitvad = urlzones[1];
		var ord = Math.random()*10000000000000000;
		for(;((ps=urlzones.shift())&&(az=(az[ps]||az["default"])))||(az && (az=(az[ps]||az["default"])));)ad=az;
	
	document.write ('<script language="JavaScript" src="http://ad.doubleclick.net/adj/sitv.site177.tmus/'+ad+';ord=' + ord + '?" type="text/javascript"></script>');
		document.write (urlzones[1]);
		document.write (ord);
		document.write (sitvad);
	}
