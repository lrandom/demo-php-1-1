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
function xinChao()
{
    echo "Xin chào";
    echo "Tôi là Thanh";
}

function tinhTongHaiSo($soThu1,$soThu2){
   echo "Tổng hai số là ". ($soThu1+$soThu2);
}

function tinhTongBaSo($soThu1, $soThu2, $soThu3)
{
    $tongBaSo = $soThu1 + $soThu2 + $soThu3;
    return $tongBaSo;
}
?>
<p>
    <?php
    $num = tinhTongBaSo(30,20,10);
    echo $num;//60

    xinChao();
    tinhTongHaiSo(20,10);
    ?>
</p>

<p>
    <?php
    xinChao();
    tinhTongHaiSo(30,40);
    ?>
</p>

<p>
    <?php
    xinChao();
    $num1 = 30;
    $num2=40;
    tinhTongHaiSo($num1,$num2);
    ?>
</p>

<p>
    <?php
    xinChao();
    ?>
</p>

</body>
</html>