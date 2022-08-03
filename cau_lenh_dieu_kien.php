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
  $weather = "trời nắng";
  if($weather=="trời râm"){
      echo "Đi chơi";
  }else{
      echo "Ở nhà";
  }

  $age = 18;
if ($age >= 18) {
    echo "Đủ tuổi lấy vợ";
}

if ($weather == "trời nắng") {
    echo "Đi xem phim";
}else if ($weather == "trời râm") {
    echo "Đi đá bóng";
}else if ($weather == "trời mưa") {
    echo "Ở nhà ngủ";
}else {
    echo "Làm gì đó";
}

switch ($weather) {
    case "trời nắng":
        echo "Đi xem phim";
        break;

    case "trời râm":
        echo "Đi đá bóng";
        break;

    case "trời mưa":
        echo "Ở nhà ngủ";
        break;

    default:
        echo "Làm gì đó";
}


?>
</body>
</html>