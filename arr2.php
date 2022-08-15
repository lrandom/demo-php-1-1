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
$arr = [34, 56, 78, 90];
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i];
    echo '<br>';
}
$arr[] = 50;//34/56/78/90/50
$arr[] = 60;//34/56/78/90/50/60

foreach ($arr as $item) {
    echo $item;
    echo '<br>';
}

$user1 = array(
    'name' => 'Nam',
    'age' => 40
);
$user1['address'] = 'Hạ Long, QN';
foreach ($user1 as $k => $v) {
    echo "$k=>$v";
}

$arr[0] = 20;
?>
</body>
</html>