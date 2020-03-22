<?php 
	require_once 'News.php';


	class PublicationManager {
		private static $instance = null;

		private $news_array;


		private function __construct() {
			$this->news_array = array();
		}



		public static function getInstance() {
			if(!self::$instance){
				self::$instance = new PublicationManager();
			}

			return self::$instance;
		}


		public function loadFromJson($file_path) {
			$json = json_decode(file_get_contents($file_path), true);
			$html = "<li class='publications'>" .
					"<span class='pub-authors'>" . $json['authors'] . ".</span> " .
					"<span class='pub-title'>" . $json['title'] . ".</span> " .
					"<span class='pub-local'>" . $json['local'] . ".</span> ";
			
					if(!empty($json['link'])){
				$html .= " <a target='_blank' href='" . $json['link'] ."'>" . $json['doi'] . " <i class='fa fa-external-link'></i></a> ";
			}
					
			$html .= "</li>";
			return $html;
		}
	}

 ?>