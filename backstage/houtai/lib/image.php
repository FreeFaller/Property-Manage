<?php
require_once'string.php';
//通过GD库创建验证码

//$line 自定义line个数
//$pixel 自定义像素点个数
function identifying_code_Image($type = 1,$length = 4,$line = 1,$pixel = 20,$sess_name = "identifying_code"){
	//session_start();
	//创建真色彩画布
	$width = 80;
	$height = 30;
	$image = imagecreatetruecolor($width, $height);
	$white = imagecolorallocate($image, 255, 255, 255);
	$black = imagecolorallocate($image, 0, 0, 0);

	//用填充矩形填充画布
	imagefilledrectangle($image, 1, 1, $width-2, $height-2, $white);

	// 定制验证码
	$chars = buildRandomString($type,$length);
    $_SESSION[$sess_name] = $chars;
	$fontfiles = array ("SIMYOU.TTF");
	for($i = 0; $i < $length; $i ++) {
			$size = mt_rand ( 14, 18 );
			$angle = mt_rand ( - 16, 16 );
			$x = 5 + $i * $size;
			$y = mt_rand ( 20, 26 );
			$fontfile = "../fonts/" . $fontfiles [mt_rand ( 0, count ( $fontfiles ) - 1 )];
			$color = imagecolorallocate ( $image, mt_rand ( 50, 90 ), mt_rand ( 80, 200 ), mt_rand ( 90, 180 ) );
			$text = substr ( $chars, $i, 1 );
			imagettftext ( $image, $size, $angle, $x, $y, $color, $fontfile, $text );
		}
	//选择给验证码加像素点，降低易辩性
    if ($pixel) {
		for ($i=0; $i < $pixel; $i++) {
		    imagesetpixel($image, mt_rand(0,$width-1), mt_rand(0,$height-1), $black);
	    }
	}
	//给验证码加line
	if ($line) {
		for ($i=0; $i < $line; $i++) {
			$color = imagecolorallocate ( $image, mt_rand ( 50, 90 ), mt_rand ( 80, 200 ), mt_rand ( 90, 180 ) );
			imageline($image, mt_rand(0,$width-1), mt_rand(0,$height-1), mt_rand(0,$width-1), mt_rand(0,$height-1),$color);
		}
	}
	//选择给验证码加像素点，降低易辩性 END
	header("content-type:image/gif");
	imagegif($image);
	imagedestroy($image);
}


