<?php

    // indexed arrays
$arrNames = ['umuhire', 'umutesi', 'jessie'];
// echo $arrNames[1];

$arrList = array('Yo', 'Yu', 'Ye');
echo $arrList[1];
print_r ($arrList); // see an array in a readable format

    // Overide
$arrList[0] = 'Yam';
print_r ($arrList);

    // add a value in array
$arrList[] = 'Yal';
print_r ($arrList);

array_push($arrList, 'Yum');
print_r ($arrList);

    // length of aray
echo count($arrList);

$otherArr = array_merge($arrNames, $arrList);
print_r ($otherArr);

    // Associative arays(key & valu pairs)
$fruits = ['apple' => 'green', 'banana' => 'yellow', 'pineapple' => 'orange'];
echo $fruits['banana'];
print_r($fruits);

$fruitOther = array('strawberry' => 'red', 'blueberry' => 'blue');
print_r($fruitOther);

$fruitOther['can'] = 'white';
print_r($fruitOther);

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Learn</title>
</head>
<body>
    
</body>
</html>