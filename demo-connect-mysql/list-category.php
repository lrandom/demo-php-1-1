<?php
$connect = mysqli_connect('127.0.0.1', 'root', 'koodinh@', 'shopeee');
if (!$connect) {
    die('Kết nối không thành công');
}
//truy vấn sql
$sql = "SELECT * FROM category";
//tập kết quả
$resultSet = mysqli_query($connect, $sql);

?>
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
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($resultSet)){ ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</body>
</html>