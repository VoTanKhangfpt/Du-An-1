<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">

        <div class="main">

            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,042</div>
                        <div class="cardName">Views</div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Sales</div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">208</div>
                        <div class="cardName">Comments</div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-comment" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">$6,042</div>
                        <div class="cardName">Earning</div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-usd" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Products</h2>
                        <a href="index.php?page=add" class="btn">Edit</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>STT</td>
                                <td>Name</td>
                                <td>Price</td>
                                <td>Quantity</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
$i = 1;
$htad = "";
$productsad = getpro();

foreach ( $productsad as $value ) {

    extract( $value );
// can thay doi san pham
    $htad .= '
         <tr>

                  <td> ' . $i . '</td>
                  <td>' . $ten . '</td>
                  <td>' . $gia . '$</td>
                  <td>' . $soluong . '</td>
                  <td style="    width: 200px" >

                  <a href="?page=add"> <button class="comic-button"type="submit">fix</button></a>
                    <a href="?page=del&id=' . $idpro . '"><button class="comic-button" type="submit">del</button></a>
                  </td>
                </tr>

    ';
    $i++;
}

?>
                            <?=$htad?>
                        </tbody>
                    </table>
                </div>
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Customer</h2>
                    </div>
                    <table>
                        <tbody>
                            <tr>
                                <td width="60px">
                                    <div class="imgBx">
                                        <img src="img/user Image.png" alt="" />
                                    </div>
                                </td>

                                <td>
                                    <h4>David<br /><span>Italy</span></h4>
                                </td>
                            </tr>
                            <tr>
                                <td width="60px">
                                    <div class="imgBx">
                                        <img src="img/user Image.png" alt="" />
                                    </div>
                                </td>

                                <td>
                                    <h4>Muhummad<br /><span>France</span></h4>
                                </td>
                            </tr>
                            <tr>
                                <td width="60px">
                                    <div class="imgBx">
                                        <img src="img/user Image.png" alt="" />
                                    </div>
                                </td>

                                <td>
                                    <h4>Ammelia<br /><span>India</span></h4>
                                </td>
                            </tr>
                            <tr>
                                <td width="60px">
                                    <div class="imgBx">
                                        <img src="img/user Image.png" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <h4>Olivia<br /><span>USA</span></h4>
                                </td>
                            </tr>
                            <tr>
                                <td width="60px">
                                    <div class="imgBx">
                                        <img src="img/user Image.png" alt="" />
                                    </div>
                                </td>

                                <td>
                                    <h4>Amit<br /><span>Japan</span></h4>
                                </td>
                            </tr>
                            <tr>
                                <td width="60px">
                                    <div class="imgBx">
                                        <img src="img/user Image.png" alt="" />
                                    </div>
                                </td>

                                <td>
                                    <h4>Ashraf<br /><span>Mexico</span></h4>
                                </td>
                            </tr>
                            <tr>
                                <td width="60px">
                                    <div class="imgBx">
                                        <img src="img/user Image.png" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <h4>Jose<br /><span>india</span></h4>
                                </td>
                            </tr>
                            <tr>
                                <td width="60px">
                                    <div class="imgBx">
                                        <img src="img/user Image.png" alt="" />
                                    </div>
                                </td>

                                <td>
                                    <h4>Diana<br /><span>Malaysia</span></h4>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
    function toggleMenu() {
        let toggle = document.querySelector(".toggle");
        let navigation = document.querySelector(".navigation");
        let main = document.querySelector(".main");
        toggle.classList.toggle("active");
        navigation.classList.toggle("active");
        main.classList.toggle("active");
    }
    </script>
</body>

</html>