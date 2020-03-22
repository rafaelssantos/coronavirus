<?php 
	require_once 'News.php';


	class MonographyManager {
		private static $instance = null;

		private $news_array;


		private function __construct() {
			$this->news_array = array();
		}



		public static function getInstance() {
			if(!self::$instance){
				self::$instance = new MonographyManager();
			}

			return self::$instance;
		}


		public function loadFromJson($file_path, $lang) {
			$json = json_decode(file_get_contents($file_path), true);
            $html = "<li class='publications'>";
            $html .= "<span class='pub-authors'>";
            // if($lang == "pt"){
            //     if($json['type'] == "phd"){
            //         $html .= "[Tese de Doutorado] ";
            //     }
            //     else if($json['type'] == "msc"){
            //         $html .= "[Dissertação de Mestrado] ";
            //     }
            // }
            // else{
            //     if($json['type'] == "phd"){
            //         $html .= "[PhD Thesis] ";
            //     }
            //     else if($json['type'] == "msc"){
            //         $html .= "[MSc Thesis] ";
            //     }
            // }
            $html .= $json['author'] . ".</span> " .
                    "<span class='pub-authors'>" . $json['supervisor1'];
            if($lang == "pt"){
                $html .= " (Orientador)";
            }
            else{
                $html .= " (Advisor)";
            }

            if(!empty($json['supervisor2'])){
                $html .= ". <span class='pub-authors'>" . $json['supervisor2'];
                if($lang == "pt"){
                    $html .= " (Co-orientador)";
                }
                else{
                    $html .= " (Co-Advisor)";
                }
            }
            
            $html .= ".</span> " .
				"<span class='pub-title'>" . $json['title'] . ".</span> " .
                "<span class='pub-local'>" . $json['program'] . ".</span> ";

            $html .= "<span class='pub-local'> (" . $json['start'] . " ─ " . $json['end'] . ")</span> " ;
			
			if(!empty($json['link'])){
			    $html .= " <a target='_blank' href='" . $json['link'] ."'><i class='fa fa-external-link'></i></a> ";
			}
					
			$html .= "</li>";
			return $html;
		}
	}

 ?>