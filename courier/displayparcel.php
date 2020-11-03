<html>
<head>
<title> display </title>
</head>
<center>
<body bgcolor="lightpink">
parcel_info table contents are
<br> 
------------------------------------------
<?php
	$dbh=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('courier') or die (mysql_error());

	$var=mysql_query("SELECT * from parcel_info");
	echo"<table border size=1>";
	echo"<tr><th>p_id</th> <th>p_weight</th> <th>delivery_date</th><th>from_address</th><th>to_address</th><th>c_id</th></tr>";
	while ($arr=mysql_fetch_row($var))
	{
		echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td><td>$arr[5]</td></tr>";
	}
	echo"</table>";
?>	
</body>
</html>