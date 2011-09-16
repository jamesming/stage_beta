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
/*
			foreach ($page->components as $key => $value) {
				$html = "\n<div class=\"$key block\">\n$value\n</div>\n";
				$indent = "\t\t\t\t\t";
				echo str_replace("\n", "\n$indent", $html);				
			}
*/			
/*
			// check to see if the content variables are populated, if they are, wrap in applicable blocks
			if (isset($page->components["hero"])) { 
				$page->components["hero"] = "\n<div class=\"hero\">\n{$page->components["hero"]}\n</div>\n";
			} else {
				$page->components["hero"] = "";
			}
			
			if (isset($page->components["content"])) {
				$page->components["content"] = "\n<div class=\"content\">\n{$page->components["content"]}\n</div>\n";
			} else {
				$page->components["content"] = "";
			}
			
			if (isset($page->components["sidebar"])) { 
				$sidebar = "";
				$first = true;
				foreach($page->components["sidebar"] as $item => $value) {
					if ($first != true) {
						$sidebar .= "\t<div class=\"hr\"><hr /></div>\n";
					} else {
						$first = false;
					}
					
					$sidebar .= $value;
				}
				$page->components["sidebar"] = "\n<div class=\"sidebar\">\n$sidebar\n</div>\n";
			} else {
				$page->components["sidebar"] = "";
			}
		
			// $indent and all of the \n's included above are just for formatting the ouput cleanly
			$indent = "\t\t\t\t\t";
			echo str_replace("\n", "\n$indent", $page->components["hero"]);
			echo str_replace("\n", "\n$indent", $page->components["content"]);
			echo str_replace("\n", "\n$indent", $page->components["sidebar"]);
*/		
			include("footer.php");
		}
	}
	
	$template = new tpl_standard();
?>