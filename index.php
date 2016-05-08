<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>KiB - Kids Idea Bank</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="css/ie6.css" />
	<![endif]-->
</head>
<?php

$host="localhost";
$user="root";
$pass="";
$db="test";

mysql_connect($host, $user, $pass);
mysql_select_db($db);

//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "swapnilptrivedi@gmail.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  echo $email;
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form




if(isset($_POST['username']))
{
 $username=$_POST['username'];
 $password=$_POST['password'];
	$sql="SELECT * FROM users WHERE username='".$username."' AND password='".$password."' LIMIT 1";
	$res=mysql_query($sql);
	if (mysql_num_rows($res)==1)
	{
	  echo "you have successfully log in";
	  exit();

	}
	else
	{
		echo "invalid user name please return to the previous page";
		exit();
		
	}
}

?>


<form method="post" action="login.php">

<!--Kid id <input type="text" name="username"><br></br>
Password <input type="password"name="password"><br></br>

<input type= "submit" name="submit" value="login"><br></br>-->
</form>
<!--<a href="newkid.php">-->
	<!--<button type="button">New kid </button></a>-->






	<div id="header">
	
		<div>
			<font size="10"<b>Kids Idea Bank</font> </b>
			
<!--Login <input type="text" name="t1">
Password<input type="password" name="p1">-->

			<ul>
				<li class="current"><a href="index.php">Home</a></li>
				<li><a href="services.html">Plan</a></li>
				<li><a href="blog.html">Problem</a></li>
				<li><a href="contact.php">Helper</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
	</div>
	<div id="content">
		<div>
			<div>
				<h1>Kids Idea Bank(Kib)</h1>
				<p> Kib is a new crowdfunding platform for funding kid ideas.Children are natural inventors, with unbounded imagination.Kib fosters this natural ingenuity by creating a pipeline through which kid ideas can be ultimately realized.Kib Kids offer unique perspective onsolving many of the words pervasive challenges.These ideas are then connected to capable adults and funding who can support the development of Kib Concepts. </p>
				<h2>Kids are Special</h2>
				<p> We can write down some special things about kids to show why they are special</p>
			</div>
		</div>
	</div>
	<div id="footer">
		<div>
			<div>
				<span>Follow us</span>
				<a href="http://facebook.com/Kib" target="_blank" class="facebook">Facebook</a>
				<a href="#" class="subscribe">Subscribe</a>
				<a href="http://twitter.com/Kib" target="_blank" class="twitter">Twitter</a>
				<a href="http://www.flickr.com/Kib/" target="_blank" class="flicker">Flickr</a>
			</div>
			<ul>
				<li>
					<a href="#"><img src="images/playing-in-grass.gif" alt="Image" /></a>
					<p>we can write story of kids who is very brilliant in their small age why they are. </p>
					<a href="#" class="readmore">Read more</a>
				</li>
				<li>
					<a href="#"><img src="images/baby-smiling.gif" alt="Image" /></a>
					<p>same</p>
					<a href="#" class="readmore">Read more</a>
				</li>
			</ul>
		</div>
		<p class="footnote"></p>
	</div>
	
</body>
</html>