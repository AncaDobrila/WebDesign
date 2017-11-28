<?php
include 'connect.php';
global $link;

$numeProdus = $_POST['nume_produs'];
$pret= $_POST['pret'];
$stoc = $_POST['stoc'];


$sql = 'INSERT INTO produse (nume_produs, pret , stoc) VALUES ("' . $numeProdus . '","' . $pret . '", "' . $stoc . '")';
if (mysqli_query($link, $sql)) {
	 header("Location:index_admin.php");
} else {
	echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);
}

mysqli_close($link);
?>