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
//mảng chỉ số nguyên
$arr = [
    1, 2, 3, 4, 5, 19
];
echo $arr[2];//3
$arr1 = array(1, 2, 3, 4, 5, 19);

//mảng liên hợp
$user = [
    'name' => 'Luân',
    'age' => 30
];
echo $user['name'];
$user1 = array(
    'name' => 'Nam',
    'age' => 40
);

//mảng nhiều chiều
$arr2D = [
    [2, 3, 4, 5],
    [45, 6, 7, 8]
];
echo $arr2D[1][1];//6
$arr3D = [
    [
        [34, 5, 67], [23, 3, 5, 6]
    ],
    [
        [12, 2, 2, 4], [24,
        [
            'name' => 'Luan',
            'age' => 30
        ], 5, 6]
    ]
];
$arr3D[1][1][0];
$arr3D[1][1][1]['name'];


?>
</body>
</html>