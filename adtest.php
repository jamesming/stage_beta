<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
	<script type="text/javascript"/>
	
		function printAd(tile,size)
	{
		if (size == 1)
			{
				var adSize = "sz=728x90";
			}
		else if (size == 2)
			{
				var adSize = "sz=160x600";
			}
		else if (size == 3)
			{
				var adSize = "sz=300x250";
			}			
		else
			{
				var adSize = "";
			}
		var urlzones = self.location.pathname.toLowerCase().split("/");
		var sitvAd = urlzones[0];
				if(typeof(urlzones[1])=="undefined")
			{
				var sitvAd = "default";
			}
				else
			{
				var sitvAd = urlzones[1];
			}
		var ord = Math.random()*10000000000000000;
		document.write ('<sc'+'ript language="JavaScript" src="http://ad.doubleclick.net/adj/sitv.site177.tmus/'+sitvAd+';tile='+tile+';dcopt=ist;'+adSize+';ord=' + ord + '?" type="text/javascript"></scr'+'ipt>');
}
		
	</script>
	<title>adtest - exampl</title>
</head>
	<body>
	
		<script language="javascript">
			printAd(1,1)
		</script>
	
	</body>
</html>