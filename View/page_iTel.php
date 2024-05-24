<?php
include_once "./Model/DAO/category.php";
$iTel = getItel();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITel</title>
</head>

<body>
    <aside class="widget_gearvn_list_product">
        <div class="list-product">
            <div class="list-product-header">
                <img class="img-flashsale" src="./img/product/sale/sale.png" alt="">
                <img class="img-flashsale-responsive" src="./img/product/sale/sale_responsive.png" alt="">
            </div>

            <div class="list-product-body">
                <?php
                for ($i = 0; $i < count($iTel); $i++) {
                    ?>
                    <a href="sanphamchitiet.html">
                        <div class="list-product-item">
                            <div class="list-product-item-img">
                                <img src="<?= $iTel[$i]['hinh'] ?>" alt="">
                            </div>
                            <h2><?= $iTel[$i]['ten'] ?></h2>
                            <span><?= number_format($iTel[$i]['gia']) ?></span>
                        </div>
                    </a>
                    <?php
                }
                ?>
            </div>
        </div>
    </aside>
</body>

</html>