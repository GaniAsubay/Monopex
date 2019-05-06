<?php require_once ('Changes.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<title>Document</title>
</head>
<body>
<table cellspacing="1">
    <tr>
        <th>id</th>
        <th>Название</th>
        <th>Описание</th>
        <th>Дата</th>
        <th colspan="3">Действие</th>
    </tr>
    <?php foreach (getCommit() as $rows):?>
    <tr>
    	<td><?php echo $rows['id']; ?></td>
        <td><?php echo $rows['commit_name']; ?></td>
        <td><?php echo $rows['commit_discription']; ?></td>
        <td><?php echo $rows['date']; ?></td>
        <td><a href="commit.php?review=<?php echo $rows['id'];?>" class="btn btn-info">Обзор</a>
        	<a href="commit.php?back=<?php echo $rows['id'];?>" class="btn btn-warning">Вернуть</a>
        	<a href="commit.php?delete=<?php echo $rows['id'];?>" class="btn btn-danger">Удалить</a>
        </td>
    </tr>
<?php endforeach; ?>
</table>
<?php if($_GET['review']): ?>
	<div class="code">
<pre>
	<textarea rows="40" cols="65"><?php echo $commit_content; ?></textarea>
</pre>
</div>
<?php endif; ?>
</body>
</html>