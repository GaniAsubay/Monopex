<?php 
require_once('Model.php');
$id = 0;
$update = false;
if(isset($_POST['button'])){
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$phone_number = $_POST['phone_number'];
	global $mysqli;
	Model::connectDb();
	$result = $mysqli->query("INSERT INTO `directory` (`id`, `name`, `surname`, `phone_number`) VALUES (NULL, '$name', '$surname', '$phone_number')");
	header('Location: /');
}
if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	global $mysqli;
	Model::connectDb();
	$mysqli->query("DELETE FROM `directory` WHERE id=$id"); 
	header('Location: /');
}
if(isset($_GET['edit'])){
	$update = true;
	$id = $_GET['edit'];
	global $mysqli;
	Model::connectDb();
	$result = $mysqli->query("SELECT * FROM `directory` WHERE id=$id");
	$row = $result->fetch_array();
	$name = $row['name'];
	$surname = $row['surname'];
	$phone_number = $row['phone_number'];
}
if (isset($_POST['update'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$phone_number = $_POST['phone_number'];
	global $mysqli;
	Model::connectDb();
	$mysqli->query("UPDATE `directory` SET name='$name', surname='$surname', phone_number='$phone_number' WHERE id=$id");
	header('Location: /');
}
