<?php
require_once'../backstage/houtai/include.php';
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width"/>
<meta charset="utf-8">
<head>
<link type="text/css" href="css/myProperty.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/set.css">
</head>
<body>
<div class="head">
	<p class="title">设置 
<?php
//这里是用户登录显示的用户名字 勿删！
// if(isset($_SESSION['adminName'])){
//     echo $_SESSION['adminName'];
// }elseif(isset($_COOKIE['adminName'])){
//     echo $_COOKIE['adminName'];
// }
?>
</p>
</div>
<hr class="long">
<p class="title2">账号设置</p>
<ul class="propertyList">
	<li><p class="unable">登录手机</p></li>
	<li><p>登录密码</p></li>
</ul>
<p class="title2">系统设置</p>
<ul class="propertyList">
	<li><p>关于智能通</p></li>
	<li><p class="unable">意见与反馈</p></li>
	<li><p class="unable">清理缓存</p></li>
</ul>
<ul class="propertyList connect">
	<li class="unable">用户群QQ</li>
	<li>咨询热线</li>
</ul>
<input type="button" value="退出登录" class="exit">
<a value="登录" class="exit" href="../backstage/houtai/admin/login.php">登录</a>
<a value="注册" class="exit" href="../backstage/qianduan/zhuce.php">注册</a>
</body>
</html>