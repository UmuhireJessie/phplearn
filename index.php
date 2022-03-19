<?php

// include ('ninjas.php');
require 'ninjas.php';

// require 'ninljas.php';  // error: fatal <> error and continue on the include

echo 'end of php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Learn</title>
</head>
<body>
    
    <?php include 'content.php'; ?>
    <?php include 'content.php'; ?>
    <?php include 'content.php'; ?>

</body>
</html>