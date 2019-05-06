<?php 
require_once('config/Db.php');
require_once('config/DbArray.php');
$content;

function getCommit(){
	global $mysqli;
	Db::connect();
	$result = $mysqli->query("SELECT * FROM `info_file` ORDER BY `id`DESC");
	return DbArray::resultToArray($result);
}

if($_GET['review']){
	$id = $_GET['review'];
	global $mysqli;
	Db::connect();
	$result = $mysqli->query("SELECT * FROM `info_file` WHERE id=$id");
	$row = $result->fetch_array();
	$commit_content = htmlspecialchars_decode($row['commit_content']);
}
else if($_GET['delete']){
	$id = $_GET['delete'];
	global $mysqli;
	Db::connect();
	$result = $mysqli->query("DELETE FROM `info_file` WHERE id=$id");
}
else if($_GET['back']){
	$id = $_GET['back'];
	global $mysqli;
	Db::connect();
	$result = $mysqli->query("SELECT * FROM `info_file` WHERE id=$id");
	$row = $result->fetch_array();
	$file_content = htmlspecialchars_decode($row['commit_content']);
	$file_way = 'file/index.php';
	$file = fopen($file_way, 'w');
	file_put_contents($file_way, $file_content);
	fclose($file);
}
