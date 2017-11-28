<!DOCTYPE html>
	<html>
		<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="stil3_g.css">
		</head>
		<body>
		
		<div id="container">
<div id="header">
<h1>WELCOME !!!!! </h1>
</div>
<div id=nav> 
<ul>
<?php
include "meniu.php";
?>
</ul>
</div>
		<div id="form">
		<form action=verificare_admin.php method=post>
		<p>PENTRU ADMIN </p>
			<label>Admin username</label><input type=text required placeholder=admin name=admin_username><br>
			<label>Parola</label><input type=password required placeholder=pass name=password><br>
			<input type=submit value=TRIMITE>
		</div>
			</form>
			</body>
			</html>