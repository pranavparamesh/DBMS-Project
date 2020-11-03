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

	$result1=mysql_query("SELECT person_id from deliveryperson_info where person_id='$person_id'");
	$row1= mysql_fetch_array($result1);

	if($row1!=0){
	$query1="update deliveryperson_info set salary='$salary',phone='$phone',p_id='$p_id',c_id='$c_id' where person_id='$person_id'";
	$result=mysql_query($query1) or die(mysql_error());
	echo "data updated successfully!!!!";

	$var=mysql_query("SELECT * from deliveryperson_info");
	echo"<table border size=1>";
	echo"<tr><th>person_id</th> <th> salary</th> <th>phone</th><th>p_id</th><th>c_id</th></tr>";
	while ($arr=mysql_fetch_row($var))
	{
		echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td></tr>";
	}
	echo"</table>";	
	}else{
	echo "CANNOT UPDATE !!!!";
	}
?>
<br>
<br>
<a href="deliveryupdate.html"><font color="black" face="Gill Sans MT" size=4> click here to update another delivery person info</font></a>
<br>
<br>
<a href="home.html"><font color="black" face="Gill Sans MT" size=4>click here for home page</font></a>
</body>
</html>