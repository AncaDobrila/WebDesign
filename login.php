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
		<form action=verificareuseri.php method=post>
		<p>PENTRU USERI </p>
			<label>Username</label><input type=text required placeholder=user name=username><br>
			<label>Parola</label><input type=password required placeholder=pass name=password><br>
			<input type=submit value=TRIMITE>
		</div>
			</form>
			</body>
			</html>