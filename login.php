<?php
	$username = "root";
	$password = "test123";
	$hostname = "localhost";
	
	$conn = new mysqli($hostname, $username, $password, "login");

	// if ($conn->connect_error) {
 //    die("Connection failed: " . $conn->connect_error);
	// } 
	// echo "Connected successfully";
	
	$myusername = $_POST['user'];
	$mypassword = $_POST['pass'];
	$myaccount = $_POST['account'];
	
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	$myaccount = stripslashes($myaccount);

	$query = "SELECT * FROM users WHERE Username='$myusername' AND Password='$mypassword' AND Account='$myaccount'";
	$result = $conn->query($query);
	$count = mysqli_num_rows($result);
	
	mysqli_close($conn);
	

	if($count>=1){ 
		// $seconds = 5 + time();
		// setcookie(loggedin, date("F jS - g:i a"), $seconds);
		header("location:login_success.php");
	}else{
		echo 'Incorrect Username or Password';
	}
?>

<html>
	<body>
		<h3>Wanna go back?</h3>
			<form action="index.php" method="POST">
				<input type="submit" value="Back" />
			</form>
	</body>
</html>