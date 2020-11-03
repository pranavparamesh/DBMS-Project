<html>
<body>
<?php
	$dbh=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('courier') or die (mysql_error());

	$person_id=$_REQUEST['person_id'];
	$salary=$_REQUEST['salary'];
	$phone=$_REQUEST['phone'];
	$p_id=$_REQUEST['p_id'];
	$c_id=$_REQUEST['c_id'];
	$salary_paid=null;

	$query1="INSERT INTO deliveryperson_info VALUES('$person_id','$salary','$salary_paid','$phone','$p_id','$c_id')";
	$result=mysql_query($query1) or die(mysql_error());
	echo "data inserted successfully!!!!";

	$var=mysql_query("SELECT * from deliveryperson_info");
	echo"<table border size=1>";
	echo"<tr><th>person_id</th> <th> salary</th> <th> salary_paid</th><th>phone</th><th>p_id</th><th>c_id</th></tr>";
	while ($arr=mysql_fetch_row($var))
	{
		echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td><td>$arr[5]</td></tr>";
	}
	echo"</table>";	
?>
<?php

$db_host="localhost";
$db_name="courier";
$db_user="root";
$db_pass="";
$con=mysql_connect("$db_host","$db_user","$db_pass")or die ("could not connect");
mysql_select_db('courier') or die(mysql_error());
$p0=mysql_query("call total_salary_paid(@out);");
$rs=mysql_query('select @out');
	while($arr=mysql_fetch_row($rs))
	{
		echo 'total salary paid to delivery persons=Rs. '.$arr[0];
	}
	mysql_close($dbh);
?>
<br>
<br>
<a href="deliveryinsert.html"><font color="black" face="Gill Sans MT" size=4>click here to insert another delivery</font></a>
<br>
<br>
<a href="deliveryupdate.html"><font color="black" face="Gill Sans MT" size=4>click here to update a delivery</font></a>
<br>
<br>
<a href="home.html"><font color="black" face="Gill Sans MT" size=4>click here for homepage</font></a>
</body>
</html>