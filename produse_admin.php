<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title> DOBRILA ANCA-MIHAELA</title>

<link href="stil3_g.css" rel="stylesheet" type="text/css" />
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
 <div id=clear></div>
 
 
 
<div id="continut">
<h1></h1>
<?php
			include"connect.php";
			
			$sql = "SELECT  nume_produs ,pret, stoc FROM produse";
			$rez=mysqli_query($link, $sql);
			
			if(mysqli_num_rows($rez)>0)
			{
				
				echo "<table>
						<tr>
							<th>Nume Produs</th>
							<th>Stoc</th>
							<th>Pret</th>
						</tr>";
				while($row = mysqli_fetch_array($rez)) {
					echo "<tr><td>" . $row["nume_produs"]. "</td><td>" . $row["pret"]. "</td><td>" . $row["stoc"]. "</td>";
					}
				echo "</table>";	
				
			}
			
			else
				echo"Nu sunt produse in baza de date!!";
		?>
</div>
 <div id=clear></div> 
<div id="footer">
<p> LOGIN</p>
<p>&copy; 2017 by A.D.</p>
</div>
</div><!--aici se termina wrapperul-->
</body>
</html>
