<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

<br><br>
<form action="index.php" method="post">
	<button type="submit" name="submit">Нарисовать шахматную доску</button>
</form>
<br><br>

<? include_once ('function.php');?>
<?php if (isset($_POST['submit'])) : ?>
<?php echo  createChess(8,8, '#cc0055'); ?>
<?php endif; ?>

</body>
</html>