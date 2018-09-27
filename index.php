<html>
	<body>
		<a href="index.php">
						<img src="images/amsum.png" alt="header" style="width:300px;height:130px;border:0;"></a>
		<form action="login.php" method="POST">
			<p>Username:</p><input type="text" name="user" />
			<p>Password:</p><input type="password" name="pass" />
			<br />
			<select id="account" name="account">
  				<option value="Admin">Admin</option>
   				<option value="Lecturer">Lecturer</option>
   				<option value="Student">Student</option>
 			</select> 
			<input type="submit" value="Login" />
		</form>
		
		<a href="new_user.php">Signup Here!</a>
	</body>
</html>