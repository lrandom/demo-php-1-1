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
$users = [
    [
        'name' => "Nguyễn Thành Luân",
        'email' => 'bee@gmail.com',
        'phone' => '0868120192',
        'gender' => 0,
        'avatar' => 'https://cdn-icons-png.flaticon.com/512/194/194938.png'
    ],
    [
        'name' => "Nguyễn Thanh Lam",
        'email' => 'bee@gmail.com',
        'phone' => '0868120192',
        'gender' => 1,
        'avatar' => 'https://cdn-icons-png.flaticon.com/512/194/194938.png'
    ],
    [
        'name' => "Nguyễn Thị Linh",
        'email' => 'bee@gmail.com',
        'phone' => '0868120192',
        'gender' => 1,
        'avatar' => 'https://cdn-icons-png.flaticon.com/512/194/194938.png'
    ]
]
?>

<table border="1">
    <thead>
    <tr>
        <th>name</th>
        <th>email</th>
        <th>phone</th>
        <th>gender</th>
        <th>avatar</th>
    </tr>
    </thead>

    <tbody>
    <?php foreach ($users as $user) { ?>
        <tr>
            <td><?php echo $user['name']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['phone']; ?></td>
            <td><?php
                if ($user['gender'] == 0) {
                    echo 'Nam';
                }else{
                    echo 'Nữ';
                }
                ?></td>
            <td>
                <img width="100" src="<?php echo $user['avatar']; ?>"/>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>