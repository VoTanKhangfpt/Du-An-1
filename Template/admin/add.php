<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="./style.css">
    <style>
    td {
        padding: 0 17px;
        text-align: center;
    }
    </style>
</head>

<body>
    <div class="wrap_c">
        <div class="form_container">
            <form class="form" method="post" enctype="multipart/form-data" action="index.php?page=them">
                <!-- muon lay file hinh anh phai them enctype -->
                <ul class="wrapper">

                    <li style="--i:4;"><input class="input" type="text" placeholder="Name Products" required=""
                            name="namesp">

                    </li>
                    <li style="--i:3;"><input class="input" placeholder="Price product" required="" name="price">
                    </li>
                    <li style="--i:2;"><input class="input" type="number" placeholder="Quantity" required=""
                            name="quan">
                    </li>
                    <li style="--i:1;"><input class="input" placeholder="upload img" required="" name="upload" disabled>
                        <input accept=".jpg, .jpeg, .png, .gif, .pdf" class="inpdddut" name="arquivo" id="arquivo"
                            type="file">

                    </li>



                    <input style="--i:0;" class="sub" type="submit" name="sub" value="submit">
                </ul>
            </form>
        </div>

        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Products</h2>
                <a href="index.php?page=add" class="btn">Edit</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <td colspan="1">STT</td>

                        <td colspan="1">Name</td>
                        <td colspan="1">Price</td>
                        <td colspan="1">Quantity</td>
                        <td colspan="1">Status</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
$i = 1;
$htad = "";
$productsad = getpro();

foreach ( $productsad as $value ) {

    extract( $value );

    $htad .= '

         <tr>
         <form action="update.php" method="post">
              <input type="hidden" name="id"value="' . $idpro . '">
              <input type="hidden" name="img"value="' . $hinhanh . '">
              <input type="hidden" name="namea"value="' . $ten . '">
              <input type="hidden" name="pri"value="' . $gia . '">
              <input type="hidden" name="soluong"value="' . $soluong . '">
                 <td> ' . $i . '</td>
                  <td>' . $ten . '</td>
                  <td>' . $gia . '$</td>
                  <td>' . $soluong . '</td>
                  <td>

                  <a href="?page=update"> <button class="comic-button"type="submit">fix</button></a>
                    <a href="?page=del&id=' . $idpro . '"><button class="comic-button" type="submit">del</button></a>
                  </td>x
            </form>

                </tr>



    ';
    $i++;
}
?>

                    <?=$htad?>

                </tbody>
            </table>
        </div>
    </div>

</body>

</html>