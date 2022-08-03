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
echo "Hello World";
echo "<h1>Hello World</h1>";
$myName = "Nguyen Thanh Luan";//phep gan
echo $myName;

//camelCase -> đặt theo con lạc đà
$myName;//đặt tên cho biến
//under_score -> sử dụng dấu gạch dưới
$my_name = "Luan";//đặt tên cho biến
//Pascal -> đặt theo ngôn ngữ pascal
$MyName = "Nam";//đặt tên cho lớp

/*
 Đây là comment trên nhiều dòng
 Dòng thứ hai
 * */

define('MY_NAME', 'Luân');
echo MY_NAME;
?>
</body>
</html>
