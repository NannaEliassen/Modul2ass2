<?php require_once 'dbcon.php'; ?>
<body>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="author" content="Nanna Eliassen" />
<title>Filter Input example</title>
</head>
<body>
<h1>Expecting name, email and age GET parameters</h1>
<a href="<?= $_SERVER['PHP_SELF'] ?>?name=Nanna&email=nanna.eliassen@live.dk&age=22">test</a>
<hr>

<?php
$n = filter_input(INPUT_GET, 'name', FILTER_DEFAULT) or die('missing/illegal name parameter');
$e = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL) or die('missing/illegal email parameter');
$a = filter_input(INPUT_GET, 'age', FILTER_VALIDATE_INT) or die('missing/illegal age parameter');

echo 'n=' .$n.'<br>'.PHP_EOL;
echo 'e=' .$e.'<br>'.PHP_EOL;
echo 'a=' .$a.'<br>'.PHP_EOL;

    $sql = "INSERT INTO users (name, email, age) VALUES (?,?,?)";
    
	$stmt = $link->prepare($sql);                 
    $stmt->bind_param('ssi', $n, $e, $a);
    $stmt->execute();

	echo 'inserted '.$n.' as id:'.($stmt->insert_id);

?>  

<!--http://www.w3schools.com/php/filter_validate_regexp.asp
http://php.net/manual/en/regexp.referece.meta.php

Så må vi kun skrive a-z og mellemrum

$n(filter_input($string, FILTER_VALIDATE_REGEXP,
array("options"=>array("regexp"=>"/^[A-Za-z//s]+/"))))<br>
-->
</body>
</html>