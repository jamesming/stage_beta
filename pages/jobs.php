<?
	$page->title = "nuvoTV Jobs | nuvoTV Official Site";
	$page->template = "standard";
	$page->bodyClasses[] = "layout-full";
		
	$page->components["hero"] = <<<EOHERO
	<div class="title">
		<img src="/assets/images/titles/jobs.png" alt="Jobs" />
	</div>
EOHERO;

	$page->components["content"] = <<<EOCONTENT
	<div class="main white-box">
		<iframe width="960" height="950" frameborder="0" align="middle" src="http://sitv.net-apply.com/qs_.asp" target="_blank" bgcolor="#FFFFFF"> </iframe>
    </div>	
EOCONTENT;
/*
	<div class="main white-box">
            	<h1 class="title">nuvoTV Jobs</h1>
		        			    	      <div class="node">
            <span class="submitted"></span>
    <div class="content"><div class="sitv-jobs"><iframe width="100%" height="950" frameborder="0" align="middle" src="./nuvoTV Jobs   nuvoTV Official Site_files/qs_.htm" target="_blank" bgcolor="#FFFFFF"> </iframe></div></div>
	    <div class="taxonomy"></div>
      </div>
	            </div>	
*/
?>