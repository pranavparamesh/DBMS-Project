<html>
<body>
<?php
	$dbh=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('courier') or die (mysql_error());
	
	$vehicle_id=$_REQUEST['vehicle_id'];
	$from_location=$_REQUEST['from_location'];
	$to_location=$_REQUEST['to_location'];
	$no_of_parcel=$_REQUEST['no_of_parcel'];
	$from_office_id=$_REQUEST['from_office_id'];
	$to_office_id=$_REQUEST['to_office_id'];

	$result1=mysql_query("SELECT vehicle_id from transport_info where vehicle_id='$vehicle_id'");
	$row1= mysql_fetch_array($result1);

	if($row1!=0){
	$query1="update transport_info set from_location='$from_location',to_location='$to_location',no_of_parcel='$no_of_parcel',from_office_id='$from_office_id',to_office_id='$to_office_id' where vehicle_id='$vehicle_id'";
	$result=mysql_query($query1) or die(mysql_error());
	echo "data updated successfully!!!!";

	$var=mysql_query("SELECT * from transport_info");
	echo"<table border size=1>";
	echo"<tr><th>vehicle_id</th> <th>from_location</th> <th>to_location</th><th>no_of_parcel</th><th>from_office_id</th><th>to_office_id</th></tr>";
	while ($arr=mysql_fetch_row($var))
	{
		echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td><td>$arr[5]</td></tr>";
	}
	echo"</table>";
	}else{
	echo "CANNOT UPDATE !!!!";
	}	
?>
<br>
<br>
<a href="transportupdate.html"><font color="black" face="Gill Sans MT" size=4> click here to update another transport</font></a>
<br>
<br>
<a href="home.html"><font color="black" face="Gill Sans MT" size=4>click here for home page</font></a>
</body>
</html>