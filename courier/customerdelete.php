<html>
<body>
<?php
	$dbh=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('courier') or die (mysql_error());

	$c_id=$_REQUEST['c_id'];

	$result1=mysql_query("SELECT c_id from customer_info where c_id='$c_id'");
	$row1= mysql_fetch_array($result1);

	if($row1!=0){
	$c_id=$_GET['c_id'];
	$query1="DELETE from customer_info where c_id='$c_id'";
	$result=mysql_query($query1) or die(mysql_error());
	echo "data deleted successfully!!!!";

	$var=mysql_query("select * from customer_info");
	echo"<table border size=1>";
	echo"<tr><th>c_id</th> <th>c_name</th> <th>phone_no</th><th>address</th><th>p_id</th></tr>";
	while ($arr=mysql_fetch_row($var))
	{
		echo"<tr><td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td></tr>";
	}
	echo"</table>";
	}else{
	echo "Invalid C_ID !!!!";
	}

?>
<br>
<br>
<a href="customerdelete.html"><font color="black" face="Gill Sans MT" size=4> click here to delete another item </font> </a>
<br>
<br>
<a href="home.html"><font color="black" face="Gill Sans MT" size=4> click here for home page </font></a>
</body>
</html>