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

// multi-dimensional array
$blogs = [
    ['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem', 'likes' => 23],
    ['title' => 'mario kart cheats', 'author' => 'toad', 'content' => 'lorem', 'likes' => 30],
    ['title' => 'zelda hidden chests', 'author' => 'link', 'content' => 'lorem', 'likes' => 50]
];

echo $blogs[2]['author'];

// take out the last element if the array
$popped = array_pop($blogs);
print_r($popped);

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Learn</title>
</head>
<body>
    
</body>
</html>