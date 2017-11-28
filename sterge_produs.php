<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>MAGAZIN ONLINE</title>

<link href="stil3_g.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">
<div id="header">
<h1>Main Page</h1>
</div>
<div id=nav> 
<ul>
<?php
include "meniu_admin.php"
?>
</ul>
</div>
 <div id=clear></div>
 
 <div id=left> 
 <p></p>
 </div>
<div class="continutProduse">
<?php
	include "connect.php";
	$sql="SELECT * FROM produse ORDER BY nume_produs";
	$rez=mysqli_query ($link,$sql);
?>
	<table>
		<tr>
			<th>Nr Crt</th>
			<th>Nume Produs</th>
			<th>Pret</th>
			<th>Stoc</th>
			<th>Sterge</th>
		</tr>
			<?php
				$i=1;
				while($row=mysqli_fetch_array($rez))
				{
					echo"<tr";
						if($i%2==0)
							echo" class=\"stil1\"";
						echo"><td>".$i."</td>
						<td>".$row['nume_produs']."</td>
						<td>".$row['pret']."</td>
						<td>".$row['stoc']."</td>

						<td><a href=sterge.php?id=".$row['id'].">Sterge</a></td>
						</tr>\n";
					$i++;
				}
			?>	
			</table>
</div>
 <div id=clear></div> 
<div id="footer">
<p>&copy; 2017 by A.D</p>
</div>
</div><!--aici se termina wrapperul-->
</body>
</html>
