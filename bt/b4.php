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
$name = "Nguyễn Huy Hoàng";
$age = 25;
$phone = "023298323";
$email = "abc@gmail.com";
$address = "Mỹ Đình";
?>

<table>
    <tbody>
       <tr>
           <td>Name</td>
           <td><?php echo $name; ?></td>
       </tr>
       <tr>
           <td>Age</td>
           <td><?php echo $age; ?></td>
       </tr>
       <tr>
           <td>Phone</td>
           <td><?php echo $phone; ?></td>
       </tr>
       <tr>
           <td>Email</td>
           <td><?php echo $email; ?></td>
       </tr>
       <tr>
           <td>Address</td>
           <td><?php echo $address; ?></td>
       </tr>
    </tbody>
</table>
</body>
</html>