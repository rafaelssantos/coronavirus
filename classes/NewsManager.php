<?php 
	require_once 'News.php';


	class NewsManager {
		private static $instance = null;

		private $news_array;


		private function __construct() {
			$this->news_array = array();
		}



		public static function getInstance() {
			if(!self::$instance){
				self::$instance = new NewsManager();
			}

			return self::$instance;
		}


		public function generateNewsHeadline($json_url){
			$files = array();
			
			foreach (new DirectoryIterator("{$json_url}/") as $fileinfo) {
				if($fileinfo->isDot()){
					continue;
				}
				$files[] = $fileinfo->getFilename();
			}

			arsort($files);
			$html = "";

			foreach ($files as $file) {
				$json = json_decode(file_get_contents("{$json_url}/" . $file), true);

				$html .= "<a  href='" . $json["url"] . "' class='news-headline-container'>" .
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
