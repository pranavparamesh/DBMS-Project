<html>
<head>
<title> display </title>
</head>
<body bgcolor="lightpink">
<center>
customer_info table contents are
<br> 
------------------------------------------
<?php
	$dbh=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('courier') or die (mysql_error());


	$var=mysql_query("SELECT * from customer_info");
	echo"<table border size=1>";
	echo"<tr><th>c_id</th> <th> c_name</th> <th>phone_no</th><th>address</th><th>p_id</th></tr>";
	while ($arr=mysql_fetch_row($var))
	{
		echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td></tr>";
	}
	echo"</table>";
?>
<br>
<br>
<br>
</body>
</html>