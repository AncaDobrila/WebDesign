<?php
session_start();
$admin=$_POST['admin_username'];
$pass=md5($_POST['password']);


include "connect.php";

$sql="SELECT * FROM admin WHERE nume_admin='$admin' AND parola='$pass'";
//echo $sql;
//die();

$rez=mysqli_query($link, $sql);

if(mysqli_num_rows($rez)==1)
{
	$_SESSION['logat']="DA";

	header("Location:index_admin.php");
}
else
	header("Location:login_admin.php");

?>