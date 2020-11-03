<?php
error_reporting (1);
$con=mysql_pconnect('localhost','root','')or die("cannot connect to server");
mysql_select_db('courier')or die("cannot connect to database");

if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$position=$_POST['position'];
switch($position){

case 'Admin':
$result=mysql_query("SELECT  username,password FROM login WHERE username='$username' AND password='$password'");
$row=mysql_fetch_array($result);
if($row>0){
session_start();
$_SESSION['admin_id']=$row[0];
$_SESSION['username']=$row[1];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/home.html");
}else{
$message="<font color=red>Invalid login Try Again</font>";
}
break;

case 'User':
$result=mysql_query("SELECT  username,password FROM login WHERE username='$username' AND password='$password'");
$row=mysql_fetch_array($result);
if($row>0){
session_start();
$_SESSION['admin_id']=$row[0];
$_SESSION['username']=$row[1];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/homeuser.html");
}else{
$message="<font color=red>Invalid login Try Again</font>";
}
break;
}
}
echo <<<LOGIN
<!DOCTYPE html>
<html>
<head>
<script type = "text/javascript" >
       function preventBack(){window.history.forward(1);}
        setTimeout("preventBack()", 10);
        window.onload=function(){null};
    </script>  
        <script src="home_page/js/jquery.min.js">
</script>
        
        <link rel="stylesheet" href="home_page/css/responsiveslides.css">
        <script src="home_page/js/responsiveslides.min.js"></script>
        <script>
                    $(function () {
                      $("#slider1").responsiveSlides({
                        width: 600,
                        speed: 600
                      });
                });
        </script>
       </head>

<title>COURIER DATABASE MANAGEMENT</title>
</head>
<body style="background-image:url('six.png')">
	
	<hr>
	<br>
	<div align="center">
	<h5><font color="orange" size=25 face="Forte">COURIER   DATABASE   MANAGEMENT</font></h5>
	</div>
	<br>
	<hr>
        

<div id="vertical">

  <section class="container">
  
     <div class="login"> 
	<font color="white" size=15> Login here</font>  
	<br>
	<br>
      <form method="post" action="index.php">

	<input type="text" name="username" value="" placeholder="Username">
        <p><input type="password" name="password" value="" placeholder="Password"></p>
		<p><select name="position">
		<option>--Select position--</option>
			<option>Admin</option>
			</select></p>
        <p class="submit"><input type="submit" name="submit" value="Login"></p>
      </form>
    </div>
    </section>
</div>			 
</div>
</div>
</body>
</html>
LOGIN;
?>
