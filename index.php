<?php

define('COUNTRY', 'Rwanda');

$name = 'Jessie';
$age = 20;

// Overiding the variable name
$name = "Umuhire"

// Error
define('COUNTRY', 'USA');

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Learn</title>
</head>
<body>
    <h1><?php echo 'Hello, Jessie'; ?></h1>

    <div><?php echo COUNTRY; ?></div>
    <div><?php echo $name ?></div>
    <div><?php echo $age ?></div>
</body>
</html>