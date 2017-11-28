<?php
session_start();
$user=$_POST['username'];
$pass=$_POST['password'];


include "connect.php";

$sql="SELECT * FROM useri WHERE username='$user' AND parola='$pass'";
//echo $sql;
//die();

$rez=mysqli_query($link, $sql);

if(mysqli_num_rows($rez)==1)
{
	$_SESSION['logat']="DA";

	header("Location:index_user.php");
}
else
	header("Location:login.php");

?>