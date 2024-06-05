<?php

// include_once 'Model/connect.php';
// include_once 'Model/pdo.php';
// include_once 'Model/product.php';
include_once 'Model/DAO/giohang.php';
include_once 'Model/DAO/user.php';
include_once 'Model/DAO/donhang.php';
include_once 'Model/DAO/ct_donhang.php';
// include_once 'Model/user.php';
if ($_GET['act']) {
    switch ($_GET['act']) {
        case 'checkout':
            $show_cart_thanhtoan = showcart($_SESSION['user']['id']);
            $tongtiengiohang = $_GET['tongtien_gh'];
            $ship = 20000;
            $viewName = 'page_thanhtoan';
            break;
        case 'dathang':
            if (isset($_POST['btn-submit'])) {
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $now = date('Y-m-d H:i:s');
                if ($_POST['ten'] == "" || $_POST['diachi'] == "" ||  $_POST['sodienthoai'] == "" || $_POST['email'] == "") {
                    header('location:index.php?mod=thanhtoan&act=checkout');
                    // header('location:?mod=cart&act=thanhtoan&tongtiengiohang=' . $_POST['tongtien'] . '&dathang=false');
                } else {
                    if ($_POST['payment-method'] == "momo") {
                        function execPostRequest($url, $data)
                        {
                            $ch = curl_init($url);
                            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt(
                                $ch,
                                CURLOPT_HTTPHEADER,
                                array(
                                    'Content-Type: application/json',
                                    'Content-Length: ' . strlen($data)
                                )
                            );
                            curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                            //execute post
                            $result = curl_exec($ch);
                            //close connection
                            curl_close($ch);
                            return $result;
                        }
                        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
                        $partnerCode = 'MOMOBKUN20180529';
                        $accessKey = 'klm05TvNBzhg7h7j';
                        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
                        $orderInfo = "Thanh toán qua MoMo";
                        $amount = "10000";
                        // $orderId = time() . "";
                        $orderId = rand(00, 9999);
                        $redirectUrl = "http://localhost/Git_Hub/Du-An-1/?mod=thanhtoan&act=success";
                        $ipnUrl = "http://localhost/Git_Hub/Du-An-1/?mod=thanhtoan&act=success";
                        $extraData = "";
                        $partnerCode = $partnerCode;
                        $accessKey = $accessKey;
                        $serectkey = $secretKey;
                        $orderId = $orderId;
                        $orderInfo = $orderInfo;
                        $amount = $amount;
                        $ipnUrl = $ipnUrl;
                        $redirectUrl = $redirectUrl;
                        $extraData = $extraData;
                        $requestId = time() . "";
                        $requestType = "payWithATM"; //Thanh toán với ATM
                        // $requestType = "captureWallet"; //Thanh toán với QR
                        $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
                        $signature = hash_hmac("sha256", $rawHash, $serectkey);
                        $data = array(
                            'partnerCode' => $partnerCode,
                            'partnerName' => "Test",
                            "storeId" => "MomoTestStore",
                            'requestId' => $requestId,
                            'amount' => $amount,
                            'orderId' => $orderId,
                            'orderInfo' => $orderInfo,
                            'redirectUrl' => $redirectUrl,
                            'ipnUrl' => $ipnUrl,
                            'lang' => 'vi',
                            'extraData' => $extraData,
                            'requestType' => $requestType,
                            'signature' => $signature
                        );
                        $result = execPostRequest($endpoint, json_encode($data));
                        $jsonResult = json_decode($result, true);
                        header('Location: ' . $jsonResult['payUrl']);
                    } elseif ($_POST['payment-method'] == "pay_order") {
                        $ten_kh = $_POST['ten'];
                        $diachi = $_POST['diachi'];
                        $sodienthoai = $_POST['sodienthoai'];
                        $email = $_POST['email'];
                        $ghichu = $_POST['ghichu'];
                        $id_kh =  $_SESSION['user']['id'];
                        $showcart_thanhtoan = showcart($id_kh);
                        $tongtien = (float)$_GET['tongtien'];
                        create_order($id_kh, $now, $tongtien);
                        $iddh_current = getID_order_current();
                        foreach ($showcart_thanhtoan as $thanhtoan) {
                            insert_order_detail($ten_kh, $thanhtoan['ten'], $thanhtoan['soluong'], $thanhtoan['gia_km'], $now, $diachi,  $sodienthoai, $email, $ghichu, $iddh_current['id_donhang'], $thanhtoan['idsp']);
                        }
                        deleteAll_cart($id_kh);
                        
                        header('Location: ?mod=thanhtoan&act=success&id=<?=$iddh_current?>');
                        // $idthanhtoanmoi = idthanhtoanmoi();

                        // $showthanhtoan = showthanhtoan_user($_SESSION['id_khachhang'], $idthanhtoanmoi['id_donhang']);
                        // $showthanhtoan1 = showthanhtoan_user($_SESSION['id_khachhang'], $idthanhtoanmoi['id_donhang']);
                        // $thanhtoan = array_shift($showthanhtoan1);
                        // $tongtien = 0;

                    }
                }
            }
            $viewName = "page_thanhtoan";
            break;
        case 'sendmail':
            // if (isset($_POST['btn_place_order'])) {
            //     if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['mobile']) || empty($_POST['address'])) {
            //         $thongbao = "Vui lòng điền đủ thông tin";
            //     } else {
            //         if (!isset($_SESSION['user'])) {
            //             $hoten = $_POST['name'];
            //             $email = $_POST['email'];
            //             $sdt = $_POST['mobile'];
            //             $diaChi = $_POST['address'];
            //             $matKhau = md5('Tanphuoc!2008');
            //             $matk = userInsertID($hoten, $email, $matKhau, $sdt, $diaChi);
            //         } else {
            //             $matk = $_SESSION['user']['matk'];
            //             $hoten = $_SESSION['user']['hoten'];
            //             $sdt = $_POST['mobile'];
            //             $diaChi = $_POST['address'];
            //             updateInfo($matk, $sdt, $diaChi);
            //         }
            //         $tongtien = $_SESSION['cart']['info']['total'];
            //         addOrder($matk, $tongtien, $diaChi);
            //         $madh = checkCart($idUser);
            //         foreach ($_SESSION['cart']['buy'] as $key => $item) {
            //             addOrderDetail($madh, $key, $item['qty'], $item['giakhuyenmai'], $item['sub_total']);
            //         }
            //     }
            // }

            // header("location:index.php?mod=page&act=success");

            // include_once "View/sendmail.php";

            break;
        // case 'xuly_thanhtoan':
           
        //     header('Content-type: text/html; charset=utf-8');
            
            
        //     function execPostRequest($url, $data)
        //     {
        //         $ch = curl_init($url);
        //         curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        //         curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        //         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //         curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        //                 'Content-Type: application/json',
        //                 'Content-Length: ' . strlen($data))
        //         );
        //         curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        //         curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //         //execute post
        //         $result = curl_exec($ch);
        //         //close connection
        //         curl_close($ch);
        //         return $result;
        //     }
            
            
        //     $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
            
            
        //     $partnerCode = 'MOMOBKUN20180529';
        //     $accessKey = 'klm05TvNBzhg7h7j';
        //     $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
        //     $orderInfo = "Thanh toán qua mã QR MoMo";
        //     $amount = "10000";
        //     $orderId = time() ."";
        //     $redirectUrl = "http://localhost/Git_Hub/Du-An-1/index.php?mod=thanhtoan&act=success";
        //     $ipnUrl = "https://webhook.site/b3088a6a-2d17-4f8d-a383-71389a6c600b";
        //     $extraData = "";
            
            
            
                
                
            
        //         $requestId = time() . "";
        //         $requestType = "captureWallet";
                
        //         $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
        //         $signature = hash_hmac("sha256", $rawHash, $secretKey);
        //         $data = array('partnerCode' => $partnerCode,
        //             'partnerName' => "Test",
        //             "storeId" => "MomoTestStore",
        //             'requestId' => $requestId,
        //             'amount' => $amount,
        //             'orderId' => $orderId,
        //             'orderInfo' => $orderInfo,
        //             'redirectUrl' => $redirectUrl,
        //             'ipnUrl' => $ipnUrl,
        //             'lang' => 'vi',
        //             'extraData' => $extraData,
        //             'requestType' => $requestType,
        //             'signature' => $signature);
        //         $result = execPostRequest($endpoint, json_encode($data));
        //         $jsonResult = json_decode($result, true);  // decode json
            
               
            
        //         header('Location: ' . $jsonResult['payUrl']);
            
            
        case 'success':
            if(isset($_GET['id'])){
                $iddh = $_GET['id'];
                $tongtien = 0;
                $ship = 20000;
                $listAll_ctdh = getAll_ctdh($iddh);
                $viewName = "page_thanhtoan_thanhcong";
            }
            
            break;
        default:
            $viewName = '404';
            break;
    }
    include_once 'View/page_layout.php';
}
