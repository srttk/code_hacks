<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	body{
		font-family: Helvetica;
		margin: 0;
		padding: 0;

	}
	.wrap{
		margin: auto;
		width: 700px;
	}
	.header{
		padding: 5px 10px;
		color: #fff;
		background-color: #007CDC;	
	}
	.content{
		padding: 5px;
		background-color: #fff;

	}
	.footer{
		background-color: #ccc;
		font-size: 11px;
		padding: 5px 10px;
	}
	td
	{
		padding-bottom: 10px;
	}
	tr:nth-child(odd){
		background-color: #ccc;
	}
</style>
</head>
<body>
<div class="wrap">
	<div class="header">
		<h1>Feedback</h1>
	</div>
	<div class="content">
		<table style="font-size:12px;width:80%;">
			<tr><td>Name :</td><td>hygyg</td></tr>
			<tr><td>Email :</td><td>jhhj</span></td></tr>
			<tr><td>User state</td></tr>
			<tr><td>Feedback type:</td><td></td></tr>
			<tr><td>Message</td><td></td></tr>
			<tr><td>Countgry</td> <td></td></tr>
			<tr><td>IP</td><td></td></tr>
			<tr><td>Time</td><td><?php echo date('M-d-Y  h:i:s A');?></td></tr>
		</table>
	</div>
	<div class="footer">
		Copyright 2013 Authentic Teaders.
	</div>
</div>
</body>
</html>