<html>
<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="test";

mysql_connect($host, $user, $pass);
mysql_select_db($db);
if(isset($_POST['username']))
{
 $username=$_POST['username'];
 $password=$_POST['password'];
	$sql="SELECT * FROM users WHERE username='".$username."' AND password='".$password."' LIMIT 1";
	$res=mysql_query($sql);
	if (mysql_num_rows($res)==1)
	{ $_SESSION["username"]=$username;

 																					
$p=mysql_query("SELECT p_email from users where username='$username'");
while($o=mysql_fetch_array($p)){
	$l=$o['p_email'];
}

?>

 <form method="post" action="index.php">
 <?php


$to      = 'nobody@example.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

ini_set('SMTP', "server.com");
ini_set('smtp_port', "25");
ini_set('sendmail_from', "email@domain.com");

?>

<?php echo '<input type="submit" name="email" value="'.$l.'">'?>					

<!--Subject: <input name="subject" type="text" /><br />
  Message:<br />
  <textarea name="comment" rows="15" cols="40"></textarea><br/>
  <input type="submit" value="Proceed" />-->
  </form>

   <!--<meta http-equiv="refresh" content="0;URL=index.php"/>-->
  <?php   
  echo "you have successfully login";
  header("Location: http://localhost/index.php");
	exit();

	} 
	else
	{
		echo "invalid user name please return to the previous page";
		?>
		<a href="login.php"> try again </a> 
		<?php
		exit();
		
	}

}?>
</html>