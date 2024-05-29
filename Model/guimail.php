<?php
function guimail($email, $password)
{
    require "PHPMailer-master/PHPMailer-master/src/PHPMailer.php";
    require "PHPMailer-master/PHPMailer-master/src/SMTP.php";
    require "PHPMailer-master/PHPMailer-master/src/Exception.php";
    $mail = new PHPMailer\PHPMailer\PHPMailer(true); //true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug
        $mail->isSMTP();
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'vok62879@gmail.com'; // SMTP username
        $mail->Password = 'rmlu puis tfpp hxjw';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom('vok62879@gmail.com', 'Khang Võ');
        $mail->addAddress($email);
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Gửi lại mật khẩu';
        $noidungthu = "<h2>Mật khẩu mới của bạn là: $password</h2>";
        $mail->Body = $noidungthu;
        $mail->smtpConnect(array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
        // echo 'Đã gửi mail xong';
        return true;
    } catch (Exception $e) {
        // echo 'Error: ', $mail->ErrorInfo;
        return false;
    }
}
