<?php
	// if(!isset($_COOKIE['loggedin'])){
	// 	header("location:index.php");
	// }
	// $username = "root";
	// $password = "test123";
	// $hostname = "localhost";
	
	// $conn = new mysqli($hostname, $username, $password, "login");

	// $myaccount = $_POST['account'];
	// $myaccount = stripslashes($myaccount);

	// $query = "SELECT * FROM users WHERE Account='$myaccount'";
	// $result = $conn->query($query);
	// $count = mysqli_num_rows($result);
	
	// mysqli_close($conn);
	

	if($result1="Admin"){ 
		$seconds = 5 + time();
		setcookie(loggedin, date("F jS - g:i a"), $seconds);
		header("location:admin.html");
	}else if($result1="Lecturer"){
		$seconds = 5 + time();
		setcookie(loggedin, date("F jS - g:i a"), $seconds);
		header("location:lecturer.php");
	}else if($result1="Student"){
		$seconds = 5 + time();
		setcookie(loggedin, date("F jS - g:i a"), $seconds);
		header("location:student.php");
	}
	else{
		echo 'Incorrect Username or Password';
	}
?>
<!-- 
<html>
	<body>
		<h1>Welcome SOHAI QK!</h1>
		<h2> SOHAI QK WAD U WANT???</h2>
		<h1> WHHY U NO GF??</h2>
		<a href="logout.php">Logout</a>
	</body>
</html> -->