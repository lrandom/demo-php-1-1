<?php
  if(isset($_POST['name'])){
      $name = $_POST['name'];
      $connect = mysqli_connect('127.0.0.1','root','koodinh@','bookonline');
      $sql = "INSERT INTO author(name) VALUES('$name')";
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
       <input type="text" name="name"/>
       <button>Add</button>
   </form>
</body>
</html>