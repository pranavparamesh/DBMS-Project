<html>
<body>
<?php
	$dbh=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('courier') or die (mysql_error());

	$person_id=$_REQUEST['person_id'];
	
	$result1=mysql_query("SELECT person_id from deliveryperson_info where person_id='$person_id'");
	$row1= mysql_fetch_array($result1);
	
	if($row1!=0){
	$person_id=$_GET['person_id'];
	$query1="DELETE from deliveryperson_info where person_id='$person_id'";
	$result=mysql_query($query1) or die(mysql_error());
	echo "data deleted successfully!!!!";

	$var=mysql_query("select * from deliveryperson_info");
	echo"<table border size=1>";
	echo"<tr><th>person_id</th> <th>salary</th> <th>phone</th><th>p_id</th><th>c_id</th></tr>";
	while ($arr=mysql_fetch_row($var))
	{
		echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td></tr>";
	}
	echo"</table>";
	}else{
	echo "Invalid PERSON_ID !!!!";
	}
	
?>
<br>
<br>
<a href="deliverydelete.html"><font color="black" face="Gill Sans MT" size=4> click here to delete another item </font> </a>
<br>
<br>
<a href="home.html"><font color="black" face="Gill Sans MT" size=4> click here for home page </font></a>
</body>
</html>