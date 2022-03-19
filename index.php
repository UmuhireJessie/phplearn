<?php

    // local var 
function myFunc() {
    $price = 10;
    echo $price;
}

// myFunc();
// echo $price; // Error

    // global var 

$name = 'mario';
// function sayHello() {
//     global $name;
//     $name = 'yoshi';
//     echo "hello $name";
// }
// sayHello();
// echo $name; //changed too 

function sayBye(&$name) { // add & references the one in global
    $name = 'wario';
    echo "bye $name";
}
sayBye($name);
echo $name;  // not changed since the function was not reffering to the name





?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Learn</title>
</head>
<body>
    
    

</body>
</html>