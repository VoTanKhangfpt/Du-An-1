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
            <form class="form" method="post" enctype="multipart/form-data" action="index.php?page=update">
                <ul class="wrapper">

                    <li style="--i:4;"><input class="input" type="text" placeholder="tên:<?php
if ( isset( $_POST['namea'] ) ) {
    echo $_POST['namea'];
} else {
    echo "";
}
?>" required="" name="updatename">

                    </li>
                    <li style="--i:3;"><input class="input" placeholder="giá:<?php
if ( isset( $_POST['pri'] ) ) {
    echo $_POST['pri'];
} else {
    echo "";
}
?>" required="" name="updateprice">
                    </li>
                    <li style="--i:2;"><input class="input" type="number" placeholder="số lượng: <?php
if ( isset( $_POST['soluong'] ) ) {
    echo $_POST['soluong'];
} else {
    echo "";
}
?>" required="" name="updatequan">
                    </li>
                    <li style="--i:1;"><input class="input" placeholder="tên hình ảnh: <?php
if ( isset( $_POST['img'] ) ) {
    echo $_POST['img'];
} else {
    echo "";
}
?>" required="" name="upload" disabled>
                        <input accept=".jpg, .jpeg, .png, .gif, .pdf" class="input" name="updatearquivo" id="arquivo"
                            type="file">

                    </li>

                    <input name="id" value="<?php echo $_POST['id'] ?>">

                    <input style="--i:0;" class="sub" type="submit" name="fix" value="update">
                </ul>
            </form>
        </div>


    </div>

</body>

</html>