<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="test.php">
	<label>naem</label><input type="text" name="name">
	<input type="submit" name="submit">
</form>
</body>
</html>
<?php 
$name=$_POST['name'];
echo $name;
 ?>