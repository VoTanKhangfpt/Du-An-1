<?php
require_once 'vendor/autoload.php';
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;
// use Endroid\QrCode\Writer\ValidationException;


$list = ['1', '2', '3'];


function CreateQRCode($content){
    $writer = new PngWriter();

    // Create QR code
    $qrCode = QrCode::create("https://fashionmenmodern.xyz/Git_Hub/Du-An-1/?mod=page&act=detail&id=".$content);
    $result = $writer->write($qrCode);
    $result->saveToFile('imgQR/'.$content.'.png');
}

foreach($list as $content){
    CreateQRCode($content);
}




