<html>
<body>
<?php
	$dbh=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('courier') or die (mysql_error());

	$office_id=$_REQUEST['office_id'];
	$office_name=$_REQUEST['office_name'];
	$office_address=$_REQUEST['office_address'];
	$office_phoneno=$_REQUEST['office_phoneno'];

	$query1="INSERT INTO office_info VALUES('$office_id','$office_name','$office_address','$office_phoneno')";
	$result=mysql_query($query1) or die(mysql_error());
	echo "data inserted successfully!!!!";

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
<a href="officeinsert.html"><font color="black" face="Gill Sans MT" size=4>click here to insert another office</font></a>
<br>
<br>
<a href="officeupdate.html"><font color="black" face="Gill Sans MT" size=4>click here to update a office</font></a>
<br>
<br>
<a href="home.html"><font color="black" face="Gill Sans MT" size=4>click here for homepage</font></a>
</body>
</html>