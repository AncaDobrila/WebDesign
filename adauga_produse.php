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
include "meniu_admin.php";
?>
</ul>
</div>
		<div id="form">
		<form action=insert_produse.php method=post>
		<p>Adaugare produse </p>
			<label>Nume Produs</label><input type=text required placeholder=adaugare_produs name=nume_produs><br>
			<label>Pret</label><input type=text required placeholder=pret name=pret><br>
			<label>Stoc</label><input type=text required placeholder=stoc name=stoc><br>
			<input type=submit value=TRIMITE>
		</div>
			</form>
			</body>
			</html>