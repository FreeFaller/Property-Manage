<!DOCTYPE html>
<html>
<head>
	<title>登录页面</title>
	<meta charset=utf-8>
	<link rel="stylesheet" type="text/css" href="styles/login.css">
</head>
<body style="background-image:url(images/we.jpg);background-repeat:no-repeat;width:100%;height:100%">
	
	<div id="main">
	<div id="text-line" >
		<h1><font color="#00BFFF">电子科技大学</font></h1>
		<h2><font color="#00BFFF">欢迎使用智能家居系统</font></h2>
	</div>
	<div id="login">
	<form action="doLogin.php" method="post">
			<ul class="login">
				<li>用户帐号</li>
				<li><input type="text"  name="username" placeholder="请输入用户帐号" ></li>
				<li>密码</li>
				<li><input type="password"  name="password" ></li>
				<li>验证码</li>
				<li><input type="text"  name="identifying_code" ></li>
				<img src="getidentifying_code.php" alt="" />
				<li class="autoLogin"><input type="checkbox" id="a1" class="checked" name="autoFlag" value="1"><label for="a1">自动登陆(一周内自动登陆)</label></li>
				<li><input type="submit" value="登陆" class="login_btn"></li>
			</ul>
	</form>
	</div>
	</div>
</body>
<html>