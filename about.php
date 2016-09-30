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
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="menu">
<?php
/*Her hentes menuen*/
include 'menu.php';
?>

<div class="tekst">
<h1>About</h1>
<p>Her vil jeg skrive lidt om mig selv.</p>
<p>så kan i lære mig bedre at kende</p>
</div>
</body>
</html>
