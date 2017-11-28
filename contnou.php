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
		<form action=insert_user.php method=post>
		<p>PENTRU USERI </p>
			<label>Nume</label><input type="text" required placeholder="INTRODUCETI NUMELE" name="nume"><br>
			<label>Username</label><input type="text" required placeholder="INTRODUCETI USERNAME" name="username"><br>
			<label>Parola</label><input type="password" required placeholder="INTRODUCETI PAROLA" name="password"><br>
			<input type=submit value=TRIMITE>
		</div>
			</form>
			</body>
			</html>