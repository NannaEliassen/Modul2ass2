<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<nav>
<nav>

	<ul class="menu"> 
    	<li><a href="home.php"<?php if ($curpage=='home.php') { echo "class='active'"; }?>>Home</a></li>
		<li><a href="about.php"<?php if ($curpage=='about.php') { echo "class='active'"; }?>>About</a></li> 
		<li><a href="contact.php"<?php if ($curpage=='contact.php') { echo "class='active'"; }?>>Contact</a></li>
        <div id="logud">
          <li><a href="logout.php"> Logout</a></li></div>
          </div>
            </ul>
    </nav>
</body>
</html>