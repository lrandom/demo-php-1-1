<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<?php
$products = [
    [
        'name' => 'Rau củ',
        'price' => '180.000',
        'sale_price' => '150.000',
        'image' => 'https://anhdep123.com/wp-content/uploads/2020/11/hinh-anh-mot-so-loai-rau.png'
    ],
    [
        'name' => 'Rau củ',
        'price' => '180.000',
        'sale_price' => '0',
        'image' => 'https://anhdep123.com/wp-content/uploads/2020/11/hinh-anh-mot-so-loai-rau.png'
    ],
    [
        'name' => 'Rau củ',
        'price' => '180.000',
        'sale_price' => '150.000',
        'image' => 'https://anhdep123.com/wp-content/uploads/2020/11/hinh-anh-mot-so-loai-rau.png'
    ],
    [
        'name' => 'Rau củ',
        'price' => '180.000',
        'sale_price' => '150.000',
        'image' => 'https://anhdep123.com/wp-content/uploads/2020/11/hinh-anh-mot-so-loai-rau.png'
    ]
]
?>
<div class="container text-center">
    <div class="row">
        <?php foreach ($products as $product) { ?>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['name']; ?></h5>
                        <p class="card-text">
                            <?php
                            if ($product['sale_price'] == 0) {
                                echo '<strong>Price: ' . $product['price'] . '</strong>';
                            } else if ($product['sale_price'] > 0) {
                                echo '<del>Old' . $product['price'] . '</del><strong>Price: ' . $product['sale_price'] . '</strong>';
                            }
                            ?>
                        </p>
                        <div>
                            <a href="#" class="btn btn-primary">View</a>
                            <a href="#" class="btn btn-danger">Add Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</body>
</html>