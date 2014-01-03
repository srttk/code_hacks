<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	if(isset($_POST['foo'])){
		$n=$_POST['foo'];
		$f=explode('/', $n);
		list($date,$month,$year)=explode('/', $n);
		print_r($f);
		echo '<br/>'.$date.'-'.$month.'-'.$year;

	}
?>
<form method="post">
	<input type="text" name="foo" />
	<input type="submit" name="submit" />
</form>
</body>
</html>