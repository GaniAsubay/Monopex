<?php require_once('Procces.php') ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<title>Справочник</title>
</head>
<body>
	<table cellspacing="0">
    <tr>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Номер</th>
        <th colspan="2">Действие</th>
    </tr>
    <?php foreach (Model::getUser() as $rows):?>
    <tr>
        <td><?php echo $rows['name']; ?></td>
        <td><?php echo $rows['surname']; ?></td>
        <td><?php echo $rows['phone_number']; ?></td>
        <td><a href="index.php?edit=<?php echo $rows['id'];?>" class="btn btn-info">Редактировать</a>
        	<a href="procces.php?delete=<?php echo $rows['id'];?>" class="btn btn-danger">Удалить</a>
        </td>
    </tr>
<?php endforeach; ?>
</table>
<div class="row justify-content-center">
<form action="Procces.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<div class="form-group">
		<label>Имя</label>
	<input type="text" name="name" class="form-control" value="<?php echo $name ;?>">
	</div>
	<div class="form-group">
	<label>Фамилия</label>
	<input type="text" name="surname" class="form-control" value="<?php echo $surname ;?>">
</div>
<div class="form-group">
	<label>Номер</label>
	<input type="number" name="phone_number" class="form-control" value="<?php echo $phone_number ;?>">
</div>
<div class="form-group">
	<?php if($update == true): ?>
	<input type="submit" class="btn btn-primary" name="update" value="Обновить">
	<?php else: ?>
		<input type="submit" class="btn btn-primary" name="button" value="Сохранить">
	<?php endif; ?>
	</div>
</form>
</div>
</body>
</html>