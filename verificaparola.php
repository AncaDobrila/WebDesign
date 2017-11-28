<?php
session_start();
$a=$_POST['username'];
$b=$_POST['password'];


include "connect.php";

$sql= "SELECT * FROM useri WHERE username = '$a' AND `pass` = '$b'";
//echo ;
$rez=mysql_query($con,$sql);

if(mysql_num_rows($rez)==1){
	$_SESSION['logat']="da";
	header("location:login.php");
}
else{
		$_SESSION['logat']="";	
	header("location:loginconectare.php");
}
?>