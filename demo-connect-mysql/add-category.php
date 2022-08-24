<?php
  if(isset($_POST['category'])){
      $category = $_POST['category'];
      $sql = "INSERT INTO category(name) VALUES ('$category')";
      $connect = mysqli_connect('127.0.0.1', 'root', 'koodinh@', 'shopeee');
      if (!$connect) {
          die('Kết nối không thành công');
      }
      mysqli_query($connect, $sql);
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
       <input type="text" name="category" placeholder="Thêm Category">
       <br>
       <button>Thêm</button>
   </form>
</body>
</html>