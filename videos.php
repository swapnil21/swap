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
  
  $query=mysql_query("SELECT name * FROM videos");
?>
  <form action="watch.php" method="post">Select Video 


<?php


$sql = "SELECT name FROM videos";
$result = mysql_query($sql);

echo "<select name='name'>";
while ($row = mysql_fetch_array($result)) {
    echo '<option value='.$row['name'].'>'.$row['name'].'</option>';
}
echo '$option value</select>';
?>

<input type="submit" name = "submit" value="watch"/> </form>
<?php
 /* while($row=mysql_fetch_array($query))
  {

      $id=$row['id'];
      $name=$row['name'];
      $_SESSION['name']=$name;
            echo "<a href='watch.php?id=$id'>$name</a><br/>";


}*/
//echo "<a href='watch.php?id=$id'>$name</a><br/>";



 

 ?>
</body>
</html>