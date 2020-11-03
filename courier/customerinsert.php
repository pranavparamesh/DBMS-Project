<html>
<body>
<?php
	$dbh=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('courier') or die (mysql_error());

	$c_id=$_REQUEST['c_id'];
	$c_name=$_REQUEST['c_name'];
	$phone_no=$_REQUEST['phone_no'];
	$address=$_REQUEST['address'];
	$p_id=$_REQUEST['p_id'];

	$query1="INSERT INTO customer_info VALUES('$c_id','$c_name','$phone_no','$address','$p_id')";
	$result=mysql_query($query1) or die(mysql_error());
	echo "data inserted successfully!!!!";


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
<a href="customerinsert.html"><font color="black" face="Gill Sans MT" size=4>click here to insert another customer</font></a>
<br>
<br>
<a href="customerdelete.html"><font color="black" face="Gill Sans MT" size=4>click here to delete a customer</font></a>
<br>
<br>
<a href="customerupdate.html"><font color="black" face="Gill Sans MT" size=4>click here to update a customer</font></a>
<br>
<br>
<a href="home.html"><font color="black" face="Gill Sans MT" size=4>click here for homepage</font></a>
</form>
</body>
</html>