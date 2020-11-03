<html>
<head>
<title> display </title>
</head>
<body bgcolor="lightpink">
<center>
transport_info table contents are
<br> 
------------------------------------------
<?php
	$dbh=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('courier') or die (mysql_error());

	$var=mysql_query("SELECT * from transport_info");
	echo"<table border size=1>";
	echo"<tr><th>vehicle_id</th> <th>from_location</th> <th>to_location</th><th>no_of_parcel</th><th>from_office_id</th><th>to_office_id</th></tr>";
	while ($arr=mysql_fetch_row($var))
	{
		echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td><td>$arr[5]</td></tr>";
	}
	echo"</table>";	
	echo "<br><br>";
	echo "<a href = transport.html> <font color = black size =5pt> CLICK HERE TO GO BACK </a>";


?>
<br>
<br>
<br>
</body>
</html>
