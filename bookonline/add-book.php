<?php
$connect = mysqli_connect('127.0.0.1','root','koodinh@','bookonline');
$rsAuthor = mysqli_query($connect,'SELECT * FROM author');
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $authorId = $_POST['author_id'];
    $sql = "INSERT INTO book(name,price,author_id) VALUES('$name',$price,$authorId)";
    mysqli_query($connect,$sql);
}
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
<form method="post">
    <input type="text" name="name" placeholder="name"/>
    <input type="text" name="price" placeholder="price"/>
    <select name="author_id">
        <?php while ($author = mysqli_fetch_assoc($rsAuthor)): ?>
            <option value="<?php echo $author['id']; ?>"><?php echo $author['name']; ?></option>
        <?php endwhile?>
    </select>
    <button>Add</button>
</form>
</body>
</html>