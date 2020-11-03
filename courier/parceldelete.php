<html>
<body>
<?php
	$dbh=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('courier') or die (mysql_error());

	$p_id=$_REQUEST['p_id'];

	$result1=mysql_query("SELECT p_id from parcel_info where p_id='$p_id'");
	$row1= mysql_fetch_array($result1);


	if($row1!=0){
	$p_id=$_GET['p_id'];
	$query1="DELETE from parcel_info where p_id='$p_id'";
	$result=mysql_query($query1) or die(mysql_error());
	echo "data deleted successfully!!!!";

	$var=mysql_query("select * from parcel_info");
	echo"<table border size=1>";
	echo"<tr><th>p_id</th> <th>p_weight</th> <th>delivery_date</th><th>from_address</th><th>to_address</th><th>c_id</th></tr>";
	while ($arr=mysql_fetch_row($var))
	{
		echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td><td>$arr[5]</td></tr>";
	}
	echo"</table>";
	}else{
	echo "Invalid P_ID !!!!";
	}
?>
<br>
<br>
<a href="parceldelete.html"><font color="black" face="Gill Sans MT" size=4>click here to delete another parcel</font></a>
<br>
<br>
<a href="home.html"><font color="black" face="Gill Sans MT" size=4>click here for home page</font></a>
</body>
</html>