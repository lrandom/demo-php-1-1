<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$a = 10;
$b = 5;
echo $a + $b; //15
echo '<br>';
echo $a - $b;//5
echo '<br>';
echo $a * $b;//50
echo '<br>';
echo $a / $b;//2
echo '<br>';
echo $a % $b;//0
echo '<br>';
echo $a ** $b;//100000

echo $a += 10;//$a=$a+10//20

$c = 10;
$d = '10';
echo $c !== $d;//false

echo(10 == 10 && 10 == 20);//false
echo(10 == 10 || 10 == 20);//true
echo(10 == 10 xor 10 == 10);//false
echo(10 == 10 || 10 == 10);//true
echo(!true);//false
echo(!false);//true

$firstName = 'Nguyễn ';
$lastName = ' Thành Luân';
$fullName = $firstName . $lastName;
echo $fullName;// Nguyễn Thành Luân

$myFullName = "$firstName $lastName";//Nguyễn Thành Luân
$myFullName = '$firstName $lastName';//$firstName $lastName
?>
</body>
</html>