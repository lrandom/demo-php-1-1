<?php
//mở kết nối đến CSDL
$connect = mysqli_connect('127.0.0.1','root','koodinh@','bookonline');
$sql = "SELECT book.id as book_id,book.name as book_name,
       book.price as price,author.name as author_name FROM book 
    INNER JOIN author ON book.author_id=author.id";
$rs = mysqli_query($connect,$sql);//result-set - tập kết quả
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
<table>
    <thead>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Price</td>
        <td>Author Name</td>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($item = mysqli_fetch_assoc($rs)):
        ?>
        <tr>
            <td><?php echo $item['book_id']; ?></td>
            <td><?php echo $item['book_name']; ?></td>
            <td><?php echo $item['price']; ?></td>
            <td><?php echo $item['author_name']; ?></td>
        </tr>
    <?php
    endwhile;
    ?>
    </tbody>
</table>
</body>
</html>
