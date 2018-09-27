<?php
	$username = "root";
	$password = "test123";
	$hostname = "localhost";
	
	$conn = new mysqli($hostname, $username, $password, "login");
	
	// if ($conn->connect_error) {
 //    die("Connection failed: " . $conn->connect_error);
	// } 
	// echo "Connected successfully";

		if(isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['account'])){
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			$account = $_POST['account'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			$num = $_POST['num'];

			$query = "SELECT * FROM users WHERE Username='$user'";
			$result = $conn->query($query);
			$count = mysqli_num_rows($result);
			if($count > 0 ) { //check if there is already an entry for that username
				echo "Username already exists!";
			}else{
				$query2 = "INSERT INTO users (Username, Password, Account, Name, Email, Matric) VALUES ('$user', '$pass', '$account','$name','$email','$num')";
				$result2 = $conn->query($query2);
				header("location:index.php");
			}
			// if ($conn->query($sql)===TRUE){
			// 	echo "New record created successfully";
			// }else{
			// 	echo "Error: " . $sql . "<br>" . $conn->error;
			// }
	}
	mysqli_close($conn);
?>

<html>
	<body>
		<h1>Signup!</h1>
			<form action="new_user.php" method="POST">
				<p>Name:</p><input type="text" name="name" />
				<p>Email:</p><input type="email" name="email" />
				<p>Matric Number:</p><input type="text" name="num" />
				<p>Username:</p><input type="text" name="user" />
				<p>Password:</p><input type="password" name="pass" />
				<br />
				<select id="account" name="account">
  					<option value="Admin">Admin</option>
   					<option value="Lecturer">Lecturer</option>
   					<option value="Student">Student</option>
 			</select> 
				<input type="submit" value="Signup!" />
				<input type="reset">
			</form>
		<h3>Wanna go back?</h3>
			<form action="index.php" method="POST">
				<input type="submit" value="Back" />
			</form>
	</body>
</html>