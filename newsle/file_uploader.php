<!DOCTYPE html>
<html>
<head>
	<title>File uploading</title>
</head>
<body>
<?php
if(isset($_POST['submit'])){

var_dump($_FILES);

}

?>
<form method="post" enctype="multipart/form-data">
	<input type="file" name="zip" />
	<input name="submit" type="submit" />
</form>
</body>
</html>