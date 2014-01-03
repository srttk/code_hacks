<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if(isset($_POST['submit'])){
	if(isset($_POST['soc'])){
		echo implode(",", $_POST['soc']);
		print_r(explode(",", implode(",", $_POST['soc'])));
	}
	
}
?>
<form method="post">
	<input type="checkbox" value="One" name="soc[]" />
	<input type="checkbox" value="Two" name="soc[]" />
	<input type="checkbox" value="Three" name="soc[]" />
	<input type="checkbox" value="Four" name="soc[]" />
	<input type="submit" name="submit" />
</form>
</body>
</html>