<?php require_once ('procces.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<title>Document</title>
</head>
<body>
<form action="" method="POST">
	<label> Сохранить изменения </label><br><br>
	<input type="text" name="commit_name" placeholder="Название" required><br><br><br>
	<input type="text" name="commit_discription" placeholder="Описание" required><br><br><br>
	<input type="submit" name="button" value="Отправить"><br>
</form>
<a href="commit.php">Commit</a>
<div class="code">
	<label> Содержание файла </label>
<pre>
	<textarea rows="40" cols="65"><?php echo $content; ?></textarea>
</pre>
</div>
</body>
</html>