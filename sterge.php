<?php
	include "connect.php";
	$id=$_GET['id'];
	$sql="DELETE FROM produse WHERE id='$id'";
	$rez=mysqli_query($link,$sql);
	if($rez)
		header("Location: sterge_produs.php");
	else
		echo"Eroare la stergere";
?>