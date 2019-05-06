<?php 

class DbArray
{
	
	public function resultToArray($result) {
	$array = array();
	while (($row = $result-> fetch_assoc()) != false) {
		$array[] = $row;
	}
	return $array;
}
}