<?
/*
	this layout is a top hero area, one main column, and one sidebar

	page components used:

		hero
		content
		sidebar
*/
	
	class tpl_standard {
	
		function render() {
			
			
			
			global $page;

			if (isset($page->components["theme"])) { 
				$page->components["theme"] = "\n<div class=\"theme\">\n{$page->components["theme"]}\n</div>\n";
			} else {
				$page->components["theme"] = "";
			}

		  include("header.php");
			
			
			// check to see if the content variables are populated, if they are, wrap in applicable blocks
			if (isset($page->components["hero"])) { 
				$page->components["hero"] = "\n<div class=\"hero\">\n{$page->components["hero"]}\n</div>\n";
			} else {
				$page->components["hero"] = "";
			}
			
			if (isset($page->components["content"])) {
				$page->components["content"] = "\n<div class=\"content block\">\n{$page->components["content"]}\n</div>\n";
			} else {
				$page->components["content"] = "";
			}

			$indent = "\t\t\t\t\t\t\t";
			echo str_replace("\n", "\n$indent", $page->components["hero"]);
			echo str_replace("\n", "\n$indent", $page->components["content"]);

			
			echo "\n";

			include("footer.php");
		}
	}
	
	$template = new tpl_standard();
?>