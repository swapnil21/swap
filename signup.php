<html>
<?php

$host="localhost";
$user="root";
$pass="";
$db="test";

mysql_connect($host, $user, $pass);
mysql_select_db($db);
if(isset( $_POST['submit']))
	{ $kidname=$_POST['kidname'];
	  $password=$_POST['password'];
	  $email=$_POST['email'];
	  $grade=$_POST['grade'];
}


 $res=mysql_query("SELECT * FROM users");
 $i=mysql_num_rows($res);
 
 $j=$i+1;
	$sql="INSERT INTO users (id,username,password,p_email,grade) VALUES ('$j','$kidname','$password','$email','$grade')";
	$d=mysql_query($sql);
	echo "Values inserted successfully";

	?>
	<a href="login.php"> LOGIN now </a>
	</html>
