<?php
	
	ob_start();
	?>
	--PHP-alt-<?php echo "Dfgfgdgdg"; ?>
Content-Type: text/plain; charset="iso-8859-1"
Content-Transfer-Encoding: 7bit
<?
	include('sample.html');
	$message=ob_get_clean();
	echo $message;
?>
<?php echo "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>