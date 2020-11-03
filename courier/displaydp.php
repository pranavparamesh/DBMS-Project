<html>
<head>
<title> display </title>
</head>
<body bgcolor="lightpink">
<center>
deliveryperson_info table contents are
<br> 
------------------------------------------
<?php

	$dbh=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('courier') or die (mysql_error());

	$var=mysql_query("SELECT * from deliveryperson_info");
	echo"<table border size=1>";
	echo"<tr><th>person_id</th> <th> salary</th> <th> salary_paid</th><th>phone</th><th>p_id</th><th>c_id</th></tr>";
	while ($arr=mysql_fetch_row($var))
	{
		echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td><td>$arr[5]</td></tr>";
	}
	echo"</table>";
?>
