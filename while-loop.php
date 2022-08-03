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
$count = 0;
while ($count < 10) {
    //chạy code trong đây
    echo 'Hello World';
    echo '<br>';
    $count++;
}
echo '<br>';
echo $count;//10
do {
    echo 'Hello World';
    echo '<br>';
    $count++;
} while ($count < 10);
?>
</body>
</html>