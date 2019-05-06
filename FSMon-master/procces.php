<?php
require_once('config/Db.php');
	global $mysqli;
	Db::connect();
	$content =  htmlspecialchars(file_get_contents('file/index.php'));
		if(isset($_POST['button'])){
		$commit_name = $_POST['commit_name'];
		$commit_discription = $_POST['commit_discription'];
        $code = addslashes($content);
		$date = date("Y-m-d H:i:s");
		$hash = hash_file('md5', 'file/index.php');
		$data = $mysqli->query("SELECT * FROM `info_file` WHERE `hash` ='".$hash."'");
		if(mysqli_num_rows($data) == 0){
			$mysqli->query("INSERT INTO `info_file` (`id`, `hash`, `commit_name`, `commit_discription`,`commit_content`, `date`) VALUES (NULL, '$hash', '$commit_name', '$commit_discription','$code', '$date')");
		}else if (mysqli_num_rows($data) == 1){
			$result = $data->fetch_assoc();
			echo "<script>alert('Файл который вы хотите загрузить уже существует. Название: ".$result['commit_name']."');</script>"; 
		}else{
			return false;
		}
	}
?>