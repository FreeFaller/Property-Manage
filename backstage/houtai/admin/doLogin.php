<?php
require_once'../include.php';
$username = $_POST['username'];
$password=md5($_POST['password']);
$identifying_code = $_POST['identifying_code'];
$identifying_code1 = $_SESSION['identifying_code'];
$autoFlag = $_POST['autoFlag'];
//strcasecmp  ( string $str1  , string $str2  )
//strtolower  ( string $string  ) 把字母字符转换成小写
//strtoupper() 把字母字符转换成大写
if (strcasecmp($identifying_code ,$identifying_code1) == 0) {
	$sql="select * from zhuce where username='{$username}' and password='{$password}'";
	$row=checkAdmin($sql);
	if($row){
		//如果选了一周内自动登陆
		if($autoFlag){
			setcookie("adminId",$row['id'],time()+7*24*3600);
			setcookie("adminName",$row['username'],time()+7*24*3600);
		}
		$_SESSION['adminName']=$row['username'];
		$_SESSION['adminId']=$row['id'];
		//header("location:index.php");
		alertMes("登陆成功","../../../webPage/set.php");
	}else{
		alertMes("登陆失败，重新登陆","login.php");
	}
}else{
	alertMes("验证码错误","login.php");
}
//$identifying_code  == $identifying_code1