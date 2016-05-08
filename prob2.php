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
$res=mysql_query("SELECT * FROM problem");
 $j=mysql_num_rows($res);
$query = "SELECT title,content,time FROM problem";
$result=mysql_query($query);
echo "<table>"; // start a table tag in the HTML

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['title'] . "</td><td>" . $row['content'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML



 

//$d= mysql_query("SELECT title,content,time FROM problem ORDER BY sr_no DESC");
//while ($d1=mysql_fetch_array($d)){
//echo	$d3=$d1['title','content','time']; ?> <br> <?php
 
?>

</html>