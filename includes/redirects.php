<?

	// redirect key is lowercase!

//	$redirect["page-to-redirect"] = "new-live-page";

	$redirect["adrenalina"] = "series/adrenalina";
	$redirect["chicago-hope"] = "series/chicago-hope";
	$redirect["cristinas-court"] = "series/cristinas-court";
	$redirect["dark-angel"] = "series/dark-angel";
	$redirect["fame"] = "series/fame";
	$redirect["hill-street-blues"] = "series/hill-street-blues";
	$redirect["in-living-color"] = "series/in-living-color";
	$redirect["la-law"] = "series/la-law";
	$redirect["latino-101-s2"] = "series/latino-101-s2";
	$redirect["latino-101-s1"] = "series/latino-101-s1";
	$redirect["miami-ink"] = "series/miami-ink";
	$redirect["model-latina-la"] = "series/model-latina-la";
	$redirect["model-latina-miami"] = "series/model-latina-miami";
	$redirect["model-latina-nyc"] = "series/model-latina-nyc";	
	$redirect["new-york-undercover"] = "series/new-york-undercover";
	$redirect["nypd-blue"] = "series/nypd-blue";
	$redirect["pastport-argentina"] = "series/pastport-argentina";
	$redirect["pastport-colombia"] = "series/pastport-colombia";
	$redirect["pastport-cuba"] = "series/pastport-cuba";
	$redirect["pastport-puerto-rico"] = "series/pastport-puerto-rico";
	$redirect["pastport-venezuela"] = "series/pastport-venezuela";
	$redirect["prison-break"] = "series/prison-break";
	
	$redirect["nuvotv-jobs"] = "jobs";
	$redirect["sitv-jobs"] = "jobs";
	$redirect["get-sitv"] = "find-nuvotv";

//  aliases can be used if you want to have a clean URL go to, for example a PDF with a long file filename -- you could just link to mynuvotv.com/file and have it alias
//	$alias["item-to-alias"] = "silent-redirect-asset.pdf";

	function getFullLocation($page) {
		$host  = $_SERVER['HTTP_HOST'];
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		return "http://$host$uri/$page";
	}
	
	if (isset($redirect[$pageID])) {
		header("Location: " . getFullLocation($redirect[$pageID]), true, 301);
		exit;
	} else if (isset($alias["$pageID"])) {
		header("Location: " . getFullLocation($alias[$pageID]));
		exit;
	}
	
?>