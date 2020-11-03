<html>
<head>
<title> display </title>
</head>
<body bgcolor="grey">
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
<br>
<br>
<br>

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


?>
<br>
<br>
<br>


office_info table contents are
<br> 
------------------------------------------
<?php
	$dbh=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('courier') or die (mysql_error());

	$var=mysql_query("SELECT * from office_info");
	echo"<table border size=1>";
	echo"<tr><th>office_id</th> <th>office_name</th> <th>office_address</th><th>office_phoneno</th></tr>";
	while ($arr=mysql_fetch_row($var))
	{
		echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td><td>$arr[3]</td></tr>";
	}
	echo"</table>";	
?>
<br>
<br>
<br>


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


</body>
</html>
