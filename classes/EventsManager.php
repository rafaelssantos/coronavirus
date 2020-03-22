<?php 
	require_once 'Events.php';


	class EventsManager {
		private static $instance = null;

		private $events_array;


		private function __construct() {
			$this->events_array = array();
		}



		public static function getInstance() {
			if(!self::$instance){
				self::$instance = new EventsManager();
			}

			return self::$instance;
		}


		public function generateEventsHeadline($lang, $lang_dir, $json_url){
			$files = array();
			
			foreach (new DirectoryIterator("{$json_url}/{$lang_dir}/") as $fileinfo) {
				if($fileinfo->isDot()){
					continue;
				}
				$files[] = $fileinfo->getFilename();
			}

			arsort($files);
			$html = "";

			foreach ($files as $file) {
				$json = json_decode(file_get_contents("{$json_url}/{$lang_dir}/" . $file), true);

				$html .= "<a  href='" . $json["url"] . "' class='events-headline-container'>" .
							"<div class='title-container'>" .
								"<p class='date'>" . $json["date"] . "</p>" .
								"<h3 class='title'>" . $json["title"] . "</h3>" .
							"</div>" .
							"<div class='text-container'>" .
				 				"<p>" . $json['abstract'] . " [...]</p>" .
				 			"</div>".
						"</a>";
			}

			return $html;
		}
	}

 ?>