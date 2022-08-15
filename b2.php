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
  $arr = [2, 4, 7, 8, 10];
  echo "Các số chia hết cho 2 là";
  echo "<br>";
  foreach ($arr as $item) {
      if ($item % 2 == 0) {
          echo $item;
          echo '<br>';
      }
  }
  
  ?>
</body>
</html>