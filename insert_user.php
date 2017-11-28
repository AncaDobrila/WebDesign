<?php
include 'connect.php';
global $link;

$nume = $_POST['nume'];
$username= $_POST['username'];
$pass = $_POST['password'];


$sql = 'INSERT INTO useri (nume,username,parola) VALUES ("' . $nume . '","' . $username . '", "' . $pass . '")';
if (mysqli_query($link, $sql)) {
	 header("Location:index.php");
} else {
	echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);
}

mysqli_close($link);
?>