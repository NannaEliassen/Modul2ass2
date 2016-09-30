<?php
session_start();
require_once 'dbcon.php';

if (isset($_SESSION['userSession'])) {
 header("Location: home.php");
 exit;
}

if (isset($_POST['btn-login'])) {
 $email = strip_tags($_POST['email']);
 $password = strip_tags($_POST['password']);
 
 $email = $link->real_escape_string($email);
 $password = $link->real_escape_string($password);
 
 $query = $link->query("SELECT user_id, email, password FROM tbl_users WHERE email='$email'");
 $row=$query->fetch_array();
 
 $count = $query->num_rows; // if email/password are correct returns to row number 1
 
 if (password_verify($password, $row['password']) && $count==1) {
  $_SESSION['userSession'] = $row['user_id'];
  header("Location: home.php");
  exit();
 } else {
  echo 'Forkert E-mail eller Password !'. mysqli_error($link);
	}
 $link->close();
}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Projekt 2 - Opgave 2 - Login</title>
<link rel="stylesheet" type="text/css" href="login-style.css">
</head> 
<body>

 <div class="container">
     
        
       <form class="login-formular" method="post" id="login-form">
      
        <h1>Log ind</h1>
        
        <div class="form-group">
        <input type="email" class="form-control" placeholder="E-mail" name="email" required />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" required />
        </div>
        
        <div class="form-group">
            <input type="submit" class="submit "name="btn-login" value="Log Ind">
     	</div>
            <p> Opret bruger
         		<a href="create_user.php">HER</a>
            </p>
      </form>

    </div>

</body>
</html>
