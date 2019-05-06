<?php
$mysqli = new mysqli('localhost','root','','hash');
$mysqli->query('UTF charset-8');
/*global $name;*/
/*$name = $_FILES['file']['name'];*/
/*if(isset($_POST['button'])){*/
	/*upload();*/
	/*header('Location: /');	*/
	$hash = hash_file('md5', 'file/index.php');
	$content =  htmlspecialchars(file_get_contents('file/index.php'));
	$data = $mysqli->query("SELECT * FROM `info_file` WHERE `hash` ='".$hash."'");
	if(mysqli_num_rows($data) == 0){
		$mysqli->query("INSERT INTO `info_file` (`id`, `hash`) VALUES (NULL, '$hash')");
	}
/*}*/
/*function upload(){
	global $name;
	$getMime = explode('.', $_FILES['file']['name']);
	$mime = strtolower(end($getMime));
	$types = array('php', 'html', 'css', 'txt','js');
	if(!in_array($mime, $types)){
		return false;
	}
	return copy($_FILES['file']['tmp_name'], 'file/' . $name);
}*/
?>