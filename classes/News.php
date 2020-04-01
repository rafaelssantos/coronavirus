<?php

 class News {
 	private $href;
 	private $json_file_path;
 	private $id;


 	public function __construct($id, $href, $json_file_path){
 		$this->id = $id;
 		$this->href = $href;
 		$this->json_file_path = $json_file_path;
 	}


 	public function getJsonFilePath(){
 		return $this->json_file_path;
 	}


 	public function setJsonFilePath($json_file_path){
 		$this->json_file_path = $json_file_path;
 	}


 	public function getHref(){
 		return $this->href;
 	}


 	public function setHref($href){
 		$this->href = $href;
 	}


 	public function getID(){
 		return $this->id;
 	}


 	public function setID($id){
 		$this->id = $id;
 	}
 }
 ?>