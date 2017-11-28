<?php
session_start();
$a=$_POST['us'];
$b=md5($_POST['pa']);


include "connect.php";

$sql="SELECT * FROM useri WHERE user='$a' AND pass='$b'";
//echo $sql;
//die();

$rez=mysqli_query($conexiune, $sql);

if(mysqli_num_rows($rez)==1)
{
	$_SESSION['logat']="daaa";

	header("Location:index.php");
}
else
	header("Location:login_form.php");

?>