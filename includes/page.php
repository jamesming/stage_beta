<?

	class page {

		public $path = "";
		public $URL = "";
		public $section = "";
	
		public $template = "";
	
		public $title = "nuvoTV Official Site: Latino Entertainment Television, Casting Calls, Original Reality TV Shows, Model Latina, Comedy, Lifestyle, Sweepstakes";
		public $description = "mynuvoTV.com celebrates the lives of bicultural Latinos through compelling comedy, reality, movies and extreme sports programming, including the first-ever Latina modeling competition, Model Latina, the Latin pop culture comedy show Latino 101, and the first-ever Web-to-TV reality series Elle &amp; Tito: The Married Life. The Imagen Award-nominated network also airs classic shows like New York Undercover and Freddie.";
		public $keywords = "nuvotv, sitv, Casting Call, Audition, Model Latina Miami, Latino 101, Adrenalina, Elle &amp; Tito: The Married Life, New York Undercover, Freddie, On the Up, Fandemonium, Jammin, Crash the Parties, Belkys Galvez, Codie Cabral";

 		
		public $facebook = "";
		public $extraHeader = Array();
		public $bodyClasses = Array();		

		public $components = Array();
		
		public $footerScripts = Array();	

		function init($pageID) {
			$this->fullURL = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
			$this->path = $pageID;
			$this->URL = "/" . $pageID;			

			$this->section = (strpos($pageID, "/") !== FALSE) ? substr($pageID, 0, strpos($pageID, "/")) : $pageID;
		}

		function getBodyClasses() {
			$retval = "";
			
			$pageOnly = (strrpos($this->path, "/") !== FALSE) ? substr($this->path, strrpos($this->path, "/") + 1) : $this->path;
			
			$error404 = false;
			foreach($this->bodyClasses as $index => $key) {
				if ($key == "error-404") {
					$error404 = true;
				}
			}
			
			if ($error404 == false) {
//				$this->bodyClasses[] = "section-" . $this->section;

				$sections = explode("/", $this->path);
				$i = 0;
				foreach($sections as $section) {
					$this->bodyClasses[] = "section-" . $section;
					$i++;
				}

				$this->bodyClasses[] = "page-" . $pageOnly;
				$page->bodyClasses[] = "tpl-" . $this->template;
			}
			
			foreach($this->bodyClasses as $index => $key) {
				$retval .= "$key ";
			}
			$retval = rtrim($retval);
			
			return $retval;
		}
	}
	
	$page = new page();	
?>
