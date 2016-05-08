<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="test";

mysql_connect($host, $user, $pass);
mysql_select_db($db);
if(isset($_POST['submit']))
{
 $name=$_FILES['file']['name'];
 $temp=$_FILES['file']['tmp_name'];
  $res=mysql_query("SELECT * FROM videos");
 $i=mysql_num_rows($res);
 
 $s=$i+1;
 $j=$_SESSION["username"];

 $query=mysql_query("SELECT id from users where username='$j'");

 while($row=mysql_fetch_array($query))
 {
    $r=$row['id'];

 }

  move_uploaded_file($temp,"uploaded/".$name);
  $url="http://localhost/uploaded/$name";
  $u=".mp4";
  $x=$url.$u;
  $sql="INSERT INTO videos (sr_no,id,name,url) VALUES ('$s','$r','$name','$url')";
  $d=mysql_query($sql);
}

?>
<!DOCTYPE html>
<!
<html>
<head>
	<meta charset="UTF-8" />
	<title>Contact Us -Kib</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="css/ie6.css" />
	<![endif]-->
</head>
<body>
	<div id="header">
		<div>
			<a href="index.html"><font size="10"<b>Kids Idea Bank</font></b></a>
			<ul>
				<li><a href="index.php">Home</a></li>
				
				<li><a href="services.html">Plan</a></li>
				<li><a href="blog.html">Problem</a></li>
				<li class="current"><a href="contact.php">Helper</a></li>
				<li><a href="logout.php">Logout</a></li>

			</ul>
		</div>
	</div>

<a href="videos.php">Videos</a>

<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="file" id="file" /> 
<br />

<br><br>
<input type="submit" name="submit" value="Upload" /></br></br>
</form>

<?php

if(isset($_POST['submit']))
{

echo "<br/>".$name."has been uploaded";

}

?>


	<!--
	<div id="footer">
		<div>
			<div>
				<span>Follow us</span>
				<a href="http://facebook.com/Kib" target="_blank" class="facebook">Facebook</a>
				<a href="#" class="subscribe" target="_blank">Subscribe </a>
				<a href="#" class="twitter" target="_blank">twitter </a>
				<a href="http://www.flickr.com/Kib/" target="_blank" class="flicker">Flickr</a>
			</div>
			<ul>
				<li>
					<a href="#"><img src="images/playing-in-grass.gif" alt="Image" /></a>
					<p></p>
					<a href="#" class="readmore">Read more</a>
				</li>
				<li>
					<a href="#"><img src="images/baby-smiling.gif" alt="Image" /></a>
					<p></p>
					<a href="#" class="readmore">Read more</a>
				</li>
			</ul>
		</div>
		<p class="footnote">All Rights Reserved.</p>
	</div>-->
</body>
</html>