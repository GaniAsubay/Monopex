<?php
class Db 
{
	static function connect(){
		global $mysqli;
		$mysqli = new mysqli('localhost','root','','hash');
	    $mysqli->query("SET CHARSET utf8");
}
}	