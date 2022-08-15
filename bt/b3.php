<?php
$products = [
    [
        "id" => 1,
        "name" => "Rau củ",
        "price" => 100000,
        "quantity" => 3
    ],
    [
        "id" => 2,
        "name" => "Rau củ",
        "price" => 100000,
        "quantity" => 3
    ],
    [
        "id" => 3,
        "name" => "Rau củ",
        "price" => 100000,
        "quantity" => 3
    ],
    [
        "id" => 4,
        "name" => "Rau củ",
        "price" => 100000,
        "quantity" => 3
    ],
    [
        "id" => 5,
        "name" => "Rau củ",
        "price" => 100000,
        "quantity" => 3
    ]
];
$totalQuantity = 0;
$totalPrice = 0;
setlocale(LC_MONETARY, 'vi_VN');
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
<table class="border" border="1">
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>SubTotal</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($products as $product) {
        $totalQuantity += $product['quantity'];
        $totalPrice += ($product['quantity']*$product['price']);
        ?>
        <tr>
            <td><?php echo $product['id']; ?></td>
            <td><?php echo $product['name']; ?></td>
            <td><?php echo money_format('%i', $product['price']).'đ'; ?></td>
            <td><?php echo $product['quantity']; ?></td>
            <td><?php echo $product['price'] * $product['quantity'] ?></td>
        </tr>
        <?php
    }
    ?>

    </tbody>

    <tfoot>
    <tr>
        <td colspan="4">Total Quantity</td>
        <td><?php echo $totalQuantity; ?></td>
    </tr>
    <tr>
        <td colspan="4">Total Price</td>
        <td><?php echo money_format('%i', $totalPrice).'đ'; ?></td>
    </tr>
    </tfoot>
</table>
</body>
</html>