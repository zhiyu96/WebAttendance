<?php 
    include('functions.php');

    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
    if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: login.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="C:xampp/htdocs/test/style.css">
    <style>
    .header {
        background: #003366;
    }
    button[name=register_btn] {
        background: #003366;
    }
    </style>
</head>
 <body>
    <div class="header">
        <h2>Admin - View Profile</h2>
    </div>
    <div class="content"> 

<!-- logged in user information -->
        <div class="profile_info">
            <img src="images/user_profile.png" style="width:150px;height:180px;"  >

            <div>
                <?php  if (isset($_SESSION['user'])) : ?>
                    <strong><?php echo $_SESSION['user']['Name']; ?></strong>

                    <small>
                        <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['ProfileType']); ?>)</i> 
                        <br>
                    <div class="container" style="width:500px;">  </div>
                    </small>

                <?php endif ?>
            </div>
  
</br>                     
        
        <?php  if (isset($_SESSION['user'])) : ?>
        <table border="0" cellspacing="2" cellpadding="2">
        <tr>
        <th>UserName :
        <td><?php echo $_SESSION['user']['Username']; ?></td></th>
        </tr>
        <tr>
        <th>Email :
        <td><?php echo $_SESSION['user']['Email']; ?></td></th>
        </tr>
        <tr>
        <th>Phone Number :
        <td><?php echo $_SESSION['user']['PhoneNo']; ?></td></th>
        </tr>
        <tr>
        <th>Matric Number :
        <td><?php echo $_SESSION['user']['MatricNo']; ?></td></th>
        </tr>
        <button type="button" onclick="history.back();">Go Back</button>
        <?php endif ?>

     
</div>
</div>
</body>
</html>