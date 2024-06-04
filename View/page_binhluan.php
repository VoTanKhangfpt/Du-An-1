<?php
session_start();
include_once '../config.php';
// include_once '../Model/DAO/pdo.php';
include_once '../Model/DAO/binhluan.php';
$username = $_SESSION['user']['ten'];
if(isset($_GET['id'])){
    $idpro = $_GET['id']; 
    
}
if(isset($_POST['guibinhluan'])){
    $idpro = $_POST['idpro'];
    $noidung = $_POST['noidung'];
    // $ngaybl = date('H:i:s d/m/Y');
    
    $iduser = $_SESSION['user']['id'];
    binhluan_insert($iduser, $idpro, $noidung);
}

$dsbl = binhluan_select_all($idpro);
$html_bl = "";
foreach($dsbl as $bl){
    extract($bl);
    $html_bl .= '<p>'.$noidung.'<br>'.$username.' - ('.$thoigianbinhluan.')</p>';

}
?>


<h1>Bình luận</h1>
<?php
if (isset($_SESSION['user']) && (count($_SESSION['user']) > 0)) {
?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="hidden" name="idpro" value="<?=$idpro?>">
        <textarea name="noidung" id="" cols="100%" rows="5"></textarea><br>
        <button type="submit" name="guibinhluan">Gửi bình luận</button>
    </form>
<?php
}else{
    $_SESSION['page'] = "page_detail";
    $_SESSION['idpro'] = $_GET['idpro'];
    echo "<a href='../index.php?mod=user&act=dangnhap' target='_parent'>Bạn phải đăng nhập mới có thể bình luận</a><br>";
}
?>

<div class="dsbl">
    <?=$html_bl?>
</div>
