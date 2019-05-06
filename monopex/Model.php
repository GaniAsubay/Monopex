<?php 

class Model{
	public function connectDb(){
		global $mysqli;
		$mysqli = new mysqli('localhost','root','','monopex');
		$mysqli->query("SET CHARSET utf8");
	}
	
	public function getUser(){
		global $mysqli;
		Model::connectDb();
		$result = $mysqli->query("SELECT * FROM `directory` ORDER BY `id`DESC");
		return Model::resultToArray($result);
	}

	public function resultToArray ($result) {
		$array = array();
		while (($row = $result-> fetch_assoc()) != false) {
			$array[] = $row;
		}
		return $array;
	}
}