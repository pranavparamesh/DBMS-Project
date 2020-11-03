<html>
<body>
<?php
	$dbh=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('courier') or die (mysql_error());

	$p_id=$_REQUEST['p_id'];
	$p_weight=$_REQUEST['p_weight'];
	$delivery_date=$_REQUEST['delivery_date'];
	$from_address=$_REQUEST['from_address'];
	$to_address=$_REQUEST['to_address'];
	$c_id=$_REQUEST['c_id'];

	$query1="INSERT INTO parcel_info VALUES('$p_id','$p_weight','$delivery_date','$from_address','$to_address','$c_id')";
	$result=mysql_query($query1) or die(mysql_error());
	echo "data inserted successfully!!!!";

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

<a href="parcelinsert.html"><font color="black" face="Gill Sans MT" size=4>click here to insert another parcel</font></a>
<br>
<br>
<a href="parcelupdate.html"><font color="black" face="Gill Sans MT" size=4>click here to update a parcel</font></a>
<br>
<br>
<a href="home.html"><font color="black" face="Gill Sans MT" size=4>click here for homepage</font></a>
</body>
</html>