<html>
<?php
session_start();

$host="localhost";
$user="root";
$pass="";
$db="test";
$usernm=$_SESSION["username"];

mysql_connect($host, $user, $pass);
mysql_select_db($db);
if(isset( $_POST['submit']))
	{ $t=$_POST['t1'];
$t2=$_POST['t2'];

}  
$g=mysql_query("SELECT id from users where username='$usernm'");
while($row=mysql_fetch_array($g)) {
	$id=$row['id'];
}
echo $id;
 $res=mysql_query("SELECT * FROM problem");
 $i=mysql_num_rows($res);
 $s=date('Y-m-d H:i:s');
 
 $j=$i+1;
	$sql="INSERT INTO problem (sr_no,id,content,time,title) VALUES ('$j','$id','$t','$s','$t2')";

	$d=mysql_query($sql);
	echo "Values inserted successfully";
	header("Location: http://localhost/blog.html");
	  exit();
	?>
	
	</html>