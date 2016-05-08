<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="test";

mysql_connect($host, $user, $pass);
mysql_select_db($db);


?>

<html>
<head>
<title> Video upload </title>
</head>
<body>

  <?php
  
  if(isset($_POST['submit']))
  {

    $i=$_POST['name'];
    $j=$_SESSION["username"];
    


 $query=mysql_query("SELECT id from users where username='$j'");

 while($row=mysql_fetch_array($query))
 {
    $r=$row['id'];

 }

//$n=$_SESSION['name'];

    $query=mysql_query("SELECT * FROM videos where name='$i' ");

  		while($row=mysql_fetch_array($query))
  		{

			$name=$row['name'];
			 $url=$row['url'];
}

$sql=mysql_query("SELECT title from plan where id='$r'");

while($row=mysql_fetch_array($sql))
      {
        $t=$row['title'];
      
}
 
 $sql=mysql_query("SELECT title from problem where id='$r'");

while($row=mysql_fetch_array($sql))
      {
        $h=$row['title'];
      
}
echo "you are watching ";
echo $i;?><br>
<?php
echo "<embed src='$url' width='560' height='315'></embed>";?><br><br>
<?php
echo $j;?><br>
<?php
echo $t;?><br>
<?php
echo $h;?>,<br>
<?php

/*$e=mysql_query("SELECT content from plan WHERE id='$r'");
while($row=mysql_fetch_array($e))
{

  $l=$row['content'];
}*/
  
}
?>

</body>
</html>