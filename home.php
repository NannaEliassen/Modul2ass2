<?php $curpage = basename ($_SERVER['PHP_SELF']); ?>
<?php
session_start();
include_once 'dbcon.php';

if (!isset($_SESSION['userSession'])) {
 header("Location: login.php");
}

$query = $link->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$link->close();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Projekt 2 - Opgave 2 - Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head> 

<div class="menu">
<?php
/*Her hentes menuen*/
include 'menu.php';
?>
<body>
<div class="tekst">
<h1>Home</h1>
<p>Dette er min forside.</p>
<p>Velkommen til. </p>
</div>

  </body>
  </html>