<!--dette skrives for at aktivere "active" linket-->
<?php $curpage = basename ($_SERVER['PHP_SELF']); ?>
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
<h1>Contact</h1>
<p>Her vil jeg skrive min mail</p>
<p>så du kan komme i kontakt med mig.</p>

</body>
</html>