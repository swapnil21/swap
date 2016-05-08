<html>
<head>
<title> new kid </title>
</head>
<body>
<form action="signup.php" method="POST">
<table cellpadding="1">
<tr>
<td>Kid name</td>
<td><input type="text" name="kidname" required><br></br></td>
</tr>
<tr>
<td>password</td>
<td><input type="password"name="password" required><br></br></td>
</tr>
<tr>
<td>birthdate</td>
<td><input type="date"name="birthdadte"required/><br></br></td>
</tr>
<tr>
<td>Enter parent email</td>
<td><input type="email" name="email"required /><br></br></td>
</tr>
<tr>

<label for="grade"></label>
<td>Grade</td>
<td><select name="grade" required> 
	<option value="1">1st grade </option>
		<option value="2">2nd grade </option>
			<option value="3">3rd grade </option>
				<option value="4">4th grade </option>
					<option value="5">5th grade </option>


</select></td></tr>
<tr>
<td><br><br><input type="submit" name="submit" value="sign up"> </br></br></td>
</tr>
</table>

</form>  
</body>
</html>

