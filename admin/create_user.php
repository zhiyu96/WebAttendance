<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Create User</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
		.header {
			background: #003366;
		}
		button[name=register_btn] {
			background: #003366;
		}
		button[name=cancel_btn] {
			background: #FF6347;
		}
		
	</style>
</head>
<body>
	<div class="header">
		<h2>Admin - create user</h2>
	</div>
	
	<form method="post" action="create_user.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Name</label>
			<input type="text" name="Name" >
		</div>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="Username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="Email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Phone Number</label>
			<input type="text" name="PhoneNo">
		</div>
		<div class="input-group">
			<label>Profile Type</label>
			<select name="ProfileType" id="ProfileType" >
				<option value=""></option>
				<option value="lecturer">Lecturer</option>
				<option value="user">User</option>
			</select>
		</div>
		<div class="input-group">
			<label>Matric Number</label>
			<input type="text" name="MatricNo">
		</div>		
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="Password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="Password_2">
		</div>
		<div class="input-group">
			<label>TagID</label>
			<input type="text" name="TagID">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn"> + Create user</button>
		</div>
		<div class="input-group">
			<button onclick="location.href='home.php'" type="button" class="btn" name="cancel_btn">X Cancel</button>
		</div>



</body>
</html>